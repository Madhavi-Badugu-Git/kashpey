<?php
// No output before this line
error_reporting(0);
ini_set('display_errors', 0);
include('dbConfig.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enquiry_form'])) {
    $full_name       = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email_id        = isset($_POST['email_id']) ? trim($_POST['email_id']) : '';
    $contact_no      = isset($_POST['contact_no']) ? trim($_POST['contact_no']) : '';
    $service_category= isset($_POST['service_category']) ? trim($_POST['service_category']) : '';
    $comment         = isset($_POST['comment']) ? trim($_POST['comment']) : '';
    $page_name       = isset($_POST['page_name']) ? trim($_POST['page_name']) : '';
    $dept_email      = isset($_POST['dept_email']) ? trim($_POST['dept_email']) : '';
    $dept_mob        = isset($_POST['dept_mob']) ? trim($_POST['dept_mob']) : '';
    $token           = isset($_POST['token']) ? trim($_POST['token']) : '';

    // --- MANDATORY VALIDATION ---
    $errors = [];
    if (empty($full_name)) {
        $errors[] = "Full name is required.";
    }
    if (empty($email_id)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if (empty($contact_no)) {
        $errors[] = "WhatsApp number is required.";
    } elseif (!preg_match('/^[6-9][0-9]{9}$/', $contact_no)) {
        $errors[] = "WhatsApp number must be a 10-digit number starting with 6,7,8, or 9.";
    }
    if (empty($service_category)) {
        $errors[] = "Please select a service.";
    }

    if (!empty($errors)) {
        $errorMsg = implode("\\n", $errors);
        echo "<script>alert('$errorMsg'); window.history.back();</script>";
        exit;
    }

    // Auto-create table if missing
    $conn->query("CREATE TABLE IF NOT EXISTS `tbl_online_enquiries` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `full_name` varchar(100) DEFAULT NULL,
        `email_id` varchar(100) DEFAULT NULL,
        `contact_no` varchar(15) DEFAULT NULL,
        `service_category` varchar(200) DEFAULT NULL,
        `comment` text DEFAULT NULL,
        `page_name` varchar(100) DEFAULT NULL,
        `dept_email` varchar(100) DEFAULT NULL,
        `dept_mob` varchar(20) DEFAULT NULL,
        `token` varchar(255) DEFAULT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $sql = "INSERT INTO `tbl_online_enquiries` 
            (`full_name`, `email_id`, `contact_no`, `service_category`, `comment`, `page_name`, `dept_email`, `dept_mob`, `token`, `created_at`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "<script>alert('Database error: " . addslashes($conn->error) . "'); window.history.back();</script>";
        exit;
    }
    $stmt->bind_param("sssssssss", $full_name, $email_id, $contact_no, $service_category, $comment, $page_name, $dept_email, $dept_mob, $token);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        // Set localStorage flag and redirect to home page
        echo "<script>
            localStorage.setItem('showSuccessPopup', '1');
            window.location.href = 'home';  // Change 'home' to your actual home page URL
        </script>";
        exit;
    } else {
        echo "<script>alert('Execute error: " . addslashes($stmt->error) . "'); window.history.back();</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Your existing styles (unchanged) */
        .popup_close { background-color: red !important; color: white !important; }

        #newBannerOverlay {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,0.60);
            z-index: 99998;
        }

        #newBanner {
            display: none;
            position: fixed;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            border-radius: 12px;
            z-index: 99999;
            width: 90%;
            max-width: 860px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.35);
        }

        #closepopup {
            position: absolute; top: 10px; right: 14px;
            width: 32px; height: 32px; border-radius: 50%;
            background: red; color: #fff;
            font-size: 22px; font-weight: 700;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 10; line-height: 1;
            border: none;
        }
        #closepopup:hover { background: #c00; }

        #newBanner .cont-row {
            display: flex; flex-wrap: wrap;
            gap: 0;
        }
        #newBanner .cont-row article {
            flex: 1 1 300px;
            padding: 20px;
        }
        #newBanner .cont-row article:first-child {
            background: #f5f5f5;
            border-radius: 12px 0 0 12px;
            display: flex; align-items: center; justify-content: center;
        }
        #newBanner img.mb-15 { border-radius: 8px; }

        #newBanner .cont-box {
            width: 100%; padding: 10px 14px;
            border: 1px solid #ccc; border-radius: 8px;
            margin-bottom: 10px; font-size: 14px;
            font-family: inherit; box-sizing: border-box;
        }
        #newBanner .arrow-n {
            width: 100%; padding: 12px;
            background: linear-gradient(135deg, #29ABE2, #1B2A4A);
            color: #fff; border: none; border-radius: 50px;
            font-size: 15px; font-weight: 700; cursor: pointer;
            margin-top: 6px; font-family: inherit;
            transition: opacity .2s;
        }
        #newBanner .arrow-n:hover { opacity: .88; }
        #newBanner .heading { font-size: 40px; font-weight: 700; color: #1B2A4A; margin-bottom: 0px !important; text-align:center; padding-bottom : 5px;}

        @keyframes popupFadeIn {
            from { opacity:0; transform: translate(-50%,-46%); }
            to   { opacity:1; transform: translate(-50%,-50%); }
        }
        #newBanner.popup-visible {
            animation: popupFadeIn .35s ease forwards;
        }

        @media(max-width:600px) {
            #newBanner .cont-row article:first-child { display: none; }
            #newBanner { width: 96%; }
        }

        /* Success modal popup */
        .success-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
            z-index: 100000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .success-modal {
            background: linear-gradient(135deg, #1B2A4A, #003b66);
            padding: 30px 40px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5), 0 0 0 4px #fed109;
            animation: modalPop 0.4s cubic-bezier(0.34, 1.2, 0.64, 1);
            max-width: 90%;
            width: 400px;
        }
        .success-modal p {
            color: #fed109;
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 15px;
        }
        .success-modal .sub-text {
            color: #fff;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .success-modal button {
            background: #fed109;
            border: none;
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            color: #1B2A4A;
            cursor: pointer;
        }
        .success-modal button:hover {
            transform: scale(1.05);
            background: #ffdd44;
        }
        @keyframes modalPop {
            from { opacity: 0; transform: scale(0.9); }
            to   { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>

<!-- Overlay for main glitter popup -->
<div id="newBannerOverlay"></div>

<!-- Main glitter Popup Box -->
<div id="newBanner">
    <button id="closepopup" title="Close" aria-label="Close">×</button>

    <section class="cont-sect" style="padding: 10px 0;">
        <div class="cont-row">
            <!-- Left image -->
            <article style="padding-right: 0px;">
                <div class="add-sect">
                    <center>
                        <img src="assets/1-service.jpg" class="mb-15"
                            alt="<?php echo $comp_name ?? 'K-Seva'; ?> suvidha kendra" style="width:95%;">
                    </center>
                </div>
            </article>

            <!-- Right form -->
            <article style="padding-left: 10px;">
                <form method="post" name="franchise_form_popup" id="franchise_form_popup" enctype="multipart/form-data">
                    <input type="hidden" name="page_name"  value="Home Popup">
                    <input type="hidden" name="dept_email" value="<?php echo $comp_email ?? ''; ?>">
                    <input type="hidden" name="dept_mob"   value="<?php echo $comp_mobile ?? ''; ?>">
                    <input type="hidden" name="token"      value="09X6MOzpipINpumGv7V65Mc+Kx1S1UmUV0BqJeqGWBE=">

                    <center>
                        <div class="heading">Connect With Us</div>
                        <p style="margin:0 0 5px; font-size:20px; color:black;">Apply For <?php echo $comp_name ?? 'K-Seva'; ?></p>

                        <input type="text"  name="full_name"  id="full_name_popup"  placeholder="* Full Name"           class="cont-box" required />
                        <input type="text"  name="email_id"   id="email_id_popup"   placeholder="* Email"               class="cont-box" required />
                        <input type="text"  name="contact_no" id="contact_no_popup" placeholder="* WhatsApp Number"
                            class="cont-box" maxlength="10" onkeypress="return onlyNumbers(event);" required />
                        <select name="service_category" id="service_category_popup" class="cont-box" required>
                            <option value="">Select a Service *</option>
                            <!-- your full optgroups (unchanged) -->
                            <optgroup label="Banking &amp; Finance">
                                <option value="money_transfer">Domestic Money Transfer</option>
                                <option value="financial_services">Financial Services</option>
                                <option value="nsdl_bc">NSDL Payments Bank BC</option>
                                <option value="axis_bc">Axis Bank BC</option>
                                <option value="icici_debit">ICICI Bank Prepaid Debit Card</option>
                                <option value="loan">Loan</option>
                                <option value="bill_payment_banking">Bill Payment</option>
                                <option value="stock_broking">Stock / Share Broking &amp; Trading</option>
                                <option value="digital_gold">Digital &amp; Physical Gold</option>
                            </optgroup>
                            <optgroup label="ATM Services">
                                <option value="aadhar_atm">Aadhar ATM</option>
                                <option value="tata_atm">TATA Indicash ATM</option>
                                <option value="micro_atm">Micro ATM</option>
                                <option value="cash_at_pos">Cash@POS</option>
                            </optgroup>
                            <optgroup label="GST Services">
                                <option value="gstr10">GSTR-10</option>
                                <option value="gst_reconciliation">GST Reconciliation</option>
                                <option value="gst_registration">GST Registration + Certification</option>
                                <option value="gst_return_filing">GST Return Filing</option>
                                <option value="gst_regular">GST Return Filing (Regular)</option>
                                <option value="gst_surrendered">GST Surrendered</option>
                                <option value="gstr9">GSTR-9</option>
                                <option value="iec_amendment">IEC Amendment</option>
                                <option value="eway_bill">E-Way Bill</option>
                                <option value="gst_annual_return">GST Annual Return 9/9A</option>
                                <option value="gst_audit">GST Audit</option>
                                <option value="gst_cash_refund">GST Cash Refund</option>
                                <option value="gstr8">GSTR-8</option>
                            </optgroup>
                            <optgroup label="Bill Payment">
                                <option value="mobile_recharge">Mobile Recharge</option>
                                <option value="mobile_postpaid">Mobile Postpaid</option>
                                <option value="electricity_bill">Electricity Bill Payment</option>
                                <option value="dth_recharge">DTH Recharge</option>
                                <option value="fastag_recharge">FASTag Recharge</option>
                                <option value="lpg_booking">LPG Gas Booking</option>
                                <option value="loan_emi">Loan EMI Payment</option>
                                <option value="insurance_premium">Insurance Premium</option>
                            </optgroup>
                            <optgroup label="Tax &amp; Compliance">
                                <option value="income_tax">Income Tax Services</option>
                                <option value="company_compliance">Company Compliance</option>
                                <option value="llp_compliance">LLP Compliances</option>
                                <option value="intellectual_property">Intellectual Property Right</option>
                                <option value="iso_certification">ISO Certification</option>
                                <option value="digital_signature">Digital Signature</option>
                                <option value="legal_drafting">Legal Drafting Services</option>
                            </optgroup>
                            <optgroup label="Government G2C">
                                <option value="aadhar_correction">Aadhar Correction (OTP)</option>
                                <option value="driving_license">Driving License</option>
                                <option value="voter_id">Voter ID Application</option>
                                <option value="marriage_certificate">Marriage Certificate</option>
                                <option value="ration_card">Ration Card Application</option>
                                <option value="passport">Passport Application</option>
                                <option value="pm_scheme">PM Scheme</option>
                                <option value="eshram_card">E-Shram Card</option>
                                <option value="death_certificate">Death Certificate</option>
                                <option value="birth_certificate">Birth Certificate</option>
                                <option value="caste_certificate">Caste Certificate</option>
                                <option value="income_certificate">Income Certificate</option>
                                <option value="govt_citizen_services">Government Citizen Services</option>
                                <option value="govt_registration">Government Registration</option>
                                <option value="pan_card">Pan Card</option>
                                <option value="ayushman_card">Ayushman Bharat Card</option>
                            </optgroup>
                            <optgroup label="Business &amp; Digital">
                                <option value="start_business">Start New Business</option>
                                <option value="graphic_design">Graphic Designing</option>
                                <option value="website_design">Website Designing</option>
                                <option value="social_media_marketing">Social Media Marketing &amp; App Dev</option>
                                <option value="ev_charging">EV Charging Station</option>
                                <option value="courier">Delhivery Courier Service</option>
                                <option value="irctc_sub_agent">IRCTC Sub Agent</option>
                                <option value="tour_travel">Tour &amp; Travel Services</option>
                                <option value="pharmeasy">PharmEasy Pharma</option>
                                <option value="idfc_fastag">IDFC Fastag Agency</option>
                                <option value="insurance">Insurance</option>
                            </optgroup>
                        </select>
                        <textarea name="comment" id="comment_popup" placeholder="Comments" rows="2" class="cont-box"></textarea>

                        <input type="hidden" name="recaptcha_token" id="recaptchaToken_popup">

                        <input type="submit" class="arrow-n" name="enquiry_form" id="enquiry_form" value="📩 Submit Enquiry">
                    </center>

                    <p id="msg_popup" style="text-align:center; margin-top:8px;"></p>
                    <center><img id="gif_image_popup" src="loading.gif" style="display:none; width:50px; margin-top:8px;"></center>
                </form>
            </article>
        </div>
    </section>
</div>

<script>
function onlyNumbers(e) {
    var key = e.which || e.keyCode;
    return (key >= 48 && key <= 57);
}

function showError(inputId, message) {
    var input = document.getElementById(inputId);
    var existingError = input.parentNode.querySelector('.error-message');
    if (existingError) existingError.remove();
    var errorSpan = document.createElement('span');
    errorSpan.className = 'error-message';
    errorSpan.style.color = 'red';
    errorSpan.style.fontSize = '12px';
    errorSpan.style.display = 'block';
    errorSpan.style.marginTop = '-8px';
    errorSpan.style.marginBottom = '8px';
    errorSpan.innerText = message;
    input.parentNode.insertBefore(errorSpan, input.nextSibling);
    input.style.borderColor = 'red';
    setTimeout(function() {
        if (errorSpan.parentNode) errorSpan.remove();
        input.style.borderColor = '';
    }, 3000);
}

function clearErrors() {
    document.querySelectorAll('.error-message').forEach(el => el.remove());
    document.querySelectorAll('.cont-box').forEach(el => el.style.borderColor = '');
    document.getElementById('msg_popup').innerHTML = '';
}

function validateForm() {
    clearErrors();
    var isValid = true;
    
    var fullName = document.getElementById('full_name_popup').value.trim();
    if (fullName === '') {
        showError('full_name_popup', 'Full name is required.');
        isValid = false;
    }
    
    var email = document.getElementById('email_id_popup').value.trim();
    var emailRegExp = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email === '') {
        showError('email_id_popup', 'Email is required.');
        isValid = false;
    } else if (!emailRegExp.test(email)) {
        showError('email_id_popup', 'Please enter a valid email address.');
        isValid = false;
    }
    
    var mobile = document.getElementById('contact_no_popup').value.trim();
    var mobileRegExp = /^[6-9][0-9]{9}$/;
    if (mobile === '') {
        showError('contact_no_popup', 'WhatsApp number is required.');
        isValid = false;
    } else if (!mobileRegExp.test(mobile)) {
        showError('contact_no_popup', 'WhatsApp number must be a 10-digit number starting with 6,7,8, or 9.');
        isValid = false;
    }
    
    var service = document.getElementById('service_category_popup').value;
    if (service === '') {
        showError('service_category_popup', 'Please select a service.');
        isValid = false;
    }
    
    return isValid;
}

function showSuccessModal() {
    var overlay = document.createElement('div');
    overlay.className = 'success-modal-overlay';
    overlay.innerHTML = `
        <div class="success-modal">
            <p>✅ Your request has been submitted!</p>
            <div class="sub-text">Our team will get back to you shortly.</div>
            <button onclick="this.closest('.success-modal-overlay').remove()">OK</button>
        </div>
    `;
    document.body.appendChild(overlay);
    setTimeout(function() {
        if (overlay && overlay.parentNode) overlay.remove();
    }, 4000);
}

window.addEventListener('DOMContentLoaded', function() {
    // Check localStorage for success flag (set after form submission)
    if (localStorage.getItem('showSuccessPopup') === '1') {
        showSuccessModal();
        localStorage.removeItem('showSuccessPopup');
        // After showing success modal, still show main popup after delay
    }

    // Show main glitter popup after 2 seconds
    setTimeout(function() {
        var overlay = document.getElementById('newBannerOverlay');
        var box = document.getElementById('newBanner');
        if (overlay && box) {
            overlay.style.display = 'block';
            box.style.display = 'block';
            box.classList.add('popup-visible');
        }
    }, 2000);

    // Close functions for main popup
    function closePopup() {
        var banner = document.getElementById('newBanner');
        var overlay = document.getElementById('newBannerOverlay');
        if (banner) banner.style.display = 'none';
        if (overlay) overlay.style.display = 'none';
    }
    var closeBtn = document.getElementById('closepopup');
    if (closeBtn) closeBtn.addEventListener('click', closePopup);
    var overlayEl = document.getElementById('newBannerOverlay');
    if (overlayEl) overlayEl.addEventListener('click', closePopup);
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePopup();
    });
    
    // Intercept form submission for client-side validation
    var form = document.getElementById('franchise_form_popup');
    form.addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
        } else {
            // Allow normal submission, but show loading if needed (optional)
            document.getElementById('gif_image_popup').style.display = 'block';
            document.querySelector('.arrow-n').style.display = 'none';
        }
    });
});
</script>

</body>
</html>