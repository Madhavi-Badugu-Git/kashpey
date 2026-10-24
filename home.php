<?php include('includes/dbConfig.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=yes, maximum-scale=1.0">
    <title>K-Seva | Mobile App – Banking, GST, PAN & G2C Services</title>
    <meta name="description" content="K-Seva mobile app - Access Banking, GST, PAN Card, Ayushman Bharat, and all G2C services on your phone.">
    <meta name="theme-color" content="#0a2b44">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="keywords" content="K-Seva, Digital Services, GST Registration, PAN Card Center, Banking Services">
    <meta name="author" content="K-Seva">
    
    <!-- Open Graph -->
    <meta property="og:title" content="K-Seva | Mobile App">
    <meta property="og:description" content="Access all digital services on your mobile">
    <meta property="og:type" content="website">
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f0f2f5;
            overflow-x: hidden;
        }

        /* Mobile App Container */
        .mobile-app {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
            background: #f5f9ff;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }

        /* ===== HEADER SECTION WITH MENU BUTTON ===== */
        .header-section {
            position: sticky;
            top: 0;
            z-index: 100;
            background: linear-gradient(135deg, #0b2b3f, #0a1f2e);
            padding: 12px 16px;
            color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        /* Status Bar */
        .status-time {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 12px;
            opacity: 0.9;
        }

        /* Header with Menu Button, Logo and Icons */
        .app-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* Menu Button - Hamburger Icon */
        .menu-btn {
            background: rgba(255,255,255,0.15);
            border: none;
            color: white;
            font-size: 1.3rem;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
            width: 38px;
            height: 38px;
        }

        .menu-btn:active {
            background: rgba(255,255,255,0.3);
            transform: scale(0.95);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .nav-logo img {
            height: 38px;
            width: auto;
            background: white;
            border-radius: 10px;
            padding: 4px;
        }

        .header-icons {
            display: flex;
            gap: 16px;
        }

        .header-icons i {
            font-size: 1.2rem;
            color: white;
            cursor: pointer;
        }

        /* ===== SIDEBAR MENU (SLIDE FROM LEFT) ===== */
        .sidebar-menu {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100%;
            background: linear-gradient(180deg, #0b2b3f, #0a1f2e);
            z-index: 200;
            transition: left 0.3s ease;
            box-shadow: 2px 0 15px rgba(0,0,0,0.2);
            padding: 20px 0;
        }

        .sidebar-menu.open {
            left: 0;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }

        .sidebar-header .sidebar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-header .sidebar-logo img {
            height: 45px;
            width: auto;
            background: white;
            border-radius: 12px;
            padding: 5px;
        }

        .sidebar-header .sidebar-logo span {
            font-size: 1.3rem;
            font-weight: 800;
            color: white;
        }

        .sidebar-user {
            padding: 15px 20px;
            background: rgba(255,255,255,0.08);
            margin: 0 15px 20px 15px;
            border-radius: 15px;
        }

        .sidebar-user h4 {
            color: white;
            font-size: 1rem;
            margin-bottom: 4px;
        }

        .sidebar-user p {
            color: rgba(255,255,255,0.7);
            font-size: 0.7rem;
        }

        .sidebar-menu-items {
            list-style: none;
            padding: 0 15px;
        }

        .sidebar-menu-items li {
            margin-bottom: 8px;
        }

        .sidebar-menu-items li a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 15px;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-size: 0.9rem;
            transition: 0.2s;
        }

        .sidebar-menu-items li a i {
            width: 22px;
            font-size: 1.1rem;
        }

        .sidebar-menu-items li a:active {
            background: rgba(255,255,255,0.15);
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 150;
            display: none;
        }

        .sidebar-overlay.open {
            display: block;
        }

        /* ===== WELCOME SECTION ===== */
        .welcome-section {
            background: white;
            margin: 16px;
            padding: 20px;
            border-radius: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .welcome-section h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a2c3e;
            margin-bottom: 4px;
        }

        .welcome-section p {
            font-size: 0.8rem;
            color: #666;
        }

        /* Search Bar */
        .search-bar {
            background: white;
            margin: 0 16px 16px 16px;
            padding: 12px 16px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            border: 1px solid #eee;
        }

        .search-bar i {
            color: #0f5c7a;
            font-size: 1rem;
        }

        .search-bar input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 0.85rem;
            background: transparent;
        }

        /* Scrollable content */
        .scroll-content {
            padding-bottom: 75px;
        }

        /* Section Header */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 16px;
            margin: 20px 0 12px 0;
        }

        .section-header h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #1a2c3e;
        }

        .section-header a {
            font-size: 0.7rem;
            color: #0f5c7a;
            text-decoration: none;
            font-weight: 500;
        }

        /* Icon Grid - 4 columns */
        .icon-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            background: white;
            padding: 16px;
            margin: 0 16px;
            border-radius: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }

        .icon-tile {
            text-align: center;
            cursor: pointer;
            transition: transform 0.1s ease;
        }

        .icon-tile:active {
            transform: scale(0.95);
        }

        .icon-circle {
            background: #f0f2f5;
            width: 50px;
            height: 50px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 8px;
        }

        .icon-circle i {
            font-size: 1.3rem;
            color: #0f5c7a;
        }

        .icon-tile span {
            font-size: 0.65rem;
            font-weight: 500;
            color: #444;
            display: block;
        }

        /* Services Grid - 2 columns */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            padding: 0 16px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            transition: transform 0.1s ease;
        }

        .service-card:active {
            transform: scale(0.97);
        }

        .service-card .icon-wrap i {
            font-size: 1.8rem;
            color: #0f5c7a;
        }

        .service-card span {
            font-size: 0.75rem;
            font-weight: 600;
            display: block;
            margin-top: 8px;
            color: #1a2c3e;
        }

        /* Weather Bar */
        .weather-bar {
            background: white;
            margin: 16px;
            padding: 12px 16px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .weather-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .weather-info i {
            font-size: 1.3rem;
            color: #fdbb4d;
        }

        .temp {
            font-size: 0.9rem;
            font-weight: 600;
        }

        .condition {
            font-size: 0.7rem;
            color: #666;
        }

        .language-selector {
            display: flex;
            gap: 8px;
            background: #f0f2f5;
            padding: 5px 12px;
            border-radius: 20px;
        }

        .language-selector span {
            font-size: 0.7rem;
            font-weight: 500;
            cursor: pointer;
        }

        /* Welcome Split Section */
        .welcome-split {
            padding: 24px 16px;
            background: #fff;
            margin-top: 16px;
        }

        .welcome-image img {
            width: 100%;
            border-radius: 20px;
            margin-bottom: 16px;
        }

        .welcome-title {
            font-size: 1.4rem;
            font-weight: 800;
        }

        .welcome-subtitle {
            font-size: 0.85rem;
            color: #0f5c7a;
            margin: 5px 0 10px;
        }

        .welcome-description {
            font-size: 0.8rem;
            color: #555;
            line-height: 1.5;
        }

        .welcome-contact {
            display: flex;
            gap: 16px;
            margin: 16px 0;
            flex-wrap: wrap;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .contact-item i {
            font-size: 1rem;
            color: #0f5c7a;
        }

        .contact-item a {
            color: #0f5c7a;
            text-decoration: none;
            font-size: 0.8rem;
        }

        .welcome-stats {
            text-align: center;
            margin: 16px 0;
        }

        .stat {
            display: inline-block;
            margin: 0 12px;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0f5c7a;
        }

        .stat-label {
            font-size: 0.65rem;
            color: #666;
        }

        .stat-divider {
            display: inline-block;
            width: 1px;
            height: 25px;
            background: #ccc;
            vertical-align: middle;
        }

        .welcome-btn {
            display: inline-block;
            background: #0f5c7a;
            color: white;
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.8rem;
            margin-top: 10px;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, #0b2e44, #07212e);
            padding: 30px 16px;
            margin: 16px 0;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            text-align: center;
            color: white;
        }

        .stat-card .stat-number {
            font-size: 1.5rem;
            font-weight: 800;
        }

        .stat-card .stat-label {
            font-size: 0.7rem;
            opacity: 0.9;
        }

        /* Partners */
        .partners-section {
            padding: 24px 16px;
            background: #fff;
            text-align: center;
        }

        .partners-marquee {
            overflow-x: auto;
            white-space: nowrap;
            padding: 16px 0;
            -webkit-overflow-scrolling: touch;
        }

        .marquee-track {
            display: inline-flex;
            gap: 20px;
        }

        .partner-logo img {
            height: 40px;
            width: auto;
            opacity: 0.6;
        }

        /* Why Choose */
        .why-choose-section {
            background: #f0f4fa;
            padding: 30px 16px;
        }

        .features-grid {
            display: grid;
            gap: 16px;
            margin-top: 20px;
        }

        .feature-card {
            background: white;
            padding: 18px;
            border-radius: 20px;
            text-align: center;
        }

        .feature-card i {
            font-size: 1.8rem;
            color: #0f5c7a;
            margin-bottom: 10px;
        }

        .feature-card h3 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .feature-card p {
            font-size: 0.75rem;
            color: #555;
        }

        /* CTA Section */
        .join-movement {
            background: #0b2a3b;
            padding: 30px 20px;
            text-align: center;
            color: white;
        }

        .join-movement h2 {
            font-size: 1.2rem;
        }

        .join-movement p {
            font-size: 0.75rem;
            margin: 10px 0;
            opacity: 0.9;
        }

        .join-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 16px;
        }

        .btn-primary, .btn-outline-light {
            background: #ffb347;
            padding: 8px 20px;
            border-radius: 30px;
            color: #1e2f3f;
            font-weight: bold;
            text-decoration: none;
            font-size: 0.75rem;
        }

        .btn-outline-light {
            background: transparent;
            border: 1px solid white;
            color: white;
        }

        /* View All Button */
        .view-all-wrapper {
            text-align: center;
            margin: 20px 16px;
        }

        .view-all-btn {
            background: #0f2e3f;
            color: white;
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Bottom Navigation Bar */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            max-width: 450px;
            width: 100%;
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: space-around;
            padding: 10px 16px 22px;
            border-top: 1px solid #eee;
            z-index: 100;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #888;
            font-size: 0.6rem;
            transition: 0.2s;
            cursor: pointer;
        }

        .nav-item i {
            font-size: 1.2rem;
            margin-bottom: 3px;
        }

        .nav-item.active {
            color: #0f5c7a;
        }

        .nav-item:active {
            transform: scale(0.95);
        }

        /* Sparkle Canvas */
        #sparkle-canvas {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 450px;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        /* Scroll Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(15px);
            transition: 0.4s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes rippleOut {
            to { transform: translate(-50%, -50%) scale(2); opacity: 0; }
        }
    </style>
</head>
<body>

<canvas id="sparkle-canvas"></canvas>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- Sidebar Menu -->
<div class="sidebar-menu" id="sidebarMenu">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <img src="<?php echo $comp_noback_logo; ?>" alt="K-Seva Logo">
            <span>K-Seva</span>
        </div>
    </div>
    <div class="sidebar-user">
        <h4>Hello <?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'Admin'; ?>!</h4>
        <p>Welcome back</p>
    </div>
    <ul class="sidebar-menu-items">
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-user"></i> My Profile</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-bell"></i> Notifications</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-history"></i> Transaction History</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-wallet"></i> My Wallet</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-question-circle"></i> Help & Support</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-shield-alt"></i> Privacy Policy</a></li>
        <li><a href="#" onclick="closeSidebar()"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>

<div class="mobile-app">
    
    <!-- ===== HEADER SECTION WITH MENU BUTTON ON LEFT SIDE ===== -->
    <div class="header-section">
        <!-- Status Bar -->
        
        
        <!-- Header with Menu Button (Left), Logo, Icons (Right) -->
        <div class="app-header">
            <div class="header-left">
                <!-- Menu Button - Hamburger Icon -->
                <button class="menu-btn" id="menuBtn" onclick="openSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="home" class="nav-logo">
                    <img src="<?php echo $comp_noback_logo; ?>" alt="K-Seva Logo">
                </a>
            </div>
            <div class="header-icons">
                <i class="fas fa-bell"></i>
                <i class="fas fa-user-circle"></i>
            </div>
        </div>
    </div>
    
    <!-- Scrollable Content Area -->
    <div class="scroll-content">
        
        <!-- ===== SEPARATE WELCOME SECTION ===== -->
        <div class="welcome-section">
            <h2>Hello <?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'Admin'; ?>!</h2>
            <p>Welcome back to K-Seva</p>
        </div>
        
        <!-- Search Bar -->
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search services...">
        </div>
        
        <!-- Quick Services Section -->
        <div class="section-header">
            <h3>Quick Services</h3>
            <a href="#">View All →</a>
        </div>
        
        <div class="icon-grid">
            <div class="icon-tile" onclick="location.href='aadhar-atm'">
                <div class="icon-circle"><i class="fas fa-fingerprint"></i></div>
                <span>AEPS</span>
            </div>
            <div class="icon-tile" onclick="location.href='money-transfer'">
                <div class="icon-circle"><i class="fas fa-exchange-alt"></i></div>
                <span>Money Transfer</span>
            </div>
            <div class="icon-tile" onclick="location.href='micro-atm'">
                <div class="icon-circle"><i class="fas fa-credit-card"></i></div>
                <span>Micro ATM</span>
            </div>
            <div class="icon-tile" onclick="alert('Bill Payment')">
                <div class="icon-circle"><i class="fas fa-file-invoice-dollar"></i></div>
                <span>Bill Pay</span>
            </div>
            <div class="icon-tile" onclick="alert('Recharge')">
                <div class="icon-circle"><i class="fas fa-mobile-alt"></i></div>
                <span>Recharge</span>
            </div>
            <div class="icon-tile" onclick="alert('PAN Card')">
                <div class="icon-circle"><i class="fas fa-id-card"></i></div>
                <span>PAN Card</span>
            </div>
            <div class="icon-tile" onclick="alert('Fastag')">
                <div class="icon-circle"><i class="fas fa-road"></i></div>
                <span>Fastag</span>
            </div>
            <div class="icon-tile" onclick="alert('Income Tax')">
                <div class="icon-circle"><i class="fas fa-file-alt"></i></div>
                <span>ITR</span>
            </div>
        </div>
        
        <!-- Popular Services Section -->
        <div class="section-header">
            <h3>Popular Services</h3>
            <a href="#">View All →</a>
        </div>
        
        <div class="services-grid">
            <a href="aadhar-atm" class="service-card">
                <div class="icon-wrap"><i class="fas fa-fingerprint"></i></div>
                <span>AEPS & Banking</span>
            </a>
            <a href="money-transfer" class="service-card">
                <div class="icon-wrap"><i class="fas fa-exchange-alt"></i></div>
                <span>Money Transfer</span>
            </a>
            <a href="micro-atm" class="service-card">
                <div class="icon-wrap"><i class="fas fa-credit-card"></i></div>
                <span>Micro ATM</span>
            </a>
            <div class="service-card" onclick="alert('GST Services')">
                <div class="icon-wrap"><i class="fas fa-file-invoice"></i></div>
                <span>GST Services</span>
            </div>
            <div class="service-card" onclick="alert('PAN Card')">
                <div class="icon-wrap"><i class="fas fa-id-card"></i></div>
                <span>PAN Card</span>
            </div>
            <div class="service-card" onclick="alert('Ayushman Bharat')">
                <div class="icon-wrap"><i class="fas fa-hospital"></i></div>
                <span>Ayushman Bharat</span>
            </div>
            <div class="service-card" onclick="alert('Income Tax')">
                <div class="icon-wrap"><i class="fas fa-file-alt"></i></div>
                <span>Income Tax</span>
            </div>
            <div class="service-card" onclick="alert('Bill Payment')">
                <div class="icon-wrap"><i class="fas fa-bolt"></i></div>
                <span>Bill Payment</span>
            </div>
            <div class="service-card" onclick="alert('Digital Signature')">
                <div class="icon-wrap"><i class="fas fa-pen-nib"></i></div>
                <span>Digital Signature</span>
            </div>
            <div class="service-card" onclick="alert('Stock Broking')">
                <div class="icon-wrap"><i class="fas fa-chart-line"></i></div>
                <span>Stock Broking</span>
            </div>
            <div class="service-card" onclick="alert('Digital Gold')">
                <div class="icon-wrap"><i class="fas fa-coins"></i></div>
                <span>Digital Gold</span>
            </div>
            <div class="service-card" onclick="alert('Voter ID')">
                <div class="icon-wrap"><i class="fas fa-vote-yea"></i></div>
                <span>Voter ID</span>
            </div>
        </div>
        
        <div class="view-all-wrapper">
            <a href="#" class="view-all-btn">
                <span>View All Services</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        <!-- Weather Bar -->
        <div class="weather-bar">
            <div class="weather-info">
                <i class="fas fa-sun"></i>
                <div>
                    <div class="temp">34°C</div>
                    <div class="condition">Partly sunny</div>
                </div>
            </div>
            <div class="language-selector">
                <span>ENG</span>
                <span>|</span>
                <span>हिंदी</span>
            </div>
        </div>
        
        <!-- Welcome Split Section -->
        <section class="welcome-split reveal">
            <div class="welcome-image">
                <img src="assets/train_conductor_18.jpg" alt="K-Seva Technology">
            </div>
            <div class="welcome-content">
                <div class="welcome-tag" style="color:#0f5c7a; font-size:0.7rem;">✦ Welcome to ✦</div>
                <h1 class="welcome-title">K-Seva Technology</h1>
                <h2 class="welcome-subtitle">Transforming Lives, Empowering Futures</h2>
                <p class="welcome-description">At K-Seva Technology, we are dedicated to reshaping the digital landscape, connecting individuals, online centers, and corporate agencies to a world of seamless services.</p>
                <div class="welcome-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div><strong>Need help?</strong><br><a href="tel:01169313454"><?php echo $comp_mobile; ?></a></div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div><strong>Email us</strong><br><a href="mailto:<?php echo $comp_email; ?>"><?php echo $comp_email; ?></a></div>
                    </div>
                </div>
                <div class="welcome-stats">
                    <div class="stat"><span class="stat-number" data-target="25000">0</span><span class="stat-label">Online Centers</span></div>
                    <div class="stat-divider"></div>
                    <div class="stat"><span class="stat-number" data-target="40">0</span><span class="stat-label">Services Offered</span></div>
                </div>
                <a href="#" class="welcome-btn"><span>Join Us</span> <i class="fas fa-arrow-right"></i></a>
            </div>
        </section>
        
        <!-- Statistics Section -->
        <section class="stats-section reveal">
            <div class="stats-container">
                <div class="stat-card"><i class="fas fa-store"></i><div class="stat-number" data-target="25280">0</div><div class="stat-label">K-Seva Kendras</div></div>
                <div class="stat-card"><i class="fas fa-handshake"></i><div class="stat-number" data-target="1140">0</div><div class="stat-label">Channel Partners</div></div>
                <div class="stat-card"><i class="fas fa-cogs"></i><div class="stat-number" data-target="250">0</div><div class="stat-label">G2C & B2C Services</div></div>
                <div class="stat-card"><i class="fas fa-building"></i><div class="stat-number" data-target="50">0</div><div class="stat-label">Corporate Partners</div></div>
            </div>
        </section>
        
        <!-- Partners -->
        <section class="partners-section reveal">
            <div class="section-tag" style="color:#0f5c7a; font-size:0.7rem;">Trusted By</div>
            <h2 style="font-size:1.2rem; margin:8px 0;">Our Partners</h2>
            <div class="partners-marquee">
                <div class="marquee-track">
                    <div class="partner-logo"><img src="assets/partner/1.png" alt="Partner"></div>
                    <div class="partner-logo"><img src="assets/partner/1.png" alt="Partner"></div>
                    <div class="partner-logo"><img src="assets/partner/1.png" alt="Partner"></div>
                    <div class="partner-logo"><img src="assets/partner/1.png" alt="Partner"></div>
                </div>
            </div>
        </section>
        
        <!-- Why Choose -->
        <section class="why-choose-section reveal">
            <div class="section-tag" style="color:#0f5c7a; font-size:0.7rem;">✦ Why Us ✦</div>
            <h2 style="font-size:1.2rem;">Why Choose <span style="color:#0f5c7a;">K-Seva Technology</span>?</h2>
            <div class="features-grid">
                <div class="feature-card"><i class="fas fa-users"></i><h3>User-Centric Design</h3><p>Seamless and intuitive experience for all users.</p></div>
                <div class="feature-card"><i class="fas fa-tree"></i><h3>Rural Outreach Program</h3><p>Bringing digital services to every corner of India.</p></div>
                <div class="feature-card"><i class="fas fa-star-of-life"></i><h3>Success Stories</h3><p>Transformative impact on lives and businesses.</p></div>
                <div class="feature-card"><i class="fas fa-lightbulb"></i><h3>Innovation Hub</h3><p>Pushing boundaries of digital services.</p></div>
            </div>
        </section>
        
        <!-- CTA -->
        <section class="join-movement">
            <h2>Join the <span style="color:#ffb347;">K-Seva Movement</span></h2>
            <p>Embark on a journey of empowerment and innovation.</p>
            <div class="join-buttons">
                <a href="#" class="btn-primary">Get Started Today!</a>
                <a href="#" class="btn-outline-light">Sign Up as an Online Center</a>
            </div>
        </section>
        
    </div>
    
    <!-- Bottom Navigation Bar -->
    <div class="bottom-nav">
        <div class="nav-item active"><i class="fas fa-home"></i><span>Home</span></div>
        <div class="nav-item"><i class="fas fa-search"></i><span>Explore</span></div>
        <div class="nav-item"><i class="fas fa-bell"></i><span>Alerts</span></div>
        <div class="nav-item"><i class="fas fa-user"></i><span>Profile</span></div>
    </div>
</div>

<?php include('includes/popup.php'); ?>

<script>
    // Sidebar Functions
    function openSidebar() {
        document.getElementById('sidebarMenu').classList.add('open');
        document.getElementById('sidebarOverlay').classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    
    function closeSidebar() {
        document.getElementById('sidebarMenu').classList.remove('open');
        document.getElementById('sidebarOverlay').classList.remove('open');
        document.body.style.overflow = '';
    }
    
    // Close sidebar on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeSidebar();
        }
    });
    
    // Sparkle Canvas Effect
    (function() {
        const canvas = document.getElementById('sparkle-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let W = 450, H;
        
        function resize() {
            W = 450;
            H = window.innerHeight;
            canvas.width = W;
            canvas.height = H;
        }
        resize();
        
        const SPARKLES = [];
        const COLORS = ['#29b6f6', '#f9a825', '#ffffff', '#00d4ff', '#ffd54f'];
        const COUNT = 35;
        
        class Sparkle {
            constructor() { this.reset(); }
            reset() {
                this.x = Math.random() * W;
                this.y = Math.random() * H;
                this.r = 1 + Math.random() * 2;
                this.alpha = Math.random() * 0.6;
                this.speed = 0.002 + Math.random() * 0.008;
                this.dir = Math.random() > 0.5 ? 1 : -1;
                this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            }
            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = this.color;
                ctx.shadowBlur = this.r * 3;
                ctx.shadowColor = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
            update() {
                this.alpha += this.speed * this.dir;
                if (this.alpha >= 0.7) this.dir = -1;
                if (this.alpha <= 0.1) this.reset();
                this.x += (Math.random() - 0.5) * 0.3;
                this.y -= 0.15;
                if (this.y < 0) this.reset();
                if (this.x < 0 || this.x > W) this.reset();
            }
        }
        for (let i = 0; i < COUNT; i++) SPARKLES.push(new Sparkle());
        
        function loop() {
            ctx.clearRect(0, 0, W, H);
            SPARKLES.forEach(s => { s.update(); s.draw(); });
            requestAnimationFrame(loop);
        }
        loop();
    })();
    
    // Scroll Reveal
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    reveals.forEach(r => revealObserver.observe(r));
    
    // Counter Animation
    function animateCounters(selector) {
        const counters = document.querySelectorAll(selector);
        counters.forEach(c => {
            const target = parseInt(c.getAttribute('data-target'));
            let current = 0;
            const step = Math.ceil(target / 50);
            function update() {
                current += step;
                if (current < target) {
                    c.innerText = current;
                    requestAnimationFrame(update);
                } else {
                    c.innerText = target;
                }
            }
            update();
        });
    }
    
    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters('.stats-section .stat-number');
                statObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) statObserver.observe(statsSection);
    
    const welcomeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters('.welcome-stats .stat-number');
                welcomeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    const welcomeStats = document.querySelector('.welcome-stats');
    if (welcomeStats) welcomeObserver.observe(welcomeStats);
    
    // Ripple effect for clickable items including menu button
    const clickableItems = document.querySelectorAll('.icon-tile, .service-card, .nav-item, .view-all-btn, .welcome-btn, .app-btn, .btn-primary, .btn-outline-light, .menu-btn, .header-icons i');
    clickableItems.forEach(item => {
        item.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const containerRect = document.querySelector('.mobile-app').getBoundingClientRect();
            const x = e.clientX - containerRect.left - rect.left;
            const y = e.clientY - containerRect.top - rect.top;
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(15, 92, 122, 0.2);
                width: 40px;
                height: 40px;
                transform: translate(-50%, -50%) scale(0);
                animation: rippleOut 0.4s ease-out forwards;
                left: ${x}px;
                top: ${y}px;
                pointer-events: none;
                z-index: 10;
            `;
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 400);
        });
    });
</script>

</body>
</html>