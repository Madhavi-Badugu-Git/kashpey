<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Tour & Travel Services | K-Seva – Hassle-Free Travel Planning</title>
    <meta name="description" content="K-Seva Tour & Travel – flight booking, train tickets, hotel reservations, visa assistance, and customised tour packages. Reliable travel support for every journey.">
    <meta name="keywords" content="Tour & Travel, Flight Booking, Train Ticket, Hotel Booking, Visa Assistance, Customised Tour Packages, Holiday Packages">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/tour-travel">

    <meta property="og:title" content="Tour & Travel Services | K-Seva – Hassle-Free Travel">
    <meta property="og:description" content="Book flights, trains, hotels, visas, and customised tour packages with K-Seva. Travel made simple.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-travel.jpg">
    <meta property="og:url" content="https://k-seva.com/tour-travel">
    <meta name="twitter:card" content="summary_large_image">

    <?php include('includes/header_1.php'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/tour-travel.css">
</head>
<body class="tt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="tt-page">

    <!-- ========== HERO SECTION (stats card) ========== -->
    <section class="tt-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="tt-hero-inner">
            <div class="tt-hero-text" data-reveal>
                <div class="tt-badge"><span class="badge-dot"></span><i class="fas fa-plane"></i>&nbsp; Tour & Travel</div>
                <h1 class="hero-title">Reliable<br><span class="hero-gradient-text">Travel Assistance</span></h1>
                <p class="hero-sub">K-Seva provides convenient and customer‑friendly tour and travel support for individuals, families, and business travelers. Plan your journey with ease – from tickets to hotels and visas.</p>
                <div class="tt-hero-btns">
                    <a href="#tt-services" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-ticket-alt"></i><span>Book Now</span></a>
                    <a href="#tt-about" class="btn-glass"><i class="fas fa-info-circle"></i><span>Learn More</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-plane-departure"></i> Flight Booking</div>
                    <div class="trust-badge"><i class="fas fa-train"></i> Train Tickets</div>
                    <div class="trust-badge"><i class="fas fa-hotel"></i> Hotel Reservations</div>
                </div>
            </div>
            <div class="tt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">Travel Stats</span>
                    <span class="hc-live-badge">ACTIVE</span>
                </div>
                <div class="tt-stat-row">
                    <div class="tt-stat"><div class="tt-stat-num c-blue">1000+</div><div class="tt-stat-lbl">Happy Travelers</div></div>
                    <div class="tt-stat"><div class="tt-stat-num c-green">24/7</div><div class="tt-stat-lbl">Booking Support</div></div>
                    <div class="tt-stat"><div class="tt-stat-num c-gold">500+</div><div class="tt-stat-lbl">Destinations</div></div>
                    <div class="tt-stat"><div class="tt-stat-num c-white">Easy</div><div class="tt-stat-lbl">Cancellation</div></div>
                </div>
                <div class="tt-transfer-demo">
                    <div class="td-node td-from"><div class="td-icon"><i class="fas fa-map-marker-alt"></i></div><div class="td-label">You</div><div class="td-val">Plan Trip</div></div>
                    <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Booked</div></div>
                    <div class="td-node td-to"><div class="td-icon"><i class="fas fa-umbrella-beach"></i></div><div class="td-label">Enjoy</div><div class="td-val">Hassle‑Free Journey</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Tour & Travel</span></div></nav>

    <!-- ========== INTRO SECTION (two-column + enquiry form) ========== -->
    <section class="tt-intro" id="tt-about">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="intro-two-col" data-reveal>
                <div class="tt-intro-text">
                    <div class="sec-tag"><i class="fas fa-globe-asia"></i> About Our Service</div>
                    <h2 class="sec-title" style="color:#00335a">Reliable <span>Tour & Travel</span> Assistance</h2>
                    <div class="sec-divider"><span></span><i class="fas fa-plane"></i><span></span></div>
                    <p>K-Seva provides convenient and customer‑friendly tour and travel support services for individuals, families, and business travelers. Our platform helps customers with travel planning, ticket booking assistance, hotel reservations, holiday packages, and other travel‑related services through a simple and hassle‑free process.</p>
                    <p>Whether you are planning a family vacation, business trip, pilgrimage tour, or domestic travel, K-Seva offers reliable assistance to make your journey smooth and comfortable. Our services are designed to help customers save time and enjoy stress‑free travel arrangements with proper support and guidance.</p>
                    <div class="intro-pills">
                        <span class="pill pill-blue"><i class="fas fa-plane"></i> Flight Booking</span>
                        <span class="pill pill-green"><i class="fas fa-train"></i> Train Tickets</span>
                        <span class="pill pill-gold"><i class="fas fa-hotel"></i> Hotels</span>
                        <span class="pill pill-navy"><i class="fas fa-passport"></i> Visa Support</span>
                    </div>
                </div>
                <div class="tt-enquiry-wrapper">
                    <?php 
                    $current_page_name = "Tour & Travel";
                    $current_service_category = "tour_travel";
                    include('includes/enquiry_form.php'); 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES GRID ========== -->
    <section class="tt-services" id="tt-services">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag"><i class="fas fa-concierge-bell"></i> Our Services</div>
                <h2 class="sec-title">Complete <span>Travel Solutions</span></h2>
                <p class="sec-sub">From flight tickets to customised tour packages – we handle every part of your journey.</p>
            </div>
            <div class="tt-services-grid" data-reveal>

                <!-- Flight Ticket Booking -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-plane-departure"></i></div>
                    <h3>Flight Ticket Booking</h3>
                    <p>Book domestic and international flight tickets easily through the K-Seva travel portal. Competitive airfare deals, quick booking, simple cancellation, and smooth rescheduling.</p>
                    <div class="portal-url">Portal: b2b.thetripmantra.in</div>
                    <a href="#enquire" class="card-btn">Book Now →</a>
                </div>

                <!-- Train Ticket Booking -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-train"></i></div>
                    <h3>Train Ticket Booking</h3>
                    <p>Book train tickets quickly for safe travel across India. Regular and Tatkal booking support. Also become an authorised railway booking partner and earn commissions.</p>
                    <a href="#enquire" class="card-btn">Book Now →</a>
                </div>

                <!-- Hotel Booking -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-hotel"></i></div>
                    <h3>Hotel Booking</h3>
                    <p>Find and book hotels, resorts, and serviced apartments. Wide selection, affordable pricing, exclusive deals, and instant confirmation.</p>
                    <div class="portal-url">Portal: The Trip Mantra B2B</div>
                    <a href="#enquire" class="card-btn">Book Now →</a>
                </div>

                <!-- Visa Application Services -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-passport"></i></div>
                    <h3>Visa Application Services</h3>
                    <p>Apply for your visa easily with our online assistance. Document preparation, application submission, appointment and interview preparation support.</p>
                    <a href="#enquire" class="card-btn">Apply Now →</a>
                </div>

                <!-- Customised Tour Packages -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-umbrella-beach"></i></div>
                    <h3>Customised Tour Packages</h3>
                    <p>Affordable, luxury, group, or customised packages – domestic & international. Includes flights, hotels, transfers, and sightseeing.</p>
                    <a href="#enquire" class="card-btn">Explore Packages →</a>
                </div>

                <!-- Partner / Franchise Opportunity -->
                <div class="tt-service-card">
                    <div class="tt-card-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Become a Travel Partner</h3>
                    <p>Earn attractive commissions as an authorised railway ticket booking partner or travel agent. Join our network and grow your business.</p>
                    <a href="#enquire" class="card-btn">Enquire Now →</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== WHY CHOOSE SECTION ========== -->
    <section class="tt-why">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-green"><i class="fas fa-star"></i> Why Choose K-Seva</div>
                <h2 class="sec-title">Why Travel <span>With Us</span></h2>
                <p class="sec-sub">Simple, reliable, and customer‑focused travel support.</p>
            </div>
            <div class="tt-why-grid" data-reveal>
                <div class="tt-why-card"><i class="fas fa-headset"></i><h3>24/7 Support</h3><p>Round‑the‑clock booking and assistance.</p></div>
                <div class="tt-why-card"><i class="fas fa-chart-line"></i><h3>Competitive Deals</h3><p>Best airfare, hotel, and package rates.</p></div>
                <div class="tt-why-card"><i class="fas fa-sync-alt"></i><h3>Easy Cancellation</h3><p>Simple cancellation and rescheduling.</p></div>
                <div class="tt-why-card"><i class="fas fa-shield-alt"></i><h3>Trusted Partners</h3><p>Authorised bookings with The Trip Mantra.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="tt-contact">
        <div class="mt-container">
            <div class="tt-contact-inner">
                <div class="tt-contact-text">
                    <h3>Need Help with <span>Travel Planning?</span></h3>
                    <p>Contact our K-Seva travel expert — we're here to assist you anytime.</p>
                </div>
                <div class="tt-contact-items">
                    <div class="tt-contact-item">
                        <div class="ct-ico">📞</div>
                        <div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div>
                    </div>
                    <div class="tt-contact-item">
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