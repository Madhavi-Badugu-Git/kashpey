<?php 
session_start();
include('includes/dbConfig.php'); 
$current_page_name = "Mobile Recharge";
$current_service_category = "mobile_recharge";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Mobile Recharge | K-Seva – Fast & Secure Prepaid Recharge Online</title>
    <meta name="description" content="Recharge your prepaid mobile instantly with K-Seva. Support for Airtel, Jio, Vi, BSNL, MTNL. Secure payment, instant confirmation, 24/7 service.">
    <meta name="keywords" content="Mobile Recharge, Prepaid Recharge, Online Recharge, Airtel Recharge, Jio Recharge, Vi Recharge, BSNL Recharge, K-Seva Recharge">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://www.k-seva.com/mobile-recharge">
    <!-- Open Graph -->
    <meta property="og:title" content="Mobile Recharge Online – Fast & Secure | K-Seva">
    <meta property="og:description" content="Instant prepaid recharge for all major operators. Safe, secure and available 24/7. Recharge now!" />
    <meta property="og:image" content="https://www.k-seva.com/assets/images/og-recharge.jpg">
    <meta property="og:url" content="https://www.k-seva.com/mobile-recharge">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Mobile Recharge">
    <meta name="twitter:description" content="Fast & secure online mobile recharge. Airtel, Jio, Vi, BSNL supported.">
    <?php include('includes/header_1.php'); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/mobile-recharge.css">
</head>

