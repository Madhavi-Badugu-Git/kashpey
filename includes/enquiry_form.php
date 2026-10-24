<?php
// ============================================================
// K-SEVA ENQUIRY FORM – NO SHAKING POPUP (FINAL)
// ============================================================

// Set page name dynamically if not defined
if (!isset($current_page_name) || empty($current_page_name)) {
    $current_page_name = ucwords(str_replace(['-', '_'], ' ', basename($_SERVER['SCRIPT_FILENAME'], '.php')));
}
if (!isset($current_service_category) || empty($current_service_category)) {
    $current_service_category = $current_page_name;
}

$formMessage = '';
$formStatus = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_enquiry'])) {
    $full_name   = trim(htmlspecialchars($_POST['name']));
    $email_id    = trim($_POST['email']);
    $contact_no  = trim($_POST['whatsapp']);
    $comment     = trim(htmlspecialchars($_POST['comments']));
    $page_name   = $current_page_name;
    $service_category = $current_service_category;
    $dept_email  = $comp_email ?? '';
    $dept_mob    = $comp_mobile ?? '';
    $token       = bin2hex(random_bytes(16));

    $errors = [];

    if (empty($full_name)) {
        $errors[] = "Full name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $full_name)) {
        $errors[] = "Name should contain only letters and spaces.";
    }

    if (empty($email_id)) {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } elseif (!preg_match("/@gmail\.com$/i", $email_id)) {
        $errors[] = "Only Gmail addresses are allowed (must end with @gmail.com).";
    }

    if (empty($contact_no)) {
        $errors[] = "WhatsApp number is required.";
    } elseif (!preg_match("/^[6-9][0-9]{9}$/", $contact_no)) {
        $errors[] = "Invalid Indian mobile number (10 digits, starts with 6-9).";
    }

    if (empty($errors)) {
        // Using MySQLi (assumes $conn from dbConfig.php)
        $stmt = $conn->prepare("INSERT INTO tbl_online_enquiries 
            (full_name, email_id, contact_no, service_category, comment, page_name, dept_email, dept_mob, token, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssssssss", 
            $full_name, $email_id, $contact_no, $service_category, 
            $comment, $page_name, $dept_email, $dept_mob, $token
        );
        if ($stmt->execute()) {
            $formStatus = "success";
            $formMessage = "Thank you! Our team will get back to you soon.";
        } else {
            $formStatus = "error";
            $formMessage = "Database error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $formStatus = "error";
        $formMessage = implode("<br>", $errors);
    }
}
?>

<!-- ========== HTML FORM (static, no popup markup) ========== -->
<div class="enquiry-card-wrapper">
    <div class="enquiry-inner-card">
        <!-- <div class="enquiry-header">
            <div class="enquiry-icon">
                <i class="fas fa-paper-plane"></i>
                <div class="enquiry-icon-ring"></div>
            </div>
            <div>
                <h3>Send Enquiry</h3>
                <p><?php echo htmlspecialchars($current_page_name); ?></p>
            </div>
        </div> -->
        
        <div class="cc-head">
            <div class="cc-icon"><i class="fas fa-check-circle"></i><div class="cc-icon-ring"></div></div>
            <div><h3>Send Enquiry</h3><p><?php echo htmlspecialchars($current_page_name); ?></p></div>
        </div>

        <?php if($formStatus === "error"): ?>
            <div class="enquiry-form-status error"><?php echo $formMessage; ?></div>
        <?php endif; ?>

        <form class="enquiry-form" id="enquiryForm" method="POST">
            <div class="enquiry-form-group">
                <input type="text" name="name" id="enq_name" placeholder="Your Full Name" required  oninput="this.value = this.value.replace(/[0-9]/g, '')">
                <i class="fas fa-user enquiry-field-icon"></i>
                <div class="enquiry-error-msg" id="enq_nameError"></div>
            </div>

            <div class="enquiry-form-group">
                <input type="email" name="email" id="enq_email" placeholder="Email Address" required>
                <i class="fas fa-envelope enquiry-field-icon"></i>
                <div class="enquiry-error-msg" id="enq_emailError"></div>
            </div>

            <div class="enquiry-form-group">
                <input type="tel" name="whatsapp" id="enq_mobile" placeholder="WhatsApp Number (10 digits)" maxlength="10" required>
                <i class="fab fa-whatsapp enquiry-field-icon"></i>
                <div class="enquiry-error-msg" id="enq_mobileError"></div>
            </div>

            <div class="enquiry-form-group">
                <textarea name="comments" id="enq_comments" rows="3" placeholder="Your Message / Comments"></textarea>
                <i class="fas fa-comment-dots enquiry-field-icon"></i>
            </div>

            <button type="submit" name="submit_enquiry" class="enquiry-submit-btn">
                <span>Submit Enquiry</span>
                <i class="fas fa-arrow-right"></i>
                <div class="btn-shimmer"></div>
            </button>
        </form>

        <div class="enquiry-note">
            <i class="fas fa-circle" style="color:#64ba4d;font-size:0.5rem;"></i>
            We'll reply within <span>24 hours</span>
        </div>
        <div class="enquiry-sparkle"></div>
    </div>
</div>

<style>
/* ========== FORM STYLES (stable, no shaking) ========== */
.enquiry-card-wrapper {
    margin: 0;
    padding: 0;
    font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
}
.enquiry-inner-card {
    background: #ffffff;
    border-radius: 28px;
    padding: 32px 28px;
    box-shadow: 0 20px 60px rgba(0,59,102,0.12);
    border: 1px solid rgba(35,173,235,0.12);
    position: relative;
    transition: all 0.4s;
}
.enquiry-inner-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 35px 65px rgba(0,59,102,0.2), 0 0 0 2px rgba(35,173,235,0.25);
}
.enquiry-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 28px;
    padding-bottom: 18px;
    border-bottom: 2px solid rgba(35,173,235,0.15);
}
.enquiry-icon {
    width: 54px;
    height: 54px;
    background: linear-gradient(135deg, #23adeb, #003b66);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: #fff;
    box-shadow: 0 8px 22px rgba(35,173,235,0.5);
    position: relative;
}
.enquiry-icon-ring {
    position: absolute;
    inset: -5px;
    border-radius: 24px;
    border: 2px solid rgba(35,173,235,0.4);
}
.enquiry-header h3 {
    font-size: 1.2rem;
    font-weight: 800;
    color: #003b66;
    margin-bottom: 4px;
}
.enquiry-header p {
    font-size: 0.8rem;
    color: #6b84a0;
}
.enquiry-form-group {
    position: relative;
    margin-bottom: 18px;
}
.enquiry-form-group input,
.enquiry-form-group textarea {
    width: 100%;
    padding: 14px 18px 14px 48px;
    background: #f7fafd;
    border: 1.5px solid rgba(35,173,235,0.15);
    border-radius: 16px;
    font-family: inherit;
    font-size: 0.88rem;
    color: #0a1f3c;
    transition: all 0.3s ease;
    resize: vertical;
}
.enquiry-form-group textarea {
    padding-top: 14px;
}
.enquiry-form-group input:focus,
.enquiry-form-group textarea:focus {
    outline: none;
    border-color: #23adeb;
    box-shadow: 0 0 0 3px rgba(35,173,235,0.2);
    background: #fff;
}
.enquiry-field-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #23adeb;
    font-size: 1rem;
    pointer-events: none;
}
.enquiry-form-group textarea + .enquiry-field-icon {
    top: 22px;
    transform: none;
}
.enquiry-error-msg {
    font-size: 0.7rem;
    color: #f87171;
    margin-top: 5px;
    margin-left: 10px;
    display: none;
}
.enquiry-form-group.error input,
.enquiry-form-group.error textarea {
    border-color: #f87171;
    background: #fff5f5;
}
.enquiry-submit-btn {
    width: 100%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 14px 24px;
    background: linear-gradient(135deg, #23adeb, #003b66);
    border: none;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 700;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: all 0.35s;
    box-shadow: 0 6px 20px rgba(35,173,235,0.3);
    margin-top: 6px;
}
.enquiry-submit-btn span,
.enquiry-submit-btn i {
    position: relative;
    z-index: 1;
}
.btn-shimmer {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
    transition: left 0.5s;
    z-index: 0;
}
.enquiry-submit-btn:hover .btn-shimmer {
    left: 100%;
}
.enquiry-submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(35,173,235,0.5);
    background: linear-gradient(135deg, #29c3ff, #004d87);
}
.enquiry-submit-btn i {
    transition: transform 0.3s;
}
.enquiry-submit-btn:hover i {
    transform: translateX(5px);
}
.enquiry-note {
    background: linear-gradient(135deg, rgba(100,186,77,0.08), rgba(100,186,77,0.02));
    border: 1px solid rgba(100,186,77,0.2);
    border-radius: 16px;
    padding: 12px 16px;
    font-size: 0.8rem;
    color: #2c4a6e;
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.enquiry-note span {
    font-weight: 800;
    color: #64ba4d;
}
.enquiry-sparkle {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 30%, rgba(35,173,235,0.03) 1px, transparent 1px);
    background-size: 18px 18px;
    pointer-events: none;
    border-radius: 28px;
}
.enquiry-form-status {
    padding: 12px 16px;
    border-radius: 14px;
    font-size: 0.85rem;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;
}
.enquiry-form-status.error {
    background: rgba(220,80,80,0.1);
    border: 1px solid #f87171;
    color: #b91c1c;
}
</style>

<script>
// ========== CLIENT-SIDE VALIDATION ==========
(function() {
    const form = document.getElementById('enquiryForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        let isValid = true;

        // Name
        const name = document.getElementById('enq_name').value.trim();
        const nameError = document.getElementById('enq_nameError');
        const nameGroup = document.getElementById('enq_name').closest('.enquiry-form-group');
        if (name === "") {
            nameError.innerText = "Full name is required.";
            nameError.style.display = "block";
            nameGroup.classList.add('error');
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            nameError.innerText = "Only letters and spaces allowed.";
            nameError.style.display = "block";
            nameGroup.classList.add('error');
            isValid = false;
        } else {
            nameError.style.display = "none";
            nameGroup.classList.remove('error');
        }

        // Email (@gmail.com)
        const email = document.getElementById('enq_email').value.trim();
        const emailError = document.getElementById('enq_emailError');
        const emailGroup = document.getElementById('enq_email').closest('.enquiry-form-group');
        if (email === "") {
            emailError.innerText = "Email is required.";
            emailError.style.display = "block";
            emailGroup.classList.add('error');
            isValid = false;
        } else if (!/^[^\s@]+@gmail\.com$/i.test(email)) {
            emailError.innerText = "Only Gmail addresses allowed (example@gmail.com).";
            emailError.style.display = "block";
            emailGroup.classList.add('error');
            isValid = false;
        } else {
            emailError.style.display = "none";
            emailGroup.classList.remove('error');
        }

        // Mobile (10 digits, starts 6-9)
        const mobile = document.getElementById('enq_mobile').value.trim();
        const mobileError = document.getElementById('enq_mobileError');
        const mobileGroup = document.getElementById('enq_mobile').closest('.enquiry-form-group');
        if (mobile === "") {
            mobileError.innerText = "WhatsApp number is required.";
            mobileError.style.display = "block";
            mobileGroup.classList.add('error');
            isValid = false;
        } else if (!/^[6-9][0-9]{9}$/.test(mobile)) {
            mobileError.innerText = "Enter valid 10-digit Indian mobile number (starts with 6-9).";
            mobileError.style.display = "block";
            mobileGroup.classList.add('error');
            isValid = false;
        } else {
            mobileError.style.display = "none";
            mobileGroup.classList.remove('error');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
})();

// ========== SHAKE-FREE POPUP (Appended to body, no CSS animations) ==========
<?php if($formStatus === "success"): ?>
(function() {
    // Create overlay
    var overlay = document.createElement('div');
    overlay.style.cssText = 'position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); backdrop-filter:blur(4px); z-index:9999;';
    
    // Create popup container
    var popup = document.createElement('div');
    popup.style.cssText = 'position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); background:linear-gradient(145deg,#ffffff,#f8fbff); border-radius:32px; box-shadow:0 30px 60px rgba(0,59,102,0.35); padding:32px 36px; text-align:center; z-index:10000; max-width:420px; width:90%; border-top:5px solid #64ba4d; overflow:hidden; opacity:0;';
    
    // Static glitter background (no animation)
    var glitter = document.createElement('div');
    glitter.style.cssText = 'position:absolute; top:0; left:0; width:100%; height:100%; background:repeating-linear-gradient(45deg, transparent, transparent 20px, rgba(35,173,235,0.08) 20px, rgba(35,173,235,0.08) 40px, rgba(254,209,9,0.05) 40px, rgba(254,209,9,0.05) 60px); pointer-events:none; z-index:-1;';
    popup.appendChild(glitter);
    
    // Success icon
    var icon = document.createElement('i');
    icon.className = 'fas fa-check-circle';
    icon.style.cssText = 'font-size:3.5rem; color:#64ba4d; margin-bottom:12px; filter:drop-shadow(0 0 8px rgba(100,186,77,0.5)); display:block;';
    popup.appendChild(icon);
    
    // Heading
    var heading = document.createElement('h4');
    heading.textContent = 'Thank You!';
    heading.style.cssText = 'font-size:1.4rem; font-weight:800; margin-bottom:10px; color:#003b66; font-family:"Playfair Display",serif;';
    popup.appendChild(heading);
    
    // Message
    var message = document.createElement('p');
    message.textContent = 'Our K-Seva team will get back to you shortly.';
    message.style.cssText = 'font-size:0.9rem; color:#2c4a6e; margin-bottom:24px;';
    popup.appendChild(message);
    
    // OK button (no transform on hover)
    var button = document.createElement('button');
    button.textContent = 'OK';
    button.style.cssText = 'background:linear-gradient(135deg,#23adeb,#003b66); color:white; border:none; padding:10px 28px; border-radius:50px; cursor:pointer; font-weight:bold; font-size:0.9rem; transition:background 0.2s, box-shadow 0.2s; box-shadow:0 4px 12px rgba(0,0,0,0.15);';
    button.onmouseover = function() { this.style.background = 'linear-gradient(135deg,#29c3ff,#004d87)'; this.style.boxShadow = '0 6px 14px rgba(35,173,235,0.4)'; };
    button.onmouseout = function() { this.style.background = 'linear-gradient(135deg,#23adeb,#003b66)'; this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)'; };
    popup.appendChild(button);
    
    // Add to body
    document.body.appendChild(overlay);
    document.body.appendChild(popup);
    
    // Fade-in using requestAnimationFrame (smooth, no CSS transition)
    var startTime = null;
    function fadeIn(timestamp) {
        if (!startTime) startTime = timestamp;
        var elapsed = timestamp - startTime;
        var progress = Math.min(elapsed / 300, 1); // 0.3 sec
        popup.style.opacity = progress;
        if (progress < 1) {
            requestAnimationFrame(fadeIn);
        }
    }
    requestAnimationFrame(fadeIn);
    
    // Auto-close after 4 seconds
    var autoTimer = setTimeout(closePopup, 4000);
    
    function closePopup() {
        clearTimeout(autoTimer);
        if (popup && popup.parentNode) popup.remove();
        if (overlay && overlay.parentNode) overlay.remove();
        var form = document.getElementById('enquiryForm');
        if (form) form.reset();
    }
    
    // Button click closes
    button.onclick = function(e) {
        e.preventDefault();
        closePopup();
    };
    
    // Overlay click closes
    overlay.onclick = function(e) {
        if (e.target === overlay) closePopup();
    };
})();
<?php endif; ?>
</script>