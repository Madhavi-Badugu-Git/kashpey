<?php
session_start();
if (!isset($_SESSION['dist_user_id'])) {
    header("Location: distributor-login");
    exit();
}
require_once('includes/dbConfig.php');

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: distributor-login");
    exit();
}

$userId    = $_SESSION['dist_user_id'];
$userName  = $_SESSION['dist_user_name'];
$userEmail = $_SESSION['dist_user_email'];

$stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_distributor_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$userData = $stmt->get_result()->fetch_assoc();

$firstName = $userData['firstName'] ?? explode(' ', $userName)[0];
$lastName  = $userData['lastName']  ?? (strpos($userName, ' ') ? substr($userName, strpos($userName, ' ') + 1) : '');
$fullName  = trim($firstName . ' ' . $lastName) ?: $userName;
$mobile    = $userData['mobile']    ?? 'N/A';
$email     = $userData['email_id']  ?? $userEmail;
$status    = $userData['status']    ?? 'Active';
$avatar    = $userData['avatar']    ?? '';

// Generate initials
$initials = strtoupper(substr($firstName, 0, 1) . substr($lastName, 0, 1));
if (strlen($initials) < 2) $initials = strtoupper(substr($fullName, 0, 2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>K-Seva | Distributor Dashboard</title>
<link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<style>
    :root {
        --navy:    #0d1f35;
        --navy2:   #142840;
        --blue:    #1a6fad;
        --blue2:   #29abe2;
        --cyan:    #4dd9f5;
        --green:   #2eb84b;
        --green2:  #57d672;
        --gold:    #f5a623;
        --gold2:   #ffd166;
        --white:   #ffffff;
        --text:    #cde8f8;
        --muted:   rgba(160,210,240,0.6);
        --glass:   rgba(13,31,53,0.72);
        --glass2:  rgba(29,72,120,0.35);
        --border:  rgba(41,171,226,0.25);
        --border2: rgba(41,171,226,0.5);
        --glow:    0 0 22px rgba(41,171,226,0.45);
        --glow-g:  0 0 22px rgba(46,184,75,0.45);
        --glow-gold: 0 0 22px rgba(245,166,35,0.5);
    }

    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }

    html { scroll-behavior: smooth; }

    body {
        font-family: 'Exo 2', sans-serif;
        min-height: 100vh;
        background: var(--navy);
        color: var(--white);
        overflow-x: hidden;
    }

    /* Canvas layers */
    #bg-canvas, #glitter-canvas {
        position: fixed; top:0; left:0;
        width:100%; height:100%;
        pointer-events: none;
    }
    #bg-canvas    { z-index: 0; }
    #glitter-canvas { z-index: 1; }

    /* Layout wrapper */
    .wrapper {
        position: relative;
        z-index: 2;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 28px 40px;
    }

    /* Top nav */
    .topnav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 28px;
        margin-bottom: 28px;
        background: var(--glass);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border-bottom: 1px solid var(--border);
        position: sticky; top: 0;
        z-index: 999;
        animation: slideDown 0.6s ease;
    }

    @keyframes slideDown {
        from { transform: translateY(-100%); opacity:0; }
        to   { transform: translateY(0);     opacity:1; }
    }

    .logo-wrap {
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .logo-wrap img {
        height: 52px;
        filter: drop-shadow(0 0 10px rgba(41,171,226,0.7));
    }
    .logo-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .logo-text .brand,
    .logo-text .sub {
        width: 100%;
    }
    .logo-text .brand {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.35rem;
        font-weight: 700;
        background: linear-gradient(120deg, var(--white), var(--cyan), var(--blue2));
        -webkit-background-clip: text; background-clip: text; color: transparent;
        letter-spacing: 1px;
        line-height: 1.1;
    }
    .logo-text .sub {
        font-size: 0.72rem;
        color: var(--muted);
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    /* Back button */
    .back-btn {
        display: flex; align-items: center; gap: 8px;
        padding: 9px 22px;
        border-radius: 50px;
        border: 1px solid var(--border2);
        background: rgba(41,171,226,0.1);
        color: var(--cyan);
        font-weight: 600;
        font-size: 0.875rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.25s;
        font-family: 'Exo 2', sans-serif;
    }
    .back-btn:hover {
        background: rgba(41,171,226,0.22);
        border-color: var(--cyan);
        transform: translateX(-3px);
        color: white;
        box-shadow: var(--glow);
    }

    /* Profile panel */
    .profile-panel {
        position: relative;
        cursor: pointer;
    }

    .profile-trigger {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 6px 18px 6px 6px;
        border-radius: 50px;
        border: 1.5px solid var(--border2);
        background: rgba(29,72,120,0.4);
        transition: all 0.25s;
        backdrop-filter: blur(8px);
    }
    .profile-trigger:hover {
        background: rgba(41,171,226,0.18);
        border-color: var(--cyan);
        box-shadow: var(--glow);
    }

    .avatar-ring {
        position: relative;
        width: 48px; height: 48px;
        flex-shrink: 0;
    }
    .avatar-ring::before {
        content: '';
        position: absolute; inset: -3px;
        border-radius: 50%;
        background: conic-gradient(var(--blue2), var(--green), var(--gold), var(--blue2));
        animation: spinRing 3s linear infinite;
        z-index: 0;
    }
    @keyframes spinRing {
        to { transform: rotate(360deg); }
    }
    .avatar-ring::after {
        content: '';
        position: absolute; inset: 1px;
        border-radius: 50%;
        background: var(--navy2);
        z-index: 1;
    }
    .avatar-inner {
        position: absolute; inset: 3px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--blue) 0%, var(--navy2) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--cyan);
        text-shadow: 0 0 10px var(--cyan);
        letter-spacing: 1px;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
        line-height: 1.25;
    }
    .profile-info .p-name {
        font-weight: 700;
        font-size: 0.95rem;
        color: var(--white);
        letter-spacing: 0.3px;
    }
    .profile-info .p-role {
        font-size: 0.72rem;
        color: var(--cyan);
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .chevron-icon {
        color: var(--muted);
        transition: transform 0.3s;
        flex-shrink: 0;
    }
    .profile-panel.open .chevron-icon { transform: rotate(180deg); }

    /* Dropdown */
    .profile-dropdown {
        position: absolute;
        top: calc(100% + 12px);
        right: 0;
        width: 300px;
        background: rgba(10,24,45,0.97);
        backdrop-filter: blur(20px);
        border: 1px solid var(--border2);
        border-radius: 20px;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-8px) scale(0.97);
        transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
        box-shadow: 0 25px 50px rgba(0,0,0,0.6), 0 0 0 1px rgba(41,171,226,0.1);
        z-index: 1000;
    }
    .profile-panel.open .profile-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
    }

    .pd-header {
        padding: 22px 20px 18px;
        background: linear-gradient(135deg, rgba(26,111,173,0.3), rgba(46,184,75,0.15));
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .pd-avatar-big {
        width: 64px; height: 64px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--blue), var(--green));
        display: flex; align-items: center; justify-content: center;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.4rem; font-weight: 700;
        color: white;
        box-shadow: 0 0 20px rgba(41,171,226,0.5), 0 0 40px rgba(46,184,75,0.3);
        flex-shrink: 0;
        border: 2px solid rgba(255,255,255,0.2);
    }
    .pd-meta { flex: 1; min-width: 0; }
    .pd-meta .pd-name {
        font-weight: 700;
        font-size: 1rem;
        color: white;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .pd-meta .pd-email {
        font-size: 0.75rem;
        color: var(--muted);
        margin-top: 3px;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .pd-meta .pd-phone {
        font-size: 0.78rem;
        color: var(--cyan);
        margin-top: 4px;
        font-weight: 600;
    }
    .pd-status-badge {
        display: inline-flex; align-items: center; gap: 5px;
        margin-top: 6px;
        padding: 3px 10px;
        border-radius: 20px;
        background: rgba(46,184,75,0.2);
        border: 1px solid rgba(46,184,75,0.4);
        color: var(--green2);
        font-size: 0.7rem; font-weight: 700;
        text-transform: uppercase; letter-spacing: 0.8px;
    }
    .pd-status-badge::before {
        content: '';
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--green2);
        box-shadow: 0 0 6px var(--green2);
        animation: pulse 1.5s ease infinite;
    }
    @keyframes pulse {
        0%,100% { opacity:1; transform:scale(1); }
        50% { opacity:0.5; transform:scale(0.8); }
    }

    .pd-links { padding: 8px 0; }
    .pd-link {
        display: flex; align-items: center; gap: 14px;
        padding: 12px 20px;
        color: var(--text);
        text-decoration: none;
        font-size: 0.875rem; font-weight: 500;
        transition: all 0.2s;
        border-bottom: 1px solid rgba(41,171,226,0.07);
        cursor: pointer;
    }
    .pd-link:hover {
        background: rgba(41,171,226,0.1);
        color: white;
        padding-left: 28px;
    }
    .pd-link.logout {
        color: #ff6b6b;
        border-bottom: none;
    }
    .pd-link.logout:hover { background: rgba(255,107,107,0.1); }
    .pd-link-icon {
        width: 32px; height: 32px;
        border-radius: 8px;
        background: rgba(41,171,226,0.1);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        transition: all 0.2s;
    }
    .pd-link:hover .pd-link-icon {
        background: rgba(41,171,226,0.2);
        box-shadow: 0 0 10px rgba(41,171,226,0.3);
    }
    .pd-link.logout .pd-link-icon { background: rgba(255,107,107,0.1); }

    /* Page content */
    .hero {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 24px;
        align-items: center;
        background: var(--glass2);
        backdrop-filter: blur(16px);
        border: 1px solid var(--border);
        border-radius: 28px;
        padding: 32px 40px;
        margin-bottom: 32px;
        position: relative;
        overflow: hidden;
        animation: fadeUp 0.7s ease both;
    }
    .hero::before {
        content: '';
        position: absolute;
        top: -60px; right: -60px;
        width: 240px; height: 240px;
        background: radial-gradient(circle, rgba(41,171,226,0.18) 0%, transparent 70%);
        pointer-events: none;
    }
    .hero::after {
        content: '';
        position: absolute;
        bottom: -40px; left: 30%;
        width: 160px; height: 160px;
        background: radial-gradient(circle, rgba(46,184,75,0.12) 0%, transparent 70%);
        pointer-events: none;
    }
    .hero-text h1 {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        background: linear-gradient(120deg, #fff 0%, var(--cyan) 50%, var(--blue2) 100%);
        -webkit-background-clip: text; background-clip: text; color: transparent;
        margin-bottom: 10px;
        line-height: 1.2;
    }
    .hero-text p {
        color: var(--muted);
        font-size: 1rem;
        font-weight: 400;
    }
    .hero-date {
        text-align: right;
        flex-shrink: 0;
    }
    .hero-date .big-time {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--gold);
        text-shadow: 0 0 20px rgba(245,166,35,0.6);
        line-height: 1;
    }
    .hero-date .date-str {
        font-size: 0.8rem;
        color: var(--muted);
        margin-top: 4px;
        letter-spacing: 0.5px;
    }
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
        padding: 6px 14px;
        border-radius: 20px;
        background: rgba(46,184,75,0.15);
        border: 1px solid rgba(46,184,75,0.3);
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--green2);
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }
    .hero-badge::before {
        content: '';
        width: 7px; height: 7px; border-radius: 50%;
        background: var(--green2);
        box-shadow: 0 0 8px var(--green2);
        animation: pulse 1.5s ease infinite;
    }

    /* Stats grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 28px;
    }
    .stat-card {
        background: var(--glass2);
        backdrop-filter: blur(12px);
        border: 1px solid var(--border);
        border-radius: 22px;
        padding: 26px 22px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.35s cubic-bezier(0.34,1.2,0.64,1);
        animation: fadeUp 0.7s ease both;
    }
    .stat-card:nth-child(1) { animation-delay: 0.1s; }
    .stat-card:nth-child(2) { animation-delay: 0.2s; }
    .stat-card:nth-child(3) { animation-delay: 0.3s; }
    .stat-card:nth-child(4) { animation-delay: 0.4s; }
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        border-radius: 22px 22px 0 0;
        transition: opacity 0.3s;
    }
    .stat-card.blue::before  { background: linear-gradient(90deg, var(--blue), var(--cyan)); }
    .stat-card.green::before { background: linear-gradient(90deg, var(--green), var(--green2)); }
    .stat-card.gold::before  { background: linear-gradient(90deg, var(--gold), var(--gold2)); }
    .stat-card.teal::before  { background: linear-gradient(90deg, #00c9a7, #4dd9f5); }

    .stat-card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: rgba(41,171,226,0.5);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4), var(--glow);
    }
    .stat-card.green:hover { box-shadow: 0 20px 40px rgba(0,0,0,0.4), var(--glow-g); }
    .stat-card.gold:hover  { box-shadow: 0 20px 40px rgba(0,0,0,0.4), var(--glow-gold); }

    .stat-glow {
        position: absolute;
        top: 50%; right: -20px;
        transform: translateY(-50%);
        width: 90px; height: 90px;
        border-radius: 50%;
        opacity: 0.12;
        filter: blur(24px);
        pointer-events: none;
        transition: opacity 0.3s;
    }
    .stat-card:hover .stat-glow { opacity: 0.25; }
    .stat-card.blue  .stat-glow { background: var(--blue2); }
    .stat-card.green .stat-glow { background: var(--green); }
    .stat-card.gold  .stat-glow { background: var(--gold); }
    .stat-card.teal  .stat-glow { background: #00c9a7; }

    .stat-icon-wrap {
        width: 52px; height: 52px;
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.6rem;
        margin-bottom: 16px;
        position: relative; z-index: 1;
    }
    .stat-card.blue  .stat-icon-wrap { background: rgba(41,171,226,0.15); border: 1px solid rgba(41,171,226,0.3); }
    .stat-card.green .stat-icon-wrap { background: rgba(46,184,75,0.15);  border: 1px solid rgba(46,184,75,0.3);  }
    .stat-card.gold  .stat-icon-wrap { background: rgba(245,166,35,0.15); border: 1px solid rgba(245,166,35,0.3); }
    .stat-card.teal  .stat-icon-wrap { background: rgba(0,201,167,0.15);  border: 1px solid rgba(0,201,167,0.3);  }

    .stat-num {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 6px;
        position: relative; z-index: 1;
    }
    .stat-card.blue  .stat-num { color: var(--cyan);   text-shadow: 0 0 15px rgba(77,217,245,0.5); }
    .stat-card.green .stat-num { color: var(--green2);  text-shadow: 0 0 15px rgba(87,214,114,0.5); }
    .stat-card.gold  .stat-num { color: var(--gold2);   text-shadow: 0 0 15px rgba(255,209,102,0.5); }
    .stat-card.teal  .stat-num { color: #4dd9f5;        text-shadow: 0 0 15px rgba(77,217,245,0.4); }

    .stat-label {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--muted);
        text-transform: uppercase;
        letter-spacing: 0.8px;
        position: relative; z-index: 1;
    }
    .stat-change {
        display: inline-flex; align-items: center; gap: 4px;
        margin-top: 10px;
        font-size: 0.75rem; font-weight: 700;
        padding: 3px 10px; border-radius: 20px;
        position: relative; z-index: 1;
    }
    .stat-change.up   { color: var(--green2); background: rgba(46,184,75,0.15); }
    .stat-change.down { color: #ff6b6b;       background: rgba(255,107,107,0.12); }

    /* Lower grid */
    .lower-grid {
        display: grid;
        grid-template-columns: 1.6fr 1fr;
        gap: 22px;
        margin-bottom: 22px;
    }

    .panel {
        background: var(--glass2);
        backdrop-filter: blur(12px);
        border: 1px solid var(--border);
        border-radius: 22px;
        padding: 24px 26px;
        animation: fadeUp 0.8s ease both;
    }
    .panel-title {
        display: flex; align-items: center; gap: 10px;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cyan);
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        padding-bottom: 14px;
        border-bottom: 1px solid var(--border);
    }
    .panel-title-dot {
        width: 8px; height: 8px; border-radius: 50%;
        background: var(--cyan);
        box-shadow: 0 0 8px var(--cyan);
    }

    /* Activity Table */
    .activity-table { width: 100%; border-collapse: collapse; }
    .activity-table th {
        text-align: left;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--muted);
        padding: 0 12px 10px;
        font-weight: 600;
    }
    .activity-table td {
        padding: 11px 12px;
        font-size: 0.875rem;
        color: var(--text);
        border-top: 1px solid rgba(41,171,226,0.07);
    }
    .activity-table tr:hover td {
        background: rgba(41,171,226,0.05);
        color: white;
    }
    .activity-table td:last-child { text-align: right; font-size: 0.75rem; color: var(--muted); }
    .activity-tag {
        display: inline-block;
        padding: 3px 10px; border-radius: 20px;
        font-size: 0.7rem; font-weight: 700;
        text-transform: uppercase; letter-spacing: 0.5px;
    }
    .activity-tag.pay  { background: rgba(41,171,226,0.15); color: var(--cyan); }
    .activity-tag.send { background: rgba(245,166,35,0.15);  color: var(--gold2); }
    .activity-tag.rech { background: rgba(46,184,75,0.15);   color: var(--green2); }
    .activity-tag.tag  { background: rgba(160,82,255,0.15);  color: #c084fc; }

    /* Quick Actions */
    .qa-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
    .qa-btn {
        display: flex; flex-direction: column; align-items: center;
        gap: 10px;
        padding: 18px 12px;
        border-radius: 16px;
        border: 1px solid var(--border);
        background: rgba(13,31,53,0.5);
        cursor: pointer;
        transition: all 0.25s;
        text-decoration: none;
        color: var(--text);
    }
    .qa-btn:hover {
        border-color: var(--border2);
        background: rgba(41,171,226,0.1);
        transform: translateY(-4px);
        box-shadow: var(--glow);
        color: white;
    }
    .qa-icon {
        width: 44px; height: 44px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem;
    }
    .qa-btn:nth-child(1) .qa-icon { background: rgba(41,171,226,0.15); }
    .qa-btn:nth-child(2) .qa-icon { background: rgba(46,184,75,0.15); }
    .qa-btn:nth-child(3) .qa-icon { background: rgba(245,166,35,0.15); }
    .qa-btn:nth-child(4) .qa-icon { background: rgba(160,82,255,0.15); }
    .qa-btn:nth-child(5) .qa-icon { background: rgba(0,201,167,0.15); }
    .qa-btn:nth-child(6) .qa-icon { background: rgba(255,107,107,0.15); }
    .qa-label { font-size: 0.78rem; font-weight: 600; text-align: center; line-height: 1.3; }

    /* Bottom grid */
    .bottom-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 22px;
    }

    .profile-card {
        background: linear-gradient(135deg, rgba(26,111,173,0.2) 0%, rgba(46,184,75,0.12) 100%);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(41,171,226,0.3);
        border-radius: 22px;
        padding: 28px 26px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 14px;
        animation: fadeUp 0.9s ease both;
        position: relative;
        overflow: hidden;
    }
    .profile-card::before {
        content: '';
        position: absolute;
        top: -50px; left: 50%;
        transform: translateX(-50%);
        width: 200px; height: 200px;
        background: radial-gradient(circle, rgba(41,171,226,0.15) 0%, transparent 70%);
        pointer-events: none;
    }
    .pc-avatar {
        width: 80px; height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--blue), #023e8a);
        display: flex; align-items: center; justify-content: center;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem; font-weight: 700;
        color: var(--cyan);
        text-shadow: 0 0 12px var(--cyan);
        position: relative; z-index: 1;
        box-shadow: 0 0 0 4px rgba(41,171,226,0.2), 0 0 30px rgba(41,171,226,0.3);
    }
    .pc-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem; font-weight: 700;
        color: white;
        position: relative; z-index: 1;
    }
    .pc-detail {
        font-size: 0.8rem; color: var(--muted);
        position: relative; z-index: 1;
    }
    .pc-detail span { display: block; margin-bottom: 4px; }
    .pc-detail strong { color: var(--cyan); }
    .pc-edit-btn {
        padding: 9px 24px;
        border-radius: 30px;
        border: 1px solid var(--border2);
        background: rgba(41,171,226,0.12);
        color: var(--cyan);
        font-size: 0.82rem; font-weight: 700;
        cursor: pointer;
        transition: all 0.25s;
        text-decoration: none;
        font-family: 'Exo 2', sans-serif;
        position: relative; z-index: 1;
    }
    .pc-edit-btn:hover {
        background: rgba(41,171,226,0.25);
        box-shadow: var(--glow);
        transform: scale(1.05);
        color: white;
    }

    /* Earnings mini chart */
    .earnings-panel {
        padding: 24px 26px;
        animation: fadeUp 0.9s ease 0.1s both;
    }
    .mini-chart {
        display: flex;
        align-items: flex-end;
        gap: 8px;
        height: 80px;
        margin-top: 16px;
    }
    .bar-wrap {
        flex: 1;
        display: flex; flex-direction: column; align-items: center; gap: 6px;
    }
    .bar {
        width: 100%;
        border-radius: 6px 6px 0 0;
        background: linear-gradient(180deg, var(--blue2), rgba(41,171,226,0.3));
        transition: all 0.5s ease;
        min-height: 4px;
        position: relative;
    }
    .bar:hover { filter: brightness(1.3); }
    .bar.highlight { background: linear-gradient(180deg, var(--gold2), var(--gold)); }
    .bar-label { font-size: 0.65rem; color: var(--muted); }

    /* Notifications */
    .notif-list { display: flex; flex-direction: column; gap: 10px; }
    .notif-item {
        display: flex; align-items: flex-start; gap: 12px;
        padding: 11px 14px;
        border-radius: 12px;
        background: rgba(13,31,53,0.5);
        border: 1px solid rgba(41,171,226,0.08);
        transition: all 0.2s;
    }
    .notif-item:hover { border-color: var(--border); background: rgba(41,171,226,0.06); }
    .notif-dot {
        width: 10px; height: 10px; border-radius: 50%;
        margin-top: 4px; flex-shrink: 0;
        box-shadow: 0 0 8px;
    }
    .notif-dot.blue  { background: var(--blue2);  box-shadow: 0 0 8px var(--blue2);  }
    .notif-dot.green { background: var(--green2); box-shadow: 0 0 8px var(--green2); }
    .notif-dot.gold  { background: var(--gold2);  box-shadow: 0 0 8px var(--gold2);  }
    .notif-text { font-size: 0.82rem; color: var(--text); line-height: 1.4; }
    .notif-time { font-size: 0.68rem; color: var(--muted); margin-top: 3px; }

    /* Animations */
    @keyframes fadeUp {
        from { opacity:0; transform:translateY(28px); }
        to   { opacity:1; transform:translateY(0); }
    }

    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: var(--navy); }
    ::-webkit-scrollbar-thumb { background: rgba(41,171,226,0.3); border-radius: 6px; }
    ::-webkit-scrollbar-thumb:hover { background: var(--blue2); }

    /* Responsive */
    @media (max-width: 1100px) {
        .stats-grid { grid-template-columns: repeat(2, 1fr); }
        .bottom-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
        .wrapper { padding: 0 14px 30px; }
        .topnav { padding: 12px 16px; }
        .hero { grid-template-columns: 1fr; }
        .hero-date { text-align: left; }
        .stats-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
        .lower-grid { grid-template-columns: 1fr; }
        .bottom-grid { grid-template-columns: 1fr; }
        .profile-info { display: none; }
        .qa-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 480px) {
        .stats-grid { grid-template-columns: 1fr; }
        .hero-text h1 { font-size: 1.4rem; }
    }
