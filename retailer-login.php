<?php
session_start();

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_id']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'retailer') {
    header("Location: retailer-dashboard.php");
    exit();
}

require_once('includes/dbConfig.php');

$error = '';

// Determine redirect target
$redirect_to = '';
if (!empty($_GET['redirect'])) {
    $redirect_to = $_GET['redirect'];
} elseif (!empty($_SERVER['HTTP_REFERER'])) {
    $redirect_to = $_SERVER['HTTP_REFERER'];
}
if (empty($redirect_to) || strpos($redirect_to, 'retailer-login') !== false) {
    $redirect_to = 'retailer-dashboard.php';
}

// Handle Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {

    if ($_POST['action'] === 'signin') {
        $email    = trim($_POST['email']);
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $error = 'Please fill all fields.';
        } else {
            $stmt = $conn->prepare("SELECT id, firstName, lastName, email_id, password, status FROM tbl_retail_user WHERE email_id = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();

            if ($user && $password === $user['password']) {
                if ($user['status'] === 'active') {
                    $_SESSION['user_id']    = $user['id'];
                    $_SESSION['user_name']  = $user['firstName'] . ' ' . $user['lastName'];
                    $_SESSION['user_email'] = $user['email_id'];
                    $_SESSION['user_type']  = 'retailer';
                    $_SESSION['toast_success'] = "Welcome back, " . $user['firstName'] . "! 👋";
                    header("Location: " . $redirect_to);
                    exit();
                } else {
                    $error = 'Your account is pending approval. Our team will contact you soon.';
                }
            } else {
                $error = 'Invalid email or password.';
            }
            $stmt->close();
        }
    }

    elseif ($_POST['action'] === 'signup') {
        $firstName = trim($_POST['first_name']);
        $lastName  = trim($_POST['last_name']);
        $mobile    = trim($_POST['mobile']);
        $email     = trim($_POST['email']);
        $password  = $_POST['password'];

        if      (empty($firstName))                               { $error = 'First name is required.'; }
        elseif  (empty($lastName))                                { $error = 'Last name is required.'; }
        elseif  (empty($mobile))                                  { $error = 'Mobile number is required.'; }
        elseif  (!preg_match('/^[6-9][0-9]{9}$/', $mobile))      { $error = 'Enter a valid 10-digit mobile number.'; }
        elseif  (empty($email))                                   { $error = 'Email address is required.'; }
        elseif  (!filter_var($email, FILTER_VALIDATE_EMAIL))      { $error = 'Invalid email format.'; }
        elseif  (empty($password))                                { $error = 'Password is required.'; }
        elseif  (strlen($password) < 6)                           { $error = 'Password must be at least 6 characters.'; }

        if (empty($error)) {
            $chk = $conn->prepare("SELECT id FROM tbl_retail_user WHERE email_id = ?");
            $chk->bind_param("s", $email);
            $chk->execute();
            $chk->store_result();

            if ($chk->num_rows > 0) {
                $error = 'Email already registered. Please sign in.';
            } else {
                $status = 'active';
                $ins = $conn->prepare("INSERT INTO tbl_retail_user (firstName, lastName, mobile, email_id, password, status, created_at) VALUES (?,?,?,?,?,?,NOW())");
                $ins->bind_param("ssssss", $firstName, $lastName, $mobile, $email, $password, $status);
                if ($ins->execute()) {
                    $_SESSION['user_id']    = $ins->insert_id;
                    $_SESSION['user_name']  = $firstName . ' ' . $lastName;
                    $_SESSION['user_email'] = $email;
                    $_SESSION['user_type']  = 'retailer';
                    $_SESSION['toast_success'] = "Welcome to K-Seva, " . $firstName . "! 🎉 Account created successfully.";
                    header("Location: " . $redirect_to);
                    exit();
                } else {
                    $error = 'Registration failed. Please try again.';
                }
                $ins->close();
            }
            $chk->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
<title>K-Seva | Retailer Login</title>
<link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<meta name="theme-color" content="#03071e">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<style>
  :root {
    --sky: #00b4d8;
    --deep: #023e8a;
    --gold: #ffd60a;
    --green: #2dc653;
    --dark: #03071e;
    --glass: rgba(255,255,255,0.07);
    --border: rgba(0,180,216,0.3);
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  
  body {
    min-height: 100vh;
    background: var(--dark);
    font-family: 'Nunito', sans-serif;
    overflow-y: auto;
    overflow-x: hidden;
    position: relative;
  }
  
  #bg      { position: fixed; inset: 0; z-index: 0; }
  #glitter { position: fixed; inset: 0; z-index: 1; pointer-events: none; }

  .wrapper {
    position: relative;
    z-index: 10;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: transparent;
  }

  /* ── LEFT PANEL ── */
  .panel-left {
    width: 100%;
    position: relative;
    background: linear-gradient(135deg, #012A6B 0%, #023e8a 40%, #0077b6 80%, #00b4d8 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 30px 20px 40px;
    overflow: hidden;
  }
  .panel-left::before {
    content:'';
    position:absolute; inset:0;
    background: radial-gradient(ellipse at 30% 60%, rgba(0,180,216,.25) 0%, transparent 65%),
                radial-gradient(ellipse at 80% 20%, rgba(255,214,10,.1) 0%, transparent 55%);
  }
  
  .ring {
    position:absolute; border-radius:50%;
    border:1px solid rgba(0,180,216,.3);
    animation:ringPulse 4s ease-in-out infinite;
  }
  .ring:nth-child(1) { width:200px;height:200px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:0s; }
  .ring:nth-child(2) { width:280px;height:280px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:.8s; }
  .ring:nth-child(3) { width:360px;height:360px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:1.6s; }
  @keyframes ringPulse {
    0%,100% { opacity:.15;transform:translate(-50%,-50%) scale(1); }
    50%     { opacity:.4; transform:translate(-50%,-50%) scale(1.04); }
  }
  
  .logo-wrap { position:relative;z-index:2;text-align:center;animation:logoFloat 6s ease-in-out infinite; }
  @keyframes logoFloat { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }
  .logo-wrap img {
    width: 140px;
    filter:drop-shadow(0 0 30px rgba(0,180,216,.7)) drop-shadow(0 0 60px rgba(0,100,200,.5));
    border-radius:12px;
  }
  
  .tagline {
    position:relative;z-index:2;margin-top:16px;
    color:#caf0f8;font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;
    letter-spacing:.04em;text-align:center;text-shadow:0 2px 20px rgba(0,180,216,.6);
  }
  .sub {
    position:relative;z-index:2;margin-top:6px;color:rgba(202,240,248,.65);
    font-size:.7rem;letter-spacing:.08em;text-transform:uppercase;text-align:center;
  }

  .orb { position:absolute;border-radius:50%;filter:blur(40px);animation:orbDrift linear infinite;opacity:.35; }
  .orb1{width:100px;height:100px;background:#00b4d8;top:10%;left:5%;animation-duration:9s}
  .orb2{width:70px;height:70px;background:#ffd60a;top:70%;left:75%;animation-duration:7s;animation-delay:-3s}
  .orb3{width:80px;height:80px;background:#2dc653;top:85%;left:10%;animation-duration:11s;animation-delay:-5s}
  @keyframes orbDrift {
    0%  {transform:translate(0,0) scale(1)}
    33% {transform:translate(15px,-20px) scale(1.1)}
    66% {transform:translate(-10px,10px) scale(.95)}
    100%{transform:translate(0,0) scale(1)}
  }

  .services-quad { 
    position:relative;z-index:2;display:grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    margin-top: 20px;
    width:100%; 
  }
  .service-card-mini {
    background:rgba(3,7,30,.55);backdrop-filter:blur(8px);
    border-radius:16px;padding:10px 6px;
    text-align:center;
    border:1px solid rgba(0,180,216,.3);
  }
  .service-card-mini:active { transform:scale(0.98);background:rgba(0,180,216,.2); }
  .service-icon { width:36px;height:36px;margin:0 auto 6px;background:rgba(0,180,216,.2);border-radius:12px;display:flex;align-items:center;justify-content:center; }
  .service-icon svg { width:20px;height:20px;stroke:#fff;stroke-width:1.5;fill:none; }
  .service-card-mini h4 { font-size:.75rem;font-weight:800;color:#fff;margin-bottom:3px; }
  .service-card-mini p  { font-size:.55rem;color:rgba(202,240,248,.7); }

  /* ── RIGHT PANEL ── */
  .panel-right {
    width: 100%;
    top:-20px;
    background:white;
    backdrop-filter:blur(24px);
    padding:24px 20px 40px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    position:relative;
    overflow: hidden;
  }
  .panel-right::before {
    content:'';position:absolute;inset:0;
    background:radial-gradient(ellipse at 80% 10%,rgba(0,180,216,.08) 0%,transparent 60%);
    pointer-events:none;
  }

  .tabs { display:flex;gap:8px;margin-bottom:20px;background:rgba(255,255,255,.04);border-radius:14px;padding:4px;border:1px solid var(--border); }
  .tab-btn { flex:1;padding:10px 0;border:none;background:transparent;color:blue;font-family:'Nunito',sans-serif;font-size:.85rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;cursor:pointer;border-radius:10px;transition:all .35s; }
  .tab-btn.active { background:linear-gradient(135deg,var(--sky),var(--deep));color:#fff;box-shadow:0 4px 20px rgba(0,180,216,.4); }

  .form-panel { display:none; }
  .form-panel.active { display:flex;flex-direction:column;gap:14px; }

  .form-title { font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:900;background:linear-gradient(90deg,skyblue,var(--sky));-webkit-background-clip:text;-webkit-text-fill-color:transparent; }
  .form-sub   { color:#023e8a;font-size:.75rem;margin-bottom:2px; }

  .field-group { display:flex;flex-direction:column;gap:5px; }
  .field-group label { color:#023e8a;font-size:.7rem;font-weight:600;letter-spacing:.05em;text-transform:uppercase; }
  .input-wrap { position:relative; }
  .input-wrap svg { position:absolute;left:12px;top:50%;transform:translateY(-50%);width:16px;height:16px;stroke:rgba(0,180,216,.5);fill:none;pointer-events:none; }
  .input-wrap input {
    width:100%;padding:11px 12px 11px 40px;background:rgba(255,255,255,.05);
    border:1px solid rgba(0,180,216,.2);border-radius:12px;color:black;
    font-family:'Nunito',sans-serif;font-size:.85rem;outline:none;
    transition:border-color .3s,background .3s;
  }
  .input-wrap input:focus { border-color:var(--sky);background:rgba(0,180,216,.07); }

  .forgot { text-align:right; margin-top: -5px; }
  .forgot a { color:var(--sky);font-size:.7rem;text-decoration:none; }

  .row-2 { display:grid;grid-template-columns:1fr 1fr;gap:10px; }

  .btn-submit {
    padding:12px;border:none;border-radius:12px;
    background:linear-gradient(135deg,#00b4d8,#023e8a);color:#fff;
    font-family:'Nunito',sans-serif;font-size:.9rem;font-weight:800;
    letter-spacing:.08em;text-transform:uppercase;cursor:pointer;
    transition:transform .2s;
    box-shadow:0 6px 30px rgba(0,180,216,.4);
  }
  .btn-submit:active { transform:scale(0.98); }

  /* ── ERROR TOAST ── */
  .login-toast {
    position:fixed;top:12px;left:12px;right:12px;z-index:9999;
    background:rgba(10,20,40,.95);backdrop-filter:blur(12px);
    border-left:4px solid #e63946;color:#fff;
    padding:12px 16px;border-radius:12px;font-weight:600;font-size:.8rem;
    box-shadow:0 10px 30px rgba(0,0,0,.4);
    animation:toastIn .35s ease both;
    text-align:center;
  }
  @keyframes toastIn { from{opacity:0;transform:translateX(60px)}to{opacity:1;transform:translateX(0)} }

  /* Mobile Optimizations */
  @media (max-width: 480px) {
    .panel-left { padding: 20px 16px 30px; }
    .panel-right { padding: 20px 16px 30px; }
    .logo-wrap img { width: 110px; }
    .tagline { font-size: 1rem; }
    .sub { font-size: 0.65rem; }
    .services-quad { gap: 8px; }
    .service-card-mini { padding: 8px 4px; }
    .service-icon { width: 32px; height: 32px; }
    .service-icon svg { width: 18px; height: 18px; }
    .service-card-mini h4 { font-size: 0.7rem; }
    .form-title { font-size: 1.1rem; }
    .btn-submit { padding: 10px; }
  }
</style>
</head>
<body>

<canvas id="bg"></canvas>
<canvas id="glitter"></canvas>

<div class="wrapper">
  <!-- LEFT PANEL -->
  <div class="panel-left">
    <div class="ring"></div><div class="ring"></div><div class="ring"></div>
    <div class="orb orb1"></div><div class="orb orb2"></div><div class="orb orb3"></div>
    <div class="logo-wrap">
      <img src="assets/logo/kashpe.png" alt="KashPe" onerror="this.style.display='none'">
    </div>
    <p class="tagline">Retail Partner Network<br>सेवा केंद्र</p>
    <p class="sub">Authorised Retailer Portal | Manage Services Digitally</p>
    <div class="services-quad">
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M3 10h18M6 10v8M18 10v8M5 4h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/></svg></div>
        <h4>Bill Payments</h4><p>Electricity, Water, Gas</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <h4>Travel & Recharge</h4><p>Flights, Mobile, DTH</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 7v5l3 3"/></svg></div>
        <h4>Govt Services</h4><p>PAN, Aadhaar, EPFO</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M20 12v8H4v-8M12 2v8m0 0-3-3m3 3 3-3"/><rect x="2" y="12" width="20" height="2"/></svg></div>
        <h4>Money Transfer</h4><p>IMPS, AEPS, DMT</p>
      </div>
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="panel-right">
    <div class="tabs">
      <button class="tab-btn active" onclick="switchTab('signin')">Sign In</button>
      <button class="tab-btn" onclick="switchTab('signup')">Sign Up</button>
    </div>

    <!-- Sign In -->
    <div class="form-panel active" id="signin">
      <h2 class="form-title">Retailer Access</h2>
      <p class="form-sub">Login to manage customer services, transactions &amp; reports</p>
      <form method="POST">
        <input type="hidden" name="action" value="signin">
        <div class="field-group">
          <label>Registered Email</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <input type="email" name="email" placeholder="you@email.com" required>
          </div>
        </div>
        <div class="field-group">
          <label>Password</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="forgot"><a href="#">Forgot password?</a></div>
        <button type="submit" class="btn-submit">Sign In to K-Seva</button>
      </form>
    </div>

    <!-- Sign Up -->
    <div class="form-panel" id="signup">
      <h2 class="form-title">Become a Retail Partner</h2>
      <p class="form-sub">Join KashPe &amp; offer 500+ citizen services</p>
      <form method="POST">
        <input type="hidden" name="action" value="signup">
        <div class="row-2">
          <div class="field-group">
            <label>First Name</label>
            <div class="input-wrap">
              <svg viewBox="0 0 24 24" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg>
              <input type="text" name="first_name" placeholder="First name" required>
            </div>
          </div>
          <div class="field-group">
            <label>Last Name</label>
            <div class="input-wrap">
              <svg viewBox="0 0 24 24" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg>
              <input type="text" name="last_name" placeholder="Last name" required>
            </div>
          </div>
        </div>
        <div class="field-group">
          <label>Mobile Number</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
            <input type="tel" name="mobile" placeholder="9876543210" pattern="[6-9][0-9]{9}" required>
          </div>
        </div>
        <div class="field-group">
          <label>Email Address</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <input type="email" name="email" placeholder="you@email.com" required>
          </div>
        </div>
        <div class="field-group">
          <label>Create Password</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <input type="password" name="password" placeholder="Min 6 characters" required>
          </div>
        </div>
        <button type="submit" class="btn-submit">Create My Account</button>
      </form>
    </div>
  </div>
</div>

<?php if (!empty($error)): ?>
<div class="login-toast" id="errorToast">
  ⚠️ <?= htmlspecialchars($error) ?>
</div>
<script>setTimeout(() => { const t = document.getElementById('errorToast'); if(t) t.remove(); }, 4000);</script>
<?php endif; ?>

<script>
function switchTab(tab) {
  document.querySelectorAll('.tab-btn').forEach((b,i) => b.classList.toggle('active',(tab==='signin'&&i===0)||(tab==='signup'&&i===1)));
  document.querySelectorAll('.form-panel').forEach(p => p.classList.remove('active'));
  document.getElementById(tab).classList.add('active');
}

// Canvas Background
const bgC = document.getElementById('bg'), bgX = bgC.getContext('2d');
const glC = document.getElementById('glitter'), glX = glC.getContext('2d');
const COLS = ['#00b4d8','#caf0f8','#ffd60a','#2dc653','#ffffff','#29abe2'];
let stars=[], glitters=[];

function resize() {
  bgC.width=glC.width=window.innerWidth;
  bgC.height=glC.height=window.innerHeight;
  stars=Array.from({length:100},()=>({
    x:Math.random()*bgC.width, y:Math.random()*bgC.height,
    r:Math.random()*1.2+.2, spd:Math.random()*.008+.003, phase:Math.random()*Math.PI*2
  }));
}

function drawBg(t) {
  bgX.fillStyle='#03071e'; bgX.fillRect(0,0,bgC.width,bgC.height);
  const g=bgX.createRadialGradient(bgC.width*.15,bgC.height*.5,0,bgC.width*.15,bgC.height*.5,400);
  g.addColorStop(0,'rgba(2,62,138,.35)'); g.addColorStop(1,'transparent');
  bgX.fillStyle=g; bgX.fillRect(0,0,bgC.width,bgC.height);
  stars.forEach(s=>{
    const a=.3+.7*(Math.sin(t*s.spd+s.phase)*.5+.5);
    bgX.beginPath(); bgX.arc(s.x,s.y,s.r,0,Math.PI*2);
    bgX.fillStyle=`rgba(202,240,248,${a})`; bgX.fill();
  });
}

function spawn(x,y,n=3){
  for(let i=0;i<n;i++) glitters.push({
    x,y,vx:(Math.random()-.5)*2.5,vy:-(Math.random()*3+.5),
    r:Math.random()*2.5+1,life:0,maxLife:45+Math.random()*40,
    color:COLS[Math.floor(Math.random()*COLS.length)],
    rot:Math.random()*Math.PI*2,rotSpd:(Math.random()-.5)*.2,
    shape:Math.random()>.5?'star':'circle'
  });
}

function drawStar(ctx,cx,cy,r){
  ctx.beginPath();
  for(let i=0;i<5;i++){const a=(i*4*Math.PI/5)-Math.PI/2;i===0?ctx.moveTo(cx+r*Math.cos(a),cy+r*Math.sin(a)):ctx.lineTo(cx+r*Math.cos(a),cy+r*Math.sin(a));}
  ctx.closePath();
}

function drawGl(){
  glX.clearRect(0,0,glC.width,glC.height);
  glitters=glitters.filter(g=>g.life<g.maxLife);
  glitters.forEach(g=>{
    g.life++;g.x+=g.vx;g.y+=g.vy;g.vy+=.05;g.rot+=g.rotSpd;
    const p=g.life/g.maxLife, a=p<.2?p/.2:1-(p-.2)/.8;
    glX.save();glX.translate(g.x,g.y);glX.rotate(g.rot);
    glX.globalAlpha=a;glX.fillStyle=g.color;
    glX.shadowBlur=6;glX.shadowColor=g.color;
    if(g.shape==='star'){drawStar(glX,0,0,g.r);glX.fill();}
    else{glX.beginPath();glX.arc(0,0,g.r,0,Math.PI*2);glX.fill();}
    glX.restore();
  });
}

let t=0;
(function loop(){t++;drawBg(t);drawGl();requestAnimationFrame(loop)})();
window.addEventListener('resize',resize); 
resize();
setInterval(()=>spawn(Math.random()*glC.width,Math.random()*glC.height),200);
setTimeout(()=>{for(let i=0;i<20;i++)spawn(Math.random()*glC.width,Math.random()*glC.height*.6,1);},500);
</script>
</body>
</html>