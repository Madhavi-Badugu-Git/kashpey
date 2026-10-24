<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Pharmeasy Pharma | K-Seva – Online Medicine Delivery & Pharmacy Services</title>
    <meta name="description" content="K-Seva Pharmeasy – order medicines online, healthcare products, prescription refills, and wellness essentials. Fast delivery at affordable prices.">
    <meta name="keywords" content="Pharmeasy Pharma, Online Medicine Delivery, Pharmacy, Healthcare Products, Prescription Order, Medicine Home Delivery">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/pharmeasy-pharma">

    <meta property="og:title" content="Pharmeasy Pharma | K-Seva – Medicine Delivery">
    <meta property="og:description" content="Order medicines online, get prescription refills, and shop for healthcare products with doorstep delivery.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-pharma.jpg">
    <meta property="og:url" content="https://k-seva.com/pharmeasy-pharma">
    <meta name="twitter:card" content="summary_large_image">

    <?php include('includes/header_1.php'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/pharmeasy-pharma.css">
</head>
<body class="pharma-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="pharma-page">

    <!-- ========== HERO SECTION (stats card) ========== -->
    <section class="pharma-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="pharma-hero-inner">
            <div class="pharma-hero-text" data-reveal>
                <div class="pharma-badge"><span class="badge-dot"></span><i class="fas fa-capsules"></i>&nbsp; Online Pharmacy</div>
                <h1 class="hero-title">Your Health<br><span class="hero-gradient-text">Our Priority</span></h1>
                <p class="hero-sub">Order medicines online, get prescription refills, and shop for healthcare & wellness products with fast doorstep delivery. Trusted by thousands of customers.</p>
                <div class="pharma-hero-btns">
                    <a href="#pharma-services" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-prescription"></i><span>Order Medicines</span></a>
                    <a href="#pharma-about" class="btn-glass"><i class="fas fa-info-circle"></i><span>Learn More</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-truck"></i> Free Delivery*</div>
                    <div class="trust-badge"><i class="fas fa-shield-alt"></i> Genuine Medicines</div>
                    <div class="trust-badge"><i class="fas fa-clock"></i> 24/7 Support</div>
                </div>
            </div>
            <div class="pharma-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">Pharma Stats</span>
                    <span class="hc-live-badge">ACTIVE</span>
                </div>
                <div class="pharma-stat-row">
                    <div class="pharma-stat"><div class="pharma-stat-num c-blue">10K+</div><div class="pharma-stat-lbl">Happy Customers</div></div>
                    <div class="pharma-stat"><div class="pharma-stat-num c-green">5000+</div><div class="pharma-stat-lbl">Products Available</div></div>
                    <div class="pharma-stat"><div class="pharma-stat-num c-gold">24/7</div><div class="pharma-stat-lbl">Order Support</div></div>
                    <div class="pharma-stat"><div class="pharma-stat-num c-white">Genuine</div><div class="pharma-stat-lbl">Quality Assured</div></div>
                </div>
                <div class="pharma-transfer-demo">
                    <div class="td-node td-from"><div class="td-icon"><i class="fas fa-prescription-bottle"></i></div><div class="td-label">Your Prescription</div><div class="td-val">Upload & Order</div></div>
                    <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Delivered</div></div>
                    <div class="td-node td-to"><div class="td-icon"><i class="fas fa-home"></i></div><div class="td-label">At Your Doorstep</div><div class="td-val">Fast Delivery</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Pharmeasy Pharma</span></div></nav>

    <!-- ========== INTRO SECTION (two-column + enquiry form) ========== -->
    <section class="pharma-intro" id="pharma-about">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="intro-two-col" data-reveal>
                <div class="pharma-intro-text">
                    <div class="sec-tag"><i class="fas fa-capsules"></i> About Pharmeasy Pharma</div>
                    <h2 class="sec-title" style="color:#00335a">Online Medicine Delivery<br><span>Made Simple & Reliable</span></h2>
                    <div class="sec-divider"><span></span><i class="fas fa-pills"></i><span></span></div>
                    <p>Pharmeasy Pharma is your trusted online pharmacy partner. We provide genuine medicines, healthcare products, and wellness essentials delivered right to your doorstep. Say goodbye to long queues at local pharmacies – order from the comfort of your home.</p>
                    <p>We understand that health needs can arise anytime. That's why we offer 24/7 online ordering, prescription upload support, and quick delivery. Our platform partners with licensed pharmacies across India to ensure you receive only authentic, high‑quality medicines.</p>
                    <p>From chronic disease management to everyday wellness, we have everything you need – including vitamins, supplements, personal care, baby care, and medical devices.</p>
                    <div class="intro-pills">
                        <span class="pill pill-blue"><i class="fas fa-truck"></i> Free Delivery*</span>
                        <span class="pill pill-green"><i class="fas fa-check-circle"></i> Genuine Medicines</span>
                        <span class="pill pill-gold"><i class="fas fa-prescription"></i> Prescription Support</span>
                        <span class="pill pill-navy"><i class="fas fa-headset"></i> 24/7 Care</span>
                    </div>
                </div>
                <div class="pharma-enquiry-wrapper">
                    <?php 
                    $current_page_name = "Pharmeasy Pharma";
                    $current_service_category = "pharmeasy";
                    include('includes/enquiry_form.php'); 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES GRID (key offerings) ========== -->
    <section class="pharma-services" id="pharma-services">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-list-ul"></i> Our Services</div>
                <h2 class="sec-title">What We <span>Offer</span></h2>
                <p class="sec-sub">Complete healthcare solutions at your fingertips.</p>
            </div>
            <div class="pharma-services-grid" data-reveal>

                <!-- Medicine Delivery -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-capsules"></i></div>
                    <h3>Medicine Delivery</h3>
                    <p>Order prescribed medicines online and get them delivered fast. Upload your prescription or search by medicine name.</p>
                    <a href="#enquire" class="card-btn">Order Now →</a>
                </div>

                <!-- Prescription Refill -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-prescription"></i></div>
                    <h3>Prescription Refill</h3>
                    <p>Easy refill for your regular medicines. Set reminders and never miss a dose.</p>
                    <a href="#enquire" class="card-btn">Refill Now →</a>
                </div>

                <!-- Healthcare Products -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>Healthcare & Wellness</h3>
                    <p>Vitamins, supplements, fitness essentials, and personal care products at great prices.</p>
                    <a href="#enquire" class="card-btn">Shop Now →</a>
                </div>

                <!-- Lab Tests -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-microscope"></i></div>
                    <h3>Lab Test Booking</h3>
                    <p>Book diagnostic tests from home. Sample collection and reports delivered online.</p>
                    <a href="#enquire" class="card-btn">Book Test →</a>
                </div>

                <!-- Health Consultation -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-user-md"></i></div>
                    <h3>Online Doctor Consultation</h3>
                    <p>Talk to licensed doctors from the comfort of your home. Get prescriptions and advice.</p>
                    <a href="#enquire" class="card-btn">Consult Now →</a>
                </div>

                <!-- Partner Pharmacies -->
                <div class="pharma-service-card">
                    <div class="pharma-card-icon"><i class="fas fa-store"></i></div>
                    <h3>Become a Partner Pharmacy</h3>
                    <p>Join our network and expand your reach. Earn attractive commissions and grow your business.</p>
                    <a href="#enquire" class="card-btn">Partner With Us →</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== WHY CHOOSE SECTION ========== -->
    <section class="pharma-why">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-green"><i class="fas fa-star"></i> Why Choose Us</div>
                <h2 class="sec-title">Why <span>Pharmeasy Pharma</span></h2>
                <p class="sec-sub">Trust, quality, and convenience – all in one place.</p>
            </div>
            <div class="pharma-why-grid" data-reveal>
                <div class="pharma-why-card"><i class="fas fa-shield-alt"></i><h3>100% Genuine Medicines</h3><p>Sourced from licensed and trusted pharmacies.</p></div>
                <div class="pharma-why-card"><i class="fas fa-truck"></i><h3>Fast & Free Delivery*</h3><p>Doorstep delivery within 24-48 hours.</p></div>
                <div class="pharma-why-card"><i class="fas fa-wallet"></i><h3>Affordable Prices</h3><p>Best prices with regular discounts and offers.</p></div>
                <div class="pharma-why-card"><i class="fas fa-headset"></i><h3>24/7 Customer Support</h3><p>Call, chat, or email – we're always here.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== HOW IT WORKS SECTION ========== -->
    <section class="pharma-how">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Process</div>
                <h2 class="sec-title">How It <span>Works</span></h2>
                <p class="sec-sub">Order medicines in four easy steps.</p>
            </div>
            <div class="pharma-steps" data-reveal>
                <div class="step-item"><div class="step-num">01</div><div class="step-content"><h4>Upload Prescription</h4><p>Take a photo of your prescription or search by medicine name.</p></div></div>
                <div class="step-arrow"><i class="fas fa-arrow-right"></i></div>
                <div class="step-item"><div class="step-num">02</div><div class="step-content"><h4>Get Price Quote</h4><p>We'll confirm availability and share the best price with discounts.</p></div></div>
                <div class="step-arrow"><i class="fas fa-arrow-right"></i></div>
                <div class="step-item"><div class="step-num">03</div><div class="step-content"><h4>Make Payment</h4><p>Pay online or choose cash on delivery (COD) option.</p></div></div>
                <div class="step-arrow"><i class="fas fa-arrow-right"></i></div>
                <div class="step-item"><div class="step-num">04</div><div class="step-content"><h4>Get Delivery</h4><p>Receive your medicines at your doorstep in tamper‑proof packaging.</p></div></div>
            </div>
            <div class="pharma-cta" data-reveal>
                <h3>Need medicines urgently?</h3>
                <p>Place your order now and get quick delivery.</p>
                <a href="#enquire" class="btn-primary-glow">Order Now →</a>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="pharma-contact">
        <div class="mt-container">
            <div class="pharma-contact-inner">
                <div class="pharma-contact-text">
                    <h3>Need Help with <span>Medicine Order?</span></h3>
                    <p>Contact our K-Seva pharma expert — we're here to assist you anytime.</p>
                </div>
                <div class="pharma-contact-items">
                    <div class="pharma-contact-item">
                        <div class="ct-ico">📞</div>
                        <div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div>
                    </div>
                    <div class="pharma-contact-item">
                        <div class="ct-ico">✉️</div>
                        <div><span class="ct-label">Email</span><div class="ct-val"><a href="mailto:<?php echo $comp_email; ?>"><?php echo $comp_email; ?></a></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
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
    function rand(a,b) { return a + Math.random()*(b-a); }
    class Particle {
        constructor() { this.reset(true); }
        reset(init) {
            this.x = rand(0,W); this.y = init ? rand(0,H) : H+10;
            this.r = rand(0.6,2.8); this.alpha = 0; this.maxA = rand(0.3,0.85);
            this.speed = rand(0.003,0.01); this.dir = 1;
            this.color = COLORS[Math.floor(Math.random()*COLORS.length)];
            this.vx = rand(-0.12,0.12); this.vy = rand(-0.3,-0.08);
            this.phase = rand(0,Math.PI*2); this.type = Math.random()>0.5 ? 'star':'circle';
        }
        draw(t) {
            const flicker = 0.5+0.5*Math.sin(t*0.003+this.phase);
            ctx.save(); ctx.globalAlpha = this.alpha*flicker; ctx.fillStyle = this.color;
            ctx.shadowBlur = this.r*10; ctx.shadowColor = this.color;
            if(this.type === 'star') {
                const r = this.r; ctx.beginPath();
                for(let i=0;i<8;i++) { let ang = (i*Math.PI)/4, len = i%2===0 ? r*3 : r;
                    let px = this.x+Math.cos(ang)*len, py = this.y+Math.sin(ang)*len;
                    i===0 ? ctx.moveTo(px,py) : ctx.lineTo(px,py);
                } ctx.closePath(); ctx.fill();
            } else { ctx.beginPath(); ctx.arc(this.x,this.y,this.r,0,Math.PI*2); ctx.fill(); }
            ctx.restore();
        }
        update() {
            this.alpha += this.speed*this.dir;
            if(this.alpha >= this.maxA) this.dir = -1;
            if(this.alpha <= 0) { this.reset(false); return; }
            this.x += this.vx; this.y += this.vy;
            if(this.x < -10) this.x = W+10; if(this.x > W+10) this.x = -10;
            if(this.y < -10) this.reset(false);
        }
    }
    for(let i=0;i<COUNT;i++) particles.push(new Particle());
    let t=0;
    function loop() { ctx.clearRect(0,0,W,H); t++; particles.forEach(p=>{p.update(); p.draw(t);}); requestAnimationFrame(loop); }
    loop();
})();

(function() {
    const els = document.querySelectorAll('[data-reveal]');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
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