</style>
</head>
<body>

<canvas id="bg-canvas"></canvas>
<canvas id="glitter-canvas"></canvas>

<div class="wrapper">

    <!-- Navbar -->
    <nav class="topnav">
        <div class="logo-wrap">
            <a href="home">
                <img src="assets/logo/footer-1.png" alt="K-Seva"
                     onerror="this.style.display='none'" style="height:52px;">
            </a>
        </div>
        <div class="logo-text">
            <span class="brand">K-Seva Distributor</span>
            <span class="sub">Distribution Management Portal</span>
        </div>
        <div class="nav-right">
            <!-- Profile Panel -->
            <div class="profile-panel" id="profilePanel">
                <div class="profile-trigger" onclick="toggleProfile()">
                    <?php if (!empty($avatar) && file_exists("../" . $avatar)): ?>
                        <img src="../<?= htmlspecialchars($avatar) ?>" alt="Avatar" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover; border: 2px solid #00b4d8;">
                    <?php else: ?>
                        <div class="avatar-ring">
                            <div class="avatar-inner"><?= htmlspecialchars($initials) ?></div>
                        </div>
                    <?php endif; ?>
                    <div class="profile-info">
                        <span class="p-name"><?= htmlspecialchars($fullName) ?></span>
                        <span class="p-role">Distributor</span>
                    </div>
                    <svg class="chevron-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                </div>

                <!-- Dropdown -->
                <div class="profile-dropdown">
                    <div class="pd-header">
                        <?php if (!empty($avatar) && file_exists("../" . $avatar)): ?>
                            <img src="../<?= htmlspecialchars($avatar) ?>" alt="Avatar" style="width: 64px; height: 64px; border-radius: 50%; object-fit: cover; border: 2px solid #00b4d8; box-shadow: 0 0 15px rgba(0,180,216,0.3);">
                        <?php else: ?>
                            <div class="pd-avatar-big"><?= htmlspecialchars($initials) ?></div>
                        <?php endif; ?>
                        <div class="pd-meta">
                            <div class="pd-name"><?= htmlspecialchars($fullName) ?></div>
                            <div class="pd-email"><?= htmlspecialchars($email) ?></div>
                            <div class="pd-phone">📞 <?= htmlspecialchars($mobile) ?></div>
                            <span class="pd-status-badge"><?= ucfirst($status) ?></span>
                        </div>
                    </div>
                    <div class="pd-links">
                        <a class="pd-link" href="distributor-profile">
                            <div class="pd-link-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4dd9f5" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg></div>
                            My Account
                        </a>
                        <a class="pd-link" href="distributor-transactions">
                            <div class="pd-link-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4dd9f5" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="4"/><path d="M8 12h8M8 8h8M8 16h5"/></svg></div>
                            Transaction History
                        </a>
                        <a class="pd-link" href="distributor-security">
                            <div class="pd-link-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4dd9f5" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                            Security Settings
                        </a>
                        <a class="pd-link logout" href="distributor-logout">
                            <div class="pd-link-icon" style="background:rgba(255,107,107,0.1)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ff6b6b" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg></div>
                            Sign Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <div class="hero-text">
            <h1>Welcome back, <?= htmlspecialchars($firstName) ?> 👋</h1>
            <p>Your distributor command center — manage stock, retailers, commissions, and reports.</p>
            <div class="hero-badge">● System Online &amp; Ready</div>
        </div>
        <div class="hero-date">
            <div class="big-time" id="liveTime">--:--</div>
            <div class="date-str" id="liveDate"></div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card blue">
            <div class="stat-glow"></div>
            <div class="stat-icon-wrap">📦</div>
            <div class="stat-num">1,242</div>
            <div class="stat-label">Stock Units</div>
            <div class="stat-change up">▲ 124 this week</div>
        </div>
        <div class="stat-card green">
            <div class="stat-glow"></div>
            <div class="stat-icon-wrap">🏪</div>
            <div class="stat-num">87</div>
            <div class="stat-label">Retailers</div>
            <div class="stat-change up">▲ 12 new</div>
        </div>
        <div class="stat-card gold">
            <div class="stat-glow"></div>
            <div class="stat-icon-wrap">💰</div>
            <div class="stat-num">₹5.28L</div>
            <div class="stat-label">Commissions Earned</div>
            <div class="stat-change up">▲ 8.2%</div>
        </div>
        <div class="stat-card teal">
            <div class="stat-glow"></div>
            <div class="stat-icon-wrap">⚡</div>
            <div class="stat-num">96%</div>
            <div class="stat-label">Service Uptime</div>
            <div class="stat-change up">▲ Excellent</div>
        </div>
    </div>

    <!-- Lower Grid -->
    <div class="lower-grid">
        <!-- Recent Activity -->
        <div class="panel">
            <div class="panel-title"><div class="panel-title-dot"></div> Recent Orders</div>
            <table class="activity-table">
                <thead>
                    <tr>
                        <th>Product / Service</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Distributor Stock - Jio Recharge</td>
                        <td><span class="activity-tag pay">Order</span></td>
                        <td style="color:var(--cyan);font-weight:700">₹12,500</td>
                        <td>2h ago</td>
                    </tr>
                    <tr>
                        <td>Retailer Commission Payout</td>
                        <td><span class="activity-tag send">Payout</span></td>
                        <td style="color:var(--gold2);font-weight:700">₹5,000</td>
                        <td>Yesterday</td>
                    </tr>
                    <tr>
                        <td>New Retailer Enrollment - Ramesh Traders</td>
                        <td><span class="activity-tag tag">Enroll</span></td>
                        <td style="color:var(--green2);font-weight:700">—</td>
                        <td>Yesterday</td>
                    </tr>
                    <tr>
                        <td>Stock Replenishment - Smartphones</td>
                        <td><span class="activity-tag pay">Purchase</span></td>
                        <td style="color:var(--cyan);font-weight:700">₹48,000</td>
                        <td>2d ago</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Quick Actions -->
        <div class="panel">
            <div class="panel-title"><div class="panel-title-dot" style="background:var(--green2);box-shadow:0 0 8px var(--green2)"></div> Quick Actions</div>
            <div class="qa-grid">
                <a class="qa-btn" href="manage-stock">
                    <div class="qa-icon">📦</div>
                    <span class="qa-label">Manage Stock</span>
                </a>
                <a class="qa-btn" href="retailer-network">
                    <div class="qa-icon">🏪</div>
                    <span class="qa-label">Retailers</span>
                </a>
                <a class="qa-btn" href="commission-report">
                    <div class="qa-icon">💰</div>
                    <span class="qa-label">Commissions</span>
                </a>
                <a class="qa-btn" href="order-history">
                    <div class="qa-icon">📄</div>
                    <span class="qa-label">Orders</span>
                </a>
                <a class="qa-btn" href="payout-request">
                    <div class="qa-icon">🏦</div>
                    <span class="qa-label">Payout</span>
                </a>
                <a class="qa-btn" href="distributor-reports">
                    <div class="qa-icon">📊</div>
                    <span class="qa-label">Reports</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Row -->
    <div class="bottom-grid">
        <!-- Profile Summary -->
        <div class="panel profile-card">
            <?php if (!empty($avatar) && file_exists("../" . $avatar)): ?>
                <img src="../<?= htmlspecialchars($avatar) ?>" alt="Avatar" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid #00b4d8; box-shadow: 0 0 20px rgba(0,180,216,0.4); margin-bottom: 12px;">
            <?php else: ?>
                <div class="pc-avatar"><?= htmlspecialchars($initials) ?></div>
            <?php endif; ?>
            <div class="pc-name"><?= htmlspecialchars($fullName) ?></div>
            <div class="pd-status-badge"><?= ucfirst($status) ?> Distributor</div>
            <div class="pc-detail">
                <span>📧 <strong><?= htmlspecialchars($email) ?></strong></span>
                <span>📞 <strong><?= htmlspecialchars($mobile) ?></strong></span>
                <span>🆔 ID: <strong>#<?= str_pad($userId, 5, '0', STR_PAD_LEFT) ?></strong></span>
            </div>
            <a class="pc-edit-btn" href="edit-distributor-profile">✏️ Edit Profile</a>
        </div>

        <!-- Earnings Chart -->
        <div class="panel earnings-panel">
            <div class="panel-title"><div class="panel-title-dot" style="background:var(--gold2);box-shadow:0 0 8px var(--gold2)"></div> Weekly Commission</div>
            <div class="mini-chart" id="miniChart"></div>
        </div>

        <!-- Notifications -->
        <div class="panel">
            <div class="panel-title"><div class="panel-title-dot" style="background:#c084fc;box-shadow:0 0 8px #c084fc"></div> Notifications</div>
            <div class="notif-list">
                <div class="notif-item">
                    <div class="notif-dot green"></div>
                    <div><div class="notif-text">Commission credited: ₹ 12,450 for May sales</div><div class="notif-time">1 hour ago</div></div>
                </div>
                <div class="notif-item">
                    <div class="notif-dot blue"></div>
                    <div><div class="notif-text">New retailer joined from your referral code</div><div class="notif-time">Today 09:00 AM</div></div>
                </div>
                <div class="notif-item">
                    <div class="notif-dot gold"></div>
                    <div><div class="notif-text">Stock alert: 15 units of AC Service Kits left</div><div class="notif-time">Yesterday</div></div>
                </div>
                <div class="notif-item">
                    <div class="notif-dot green"></div>
                    <div><div class="notif-text">Target achieved: 50+ new retailers this month!</div><div class="notif-time">3 days ago</div></div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /wrapper -->

