<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- ═══════════════════════════════════════════════
     K-SEVA TECHNOLOGY – PREMIUM NAVBAR (with Profile Dropdown)
     ═══════════════════════════════════════════════ -->

<!-- ROW 1: TOPBAR -->
<div class="topbar">
    <span class="topbar-contact">
        
      	<a href="tel:+91<?php echo $comp_mobile; ?>"><i class="fas fa-phone"></i>&nbsp;+91<?php echo $comp_mobile; ?></a>&nbsp;<span class="tb-sep">|</span>&nbsp;
		<a href="mailto:<?php echo $comp_email; ?>"><i class="fas fa-envelope"></i>&nbsp;<?php echo $comp_email; ?></a>
    </span>
    <span class="topbar-portals">
        <a href="https://www.kfinone.com/" target="_blank">Kfinone</a>
        <a href="https://logintoloans.com/" target="_blank">Logintoloans</a>
        <a href="https://logintoinvest.com/" target="_blank">Logintoinvest</a>
        <a href="https://veedhi.co.in/" target="_blank">Veedhi</a>
        <a href="https://www.realtyive.com/" target="_blank">Realtyive</a>
        <a href="https://kredithealthy.com/" target="_blank">Kredithealthy</a>
        <a href="https://leasingkart.in/" target="_blank">Leasingkart</a>
    </span>
    <span class="topbar-social">
        <a href="https://www.facebook.com/profile.php?id=61576815272784" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/kseva132411" aria-label="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/info.kseva/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/@K-Seva-Services" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
    </span>
</div>

<!-- STICKY HEADER -->
<header class="sticky-header" id="stickyHeader">

    <!-- ROW 2: Logo + Actions (desktop only) -->
    <div class="logo-action-row">
        <a href="home" class="nav-logo">
            <img src="<?php echo $comp_noback_logo; ?>" alt="K-Seva Logo">
        </a>
        <div class="header-actions">
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Logged in: User Profile Dropdown (renamed classes to avoid conflict) -->
                <div class="nav-profile-dropdown">
                    <button class="nav-profile-btn" id="navProfileBtn">
                        <i class="fas fa-user-circle"></i>
                        <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                        <i class="fas fa-chevron-down arrow"></i>
                    </button>
                    <ul class="nav-profile-menu" id="navProfileMenu">
                        <li><a href="edit-retailer-profile"><i class="fas fa-id-card"></i> My Profile</a></li>
                        <li><a href="retailer-dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="my-activity"><i class="fas fa-chart-line"></i> Activity</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a href="retailer-login" class="signin-btn">
                    <i class="fas fa-user-circle"></i>
                    <span>Sign In / Up</span>
                </a>
            <?php endif; ?>
            <a href="https://wa.me/<?php echo $comp_mobile; ?>" class="wa-btn" target="_blank" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- ROW 3: Navigation bar (unchanged) -->
    <nav class="nav-row" role="navigation" aria-label="Main navigation">
        <div class="mobile-logo">
            <a href="home"><img src="<?php echo $comp_noback_logo; ?>" alt="K-Seva Logo"></a>
        </div>
        <ul class="nav-links" id="desktopNav">
            <!-- ... all your existing menu items (Banking, ATM, GST, etc.) ... -->
              <!-- Banking & Finance -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-university nav-icon"></i>
                    Banking &amp; Finance
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="money-transfer"><i class="fas fa-exchange-alt"></i> Domestic Money Transfer</a></li>
                    <li><a href="financial-services"><i class="fas fa-chart-line"></i> Financial Services</a></li>
                    <li><a href="nsdl-payment-bank-bc"><i class="fas fa-university"></i> NSDL Payments Bank BC</a></li>
                    <li><a href="axis-bank-bc"><i class="fas fa-landmark"></i> Axis Bank BC</a></li>
                    <li><a href="#"><i class="fas fa-credit-card"></i> ICICI Bank Prepaid Debit Card</a></li>
                    <li><a href="#"><i class="fas fa-hand-holding-usd"></i> Loan</a></li>
                    
                    <li><a href="be-a-sub-broker-or-trader-in-stocks"><i class="fas fa-chart-line"></i> Stock / Share Broking &amp; Trading</a></li>
                    <li><a href="digital-and-physical-gold"><i class="fas fa-coins"></i> Digital &amp; Physical Gold</a></li>
                </ul>
            </li>
            <!-- ATM Services -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-money-bill-wave nav-icon"></i>
                    ATM 
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="aadhar-atm"><i class="fas fa-id-card"></i> Aadhar ATM</a></li>
                    <li><a href="k-seva-atm"><i class="fas fa-money-bill-wave"></i> TATA Indicash ATM</a></li>
                    <li><a href="micro-atm"><i class="fas fa-credit-card"></i> Micro ATM</a></li>
                    <li><a href="m-pos-micro-atm"><i class="fas fa-cash-register"></i> Cash@POS</a></li>
                </ul>
            </li>
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-receipt nav-icon"></i>
                    GST 
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="gstr-10"><i class="fas fa-id-card"></i> GSTR-10</a></li>
                    <li><a href="gst-reconciliation"><i class="fas fa-money-bill-wave"></i> GST RECONCILIATION</a></li>
                    <li><a href="gst-registration"><i class="fas fa-credit-card"></i>  GST REGISTRATION+CERTIFICATION</a></li>
                    <li><a href="gst-return-filing"><i class="fas fa-cash-register"></i> GST RETURN FILLING</a></li>
                    <li><a href="gst-return-filing-regular"><i class="fas fa-cash-register"></i> GST RETURN FILLING(REGULAR)</a></li>
                    <li><a href="gst-surrendered"><i class="fas fa-cash-register"></i> GST SURRENDERED</a></li>
                    <li><a href="gstr-9"><i class="fas fa-cash-register"></i> GSTR-9</a></li>
                    <li><a href="iec-amendment"><i class="fas fa-cash-register"></i> IEC AMENDEMENT</a></li>
                    <li><a href="e-way-bill"><i class="fas fa-cash-register"></i> E-WAY BILL</a></li>
                    <li><a href="gst-annual-return"><i class="fas fa-cash-register"></i> GST ANNUAL RETURN 9/9A</a></li>
                    <li><a href="gst-audit"><i class="fas fa-cash-register"></i> GST AUDIT</a></li>
                    <li><a href="gst-cash-refund"><i class="fas fa-cash-register"></i> GST CASH  REFUND</a></li>
                    <li><a href="gstr-8"><i class="fas fa-cash-register"></i> GSTR-8</a></li>

                </ul>
            </li>
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-credit-card nav-icon"></i>
                    Bill Payment
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="mobile-recharge"><i class="fas fa-mobile-alt"></i> Mobile Recharge</a></li>
                    <li><a href="mobile-postpaid"><i class="fas fa-receipt"></i> Mobile Postpaid</a></li>
                    <li><a href="electricity-bill"><i class="fas fa-bolt"></i> Electricity Bill Payment</a></li>
                    <li><a href="dth-recharge"><i class="fas fa-tv"></i> DTH Recharge</a></li>
                    <li><a href="fastag-recharge"><i class="fas fa-tag"></i> FASTag Recharge</a></li>
                    <li><a href="lpg-booking"><i class="fas fa-fire"></i> LPG Gas Booking</a></li>
                    <li><a href="loan-emi-payment"><i class="fas fa-hand-holding-usd"></i> Loan EMI Payment</a></li>
                    <li><a href="insurance-premium"><i class="fas fa-shield-alt"></i> Insurance Premium</a></li>
                </ul>
            </li>
            <!-- Tax & Compliance -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-file-invoice nav-icon"></i>
                    Tax &amp; Compliance
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                   
                    <li><a href="income-tax"><i class="fas fa-file-alt"></i> Income Tax Services</a></li>
                    <li><a href="compliance-services"><i class="fas fa-building"></i> Company Compliance</a></li>
                    <li><a href="llp-compliances"><i class="fas fa-handshake"></i> LLP Compliances</a></li>
                    <li><a href="intellectual-property"><i class="fas fa-lightbulb"></i> Intellectual Property Right</a></li>
                    <li><a href="iso-certification"><i class="fas fa-certificate"></i> ISO Certification</a></li>
                    <li><a href="digital-signature"><i class="fas fa-pen-nib"></i> Digital Signature</a></li>
                    <li><a href="#"><i class="fas fa-gavel"></i> Legal Drafting Services</a></li>
                </ul>
            </li>
            <!-- Government G2C -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-landmark nav-icon"></i>
                    Government G2C
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu two-column">
                    <li><a href="aadhar-correction"><i class="fas fa-id-card"></i> Aadhar Correction (OTP)</a></li>
                    <li><a href="driving-license"><i class="fas fa-car"></i> Driving License</a></li>
                    <li><a href="voter-id-application"><i class="fas fa-vote-yea"></i> Voter ID Application</a></li>
                    <li><a href="marriage-certificate"><i class="fas fa-heart"></i> Marriage Certificate</a></li>
                    <li><a href="ration-card-application"><i class="fas fa-utensils"></i> Ration Card Application</a></li>
                    <li><a href="passport-application"><i class="fas fa-passport"></i> Passport Application</a></li>
                    <li><a href="pm-scheme"><i class="fas fa-star-of-life"></i> PM Scheme</a></li>
                    <li><a href="e-shram-card"><i class="fas fa-shield-alt"></i> E-Shram Card</a></li>
                    <li><a href="death-certificate"><i class="fas fa-cross"></i> Death Certificate</a></li>
                    <li><a href="birth-certificate"><i class="fas fa-baby"></i> Birth Certificate</a></li>
                    <li><a href="caste-certificate"><i class="fas fa-users"></i> Caste Certificate</a></li>
                    <li><a href="income-certificate"><i class="fas fa-file-alt"></i> Income Certificate</a></li>
                    <li><a href="G2C-services"><i class="fas fa-city"></i> Government Citizen Services</a></li>
                    <li><a href="government-registration"><i class="fas fa-registered"></i> Government Registration</a></li>
                    <li><a href="pan-card"><i class="fas fa-id-card-alt"></i> Pan Card</a></li>
                    <li><a href="ayushman-bharat"><i class="fas fa-hospital"></i> Ayushman Bharat Card</a></li>
                </ul>
            </li>
            <!-- Business & Digital -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-laptop-code nav-icon"></i>
                    Business &amp; Digital
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="start-new-business"><i class="fas fa-rocket"></i> Start New Business</a></li>
                    <li><a href="graphic-designing"><i class="fas fa-paint-brush"></i> Graphic Designing</a></li>
                    <li><a href="website-development"><i class="fas fa-globe"></i> Website Designing</a></li>
                    <li><a href="social-media-marketing"><i class="fas fa-mobile-alt"></i> Social Media Marketing &amp; App Dev</a></li>
                    <li><a href="ev-charging-station"><i class="fas fa-charging-station"></i> EV Charging Station</a></li>
                    <li><a href="courier-service"><i class="fas fa-truck"></i> Delhivery Courier Service</a></li>
                    <li><a href="irctc-sub-agent"><i class="fas fa-train"></i> IRCTC Sub Agent</a></li>
                    <li><a href="tour-travel"><i class="fas fa-plane"></i> Tour &amp; Travel Services</a></li>
                    <li><a href="pharmeasy-pharma"><i class="fas fa-medkit"></i> PharmEasy Pharma</a></li>
                    <li><a href="idfc-fastag-agency"><i class="fas fa-tachometer-alt"></i> IDFC Fastag Agency</a></li>
                    <li><a href="insurance"><i class="fas fa-shield-alt"></i> Insurance</a></li>
                </ul>
            </li>
            <!-- Gallery -->
            <li class="dropdown-li">
                <a href="#" class="dd-trigger">
                    <i class="fas fa-images nav-icon"></i>
                    Gallery
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="image_gallery"><i class="fas fa-image"></i> Images</a></li>
                    <li><a href="video_gallery"><i class="fas fa-video"></i> Videos</a></li>
                    <li><a href="download_gallery"><i class="fas fa-download"></i> Downloads</a></li>
                </ul>
            </li>
         </ul>
        <button class="hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <div class="header-glow-line"></div>
