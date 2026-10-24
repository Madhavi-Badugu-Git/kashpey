<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Passport Application Services | K-Seva – Apply for New Passport Online</title>
    <meta name="description" content="K-Seva offers passport application assistance for new passports, tatkal, renewal, correction, and status tracking. Get reliable online support and document guidance.">
    <meta name="keywords" content="Passport Application, New Passport, Tatkal Passport, Passport Renewal, Passport Correction, K-Seva Services">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/passport-application">

    <!-- Open Graph -->
    <meta property="og:title" content="Passport Application Services | K-Seva">
    <meta property="og:description" content="Apply for new passport, tatkal passport, renewal, or correction. Get expert assistance with online application, document guidance, and status tracking.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-passport.jpg">
    <meta property="og:url" content="https://k-seva.com/passport-application">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Passport – Apply & Track Online">
    <meta name="twitter:description" content="Expert assistance for new passport, tatkal, renewal, and correction. Simple and secure process.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-passport.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/passport-application.css">
</head>

<body class="pa-body">

<canvas id="pa-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="pa-page">

<!-- ========== HERO SECTION ========== -->
<section class="pa-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="pa-hero-inner">
        <div class="pa-hero-text" data-reveal>
            <div class="pa-badge"><span class="badge-dot"></span><i class="fas fa-passport"></i>&nbsp; K-Seva Passport Services</div>
            <h1 class="hero-title">Apply for<br><span class="hero-gradient-text">New Passport</span></h1>
            <p class="hero-sub">Get assistance for new passport, tatkal, renewal, correction, and status tracking. Simple online process with full document guidance.</p>
            <div class="pa-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-edit"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> Government Approved</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> Quick Support</div>
                <div class="trust-badge"><i class="fas fa-check-circle"></i> 100% Online</div>
            </div>
        </div>
        <div class="pa-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">Passport in India</span>
                <span class="hc-live-badge">LIVE</span>
            </div>
            <div class="pa-stat-row">
                <div class="pa-stat"><div class="pa-stat-num c-blue">6 Cr+</div><div class="pa-stat-lbl">Passport Holders</div></div>
                <div class="pa-stat"><div class="pa-stat-num c-green">24×7</div><div class="pa-stat-lbl">Online Services</div></div>
                <div class="pa-stat"><div class="pa-stat-num c-gold">All States</div><div class="pa-stat-lbl">PSK Coverage</div></div>
                <div class="pa-stat"><div class="pa-stat-num c-white">Paperless</div><div class="pa-stat-lbl">Application</div></div>
            </div>
            <div class="pa-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-user"></i></div><div class="td-label">Applicant</div><div class="td-val">Submit Request</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-passport"></i></div><div class="td-label">Received</div><div class="td-val">Passport</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="pa-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Passport Application</span></div></nav>

<!-- ========== INTRO SECTION ========== -->
<section class="pa-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="pa-container">
        <div class="pa-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-passport"></i> About This Service</div>
            <h2 class="sec-title" style="color: #00335a">Passport <span>Application</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-passport"></i><span></span></div>
            <p>K-Seva provides reliable and hassle-free passport application assistance for individuals who want to apply for a new passport or require support for passport-related services. Our platform helps applicants complete the process smoothly with proper guidance, documentation support, and online application assistance.</p>
            <p>A passport is an essential travel and identity document required for international travel, visa processing, education abroad, employment opportunities, and official verification purposes. K-Seva simplifies the passport application process by helping users understand eligibility, required documents, appointment procedures, and application tracking.</p>
            <p>Our dedicated support team ensures that your application is submitted without errors, helping you avoid unnecessary delays. We also guide you through document preparation and online form filling.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-file-alt"></i> New Passport</span>
                <span class="pill pill-green"><i class="fas fa-bolt"></i> Tatkal</span>
                <span class="pill pill-gold"><i class="fas fa-sync-alt"></i> Renewal</span>
                <span class="pill pill-navy"><i class="fas fa-edit"></i> Correction</span>
            </div>
        </div>

        <!-- ENQUIRY FORM – same premium card -->
        <?php 
        $current_page_name = "Passport Application";
        $current_service_category = "passport";
        include('includes/enquiry_form.php'); 
        ?>
    </div>
</section>