<script>
/* Profile dropdown */
function toggleProfile() {
    document.getElementById('profilePanel').classList.toggle('open');
}
document.addEventListener('click', e => {
    if (!e.target.closest('#profilePanel'))
        document.getElementById('profilePanel').classList.remove('open');
});

/* Live clock */
function updateClock() {
    const now = new Date();
    document.getElementById('liveTime').textContent =
        now.toLocaleTimeString('en-IN', { hour:'2-digit', minute:'2-digit' });
    document.getElementById('liveDate').textContent =
        now.toLocaleDateString('en-IN', { weekday:'long', day:'numeric', month:'long', year:'numeric' });
}
updateClock();
setInterval(updateClock, 1000);

/* Mini bar chart */
(function() {
    const data   = [62, 78, 55, 90, 105, 84, 120];
    const labels = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
    const maxVal = Math.max(...data);
    const chart  = document.getElementById('miniChart');
    data.forEach((v, i) => {
        const pct  = (v / maxVal) * 100;
        const wrap = document.createElement('div');
        wrap.className = 'bar-wrap';
        const bar = document.createElement('div');
        bar.className = 'bar' + (i === data.length - 1 ? ' highlight' : '');
        bar.style.height = '0px';
        bar.title = `₹${v * 1000}`;
        const lbl = document.createElement('div');
        lbl.className = 'bar-label';
        lbl.textContent = labels[i];
        wrap.appendChild(bar);
        wrap.appendChild(lbl);
        chart.appendChild(wrap);
        setTimeout(() => { bar.style.height = `${pct}%`; }, 100 + i * 80);
    });
})();

