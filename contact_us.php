<?php 
session_start();
include('includes/dbConfig.php'); ?>
<?php
// Handle form submission
$toast_message = '';
$toast_type = '';
$form_data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_enquiry'])) {
    $full_name = trim(mysqli_real_escape_string($conn, $_POST['full_name'] ?? ''));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email'] ?? ''));
    $phone = trim(mysqli_real_escape_string($conn, $_POST['phone'] ?? ''));
    $subject = trim(mysqli_real_escape_string($conn, $_POST['subject'] ?? ''));
    $message = trim(mysqli_real_escape_string($conn, $_POST['message'] ?? ''));

    $errors = [];
    if (empty($full_name)) $errors[] = 'Full name is required';
    if (empty($email)) $errors[] = 'Email address is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email address is required';
    
    // Phone validation
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    } elseif (!preg_match('/^[6-9][0-9]{9}$/', $phone)) {
        $errors[] = 'Phone number must be a 10-digit Indian mobile number starting with 6,7,8, or 9';
    }
    
    if (empty($subject)) $errors[] = 'Service is required';
    if (empty($message)) $errors[] = 'Message is required';

    if (empty($errors)) {
        $sql = "INSERT INTO tbl_online_enquiries 
                (full_name, email_id, contact_no, service_category, comment, page_name, created_at) 
                VALUES ('$full_name', '$email', '$phone', '$subject', '$message', 'contact', NOW())";
        if (mysqli_query($conn, $sql)) {
            $toast_type = 'success';
            $toast_message = 'Thank you for contacting us. We will get back to you soon.';
        } else {
            $toast_type = 'error';
            $toast_message = 'Failed to send message. Please try again later.';
        }
    } else {
        $toast_type = 'warning';
        $toast_message = implode(', ', $errors);
    }
}