</header>

 <!-- DRAWER OVERLAY & SIDE DRAWER (unchanged)  -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="side-drawer" id="sideDrawer" aria-hidden="true">
    <div class="drawer-header">
        <img src="<?php echo $comp_footer_logo; ?>" alt="K-Seva Logo" class="drawer-logo">
        <button class="drawer-close" id="drawerCloseBtn" aria-label="Close menu"><i class="fas fa-times"></i></button>
    </div>

    <!-- Mobile drawer sign in / profile area -->
    <div class="drawer-signin-wrap">
        <?php if (isset($_SESSION['user_id'])): ?>
            <div class="drawer-profile-info">
                <i class="fas fa-user-circle"></i>
                <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
            </div>
            <div class="drawer-profile-links">
                <a href="edit-retailer-profile"><i class="fas fa-id-card"></i> My Profile</a>
                <a href="retailer-dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="my-activity"><i class="fas fa-chart-line"></i> Activity</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        <?php else: ?>
            <a href="retailer-login" class="drawer-signin-btn">
                <i class="fas fa-user-circle"></i> Sign In / Up
            </a>
        <?php endif; ?>
    </div>

    <ul class="drawer-nav">
        <!-- ... all your drawer menu items ... -->
         <!-- Banking & Finance -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-university"></i>
                <span>Banking &amp; Finance</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="money-transfer"><i class="fas fa-exchange-alt"></i> Domestic Money Transfer</a></li>
                <li><a href="financial-services"><i class="fas fa-chart-line"></i> Financial Services</a></li>
                <li><a href="nsdl-payment-bank-bc"><i class="fas fa-university"></i> NSDL Payments Bank BC</a></li>
                <li><a href="axis-bank-bc"><i class="fas fa-landmark"></i> Axis Bank BC</a></li>
                <li><a href="#"><i class="fas fa-credit-card"></i> ICICI Bank Prepaid Debit Card</a></li>
                <li><a href="#"><i class="fas fa-hand-holding-usd"></i> Loan</a></li>
               
                <li><a href="be-a-sub-broker-or-trader-in-stocks"><i class="fas fa-chart-line"></i> Stock / Share Broking</a></li>
                <li><a href="digital-and-physical-gold"><i class="fas fa-coins"></i> Digital &amp; Physical Gold</a></li>
            </ul>
        </li>
        <!-- ATM Services -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-money-bill-wave"></i>
                <span>ATM Services</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="aadhar-atm"><i class="fas fa-id-card"></i> Aadhar ATM</a></li>
                <li><a href="k-seva-atm"><i class="fas fa-money-bill-wave"></i> TATA Indicash ATM</a></li>
                <li><a href="micro-atm"><i class="fas fa-credit-card"></i> Micro ATM</a></li>
                <li><a href="m-pos-micro-atm"><i class="fas fa-cash-register"></i> Cash@POS</a></li>
            </ul>
        </li>
      	<!-- gst -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-receipt nav-icon"></i>
                GST 
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="gstr-10"><i class="fas fa-id-card"></i> GSTR-10</a></li>
                <li><a href="gst-reconciliation"><i class="fas fa-money-bill-wave"></i> GST RECONCILIATION</a></li>
                <li><a href="gst-registration"><i class="fas fa-credit-card"></i>  GST REGISTRATION+CERTIFICATION</a></li>
                <li><a href="gst-return-filing"><i class="fas fa-cash-register"></i> GST RETURN FILLING</a></li>
                <li><a href="gst-return-filing-regular"><i class="fas fa-cash-register"></i> GST RETURN FILLING(REGULAR)</a></li>
                <li><a href="gst-surrendered"><i class="fas fa-cash-register"></i> GST SURRENDERED</a></li>
                <li><a href="gstr-9"><i class="fas fa-cash-register"></i> GSTR-9</a></li>
                <li><a href="iec-amendment"><i class="fas fa-cash-register"></i> IEC AMENDEMENT</a></li>
                <li><a href="e-way-bill"><i class="fas fa-cash-register"></i> E-WAY BILL</a></li>
                <li><a href="gst-annual-return"><i class="fas fa-cash-register"></i> GST ANNUAL RETURN 9/9A</a></li>
                <li><a href="gst-audit"><i class="fas fa-cash-register"></i> GST AUDIT</a></li>
                <li><a href="gst-cash-refund"><i class="fas fa-cash-register"></i> GST CASH  REFUND</a></li>
                <li><a href="gstr-8"><i class="fas fa-cash-register"></i> GSTR-8</a></li>

            </ul>
        </li>
      	<!-- bill payment -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-credit-card nav-icon"></i>
                Bill Payment
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="mobile-recharge"><i class="fas fa-mobile-alt"></i> Mobile Recharge</a></li>
                <li><a href="mobile-postpaid"><i class="fas fa-receipt"></i> Mobile Postpaid</a></li>
                <li><a href="electricity-bill"><i class="fas fa-bolt"></i> Electricity Bill Payment</a></li>
                <li><a href="dth-recharge"><i class="fas fa-tv"></i> DTH Recharge</a></li>
                <li><a href="fastag-recharge"><i class="fas fa-tag"></i> FASTag Recharge</a></li>
                <li><a href="lpg-booking"><i class="fas fa-fire"></i> LPG Gas Booking</a></li>
                <li><a href="loan-emi-payment"><i class="fas fa-hand-holding-usd"></i> Loan EMI Payment</a></li>
                <li><a href="insurance-premium"><i class="fas fa-shield-alt"></i> Insurance Premium</a></li>
            </ul>
        </li>
        <!-- Tax & Compliance -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-file-invoice"></i>
                <span>Tax &amp; Compliance</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="gst-services"><i class="fas fa-file-invoice"></i> GST Services</a></li>
                <li><a href="income-tax"><i class="fas fa-file-alt"></i> Income Tax Services</a></li>
                <li><a href="compliance-services"><i class="fas fa-building"></i> Company Compliance</a></li>
                <li><a href="llp-compliances"><i class="fas fa-handshake"></i> LLP Compliances</a></li>
                <li><a href="intellectual-property"><i class="fas fa-lightbulb"></i> Intellectual Property Right</a></li>
                <li><a href="iso-certification"><i class="fas fa-certificate"></i> ISO Certification</a></li>
                <li><a href="digital-signature"><i class="fas fa-pen-nib"></i> Digital Signature</a></li>
                <li><a href="#"><i class="fas fa-gavel"></i> Legal Drafting Services</a></li>
            </ul>
        </li>
        <!-- Government G2C -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-landmark"></i>
                <span>Government G2C</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="aadhar-correction"><i class="fas fa-id-card"></i> Aadhar Correction (OTP)</a></li>
                <li><a href="driving-license"><i class="fas fa-car"></i> Driving License</a></li>
                <li><a href="voter-id-application"><i class="fas fa-vote-yea"></i> Voter ID Application</a></li>
                <li><a href="marriage-certificate"><i class="fas fa-heart"></i> Marriage Certificate</a></li>
                <li><a href="ration-card-application"><i class="fas fa-utensils"></i> Ration Card Application</a></li>
                <li><a href="passport-application"><i class="fas fa-passport"></i> Passport Application</a></li>
                <li><a href="pm-scheme"><i class="fas fa-star-of-life"></i> PM Scheme</a></li>
                <li><a href="e-shram-card"><i class="fas fa-shield-alt"></i> E-Shram Card</a></li>
                <li><a href="death-certificate"><i class="fas fa-cross"></i> Death Certificate</a></li>
                <li><a href="birth-certificate"><i class="fas fa-baby"></i> Birth Certificate</a></li>
                <li><a href="caste-certificate"><i class="fas fa-users"></i> Caste Certificate</a></li>
                <li><a href="income-certificate"><i class="fas fa-file-alt"></i> Income Certificate</a></li>
                <li><a href="G2C-services"><i class="fas fa-city"></i> Government Citizen Services</a></li>
                <li><a href="government-registration"><i class="fas fa-registered"></i> Government Registration</a></li>
                <li><a href="pan-card"><i class="fas fa-id-card-alt"></i> Pan Card</a></li>
                <li><a href="ayushman-bharat"><i class="fas fa-hospital"></i> Ayushman Bharat Card</a></li>
            </ul>
        </li>
        <!-- Business & Digital -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-laptop-code"></i>
                <span>Business &amp; Digital</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="start-new-business"><i class="fas fa-rocket"></i> Start New Business</a></li>
                <li><a href="graphic-designing"><i class="fas fa-paint-brush"></i> Graphic Designing</a></li>
                <li><a href="website-development"><i class="fas fa-globe"></i> Website Designing</a></li>
                <li><a href="social-media-marketing"><i class="fas fa-mobile-alt"></i> Social Media Marketing</a></li>
                <li><a href="ev-charging-station"><i class="fas fa-charging-station"></i> EV Charging Station</a></li>
                <li><a href="courier-service"><i class="fas fa-truck"></i> Delhivery Courier Service</a></li>
                <li><a href="irctc-sub-agent"><i class="fas fa-train"></i> IRCTC Sub Agent</a></li>
                <li><a href="tour-travel"><i class="fas fa-plane"></i> Tour &amp; Travel Services</a></li>
                <li><a href="pharmeasy-pharma"><i class="fas fa-medkit"></i> PharmEasy Pharma</a></li>
                <li><a href="idfc-fastag-agency.php"><i class="fas fa-tachometer-alt"></i> IDFC Fastag Agency</a></li>
                <li><a href="insurance"><i class="fas fa-shield-alt"></i> Insurance</a></li>
            </ul>
        </li>
        <!-- Gallery -->
        <li class="drawer-dropdown-li">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-images"></i>
                <span>Gallery</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="image_gallery"><i class="fas fa-image"></i> Images</a></li>
                <li><a href="video_gallery"><i class="fas fa-video"></i> Videos</a></li>
                <li><a href="download_gallery"><i class="fas fa-download"></i> Downloads</a></li>
            </ul>
        </li>

        <!-- test work both in desktop and mobile -->
        <!-- <li class="drawer-dropdown-li social-desktop">
            <a href="#" class="drawer-dropdown-toggle">
                <i class="fas fa-images"></i>
                <span>Social Links</span>
                <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="drawer-dropdown-menu">
                <li><a href="#"><i class="fas fa-image"></i> Photos</a></li>
                <li><a href="#"><i class="fas fa-video"></i> Videos</a></li>
                <li><a href="#"><i class="fas fa-download"></i> Downloads</a></li>
            </ul>
        </li> -->
         
        <li class="drawer-static"><a href="about_us"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
        <li class="drawer-static"><a href="contact_us"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
        <li class="drawer-static"><a href="blog"><i class="fas fa-pen-nib"></i> <span>Blog</span></a></li>

        <li class="drawer-static"><a href="news"><i class="fas fa-newspaper"></i> <span>News</span></a></li>
    </ul>
    <!-- Portal links in drawer -->
    <div class="drawer-portals">
        <p class="drawer-portals-title">Our Portals</p>
        <div class="drawer-portals-grid">
            <a href="https://www.kfinone.com/" target="_blank">Kfinone</a>
            <a href="https://logintoloans.com/" target="_blank">Logintoloans</a>
            <a href="https://logintoinvest.com/" target="_blank">Logintoinvest</a>
            <a href="https://veedhi.co.in/" target="_blank">Veedhi</a>
            <a href="https://www.realtyive.com/" target="_blank">Realtyive</a>
            <a href="https://kredithealthy.com/" target="_blank">Kredithealthy</a>
        </div>
    </div>
