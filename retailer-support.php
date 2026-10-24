<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: retailer-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];

// Fetch user data
$stmt = $conn->prepare("SELECT firstName, lastName, email_id, mobile FROM tbl_retail_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

$firstName = $user['firstName'] ?? $userName;
$email = $user['email_id'] ?? '';
$mobile = $user['mobile'] ?? '';

// Fetch company details
$comp_mobile = '1800-123-4567';
$comp_email = 'support@kseva.com';
$comp_address = 'Classic Avenue Flat No-502, Ameerpet, Hyderabad, Telangana - 500016';

$tableCheck = $conn->query("SHOW TABLES LIKE 'company_details'");
if ($tableCheck && $tableCheck->num_rows > 0) {
    $stmt = $conn->prepare("SELECT mobile, email, address FROM company_details WHERE id = 1");
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            if (!empty($row['mobile'])) $comp_mobile = $row['mobile'];
            if (!empty($row['email'])) $comp_email = $row['email'];
            if (!empty($row['address'])) $comp_address = $row['address'];
        }
        $stmt->close();
    }
}

$initials = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : 'U';

$toastMsg = $_SESSION['toast_msg'] ?? '';
$toastType = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_msg']);
unset($_SESSION['toast_type']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>Support Center | K-Seva Retailer</title>
    <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: #1a1a2e;
            min-height: 100vh;
            padding-bottom: 30px;
        }

        /* Header */
        .mobile-header {
            background: #ffffff;
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 12px 16px;
            border-bottom: 1px solid #e8ecf1;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .header-content {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-btn {
            background: #f0f2f5;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: #1a1a2e;
            transition: 0.2s;
        }

        .back-btn:active {
            background: #e4e7eb;
            transform: scale(0.95);
        }

        .back-btn i {
            font-size: 1.2rem;
        }

        .page-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px 16px 40px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border-radius: 24px;
            padding: 30px 20px;
            text-align: center;
            margin-bottom: 24px;
        }

        .hero-icon {
            font-size: 3rem;
            color: white;
            margin-bottom: 12px;
        }

        .hero-title {
            font-size: 1.3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 8px;
        }

        .hero-sub {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.8);
            line-height: 1.5;
        }

        /* Contact Cards */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        .contact-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            border: 1px solid #e8ecf1;
            cursor: pointer;
            transition: 0.2s;
        }

        .contact-card:active {
            transform: scale(0.97);
            background: #f8f9fa;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .contact-icon i {
            font-size: 1.8rem;
            color: #00b4d8;
        }

        .contact-card h4 {
            font-size: 0.9rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .contact-card p {
            font-size: 0.7rem;
            color: #a0aec0;
        }

        /* FAQ Section */
        .faq-section {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e8ecf1;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .section-header {
            padding: 16px;
            background: #f8f9fa;
            border-bottom: 1px solid #e8ecf1;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-header i {
            font-size: 1.2rem;
            color: #00b4d8;
        }

        .section-header h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .faq-item {
            border-bottom: 1px solid #f0f2f5;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: 0.2s;
        }

        .faq-question:active {
            background: #f8f9fa;
        }

        .faq-question span {
            font-size: 0.85rem;
            font-weight: 600;
            color: #1a1a2e;
        }

        .faq-question i {
            color: #a0aec0;
            font-size: 0.8rem;
            transition: 0.2s;
        }

        .faq-question.active i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 16px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background: #fafbfc;
        }

        .faq-answer.show {
            padding: 0 16px 16px 16px;
            max-height: 300px;
        }

        .faq-answer p {
            font-size: 0.75rem;
            color: #6c757d;
            line-height: 1.6;
        }

        /* Contact Form Section */
        .form-section {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e8ecf1;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .form-group {
            padding: 16px;
            border-bottom: 1px solid #e8ecf1;
        }

        .form-group label {
            display: block;
            font-size: 0.7rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            background: #f8f9fa;
            border: 1px solid #e8ecf1;
            border-radius: 12px;
            font-size: 0.85rem;
            font-family: 'Inter', sans-serif;
            transition: 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #00b4d8;
            box-shadow: 0 0 0 3px rgba(0,180,216,0.1);
        }

        .form-group textarea {
            resize: none;
        }

        .submit-btn {
            width: calc(100% - 32px);
            margin: 16px;
            padding: 14px;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border: none;
            border-radius: 28px;
            color: white;
            font-weight: 700;
            font-size: 0.9rem;
            cursor: pointer;
            transition: 0.2s;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        /* Address Card */
        .address-card {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e8ecf1;
            padding: 20px;
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .address-icon {
            width: 50px;
            height: 50px;
            background: #e6f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .address-icon i {
            font-size: 1.3rem;
            color: #00b4d8;
        }

        .address-info h4 {
            font-size: 0.9rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .address-info p {
            font-size: 0.7rem;
            color: #6c757d;
            line-height: 1.5;
        }

        /* Toast Message */
        .toast-message {
            position: fixed;
            bottom: 30px;
            left: 16px;
            right: 16px;
            background: #1a1a2e;
            padding: 12px 16px;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            color: white;
            z-index: 2000;
            max-width: 500px;
            margin: 0 auto;
            animation: slideUp 0.3s ease forwards;
        }

        .toast-message.success {
            border-left: 4px solid #2eb84b;
        }

        .toast-message.error {
            border-left: 4px solid #ff6b6b;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(20px);
            }
        }
    </style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="page-title">Support Center</span>
        <div style="width: 40px;"></div>
    </div>
</div>

<div class="container">
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-icon">
            <i class="fas fa-headset"></i>
        </div>
        <h1 class="hero-title">How can we help you?</h1>
        <p class="hero-sub">Our support team is here to assist you with any questions or issues</p>
    </div>

    <!-- Contact Options Grid -->
    <div class="contact-grid">
        <div class="contact-card" onclick="callSupport()">
            <div class="contact-icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <h4>Call Us</h4>
            <p><?= htmlspecialchars($comp_mobile) ?></p>
        </div>
        <div class="contact-card" onclick="emailSupport()">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <h4>Email Us</h4>
            <p><?= htmlspecialchars($comp_email) ?></p>
        </div>
        <div class="contact-card" onclick="whatsappSupport()">
            <div class="contact-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <h4>WhatsApp</h4>
            <p>Chat with us</p>
        </div>
        <div class="contact-card" onclick="liveChat()">
            <div class="contact-icon">
                <i class="fas fa-comment-dots"></i>
            </div>
            <h4>Live Chat</h4>
            <p>9 AM - 9 PM</p>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="section-header">
            <i class="fas fa-question-circle"></i>
            <h3>Frequently Asked Questions</h3>
        </div>
        
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>How do I check my wallet balance?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>You can check your wallet balance by going to the "Wallet & Commission" section from the sidebar menu or by visiting the Wallet page directly. Your current balance is displayed at the top.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>How do I withdraw my earnings?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>To withdraw your earnings, go to the Wallet page and click on the "Withdraw" button. Minimum withdrawal amount is ₹500. The amount will be credited to your registered bank account within 3-5 business days.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>How long does it take to get a refund?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Refunds are typically processed within 5-7 working days after approval. The time may vary depending on your bank's processing time. You will receive an email confirmation once the refund is initiated.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>How do I change my password?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>You can change your password by going to Settings → Edit Profile, then enter your new password in the password fields and click Save Changes.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>What should I do if my transaction fails?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>If a transaction fails but money is deducted, please wait for 5-7 working days as the amount will be automatically reversed. If not reversed, contact our support team with your transaction ID.</p>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="form-section">
        <div class="section-header">
            <i class="fas fa-pen-alt"></i>
            <h3>Send us a Message</h3>
        </div>
        
        <form id="supportForm" onsubmit="sendMessage(event)">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" id="userName" value="<?= htmlspecialchars($firstName) ?>" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="userEmail" value="<?= htmlspecialchars($email) ?>" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" id="userMobile" value="<?= htmlspecialchars($mobile) ?>" placeholder="Enter your mobile number">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" id="subject" placeholder="What is this regarding?">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea id="message" rows="4" placeholder="Describe your issue in detail..."></textarea>
            </div>
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i> Send Message
            </button>
        </form>
    </div>

    <!-- Office Address -->
    <div class="address-card">
        <div class="address-icon">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="address-info">
            <h4>Corporate Office</h4>
            <p><?= htmlspecialchars($comp_address) ?></p>
        </div>
    </div>

    <!-- Business Hours -->
    <div class="address-card">
        <div class="address-icon">
            <i class="fas fa-clock"></i>
        </div>
        <div class="address-info">
            <h4>Business Hours</h4>
            <p>Monday - Saturday: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
        </div>
    </div>

</div>

<script>
    // FAQ Toggle
    function toggleFaq(element) {
        const answer = element.nextElementSibling;
        const isActive = element.classList.contains('active');
        
        // Close all other FAQs
        document.querySelectorAll('.faq-question').forEach(q => {
            if (q !== element && q.classList.contains('active')) {
                q.classList.remove('active');
                q.nextElementSibling.classList.remove('show');
            }
        });
        
        // Toggle current FAQ
        if (!isActive) {
            element.classList.add('active');
            answer.classList.add('show');
        } else {
            element.classList.remove('active');
            answer.classList.remove('show');
        }
    }

    // Contact Functions
    function callSupport() {
        window.location.href = 'tel:<?= htmlspecialchars($comp_mobile) ?>';
    }

    function emailSupport() {
        window.location.href = 'mailto:<?= htmlspecialchars($comp_email) ?>?subject=Support Request';
    }

    function whatsappSupport() {
        window.open('https://wa.me/<?= preg_replace('/[^0-9]/', '', $comp_mobile) ?>', '_blank');
    }

    function liveChat() {
        showToast('Live chat will be available soon. Please call or email for immediate support.');
    }

    // Send Message
    function sendMessage(event) {
        event.preventDefault();
        
        const name = document.getElementById('userName').value;
        const email = document.getElementById('userEmail').value;
        const mobile = document.getElementById('userMobile').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        if (!name || !email || !message) {
            showToast('Please fill in all required fields', 'error');
            return;
        }
        
        // Here you would typically send the data to your server
        // For now, just show a success message
        const mailtoLink = `mailto:<?= htmlspecialchars($comp_email) ?>?subject=${encodeURIComponent(subject || 'Support Request')}&body=${encodeURIComponent(
            `Name: ${name}\nEmail: ${email}\nMobile: ${mobile}\n\nMessage:\n${message}`
        )}`;
        
        window.location.href = mailtoLink;
        showToast('Opening email client...', 'success');
        
        // Clear form
        document.getElementById('subject').value = '';
        document.getElementById('message').value = '';
    }

    // Toast Function
    function showToast(message, type = 'success') {
        let toast = document.querySelector('.toast-message');
        if (toast) toast.remove();
        toast = document.createElement('div');
        toast.className = `toast-message ${type}`;
        toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px;"></i> ' + message;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.animation = 'slideDown 0.3s ease forwards';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    <?php if ($toastMsg): ?>
    showToast("<?= addslashes($toastMsg) ?>", "<?= $toastType ?>");
    <?php endif; ?>
</script>

</body>
</html>