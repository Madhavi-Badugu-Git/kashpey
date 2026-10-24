<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GST Reconciliation / Account Reconciliation";
$current_service_category = "gst_reconciliation";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GST Reconciliation | Account Reconciliation – K-Seva</title>
    <meta name="description" content="Reconcile your financial records with bank statements, identify mismatches, detect errors, and maintain accurate books with K-Seva's professional reconciliation services.">
    <meta name="keywords" content="GST Reconciliation, Account Reconciliation, Bank Reconciliation, Financial Statement Matching, Error Detection, K-Seva Accounting">
    <link rel="canonical" href="https://k-seva.com/gst-reconciliation">

    <!-- Open Graph -->
    <meta property="og:title" content="GST / Account Reconciliation Service – K-Seva">
    <meta property="og:description" content="Ensure your books match your bank statements. Professional reconciliation to prevent fraud and accounting errors.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-reconciliation.jpg">
    <meta property="og:url" content="https://k-seva.com/gst-reconciliation">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Account Reconciliation | K-Seva">
    <meta name="twitter:description" content="Expert reconciliation services for GST and financial accounts – accurate, transparent, timely.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-reconciliation.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/gst-reconciliation.css">
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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-calculator"></i>&nbsp; Account Reconciliation</div>
            <h1 class="hero-title">Match Your <span class="hero-gradient-text">Financial Records</span></h1>
            <p class="hero-sub">Reconcile your books with bank statements, detect mismatches, prevent fraud, and maintain error‑free accounts with K-Seva's expert reconciliation services.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-chart-line"></i> 100% Accuracy</div>
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> Fraud Detection</div>
                <div class="trust-badge"><i class="fas fa-file-invoice"></i> GST Ready</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">Reconciliation Essentials</span>
                <span class="hc-live-badge">IMPORTANT</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">Daily/Monthly</div><div class="mt-stat-lbl">Reconciliation Frequency</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">Error Free</div><div class="mt-stat-lbl">Financial Accuracy</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Fraud Prevention</div><div class="mt-stat-lbl">Secure Books</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">100%</div><div class="mt-stat-lbl">Transparency</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-book"></i></div><div class="td-label">Your Books</div><div class="td-val">Cash/Bank Ledger</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Reconcile</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-university"></i></div><div class="td-label">Bank Statement</div><div class="td-val">Actual Transactions</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Reconciliation</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-balance-scale"></i> What is Reconciliation?</div>
            <h2 class="sec-title" style="color: #00335a">Account <span>Reconciliation</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-calculator"></i><span></span></div>
            <p>Account reconciliation is an accounting process used to compare two sets of financial records to confirm that the balances and transactions match accurately. It helps businesses identify errors, missing entries, or mismatched transactions and ensures that financial records remain correct and updated.</p>
            <p>This process is commonly used to verify that the amount recorded in a company's books matches the balance shown in bank statements or other financial records. One of the most common examples is <strong>bank reconciliation</strong>, where businesses compare their cheque book or cash book entries with the bank statement to confirm accuracy.</p>
            <p>Reconciliation plays an important role in maintaining reliable accounting records, tracking expenses correctly, and preventing financial discrepancies. Businesses may perform reconciliation on a daily, monthly, quarterly, or yearly basis depending on their accounting requirements and transaction volume.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-check-double"></i> Error Detection</span>
                <span class="pill pill-green"><i class="fas fa-chart-line"></i> Accurate Books</span>
                <span class="pill pill-gold"><i class="fas fa-shield-alt"></i> Fraud Prevention</span>
                <span class="pill pill-navy"><i class="fas fa-file-invoice-dollar"></i> GST Compliance</span>
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
            <h2 class="sec-title light">Why K-Seva <span>Reconciliation</span></h2>
            <p class="sec-sub light">Expert-led, accurate, and timely reconciliation for your business</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-search"></i></div><h3>Error Detection</h3><p>Identify missing entries, duplicate transactions, and data entry mistakes.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-hand-holding-usd"></i></div><h3>Fraud Prevention</h3><p>Spot unauthorised transactions early and protect your business finances.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Accurate Reporting</h3><p>Get reliable financial statements for internal decisions and statutory filings.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div><h3>Timely Process</h3><p>We reconcile your books at your preferred frequency – daily, monthly, quarterly.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-file-invoice"></i></div><h3>GST Ready</h3><p>Properly reconciled books make GST return filing effortless and error‑free.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Expert Support</h3><p>Our accounting professionals guide you through the entire reconciliation.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why Reconciliation Matters</div>
            <h2 class="sec-title light">Businesses That <span>Reconcile Regularly</span></h2>
            <p class="sec-sub light">Get better control over your finances with proper reconciliation</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#23adeb">40%</div><div class="sc-lbl">Less accounting errors after regular reconciliation</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:60%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-ban"></i></div><div class="sc-num" style="--nc:#64ba4d">90%</div><div class="sc-lbl">Fraud detection rate with monthly reconciliation</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-clock"></i></div><div class="sc-num" style="--nc:#fed109">Hours</div><div class="sc-lbl">Saved every month by automated reconciliation</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:70%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#fff">100%</div><div class="sc-lbl">Financial transparency achieved</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">Who Needs <span>Reconciliation</span></h2>
            <p class="sec-sub">Every business that maintains financial records should reconcile regularly</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Small Businesses</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Startups</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Traders & Distributors</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-industry"></i></div><h4>Manufacturers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Any GST Registered Entity</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How <span>Reconciliation</span> Works</h2>
            <p class="sec-sub light">We help you match your records with bank statements step by step</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Records</h4><p>Provide your cash book, bank statements, and GST returns (if applicable).</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Data Comparison</h4><p>We compare entries line by line and identify differences.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-edit"></i></div><h4>Adjustment & Correction</h4><p>We help adjust missing entries, duplicates, or incorrect postings.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Final Report</h4><p>You get a reconciled statement and a report of adjustments made.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete reconciliation solution for error‑free accounting</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-balance-scale"></i></div><div class="fi-text"><h4>Bank Reconciliation</h4><p>Match your cash book with bank statements – identify uncleared cheques, bank charges, etc.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>GST Reconciliation</h4><p>Compare GSTR-1, GSTR-3B with purchase/sales registers to claim correct ITC.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Ledger Scrutiny</h4><p>Detailed review of all ledgers to catch posting errors and omissions.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-file-excel"></i></div><div class="fi-text"><h4>Adjustment Entries</h4><p>We prepare journal entries for reconciling items (bank charges, interest, etc.).</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>MIS Report</h4><p>Get a summary report of differences, outstanding items, and final balanced figures.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-calendar-week"></i></div><div class="fi-text"><h4>Periodic Reconciliation</h4><p>Choose daily, monthly, quarterly – we work as per your business needs.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Save Money</h4><p>Prevent losses from undetected errors, duplicate payments, or fraud.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-gavel"></i></div><div class="fi-text"><h4>Audit Ready</h4><p>Reconciled books simplify statutory audit and tax assessments.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Better Decisions</h4><p>Accurate financial data leads to confident business planning.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Time Saving</h4><p>Outsource the tedious reconciliation process – focus on your core business.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Fraud Protection</h4><p>Early detection of unauthorised transactions gives you peace of mind.</p></div></div>
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
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-calculator"></i></div>
        <h2 class="cta-title">Keep Your <span>Accounts Accurate</span></h2>
        <p class="cta-sub">Get your books reconciled by experts – error‑free, transparent, and timely.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Get Started Today</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-chart-line"></i> 100% Accuracy</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Quick Turnaround</div>
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