<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "E-Way Bill Generation";
$current_service_category = "eway_bill";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>E-Way Bill | Generate GST Transport Document – K-Seva</title>
    <meta name="description" content="Generate E-Way Bill online for transportation of goods under GST. Mandatory for consignment value > ₹50,000. Simplify compliance and avoid delays.">
    <meta name="keywords" content="E-Way Bill, GST E-Way Bill, Generate E-Way Bill, Goods Transport, GST Compliance, K-Seva">
    <link rel="canonical" href="https://k-seva.com/e-way-bill">

    <!-- Open Graph -->
    <meta property="og:title" content="E-Way Bill Generation – K-Seva">
    <meta property="og:description" content="Generate electronic waybills for goods transport under GST. Quick, compliant, and hassle‑free.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-eway.jpg">
    <meta property="og:url" content="https://k-seva.com/e-way-bill">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="E-Way Bill Service | K-Seva">
    <meta name="twitter:description" content="Simplify goods movement with instant E-Way Bill generation.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-eway.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/gst-10.css">
</head>
<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page">

<!-- HERO SECTION -->
<section class="mt-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="mt-hero-inner">
        <div class="mt-hero-text" data-reveal>
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-truck"></i>&nbsp; E-Way Bill</div>
            <h1 class="hero-title">Generate <span class="hero-gradient-text">E-Way Bill</span></h1>
            <p class="hero-sub">Electronic document required for transporting goods under GST. Mandatory when consignment value exceeds ₹50,000. Generate instantly and stay compliant.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-chart-line"></i> ₹50,000+ Value</div>
                <div class="trust-badge"><i class="fas fa-globe-asia"></i> Inter/Intra State</div>
                <div class="trust-badge"><i class="fas fa-check-circle"></i> Paperless</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">E-Way Bill Overview</span>
                <span class="hc-live-badge">GST RULE</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">1st April 2018</div><div class="mt-stat-lbl">System Effective</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">₹50,000+</div><div class="mt-stat-lbl">Mandatory Threshold</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">12/24 Hrs</div><div class="mt-stat-lbl">Validity Period</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">Online</div><div class="mt-stat-lbl">Generation</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-boxes"></i></div><div class="td-label">Goods to Transport</div><div class="td-val">Value > ₹50,000</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Generate E-Way Bill</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Valid E-Way Bill</div><div class="td-val">Ready for Transit</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">E-Way Bill</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About E-Way Bill</div>
            <h2 class="sec-title" style="color: #00335a">E-Way Bill <span>Under GST</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-truck"></i><span></span></div>
            <p>An E-Way Bill is an electronic document generated for the transportation of goods from one place to another under the GST system. It contains important shipment details such as the names of the consignor and consignee, origin and destination of goods, invoice details, and transportation information.</p>
            <p>The E-Way Bill system was introduced to simplify and monitor the movement of goods through an online platform. Before transporting goods, the registered person or transporter must upload the required details on the GST portal and generate the E-Way Bill electronically.</p>
            <p>The system for inter-state movement of goods across India became effective from <strong>1st April 2018</strong>. As per GST rules, generating an E-Way Bill is generally mandatory when the value of goods being transported exceeds <strong>₹50,000</strong> through a motorized vehicle.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-chart-line"></i> ₹50,000 Threshold</span>
                <span class="pill pill-green"><i class="fas fa-globe-asia"></i> Inter/Intra State</span>
                <span class="pill pill-gold"><i class="fas fa-clock"></i> Online Generation</span>
                <span class="pill pill-navy"><i class="fas fa-shield-alt"></i> Paperless Compliance</span>
            </div>
        </div>
        <?php include('includes/enquiry_form.php'); ?>
    </div>
</section>

