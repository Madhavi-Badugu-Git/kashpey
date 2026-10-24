<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>K-Seva Micro ATM Services | Cash Withdrawal via Debit Cards</title>
    <meta name="description" content="Access instant cash with K-Seva Micro ATM. Our handheld ATM service allows customers to withdraw money using any bank Debit Card (Rupay, Visa, Mastercard). Fast, secure, and local.">
    <meta name="keywords" content="Micro ATM, K-Seva ATM, Debit Card Withdrawal, Handheld ATM Service, Cash Point, POS ATM, Banking Kiosk, Local ATM Services">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/k-seva-atm">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="K-Seva Micro ATM | Your Neighborhood Cash Point">
    <meta property="og:description" content="Need cash? Use your Debit Card at any K-Seva center. Our Micro ATM service supports all major banks and card types for instant, secure withdrawals.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-kseva-atm.jpg"> <!-- Ensure this image exists -->
    <meta property="og:url" content="https://k-seva.com/k-seva-atm">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva ATM | Portable Banking Solutions">
    <meta name="twitter:description" content="Safe and reliable cash withdrawals using your physical bank card. Experience the convenience of K-Seva Micro ATMs.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-kseva-atm.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/k-seva-atm.css">
</head>
<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page atm-page">

    <!-- ========== HERO – K-Seva ATM Services ========== -->
    <section class="mt-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-university"></i>&nbsp; K-Seva Service</div>
                <h1 class="hero-title">K-Seva <span class="hero-gradient-text">ATM</span><br><span class="hero-subtitle">Services</span></h1>
                <p class="hero-sub">Install an ATM at your location and earn regular income while helping your community access cash easily — from cities to rural areas.</p>
                <div class="mt-hero-btns">
                    <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Apply Now</span></a>
                    <a href="#benefits" class="btn-glass"><i class="fas fa-info-circle"></i><span>View Benefits</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-hand-holding-usd"></i> Extra Income</div>
                    <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Cash Access</div>
                    <div class="trust-badge"><i class="fas fa-headset"></i> Full Support</div>
                </div>
            </div>
            <div class="mt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">ATM Services Overview</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-blue">Extra</div><div class="mt-stat-lbl">Regular Income</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-green">Easy</div><div class="mt-stat-lbl">Installation</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">24x7</div><div class="mt-stat-lbl">Cash Access</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">Full</div><div class="mt-stat-lbl">Tech Support</div></div>
                </div>
                <div class="hero-feature atm-hero-feature">
                    <i class="fas fa-hand-holding-usd"></i>
                    <div><div class="feature-label" >Earn Per Transaction</div><div class="feature-sub" >Regular income from every ATM withdrawal at your location</div></div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb">
        <div class="bc-inner">
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right bc-sep"></i>
            <span>Services</span>
            <i class="fas fa-chevron-right bc-sep"></i>
            <span class="bc-active">ATM Services</span>
        </div>
    </nav>

    <!-- ========== ABOUT + ENQUIRY FORM ========== -->
    <section class="mt-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-info-circle"></i> About This Service</div>
                <h2 class="sec-title">What Is K-Seva <span>ATM Services?</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-atm"></i><span></span></div>
                <p>K-Seva ATM Services provides an opportunity for individuals and business owners to install an ATM at their location and earn extra income. Through our network and technology partners, we help bring ATM services closer to people in cities, towns, and rural areas.</p>
                <p>In many places, people still travel long distances to withdraw cash. By installing an ATM at your shop, office, or commercial space, you can help your community access cash easily while also increasing your business visibility.</p>
                <div class="intro-pills">
                    <span class="pill pill-blue"><i class="fas fa-building"></i> Retail Shops</span>
                    <span class="pill pill-green"><i class="fas fa-briefcase"></i> Small Business</span>
                    <span class="pill pill-gold"><i class="fas fa-gas-pump"></i> Petrol Pumps</span>
                    <span class="pill pill-navy"><i class="fas fa-shopping-mall"></i> Malls & Markets</span>
                </div>
            </div>

            <!-- ENQUIRY FORM CARD – Premium with Glitter -->
            <div class="gold-enquiry-col" data-reveal data-delay="150">
                <?php 
                $current_page_name = "TATA Indicash ATM";
                $current_service_category = "tata_atm";
                include('includes/enquiry_form.php'); 
                ?>
            </div>
        </div>
    </section>

    <!-- ========== BENEFITS SECTION (Dark Glass Cards) ========== -->
    <section class="atm-benefits-dark" id="benefits">
        <div class="aeps-dark-orb aeps-dark-orb--1"></div>
        <div class="aeps-dark-orb aeps-dark-orb--2"></div>
        <div class="aeps-dark-mesh"></div>
        <div class="aeps-dark-sweep"></div>
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-light"><i class="fas fa-star"></i> Why Choose K-Seva</div>
                <h2 class="sec-title light">Benefits of Installing <span>an ATM</span></h2>
                <p class="sec-sub light">Installing an ATM at your location has many advantages. It supports the local community and helps your business grow.</p>
            </div>

            <div class="benefits-grid" data-reveal>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-hand-holding-usd"></i></div><h3>Regular Extra Income</h3><p>Earn a commission on every ATM transaction processed at your location, creating a steady source of income.</p><div class="benefit-shine"></div></div>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-users"></i></div><h3>More Visitors & Customers</h3><p>An ATM at your shop attracts more people, increasing footfall and growing your business.</p><div class="benefit-shine"></div></div>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-tools"></i></div><h3>Easy Installation Process</h3><p>Our team guides you through every step, making installation simple and hassle-free.</p><div class="benefit-shine"></div></div>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-headset"></i></div><h3>Reliable Technical Support</h3><p>We provide ongoing technical support to ensure your ATM runs smoothly at all times.</p><div class="benefit-shine"></div></div>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-clock"></i></div><h3>Cash Access Anytime</h3><p>Help people withdraw cash 24×7 without traveling to distant banks.</p><div class="benefit-shine"></div></div>
                <div class="benefit-glass-card"><div class="benefit-icon"><i class="fas fa-hands-helping"></i></div><h3>Community Support</h3><p>Provide a valuable service and become a trusted point for cash access in your area.</p><div class="benefit-shine"></div></div>
            </div>
        </div>
    </section>

    <!-- ========== WHO CAN APPLY (Light Section) ========== -->
    <section class="atm-who-light">
        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-blue"><i class="fas fa-user-check"></i> Eligibility</div>
                <h2 class="sec-title">Who Can <span>Apply?</span></h2>
                <p class="sec-sub">Anyone with a suitable location can apply for ATM installation through K-Seva. A location with good public access, electricity, and basic space is required.</p>
            </div>

            <div class="who-grid" data-reveal>
                <div class="who-card"><div class="who-icon"><i class="fas fa-store"></i></div><div class="who-text"><h4>Retail Shops</h4><p>Any shop with regular customer footfall</p></div></div>
                <div class="who-card"><div class="who-icon"><i class="fas fa-briefcase"></i></div><div class="who-text"><h4>Small Businesses</h4><p>Any small or medium business with space</p></div></div>
                <div class="who-card"><div class="who-icon"><i class="fas fa-building"></i></div><div class="who-text"><h4>Commercial Buildings</h4><p>Office buildings or commercial complexes</p></div></div>
                <div class="who-card"><div class="who-icon"><i class="fas fa-gas-pump"></i></div><div class="who-text"><h4>Petrol Pumps</h4><p>Fuel stations with high vehicle traffic</p></div></div>
                <div class="who-card"><div class="who-icon"><i class="fas fa-map-marker-alt"></i></div><div class="who-text"><h4>Busy Market Areas</h4><p>High footfall markets and commercial zones</p></div></div>
                <div class="who-card"><div class="who-icon"><i class="fas fa-shopping-bag"></i></div><div class="who-text"><h4>Malls & Complexes</h4><p>Large shopping centres with daily visitors</p></div></div>
            </div>
        </div>
    </section>

    <!-- ========== OUR SUPPORT (Dark Gradient with Steps) ========== -->
    <section class="atm-support-dark">
        <div class="mt-container">
            <div class="support-content" data-reveal>
                <div class="support-text">
                    <div class="sh-tag sh-tag-light"><i class="fas fa-hands-helping"></i> K-Seva Support</div>
                    <h2>Our <span>Support</span> for You</h2>
                    <p>The K-Seva team will guide you through every step of the process — from application to installation. Our goal is to make ATM services accessible and convenient for both business owners and the public.</p>
                </div>
                <ul class="steps-list">
                    <li><div class="step-num">01</div><div class="step-text"><h4>Location Check</h4><p>We visit and evaluate your location to confirm it meets the requirements for ATM installation.</p></div></li>
                    <li><div class="step-num">02</div><div class="step-text"><h4>Requirements Explained</h4><p>Our team clearly explains what is needed — space, electricity, and any documentation required.</p></div></li>
                    <li><div class="step-num">03</div><div class="step-text"><h4>Application Assistance</h4><p>We help you complete the application process correctly and submit all required documents.</p></div></li>
                    <li><div class="step-num">04</div><div class="step-text"><h4>Installation & Setup</h4><p>The ATM is installed by our technical partners and fully set up and tested before going live.</p></div></li>
                    <li><div class="step-num">05</div><div class="step-text"><h4>Ongoing Technical Support</h4><p>After installation, our support team is always available to help with any technical issues.</p></div></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== CTA SECTION ========== -->
    <section class="mt-cta">
        <div class="cta-orb cta-orb-1"></div>
        <div class="cta-orb cta-orb-2"></div>
        <div class="cta-inner">
            <div class="cta-icon-wrap"><i class="fas fa-money-bill-wave"></i><div class="cta-icon-ring"></div></div>
            <h2 class="cta-title">Ready to Install an <span>ATM at Your Location?</span></h2>
            <p class="cta-sub">Join the K-Seva network and start earning regular income while serving your community.</p>
            <div class="mt-cta-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Apply Now</span></a>
                <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass"><i class="fas fa-phone-alt"></i><span>Call Helpline</span></a>
            </div>
            <div class="cta-trust">
                <div class="cta-chip"><i class="fas fa-shield-alt"></i> 100% Secure</div>
                <div class="cta-chip"><i class="fas fa-clock"></i> 24/7 Support</div>
                <div class="cta-chip"><i class="fas fa-chart-line"></i> Earn Per Transaction</div>
            </div>
        </div>
    </section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* Particle Canvas (glitter effect) */
