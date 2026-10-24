<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GST Registration & Certification";
$current_service_category = "gst_registration";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GST Registration & Certification | K-Seva – Get GSTIN Fast</title>
    <meta name="description" content="Get your GST registration and certification done quickly with K-Seva. Unified indirect tax system for businesses – claim input tax credit and stay compliant.">
    <meta name="keywords" content="GST Registration, GST Certification, GSTIN, Input Tax Credit, GST Compliance, K-Seva GST Services">
    <link rel="canonical" href="https://k-seva.com/gst-registration">

    <!-- Open Graph -->
    <meta property="og:title" content="GST Registration & Certification – K-Seva">
    <meta property="og:description" content="Simplify your business taxation with GST registration. Get your GSTIN and certification from experts.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gst-reg.jpg">
    <meta property="og:url" content="https://k-seva.com/gst-registration">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration | K-Seva">
    <meta name="twitter:description" content="Hassle‑free GST registration and certification. Claim ITC, avoid penalties, and grow your business.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gst-reg.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-file-invoice"></i>&nbsp; GST Registration</div>
            <h1 class="hero-title">Get Your <span class="hero-gradient-text">GSTIN</span></h1>
            <p class="hero-sub">Goods and Services Tax (GST) is a unified indirect tax system. Register now to claim input tax credit, avoid penalties, and simplify compliance.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-check-circle"></i> 15‑Days Process</div>
                <div class="trust-badge"><i class="fas fa-rupee-sign"></i> Claim ITC</div>
                <div class="trust-badge"><i class="fas fa-chart-line"></i> Nationwide</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">GST at a Glance</span>
                <span class="hc-live-badge">SINCE 2017</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">1st July 2017</div><div class="mt-stat-lbl">GST Implemented</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">Multiple Taxes</div><div class="mt-stat-lbl">Replaced by GST</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Input Tax Credit</div><div class="mt-stat-lbl">Available</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">100%</div><div class="mt-stat-lbl">Transparent</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-store"></i></div><div class="td-label">Your Business</div><div class="td-val">Apply for GST</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Registration</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-file-invoice-dollar"></i></div><div class="td-label">Get GSTIN</div><div class="td-val">Start Filing</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Registration & Certification</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About GST</div>
            <h2 class="sec-title" style="color: #00335a">Goods & Services <span>Tax (GST)</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-file-invoice"></i><span></span></div>
            <p>Goods and Services Tax (GST) is a unified indirect tax system introduced in India for the supply of goods and services. It was designed to simplify the taxation structure by replacing multiple indirect taxes previously charged by both the Central and State Governments.</p>
            <p>GST is known as a comprehensive and destination-based tax because it is applied at different stages of the supply chain while the final tax burden is borne by the end consumer. Businesses involved in production and distribution can claim <strong>input tax credit</strong> on taxes already paid, which helps avoid the cascading effect of taxation.</p>
            <p>The GST system was officially implemented in India on <strong>1st July 2017</strong> under the Constitution Amendment Act. It brought various taxes such as VAT, service tax, excise duty, and other indirect taxes under one common tax framework, creating a more transparent and efficient taxation process across the country.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-check-double"></i> Single Tax</span>
                <span class="pill pill-green"><i class="fas fa-chart-line"></i> No Tax‑on‑Tax</span>
                <span class="pill pill-gold"><i class="fas fa-globe-asia"></i> Pan India</span>
                <span class="pill pill-navy"><i class="fas fa-file-signature"></i> Easy Compliance</span>
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
            <div class="sh-tag"><i class="fas fa-star"></i> Why K-Seva for GST</div>
            <h2 class="sec-title light">Why Choose <span>K-Seva GST Registration</span></h2>
            <p class="sec-sub light">End‑to‑end support from documentation to GSTIN issuance</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div><h3>Documentation Help</h3><p>We help you prepare and submit all required documents – PAN, Aadhaar, business proof, etc.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div><h3>Fast Processing</h3><p>Get your GSTIN within 7‑15 working days, subject to government approval.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-rupee-sign"></i></div><h3>Claim Input Tax Credit</h3><p>Registered businesses can reduce tax liability by claiming ITC on purchases.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Pan India Validity</h3><p>GST registration is valid across all states – seamless interstate trade.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-shield-alt"></i></div><h3>Legal Compliance</h3><p>Avoid penalties for non‑registration. We ensure you meet turnover thresholds.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Post‑Registration Support</h3><p>We assist with return filing, ITC reconciliation, and annual compliances.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> GST in India</div>
            <h2 class="sec-title light">Impact of <span>GST</span></h2>
            <p class="sec-sub light">One nation, one tax – simplifying indirect taxation</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#23adeb">17+</div><div class="sc-lbl">Indirect taxes replaced by GST</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#64ba4d">1.4 Cr+</div><div class="sc-lbl">Businesses registered under GST</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-chart-pie"></i></div><div class="sc-num" style="--nc:#fed109">5 Slabs</div><div class="sc-lbl">Tax rates: 0%, 5%, 12%, 18%, 28%</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-calendar-alt"></i></div><div class="sc-num" style="--nc:#fff">2017</div><div class="sc-lbl">Year of GST implementation</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Needs GST</div>
            <h2 class="sec-title" style="color: #00335a;">Who Must <span>Register for GST</span></h2>
            <p class="sec-sub">Mandatory registration for businesses exceeding turnover thresholds or engaged in interstate supply</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Suppliers & Traders</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>E‑commerce Sellers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Interstate Suppliers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-industry"></i></div><h4>Manufacturers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Service Providers</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How GST <span>Registration Works</span></h2>
            <p class="sec-sub light">Get your GSTIN in a few easy steps with our expert assistance</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Documents</h4><p>PAN, Aadhaar, business address proof, bank statement, photographs.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-signature"></i></div><h4>Application Filing</h4><p>We prepare and file GST REG‑01 form on the GST portal.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-circle"></i></div><h4>Verification & Approval</h4><p>GST officer verifies details and approves registration.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-id-card"></i></div><h4>Receive GSTIN</h4><p>You get your GST certificate and login credentials.</p><div class="step-connector right-connector"></div></div>
        </div>
    </div>
