<?php 
session_start();
include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Insurance Premium Payment | K-Seva – Secure Online Insurance Payments</title>
    <meta name="description" content="Pay your insurance premiums online for life, health, motor, travel & general insurance. Secure payment, instant confirmation, 24/7 access with K-Seva.">
    <meta name="keywords" content="Insurance Premium Payment, Pay Insurance Online, Life Insurance Premium, Health Insurance Payment, Motor Insurance Renewal, K-Seva">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://www.k-seva.com/insurance-premium-payment">
    <!-- Open Graph -->
    <meta property="og:title" content="Insurance Premium Payment – Secure & Convenient | K-Seva">
    <meta property="og:description" content="Pay your insurance premiums online instantly. Life, health, motor, travel, general insurance. Secure payment, instant confirmation.">
    <meta property="og:image" content="https://www.k-seva.com/assets/images/og-insurance-premium.jpg">
    <meta property="og:url" content="https://www.k-seva.com/insurance-premium-payment">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Insurance Premium Payment">
    <meta name="twitter:description" content="Fast & secure online insurance premium payment for all policy types.">
    <?php include('includes/header_1.php'); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/insurance-premium.css">
</head>

<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page insurance-page">

    <!-- ========== HERO SECTION ========== -->
    <section class="mt-hero insurance-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-shield-alt"></i>&nbsp; Insurance Payment</div>
                <h1 class="hero-title">Insurance Premium<br><span class="hero-gradient-text">Payment Online</span></h1>
                <p class="hero-sub">Pay your insurance premiums quickly and securely for life, health, motor, travel & general insurance. Instant confirmation, 24/7 access.</p>
                <div class="mt-hero-btns">
                    <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-file-invoice-dollar"></i><span>Pay Premium Now</span></a>
                    <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-shield-alt"></i> 100% Secure</div>
                    <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Available</div>
                    <div class="trust-badge"><i class="fas fa-check-circle"></i> Instant Confirmation</div>
                </div>
            </div>
            <div class="mt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">Premium Payment Stats</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-blue">8 Lakh+</div><div class="mt-stat-lbl">Monthly Premium Payments</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-green">5+ Insurance Types</div><div class="mt-stat-lbl">Life, Health, Motor & more</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">100%</div><div class="mt-stat-lbl">Secure Transactions</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">24/7</div><div class="mt-stat-lbl">Service Available</div></div>
                </div>
                <div class="mt-transfer-demo">
                    <div class="td-node td-from"><div class="td-icon"><i class="fas fa-file-invoice"></i></div><div class="td-label">Policy Number</div><div class="td-val">Enter Details</div></div>
                    <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                    <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Premium</div><div class="td-val">Paid</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Insurance Premium Payment</span></div></nav>

    <!-- ========== INTRO + ENQUIRY SECTION ========== -->
    <section class="mt-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-shield-alt"></i> Financial Protection</div>
                <h2 class="sec-title" style="color: #00335a">Insurance <span>Premium Payment</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-file-invoice-dollar"></i><span></span></div>
                <p>Pay your insurance premiums quickly and safely through K-Seva. The platform offers a simple online payment solution for managing premium payments for different types of insurance policies, including life insurance, health insurance, motor insurance, travel insurance, and other general insurance plans. With secure transactions, instant payment confirmation, and easy digital access, K-Seva helps policyholders maintain uninterrupted insurance coverage without hassle.</p>
                <p>Online premium payment services have become increasingly popular because they allow users to pay their policy dues on time from anywhere using mobile phones or computers. Digital payment platforms also help customers avoid missed due dates, policy lapses, and lengthy offline payment procedures.</p>
                <div class="intro-pills">
                    <span class="pill pill-blue"><i class="fas fa-bolt"></i> Instant</span>
                    <span class="pill pill-green"><i class="fas fa-shield-alt"></i> Secure</span>
                    <span class="pill pill-gold"><i class="fas fa-rupee-sign"></i> No Late Fees</span>
                    <span class="pill pill-navy"><i class="fas fa-clock"></i> 24/7</span>
                </div>
            </div>

            <?php 
            $current_page_name = "Insurance Premium Payment";
            $current_service_category = "insurance_premium";
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
                <h2 class="sec-title light">Why Choose K-Seva <span>Insurance Premium Payment</span></h2>
                <p class="sec-sub light">Fast, reliable, and hassle-free premium payments</p>
            </div>
            <div class="mt-why-grid">
                <div class="mt-why-card" data-reveal><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-bolt"></i></div><h3>Fast & Secure</h3><p>Instant premium payment with secure gateway and real-time confirmation.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-university"></i></div><h3>All Insurance Types</h3><p>Support for life, health, motor, travel & general insurance.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-list-ul"></i></div><h3>Multiple Policies</h3><p>Manage premium payments for multiple policies easily.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>Instant Confirmation</h3><p>Get immediate SMS and email confirmation on successful payment.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-history"></i></div><h3>Payment History</h3><p>Track all your past premium payments and download receipts anytime.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-lock"></i></div><h3>Secure Payments</h3><p>Advanced encryption protects every transaction.</p><div class="wc-shine"></div></div>
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
                <h2 class="sec-title" style="color: #00335a">Benefits of <span>Online Premium Payment</span></h2>
                <p class="sec-sub">Maintain active coverage and avoid policy lapses</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card" data-reveal><div class="benefit-icon"><i class="fas fa-hourglass-half"></i></div><h4>Saves Time & Effort</h4><p>No need to visit insurance offices.</p></div>
                <div class="benefit-card" data-reveal data-delay="80"><div class="benefit-icon"><i class="fas fa-ban"></i></div><h4>Avoid Policy Lapses</h4><p>Never miss a premium due date.</p></div>
                <div class="benefit-card" data-reveal data-delay="160"><div class="benefit-icon"><i class="fas fa-shield-alt"></i></div><h4>Secure Transactions</h4><p>Fully encrypted payment processing.</p></div>
                <div class="benefit-card" data-reveal data-delay="240"><div class="benefit-icon"><i class="fas fa-bell"></i></div><h4>Instant Updates</h4><p>Get real-time payment alerts & receipts.</p></div>
                <div class="benefit-card" data-reveal data-delay="320"><div class="benefit-icon"><i class="fas fa-archive"></i></div><h4>Payment History</h4><p>Easy access to all past premium records.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== HOW IT WORKS SECTION ========== -->
    <section class="mt-how" id="how-it-works">
        <div class="how-bg"></div>
        <div class="how-sweep"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Steps</div>
                <h2 class="sec-title" style="color: #00335a">How to Pay <span>Insurance Premium on K-Seva</span></h2>
                <p class="sec-sub">Complete your premium payment in 6 easy steps</p>
            </div>
            <div class="mt-steps">
                <div class="mt-step" data-reveal><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-globe"></i></div><h4>Visit Website</h4><p>Go to K-Seva official website</p></div>
                <div class="mt-step" data-reveal data-delay="80"><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-shield-alt"></i></div><h4>Select Insurance Payment</h4><p>Choose "Insurance Premium Payment" service</p></div>
                <div class="mt-step" data-reveal data-delay="160"><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-university"></i></div><h4>Choose Provider & Type</h4><p>Select your insurer and policy type</p></div>
                <div class="mt-step" data-reveal data-delay="240"><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-keyboard"></i></div><h4>Enter Policy Details</h4><p>Enter policy number and registered details</p></div>
                <div class="mt-step" data-reveal data-delay="320"><div class="step-num">05</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-credit-card"></i></div><h4>Make Payment</h4><p>Complete secure payment</p></div>
                <div class="mt-step" data-reveal data-delay="400"><div class="step-num">06</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Get Confirmation</h4><p>Instant payment confirmation & receipt</p></div>
            </div>
        </div>
    </section>

    <!-- ========== SUPPORTED INSURANCE TYPES SECTION ========== -->
    <section class="mt-insurance-types">
        <div class="insurance-types-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-blue"><i class="fas fa-file-invoice"></i> Supported Services</div>
                <h2 class="sec-title" style="color: #00335a">Supported <span>Insurance Premium Services</span></h2>
                <p class="sec-sub">Pay premiums for all major insurance categories</p>
            </div>
            <div class="insurance-types-grid">
                <div class="insurance-type-card" data-reveal><i class="fas fa-heartbeat"></i><span>Life Insurance Premium</span></div>
                <div class="insurance-type-card" data-reveal data-delay="60"><i class="fas fa-ambulance"></i><span>Health Insurance Premium</span></div>
                <div class="insurance-type-card" data-reveal data-delay="120"><i class="fas fa-car"></i><span>Motor Insurance Renewal</span></div>
                <div class="insurance-type-card" data-reveal data-delay="180"><i class="fas fa-plane"></i><span>Travel Insurance Payment</span></div>
                <div class="insurance-type-card" data-reveal data-delay="240"><i class="fas fa-briefcase"></i><span>General Insurance Premium</span></div>
            </div>
        </div>
    </section>

    <!-- ========== FEATURES SECTION ========== -->
    <section class="mt-features">
        <div class="features-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-gold"><i class="fas fa-cogs"></i> Features</div>
                <h2 class="sec-title" style="color: #00335a">K-Seva Insurance <span>Features</span></h2>
                <p class="sec-sub">Complete digital insurance payment experience</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-reveal><i class="fas fa-clock"></i><h4>24/7 Access</h4><p>Pay premiums anytime, day or night.</p></div>
                <div class="feature-card" data-reveal data-delay="80"><i class="fas fa-lock"></i><h4>Secure Encryption</h4><p>Your data and payments are fully protected.</p></div>
                <div class="feature-card" data-reveal data-delay="160"><i class="fas fa-bolt"></i><h4>Fast Processing</h4><p>Premium credited instantly to your policy.</p></div>
                <div class="feature-card" data-reveal data-delay="240"><i class="fas fa-credit-card"></i><h4>Multiple Methods</h4><p>Support for UPI, cards, net banking & more.</p></div>
                <div class="feature-card" data-reveal data-delay="320"><i class="fas fa-chart-line"></i><h4>Payment Tracking</h4><p>View and manage your premium payment history.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== IMPORTANCE SECTION ========== -->
    <section class="mt-importance">
        <div class="importance-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-green"><i class="fas fa-chart-line"></i> Importance</div>
                <h2 class="sec-title" style="color: #00335a">Importance of <span>Timely Premium Payments</span></h2>
                <p class="sec-sub">Keep your policies active and ensure financial protection</p>
            </div>
            <div class="importance-content" data-reveal>
                <p>Paying insurance premiums on time is important to keep policies active and ensure uninterrupted financial protection. Delayed premium payments may lead to penalties, reduced benefits, or policy cancellation depending on the insurer's terms and conditions. Digital payment platforms help customers avoid these issues by offering fast and reliable online payment services.</p>
                <p>Digital insurance payment services are becoming more widely used because they provide secure transactions, faster processing, and convenient policy management. Online financial service platforms continue to see growing demand for integrated bill payment and insurance renewal solutions as users prefer managing their financial services digitally.</p>
            </div>
        </div>
    </section>

    <!-- ========== SUPPORTED SERVICES SECTION ========== -->
    <section class="mt-supported">
        <div class="supported-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-light"><i class="fas fa-concierge-bell"></i> Also Available</div>
                <h2 class="sec-title light">Other <span>Services</span></h2>
                <p class="sec-sub light">Complete digital payment solutions</p>
            </div>
            <div class="supported-grid">
                <div class="supported-card" data-reveal><i class="fas fa-shield-alt"></i><span>Insurance Premium</span></div>
                <div class="supported-card" data-reveal data-delay="60"><i class="fas fa-charging-station"></i><span>Mobile Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="120"><i class="fas fa-receipt"></i><span>Postpaid Bill</span></div>
                <div class="supported-card" data-reveal data-delay="180"><i class="fas fa-bolt"></i><span>Electricity Bill</span></div>
                <div class="supported-card" data-reveal data-delay="240"><i class="fas fa-tv"></i><span>DTH Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="300"><i class="fas fa-road"></i><span>FASTag Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="360"><i class="fas fa-hand-holding-usd"></i><span>Loan EMI Payment</span></div>
            </div>
        </div>
    </section>

    <!-- ========== CTA SECTION ========== -->
    <section class="mt-cta">
        <div class="cta-orb cta-orb-1"></div><div class="cta-orb cta-orb-2"></div><div class="cta-mesh"></div><div class="cta-sweep"></div>
        <div class="mt-container"><div class="cta-inner"><div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-shield-alt"></i></div><h2 class="cta-title">Ready to <span>Pay Your Premium?</span></h2><p class="cta-sub">Keep your insurance coverage active and uninterrupted.</p><div class="mt-cta-btns"><a href="#enquire" class="btn-primary-glow"><i class="fas fa-file-invoice-dollar"></i> Pay Premium Now</a><a href="contact_us" class="btn-glass"><i class="fas fa-headset"></i> Contact Support</a></div><div class="cta-trust"><div class="cta-chip"><i class="fas fa-lock"></i> Secure Payment</div><div class="cta-chip"><i class="fas fa-tachometer-alt"></i> Instant</div><div class="cta-chip"><i class="fas fa-24-hours"></i> 24/7 Support</div></div></div></div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="mt-contact-strip">
        <div class="mt-container"><div class="contact-inner"><div class="contact-text"><h3>Need Help with <span>Premium Payment?</span></h3><p>Our support team is available to assist you.</p></div><div class="contact-items"><div class="contact-item"><div class="ct-ico">📞</div><div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div></div><div class="contact-item"><div class="ct-ico">✉️</div><div><span class="ct-label">Email</span><div class="ct-val"><a href="mailto:support@kseva.com">support@kseva.com</a></div></div></div></div></div></div>
    </section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- Particle + Scroll Reveal Script -->
<script>
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