<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page recharge-page">

    <!-- ========== HERO SECTION ========== -->
    <section class="mt-hero recharge-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-charging-station"></i>&nbsp; Instant Recharge</div>
                <h1 class="hero-title">Mobile Recharge Online<br><span class="hero-gradient-text">Fast & Secure</span></h1>
                <p class="hero-sub">Recharge your prepaid mobile instantly for Airtel, Jio, Vi, BSNL & MTNL. Secure payments, instant confirmation, available 24/7.</p>
                <div class="mt-hero-btns">
                    <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-bolt"></i><span>Enquire Now</span></a>
                    <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-shield-alt"></i> 100% Secure</div>
                    <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Available</div>
                    <div class="trust-badge"><i class="fas fa-tachometer-alt"></i> Instant</div>
                </div>
            </div>
            <div class="mt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">Recharge Stats</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-blue">50 Lakh+</div><div class="mt-stat-lbl">Monthly Recharges</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-green">All Operators</div><div class="mt-stat-lbl">Airtel · Jio · Vi · BSNL</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">100%</div><div class="mt-stat-lbl">Instant Confirmation</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">24/7</div><div class="mt-stat-lbl">Service Available</div></div>
                </div>
                <div class="mt-transfer-demo">
                    <div class="td-node td-from"><div class="td-icon"><i class="fas fa-mobile-alt"></i></div><div class="td-label">Your Number</div><div class="td-val">Enter 10-digit</div></div>
                    <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                    <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Recharge</div><div class="td-val">Success</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Mobile Recharge</span></div></nav>

    <!-- ========== INTRO + ENQUIRY SECTION ========== -->
    <section class="mt-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-charging-station"></i> Online Recharge</div>
                <h2 class="sec-title" style="color: #00335a">Mobile <span>Recharge</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-bolt"></i><span></span></div>
                <p>Stay connected with quick and hassle-free prepaid mobile recharge services through K-Seva. Recharge your mobile number instantly for major telecom operators such as Airtel, Jio, Vi, BSNL, and MTNL from a single platform. Enjoy a smooth recharge experience with secure payment options, instant confirmation, and easy access anytime, anywhere.</p>
                <p>K-Seva offers reliable and fast mobile recharge solutions designed for retailers, businesses, and individual users. Whether you need talk time, data packs, SMS packs, or unlimited combo plans, our platform provides seamless recharge services with real-time processing and customer support. Experience convenient digital recharge services with maximum security and efficiency.</p>
                <div class="intro-pills">
                    <span class="pill pill-blue"><i class="fas fa-bolt"></i> Instant</span>
                    <span class="pill pill-green"><i class="fas fa-shield-alt"></i> Secure</span>
                    <span class="pill pill-gold"><i class="fas fa-rupee-sign"></i> Best Plans</span>
                    <span class="pill pill-navy"><i class="fas fa-clock"></i> 24/7</span>
                </div>
            </div>

            <?php 
           
            include('includes/enquiry_form.php'); 
            ?>
        </div>
    </section>

    <!-- ========== WHY CHOOSE K-SEVA SECTION ========== -->
    <section class="mt-why">
        <div class="why-bg-mesh"></div>
        <div class="why-sweep"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
                <h2 class="sec-title light">Why Choose K-Seva <span>Mobile Recharge</span></h2>
                <p class="sec-sub light">Fast, secure, and hassle-free recharge experience</p>
            </div>
            <div class="mt-why-grid">
                <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-bolt"></i></div><h3>Fast & Secure</h3><p>Instant recharge with secure payment gateway and real-time confirmation.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-tower-cell"></i></div><h3>All Major Operators</h3><p>Support for Airtel, Jio, Vi, BSNL, MTNL and more.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-list-ul"></i></div><h3>Multiple Numbers</h3><p>Easily recharge multiple mobile numbers from one account.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-check-circle"></i></div><h3>Instant Confirmation</h3><p>Get immediate SMS and transaction confirmation on successful recharge.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-smile"></i></div><h3>User Friendly</h3><p>Simple and intuitive interface – recharge in just a few clicks.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-lock"></i></div><h3>Secure Payments</h3><p>All transactions protected with advanced encryption and secure gateways.</p><div class="wc-shine"></div></div>
            </div>
        </div>
    </section>

    <!-- ========== BENEFITS SECTION ========== -->
    <section class="mt-benefits">
        <div class="benefits-deco-1"></div>
        <div class="benefits-deco-2"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-green"><i class="fas fa-gift"></i> Advantages</div>
                <h2 class="sec-title" style="color:#00335a;">Benefits of <span>Online Mobile Recharge</span></h2>
                <p class="sec-sub">Online recharge gives you convenience, control, and flexibility</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card" data-reveal><div class="benefit-icon"><i class="fas fa-chart-line"></i></div><h4>Affordable Plans</h4><p>Choose from a wide range of plans to fit your budget and usage.</p></div>
                <div class="benefit-card" data-reveal data-delay="80"><div class="benefit-icon"><i class="fas fa-sliders-h"></i></div><h4>Full Control</h4><p>Manage your spending and track recharge history easily.</p></div>
                <div class="benefit-card" data-reveal data-delay="160"><div class="benefit-icon"><i class="fas fa-clock"></i></div><h4>Recharge Anytime</h4><p>No long-term commitments – recharge whenever you need.</p></div>
                <div class="benefit-card" data-reveal data-delay="240"><div class="benefit-icon"><i class="fas fa-chart-simple"></i></div><h4>Wide Range</h4><p>Data, calling, SMS, and combo plans for every need.</p></div>
                <div class="benefit-card" data-reveal data-delay="320"><div class="benefit-icon"><i class="fas fa-bolt"></i></div><h4>Instant Activation</h4><p>Plans get activated within seconds after successful payment.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== HOW IT WORKS SECTION ========== -->
    <section class="mt-how" id="how-it-woSrks">
        <div class="how-bg"></div>
        <div class="how-sweep"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Steps</div>
                <h2 class="sec-title" style="color:#00335a">How to <span>Recharge</span></h2>
                <p class="sec-sub">Complete your mobile recharge in 6 easy steps</p>
            </div>
            <div class="mt-steps">
                <div class="mt-step" data-reveal><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-globe"></i></div><h4>Visit Website</h4><p>Go to K-Seva official website</p></div>
                <div class="mt-step" data-reveal data-delay="80"><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-charging-station"></i></div><h4>Select Recharge</h4><p>Choose “Mobile Recharge” service</p></div>
                <div class="mt-step" data-reveal data-delay="160"><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-keyboard"></i></div><h4>Enter Number</h4><p>Enter your 10-digit mobile number</p></div>
                <div class="mt-step" data-reveal data-delay="240"><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-tags"></i></div><h4>Choose Plan</h4><p>Select operator & preferred pack</p></div>
                <div class="mt-step" data-reveal data-delay="320"><div class="step-num">05</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-credit-card"></i></div><h4>Make Payment</h4><p>Complete secure payment</p></div>
                <div class="mt-step" data-reveal data-delay="400"><div class="step-num">06</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Get Confirmation</h4><p>Instant recharge confirmation SMS</p></div>
            </div>
        </div>
    </section>

    <!-- ========== IMPORTANT CHECKLIST SECTION ========== -->
    <section class="mt-checklist">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-blue"><i class="fas fa-clipboard-list"></i> Before Recharge</div>
                <h2 class="sec-title" style="color:#00335a">Important Things <span>To Check</span></h2>
                <p class="sec-sub">Ensure a smooth recharge experience</p>
            </div>
            <div class="checklist-grid">
                <div class="checklist-item" data-reveal><div class="cli-icon"><i class="fas fa-check-circle"></i></div><div class="cli-text">Verify mobile number carefully before payment</div></div>
                <div class="checklist-item" data-reveal data-delay="80"><div class="cli-icon"><i class="fas fa-check-circle"></i></div><div class="cli-text">Check plan validity and benefits before selecting</div></div>
                <div class="checklist-item" data-reveal data-delay="160"><div class="cli-icon"><i class="fas fa-check-circle"></i></div><div class="cli-text">Ensure your current plan status and balance details</div></div>
                <div class="checklist-item" data-reveal data-delay="240"><div class="cli-icon"><i class="fas fa-check-circle"></i></div><div class="cli-text">Review recharge amount and operator information</div></div>
            </div>
        </div>
    </section>

    <!-- ========== SUPPORTED SERVICES SECTION ========== -->
    <section class="mt-supported">
        <div class="supported-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-gold"><i class="fas fa-concierge-bell"></i> Also Available</div>
                <h2 class="sec-title light">Supported <span>Services</span></h2>
                <p class="sec-sub light">Beyond mobile recharge – complete digital payments</p>
            </div>
             <div class="supported-grid">
                <a href="https://k-seva.com/mobile-recharge" class="supported-card-link" data-reveal>
                    <div class="supported-card"><i class="fas fa-mobile-alt"></i><span>Prepaid Mobile Recharge</span></div>
                </a>
                <a href="https://k-seva.com/mobile-postpaid" class="supported-card-link" data-reveal data-delay="60">
                    <div class="supported-card"><i class="fas fa-receipt"></i><span>Postpaid Bill Payment</span></div>
                </a>
                <a href="https://k-seva.com/dth-recharge" class="supported-card-link" data-reveal data-delay="120">
                    <div class="supported-card"><i class="fas fa-tv"></i><span>DTH Recharge</span></div>
                </a>
                <a href="https://k-seva.com/fastag-recharge" class="supported-card-link" data-reveal data-delay="180">
                    <div class="supported-card"><i class="fas fa-road"></i><span>FASTag Recharge</span></div>
                </a>
                <a href="https://k-seva.com/electricity-bill" class="supported-card-link" data-reveal data-delay="240">
                    <div class="supported-card"><i class="fas fa-bolt"></i><span>Electricity Bill Payment</span></div>
                </a>
                <a href="https://k-seva.com/lpg-booking" class="supported-card-link" data-reveal data-delay="300">
                    <div class="supported-card"><i class="fas fa-fire"></i><span>LPG Bill Payment</span></div>
                </a>
                <a href="https://k-seva.com/loan-emi-payment" class="supported-card-link" data-reveal data-delay="360">
                    <div class="supported-card"><i class="fas fa-hand-holding-usd"></i><span>Loan EMI Payment</span></div>
                </a>
                <a href="https://k-seva.com/insurance-premium" class="supported-card-link" data-reveal data-delay="420">
                    <div class="supported-card"><i class="fas fa-shield-alt"></i><span>Insurance Premium Payment</span></div>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== CTA SECTION ========== -->
    <section class="mt-cta">
        <div class="cta-orb cta-orb-1"></div><div class="cta-orb cta-orb-2"></div><div class="cta-mesh"></div><div class="cta-sweep"></div>
        <div class="mt-container"><div class="cta-inner"><div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-charging-station"></i></div><h2 class="cta-title">Ready to <span>Recharge?</span></h2><p class="cta-sub">Get instant talktime, data, and SMS with just a few clicks.</p><div class="mt-cta-btns"><a href="#enquire" class="btn-primary-glow"><i class="fas fa-bolt"></i> Enquire Now</a><a href="contact_us" class="btn-glass"><i class="fas fa-headset"></i> Contact Support</a></div><div class="cta-trust"><div class="cta-chip"><i class="fas fa-lock"></i> Secure Payment</div><div class="cta-chip"><i class="fas fa-tachometer-alt"></i> Instant</div><div class="cta-chip"><i class="fas fa-24-hours"></i> 24/7 Support</div></div></div></div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="mt-contact-strip">
        <div class="mt-container"><div class="contact-inner"><div class="contact-text"><h3>Need Help with <span>Recharge?</span></h3><p>Our support team is available 24/7 to assist you.</p></div><div class="contact-items"><div class="contact-item"><div class="ct-ico">📞</div><div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div></div><div class="contact-item"><div class="ct-ico">✉️</div><div><span class="ct-label">Email</span><div class="ct-val"><a href="mailto:support@kseva.com">support@kseva.com</a></div></div></div></div></div></div>
    </section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
