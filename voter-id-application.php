<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Voter ID Services | K-Seva – Apply for Voter Card Online</title>
    <meta name="description" content="K-Seva offers voter ID application, correction, address change, and status tracking support. Get assistance for new voter registration and updates online.">
    <meta name="keywords" content="Voter ID, Voter Card, Apply Voter ID Online, Voter Registration, Voter ID Correction, K-Seva Services">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/voter-id">

    <!-- Open Graph -->
    <meta property="og:title" content="Voter ID Services | K-Seva">
    <meta property="og:description" content="Apply for new voter ID, make corrections, change address, or track status. Fast and reliable online assistance.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-voter-id.jpg">
    <meta property="og:url" content="https://k-seva.com/voter-id">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Voter ID – Apply & Update Online">
    <meta name="twitter:description" content="Expert assistance for voter ID applications, corrections, and status tracking. Simple and secure process.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-voter-id.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/voter-id.css">
</head>

<body class="voter-body">

<canvas id="voter-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="voter-page">

<!-- ========== HERO SECTION ========== -->
<section class="voter-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="voter-hero-inner">
        <div class="voter-hero-text" data-reveal>
            <div class="voter-badge"><span class="badge-dot"></span><i class="fas fa-id-card"></i>&nbsp; K-Seva Voter Services</div>
            <h1 class="hero-title">Apply for<br><span class="hero-gradient-text">Voter ID Card</span></h1>
            <p class="hero-sub">Get assistance for new voter registration, correction, address change, and status tracking. Simple online process with full document guidance.</p>
            <div class="voter-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-edit"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> Election Commission Approved</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> Quick Support</div>
                <div class="trust-badge"><i class="fas fa-check-circle"></i> 100% Online</div>
            </div>
        </div>
        <div class="voter-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">Voter ID in India</span>
                <span class="hc-live-badge">LIVE</span>
            </div>
            <div class="voter-stat-row">
                <div class="voter-stat"><div class="voter-stat-num c-blue">94 Cr+</div><div class="voter-stat-lbl">Registered Voters</div></div>
                <div class="voter-stat"><div class="voter-stat-num c-green">24×7</div><div class="voter-stat-lbl">Online Services</div></div>
                <div class="voter-stat"><div class="voter-stat-num c-gold">All States</div><div class="voter-stat-lbl">Coverage</div></div>
                <div class="voter-stat"><div class="voter-stat-num c-white">Paperless</div><div class="voter-stat-lbl">Application</div></div>
            </div>
            <div class="voter-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-user-edit"></i></div><div class="td-label">You</div><div class="td-val">Submit Request</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-id-card"></i></div><div class="td-label">Received</div><div class="td-val">Voter ID Card</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="voter-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Voter ID</span></div></nav>

<!-- ========== INTRO SECTION ========== -->
<section class="voter-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="voter-container">
        <div class="voter-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-vote-yea"></i> About This Service</div>
            <h2 class="sec-title" style="color: #00335a">Voter <span>ID Services</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-id-card"></i><span></span></div>
            <p>K-Seva provides simple and dependable voter ID application support services for citizens who want to apply for a new voter card, update voter details, or make corrections in existing voter information. Our platform helps users complete the voter registration process smoothly with proper guidance and documentation assistance.</p>
            <p>A valid voter ID card is an important identity document used for voting, government services, and address verification. K-Seva assists applicants with online voter registration, correction requests, address changes, and voter card status tracking through an easy and user-friendly process.</p>
            <p>Our dedicated support team ensures that your application is submitted without errors, helping you avoid unnecessary delays. We also guide you through document preparation and online form filling.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-user-plus"></i> New Registration</span>
                <span class="pill pill-green"><i class="fas fa-edit"></i> Correction</span>
                <span class="pill pill-gold"><i class="fas fa-map-marker-alt"></i> Address Change</span>
                <span class="pill pill-navy"><i class="fas fa-chart-line"></i> Status Track</span>
            </div>
        </div>

        <!-- ENQUIRY FORM – same premium card -->
        <?php 
        $current_page_name = "Voter ID";
        $current_service_category = "voter_id";
        include('includes/enquiry_form.php'); 
        ?>
    </div>
</section>