<!-- ========== WHY CHOOSE K-SEVA SECTION ========== -->
<section class="pa-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
            <h2 class="sec-title light">Why Choose K-Seva <span>Passport Services</span></h2>
            <p class="sec-sub light">Trusted assistance for hassle‑free passport processing</p>
        </div>
        <div class="pa-why-grid">
            <div class="pa-why-card" data-reveal data-delay="0">
                <div class="wc-glow glow-blue"></div>
                <div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-laptop"></i></div>
                <h3>Simple Online Process</h3>
                <p>Easy digital application without visiting PSK multiple times.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="pa-why-card" data-reveal data-delay="80">
                <div class="wc-glow glow-green"></div>
                <div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div>
                <h3>Fast Customer Support</h3>
                <p>Dedicated team to guide you through forms, documents, and appointments.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="pa-why-card" data-reveal data-delay="160">
                <div class="wc-glow glow-gold"></div>
                <div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-shield-alt"></i></div>
                <h3>Government Approved</h3>
                <p>Fully compliant with Ministry of External Affairs procedures.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="pa-why-card" data-reveal data-delay="240">
                <div class="wc-glow glow-navy"></div>
                <div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div>
                <h3>Document Guidance</h3>
                <p>Complete list of required documents with format specifications.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="pa-why-card" data-reveal data-delay="320">
                <div class="wc-glow glow-teal"></div>
                <div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-lock"></i></div>
                <h3>Secure & Reliable</h3>
                <p>Your personal data is handled with strict confidentiality.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="pa-why-card" data-reveal data-delay="400">
                <div class="wc-glow glow-red"></div>
                <div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-map-marker-alt"></i></div>
                <h3>Pan India Support</h3>
                <p>Service available for all PSKs and passport offices.</p>
                <div class="wc-shine"></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICES COVERED SECTION ========== -->
<section class="pa-services">
    <div class="services-deco-1"></div>
    <div class="services-deco-2"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-list-check"></i> Complete Support</div>
            <h2 class="sec-title" style="color: #00335a;">Services <span>Covered</span></h2>
            <p class="sec-sub">We assist with all types of passport applications and updates</p>
        </div>
        <div class="pa-services-grid">
            <div class="pa-service-card" data-reveal data-delay="0">
                <div class="sc-icon"><i class="fas fa-file-alt"></i></div>
                <h4>New Passport</h4>
                <p>Apply for a fresh passport online</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="50">
                <div class="sc-icon"><i class="fas fa-bolt"></i></div>
                <h4>Tatkal Passport</h4>
                <p>Fast-track passport application support</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="100">
                <div class="sc-icon"><i class="fas fa-sync-alt"></i></div>
                <h4>Passport Renewal</h4>
                <p>Renew your expired or expiring passport</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="150">
                <div class="sc-icon"><i class="fas fa-edit"></i></div>
                <h4>Correction Support</h4>
                <p>Fix errors in name, address, or other details</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="200">
                <div class="sc-icon"><i class="fas fa-calendar-alt"></i></div>
                <h4>Appointment Guidance</h4>
                <p>Help scheduling PSK appointment</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="250">
                <div class="sc-icon"><i class="fas fa-chart-line"></i></div>
                <h4>Status Tracking</h4>
                <p>Track your application from submission to delivery</p>
            </div>
            <div class="pa-service-card" data-reveal data-delay="300">
                <div class="sc-icon"><i class="fas fa-file-upload"></i></div>
                <h4>Document Verification</h4>
                <p>Guidance for document preparation and upload</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== REQUIRED DOCUMENTS SECTION ========== -->
<section class="pa-documents">
    <div class="doc-deco-1"></div>
    <div class="doc-deco-2"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-folder-open"></i> Required Documents</div>
            <h2 class="sec-title" style="color: #00335a;">Documents <span>Needed</span></h2>
            <p class="sec-sub">Prepare these documents for a smooth application process</p>
        </div>
        <div class="pa-docs-grid">
            <div class="pa-doc-card" data-reveal><i class="fas fa-id-card"></i><span>Aadhaar Card</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-id-card"></i><span>PAN Card</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-home"></i><span>Address Proof</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-calendar-alt"></i><span>Date of Birth Proof</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-camera"></i><span>Passport Size Photographs</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-mobile-alt"></i><span>Mobile Number</span></div>
            <div class="pa-doc-card" data-reveal><i class="fas fa-graduation-cap"></i><span>Educational Documents (if applicable)</span></div>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS SECTION ========== -->