(function () {
    const canvas = document.getElementById('mt-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#c44536','#14b8a6'];
    const COUNT = 80;
    const particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize, { passive: true });
    function rand(a,b){return a+Math.random()*(b-a);}
    class Particle {
        constructor(){ this.reset(true); }
        reset(init){
            this.x=rand(0,W); this.y=init?rand(0,H):H+10;
            this.r=rand(0.6,2.8); this.alpha=0; this.maxA=rand(0.3,0.85);
            this.speed=rand(0.003,0.01); this.dir=1;
            this.color=COLORS[Math.floor(Math.random()*COLORS.length)];
            this.vx=rand(-0.12,0.12); this.vy=rand(-0.3,-0.08);
            this.phase=rand(0,Math.PI*2); this.type=Math.random()>0.5?'star':'circle';
        }
        draw(t){
            const flicker=0.5+0.5*Math.sin(t*0.003+this.phase);
            ctx.save(); ctx.globalAlpha=this.alpha*flicker; ctx.fillStyle=this.color;
            ctx.shadowBlur=this.r*10; ctx.shadowColor=this.color;
            if(this.type==='star'){
                const r=this.r; ctx.beginPath();
                for(let i=0;i<8;i++){ let ang=i*Math.PI/4; let len=i%2===0?r*3:r;
                    let px=this.x+Math.cos(ang)*len, py=this.y+Math.sin(ang)*len;
                    i===0?ctx.moveTo(px,py):ctx.lineTo(px,py);
                } ctx.closePath(); ctx.fill();
            } else { ctx.beginPath(); ctx.arc(this.x,this.y,this.r,0,Math.PI*2); ctx.fill(); }
            ctx.restore();
        }
        update(){
            this.alpha+=this.speed*this.dir;
            if(this.alpha>=this.maxA) this.dir=-1;
            if(this.alpha<=0){ this.reset(false); return; }
            this.x+=this.vx; this.y+=this.vy;
            if(this.x<-10) this.x=W+10; if(this.x>W+10) this.x=-10;
            if(this.y<-10) this.reset(false);
        }
    }
    for(let i=0;i<COUNT;i++) particles.push(new Particle());
    let t=0;
    function loop(){ ctx.clearRect(0,0,W,H); t++; particles.forEach(p=>{p.update(); p.draw(t);}); requestAnimationFrame(loop); }
    loop();
})();

/* Scroll Reveal */
(function(){
    const els=document.querySelectorAll('[data-reveal]');
    const obs=new IntersectionObserver(entries=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                const el=entry.target;
                const delay=parseInt(el.getAttribute('data-delay')||0);
                setTimeout(()=>el.classList.add('revealed'), delay);
                obs.unobserve(el);
            }
        });
    },{threshold:0.12, rootMargin:'0px 0px -40px 0px'});
    els.forEach(el=>obs.observe(el));
})();
</script>

</body>
</html>