<!-- ========== WHY CHOOSE K-SEVA SECTION ========== -->
<section class="voter-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
            <h2 class="sec-title light">Why Choose K-Seva <span>Voter ID Services</span></h2>
            <p class="sec-sub light">Trusted assistance for error‑free voter registration</p>
        </div>
        <div class="voter-why-grid">
            <div class="voter-why-card" data-reveal data-delay="0">
                <div class="wc-glow glow-blue"></div>
                <div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-laptop"></i></div>
                <h3>Easy Online Process</h3>
                <p>Simple digital application process without visiting election office multiple times.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="voter-why-card" data-reveal data-delay="80">
                <div class="wc-glow glow-green"></div>
                <div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div>
                <h3>Fast Customer Support</h3>
                <p>Dedicated team to guide you through forms, documents, and submission.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="voter-why-card" data-reveal data-delay="160">
                <div class="wc-glow glow-gold"></div>
                <div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-shield-alt"></i></div>
                <h3>Government Approved</h3>
                <p>Fully compliant with Election Commission of India procedures.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="voter-why-card" data-reveal data-delay="240">
                <div class="wc-glow glow-navy"></div>
                <div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div>
                <h3>Document Guidance</h3>
                <p>Complete list of required documents with format specifications.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="voter-why-card" data-reveal data-delay="320">
                <div class="wc-glow glow-teal"></div>
                <div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-lock"></i></div>
                <h3>Secure & Reliable</h3>
                <p>Your personal data is handled with strict confidentiality.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="voter-why-card" data-reveal data-delay="400">
                <div class="wc-glow glow-red"></div>
                <div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-map-marker-alt"></i></div>
                <h3>Pan India Support</h3>
                <p>Service available for all states and constituencies.</p>
                <div class="wc-shine"></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICES COVERED SECTION ========== -->
<section class="voter-services">
    <div class="services-deco-1"></div>
    <div class="services-deco-2"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-list-check"></i> Complete Support</div>
            <h2 class="sec-title" style="color: #00335a;">Services <span>Covered</span></h2>
            <p class="sec-sub">We assist with all types of voter ID applications and updates</p>
        </div>
        <div class="voter-services-grid">
            <div class="voter-service-card" data-reveal data-delay="0">
                <div class="sc-icon"><i class="fas fa-user-plus"></i></div>
                <h4>New Voter Registration</h4>
                <p>Apply for a new voter ID card online</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="50">
                <div class="sc-icon"><i class="fas fa-edit"></i></div>
                <h4>Voter ID Correction</h4>
                <p>Fix errors in name, address, or other details</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="100">
                <div class="sc-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h4>Address Change</h4>
                <p>Update your address on the voter card</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="150">
                <div class="sc-icon"><i class="fas fa-copy"></i></div>
                <h4>Duplicate Voter ID</h4>
                <p>Get a duplicate card if lost or damaged</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="200">
                <div class="sc-icon"><i class="fas fa-mobile-alt"></i></div>
                <h4>Online Form Support</h4>
                <p>Assistance with filling Form 6, Form 8, etc.</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="250">
                <div class="sc-icon"><i class="fas fa-chart-line"></i></div>
                <h4>Status Tracking</h4>
                <p>Track your application status online</p>
            </div>
            <div class="voter-service-card" data-reveal data-delay="300">
                <div class="sc-icon"><i class="fas fa-file-upload"></i></div>
                <h4>Document Upload Help</h4>
                <p>Guidance for scanning and uploading documents</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== REQUIRED DOCUMENTS SECTION ========== -->
<section class="voter-documents">
    <div class="doc-deco-1"></div>
    <div class="doc-deco-2"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-folder-open"></i> Required Documents</div>
            <h2 class="sec-title" style="color: #00335a;">Documents <span>Needed</span></h2>
            <p class="sec-sub">Prepare these documents for a smooth application process</p>
        </div>
        <div class="voter-docs-grid">
            <div class="voter-doc-card" data-reveal><i class="fas fa-id-card"></i><span>Aadhaar Card</span></div>
            <div class="voter-doc-card" data-reveal><i class="fas fa-camera"></i><span>Passport Size Photograph</span></div>
            <div class="voter-doc-card" data-reveal><i class="fas fa-home"></i><span>Address Proof</span></div>
            <div class="voter-doc-card" data-reveal><i class="fas fa-mobile-alt"></i><span>Mobile Number</span></div>
            <div class="voter-doc-card" data-reveal><i class="fas fa-calendar-alt"></i><span>Age Proof Document</span></div>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS SECTION ========== -->