</section>

<!-- FEATURES & BENEFITS SECTION -->
<section class="mt-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Key Features & Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">Complete GST registration package with post‑registration support</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-check-circle"></i></div><div class="fi-text"><h4>Single Tax System</h4><p>One uniform tax for goods and services across India.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Input Tax Credit</h4><p>Claim credit for taxes paid on purchases – reduce overall liability.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Interstate Trade</h4><p>Seamless supply of goods and services across state borders.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>Online Compliance</h4><p>All returns and payments are done through GST portal – paperless.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-ban"></i></div><div class="fi-text"><h4>Eliminates Cascading Effect</h4><p>No more tax‑on‑tax – only value addition is taxed.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>5 Tier Rate Structure</h4><p>0%, 5%, 12%, 18%, 28% – essential goods have lower rates.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Cost Savings</h4><p>Claim ITC reduces your effective tax cost.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-gavel"></i></div><div class="fi-text"><h4>Legal Recognition</h4><p>GST registration enhances credibility with customers and vendors.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Business Growth</h4><p>Registered businesses can participate in government tenders and large contracts.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Quick Process</h4><p>We complete your GST registration in 7‑15 days (subject to govt approval).</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>Expert Support</h4><p>We handle all follow‑ups with the GST department.</p></div></div>
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
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-file-invoice-dollar"></i></div>
        <h2 class="cta-title">Ready to Get <span>Your GSTIN?</span></h2>
        <p class="cta-sub">Start your GST registration today – avoid penalties and enjoy the benefits of a unified tax system.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Register Now</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> 100% Online</div>
            <div class="cta-chip"><i class="fas fa-shield-alt"></i> Government Approved</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Fast Service</div>
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