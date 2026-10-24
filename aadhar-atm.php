<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Aadhaar ATM & AePS Services | K-Seva – Withdraw Cash with Biometrics</title>
    <meta name="description" content="Use K-Seva's Aadhaar ATM (AePS) to withdraw cash, check bank balances, and get mini statements using just your Aadhaar number and fingerprint. Secure, fast, and bank-neutral.">
    <meta name="keywords" content="Aadhaar ATM, AePS Service, Aadhaar Enabled Payment System, Cash Withdrawal, Biometric Banking, K-Seva Aadhaar, Mini Bank Service, Aadhaar Banking India">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/aadhar-atm">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="Aadhaar ATM Service | Instant Cash Withdrawal via K-Seva">
    <meta property="og:description" content="No Debit Card? No problem! Withdraw cash from any bank account using your Aadhaar and fingerprint at any K-Seva center. Fast and 100% secure.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-aadhar-atm.jpg"> <!-- Ensure this image exists -->
    <meta property="og:url" content="https://k-seva.com/aadhar-atm">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Aadhaar ATM | Digital Banking for All">
    <meta name="twitter:description" content="Transform your fingerprint into your ATM pin. Access Aadhaar-based banking services securely with K-Seva.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-aadhar-atm.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/aadhar-atm.css">
    
