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
    <title>Refund and Cancellation Policy | K-Seva</title>
    <meta name="description" content="K-Seva Refund and Cancellation Policy: Cancellation within 3 days, damaged items, refund processing time, and exclusions for perishable items.">
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
            font-size: 1.6rem;
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
            <h1 class="hero-title">Refund and Cancellation Policy</h1>
            <p class="hero-sub">Clear guidelines on cancellations, refunds for damaged/defective items, and processing timelines.</p>
            <div class="trust-badges">
                <span class="trust-badge"><i class="fas fa-calendar-times"></i> Cancel within 3 days</span>
                <span class="trust-badge"><i class="fas fa-hand-holding-usd"></i> Refund in 5 days</span>
                <span class="trust-badge"><i class="fas fa-box-open"></i> Damaged items covered</span>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
                <a href="retailer-dashboard"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
                <span>Refund & Cancellation Policy</span>
            </div>
        </div>

        <!-- Refund Content -->
        <div class="refund-content">
            
            <div class="policy-block">
                <p>This refund and cancellation policy outlines how you can cancel or seek a refund for a product / service that you have purchased through the Platform. Under this policy:</p>
            </div>

            <div class="policy-block">
                <p>Cancellations will only be considered if the request is made within 3 days of placing the order. However, cancellation requests may not be entertained if the orders have been communicated to such sellers / merchant(s) listed on the Platform and they have initiated the process of shipping them, or the product is out for delivery. In such an event, you may choose to reject the product at the doorstep.</p>
            </div>

            <div class="policy-block">
                <p>K-Seva does not accept cancellation requests for perishable items like flowers, eatables, etc. However, the refund / replacement can be made if the user establishes that the quality of the product delivered is not good.</p>
            </div>

            <div class="policy-block">
                <p>In case of receipt of damaged or defective items, please report to our customer service team. The request would be entertained once the seller/ merchant listed on the Platform, has checked and determined the same at its own end. This should be reported within 3 days of receipt of products. In case you feel that the product received is not as shown on the site or as per your expectations, you must bring it to the notice of our customer service within 3 days of receiving the product. The customer service team after looking into your complaint will take an appropriate decision.</p>
            </div>

            <div class="policy-block">
                <p>In case of complaints regarding the products that come with a warranty from the manufacturers, please refer the issue to them.</p>
            </div>

            <div class="policy-block">
                <p>In case of any refunds approved by K-Seva, it will take 5 days for the refund to be processed to you.</p>
            </div>

        </div>

        <!-- Contact Strip -->
        <div class="contact-strip">
            <h3><i class="fas fa-question-circle"></i> Need Refund Help?</h3>
            <p>Our customer service team is ready to assist with cancellation or refund requests.</p>
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