/* Canvas starfield + glitter (same as before, but with distributor theme) */
const bgCanvas = document.getElementById('bg-canvas');
const bgCtx    = bgCanvas.getContext('2d');
const glCanvas = document.getElementById('glitter-canvas');
const glCtx    = glCanvas.getContext('2d');

const BRAND = ['#29abe2','#4dd9f5','#2eb84b','#57d672','#f5a623','#ffd166','#ffffff','#1a6fad'];

let stars = [], glitters = [];

function resize() {
    bgCanvas.width  = glCanvas.width  = window.innerWidth;
    bgCanvas.height = glCanvas.height = window.innerHeight;
    initStars();
}

function initStars() {
    stars = Array.from({ length: 250 }, () => ({
        x:     Math.random() * bgCanvas.width,
        y:     Math.random() * bgCanvas.height,
        r:     Math.random() * 1.6 + 0.2,
        spd:   Math.random() * 0.007 + 0.002,
        phase: Math.random() * Math.PI * 2,
        col:   Math.random() > 0.85 ? BRAND[Math.floor(Math.random()*4)] : 'rgba(202,240,248,1)'
    }));
}

function drawBg(t) {
    bgCtx.fillStyle = '#0a1828';
    bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

    let g = bgCtx.createRadialGradient(bgCanvas.width * 0.8, bgCanvas.height * 0.1, 0, bgCanvas.width * 0.8, bgCanvas.height * 0.1, 500);
    g.addColorStop(0, 'rgba(26,111,173,0.25)');
    g.addColorStop(1, 'transparent');
    bgCtx.fillStyle = g; bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

    g = bgCtx.createRadialGradient(bgCanvas.width * 0.1, bgCanvas.height * 0.85, 0, bgCanvas.width * 0.1, bgCanvas.height * 0.85, 400);
    g.addColorStop(0, 'rgba(46,184,75,0.15)');
    g.addColorStop(1, 'transparent');
    bgCtx.fillStyle = g; bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

    g = bgCtx.createRadialGradient(bgCanvas.width * 0.5, bgCanvas.height * 0.5, 0, bgCanvas.width * 0.5, bgCanvas.height * 0.5, 300);
    g.addColorStop(0, 'rgba(245,166,35,0.06)');
    g.addColorStop(1, 'transparent');
    bgCtx.fillStyle = g; bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

    stars.forEach(s => {
        const a = 0.25 + 0.75 * (Math.sin(t * s.spd + s.phase) * 0.5 + 0.5);
        bgCtx.beginPath();
        bgCtx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
        bgCtx.fillStyle = s.col.includes('rgba') ? s.col.replace(',1)', `,${a})`) : s.col;
        bgCtx.globalAlpha = a;
        bgCtx.fill();
        bgCtx.globalAlpha = 1;
    });
}

