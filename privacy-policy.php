<?php 
session_start();
include('includes/dbConfig.php');

// Fetch user data for header
$userId = $_SESSION['user_id'] ?? null;
$userName = $_SESSION['user_name'] ?? 'Guest';
$userEmail = $_SESSION['user_email'] ?? '';

if ($userId) {
    $stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_retail_user WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $userData = $stmt->get_result()->fetch_assoc();
    
    $firstName = $userData['firstName'] ?? $userName;
    $lastName  = $userData['lastName']  ?? '';
    $fullName  = trim($firstName . ' ' . $lastName) ?: $userName;
    $email     = $userData['email_id']  ?? $userEmail;
    
    $firstLetter = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : '';
    $initials = !empty($firstLetter) ? $firstLetter : (isset($userName) ? strtoupper(substr($userName, 0, 1)) : "U");
} else {
    $firstName = 'Guest';
    $fullName = 'Guest User';
    $email = 'guest@kseva.com';
    $initials = 'G';
}

// Fetch company details from database
$comp_mobile = '';
$comp_email = '';
$stmt = $conn->prepare("SELECT mobile, email FROM company_details WHERE id = 1");
if ($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $comp_mobile = $row['mobile'];
        $comp_email = $row['email'];
    }
    $stmt->close();
}
if (empty($comp_mobile)) $comp_mobile = '1800-123-4567';
if (empty($comp_email)) $comp_email = 'support@kseva.com';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#003b66">
    <title>Privacy Policy | K-Seva – Data Protection & Security</title>
    <meta name="description"
        content="K-Seva Privacy Policy: How we collect, use, share, and protect your personal data. Your rights, consent, and security measures.">
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

        /* Mobile Container - Centers content */
        .mobile-container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            min-height: 100vh;
            position: relative;
        }

        /* Header */
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

.menu-btn {
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

.menu-btn i {
    font-size: 1.2rem;
    color: #1a1a2e;
}

.logo-area {
    position: absolute;
    left: 30%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    gap: 8px;
}

.logo-area img {
    height: 35px;
    width: auto;
}

.profile-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #7CC913;
    padding: 4px 10px 4px 4px;
    border-radius: 50px;
    border: 1px solid #e8ecf1;
    cursor: pointer;
    z-index: 10;
}

