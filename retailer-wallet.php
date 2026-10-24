<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: retailer-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId    = $_SESSION['user_id'];
$userName  = $_SESSION['user_name'];
$userEmail = $_SESSION['user_email'];

$stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_retail_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$userData = $stmt->get_result()->fetch_assoc();

$firstName = $userData['firstName'] ?? $userName;
$lastName  = $userData['lastName']  ?? '';
$fullName  = trim($firstName . ' ' . $lastName) ?: $userName;
$email     = $userData['email_id']  ?? $userEmail;

$firstLetter = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : '';
if (!empty($firstLetter)) {
    $initials = $firstLetter;
} elseif (!empty($userName)) {
    $initials = strtoupper(substr($userName, 0, 1));
} else {
    $initials = "T";
}

// Set default earnings values
$totalCommission = '₹0.00';
$walletBalance = '₹0.00';
$todayEarning = '₹0.00';
$weekEarning = '₹0.00';
$monthEarning = '₹0.00';
$pendingCommission = '₹0.00';

$tableCheck = $conn->query("SHOW TABLES LIKE 'tbl_retailer_earnings'");
if ($tableCheck && $tableCheck->num_rows > 0) {
    $stmtE = $conn->prepare("SELECT total_commission, wallet_balance, today_earning, week_earning, month_earning, pending_commission FROM tbl_retailer_earnings WHERE retailer_id = ? LIMIT 1");
    if ($stmtE) {
        $stmtE->bind_param("i", $userId);
        $stmtE->execute();
        $resultE = $stmtE->get_result();
        $earnings = $resultE->fetch_assoc();
        $stmtE->close();
        
        if ($earnings) {
            $totalCommission = '₹' . number_format($earnings['total_commission'] ?? 0, 2);
            $walletBalance = '₹' . number_format($earnings['wallet_balance'] ?? 0, 2);
            $todayEarning = '₹' . number_format($earnings['today_earning'] ?? 0, 2);
            $weekEarning = '₹' . number_format($earnings['week_earning'] ?? 0, 2);
            $monthEarning = '₹' . number_format($earnings['month_earning'] ?? 0, 2);
            $pendingCommission = '₹' . number_format($earnings['pending_commission'] ?? 0, 2);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
<title>K-Seva | My Wallet & Commission</title>
<link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #f5f7fa;
        color: #1a1a2e;
        overflow-x: hidden;
        padding-bottom: 30px;
    }

    .mobile-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 16px 16px 30px;
        position: relative;
        z-index: 2;
    }

    /* Header */
    .mobile-header {
        background: #ffffff;
        position: sticky;
        top: 0;
        z-index: 100;
        padding: 12px 16px;
        border-bottom: 1px solid #e8ecf1;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
    }

    .header-content {
        max-width: 500px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .back-btn {
        background: #f0f2f5;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        color: #1a1a2e;
    }

    .back-btn:active {
        background: #e8ecf1;
        transform: scale(0.95);
    }

    .back-btn i {
        font-size: 1.2rem;
    }

    .page-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .profile-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #7CC913;
        padding: 4px 10px 4px 4px;
        border-radius: 50px;
        border: 1px solid #e8ecf1;
        cursor: pointer;
        text-decoration: none;
    }

    .avatar-small {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, #00b4d8, #023e8a);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.8rem;
        color: white;
    }

    .profile-btn span {
        font-size: 0.75rem;
        font-weight: 500;
        color: #1a1a2e;
        max-width: 80px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Commission Cards */
    .commission-card {
        background: linear-gradient(135deg, #1a1a2e, #16213e);
        border-radius: 24px;
        padding: 24px 20px;
        color: white;
        margin-bottom: 16px;
        position: relative;
        overflow: hidden;
    }

    .commission-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
    }

    .commission-card.blue {
        background: linear-gradient(135deg, #2c3e50, #3498db);
    }

    .commission-card.green {
        background: linear-gradient(135deg, #11998E, #38EF7D);
    }

    .commission-card.purple {
        background: linear-gradient(135deg, #8E2DE2, #4A00E0);
    }

    .card-label {
        font-size: 0.75rem;
        font-weight: 500;
        opacity: 0.8;
        letter-spacing: 0.5px;
    }

    .commission-amount {
        font-size: 2.2rem;
        font-weight: 800;
        margin: 12px 0 8px;
        letter-spacing: -0.5px;
    }

    .commission-desc {
        font-size: 0.7rem;
        opacity: 0.7;
    }

    .card-icon {
        position: absolute;
        bottom: 15px;
        right: 20px;
        font-size: 3rem;
        opacity: 0.15;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 20px;
    }

    .stat-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 16px;
        border: 1px solid #e8ecf1;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        position: relative;
        overflow: hidden;
    }

    .stat-label {
        font-size: 0.65rem;
        font-weight: 500;
        color: #a0aec0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-amount {
        font-size: 1.3rem;
        font-weight: 800;
        color: #1a1a2e;
        margin-top: 8px;
    }

    .stat-trend {
        font-size: 0.6rem;
        margin-top: 6px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .trend-up {
        color: #11998E;
    }

    .trend-down {
        color: #ff6b6b;
    }

    /* Transaction History */
    .section-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 24px 0 12px;
    }

    .section-title h3 {
        font-size: 1rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .section-title a {
        font-size: 0.7rem;
        color: #00b4d8;
        text-decoration: none;
        font-weight: 500;
    }

    .activity-list {
        background: #ffffff;
        border-radius: 20px;
        padding: 8px 0;
        margin-bottom: 20px;
        border: 1px solid #e8ecf1;
    }

    .activity-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 16px;
        border-bottom: 1px solid #f0f2f5;
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .activity-icon {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        background: #f0f8ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    .activity-details h4 {
        font-size: 0.85rem;
        color: #1a1a2e;
        font-weight: 600;
        margin-bottom: 3px;
    }

    .activity-details p {
        font-size: 0.6rem;
        color: #a0aec0;
    }

    .activity-right {
        text-align: right;
    }

    .amount {
        font-weight: 700;
        color: #00b4d8;
        font-size: 0.9rem;
    }

    .amount.credited {
        color: #11998E;
    }

    .amount.debited {
        color: #ff6b6b;
    }

    .time {
        font-size: 0.55rem;
        color: #a0aec0;
        margin-top: 3px;
    }

    .status {
        font-size: 0.55rem;
        padding: 2px 8px;
        border-radius: 20px;
        display: inline-block;
        margin-top: 4px;
    }

    .status.success {
        background: #e6f7ec;
        color: #11998E;
    }

    .status.pending {
        background: #fff3e0;
        color: #f2994a;
    }

    /* Withdraw Button */
    .withdraw-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #00b4d8, #023e8a);
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
        margin-top: 8px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .withdraw-btn:active {
        transform: scale(0.97);
        opacity: 0.9;
    }

    /* Bottom Navigation */
    .bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255,255,255,0.98);
        border-top: 1px solid #e8ecf1;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 8px 16px 20px;
        z-index: 100;
        max-width: 500px;
        margin: 0 auto;
        backdrop-filter: blur(10px);
    }

    .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 6px 12px;
        border-radius: 30px;
        font-family: 'Inter', sans-serif;
        flex: 1;
        max-width: 80px;
        text-decoration: none;
    }

    .nav-item i {
        font-size: 1.3rem;
        color: #a0aec0;
    }

    .nav-item span {
        font-size: 0.65rem;
        font-weight: 600;
        color: #a0aec0;
    }

    .nav-item.active i,
    .nav-item.active span {
        color: #00b4d8;
    }

    /* Toast Message */
    .toast-message {
        position: fixed;
        bottom: 80px;
        left: 16px;
        right: 16px;
        background: #1a1a2e;
        padding: 12px;
        border-radius: 12px;
        text-align: center;
        font-weight: 500;
        color: white;
        z-index: 2000;
        max-width: 500px;
        margin: 0 auto;
        animation: fadeUp 0.3s ease;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
        <div class="page-title">My Wallet</div>
        <a href="edit-retailer-profile.php" class="profile-btn">
            <div class="avatar-small"><?= htmlspecialchars($initials) ?></div>
            <span><?= htmlspecialchars($firstName) ?></span>
        </a>
    </div>
</div>

<div class="mobile-container">

    <!-- Main Balance Card -->
    <div class="commission-card">
        <div class="card-label">Wallet Balance</div>
        <div class="commission-amount"><?= $walletBalance ?></div>
        <div class="commission-desc">Available for withdrawal • Instant Transfer</div>
        <div class="card-icon"><i class="fas fa-wallet"></i></div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-label">Total Commission</div>
            <div class="stat-amount"><?= $totalCommission ?></div>
            <div class="stat-trend"><span class="trend-up"><i class="fas fa-arrow-up"></i> +12%</span> this month</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Pending Commission</div>
            <div class="stat-amount"><?= $pendingCommission ?></div>
            <div class="stat-trend"><span class="trend-down"><i class="fas fa-clock"></i> Awaiting settlement</span></div>
        </div>
    </div>

    <!-- Earnings Breakdown -->
    <div class="commission-card green">
        <div class="card-label">Today's Earnings</div>
        <div class="commission-amount"><?= $todayEarning ?></div>
        <div class="commission-desc">from recharge, bill payments & services</div>
        <div class="card-icon"><i class="fas fa-sun"></i></div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-label">This Week</div>
            <div class="stat-amount"><?= $weekEarning ?></div>
            <div class="stat-trend">Last week: ₹450.00</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">This Month</div>
            <div class="stat-amount"><?= $monthEarning ?></div>
            <div class="stat-trend">Last month: ₹2,150.00</div>
        </div>
    </div>

    <!-- Withdraw Button -->
    <button class="withdraw-btn" onclick="initiateWithdrawal()">
        <i class="fas fa-rupee-sign"></i> Withdraw Funds
        <i class="fas fa-arrow-right"></i>
    </button>

    <!-- Transaction History -->
    <div class="section-title">
        <h3><i class="fas fa-history" style="margin-right: 8px; color: #00b4d8;"></i> Recent Transactions</h3>
        <a href="#">View All →</a>
    </div>

    <div class="activity-list">
        <div class="activity-item">
            <div class="activity-left">
                <div class="activity-icon">💸</div>
                <div class="activity-details">
                    <h4>Commission Credited</h4>
                    <p>Mobile Recharge - Airtel ₹399</p>
                </div>
            </div>
            <div class="activity-right">
                <div class="amount credited">+₹12.50</div>
                <div class="time">2 hours ago</div>
                <span class="status success">Success</span>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-left">
                <div class="activity-icon">⚡</div>
                <div class="activity-details">
                    <h4>Commission Credited</h4>
                    <p>Electricity Bill - ₹1,250</p>
                </div>
            </div>
            <div class="activity-right">
                <div class="amount credited">+₹62.50</div>
                <div class="time">Yesterday</div>
                <span class="status success">Success</span>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-left">
                <div class="activity-icon">✈️</div>
                <div class="activity-details">
                    <h4>Commission Credited</h4>
                    <p>Flight Booking - DEL → BOM</p>
                </div>
            </div>
            <div class="activity-right">
                <div class="amount credited">+₹174.95</div>
                <div class="time">Yesterday</div>
                <span class="status success">Success</span>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-left">
                <div class="activity-icon">🏧</div>
                <div class="activity-details">
                    <h4>AEPS Transaction</h4>
                    <p>Cash Withdrawal - ₹5,000</p>
                </div>
            </div>
            <div class="activity-right">
                <div class="amount credited">+₹25.00</div>
                <div class="time">2 days ago</div>
                <span class="status success">Success</span>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-left">
                <div class="activity-icon">💳</div>
                <div class="activity-details">
                    <h4>Withdrawal Request</h4>
                    <p>Bank Transfer - HDFC Bank</p>
                </div>
            </div>
            <div class="activity-right">
                <div class="amount debited">-₹2,000</div>
                <div class="time">5 days ago</div>
                <span class="status pending">Pending</span>
            </div>
        </div>
    </div>

    <!-- Withdrawal Info -->
    <div style="background: #f8f9fa; border-radius: 16px; padding: 16px; margin-top: 8px;">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
            <i class="fas fa-info-circle" style="color: #00b4d8; font-size: 1rem;"></i>
            <span style="font-size: 0.7rem; font-weight: 600; color: #1a1a2e;">Withdrawal Information</span>
        </div>
        <div style="font-size: 0.65rem; color: #6c757d; line-height: 1.5;">
            • Minimum withdrawal amount: ₹500<br>
            • Withdrawal processing time: 24-48 hours<br>
            • Funds will be credited to your registered bank account<br>
            • No withdrawal fees for first withdrawal each month
        </div>
    </div>

</div>

<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="retailer-dashboard.php" class="nav-item">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <a href="retailer-search.php" class="nav-item">
        <i class="fas fa-search"></i>
        <span>Search</span>
    </a>
    <a href="retailer-history.php" class="nav-item">
        <i class="fas fa-history"></i>
        <span>History</span>
    </a>
</div>

<script>
function showToast(message) {
    let toast = document.querySelector('.toast-message');
    if (toast) toast.remove();
    toast = document.createElement('div');
    toast.className = 'toast-message';
    toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
    document.body.appendChild(toast);
    setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 300);
    }, 2000);
}

function initiateWithdrawal() {
    let balance = "<?= $walletBalance ?>";
    if (balance === "₹0.00" || parseFloat(balance.replace('₹', '')) < 500) {
        showToast("❌ Minimum withdrawal amount is ₹500");
    } else {
        showToast("💰 Withdrawal request initiated! Amount: " + balance);
        // Redirect to withdrawal page if needed
        // window.location.href = "retailer-withdrawal.php";
    }
}

// Active nav highlight
document.querySelectorAll('.nav-item').forEach(nav => {
    if (nav.getAttribute('href') === window.location.pathname.split('/').pop()) {
        nav.classList.add('active');
    }
});
</script>

</body>
</html>