function spawnGlitter(x, y, count = 4) {
    for (let i = 0; i < count; i++) {
        glitters.push({
            x, y,
            vx:      (Math.random() - 0.5) * 3,
            vy:      -(Math.random() * 3.5 + 0.5),
            r:       Math.random() * 3 + 1,
            life:    0,
            maxLife: 50 + Math.random() * 50,
            color:   BRAND[Math.floor(Math.random() * BRAND.length)],
            rot:     Math.random() * Math.PI * 2,
            rotSpd:  (Math.random() - 0.5) * 0.18,
            shape:   Math.random() > 0.5 ? 'star' : 'circle'
        });
    }
}

function drawGlitters() {
    glCtx.clearRect(0, 0, glCanvas.width, glCanvas.height);
    glitters = glitters.filter(g => g.life < g.maxLife);
    glitters.forEach(g => {
        g.life++; g.x += g.vx; g.y += g.vy; g.vy += 0.06; g.rot += g.rotSpd;
        const prog = g.life / g.maxLife;
        const a    = prog < 0.2 ? prog / 0.2 : 1 - (prog - 0.2) / 0.8;
        glCtx.save();
        glCtx.translate(g.x, g.y);
        glCtx.rotate(g.rot);
        glCtx.globalAlpha = a;
        glCtx.fillStyle   = g.color;
        glCtx.shadowBlur  = 8; glCtx.shadowColor = g.color;
        if (g.shape === 'star') {
            glCtx.beginPath();
            for (let i = 0; i < 5; i++) {
                const ang = (i * 4 * Math.PI / 5) - Math.PI / 2;
                i === 0 ? glCtx.moveTo(g.r * Math.cos(ang), g.r * Math.sin(ang))
                        : glCtx.lineTo(g.r * Math.cos(ang), g.r * Math.sin(ang));
            }
            glCtx.closePath(); glCtx.fill();
        } else {
            glCtx.beginPath(); glCtx.arc(0, 0, g.r, 0, Math.PI * 2); glCtx.fill();
        }
        glCtx.restore();
    });
}