// Fetch active K-Seva centers
$centers = [];
$center_count = 0;
$center_query = mysqli_query($conn, "SELECT id, center_name FROM tbl_kseva_centers WHERE status = 1 ORDER BY center_name ASC");
if ($center_query) {
    $center_count = mysqli_num_rows($center_query);
    while ($row = mysqli_fetch_assoc($center_query)) {
        $centers[] = $row['center_name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Contact Us | K-Seva</title>
    <meta name="description" content="Get in touch with K-Seva – India's trusted G2C digital service platform. We're here to help you with all your e-governance needs.">
    <link rel="canonical" href="https://k-seva.com/contact">
    <?php include('includes/header_1.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,300;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Combined CSS (includes base + contact styles) -->
    <link rel="stylesheet" href="assets/css/contact-us.css">
    <style>
        /* Additional styles for K-Seva Centers section */
        .centers-section {
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid rgba(31,168,219,0.2);
        }
        .centers-header {
            text-align: center;
            margin-bottom: 32px;
        }
        .centers-header h2 {
            font-family: 'Fraunces', serif;
            font-size: 28px;
            font-weight: 700;
            color: #0e2240;
            margin-bottom: 8px;
        }
        .centers-header p {
            color: #6b85a0;
            font-size: 14px;
        }
        .centers-count-badge {
            display: inline-block;
            background: linear-gradient(135deg, #1fa8db, #0d7aa8);
            color: #fff;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            margin-left: 10px;
        }
        .centers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .center-card {
            background: #fff;
            border-radius: 20px;
            padding: 20px 16px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e2edf5;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        }
        .center-card:hover {
            transform: translateY(-4px);
            border-color: #1fa8db;
            box-shadow: 0 12px 24px rgba(31,168,219,0.08);
        }
        .center-card i {
            font-size: 32px;
            color: #1fa8db;
            margin-bottom: 12px;
            display: block;
        }
        .center-card h4 {
            font-size: 16px;
            font-weight: 700;
            color: #0e2240;
            margin: 0;
        }
        .no-centers {
            text-align: center;
            padding: 40px;
            background: #fff;
            border-radius: 24px;
            color: #6b85a0;
        }
        @media (max-width: 992px) {
            .centers-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .centers-grid {
                grid-template-columns: 1fr;
            }
            .centers-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body class="mt-body">

<canvas id="ks-canvas" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="hero-bg-layer"></div>
    <div class="hero-inner">
        <div class="hero-badge">Need Assistance?</div>
        <h1 class="hero-title">Get in <span class="highlight">Touch</span></h1>
        <div class="hero-rule">
            <span class="hr-line"></span>
            <span class="hr-diamond"></span>
            <span class="hr-line"></span>
        </div>
        <p class="hero-sub">We’re here to answer your questions and help with your needs.</p>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="#f4f7fb"/></svg>
    </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="breadcrumb-inner">
        <a href="home"><i class="fas fa-home"></i></a>
        <i class="fas fa-chevron-right"></i>
        <span>Contact</span>
    </div>
</div>

<!-- Main Contact Area -->
<div class="contact-page">
    <div class="contact-grid">
        <!-- Contact Form -->
        <div class="contact-form-card fade-up">
            <h2 class="form-title">Send us a Message</h2>
            <p class="form-sub">Fields marked with <span class="req-star">*</span> are required.</p>
            <form method="POST" id="contactForm" novalidate>
                <div class="form-row-2">
                    <div class="input-group">
                        <label>Full Name <span class="req-star">*</span></label>
                        <input type="text" name="full_name" placeholder="Rahul Sharma" required value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>" oninput="this.value = this.value.replace(/[0-9]/g, '')">
                    </div>
                    <div class="input-group">
                        <label>Email Address <span class="req-star">*</span></label>
                        <input type="email" name="email" placeholder="rahul@example.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                    </div>
                </div>
                <div class="form-row-2">
                    <div class="input-group">
                        <label>Phone Number <span class="req-star">*</span></label>
                        <input type="tel" 
                            name="phone" 
                            class="phone-input" 
                            placeholder="9876543210" 
                            maxlength="10"
                            pattern="[6-9][0-9]{9}"
                            title="Please enter a 10-digit mobile number starting with 6,7,8,9"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)"
                            value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" 
                            required>
                        <small class="input-hint">Enter 10-digit mobile number (e.g., 9876543210)</small>
                    </div>
                    <div class="input-group">
                        <label>Services <span class="req-star">*</span></label>
                        <select name="subject" required>
                            <option value="">Select a Service *</option>
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
                    </div>
                </div>
                <div class="input-group full-width">
                    <label>Your Message <span class="req-star">*</span></label>
                    <textarea name="message" rows="5" placeholder="Describe your issue or question in detail..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                </div>
                <button type="submit" name="submit_enquiry" class="btn-submit"><i class="fas fa-paper-plane"></i> Send Message →</button>
            </form>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="contact-info-card fade-up" style="animation-delay: 0.2s">
            <div class="info-block">
                <h3><i class="fas fa-envelope"></i> Email</h3>
                <p><a href="mailto:<?php echo $comp_email; ?>"><?php echo $comp_email; ?></a></p>
            </div>
            <div class="info-block">
                <h3><i class="fas fa-phone-alt"></i> Phone</h3>
                <p><a href="tel:+91<?php echo $comp_mobile; ?>">+91<?php echo $comp_mobile; ?></a></p>
            </div>
            <div class="info-block">
                <h3><i class="fas fa-map-marker-alt"></i> Office</h3>
                <p><?php echo $comp_address; ?></p>
            </div>
            <div class="info-block support-hours">
                <h3><i class="fas fa-clock"></i> Support Hours</h3>
               <ul>
                    <li><span>Monday – Saturday</span> <span>10 AM – 7 PM</span></li>
                    <li><span>Sunday</span> <span>Closed</span></li>
                </ul>
            </div>
            <div class="info-block social">
              <h3><i class="fas fa-share-alt"></i> Connect</h3>
                 <div class="social-icons">
                      <a href="https://www.facebook.com/profile.php?id=61576815272784" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://x.com/kseva132411" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/k-seva-05498a3b7/" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      <a href="https://www.instagram.com/info.kseva/" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                  </div>
            </div>
        </div>
    </div>

    <!-- K-Seva Centers Section -->
    <div class="centers-section fade-up">
        <div class="centers-header">
            <h2>K-Seva Centers <span class="centers-count-badge"><?= $center_count ?></span></h2>
            <p>Find your nearest K-Seva center for assistance</p>
        </div>
        <?php if (!empty($centers)): ?>
        <div class="centers-grid">
            <?php foreach ($centers as $center): ?>
            <div class="center-card">
                <i class="fas fa-store"></i>
                <h4><?= htmlspecialchars($center) ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="no-centers">
            <i class="fas fa-store-slash" style="font-size: 40px; margin-bottom: 12px; display: block; color: #9ab0c6;"></i>
            <p>No centers available at the moment. Please check back later.</p>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Toast Message -->
<div id="toastMsg" class="toast-msg"></div>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* ----- GLITTER CANVAS (full animation) ----- */
(function() {
    const c = document.getElementById('ks-canvas');
    if (!c) return;
    const ctx = c.getContext('2d');
    let W, H;
    const COLS = ['#1fa8db', '#4ec8f0', '#3aad1e', '#6ed44f', '#f5c518', '#ffffff', '#0d7aa8', '#22d3c5', '#f97316', '#e84a4a'];
    const N = 90;
    let pts = [];
    function resize() { W = c.width = innerWidth; H = c.height = innerHeight; }
    resize(); addEventListener('resize', resize);
    const rnd = (a,b) => a + Math.random() * (b - a);
    const SH = ['star', 'circle', 'diamond'];
    class P {
        constructor() { this.init(true); }
        init(f) {
            this.x = rnd(0,W); this.y = f ? rnd(0,H) : H+8;
            this.r = rnd(0.5,2.2); this.a = 0; this.ma = rnd(.1,.5);
            this.s = rnd(.003,.011); this.d = 1;
            this.c = COLS[0|Math.random()*COLS.length];
            this.vx = rnd(-.1,.1); this.vy = rnd(-.3,-.05);
            this.ph = rnd(0,Math.PI*2); this.ang = rnd(0,Math.PI*2);
            this.sp = rnd(-.04,.04); this.sh = SH[0|Math.random()*SH.length];
        }
        draw(t) {
            const f = .5+.5*Math.sin(t*.004+this.ph);
            ctx.save(); ctx.globalAlpha = this.a*f;
            ctx.fillStyle = this.c; ctx.shadowBlur = this.r*9; ctx.shadowColor = this.c;
            ctx.translate(this.x,this.y); ctx.rotate(this.ang);
            ctx.beginPath();
            if(this.sh==='star') {
                for(let i=0;i<8;i++){ const a=i*Math.PI/4,l=i%2===0?this.r*3.5:this.r*1.2; i===0?ctx.moveTo(Math.cos(a)*l,Math.sin(a)*l):ctx.lineTo(Math.cos(a)*l,Math.sin(a)*l); }
            } else if(this.sh==='diamond') {
                ctx.moveTo(0,-this.r*2.8); ctx.lineTo(this.r*1.5,0); ctx.lineTo(0,this.r*2.8); ctx.lineTo(-this.r*1.5,0);
            } else {
                ctx.arc(0,0,this.r,0,Math.PI*2);
            }
            ctx.closePath(); ctx.fill(); ctx.restore();
        }
        update() {
            this.a += this.s*this.d; this.ang += this.sp;
            if(this.a >= this.ma) this.d = -1;
            if(this.a <= 0) { this.init(false); return; }
            this.x += this.vx; this.y += this.vy;
            if(this.x < -8) this.x = W+8; if(this.x > W+8) this.x = -8;
            if(this.y < -8) this.init(false);
        }
    }
    for(let i=0;i<N;i++) pts.push(new P());
    let t=0;
    (function loop() { ctx.clearRect(0,0,W,H); t++; pts.forEach(p=>{ p.update(); p.draw(t); }); requestAnimationFrame(loop); })();
})();

/* ----- FADE-UP ON SCROLL ----- */
const fadeEls = document.querySelectorAll('.fade-up');
const fadeObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            fadeObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.1 });
fadeEls.forEach(el => fadeObserver.observe(el));

/* ----- TOAST MESSAGES ----- */
<?php if (!empty($toast_message)): ?>
window.addEventListener('DOMContentLoaded', function() {
    showToast('<?= addslashes($toast_message) ?>', '<?= $toast_type ?>');
});
<?php endif; ?>

function showToast(message, type = 'success') {
    let toast = document.getElementById('toastMsg');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'toastMsg';
        toast.className = 'toast-msg';
        document.body.appendChild(toast);
    }
    const icon = type === 'success' ? 'fa-check-circle' : (type === 'error' ? 'fa-exclamation-triangle' : 'fa-info-circle');
    toast.innerHTML = `<i class="fas ${icon}"></i><span>${message}</span>`;
    toast.classList.remove('success', 'error', 'warning');
    toast.classList.add(type);
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 5000);
}
</script>
</body>
</html>