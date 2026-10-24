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

// Fetch company details
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
if (empty($comp_email)) $comp_email = 'legal@kseva.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#003b66">
    <title>Terms & Conditions | K-Seva – Legal Agreement</title>
    <meta name="description" content="Terms and Conditions for using K-Seva platform. Electronic record, user obligations, intellectual property, indemnity, governing laws.">
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

        /* Hero Section */
        .terms-hero {
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
        .terms-content {
            padding: 20px 16px;
        }

        .terms-block {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e8ecf1;
        }

        .terms-block:last-child {
            border-bottom: none;
        }

        .terms-block h2 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 15px;
        }

        .terms-block h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 12px;
            padding-left: 10px;
            border-left: 3px solid #00b4d8;
        }

        .terms-block p {
            font-size: 0.85rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 12px;
        }

        .terms-block ul, .terms-block ol {
            margin: 10px 0 10px 20px;
        }

        .terms-block li {
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

        @media (max-width:540px) {
            .contact-buttons {
                flex-direction: column;
            }
            .contact-btn {
                justify-content: center;
            }
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
            <div class="profile-btn" onclick="window.location.href='profile'">
              
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
            <button class="sidebar-menu-item" onclick="window.location.href='retailer-dashboard'"><i class="fas fa-home"></i><span>Dashboard</span></button>
            <button class="sidebar-menu-item" onclick="window.open('https://k-seva.com/blog', '_blank');"><i class="fas fa-blog"></i><span>Blogs</span></button>
            <button class="sidebar-menu-item" onclick="window.location.href='privacy-policy'"><i class="fas fa-user-secret"></i><span>Privacy Policy</span></button>
            <button class="sidebar-menu-item" onclick="window.location.href='terms'"><i class="fas fa-balance-scale"></i><span>Terms of Use</span></button>
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
        <div class="terms-hero">
            <div class="hero-badge">
                <i class="fas fa-gavel"></i> LEGAL AGREEMENT
            </div>
            <h1 class="hero-title">Terms & Conditions</h1>
            <p class="hero-sub">Electronic record under IT Act, 2000 – your use of the Platform constitutes a binding contract.</p>
            <div class="trust-badges">
                <span class="trust-badge"><i class="fas fa-file-signature"></i> Binding Contract</span>
                <span class="trust-badge"><i class="fas fa-balance-scale"></i> Governed by Indian Laws</span>
                <span class="trust-badge"><i class="fas fa-shield-alt"></i> User Obligations</span>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
                <a href="retailer-dashboard"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
                <span>Terms & Conditions</span>
            </div>
        </div>

        <!-- Terms Content -->
        <div class="terms-content">
            
            <div class="terms-block">
                <p>This document is an electronic record in terms of Information Technology Act, 2000 and rules there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.</p>
            </div>

            <div class="terms-block">
                <p>This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access or usage of domain name https://k-seva.com/ ('Website'), including the related mobile site and mobile application (hereinafter referred to as 'Platform').</p>
            </div>

            <div class="terms-block">
                <p>The Platform is owned by K-Seva, a company incorporated under the Companies Act, 1956 with its registered office at classic evenue flat no-502, ameerpet, hyderabad, telangana, 500016 (hereinafter referred to as 'Platform Owner', 'we', 'us', 'our').</p>
            </div>

            <div class="terms-block">
                <p>Your use of the Platform and services and tools are governed by the following terms and conditions ("Terms of Use") as applicable to the Platform including the applicable policies which are incorporated herein by way of reference. By mere use of the Platform, You shall be contracting with the Platform Owner and these terms and conditions including the policies constitute Your binding obligations, with Platform Owner.</p>
            </div>

            <div class="terms-block">
                <p><strong>ACCESSING, BROWSING OR OTHERWISE USING THE PLATFORM INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING.</strong></p>
            </div>

            <div class="terms-block">
                <h3>User Obligations</h3>
                <p>To access and use the Services, you agree to provide true, accurate and complete information to us during and after registration, and you shall be responsible for all acts done through the use of your registered account on the Platform.</p>
                <p>Your use of our Services and the Platform is solely and entirely at your own risk and discretion for which we shall not be liable to you in any manner.</p>
            </div>

            <div class="terms-block">
                <h3>Intellectual Property</h3>
                <p>The contents of the Platform and the Services are proprietary to us and are licensed to us. You will not have any authority to claim any intellectual property rights, title, or interest in its contents. The contents includes and is not limited to the design, layout, look and graphics.</p>
            </div>

            <div class="terms-block">
                <h3>Prohibited Activities</h3>
                <p>You agree not to use the Platform and/or Services for any purpose that is unlawful, illegal or forbidden by these Terms, or Indian or local laws that might apply to you.</p>
            </div>

            <div class="terms-block">
                <h3>Third Party Links</h3>
                <p>You agree and acknowledge that website and the Services may contain links to other third party websites. On accessing these links, you will be governed by the terms of use, privacy policy and such other policies of such third party websites.</p>
            </div>

            <div class="terms-block">
                <h3>Indemnity</h3>
                <p>You shall indemnify and hold harmless Platform Owner, its affiliates, group companies and their respective officers, directors, agents, and employees, from any claim or demand, or actions including reasonable attorney's fees, made by any third party or penalty imposed due to or arising out of Your breach of this Terms of Use.</p>
            </div>

            <div class="terms-block">
                <h3>Governing Law</h3>
                <p>These Terms and any dispute or claim relating to it, or its enforceability, shall be governed by and construed in accordance with the laws of India.</p>
                <p>All disputes arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts in Hyderabad and Telangana.</p>
            </div>

            <div class="terms-block">
                <h3>Contact Us</h3>
                <p>All concerns or communications relating to these Terms must be communicated to us using the contact information provided below.</p>
            </div>

        </div>

        <!-- Contact Strip -->
        <div class="contact-strip">
            <h3><i class="fas fa-question-circle"></i> Have Questions About These Terms?</h3>
            <p>Our legal team or support staff can assist you with any clarifications.</p>
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

    <!-- Bottom Navigation - Home, Search, History, Profile -->
    <div class="bottom-nav">
        <a href="retailer-dashboard" class="nav-item" id="nav-home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="retailer-search" class="nav-item" id="nav-explore">
            <i class="fas fa-search"></i>
            <span>Search</span>
        </a>
        <a href="retailer-history" class="nav-item" id="nav-history">
            <i class="fas fa-history"></i>
            <span>History</span>
        </a>
        
    </div>

    <script>
        function openSidebar() {
            document.getElementById('sidebarModal').classList.add('show');
        }
        
        function closeSidebar() {
            document.getElementById('sidebarModal').classList.remove('show');
        }
        
        function logout() {
            window.location.href = 'logout.php';
        }
        
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
        
        document.getElementById('sidebarModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeSidebar();
        });
        
        // Set active nav item based on current page
        function setActiveNav() {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => item.classList.remove('active'));
            // Terms page doesn't have a direct nav item, so no active set
        }
        setActiveNav();
    </script>
</body>
</html>