</head>
<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page aeps-page">

    <!-- ========== HERO – AEPS / AADHAAR ATM ========== -->
    <section class="mt-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-fingerprint"></i>&nbsp; K-Seva Service</div>
                <h1 class="hero-title">Aadhaar ATM <span class="hero-gradient-text">(AEPS) Banking</span><br><span class="hero-subtitle"> at Your Fingertip</span></h1>
                <p class="hero-sub">Access your bank account using just your Aadhaar number and fingerprint — no ATM card needed. Fast, safe, and available at your nearest K-Seva center.</p>
                <div class="mt-hero-btns">
                    <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                    <a href="#aeps-services" class="btn-glass"><i class="fas fa-play-circle"></i><span>View Services</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-fingerprint"></i> Biometric Secure</div>
                    <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Available</div>
                    <div class="trust-badge"><i class="fas fa-university"></i> All Banks</div>
                </div>
            </div>
            <div class="mt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">AEPS Overview</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-green">₹5000+</div><div class="mt-stat-lbl">Daily Withdrawal Limit</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-blue">All Banks</div><div class="mt-stat-lbl">Supported</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">Biometric</div><div class="mt-stat-lbl">Authentication</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">Instant</div><div class="mt-stat-lbl">Transaction</div></div>
                </div>
                <div class="hero-feature aeps-hero-feature">
                    <i class="fas fa-shield-alt"></i>
                    <div><div class="feature-label" style="color:#ffff;">No ATM Card Required</div><div class="feature-sub" style="color:#ffff;">Secure biometric authentication</div></div>
                </div>
                <div class="card-shimmer"></div>
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
            <span class="bc-active">Aadhaar ATM (AEPS)</span>
        </div>
    </nav>

    <!-- ========== INTRO SECTION (WHAT IS AEPS + ADVANTAGES) with ENQUIRY FORM ========== -->
    <section class="mt-intro aeps-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-info-circle"></i> What is Aadhaar ATM (AEPS)?</div>
                <h2 class="sec-title">Aadhaar Enabled <span>Payment System</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-fingerprint"></i><span></span></div>
                <p>Aadhaar Enabled Payment System (AEPS) allows you to access your bank account using your Aadhaar number and fingerprint. You can withdraw cash and check your balance without visiting a bank or ATM.</p>
                <p>At K-Seva, customers can easily perform basic banking transactions using a biometric device. This service is fast, safe, and helpful for people who want quick access to their money.</p>
                <p>AEPS is a bank-led model which allows online interoperable financial transactions at PoS (Micro ATM) through the Business Correspondent of any bank using Aadhaar authentication.</p>
                
                <div class="aeps-adv-box">
                    <h3 class="aeps-adv-title"><i class="fas fa-bolt"></i> Advantages of AEPS</h3>
                    <ul class="aeps-adv-list">
                        <li><span class="check-green">✓</span> No debit card or ATM required</li>
                        <li><span class="check-green">✓</span> Secure biometric authentication</li>
                        <li><span class="check-green">✓</span> Quick and convenient transactions</li>
                        <li><span class="check-green">✓</span> Banking services available near your location</li>
                        <li><span class="check-green">✓</span> Helpful for people in rural and remote areas</li>
                    </ul>
                    <div class="aeps-adv-note">💡 AEPS helps make banking faster, simpler, and more accessible — allowing customers to manage their money easily through Aadhaar-based authentication.</div>
                </div>
            </div>

            <!-- ENQUIRY FORM CARD – Premium with Glitter & Glow -->
            <div class="gold-enquiry-col" data-reveal data-delay="150">
                <?php 
                $current_page_name = "Aadhar ATM";
                $current_service_category = "aadhar_atm";
                include('includes/enquiry_form.php'); 
                ?>
            </div>
        </div>
    </section>

    <!-- ========== 3 SERVICE CARDS (Cash Withdrawal, Balance Enquiry, Mini Statement) ========== -->
    <!-- ========== DARK PREMIUM SECTION – ALL AEPS TRANSACTIONS ========== -->
    <section class="aeps-dark-section" id="aeps-services">
        <div class="aeps-dark-orb aeps-dark-orb--1"></div>
        <div class="aeps-dark-orb aeps-dark-orb--2"></div>
        <div class="aeps-dark-mesh"></div>
        <div class="aeps-dark-sweep"></div>

        <div class="mt-container">
            <div class="mt-sec-head" data-reveal>
                <div class="sh-tag sh-tag-light">
                    <i class="fas fa-star"></i> Services Available
                </div>
                <h2 class="sec-title light">All AEPS <span>Transactions</span> at K-Seva</h2>
                <p class="sec-sub light">Simple, secure, biometric-based banking for everyone</p>
            </div>

            <div class="aeps-dark-grid" data-reveal>
                <!-- Card 1: Cash Withdrawal -->
                <div class="aeps-dark-card">
                    <div class="aeps-dark-glow"></div>
                    <div class="aeps-dark-icon">💳</div>
                    <h3>Cash Withdrawal</h3>
                    <p>Withdraw cash from any bank account across India using only your Aadhaar number and fingerprint — no ATM card, no bank visit required.</p>
                    <a href="#enquire" class="aeps-dark-btn">Enquire Now →</a>
                    <div class="aeps-dark-shine"></div>
                </div>

                <!-- Card 2: Balance Enquiry -->
                <div class="aeps-dark-card">
                    <div class="aeps-dark-glow"></div>
                    <div class="aeps-dark-icon">💰</div>
                    <h3>Balance Enquiry</h3>
                    <p>Check your bank account balance within seconds. Enter your Aadhaar number, verify with fingerprint, and get instant balance information.</p>
                    <a href="#enquire" class="aeps-dark-btn">Enquire Now →</a>
                    <div class="aeps-dark-shine"></div>
                </div>

                <!-- Card 3: Mini Statement -->
                <div class="aeps-dark-card">
                    <div class="aeps-dark-glow"></div>
                    <div class="aeps-dark-icon">📄</div>
                    <h3>Mini Statement</h3>
                    <p>Get your recent transaction history in seconds. No need to stand in line for passbook updates — get your mini-statement instantly at K-Seva.</p>
                    <a href="#enquire" class="aeps-dark-btn">Enquire Now →</a>
                    <div class="aeps-dark-shine"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CASH WITHDRAWAL DETAIL + STEPS ========== -->
    <!-- ==================== CASH WITHDRAWAL DETAIL SECTION (Two Columns) ==================== -->
    <section class="cashwithdraw-detail">
        <div class="cashwithdraw-detail__bg-deco-1"></div>
        <div class="cashwithdraw-detail__bg-deco-2"></div>
        <div class="cashwithdraw-detail__container">
            <!-- LEFT COLUMN – description -->
            <div class="cashwithdraw-detail__left" data-reveal>
                <div class="cashwithdraw-detail__tag">
                    <i class="fas fa-hand-holding-usd"></i> Detailed Service
                </div>
                <h2 class="cashwithdraw-detail__title">
                    Cash Withdrawal <span>AEPS Service</span>
                </h2>
                <div class="cashwithdraw-detail__divider">
                    <span></span><i class="fas fa-money-bill-wave"></i><span></span>
                </div>
                <p>With K-Seva Cash Withdrawal service, you can easily withdraw money from your bank account using your Aadhaar number and fingerprint. There is no need for an ATM card or visiting the bank.</p>
                <p>This service works with most banks across India and is very useful for people in villages and small towns where banks or ATMs may not be easily available. It saves time and makes banking simple for everyone.</p>
                <div class="cashwithdraw-detail__pills">
                    <span class="pill pill-green"><i class="fas fa-check-circle"></i> 24×7 Service</span>
                    <span class="pill pill-blue"><i class="fas fa-fingerprint"></i> Biometric Secure</span>
                    <span class="pill pill-gold"><i class="fas fa-university"></i> All Banks Supported</span>
                </div>
            </div>

            <!-- RIGHT COLUMN – steps box -->
            <div class="cashwithdraw-detail__right" data-reveal data-delay="100">
                <div class="cashwithdraw-detail__steps-box">
                    <h4><i class="fas fa-list-ol"></i> How It Works — Step by Step</h4>
                    <div class="cashwithdraw-detail__step">
                        <span class="cashwithdraw-detail__step-num">1</span> Visit your nearest K-Seva center
                    </div>
                    <div class="cashwithdraw-detail__step">
                        <span class="cashwithdraw-detail__step-num">2</span> Provide your Aadhaar number
                    </div>
                    <div class="cashwithdraw-detail__step">
                        <span class="cashwithdraw-detail__step-num">3</span> Select your bank from the list
                    </div>
                    <div class="cashwithdraw-detail__step">
                        <span class="cashwithdraw-detail__step-num">4</span> Verify with your fingerprint
                    </div>
                    <div class="cashwithdraw-detail__step">
                        <span class="cashwithdraw-detail__step-num">5</span> Receive your cash instantly ✅
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT STRIP (similar to reference page) ========== -->
    <section class="aeps-contact-strip">
        <div class="mt-container">
            <div class="aeps-contact-inner">
                <div class="aeps-contact-text">
                    <h3>Need Help with <span>AEPS?</span></h3>
                    <p>Contact our K-Seva AEPS expert — we're here to assist you anytime.</p>
                </div>
                <div class="aeps-contact-items">
                    <div class="aeps-citem">
                        <div class="ci-ico">📞</div>
                        <div>
                            <span class="ci-label">Helpline</span>
                            <div class="ci-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div>
                        </div>
                    </div>
                    <div class="aeps-citem">
                        <div class="ci-ico">✉️</div>
                        <div>
                            <span class="ci-label">Email</span>
                            <div class="ci-val"><a href="mailto:<?php echo $comp_email; ?>"><?php echo $comp_email; ?></a></div>
                        </div>
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
/* ── Particle Canvas (glitter effect) ── */
(function () {
    const canvas = document.getElementById('mt-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#f97316','#14b8a6'];
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