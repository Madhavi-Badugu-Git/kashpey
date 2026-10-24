<?php
session_start();
if (!isset($_SESSION['dist_user_id'])) {
    header("Location: distributor-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId = $_SESSION['dist_user_id'];

// Fetch distributor data from the correct table
$stmt = $conn->prepare("SELECT id, firstName, lastName, mobile, email_id, avatar, status, created_at FROM tbl_distributor_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$user) {
    // Should not happen, but handle gracefully
    session_destroy();
    header("Location: distributor-login");
    exit();
}

// Compute full name and initials
$fullName = $user['firstName'] . ' ' . $user['lastName'];
$initials = strtoupper(substr($user['firstName'], 0, 1) . substr($user['lastName'], 0, 1));
if (strlen($initials) < 2) $initials = strtoupper(substr($fullName, 0, 2));

// Format joining date (if available)
$joinedDate = !empty($user['created_at']) ? date("d M Y", strtotime($user['created_at'])) : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Seva | Distributor Profile</title>
    <link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: 'Exo 2', sans-serif;
            background: #0a1828;
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .profile-container {
            max-width: 800px;
            width: 100%;
            background: rgba(13,31,53,0.88);
            backdrop-filter: blur(16px);
            border-radius: 32px;
            border: 1px solid rgba(41,171,226,0.35);
            padding: 40px 36px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 30px rgba(41,171,226,0.2);
            animation: fadeUp 0.6s ease;
        }
        @keyframes fadeUp {
            from { opacity:0; transform:translateY(30px); }
            to   { opacity:1; transform:translateY(0); }
        }
        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            background: linear-gradient(120deg, #fff, #4dd9f5, #29abe2);
            -webkit-background-clip: text; background-clip: text; color: transparent;
            margin-bottom: 8px;
        }
        .sub {
            color: rgba(160,210,240,0.7);
            margin-bottom: 28px;
            border-left: 3px solid #29abe2;
            padding-left: 14px;
        }
        .profile-avatar {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .avatar-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #29abe2;
            box-shadow: 0 0 25px rgba(41,171,226,0.5);
        }
        .avatar-initials {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a6fad, #2eb84b);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Orbitron', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: white;
            border: 4px solid #29abe2;
            box-shadow: 0 0 25px rgba(41,171,226,0.5);
        }
        .info-grid {
            display: grid;
            grid-template-columns: 140px 1fr;
            gap: 16px 12px;
            margin: 30px 0;
        }
        .info-label {
            font-weight: 700;
            color: #4dd9f5;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.8px;
        }
        .info-value {
            color: #fff;
            font-size: 1rem;
            word-break: break-word;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 14px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            background: rgba(46,184,75,0.2);
            border: 1px solid rgba(46,184,75,0.5);
            color: #57d672;
        }
        .status-badge.inactive {
            background: rgba(255,107,107,0.2);
            border-color: #ff6b6b;
            color: #ffb3b3;
        }
        .status-badge.pending {
            background: rgba(245,166,35,0.2);
            border-color: #f5a623;
            color: #ffd166;
        }
        .btn-back {
            display: inline-block;
            padding: 12px 28px;
            background: linear-gradient(135deg, #1a6fad, #2eb84b);
            border: none;
            border-radius: 40px;
            font-size: 0.9rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.3s;
            margin-top: 16px;
            text-align: center;
        }
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(41,171,226,0.4);
        }
        hr {
            border-color: rgba(41,171,226,0.2);
            margin: 20px 0;
        }
        @media (max-width: 550px) {
            .profile-container { padding: 28px 20px; }
            .info-grid { grid-template-columns: 1fr; gap: 8px; }
            .info-label { margin-top: 12px; }
        }
    </style>
</head>
<body>
<div class="profile-container">
    <h1>Distributor Profile</h1>
    <div class="sub">View your registered details</div>

    <!-- Avatar Section -->
    <div class="profile-avatar">
        <?php if (!empty($user['avatar']) && file_exists($user['avatar'])): ?>
            <img src="<?= htmlspecialchars($user['avatar']) ?>" class="avatar-image" alt="Profile Picture">
        <?php else: ?>
            <div class="avatar-initials"><?= htmlspecialchars($initials) ?></div>
        <?php endif; ?>
    </div>

    <!-- Information Grid -->
    <div class="info-grid">
        <div class="info-label">Distributor ID</div>
        <div class="info-value">#<?= str_pad($user['id'], 5, '0', STR_PAD_LEFT) ?></div>

        <div class="info-label">Full Name</div>
        <div class="info-value"><?= htmlspecialchars($fullName) ?></div>

        <div class="info-label">First Name</div>
        <div class="info-value"><?= htmlspecialchars($user['firstName']) ?></div>

        <div class="info-label">Last Name</div>
        <div class="info-value"><?= htmlspecialchars($user['lastName']) ?></div>

        <div class="info-label">Mobile Number</div>
        <div class="info-value"><?= htmlspecialchars($user['mobile']) ?></div>

        <div class="info-label">Email Address</div>
        <div class="info-value"><?= htmlspecialchars($user['email_id']) ?></div>

        <div class="info-label">Account Status</div>
        <div class="info-value">
            <?php
            $statusClass = '';
            if ($user['status'] == 'active') $statusClass = '';
            elseif ($user['status'] == 'pending') $statusClass = 'pending';
            else $statusClass = 'inactive';
            ?>
            <span class="status-badge <?= $statusClass ?>"><?= ucfirst($user['status']) ?></span>
        </div>

        <div class="info-label">Joined On</div>
        <div class="info-value"><?= htmlspecialchars($joinedDate) ?></div>
    </div>

    <hr>

    <a href="distributor-dashboard" class="btn-back">← Back to Dashboard</a>
</div>
</body>
</html>