<section class="pa-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Process</div>
            <h2 class="sec-title light" style="color: #00335a;">How It <span>Works</span></h2>
            <p class="sec-sub light">Get your passport in 5 easy steps</p>
        </div>
        <div class="pa-steps">
            <div class="pa-step" data-reveal data-delay="0">
                <div class="step-num">01</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-edit"></i></div>
                <h4>Submit Enquiry</h4>
                <p>Fill the enquiry form with your basic details</p>
            </div>
            <div class="pa-step" data-reveal data-delay="120">
                <div class="step-num">02</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-phone-alt"></i></div>
                <h4>Expert Call Back</h4>
                <p>Our team contacts you for guidance and document checklist</p>
            </div>
            <div class="pa-step" data-reveal data-delay="240">
                <div class="step-num">03</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div>
                <h4>Submit Documents</h4>
                <p>Provide required documents and complete online application</p>
            </div>
            <div class="pa-step" data-reveal data-delay="360">
                <div class="step-num">04</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-calendar-check"></i></div>
                <h4>Schedule Appointment</h4>
                <p>Get help booking PSK appointment</p>
            </div>
            <div class="pa-step" data-reveal data-delay="480">
                <div class="step-num">05</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div>
                <h4>Passport Received</h4>
                <p>Track status and receive your passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS SECTION ========== -->
<section class="pa-stats">
    <div class="stats-orb stats-orb-1"></div>
    <div class="stats-orb stats-orb-2"></div>
    <div class="stats-mesh"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Passport in India</div>
            <h2 class="sec-title light">Passport <span>Statistics</span></h2>
            <p class="sec-sub light">The scale of passport issuance across the country</p>
        </div>
        <div class="pa-stats-grid">
            <div class="pa-stat-card" data-reveal data-delay="0">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-passport"></i></div>
                <div class="sc-num" style="--nc:#23adeb">6 Cr+</div>
                <div class="sc-lbl">Active passport holders</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:90%"></div></div>
            </div>
            <div class="pa-stat-card" data-reveal data-delay="100">
                <div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-sync-alt"></i></div>
                <div class="sc-num" style="--nc:#64ba4d">1.2 Cr+</div>
                <div class="sc-lbl">Annual applications</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:85%"></div></div>
            </div>
            <div class="pa-stat-card" data-reveal data-delay="200">
                <div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-clock"></i></div>
                <div class="sc-num" style="--nc:#fed109">7-30 Days</div>
                <div class="sc-lbl">Processing time (normal/tatkal)</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:80%"></div></div>
            </div>
            <div class="pa-stat-card" data-reveal data-delay="300">
                <div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-globe-asia"></i></div>
                <div class="sc-num" style="--nc:#fff">93+</div>
                <div class="sc-lbl">PSKs across India</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:88%"></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURES & BENEFITS ========== -->
<section class="pa-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>
    <div class="pa-container">
        <div class="pa-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Features & Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">Complete assistance and transparent support for passport applications</p>
        </div>
        <div class="feat-columns">
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="pa-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-bolt"></i></div><div class="fi-text"><h4>Quick Processing</h4><p>Error-free submission reduces processing delays.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-green"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>24/7 Customer Support</h4><p>Get help anytime for document queries or status updates.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>Document Checklist</h4><p>Complete list of required documents with format guidelines.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Real-Time Tracking</h4><p>Track your application from submission to delivery.</p></div></div>
            </div>
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="pa-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Cost Effective</h4><p>Affordable service charges for all passport services.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-lock"></i></div><div class="fi-text"><h4>Secure & Confidential</h4><p>Your data is protected with strict privacy policies.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-green"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Pan India Service</h4><p>Support for all PSKs and passport offices.</p></div></div>
                <div class="pa-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-bell"></i></div><div class="fi-text"><h4>SMS & Email Alerts</h4><p>Get notified at every stage of the process.</p></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="pa-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-passport"></i></div>
        <h2 class="cta-title">Need a <span>Passport?</span></h2>
        <p class="cta-sub">Connect with K-Seva support team today. Get your passport processed quickly without any hassle.</p>
        <div class="pa-cta-btns">
            <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i> Enquire Now</a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass"><i class="fas fa-phone-alt"></i> Call Support</a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> Government Approved</div>
            <div class="cta-chip"><i class="fas fa-shield-alt"></i> Data Safe</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Quick Assistance</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- ========== PARTICLE + SCROLL REVEAL + COUNTERS JS ========== -->