.avatar-small {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: linear-gradient(135deg, #00b4d8, #023e8a);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.8rem;
    color: white;
}

.profile-btn span {
    font-size: 0.75rem;
    font-weight: 500;
    color: #1a1a2e;
    max-width: 80px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

        .avatar-small {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.8rem;
            color: white;
        }

        .profile-btn span {
            font-size: 0.75rem;
            font-weight: 500;
            color: #1a1a2e;
            max-width: 80px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Hero Section */
        .privacy-hero {
            background: linear-gradient(135deg, #003b66, #001e3c);
            padding: 40px 20px;
            text-align: center;
            position: relative;
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
        .privacy-content {
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

        /* Sidebar */
        .sidebar-modal {
            display: none;
            position: fixed;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(4px);
            z-index: 1000;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .sidebar-modal.show { display: flex; }

        .sidebar-content {
            background: white;
            width: 280px;
            height: 100%;
            padding: 24px;
            animation: slideRight 0.3s;
            overflow-y: auto;
        }

        @keyframes slideRight {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e8ecf1;
        }

        .sidebar-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
        }

        .sidebar-user h4 {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .sidebar-user p {
            font-size: 0.7rem;
            color: #6c757d;
        }

        .sidebar-menu-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 12px;
            color: #4a5568;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            background: transparent;
            border: none;
            text-align: left;
        }

        .sidebar-menu-item:hover {
            background: #f0f2f5;
        }

        .sidebar-menu-item i {
            width: 24px;
            color: #00b4d8;
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

    <!-- Header -->
    <div class="mobile-header">
        <div class="header-content">
            <button class="menu-btn" onclick="openSidebar()"><i class="fas fa-bars"></i></button>
            <div class="logo-area">
                <img src="assets/logo/kashpe.png" alt="K-Seva" onerror="this.style.display='none'">
            </div>
            <div class="profile-btn" onclick="goToDashboard()">
                
                <span><?= htmlspecialchars($firstName) ?></span>
                <i class="fas fa-chevron-down" style="font-size: 0.6rem; color: #00b4d8;"></i>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar-modal" id="sidebarModal">
        <div class="sidebar-content">
            <div class="sidebar-header">
                <div class="sidebar-avatar"><?= htmlspecialchars($initials) ?></div>
                <div class="sidebar-user">
                    <h4><?= htmlspecialchars($fullName) ?></h4>
                    <p><?= htmlspecialchars($email) ?></p>
                </div>
            </div>
            <button class="sidebar-menu-item" onclick="goToDashboard()"><i class="fas fa-home"></i><span>Dashboard</span></button>
            <button class="sidebar-menu-item" onclick="window.open('https://k-seva.com/blog', '_blank');"><i class="fas fa-blog"></i><span>Blogs</span></button>
            <button class="sidebar-menu-item" onclick="window.location.href='privacy-policy'"><i class="fas fa-user-secret"></i><span>Privacy Policy</span></button>
            <button class="sidebar-menu-item" onclick="window.open('https://k-seva.com/terms', '_blank');"><i class="fas fa-balance-scale"></i><span>Terms of Use</span></button>
            <button class="sidebar-menu-item" onclick="window.location.href='support'"><i class="fas fa-headset"></i><span>Support</span></button>
            <?php if (isset($_SESSION['user_id'])): ?>
            <button class="sidebar-menu-item" onclick="logout()"><i class="fas fa-sign-out-alt"></i><span>Logout</span></button>
            <?php else: ?>
            <button class="sidebar-menu-item" onclick="window.location.href='retailer-login'"><i class="fas fa-sign-in-alt"></i><span>Login</span></button>
            <?php endif; ?>
        </div>
    </div>

    <!-- Main Mobile Container -->
    <div class="mobile-container">
        
        <!-- Hero Section -->
        <div class="privacy-hero">
            <div class="hero-badge">
                <i class="fas fa-lock"></i> YOUR PRIVACY MATTERS
            </div>
            <h1 class="hero-title">Privacy Policy</h1>
            <p class="hero-sub">We are committed to protecting your personal data.</p>
            <div class="trust-badges">
                <span class="trust-badge"><i class="fas fa-database"></i> Data Collection</span>
                <span class="trust-badge"><i class="fas fa-share-alt"></i> Sharing Practices</span>
                <span class="trust-badge"><i class="fas fa-user-check"></i> Your Rights</span>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
                <a href="retailer-dashboard"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
                <span>Privacy Policy</span>
            </div>
        </div>

        <!-- Privacy Content -->
        <div class="privacy-content">
            
            <div class="policy-block">
                <h2>Introduction</h2>
                <p>This Privacy Policy describes how K-Seva and its affiliates collect, use, share, protect or otherwise process your information/personal data through our website https://k-seva.com/ (hereinafter referred to as Platform).</p>
                <p>By visiting this Platform, providing your information or availing any product/service offered on the Platform, you expressly agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Platform.</p>
            </div>

            <div class="policy-block">
                <h3>Collection of Information</h3>
                <p>We collect your personal data when you use our Platform, services or otherwise interact with us. Some of the information that we may collect includes:</p>
                <ul>
                    <li>Name, date of birth, address, telephone/mobile number, email ID</li>
                    <li>Bank account or credit/debit card information</li>
                    <li>Transaction history and behavior on the Platform</li>
                </ul>
                <p>If you receive a call claiming to be K-Seva seeking personal data like debit/credit card PIN or passwords, please never provide such information.</p>
            </div>

            <div class="policy-block">
                <h3>Usage of Information</h3>
                <p>We use personal data to provide services you request, enhance customer experience, resolve disputes, inform you about offers, detect fraud, and conduct marketing research.</p>
            </div>

            <div class="policy-block">
                <h3>Sharing of Information</h3>
                <p>We may share your personal data with our group entities, affiliates, sellers, and business partners. We may disclose information to government agencies if required by law.</p>
            </div>

            <div class="policy-block">
                <h3>Security Precautions</h3>
                <p>We adopt reasonable security practices to protect your personal data. However, transmission of information over the internet is not completely secure.</p>
            </div>

            <div class="policy-block">
                <h3>Data Deletion and Retention</h3>
                <p>You can delete your account from your profile settings. Once deleted, you will lose access to your account.</p>
            </div>

            <div class="policy-block">
                <h3>Your Rights</h3>
                <p>You may access, rectify, and update your personal data directly through the Platform.</p>
            </div>

            <div class="policy-block">
                <h3>Consent</h3>
                <p>By visiting our Platform, you consent to the collection and processing of your information. You may withdraw consent by writing to our Grievance Officer.</p>
            </div>

            <div class="policy-block">
                <h3>Changes to this Policy</h3>
                <p>We may update this Privacy Policy. Please check periodically for updates.</p>
            </div>

            <div class="policy-block">
                <h3>Grievance Officer</h3>
                <p><strong>Name:</strong> Grievance Officer<br>
                <strong>Designation:</strong> Compliance Officer<br>
                <strong>Phone:</strong> <?= htmlspecialchars($comp_mobile) ?><br>
                <strong>Email:</strong> <?= htmlspecialchars($comp_email) ?><br>
                <strong>Time:</strong> Monday - Friday (9:00 - 18:00)</p>
            </div>

        </div>

        <!-- Contact Strip -->
        <div class="contact-strip">
            <h3><i class="fas fa-question-circle"></i> Privacy Questions?</h3>
            <p>Reach out to our Grievance Officer for any data‑related concerns.</p>
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
        <a href="retailer-dashboard" class="nav-item" id="nav-home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="explore" class="nav-item" id="nav-explore">
            <i class="fas fa-search"></i>
            <span>Explore</span>
        </a>
        <a href="history" class="nav-item" id="nav-history">
            <i class="fas fa-history"></i>
            <span>History</span>
        </a>
        <a href="earnings" class="nav-item" id="nav-earnings">
            <i class="fas fa-chart-line"></i>
            <span>Earnings</span>
        </a>
        <a href="profile" class="nav-item" id="nav-profile">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
    </div>

    <script>
        function openSidebar() {
            document.getElementById('sidebarModal').classList.add('show');
        }
        
        function closeSidebar() {
            document.getElementById('sidebarModal').classList.remove('show');
        }
        
        function goToDashboard() {
            window.location.href = 'retailer-dashboard';
        }
        
        function logout() {
            window.location.href = 'logout.php';
        }
        
        document.getElementById('sidebarModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeSidebar();
        });
        
        function setActiveNav() {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => item.classList.remove('active'));
            const profileNav = document.getElementById('nav-profile');
            if (profileNav) profileNav.classList.add('active');
        }
        setActiveNav();
    </script>
</body>

</html>