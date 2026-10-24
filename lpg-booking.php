<?php 
session_start();
include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>LPG Gas Cylinder Booking | K-Seva – Easy & Secure Online Booking</title>
    <meta name="description" content="Book LPG gas cylinder refill online for Indane, Bharat Gas, HP Gas. Instant confirmation, secure payment, 24/7 access with K-Seva.">
    <meta name="keywords" content="LPG Booking, Gas Cylinder Booking, Indane Gas Booking, Bharat Gas Booking, HP Gas Booking, Online LPG Refill, K-Seva">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://www.k-seva.com/lpg-booking">
    <!-- Open Graph -->
    <meta property="og:title" content="LPG Gas Cylinder Booking – Easy & Secure | K-Seva">
    <meta property="og:description" content="Book your LPG cylinder refill online instantly. Support for Indane, Bharat Gas, HP Gas. Secure payment, instant confirmation.">
    <meta property="og:image" content="https://www.k-seva.com/assets/images/og-lpg-booking.jpg">
    <meta property="og:url" content="https://www.k-seva.com/lpg-booking">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva LPG Gas Booking">
    <meta name="twitter:description" content="Fast & secure online LPG cylinder booking for all major providers.">
    <?php include('includes/header_1.php'); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lpg-booking.css">
</head>

<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page lpg-page">

    <!-- ========== HERO SECTION ========== -->
    <section class="mt-hero lpg-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-fire"></i>&nbsp; LPG Booking</div>
                <h1 class="hero-title">LPG Gas Cylinder<br><span class="hero-gradient-text">Booking Online</span></h1>
                <p class="hero-sub">Book your LPG cylinder refill instantly for Indane Gas, Bharat Gas, and HP Gas. Secure payment, instant confirmation, 24/7 access.</p>
                <div class="mt-hero-btns">
                    <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-gas-pump"></i><span>Book Now</span></a>
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
                    <span class="hc-title">LPG Booking Stats</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-blue">10 Lakh+</div><div class="mt-stat-lbl">Monthly Bookings</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-green">3 Major Providers</div><div class="mt-stat-lbl">Indane · Bharat · HP</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">100%</div><div class="mt-stat-lbl">Secure Payments</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">24/7</div><div class="mt-stat-lbl">Service Available</div></div>
                </div>
                <div class="mt-transfer-demo">
                    <div class="td-node td-from"><div class="td-icon"><i class="fas fa-gas-pump"></i></div><div class="td-label">Consumer No.</div><div class="td-val">Enter Details</div></div>
                    <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                    <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Booking</div><div class="td-val">Confirmed</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">LPG Gas Booking</span></div></nav>

    <!-- ========== INTRO + ENQUIRY SECTION ========== -->
    <section class="mt-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-fire"></i> Utility Service</div>
                <h2 class="sec-title" style="color: #00335a">LPG Gas Cylinder <span>Booking</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-gas-pump"></i><span></span></div>
                <p>Book your LPG gas cylinder quickly and conveniently through K-Seva. The platform offers a smooth and secure online gas booking service that allows users to book LPG cylinder refills from leading gas providers such as Indane Gas, Bharat Gas, and HP Gas. With instant booking confirmation, secure payment options, and easy online access, K-Seva helps simplify everyday utility services.</p>
                <p>Online LPG booking services have made gas refill management faster and more convenient compared to traditional offline booking methods. Users can now book cylinders from their mobile phones or computers without visiting gas agencies or waiting in long queues.</p>
                <div class="intro-pills">
                    <span class="pill pill-blue"><i class="fas fa-bolt"></i> Instant</span>
                    <span class="pill pill-green"><i class="fas fa-shield-alt"></i> Secure</span>
                    <span class="pill pill-gold"><i class="fas fa-rupee-sign"></i> Best Rates</span>
                    <span class="pill pill-navy"><i class="fas fa-clock"></i> 24/7</span>
                </div>
            </div>

            <?php 
            $current_page_name = "LPG Gas Booking";
            $current_service_category = "lpg_booking";
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
                <h2 class="sec-title light">Why Choose K-Seva <span>LPG Booking</span></h2>
                <p class="sec-sub light">Fast, reliable, and hassle-free gas cylinder booking</p>
            </div>
            <div class="mt-why-grid">
                <div class="mt-why-card" data-reveal><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-bolt"></i></div><h3>Quick & Hassle-free</h3><p>Instant booking with secure gateway and real-time confirmation.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-gas-pump"></i></div><h3>All Major Providers</h3><p>Support for Indane, Bharat Gas, HP Gas and more.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-list-ul"></i></div><h3>Multiple Connections</h3><p>Manage bookings for multiple LPG connections easily.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>Instant Confirmation</h3><p>Get immediate SMS and email confirmation on successful booking.</p><div class="wc-shine"></div></div>
                <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-history"></i></div><h3>Booking History</h3><p>Track all your past bookings and delivery status anytime.</p><div class="wc-shine"></div></div>
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
                <h2 class="sec-title" style="color: #00335a">Benefits of <span>Online LPG Booking</span></h2>
                <p class="sec-sub">Manage gas refills efficiently and save time</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card" data-reveal><div class="benefit-icon"><i class="fas fa-hourglass-half"></i></div><h4>Saves Time</h4><p>No waiting at gas agencies – book from anywhere.</p></div>
                <div class="benefit-card" data-reveal data-delay="80"><div class="benefit-icon"><i class="fas fa-ban"></i></div><h4>Avoid Queues</h4><p>Skip long lines, book instantly online.</p></div>
                <div class="benefit-card" data-reveal data-delay="160"><div class="benefit-icon"><i class="fas fa-bell"></i></div><h4>Instant Updates</h4><p>Get real-time booking alerts and delivery status.</p></div>
                <div class="benefit-card" data-reveal data-delay="240"><div class="benefit-icon"><i class="fas fa-shield-alt"></i></div><h4>Secure Payments</h4><p>Safe and encrypted transaction processing.</p></div>
                <div class="benefit-card" data-reveal data-delay="320"><div class="benefit-icon"><i class="fas fa-archive"></i></div><h4>Booking History</h4><p>Easy access to all past refill records.</p></div>
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
                <h2 class="sec-title" style="color: #00335a">How to Book <span>LPG Cylinder on K-Seva</span></h2>
                <p class="sec-sub">Complete your gas cylinder booking in 6 easy steps</p>
            </div>
            <div class="mt-steps">
                <div class="mt-step" data-reveal><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-globe"></i></div><h4>Visit Website</h4><p>Go to K-Seva official website</p></div>
                <div class="mt-step" data-reveal data-delay="80"><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-gas-pump"></i></div><h4>Select Gas Booking</h4><p>Choose "Gas Cylinder Booking" service</p></div>
                <div class="mt-step" data-reveal data-delay="160"><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-tags"></i></div><h4>Choose Provider</h4><p>Select Indane, Bharat Gas or HP Gas</p></div>
                <div class="mt-step" data-reveal data-delay="240"><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-keyboard"></i></div><h4>Enter Details</h4><p>Enter consumer number or registered mobile</p></div>
                <div class="mt-step" data-reveal data-delay="320"><div class="step-num">05</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-credit-card"></i></div><h4>Make Payment</h4><p>Complete secure payment</p></div>
                <div class="mt-step" data-reveal data-delay="400"><div class="step-num">06</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Get Confirmation</h4><p>Instant booking confirmation</p></div>
            </div>
        </div>
    </section>

    <!-- ========== SUPPORTED PROVIDERS SECTION ========== -->
    <section class="mt-providers">
        <div class="providers-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-blue"><i class="fas fa-fire"></i> Supported Providers</div>
                <h2 class="sec-title" style="color: #00335a">Supported <span>LPG Providers</span></h2>
                <p class="sec-sub">Book cylinders from all major gas companies</p>
            </div>
            <div class="providers-grid">
                <div class="provider-card" data-reveal><i class="fas fa-fire"></i><span>Indane Gas</span></div>
                <div class="provider-card" data-reveal data-delay="80"><i class="fas fa-fire"></i><span>Bharat Gas</span></div>
                <div class="provider-card" data-reveal data-delay="160"><i class="fas fa-fire"></i><span>HP Gas</span></div>
            </div>
        </div>
    </section>

    <!-- ========== FEATURES SECTION ========== -->
    <section class="mt-features">
        <div class="features-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-gold"><i class="fas fa-cogs"></i> Features</div>
                <h2 class="sec-title" style="color: #00335a"> K-Seva LPG Booking <span>Features</span></h2>
                <p class="sec-sub">Complete digital utility service experience</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-reveal><i class="fas fa-clock"></i><h4>24/7 Access</h4><p>Book cylinders anytime, day or night.</p></div>
                <div class="feature-card" data-reveal data-delay="80"><i class="fas fa-lock"></i><h4>Secure Encryption</h4><p>Your data and payments are fully protected.</p></div>
                <div class="feature-card" data-reveal data-delay="160"><i class="fas fa-bolt"></i><h4>Fast Processing</h4><p>Booking confirmed instantly.</p></div>
                <div class="feature-card" data-reveal data-delay="240"><i class="fas fa-credit-card"></i><h4>Multiple Methods</h4><p>Support for UPI, cards, net banking & more.</p></div>
                <div class="feature-card" data-reveal data-delay="320"><i class="fas fa-chart-line"></i><h4>Booking Tracking</h4><p>View delivery status and history.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== SAFETY TIPS SECTION ========== -->
    <section class="mt-safety">
        <div class="safety-deco"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-green"><i class="fas fa-shield-alt"></i> Important Tips</div>
                <h2 class="sec-title" style="color: #00335a">Safety Tips for <span>LPG Booking</span></h2>
                <p class="sec-sub">Stay safe while booking online</p>
            </div>
            <div class="safety-grid">
                <div class="safety-card" data-reveal><div class="safety-icon"><i class="fas fa-check-circle"></i></div><div class="safety-text">Always use trusted and official booking platforms</div></div>
                <div class="safety-card" data-reveal data-delay="80"><div class="safety-icon"><i class="fas fa-check-circle"></i></div><div class="safety-text">Verify payment details before completing transactions</div></div>
                <div class="safety-card" data-reveal data-delay="160"><div class="safety-icon"><i class="fas fa-check-circle"></i></div><div class="safety-text">Avoid clicking unknown booking links or APK files</div></div>
                <div class="safety-card" data-reveal data-delay="240"><div class="safety-icon"><i class="fas fa-check-circle"></i></div><div class="safety-text">Do not share OTPs or sensitive banking information</div></div>
                <div class="safety-card" data-reveal data-delay="320"><div class="safety-icon"><i class="fas fa-check-circle"></i></div><div class="safety-text">Check booking confirmation messages carefully</div></div>
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
                <p class="sec-sub light">Complete digital utility solutions</p>
            </div>
            <div class="supported-grid">
                <div class="supported-card" data-reveal><i class="fas fa-gas-pump"></i><span>LPG Booking</span></div>
                <div class="supported-card" data-reveal data-delay="60"><i class="fas fa-charging-station"></i><span>Mobile Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="120"><i class="fas fa-receipt"></i><span>Postpaid Bill</span></div>
                <div class="supported-card" data-reveal data-delay="180"><i class="fas fa-bolt"></i><span>Electricity Bill</span></div>
                <div class="supported-card" data-reveal data-delay="240"><i class="fas fa-tv"></i><span>DTH Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="300"><i class="fas fa-road"></i><span>FASTag Recharge</span></div>
                <div class="supported-card" data-reveal data-delay="360"><i class="fas fa-wifi"></i><span>Broadband Bill</span></div>
            </div>
        </div>
    </section>

    <!-- ========== CTA SECTION ========== -->
    <section class="mt-cta">
        <div class="cta-orb cta-orb-1"></div><div class="cta-orb cta-orb-2"></div><div class="cta-mesh"></div><div class="cta-sweep"></div>
        <div class="mt-container"><div class="cta-inner"><div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-gas-pump"></i></div><h2 class="cta-title">Ready to <span>Book Your Cylinder?</span></h2><p class="cta-sub">Ensure uninterrupted cooking gas supply for your home.</p><div class="mt-cta-btns"><a href="#enquire" class="btn-primary-glow"><i class="fas fa-gas-pump"></i> Book Now</a><a href="contact_us" class="btn-glass"><i class="fas fa-headset"></i> Contact Support</a></div><div class="cta-trust"><div class="cta-chip"><i class="fas fa-lock"></i> Secure Payment</div><div class="cta-chip"><i class="fas fa-tachometer-alt"></i> Instant</div><div class="cta-chip"><i class="fas fa-24-hours"></i> 24/7 Support</div></div></div></div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="mt-contact-strip">
        <div class="mt-container"><div class="contact-inner"><div class="contact-text"><h3>Need Help with <span>LPG Booking?</span></h3><p>Our support team is available to assist you.</p></div><div class="contact-items"><div class="contact-item"><div class="ct-ico">📞</div><div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div></div><div class="contact-item"><div class="ct-ico">✉️</div><div><span class="ct-label">Email</span><div class="ct-val"><a href="mailto:support@kseva.com">support@kseva.com</a></div></div></div></div></div></div>
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