<script>
/* Particle Canvas */
(function () {
    const canvas = document.getElementById('pa-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#87ceeb'];
    const COUNT = 65;
    const particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize, { passive: true });
    function rand(a, b) { return a + Math.random() * (b - a); }
    class Particle {
        constructor() { this.reset(true); }
        reset(init) {
            this.x = rand(0, W);
            this.y = init ? rand(0, H) : H + 10;
            this.r = rand(0.6, 2.8);
            this.alpha = 0;
            this.maxA = rand(0.3, 0.85);
            this.speed = rand(0.003, 0.01);
            this.dir = 1;
            this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            this.vx = rand(-0.12, 0.12);
            this.vy = rand(-0.3, -0.08);
            this.phase = rand(0, Math.PI * 2);
            this.type = Math.random() > 0.5 ? 'star' : 'circle';
        }
        draw(t) {
            const flicker = 0.5 + 0.5 * Math.sin(t * 0.003 + this.phase);
            ctx.save();
            ctx.globalAlpha = this.alpha * flicker;
            ctx.fillStyle = this.color;
            ctx.shadowBlur = this.r * 10;
            ctx.shadowColor = this.color;
            if (this.type === 'star') {
                const r = this.r;
                ctx.beginPath();
                for (let i = 0; i < 8; i++) {
                    const ang = (i * Math.PI) / 4;
                    const len = i % 2 === 0 ? r * 3 : r;
                    const px = this.x + Math.cos(ang) * len;
                    const py = this.y + Math.sin(ang) * len;
                    i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
                }
                ctx.closePath();
                ctx.fill();
            } else {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
                ctx.fill();
            }
            ctx.restore();
        }
        update() {
            this.alpha += this.speed * this.dir;
            if (this.alpha >= this.maxA) this.dir = -1;
            if (this.alpha <= 0) { this.reset(false); return; }
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < -10) this.x = W + 10;
            if (this.x > W + 10) this.x = -10;
            if (this.y < -10) this.reset(false);
        }
    }
    for (let i = 0; i < COUNT; i++) particles.push(new Particle());
    let t = 0;
    function loop() {
        ctx.clearRect(0, 0, W, H);
        t++;
        particles.forEach(p => { p.update(); p.draw(t); });
        requestAnimationFrame(loop);
    }
    loop();
})();

/* Scroll Reveal */
(function () {
    const els = document.querySelectorAll('[data-reveal]');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const delay = parseInt(el.getAttribute('data-delay') || 0);
                setTimeout(() => el.classList.add('revealed'), delay);
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(el => obs.observe(el));
})();

/* Animated Counter for Stats */
(function () {
    function animateNum(el, target, suffix) {
        let cur = 0;
        const step = target / 55;
        const tick = () => {
            cur += step;
            if (cur < target) {
                el.textContent = Math.floor(cur) + suffix;
                requestAnimationFrame(tick);
            } else { el.textContent = target + suffix; }
        };
        tick();
    }
    const statNums = document.querySelectorAll('.sc-num');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const el = e.target;
                const raw = el.textContent.trim();
                if (/^\d/.test(raw)) {
                    const match = raw.match(/^([\d.]+)(.*)/);
                    if (match) {
                        const num = parseFloat(match[1]);
                        const suffix = match[2];
                        el.textContent = '0' + suffix;
                        animateNum(el, num, suffix);
                    }
                }
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statNums.forEach(el => obs.observe(el));
})();

/* Progress Bars Animation */
(function () {
    const bars = document.querySelectorAll('.sc-bar-fill');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.transform = 'scaleX(1)';
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.5 });
    bars.forEach(b => { b.style.transform = 'scaleX(0)'; b.style.transformOrigin = 'left'; obs.observe(b); });
})();

/* Step Connector Animation Delay */
(function () {
    const steps = document.querySelectorAll('.pa-step');
    steps.forEach((step, i) => step.style.setProperty('--step-i', i));
})();
</script>
</body>
</html>