<section class="voter-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Process</div>
            <h2 class="sec-title light" style="color: #00335a;">How It <span>Works</span></h2>
            <p class="sec-sub light">Get your voter ID in 4 easy steps</p>
        </div>
        <div class="voter-steps">
            <div class="voter-step" data-reveal data-delay="0">
                <div class="step-num">01</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-edit"></i></div>
                <h4>Submit Enquiry</h4>
                <p>Fill the enquiry form with your basic details</p>
            </div>
            <div class="voter-step" data-reveal data-delay="120">
                <div class="step-num">02</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-phone-alt"></i></div>
                <h4>Expert Call Back</h4>
                <p>Our team contacts you for guidance and document checklist</p>
            </div>
            <div class="voter-step" data-reveal data-delay="240">
                <div class="step-num">03</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div>
                <h4>Submit Documents</h4>
                <p>Provide required documents and complete online application</p>
            </div>
            <div class="voter-step" data-reveal data-delay="360">
                <div class="step-num">04</div>
                <div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div>
                <h4>Voter ID Processed</h4>
                <p>Track status and receive your voter ID card</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS SECTION ========== -->
<section class="voter-stats">
    <div class="stats-orb stats-orb-1"></div>
    <div class="stats-orb stats-orb-2"></div>
    <div class="stats-mesh"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Voter Strength in India</div>
            <h2 class="sec-title light">Voter <span>Statistics</span></h2>
            <p class="sec-sub light">The scale of India's democratic participation</p>
        </div>
        <div class="voter-stats-grid">
            <div class="voter-stat-card" data-reveal data-delay="0">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-users"></i></div>
                <div class="sc-num" style="--nc:#23adeb">94 Cr+</div>
                <div class="sc-lbl">Registered voters in India</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:95%"></div></div>
            </div>
            <div class="voter-stat-card" data-reveal data-delay="100">
                <div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-sync-alt"></i></div>
                <div class="sc-num" style="--nc:#64ba4d">2 Cr+</div>
                <div class="sc-lbl">Annual new registrations</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:82%"></div></div>
            </div>
            <div class="voter-stat-card" data-reveal data-delay="200">
                <div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-mobile-alt"></i></div>
                <div class="sc-num" style="--nc:#fed109">100%</div>
                <div class="sc-lbl">Online form availability</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:98%"></div></div>
            </div>
            <div class="voter-stat-card" data-reveal data-delay="300">
                <div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-clock"></i></div>
                <div class="sc-num" style="--nc:#fff">30 Days</div>
                <div class="sc-lbl">Average processing time</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:75%"></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURES & BENEFITS ========== -->
<section class="voter-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>
    <div class="voter-container">
        <div class="voter-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Features & Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">Complete assistance and transparent support for voter ID applications</p>
        </div>
        <div class="feat-columns">
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="voter-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-bolt"></i></div><div class="fi-text"><h4>Quick Processing</h4><p>Error-free submission reduces processing delays.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-green"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>24/7 Customer Support</h4><p>Get help anytime for document queries or status updates.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>Document Checklist</h4><p>Complete list of required documents with format guidelines.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Real-Time Tracking</h4><p>Track your application from submission to delivery.</p></div></div>
            </div>
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="voter-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Cost Effective</h4><p>Affordable service charges for all voter services.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-lock"></i></div><div class="fi-text"><h4>Secure & Confidential</h4><p>Your data is protected with strict privacy policies.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-green"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Pan India Service</h4><p>Support for all states and constituencies.</p></div></div>
                <div class="voter-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-bell"></i></div><div class="fi-text"><h4>SMS & Email Alerts</h4><p>Get notified at every stage of the process.</p></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="voter-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-id-card"></i></div>
        <h2 class="cta-title">Need a <span>Voter ID Card?</span></h2>
        <p class="cta-sub">Connect with K-Seva support team today. Get your voter ID processed quickly without any hassle.</p>
        <div class="voter-cta-btns">
            <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i> Enquire Now</a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass"><i class="fas fa-phone-alt"></i> Call Support</a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> Election Commission Approved</div>
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
    const canvas = document.getElementById('voter-particles');
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
    const steps = document.querySelectorAll('.voter-step');
    steps.forEach((step, i) => step.style.setProperty('--step-i', i));
})();
</script>
</body>
</html>