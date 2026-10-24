<?php 
session_start();
include('includes/dbConfig.php');

// Fetch user data for header
$userId = $_SESSION['user_id'] ?? null;
$userName = $_SESSION['user_name'] ?? 'Guest';
$userEmail = $_SESSION['user_email'] ?? '';

if ($userId) {
    $stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_retail_user WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $userData = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        
        $firstName = $userData['firstName'] ?? $userName;
        $lastName  = $userData['lastName']  ?? '';
        $fullName  = trim($firstName . ' ' . $lastName) ?: $userName;
        $email     = $userData['email_id']  ?? $userEmail;
        $initials = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : 'U';
    } else {
        $firstName = $userName;
        $fullName = $userName;
        $email = $userEmail;
        $initials = 'U';
    }
} else {
    $firstName = 'Guest';
    $fullName = 'Guest User';
    $email = 'guest@kseva.com';
    $initials = 'G';
}

// Fetch company details
$comp_mobile = '1800-123-4567';
$comp_email = 'support@kseva.com';
$tableCheck = $conn->query("SHOW TABLES LIKE 'company_details'");
if ($tableCheck && $tableCheck->num_rows > 0) {
    $stmt = $conn->prepare("SELECT mobile, email FROM company_details WHERE id = 1");
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            if (!empty($row['mobile'])) $comp_mobile = $row['mobile'];
            if (!empty($row['email'])) $comp_email = $row['email'];
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#003b66">
    <title>Refund Policy | K-Seva – Cancellation & Refund Policy</title>
    <meta name="description" content="K-Seva Refund Policy: Learn about cancellation terms, refund conditions, non-refundable charges, payment failures, and policy updates.">
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
            overflow-x: hidden;
            padding-bottom: 70px;
        }

        /* Mobile Container */
        .mobile-container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            min-height: 100vh;
            position: relative;
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
            justify-content: space-between;
            align-items: center;
            position: relative;
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
            z-index: 10;
        }

        .back-btn:active {
            transform: scale(0.95);
            background: #e8ecf1;
        }

        .back-btn i {
            font-size: 1.2rem;
            color: #1a1a2e;
        }

        .logo-area {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-area img {
            height: 35px;
            width: auto;
        }

        /* Hero Section */
        .refund-hero {
            background: linear-gradient(135deg, #003b66, #001e3c);
            padding: 40px 20px;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 600;
            color: #fed109;
            margin-bottom: 16px;
        }

        .hero-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
            margin-bottom: 12px;
        }

        .hero-sub {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.8);
            line-height: 1.5;
        }

        .trust-badges {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .trust-badge {
            background: rgba(255,255,255,0.1);
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.7rem;
            color: white;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: #ffffff;
            padding: 12px 16px;
            border-bottom: 1px solid #e8ecf1;
        }

        .breadcrumb-inner {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.75rem;
        }

        .breadcrumb-inner a {
            color: #00b4d8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .breadcrumb-inner span {
            color: #6c757d;
        }

        /* Content */
        .refund-content {
            padding: 20px 16px;
        }

        .policy-block {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e8ecf1;
        }

        .policy-block:last-child {
            border-bottom: none;
        }

        .policy-block h2 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 15px;
        }

        .policy-block h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 12px;
            padding-left: 10px;
            border-left: 3px solid #00b4d8;
        }

        .policy-block p {
            font-size: 0.85rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 12px;
        }

        .policy-block ul, .policy-block ol {
            margin: 10px 0 10px 20px;
        }

        .policy-block li {
            font-size: 0.85rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 6px;
        }

        /* Contact Strip */
        .contact-strip {
            background: linear-gradient(135deg, #003b66, #001e3c);
            padding: 30px 20px;
            margin-top: 10px;
        }

        .contact-strip h3 {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .contact-strip p {
            color: rgba(255,255,255,0.7);
            font-size: 0.8rem;
            margin-bottom: 20px;
        }

        .contact-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .contact-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255,255,255,0.1);
            padding: 12px 20px;
            border-radius: 50px;
            text-decoration: none;
            flex: 1;
            min-width: 140px;
        }

        .contact-btn i {
            font-size: 1.3rem;
            color: #fed109;
        }

        .contact-btn span {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.6);
        }

        .contact-btn strong {
            font-size: 0.85rem;
            color: white;
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255,255,255,0.98);
            border-top: 1px solid #e8ecf1;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 8px 16px 20px;
            z-index: 100;
            max-width: 500px;
            margin: 0 auto;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 30px;
            font-family: 'Inter', sans-serif;
            flex: 1;
            max-width: 80px;
            text-decoration: none;
        }

        .nav-item i {
            font-size: 1.3rem;
            color: #a0aec0;
        }

        .nav-item span {
            font-size: 0.65rem;
            font-weight: 600;
            color: #a0aec0;
        }

        .nav-item.active i,
        .nav-item.active span {
            color: #00b4d8;
        }

        /* Toast */
        .toast-message {
            position: fixed;
            bottom: 80px;
            left: 16px;
            right: 16px;
            background: #1a1a2e;
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            color: white;
            z-index: 2000;
            max-width: 500px;
            margin: 0 auto;
            animation: fadeUp 0.3s ease;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Header with Back Button -->
    <div class="mobile-header">
        <div class="header-content">
            <button class="back-btn" onclick="window.location.href='retailer-dashboard'"><i class="fas fa-arrow-left"></i></button>
            <div class="logo-area">
                <img src="assets/logo/kashpe.png" alt="K-Seva" onerror="this.style.display='none'">
            </div>
            <div style="width: 40px;"></div>
        </div>
    </div>

    <!-- Main Mobile Container -->
    <div class="mobile-container">
        
        <!-- Hero Section -->
        <div class="refund-hero">
            <div class="hero-badge">
                <i class="fas fa-undo-alt"></i> MONEY BACK GUARANTEE
            </div>
            <h1 class="hero-title">Refund Policy</h1>
            <p class="hero-sub">Clear, fair and transparent guidelines on cancellations, refunds and payment-related concerns.</p>
            <div class="trust-badges">
                <span class="trust-badge"><i class="fas fa-calendar-times"></i> Easy Cancellation</span>
                <span class="trust-badge"><i class="fas fa-hand-holding-usd"></i> Secure Refunds</span>
                <span class="trust-badge"><i class="fas fa-shield-alt"></i> No Hidden Charges</span>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
                <a href="retailer-dashboard"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
                <span>Refund Policy</span>
            </div>
        </div>

        <!-- Refund Content -->
        <div class="refund-content">
            
            <div class="policy-block">
                <h2>Cancellation & Refund Policy</h2>
                <p>Welcome to K-Seva. This policy explains the terms related to cancellations, refunds, and payment-related concerns for services provided through our platform. By using our services, you agree to the terms outlined below.</p>
            </div>

            <div class="policy-block">
                <h3>Cancellation Terms</h3>
                <p>Users can request cancellation only before the requested service has entered the processing stage. Once a service request has been submitted, verified, or forwarded for execution, cancellation may not be possible. Approval of cancellation requests will depend on the current status of the service.</p>
                <p>To request a cancellation, please contact our support team immediately after placing the order. K-Seva reserves the right to decline cancellation requests if the service has already progressed beyond the initial stage.</p>
            </div>

            <div class="policy-block">
                <h3>Refund Conditions</h3>
                <p>Refunds may be issued in the following situations:</p>
                <ul>
                    <li>✅ A payment was accidentally made more than once for the same service.</li>
                    <li>✅ The payment was successful, but the service request was not initiated.</li>
                    <li>✅ The requested service could not be completed because of technical issues from our side.</li>
                    <li>✅ A cancellation request was accepted before service processing started.</li>
                </ul>
            </div>

            <div class="policy-block">
                <h3>Charges That Cannot Be Refunded</h3>
                <p>The following payments are generally non-refundable:</p>
                <ul>
                    <li>❌ Government or statutory fees.</li>
                    <li>❌ Charges collected by payment gateways or banks.</li>
                    <li>❌ Third-party processing costs.</li>
                    <li>❌ Services that have already been completed or partially processed.</li>
                    <li>❌ Documentation or consultation charges after work commencement.</li>
                </ul>
            </div>

            <div class="policy-block">
                <h3>Refund Procedure</h3>
                <p>If you believe you are eligible for a refund, please follow the steps below:</p>
                <ol>
                    <li>📞 Contact our support team with your payment details (order ID, transaction reference, date of payment).</li>
                    <li>📝 Clearly mention the reason for the refund request along with any supporting evidence.</li>
                    <li>🔍 Our team will verify the request and notify you of approval or rejection within 5–7 working days.</li>
                    <li>💰 After verification and approval, the refund amount will be credited to the original payment method used during transaction.</li>
                    <li>⏱️ Refund processing timelines may vary depending on banking procedures and payment providers, usually taking 7 to 10 working days.</li>
                </ol>
                <p style="margin-top: 10px;"><i class="fas fa-info-circle" style="color: #00b4d8; margin-right: 6px;"></i> Please ensure you provide accurate information to avoid delays in processing your refund.</p>
            </div>

            <div class="policy-block">
                <h3>Payment Failure or Transaction Issues</h3>
                <p>If money is deducted from the customer's account but the service confirmation is not received:</p>
                <ul>
                    <li>⏰ Customers are advised to wait for a short period, as banks may automatically reverse failed transactions (usually within 5–7 working days).</li>
                    <li>📞 If the amount is not reversed within a reasonable time (e.g., 10 days), users may contact customer support for assistance.</li>
                    <li>🛡️ K-Seva will verify the transaction status with the payment gateway and facilitate reversal or manual refund if the amount was captured but service not delivered.</li>
                </ul>
            </div>

            <div class="policy-block">
                <h3>Policy Updates</h3>
                <p>K-Seva may revise or update this policy at any time without prior notice. Any changes will be published on the website. The updated version will be effective immediately upon posting. We encourage users to review this page periodically for any modifications regarding refunds or cancellations.</p>
            </div>

            <div class="policy-block">
                <h3>Contact Support</h3>
                <p>For assistance regarding refunds, cancellations, or payment concerns, please contact us through the following channels:</p>
                <ul>
                    <li>📞 <strong>Phone:</strong> <?= htmlspecialchars($comp_mobile) ?></li>
                    <li>✉️ <strong>Email:</strong> <?= htmlspecialchars($comp_email) ?></li>
                    <li>⏰ <strong>Time:</strong> Monday - Saturday (10:00 AM – 6:00 PM)</li>
                </ul>
            </div>

        </div>

        <!-- Contact Strip -->
        <div class="contact-strip">
            <h3><i class="fas fa-question-circle"></i> Need Help with Your Refund?</h3>
            <p>Our refund support team is ready to assist you with any payment or cancellation queries.</p>
            <div class="contact-buttons">
                <a href="tel:<?= htmlspecialchars($comp_mobile) ?>" class="contact-btn">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <span>Call Us</span><br>
                        <strong><?= htmlspecialchars($comp_mobile) ?></strong>
                    </div>
                </a>
                <a href="mailto:<?= htmlspecialchars($comp_email) ?>" class="contact-btn">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <span>Email Us</span><br>
                        <strong><?= htmlspecialchars($comp_email) ?></strong>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
        <a href="retailer-dashboard" class="nav-item"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="search.php" class="nav-item"><i class="fas fa-search"></i><span>Search</span></a>
        <a href="history.php" class="nav-item"><i class="fas fa-history"></i><span>History</span></a>
       
    </div>

    <script>
        function showToast(message) {
            let toast = document.querySelector('.toast-message');
            if (toast) toast.remove();
            toast = document.createElement('div');
            toast.className = 'toast-message';
            toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 2000);
        }

        function setActiveNav() {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => item.classList.remove('active'));
        }
        setActiveNav();
    </script>
</body>
</html>