<!-- WHY CHOOSE SECTION -->
<section class="mt-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
            <h2 class="sec-title light">Why K-Seva for <span>E-Way Bill</span></h2>
            <p class="sec-sub light">Hassle‑free generation of E-Way Bills for your goods transport</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div><h3>Instant Generation</h3><p>We generate E-Way Bill quickly using your GST credentials and shipment details.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>Accurate Data Entry</h3><p>Avoid rejections – we ensure all fields (invoice, HSN, transporter) are correct.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Validity Tracking</h3><p>We help track validity (12-24 hours for normal distance) and extend if needed.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-globe-asia"></i></div><h3>All Modes of Transport</h3><p>Road, rail, air, or ship – we generate E-Way Bill for any mode.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-file-pdf"></i></div><h3>Digital Copy</h3><p>Get the E-Way Bill in PDF format for your records and on‑road verification.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Expert Support</h3><p>Assistance with bulk generation, cancellation, and amendments of E-Way Bills.</p><div class="wc-shine"></div></div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="mt-stats">
    <div class="stats-orb stats-orb-1"></div>
    <div class="stats-orb stats-orb-2"></div>
    <div class="stats-mesh"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why E-Way Bill Matters</div>
            <h2 class="sec-title light">Benefits of <span>E-Way Bill</span></h2>
            <p class="sec-sub light">Simplify goods movement and stay GST compliant</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#23adeb">100%</div><div class="sc-lbl">Digital compliance</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-clock"></i></div><div class="sc-num" style="--nc:#64ba4d">12-24 Hrs</div><div class="sc-lbl">Standard validity period</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#fed109">₹50,000+</div><div class="sc-lbl">Consignment value threshold</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-globe-asia"></i></div><div class="sc-num" style="--nc:#fff">All India</div><div class="sc-lbl">Inter/intra state movement</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Needs E-Way Bill</div>
            <h2 class="sec-title" style="color: #00335a;">Who Must <span>Generate E-Way Bill</span></h2>
            <p class="sec-sub">Registered persons, transporters, and consignors transporting goods exceeding ₹50,000</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-building"></i></div><h4>Registered Dealers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Transporters</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Manufacturers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Wholesalers & Retailers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>E‑commerce Operators</h4><div class="who-line"></div></div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="mt-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Process</div>
            <h2 class="sec-title light" style="color: #00335a;">How E-Way Bill <span>Generation Works</span></h2>
            <p class="sec-sub light">Generate your E-Way Bill in a few easy steps</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Shipment Details</h4><p>Provide invoice, consignor/consignee details, HSN, and transport information.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Data Verification</h4><p>We cross-check details to ensure error-free submission.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div><h4>Generate on Portal</h4><p>We log in to the E-Way Bill portal and generate the document.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Share E-Way Bill</h4><p>You receive the E-Way Bill in PDF format for immediate use.</p><div class="step-connector right-connector"></div></div>
        </div>
    </div>
</section>

<!-- FEATURES & BENEFITS SECTION -->
<section class="mt-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Features & Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">Complete E-Way Bill generation service with expert support</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-file-alt"></i></div><div class="fi-text"><h4>Part A & Part B Filling</h4><p>Complete E-Way Bill with invoice, transport, and route details.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Validity Calculation</h4><p>Auto‑calculate validity based on distance (100 km per day).</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-edit"></i></div><div class="fi-text"><h4>Multiple Consignments</h4><p>Bulk generation for multiple invoices in one go.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-ban"></i></div><div class="fi-text"><h4>Cancellation Support</h4><p>Assistance with cancelling E-Way Bill if goods are not dispatched.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-refresh"></i></div><div class="fi-text"><h4>Extension of Validity</h4><p>Extend E-Way Bill when goods are delayed in transit.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Digital Copy</h4><p>PDF and JSON formats for easy sharing and verification.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Avoid Penalties</h4><p>₹10,000 to ₹50,000 penalty for moving goods without E-Way Bill.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Legal Compliance</h4><p>Stay compliant with GST rules for goods transport.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Save Time</h4><p>Instant generation – no need to visit GST office.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Smooth Inter‑State Movement</h4><p>Hassle‑free transport across state borders.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>24×7 Support</h4><p>Generate E-Way Bills any time, even on holidays.</p></div></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="mt-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-truck"></i></div>
        <h2 class="cta-title">Ready to <span>Generate E-Way Bill</span>?</h2>
        <p class="cta-sub">Ensure smooth goods transport with instant, compliant E-Way Bills from K-Seva.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Generate Now</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Instant Generation</div>
            <div class="cta-chip"><i class="fas fa-headset"></i> Expert Support</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* ========== PARTICLE CANVAS + SCROLL REVEAL (identical to previous pages) ========== */
(function() {
    const canvas = document.getElementById('mt-particles');
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

// Scroll reveal
(function() {
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

// Animated counters
(function() {
    function animateNum(el, target, suffix) {
        let cur = 0;
        const step = target / 55;
        const tick = () => {
            cur += step;
            if (cur < target) {
                el.textContent = Math.floor(cur) + suffix;
                requestAnimationFrame(tick);
            } else {
                el.textContent = target + suffix;
            }
        };
        tick();
    }
    const statNums = document.querySelectorAll('.sc-num');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const el = e.target;
                const raw = el.textContent.trim();
                const match = raw.match(/^([\d.]+)(.*)/);
                if (match) {
                    const num = parseFloat(match[1]);
                    const suffix = match[2];
                    el.textContent = '0' + suffix;
                    animateNum(el, num, suffix);
                }
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statNums.forEach(el => obs.observe(el));
})();

// Progress bars
(function() {
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

// Step animation
(function() {
    const steps = document.querySelectorAll('.mt-step');
    steps.forEach((step, i) => step.style.setProperty('--step-i', i));
})();
</script>
</body>
</html>