let tick = 0;
function loop() {
    tick++;
    drawBg(tick);
    drawGlitters();
    requestAnimationFrame(loop);
}

window.addEventListener('resize', resize);
resize();
loop();

setInterval(() => {
    spawnGlitter(Math.random() * glCanvas.width, Math.random() * glCanvas.height, 3);
}, 120);

setTimeout(() => {
    for (let i = 0; i < 8; i++) {
        setTimeout(() => {
            spawnGlitter(Math.random() * glCanvas.width, Math.random() * glCanvas.height * 0.6, 12);
        }, i * 120);
    }
}, 400);

document.addEventListener('mousemove', e => {
    if (Math.random() > 0.7) spawnGlitter(e.clientX, e.clientY, 2);
});
document.addEventListener('click', e => {
    spawnGlitter(e.clientX, e.clientY, 18);
});
</script>

<?php if (isset($_SESSION['dist_toast_success'])): ?>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const t = document.createElement('div');
    t.textContent = '<?= htmlspecialchars($_SESSION['dist_toast_success']) ?>';
    Object.assign(t.style, {
        position:'fixed', bottom:'28px', right:'28px', zIndex:'9999',
        padding:'14px 28px', borderRadius:'50px',
        background:'linear-gradient(135deg,#1a6fad,#2eb84b)',
        color:'#fff', fontFamily:"'Exo 2',sans-serif",
        fontWeight:'700', fontSize:'0.9rem',
        boxShadow:'0 8px 24px rgba(0,0,0,0.4),0 0 20px rgba(41,171,226,0.5)',
        border:'1px solid rgba(255,255,255,0.15)',
        animation:'slideInToast 0.5s ease'
    });
    const style = document.createElement('style');
    style.textContent = `@keyframes slideInToast{from{transform:translateX(120%);opacity:0}to{transform:translateX(0);opacity:1}}`;
    document.head.appendChild(style);
    document.body.appendChild(t);
    setTimeout(() => t.remove(), 4000);
});
</script>
<?php unset($_SESSION['dist_toast_success']); endif; ?>
</body>
</html>