</aside>
<style>
    /* ══════════════════════════════════════════════
   GLITTER / SPARKLE CANVAS (global overlay)
   ══════════════════════════════════════════════ */
    #sparkle-canvas {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 9999;
    opacity: 0.55;
    }

    /* ══════════════════════════════════════════════
    TOPBAR
    ══════════════════════════════════════════════ */
    .topbar {
    background: var(--navy);
    color: rgba(255,255,255,0.65);
    font-size: 0.73rem;
    font-family: 'DM Sans', sans-serif;
    padding: 7px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    letter-spacing: 0.3px;
    position: relative;
    overflow: hidden;
    }
    .topbar::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 1px;
    background: linear-gradient(90deg, transparent, var(--sky), var(--gold), var(--sky), transparent);
    animation: shimmerLine 4s ease infinite;
    }
    @keyframes shimmerLine {
    0%   { background-position: -200% 0; }
    100% { background-position: 200% 0; }
    }
    .topbar a {
    color: var(--sky);
    text-decoration: none;
    margin-left: 18px;
    transition: color 0.2s;
    font-weight: 500;
    }
    .topbar a:hover { color: var(--gold); }

    /* ══════════════════════════════════════════════
    STICKY HEADER
    ══════════════════════════════════════════════ */
    .sticky-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    background: rgba(255,255,255,0.96);
    box-shadow: 0 2px 30px rgba(10,37,71,0.08);
    }

    /* ROW 2: Logo + WhatsApp */
    .logo-whatsapp-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 40px;
    border-bottom: 1px solid rgba(41,182,246,0.15);
    background: linear-gradient(90deg, rgba(10,37,71,0.03) 0%, rgba(255,255,255,0) 100%);
    position: relative;
    }
    .logo-whatsapp-row::before {
    content: '';
    position: absolute;
    bottom: 0; left: 40px; right: 40px;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(41,182,246,0.4), rgba(249,168,37,0.4), transparent);
    }
    .nav-logo img {
    height: 52px;
    width: auto;
    transition: transform 0.3s, filter 0.3s;
    filter: drop-shadow(0 2px 8px rgba(41,182,246,0.2));
    }
    .nav-logo:hover img {
    transform: scale(1.04);
    filter: drop-shadow(0 4px 16px rgba(41,182,246,0.4));
    }

    .whatsapp-icon {
    background: linear-gradient(135deg, #25D366, #128C7E);
    width: 42px; height: 42px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: white;
    font-size: 1.5rem;
    transition: all 0.3s;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(37,211,102,0.4);
    }
    .whatsapp-icon:hover {
    transform: scale(1.1) rotate(8deg);
    box-shadow: 0 8px 25px rgba(37,211,102,0.6);
    }

    /* ROW 3: Navigation */
    .nav-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
    min-height: 44px;
    background: linear-gradient(90deg, var(--navy) 0%, var(--navy-mid) 50%, var(--navy-light) 100%);
    position: relative;
    overflow: hidden;
    }
    .nav-row::before {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
        90deg,
        rgba(255,255,255,0.03) 0px,
        rgba(255,255,255,0.03) 1px,
        transparent 1px,
        transparent 60px
    );
    pointer-events: none;
    }

    .nav-links {
    display: flex;
    align-items: center;
    gap: 4px;
    list-style: none;
    margin: 0; padding: 0;
    }
    .nav-links > li { position: relative; }
    .nav-links > li > a {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 10px 16px;
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.85rem;
    letter-spacing: 0.3px;
    border-radius: 8px;
    transition: all 0.25s;
    white-space: nowrap;
    font-family: 'DM Sans', sans-serif;
    }
    .nav-links > li > a:hover {
    background: rgba(255,255,255,0.12);
    color: var(--gold);
    }
    .nav-links > li > a .arrow {
    font-size: 0.6rem;
    transition: transform 0.3s;
    }
    .nav-links > li:hover > a .arrow { transform: rotate(180deg); }

    /* DROPDOWN */
    .dropdown-menu {
    display: none;
    position: absolute;
    top: calc(100% + 4px);
    left: 0;
    background: white;
    min-width: 240px;
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(10,37,71,0.18);
    padding: 10px 0;
    list-style: none;
    border-top: 3px solid var(--sky);
    z-index: 999;
    animation: dropIn 0.2s ease;
    }
    @keyframes dropIn {
    from { opacity: 0; transform: translateY(-6px); }
    to   { opacity: 1; transform: translateY(0); }
    }
    .dropdown-menu li a {
    display: block;
    padding: 9px 20px;
    color: var(--text);
    text-decoration: none;
    font-size: 0.84rem;
    transition: all 0.2s;
    }
    .dropdown-menu li a i { width: 20px; margin-right: 8px; color: var(--sky); }
    .dropdown-menu li a:hover {
    background: var(--sky-light);
    color: var(--navy-mid);
    padding-left: 26px;
    }
    .dropdown-li:hover .dropdown-menu { display: block; }
    .dropdown-menu.two-column {
    width: 560px; min-width: 480px;
    column-count: 2; column-gap: 20px;
    }
    .dropdown-menu.two-column li { break-inside: avoid; }

    /* HAMBURGER */
    .hamburger {
    display: flex; flex-direction: column;
    gap: 5px; cursor: pointer;
    padding: 6px; background: transparent; border: none;
    z-index: 1100;
    }
    .hamburger span {
    display: block; width: 24px; height: 2.5px;
    background: white; border-radius: 2px;
    transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
    }
    .hamburger.open span:nth-child(1) { transform: translateY(7.5px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .hamburger.open span:nth-child(3) { transform: translateY(-7.5px) rotate(-45deg); }

    /* MOBILE DRAWER */
    .drawer-overlay { display: none; position: fixed; inset: 0; background: rgba(10,37,71,0.75); backdrop-filter: blur(4px); z-index: 2000; }
    .drawer-overlay.active { display: block; }
    .side-drawer {
    position: fixed; top: 0; right: -320px;
    width: 300px; max-width: 85vw; height: 100%;
    background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 60%, var(--navy-light) 100%);
    box-shadow: -8px 0 40px rgba(0,0,0,0.4);
    z-index: 2001; transition: right 0.35s cubic-bezier(0.4,0,0.2,1);
    padding: 24px 20px; overflow-y: auto;
    }
    .side-drawer.open { right: 0; }
    .drawer-header {
    display: flex; justify-content: space-between; align-items: center;
    padding-bottom: 18px; border-bottom: 1px solid rgba(255,255,255,0.15); margin-bottom: 22px;
    }
    .drawer-close {
    background: rgba(255,255,255,0.15); border: none;
    width: 38px; height: 38px; border-radius: 50%;
    font-size: 1.5rem; cursor: pointer; color: white; transition: all 0.2s;
    }
    .drawer-close:hover { background: var(--gold); color: var(--navy); }
    .drawer-nav { list-style: none; padding: 0; }
    .drawer-nav li { margin-bottom: 6px; }
    .drawer-nav li a {
    display: flex; align-items: center; gap: 12px;
    padding: 11px 16px; color: white; text-decoration: none;
    border-radius: 12px; font-weight: 500; transition: all 0.2s;
    }
    .drawer-nav li a:hover { background: rgba(249,168,37,0.18); color: var(--gold); transform: translateX(5px); }
    .drawer-nav li a i { width: 22px; font-size: 1.1rem; }
    .drawer-dropdown-menu { list-style: none; padding-left: 30px; margin-top: 5px; display: none; }
    .drawer-dropdown-menu.open { display: block; }
    .drawer-dropdown-toggle .arrow { transition: transform 0.2s; }
    .drawer-dropdown-toggle.open .arrow { transform: rotate(180deg); }
    .mobile-logo { display: none; }
    @media (min-width: 769px) { .mobile-only-dropdown { display: none !important; } }

    /* ─── Google Font import ─── */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap');

    /* ─── Reset & Base ─── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Plus Jakarta Sans', sans-serif; }

    /* ----- TOPBAR (hybrid) ----- */
    .topbar {
        background: #eef2f8;
        color: #1a2540;
        font-size: 0.75rem;
        padding: 6px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: nowrap;
        border-bottom: 1px solid rgba(0,0,0,0.06);
        position: relative;
        z-index: 10;
        transition: all 0.2s ease;
        overflow-x: auto;
    }
    @media (max-width: 768px) {
        .topbar { display: none; }
    }
    .topbar-contact,
    .topbar-portals,
    .topbar-social {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        gap: 0px;
    }
    .tb-sep {
        color: #bac8d9;
        margin: 0 4px;
        font-weight: 300;
        font-size: 0.7rem;
        user-select: none;
    }
    .topbar-contact i {
        color: #23adeb;
        font-size: 0.8rem;
        width: 1.2rem;
        text-align: center;
    }
    .topbar-contact span,
    .topbar-contact a {
        color: #1a2540;
        text-decoration: none;
        font-weight: 450;
        transition: color 0.2s ease;
        white-space: nowrap;
    }
    .topbar-contact a:hover { color: #23adeb; }
    .topbar-portals a {
        color: #2c3a5e;
        text-decoration: none;
        font-size: 0.7rem;
        font-weight: 500;
        padding: 4px 12px;
        border-radius: 30px;
        background: transparent;
        transition: all 0.25s ease;
        white-space: nowrap;
        letter-spacing: 0.2px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .topbar-portals a:hover {
        color: #23adeb;
        border-color: #23adeb;
        background: rgba(35,173,235,0.08);
        transform: translateY(-1px);
    }
    .topbar-social a {
        color: #2c3a5e;
        background: transparent;
        font-size: 0.85rem;
        width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.25s ease;
        text-decoration: none;
    }
    .topbar-social a:hover {
        color: #23adeb;
        border-color: #23adeb;
        background: rgba(35,173,235,0.1);
        transform: translateY(-2px);
    }
    .topbar a { margin-left: 0; transition: color 0.2s, border-color 0.2s, background 0.2s; }
    .topbar-portals, .topbar-social { flex-shrink: 0; }
    .topbar-contact { flex-shrink: 0; white-space: nowrap; }
    @media (min-width: 769px) and (max-width: 1100px) {
        .topbar { padding: 6px 18px; gap: 16px; }
        .topbar-portals a { padding: 3px 10px; font-size: 0.68rem; }
        .topbar-social a { width: 26px; height: 26px; font-size: 0.8rem; }
    }
    @media (min-width: 1400px) { .topbar { padding: 6px 32px; } }

    /* ══════════════════════════════════════
    STICKY HEADER SHELL
    ══════════════════════════════════════ */
    .sticky-header {
        position: sticky;
        top: 0;
        z-index: 1001;
        background: #fff;
        box-shadow: 0 4px 30px rgba(0,59,102,0.12);
        overflow: visible !important;
    }

    /* ══════════════════════════════════════
    ROW 2 – Logo + Actions
    ══════════════════════════════════════ */
    .logo-action-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 24px;
        background: #fff;
        border-bottom: 1px solid rgba(35,173,235,0.12);
        position: relative;
    }
    .logo-action-row::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, rgba(254,209,9,0.06) 1px, transparent 1px);
        background-size: 24px 24px;
        pointer-events: none;
    }
    .nav-logo { text-decoration: none; display: inline-flex; }
    .nav-logo img {
        height: 52px;
        width: auto;
        display: block;
        transition: transform 0.35s, filter 0.35s;
        filter: drop-shadow(0 2px 8px rgba(35,173,235,0.15));
        position: relative; z-index: 1;
    }
    .nav-logo:hover img {
        transform: scale(1.04);
        filter: drop-shadow(0 4px 16px rgba(35,173,235,0.35));
    }
    .header-actions { display: flex; align-items: center; gap: 12px; position: relative; z-index: 1; }
    .signin-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 22px;
        border-radius: 50px;
        background: transparent;
        border: 2px solid #23adeb;
        color: #23adeb;
        font-size: 0.84rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        white-space: nowrap;
        font-family: 'Plus Jakarta Sans', sans-serif;
        letter-spacing: 0.3px;
    }
    .signin-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #23adeb, #003b66);
        opacity: 0;
        transition: opacity 0.3s;
    }
    .signin-btn:hover::before { opacity: 1; }
    .signin-btn:hover { color: #fff; border-color: transparent; box-shadow: 0 6px 20px rgba(35,173,235,0.4); transform: translateY(-2px); }
    .signin-btn i, .signin-btn span { position: relative; z-index: 1; }
    .wa-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px; height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: #fff;
        font-size: 1.3rem;
        text-decoration: none;
        transition: all 0.3s;
        box-shadow: 0 4px 14px rgba(37,211,102,0.35);
    }
    .wa-btn:hover { transform: scale(1.1) rotate(8deg); box-shadow: 0 8px 22px rgba(37,211,102,0.5); }

    /* ══════════════════════════════════════
    ROW 3 – Navigation bar
    ══════════════════════════════════════ */
    .nav-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(90deg, #002952 0%, #003b66 40%, #004d87 100%);
        padding: 0 24px;
        min-height: 46px;
        position: relative;
        overflow: visible !important;
    }
    .nav-row::before {
        content: '';
        position: absolute;
        bottom: 0; left: 0;
        width: 100%; height: 2px;
        background: linear-gradient(90deg, #64ba4d, #23adeb, #fed109, #23adeb, #64ba4d);
        background-size: 300% 100%;
        animation: navStripe 6s linear infinite;
    }
    @keyframes navStripe {
        0%   { background-position: 0% 0%; }
        100% { background-position: 300% 0%; }
    }
    .mobile-logo { display: none; }
    .mobile-logo img { height: 38px; width: auto; }
    .nav-links {
        display: flex;
        align-items: center;
        list-style: none;
        gap: 2px;
        margin: 0; padding: 0;
        height: 100%;
    }
    .nav-links .dropdown-li { position: relative; height: 100%; display: flex; align-items: center; }
    .nav-links .dd-trigger {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 12px 14px;
        color: rgba(255,255,255,0.9);
        text-decoration: none;
        font-size: 0.82rem;
        font-weight: 600;
        white-space: nowrap;
        border-radius: 8px;
        transition: all 0.25s;
        position: relative;
        letter-spacing: 0.2px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .nav-links .dd-trigger .nav-icon { font-size: 0.78rem; color: #23adeb; transition: color 0.25s; }
    .nav-links .dd-trigger .arrow { font-size: 0.58rem; color: rgba(255,255,255,0.6); transition: transform 0.3s; }
    .nav-links .dd-trigger::after {
        content: '';
        position: absolute;
        bottom: 0; left: 50%; right: 50%;
        height: 2px;
        background: #fed109;
        transition: left 0.3s, right 0.3s;
        border-radius: 2px 2px 0 0;
    }
    .nav-links .dropdown-li:hover .dd-trigger,
    .nav-links .dropdown-li.dd-open .dd-trigger {
        color: #fed109;
        background: rgba(255,255,255,0.08);
    }
    .nav-links .dropdown-li:hover .dd-trigger .nav-icon,
    .nav-links .dropdown-li.dd-open .dd-trigger .nav-icon { color: #fed109; }
    .nav-links .dropdown-li:hover .dd-trigger .arrow,
    .nav-links .dropdown-li.dd-open .dd-trigger .arrow { transform: rotate(180deg); color: #fed109; }
    .nav-links .dropdown-li:hover .dd-trigger::after,
    .nav-links .dropdown-li.dd-open .dd-trigger::after { left: 8px; right: 8px; }
    .nav-links .dropdown-menu {
        display: none;
        position: absolute;
        top: calc(100% + 2px);
        left: 0;
        min-width: 248px;
        background: #fff;
        border-radius: 0 16px 16px 16px;
        box-shadow: 0 20px 60px rgba(0,59,102,0.2), 0 4px 16px rgba(0,0,0,0.08);
        padding: 8px 0;
        list-style: none;
        border-top: 3px solid #23adeb;
        z-index: 9999;
        animation: menuSlideIn 0.22s cubic-bezier(0.16,1,0.3,1);
    }
    @keyframes menuSlideIn {
        from { opacity: 0; transform: translateY(-8px) scale(0.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .nav-links .dropdown-li:hover .dropdown-menu,
    .nav-links .dropdown-li.dd-open .dropdown-menu { display: block; }
    .nav-links .dropdown-menu li a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 18px;
        color: #1a2540;
        text-decoration: none;
        font-size: 0.82rem;
        font-weight: 500;
        transition: all 0.2s;
        white-space: nowrap;
        border-left: 3px solid transparent;
    }
    .nav-links .dropdown-menu li a i { width: 18px; font-size: 0.82rem; color: #23adeb; transition: color 0.2s; flex-shrink: 0; }
    .nav-links .dropdown-menu li a:hover {
        background: linear-gradient(90deg, rgba(35,173,235,0.08), transparent);
        color: #003b66;
        padding-left: 24px;
        border-left-color: #64ba4d;
    }
    .nav-links .dropdown-menu li a:hover i { color: #64ba4d; }
    .nav-links .dropdown-menu.two-column {
        width: 580px;
        min-width: 480px;
        column-count: 2;
        column-gap: 0;
        border-radius: 0 16px 16px 16px;
    }
    .nav-links .dropdown-menu.two-column li { break-inside: avoid; }

    /* ══════════════════════════════════════
    HAMBURGER BUTTON
    ══════════════════════════════════════ */
    .hamburger {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 5px;
        width: 36px; height: 36px;
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 8px;
        cursor: pointer;
        padding: 6px;
        z-index: 10002;
        flex-shrink: 0;
        transition: all 0.25s;
    }
    .hamburger:hover { background: rgba(254,209,9,0.15); border-color: rgba(254,209,9,0.4); }
    .hamburger span {
        display: block;
        width: 100%; height: 2px;
        background: #fff;
        border-radius: 2px;
        transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
        transform-origin: center;
    }
    .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* ══════════════════════════════════════
    DRAWER OVERLAY & SIDE DRAWER
    ══════════════════════════════════════ */
    .drawer-overlay {
        position: fixed; inset: 0;
        background: rgba(0,21,40,0.7);
        backdrop-filter: blur(4px);
        z-index: 9998;
        opacity: 0; visibility: hidden;
        transition: opacity 0.35s ease, visibility 0.35s ease;
    }
    .drawer-overlay.active { opacity: 1; visibility: visible; }
    .side-drawer {
        position: fixed;
        top: 0; right: 0;
        width: min(85vw, 320px);
        height: 100%;
        background: #fff;
        z-index: 9999;
        transform: translateX(110%);
        transition: transform 0.38s cubic-bezier(0.4,0,0.2,1);
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        box-shadow: -8px 0 40px rgba(0,21,40,0.25);
    }
    .side-drawer.open { transform: translateX(0); }
    .drawer-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        background: linear-gradient(135deg, #003b66, #0056a0);
        flex-shrink: 0;
    }
    .drawer-logo { height: 50px; width: auto; filter: brightness(1.1); }
    .drawer-close {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.2);
        color: #fff;
        width: 36px; height: 36px;
        border-radius: 50%;
        font-size: 1rem;
        cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        transition: all 0.2s;
    }
    .drawer-close:hover { background: #fed109; color: #003b66; border-color: #fed109; }
    .drawer-signin-wrap {
        padding: 14px 20px 10px;
        border-bottom: 1px solid rgba(35,173,235,0.15);
    }
    .drawer-signin-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 10px 20px;
        background: linear-gradient(135deg, #23adeb, #003b66);
        color: #fff;
        font-size: 0.88rem;
        font-weight: 700;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .drawer-signin-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(35,173,235,0.4); }
    .drawer-nav {
        list-style: none;
        padding: 8px 0;
        flex: 1;
    }
    .drawer-nav li { border-bottom: 1px solid rgba(0,59,102,0.06); }
    .drawer-static a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 13px 20px;
        color: #1a2540;
        text-decoration: none;
        font-size: 0.88rem;
        font-weight: 600;
        transition: all 0.2s;
    }
    .drawer-static a i { width: 20px; color: #23adeb; font-size: 1rem; }
    .drawer-static a:hover { background: rgba(35,173,235,0.06); color: #003b66; padding-left: 26px; }

    /* ADDED: Change drawer dropdown toggle color to brand blue #23adeb */
    .drawer-dropdown-toggle {
        display: flex !important;
        align-items: center;
        gap: 12px;
        padding: 13px 20px;
        color: #23adeb;   /* changed from #1a2540 to #23adeb */
        text-decoration: none;
        font-size: 0.88rem;
        font-weight: 600;
        transition: all 0.2s;
        cursor: pointer;
        background: none;
        width: 100%;
        border: none;
        text-align: left;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .drawer-dropdown-toggle:hover { background: rgba(35,173,235,0.06); color: #003b66; }
    .drawer-dropdown-toggle > i:first-child { width: 20px; font-size: 1rem; color: #23adeb; flex-shrink: 0; }
    .drawer-dropdown-toggle span { flex: 1; }
    .drawer-dropdown-toggle .arrow { color: rgba(0,59,102,0.5); font-size: 0.65rem; transition: transform 0.3s; margin-left: auto; flex-shrink: 0; }
    .drawer-dropdown-toggle.open .arrow { transform: rotate(180deg); color: #23adeb; }
    .drawer-dropdown-toggle.open { color: #003b66; background: rgba(35,173,235,0.05); }

    .drawer-dropdown-menu {
        display: none;
        list-style: none;
        padding: 4px 0 8px 0;
        background: #f7fafc;
        border-top: 1px solid rgba(35,173,235,0.1);
    }
    .drawer-dropdown-menu.open { display: block; }
    .drawer-dropdown-menu li a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 20px 9px 44px;
        color: #2c4870;
        text-decoration: none;
        font-size: 0.82rem;
        font-weight: 500;
        transition: all 0.2s;
        border-left: 3px solid transparent;
        margin: 1px 0;
    }
    .drawer-dropdown-menu li a i { width: 16px; font-size: 0.78rem; color: #23adeb; flex-shrink: 0; }
    .drawer-dropdown-menu li a:hover {
        background: rgba(35,173,235,0.08);
        color: #003b66;
        padding-left: 52px;
        border-left-color: #64ba4d;
    }
    .drawer-dropdown-menu li a:hover i { color: #64ba4d; }
    .drawer-portals {
        padding: 16px 20px;
        background: linear-gradient(135deg, #f7fafc, #eef2f8);
        border-top: 1px solid rgba(35,173,235,0.15);
        flex-shrink: 0;
    }
    .drawer-portals-title {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #003b66;
        margin-bottom: 10px;
    }
    .drawer-portals-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 6px;
    }
    .drawer-portals-grid a {
        display: block;
        padding: 6px 8px;
        background: #fff;
        border: 1px solid rgba(35,173,235,0.2);
        border-radius: 8px;
        color: #003b66;
        font-size: 0.72rem;
        font-weight: 600;
        text-decoration: none;
        text-align: center;
        transition: all 0.2s;
    }
    .drawer-portals-grid a:hover {
        background: #64ba4d;
        color: #fff;
        border-color: #64ba4d;
        transform: translateY(-2px);
    }
    .drawer-nav li a {
        color: #23adeb;
    }
    /* Responsive adjustments for drawer-portals on mobile */
    @media (max-width: 650px) {
    .drawer-portals {
        padding: 16px 16px; /* reduce side padding on smaller screens */
    }

    .drawer-portals-grid {
        grid-template-columns: repeat(2, 1fr); /* switch to 2 columns */
        gap: 8px;
    }

    .drawer-portals-grid a {
        padding: 7px 6px;      /* slightly tighter but still tappable */
        font-size: 0.7rem;     /* keep readable but compact */
        white-space: normal;   /* allow text to wrap if needed */
        word-break: break-word;
    }
    }

    @media (max-width: 420px) {
    .drawer-portals-grid {
        grid-template-columns: 1fr; /* single column on very narrow screens */
        gap: 6px;
    }

    .drawer-portals-grid a {
        text-align: center;
        padding: 8px 6px;
    }
    }
    /* ══════════════════════════════════════
    ADDED: Hide the large dropdown menu items on DESKTOP (≥769px)
    Keep static links and portals visible.
    ══════════════════════════════════════ */
    @media (min-width: 769px) {
        .drawer-dropdown-li {
            display: none !important;
        }
    }
    /* ══════════════════════════════════════
    
    only in desktop not in mobile
    ══════════════════════════════════════ */
    @media (min-width: 769px) {
        .drawer-dropdown-li.social-desktop {
            display: block !important;
        }
    }
    /* ══════════════════════════════════════
    RESPONSIVE
    ══════════════════════════════════════ */
    @media (max-width: 1100px) {
        .nav-links .dd-trigger { padding: 12px 10px; font-size: 0.78rem; }
        .topbar-portals { display: none; }
    }
    @media (max-width: 900px) {
        .topbar-portals { display: none; }
    }
    @media (max-width: 768px) {
        .topbar { display: none; }
        .logo-action-row { display: none; }
        .nav-row {
            background: #fff;
            padding: 8px 16px;
            min-height: 56px;
            box-shadow: 0 2px 12px rgba(0,59,102,0.1);
        }
        .nav-row::before { display: none; }
        .mobile-logo { display: block; }
        .nav-links { display: none; }
        .hamburger {
            background: rgba(0,59,102,0.08);
            border-color: rgba(0,59,102,0.15);
        }
        .hamburger span { background: #003b66; }
        .hamburger:hover { background: rgba(35,173,235,0.12); border-color: #23adeb; }
        .hamburger:hover span { background: #23adeb; }
    }
    @media (max-width: 480px) {
        .mobile-logo img { height: 34px; }
        .side-drawer { width: min(90vw, 300px); }
    }
</style>
<!-- Additional CSS for Profile Dropdown -->
<style>
    /* Profile dropdown styles (add to your existing CSS) */
    .profile-dropdown {
        position: relative;
        display: inline-block;
    }
    .profile-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px;
        border-radius: 50px;
        background: transparent;
        border: 2px solid #23adeb;
        color: #23adeb;
        font-weight: 700;
        font-size: 0.84rem;
        cursor: pointer;
        transition: all 0.3s;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .profile-btn:hover {
        background: #23adeb;
        color: white;
        border-color: #23adeb;
        transform: translateY(-2px);
    }
    .profile-btn .arrow {
        font-size: 0.65rem;
        transition: transform 0.3s;
    }
    .profile-menu {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        background: white;
        min-width: 200px;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        padding: 8px 0;
        list-style: none;
        z-index: 1002;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.25s ease;
        border-top: 3px solid #23adeb;
    }
    .profile-dropdown:hover .profile-menu,
    .profile-menu:hover {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .profile-menu li a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 20px;
        color: #1a2540;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s;
    }
    .profile-menu li a i {
        width: 18px;
        color: #23adeb;
    }
    .profile-menu li a:hover {
        background: #f0f7ff;
        padding-left: 26px;
        color: #003b66;
    }
    .drawer-profile-info {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 15px;
        background: rgba(35,173,235,0.1);
        border-radius: 40px;
        margin-bottom: 12px;
        font-weight: 600;
        color: #003b66;
    }
    .drawer-profile-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .drawer-profile-links a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 15px;
        background: white;
        border-radius: 12px;
        text-decoration: none;
        color: #1a2540;
        font-weight: 500;
        transition: all 0.2s;
        border: 1px solid #e2e8f0;
    }
    .drawer-profile-links a i {
        width: 20px;
        color: #23adeb;
    }
    .drawer-profile-links a:hover {
        background: #23adeb;
        color: white;
        border-color: #23adeb;
    }
    .drawer-profile-links a:hover i {
        color: white;
    }
     /* Renamed profile dropdown styles for navbar only */
    .nav-profile-dropdown {
        position: relative;
        display: inline-block;
    }
    .nav-profile-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px;
        border-radius: 50px;
        background: transparent;
        border: 2px solid #23adeb;
        color: #23adeb;
        font-weight: 700;
        font-size: 0.84rem;
        cursor: pointer;
        transition: all 0.3s;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .nav-profile-btn:hover {
        background: #23adeb;
        color: white;
        border-color: #23adeb;
        transform: translateY(-2px);
    }
    .nav-profile-btn .arrow {
        font-size: 0.65rem;
        transition: transform 0.3s;
    }
    .nav-profile-menu {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        background: white;
        min-width: 200px;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        padding: 8px 0;
        list-style: none;
        z-index: 1002;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.25s ease;
        border-top: 3px solid #23adeb;
    }
    .nav-profile-dropdown:hover .nav-profile-menu,
    .nav-profile-menu:hover {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .nav-profile-menu li a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 20px;
        color: #1a2540;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s;
    }
    .nav-profile-menu li a i {
        width: 18px;
        color: #23adeb;
    }
    .nav-profile-menu li a:hover {
        background: #f0f7ff;
        padding-left: 26px;
        color: #003b66;
    }
</style>


<script>
    (function () {
        'use strict';

        var hamburger   = document.getElementById('hamburgerBtn');
        var drawer      = document.getElementById('sideDrawer');
        var overlay     = document.getElementById('drawerOverlay');
        var closeBtn    = document.getElementById('drawerCloseBtn');
        var drawerLogin = document.getElementById('drawerLoginBtn');
        var deskSignin  = document.getElementById('desktopSigninBtn');

        function openDrawer() {
            drawer.classList.add('open');
            overlay.classList.add('active');
            drawer.setAttribute('aria-hidden', 'false');
            hamburger.setAttribute('aria-expanded', 'true');
            hamburger.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
        function closeDrawer() {
            drawer.classList.remove('open');
            overlay.classList.remove('active');
            drawer.setAttribute('aria-hidden', 'true');
            hamburger.setAttribute('aria-expanded', 'false');
            hamburger.classList.remove('open');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function () {
            drawer.classList.contains('open') ? closeDrawer() : openDrawer();
        });
        if (closeBtn)  closeBtn.addEventListener('click', closeDrawer);
        if (overlay)   overlay.addEventListener('click', closeDrawer);

        document.querySelectorAll('.drawer-dropdown-toggle').forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                var li      = this.closest('.drawer-dropdown-li');
                var submenu = li.querySelector('.drawer-dropdown-menu');
                var isOpen  = submenu.classList.contains('open');

                document.querySelectorAll('.drawer-dropdown-menu.open').forEach(function (m) {
                    m.classList.remove('open');
                    var t = m.closest('.drawer-dropdown-li').querySelector('.drawer-dropdown-toggle');
                    if (t) t.classList.remove('open');
                });

                if (!isOpen) {
                    submenu.classList.add('open');
                    this.classList.add('open');
                }
            });
        });

        var desktopItems = document.querySelectorAll('#desktopNav .dropdown-li');
        desktopItems.forEach(function (li) {
            var trigger = li.querySelector('.dd-trigger');
            if (!trigger) return;
            trigger.addEventListener('click', function (e) {
                if (window.innerWidth <= 768) return;
                e.preventDefault();
                var isOpen = li.classList.contains('dd-open');
                desktopItems.forEach(function (item) { item.classList.remove('dd-open'); });
                if (!isOpen) li.classList.add('dd-open');
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('#desktopNav')) {
                desktopItems.forEach(function (li) { li.classList.remove('dd-open'); });
            }
        });

        if (deskSignin) {
            deskSignin.addEventListener('click', function (e) {
                if (typeof openModal === 'function') { e.preventDefault(); openModal(); }
            });
        }
        if (drawerLogin) {
            drawerLogin.addEventListener('click', function (e) {
                e.preventDefault();
                closeDrawer();
                if (typeof openModal === 'function') openModal();
            });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeDrawer();
                desktopItems.forEach(function (li) { li.classList.remove('dd-open'); });
            }
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 768) closeDrawer();
        });

        var stickyHeader = document.getElementById('stickyHeader');
        window.addEventListener('scroll', function () {
            var y = window.scrollY;
            if (y > 80) {
                stickyHeader.classList.add('header-scrolled');
            } else {
                stickyHeader.classList.remove('header-scrolled');
            }
        }, { passive: true });
    }());
</script>

<?php include('navbar-toast-snippet.php'); ?>