// Particle Canvas (same as reference)
(function() {
    const canvas = document.getElementById('mt-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#f97316','#14b8a6'];
    const COUNT = 80;
    let particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize);
    function rand(a,b) { return a + Math.random() * (b - a); }
    class Particle {
        constructor() { this.reset(true); }
        reset(init) {
            this.x = rand(0,W); this.y = init ? rand(0,H) : H+10;
            this.r = rand(0.6,2.8); this.alpha = 0; this.maxA = rand(0.3,0.85);
            this.speed = rand(0.003,0.01); this.dir = 1;
            this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            this.vx = rand(-0.12,0.12); this.vy = rand(-0.3,-0.08);
            this.phase = rand(0,Math.PI*2); this.type = Math.random() > 0.5 ? 'star' : 'circle';
        }
        draw(t) {
            const flicker = 0.5 + 0.5 * Math.sin(t * 0.003 + this.phase);
            ctx.save(); ctx.globalAlpha = this.alpha * flicker;
            ctx.fillStyle = this.color; ctx.shadowBlur = this.r * 10; ctx.shadowColor = this.color;
            if (this.type === 'star') {
                ctx.beginPath();
                for (let i = 0; i < 8; i++) {
                    let ang = i * Math.PI / 4;
                    let len = (i % 2 === 0) ? this.r * 3 : this.r;
                    let px = this.x + Math.cos(ang) * len;
                    let py = this.y + Math.sin(ang) * len;
                    i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
                }
                ctx.closePath(); ctx.fill();
            } else {
                ctx.beginPath(); ctx.arc(this.x, this.y, this.r, 0, Math.PI*2); ctx.fill();
            }
            ctx.restore();
        }
        update() {
            this.alpha += this.speed * this.dir;
            if (this.alpha >= this.maxA) this.dir = -1;
            if (this.alpha <= 0) { this.reset(false); return; }
            this.x += this.vx; this.y += this.vy;
            if (this.x < -10) this.x = W+10; if (this.x > W+10) this.x = -10;
            if (this.y < -10) this.reset(false);
        }
    }
    for(let i=0; i<COUNT; i++) particles.push(new Particle());
    let t=0;
    function loop() { ctx.clearRect(0,0,W,H); t++; particles.forEach(p=>{p.update(); p.draw(t);}); requestAnimationFrame(loop); }
    loop();
})();

// Scroll reveal
(function() {
    const els = document.querySelectorAll('[data-reveal]');
    const obs = new IntersectionObserver(entries => {
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
</script>

</body>
</html>