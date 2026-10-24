<?php
session_start();
require_once('includes/dbConfig.php');

$error   = '';
$success = '';

// ── Redirect target ──
$redirect_to = '';
if (!empty($_GET['redirect']))          { $redirect_to = $_GET['redirect']; }
elseif (!empty($_SERVER['HTTP_REFERER'])) { $redirect_to = $_SERVER['HTTP_REFERER']; }
if (empty($redirect_to) || strpos($redirect_to, 'distributor-login') !== false) {
    $redirect_to = 'distributor-dashboard';
}

// ══════════════════════════════════════
//  HANDLE FORM SUBMISSIONS
// ══════════════════════════════════════
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {

    /* ── SIGN IN ── */
    if ($_POST['action'] === 'signin') {
        $email    = trim($_POST['email']);
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $error = 'Please fill all fields.';
        } else {
            $stmt = $conn->prepare("SELECT id, firstName, lastName, email_id, password, status FROM tbl_distributor_user WHERE email_id = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            if ($user && $password === $user['password']) {
                if ($user['status'] === 'active') {
                    // ── Set session ──
                    $_SESSION['dist_user_id']    = $user['id'];
                    $_SESSION['dist_user_name']  = $user['firstName'] . ' ' . $user['lastName'];
                    $_SESSION['dist_user_email'] = $user['email_id'];
                    // ── Toast shown after redirect ──
                    $_SESSION['dist_toast_success'] = "Welcome back, " . $user['firstName'] . "! 👋";
                    header("Location: " . $redirect_to);
                    exit();
                } elseif ($user['status'] === 'pending') {
                    $error = 'Your account is pending approval. Our team will contact you soon.';
                } else {
                    $error = 'Your account has been deactivated. Please contact support.';
                }
            } else {
                $error = 'Invalid email or password.';
            }
        }
    }

    /* ── SIGN UP ── */
    elseif ($_POST['action'] === 'signup') {
        $firstName = trim($_POST['first_name']);
        $lastName  = trim($_POST['last_name']);
        $mobile    = trim($_POST['mobile']);
        $email     = trim($_POST['email']);
        $password  = $_POST['password'];

        // Sequential validation
        if      (empty($firstName))                               { $error = 'First name is required.'; }
        elseif  (empty($lastName))                                { $error = 'Last name is required.'; }
        elseif  (empty($mobile))                                  { $error = 'Mobile number is required.'; }
        elseif  (!preg_match('/^[6-9][0-9]{9}$/', $mobile))      { $error = 'Enter a valid 10-digit mobile number starting with 6–9.'; }
        elseif  (empty($email))                                   { $error = 'Email address is required.'; }
        elseif  (!filter_var($email, FILTER_VALIDATE_EMAIL))      { $error = 'Invalid email format.'; }
        elseif  (empty($password))                                { $error = 'Password is required.'; }
        elseif  (strlen($password) < 6)                           { $error = 'Password must be at least 6 characters.'; }

        if (empty($error)) {
            // Check duplicate email
            $chk = $conn->prepare("SELECT id FROM tbl_distributor_user WHERE email_id = ?");
            $chk->bind_param("s", $email);
            $chk->execute();
            $chk->store_result();

            if ($chk->num_rows > 0) {
                $error = 'This email is already registered. Please sign in.';
            } else {
                // Insert with status = pending (NO auto-login)
                $status = 'pending';
                $ins = $conn->prepare("INSERT INTO tbl_distributor_user (firstName, lastName, mobile, email_id, password, status, created_at) VALUES (?,?,?,?,?,?,NOW())");
                $ins->bind_param("ssssss", $firstName, $lastName, $mobile, $email, $password, $status);
                if ($ins->execute()) {
                    // Show success popup — DO NOT log in
                    $success = 'Registration successful! Our team will review your application and get back to you shortly.';
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>K-Seva | Distributor Login</title>
<link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --sky:    #00b4d8;
    --deep:   #023e8a;
    --gold:   #ffd60a;
    --green:  #2dc653;
    --purple: #7b2ff7;
    --dark:   #03071e;
    --glass:  rgba(255,255,255,0.07);
    --border: rgba(0,180,216,0.3);
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  body {
    min-height: 100vh;
    background: var(--dark);
    font-family: 'Nunito', sans-serif;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #bg      { position: fixed; inset: 0; z-index: 0; }
  #glitter { position: fixed; inset: 0; z-index: 1; pointer-events: none; }

  /* ── WRAPPER ── */
  .wrapper {
    position: relative; z-index: 10;
    width: 96vw; max-width: 1100px;
    min-height: 580px;
    display: flex;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 0 80px rgba(0,180,216,0.35), 0 0 200px rgba(0,60,140,0.4);
    animation: wrapperIn 1s cubic-bezier(.23,1,.32,1) both;
  }
  @keyframes wrapperIn {
    from { opacity:0; transform:scale(.93) translateY(30px); }
    to   { opacity:1; transform:scale(1)   translateY(0); }
  }

  /* ── LEFT PANEL ── */
  .panel-left {
    flex: 1;
    position: relative;
    background: linear-gradient(135deg, #1a0050 0%, #3a0080 30%, #0077b6 70%, #00b4d8 100%);
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 48px 36px;
    overflow: hidden;
  }
  .panel-left::before {
    content:'';
    position:absolute; inset:0;
    background: radial-gradient(ellipse at 30% 60%, rgba(123,47,247,.3) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(255,214,10,.1) 0%, transparent 55%);
  }
  .ring {
    position:absolute; border-radius:50%;
    border:1px solid rgba(123,47,247,.35);
    animation:ringPulse 4s ease-in-out infinite;
  }
  .ring:nth-child(1) { width:320px;height:320px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:0s; }
  .ring:nth-child(2) { width:460px;height:460px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:.8s; }
  .ring:nth-child(3) { width:600px;height:600px;top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:1.6s; }
  @keyframes ringPulse {
    0%,100% { opacity:.15;transform:translate(-50%,-50%) scale(1); }
    50%     { opacity:.4; transform:translate(-50%,-50%) scale(1.04); }
  }

  .logo-wrap { position:relative;z-index:2;text-align:center;animation:logoFloat 6s ease-in-out infinite; }
  @keyframes logoFloat { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }
  .logo-wrap img {
    width:210px;
    filter:drop-shadow(0 0 30px rgba(123,47,247,.7)) drop-shadow(0 0 60px rgba(0,100,200,.5));
    border-radius:12px;
  }

  .tagline {
    position:relative;z-index:2;margin-top:28px;
    color:#e8d5ff;font-family:'Playfair Display',serif;font-size:1.55rem;font-weight:700;
    letter-spacing:.04em;text-align:center;text-shadow:0 2px 20px rgba(123,47,247,.6);
    animation:fadeSlideUp 1.2s .4s both;
  }
  .sub {
    position:relative;z-index:2;margin-top:12px;color:rgba(232,213,255,.65);
    font-size:.95rem;letter-spacing:.08em;text-transform:uppercase;text-align:center;
    animation:fadeSlideUp 1.2s .6s both;
  }
  @keyframes fadeSlideUp { from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)} }

  .orb { position:absolute;border-radius:50%;filter:blur(40px);animation:orbDrift linear infinite;opacity:.4; }
  .orb1{width:120px;height:120px;background:#7b2ff7;top:10%;left:5%;animation-duration:9s}
  .orb2{width:80px;height:80px;background:#ffd60a;top:70%;left:75%;animation-duration:7s;animation-delay:-3s}
  .orb3{width:100px;height:100px;background:#00b4d8;top:85%;left:10%;animation-duration:11s;animation-delay:-5s}
  @keyframes orbDrift {
    0%  {transform:translate(0,0) scale(1)}
    33% {transform:translate(20px,-25px) scale(1.1)}
    66% {transform:translate(-15px,15px) scale(.95)}
    100%{transform:translate(0,0) scale(1)}
  }

  /* Feature cards */
  .services-quad { position:relative;z-index:2;display:flex;flex-wrap:wrap;justify-content:center;gap:14px;margin-top:28px;width:100%; }
  .service-card-mini {
    background:rgba(3,7,30,.6);backdrop-filter:blur(8px);
    border-radius:20px;padding:14px 10px;flex:1;min-width:100px;
    text-align:center;transition:all .3s;border:1px solid rgba(123,47,247,.35);cursor:pointer;
  }
  .service-card-mini:hover { transform:translateY(-8px);background:rgba(123,47,247,.2);border-color:#7b2ff7;box-shadow:0 10px 25px rgba(0,0,0,.3),0 0 15px rgba(123,47,247,.4); }
  .service-icon { width:44px;height:44px;margin:0 auto 10px;background:rgba(123,47,247,.2);border-radius:14px;display:flex;align-items:center;justify-content:center; }
  .service-icon svg { width:24px;height:24px;stroke:#e8d5ff;stroke-width:1.5;fill:none; }
  .service-card-mini h4 { font-size:.85rem;font-weight:800;color:#fff;margin-bottom:3px; }
  .service-card-mini p  { font-size:.62rem;color:rgba(232,213,255,.7); }

  /* Distributor badge */
  .dist-badge {
    position: relative; z-index: 2;
    margin-top: 20px;
    display: inline-flex; align-items: center; gap: 8px;
    padding: 8px 20px;
    border-radius: 30px;
    background: rgba(123,47,247,0.2);
    border: 1px solid rgba(123,47,247,0.5);
    color: #e8d5ff;
    font-size: 0.8rem; font-weight: 700;
    letter-spacing: 1px; text-transform: uppercase;
  }
  .dist-badge::before {
    content: '';
    width: 8px; height: 8px; border-radius: 50%;
    background: #7b2ff7;
    box-shadow: 0 0 8px #7b2ff7;
    animation: pulse 1.5s ease infinite;
  }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.5;transform:scale(.8)} }

  /* ── RIGHT PANEL ── */
  .panel-right {
    flex:1;
    background:rgba(3,7,30,.88);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);
    padding:28px 48px;display:flex;flex-direction:column;justify-content:center;
    border-left:1px solid var(--border);position:relative;overflow:hidden;
  }
  .panel-right::before {
    content:'';position:absolute;inset:0;
    background:radial-gradient(ellipse at 80% 10%,rgba(123,47,247,.07) 0%,transparent 60%);
    pointer-events:none;
  }

  .tabs { display:flex;gap:0;margin-bottom:10px;background:rgba(255,255,255,.04);border-radius:14px;padding:4px;border:1px solid var(--border); }
  .tab-btn { flex:1;padding:12px 0;border:none;background:transparent;color:rgba(255,255,255,.4);font-family:'Nunito',sans-serif;font-size:1rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;cursor:pointer;border-radius:10px;transition:all .35s; }
  .tab-btn.active { background:linear-gradient(135deg,#7b2ff7,#023e8a);color:#fff;box-shadow:0 4px 20px rgba(123,47,247,.5); }

  .form-panel { display:none;animation:formIn .45s ease both; }
  .form-panel.active { display:flex;flex-direction:column;gap:14px; }
  @keyframes formIn { from{opacity:0;transform:translateX(18px)}to{opacity:1;transform:translateX(0)} }

  .form-title { font-family:'Playfair Display',serif;font-size:1.75rem;font-weight:900;background:linear-gradient(90deg,#e8d5ff,#7b2ff7,var(--sky));-webkit-background-clip:text;-webkit-text-fill-color:transparent; }
  .form-sub   { color:rgba(255,255,255,.38);font-size:.88rem;margin-bottom:4px; }

  .field-group { display:flex;flex-direction:column;gap:5px; }
  .field-group label { color:rgba(232,213,255,.75);font-size:.82rem;font-weight:600;letter-spacing:.05em;text-transform:uppercase; }
  .input-wrap { position:relative; }
  .input-wrap svg { position:absolute;left:14px;top:50%;transform:translateY(-50%);width:18px;height:18px;stroke:rgba(123,47,247,.6);fill:none;pointer-events:none; }
  .input-wrap input {
    width:100%;padding:12px 14px 12px 44px;background:rgba(255,255,255,.05);
    border:1px solid rgba(123,47,247,.25);border-radius:12px;color:#fff;
    font-family:'Nunito',sans-serif;font-size:.97rem;outline:none;
    transition:border-color .3s,background .3s,box-shadow .3s;
  }
  .input-wrap input:focus { border-color:#7b2ff7;background:rgba(123,47,247,.07);box-shadow:0 0 0 3px rgba(123,47,247,.15); }

  .forgot { text-align:right; }
  .forgot a { color:var(--sky);font-size:.82rem;text-decoration:none;opacity:.8; }
  .forgot a:hover { opacity:1; }
  .row-2 { display:grid;grid-template-columns:1fr 1fr;gap:14px; }

  .btn-submit {
    padding:13px;border:none;border-radius:14px;
    background:linear-gradient(135deg,#7b2ff7,#023e8a);color:#fff;
    font-family:'Nunito',sans-serif;font-size:1.05rem;font-weight:800;
    letter-spacing:.08em;text-transform:uppercase;cursor:pointer;
    transition:transform .2s,box-shadow .3s;
    box-shadow:0 6px 30px rgba(123,47,247,.45);
    margin-top:6px;
  }
  .btn-submit:hover { transform:translateY(-2px);box-shadow:0 10px 40px rgba(123,47,247,.6); }

  /* ── BACK BUTTON ── */
  .back-btn-fixed {
    position:fixed;top:24px;left:24px;z-index:1000;
    background:rgba(3,7,30,.75);backdrop-filter:blur(12px);
    border:1px solid rgba(123,47,247,.45);border-radius:48px;padding:10px 20px;
    display:flex;align-items:center;gap:8px;cursor:pointer;
    font-family:'Nunito',sans-serif;font-weight:600;font-size:.9rem;color:#e8d5ff;
    transition:all .3s;text-decoration:none;
  }
  .back-btn-fixed:hover { background:rgba(123,47,247,.2);border-color:#7b2ff7;transform:translateX(-4px);color:#fff; }
  .back-btn-fixed svg { width:18px;height:18px;stroke:currentColor;stroke-width:2.5;fill:none; }

  /* ── ERROR TOAST ── */
  .login-toast {
    position:fixed;top:24px;right:24px;z-index:9999;
    background:rgba(10,20,40,.95);backdrop-filter:blur(12px);
    border-left:4px solid #e63946;color:#fff;
    padding:14px 24px;border-radius:14px;font-weight:600;font-size:.9rem;
    box-shadow:0 10px 30px rgba(0,0,0,.4);
    animation:toastIn .35s cubic-bezier(.34,1.56,.64,1) both;
    max-width:360px;
  }
  @keyframes toastIn { from{opacity:0;transform:translateX(60px)}to{opacity:1;transform:translateX(0)} }

  /* ── SUCCESS MODAL (register only) ── */
  .modal-overlay {
    display:none;
    position:fixed;inset:0;
    background:rgba(0,0,0,.82);
    backdrop-filter:blur(10px);
    z-index:10000;
    align-items:center;justify-content:center;
  }
  .modal-overlay.show { display:flex; }
  .modal-content {
    background:linear-gradient(145deg,#0d0028,#1a0050,#001d3d);
    border-radius:32px;padding:44px 36px;
    max-width:420px;width:90%;
    text-align:center;
    border:1px solid rgba(123,47,247,.5);
    box-shadow:0 0 60px rgba(123,47,247,.4),0 0 120px rgba(0,180,216,.2);
    animation:modalPop .4s cubic-bezier(.34,1.56,.64,1) both;
  }
  @keyframes modalPop { from{transform:scale(.85);opacity:0}to{transform:scale(1);opacity:1} }
  .modal-icon { font-size:3.5rem;margin-bottom:16px; }
  .modal-content h3 { font-size:1.7rem;font-weight:900;color:#fff;margin-bottom:10px; }
  .modal-content p  { color:rgba(232,213,255,.8);font-size:.95rem;line-height:1.6;margin-bottom:24px; }
  .modal-steps {
    display:flex;flex-direction:column;gap:10px;
    margin-bottom:28px;
    text-align:left;
  }
  .modal-step {
    display:flex;align-items:flex-start;gap:12px;
    padding:10px 14px;
    border-radius:12px;
    background:rgba(123,47,247,.12);
    border:1px solid rgba(123,47,247,.25);
  }
  .step-num {
    width:24px;height:24px;border-radius:50%;
    background:linear-gradient(135deg,#7b2ff7,#023e8a);
    color:#fff;font-size:.75rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;
  }
  .step-text { font-size:.82rem;color:rgba(232,213,255,.85);line-height:1.4; }
  .modal-btn {
    background:linear-gradient(135deg,#7b2ff7,#023e8a);
    border:none;padding:13px 36px;border-radius:40px;
    color:white;font-weight:800;font-size:1rem;cursor:pointer;
    transition:all .25s;font-family:'Nunito',sans-serif;
    box-shadow:0 6px 20px rgba(123,47,247,.45);
  }
  .modal-btn:hover { transform:scale(1.04);box-shadow:0 10px 30px rgba(123,47,247,.6); }

  @media (max-width:760px) {
    body { overflow-y:auto;align-items:flex-start; }
    .wrapper { flex-direction:column;max-width:100%;min-height:unset;border-radius:0; }
    .row-2 { grid-template-columns:1fr; }
    .panel-right { padding:24px 20px; }
  }
  .service-card-mini {
    pointer-events: none;
    cursor: default;
  }
</style>
</head>
<body>

<a class="back-btn-fixed" href="home">
  <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>Back
</a>

<canvas id="bg"></canvas>
<canvas id="glitter"></canvas>

<div class="wrapper">

  <!-- ── LEFT PANEL ── -->
  <div class="panel-left">
    <div class="ring"></div><div class="ring"></div><div class="ring"></div>
    <div class="orb orb1"></div><div class="orb orb2"></div><div class="orb orb3"></div>

    <div class="logo-wrap">
      <img src="assets/logo/footer-1.png" alt="K-Seva" onerror="this.style.display='none'">
    </div>

    <p class="tagline">Distributor Network<br>वितरक पोर्टल</p>
    <p class="sub">Authorised Distributor Portal | Manage Distribution</p>
    <div class="dist-badge">Distributor Access Portal</div>

    <div class="services-quad">
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M3 3h18v4H3zM3 10h18v4H3zM3 17h18v4H3z"/></svg></div>
        <h4>Manage Stock</h4><p>Inventory & Orders</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h4>Retailer Network</h4><p>Manage Retailers</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <h4>Commissions</h4><p>Earnings & Payouts</p>
      </div>
      <div class="service-card-mini">
        <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
        <h4>Reports</h4><p>Analytics & Data</p>
      </div>
    </div>
  </div>

  <!-- ── RIGHT PANEL ── -->
  <div class="panel-right">
    <div class="tabs">
      <button class="tab-btn active" onclick="switchTab('signin')">Sign In</button>
      <button class="tab-btn"        onclick="switchTab('signup')">Sign Up</button>
    </div>

    <!-- Sign In -->
    <div class="form-panel active" id="signin">
      <h2 class="form-title">Distributor Access</h2>
      <p class="form-sub">Login to manage your distribution network, stock &amp; commissions</p>
      <form method="POST">
        <input type="hidden" name="action" value="signin">
        <div class="field-group" style="margin-bottom:12px">
          <label>Registered Email</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <input type="email" name="email" placeholder="you@email.com" required>
          </div>
        </div>
        <div class="field-group" style="margin-bottom:8px">
          <label>Password</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="forgot" style="margin-bottom:16px"><a href="#">Forgot password?</a></div>
        <button type="submit" class="btn-submit">Sign In to K-Seva</button>
      </form>
    </div>

    <!-- Sign Up / Apply -->
    <div class="form-panel" id="signup">
      <h2 class="form-title">Become a Distributor</h2>
      <p class="form-sub">Submit your application and our team will review &amp; activate your account</p>
      <form method="POST">
        <input type="hidden" name="action" value="signup">
        <div class="row-2" style="margin-bottom:10px">
          <div class="field-group">
            <label>First Name</label>
            <div class="input-wrap">
              <svg viewBox="0 0 24 24" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg>
              <input type="text" name="first_name" placeholder="Ravi" required  oninput="this.value = this.value.replace(/[0-9]/g, '')">
            </div>
          </div>
          <div class="field-group">
            <label>Last Name</label>
            <div class="input-wrap">
              <svg viewBox="0 0 24 24" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg>
              <input type="text" name="last_name" placeholder="Kumar" required  oninput="this.value = this.value.replace(/[0-9]/g, '')">
            </div>
          </div>
        </div>
        <div class="field-group" style="margin-bottom:10px">
          <label>Mobile Number</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
            <input type="tel" name="mobile" placeholder="9876543210" pattern="[6-9][0-9]{9}" required  maxlength="10" 
  inputmode="numeric" >
          </div>
        </div>
        <div class="field-group" style="margin-bottom:10px">
          <label>Email Address</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <input type="email" name="email" placeholder="you@email.com" required>
          </div>
        </div>
        <div class="field-group" style="margin-bottom:14px">
          <label>Create Password</label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <input type="password" name="password" placeholder="Min 6 characters" required>
          </div>
        </div>
        <button type="submit" class="btn-submit">Submit Application</button>
      </form>
    </div>
  </div>
</div>

<!-- ── ERROR TOAST ── -->
<?php if (!empty($error)): ?>
<div class="login-toast" id="errorToast">
  ⚠️ <?= htmlspecialchars($error) ?>
</div>
<script>setTimeout(() => { const t = document.getElementById('errorToast'); if(t){ t.style.animation='toastOut .35s ease forwards'; setTimeout(()=>t.remove(),340); } }, 5000);</script>
<?php endif; ?>

<!-- ── SUCCESS MODAL (register only) ── -->
<div class="modal-overlay <?= !empty($success) ? 'show' : '' ?>" id="successModal">
  <div class="modal-content">
    <div class="modal-icon">📋</div>
    <h3>Application Submitted!</h3>
    <p>Thank you for applying to become a K-Seva Distributor. Our team will review your details and get back to you.</p>
    <div class="modal-steps">
      <div class="modal-step">
        <div class="step-num">1</div>
        <div class="step-text"><strong style="color:#e8d5ff">Application Received</strong> — Your details have been recorded successfully.</div>
      </div>
      <div class="modal-step">
        <div class="step-num">2</div>
        <div class="step-text"><strong style="color:#e8d5ff">Team Review</strong> — Our team will verify your details within 1–2 business days.</div>
      </div>
      <div class="modal-step">
        <div class="step-num">3</div>
        <div class="step-text"><strong style="color:#e8d5ff">Account Activation</strong> — You'll receive an email/call once your account is activated.</div>
      </div>
    </div>
    <button class="modal-btn" onclick="closeSuccessModal()">Got it, Thank You!</button>
  </div>
</div>
<script>
document.querySelector('input[name="mobile"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
});
</script>
<script>
/* ── TAB SWITCH ── */
function switchTab(tab) {
  document.querySelectorAll('.tab-btn').forEach((b,i) => b.classList.toggle('active',(tab==='signin'&&i===0)||(tab==='signup'&&i===1)));
  document.querySelectorAll('.form-panel').forEach(p => p.classList.remove('active'));
  document.getElementById(tab).classList.add('active');
  spawnBurst();
}

/* ── CLOSE SUCCESS MODAL ── */
function closeSuccessModal() {
  document.getElementById('successModal').classList.remove('show');
  // Switch to Sign In tab after closing
  switchTab('signin');
}

/* ── CANVAS: STARFIELD + GLITTER ── */
const bgC = document.getElementById('bg'), bgX = bgC.getContext('2d');
const glC = document.getElementById('glitter'), glX = glC.getContext('2d');
// Purple-themed palette for distributor
const COLS = ['#7b2ff7','#c084fc','#00b4d8','#caf0f8','#ffd60a','#ffffff','#a855f7'];
let stars = [], glitters = [];

function resize() {
  bgC.width = glC.width = innerWidth;
  bgC.height = glC.height = innerHeight;
  stars = Array.from({length:200}, () => ({
    x: Math.random()*bgC.width, y: Math.random()*bgC.height,
    r: Math.random()*1.6+.2, spd: Math.random()*.008+.003, phase: Math.random()*Math.PI*2
  }));
}

function drawBg(t) {
  bgX.fillStyle = '#03071e'; bgX.fillRect(0,0,bgC.width,bgC.height);
  // Purple nebula top-right
  let g = bgX.createRadialGradient(bgC.width*.8, bgC.height*.1, 0, bgC.width*.8, bgC.height*.1, 500);
  g.addColorStop(0,'rgba(123,47,247,.25)'); g.addColorStop(1,'transparent');
  bgX.fillStyle=g; bgX.fillRect(0,0,bgC.width,bgC.height);
  // Blue nebula bottom-left
  g = bgX.createRadialGradient(bgC.width*.1, bgC.height*.85, 0, bgC.width*.1, bgC.height*.85, 400);
  g.addColorStop(0,'rgba(0,180,216,.15)'); g.addColorStop(1,'transparent');
  bgX.fillStyle=g; bgX.fillRect(0,0,bgC.width,bgC.height);
  // Stars
  stars.forEach(s=>{
    const a=.3+.7*(Math.sin(t*s.spd+s.phase)*.5+.5);
    bgX.beginPath(); bgX.arc(s.x,s.y,s.r,0,Math.PI*2);
    bgX.fillStyle=`rgba(232,213,255,${a})`; bgX.fill();
  });
}

function spawn(x,y,n=5){
  for(let i=0;i<n;i++) glitters.push({
    x,y,vx:(Math.random()-.5)*3,vy:-(Math.random()*3+.5),
    r:Math.random()*3+1,life:0,maxLife:50+Math.random()*40,
    color:COLS[Math.floor(Math.random()*COLS.length)],
    rot:Math.random()*Math.PI*2,rotSpd:(Math.random()-.5)*.2,
    shape:Math.random()>.5?'star':'circle'
  });
}

function spawnBurst(){
  for(let i=0;i<40;i++) spawn(Math.random()*glC.width,Math.random()*glC.height*.6,1);
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
    g.life++;g.x+=g.vx;g.y+=g.vy;g.vy+=.06;g.rot+=g.rotSpd;
    const p=g.life/g.maxLife, a=p<.2?p/.2:1-(p-.2)/.8;
    glX.save();glX.translate(g.x,g.y);glX.rotate(g.rot);
    glX.globalAlpha=a;glX.fillStyle=g.color;
    glX.shadowBlur=8;glX.shadowColor=g.color;
    if(g.shape==='star'){drawStar(glX,0,0,g.r);glX.fill();}
    else{glX.beginPath();glX.arc(0,0,g.r,0,Math.PI*2);glX.fill();}
    glX.restore();
  });
}

let t = 0;
(function loop(){ t++; drawBg(t); drawGl(); requestAnimationFrame(loop); })();
window.addEventListener('resize', resize); resize();
setInterval(()=>spawn(Math.random()*glC.width,Math.random()*glC.height,3),120);
setTimeout(spawnBurst, 600);
document.addEventListener('mousemove',e=>{ if(Math.random()>.8) spawn(e.clientX,e.clientY,2); });
document.addEventListener('click',e=>spawn(e.clientX,e.clientY,8));
window.spawnBurst = spawnBurst;
</script>
</body>
</html>