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
$mobile    = $userData['mobile']    ?? 'N/A';
$email     = $userData['email_id']  ?? $userEmail;
$status    = $userData['status']    ?? 'Active';
$avatar    = $userData['avatar'] ?? null;

$firstLetter = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : '';
if (!empty($firstLetter)) {
    $initials = $firstLetter;
} elseif (!empty($userName)) {
    $initials = strtoupper(substr($userName, 0, 1));
} else {
    $initials = "T";
}

// Sample transaction data - In real application, fetch from database
$transactions = [
    ["icon" => "📱", "title" => "Mobile Recharge", "desc" => "Jio Prepaid ₹399", "amount" => "₹399", "time" => "1 hour ago", "status" => "success"],
    ["icon" => "⚡", "title" => "Electricity Bill", "desc" => "Bill Payment - BESCOM", "amount" => "₹1,250", "time" => "2 hours ago", "status" => "success"],
    ["icon" => "✈️", "title" => "Flight Booking", "desc" => "DEL → BOM - Indigo", "amount" => "₹3,499", "time" => "Yesterday", "status" => "success"],
    ["icon" => "💸", "title" => "Money Transfer", "desc" => "To SBI Account", "amount" => "₹5,000", "time" => "Yesterday", "status" => "success"],
    ["icon" => "📺", "title" => "DTH Recharge", "desc" => "Tata Sky - 1 Month", "amount" => "₹499", "time" => "2 days ago", "status" => "success"],
    ["icon" => "🚂", "title" => "Train Ticket", "desc" => "IRCTC - PNR: 1234567890", "amount" => "₹850", "time" => "3 days ago", "status" => "pending"],
    ["icon" => "🏦", "title" => "Loan Repayment", "desc" => "Personal Loan EMI", "amount" => "₹2,500", "time" => "5 days ago", "status" => "success"],
    ["icon" => "🛍️", "title" => "Gift Card", "desc" => "Amazon Shopping Voucher", "amount" => "₹500", "time" => "1 week ago", "status" => "success"],
    ["icon" => "🏥", "title" => "Insurance", "desc" => "Health Insurance Premium", "amount" => "₹1,200", "time" => "2 weeks ago", "status" => "success"],
    ["icon" => "🚌", "title" => "Bus Ticket", "desc" => "RedBus - Bangalore to Mysore", "amount" => "₹350", "time" => "2 weeks ago", "status" => "failed"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
<title>K-Seva | Transaction History</title>
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
        align-items: center;
        gap: 16px;
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
        text-decoration: none;
        color: #1a1a2e;
        font-size: 1.1rem;
    }

    .back-btn:active {
        background: #e4e7eb;
        transform: scale(0.95);
    }

    .page-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px 16px;
    }

    /* Filter Tabs */
    .filter-tabs {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
        background: #ffffff;
        padding: 6px;
        border-radius: 50px;
        border: 1px solid #e8ecf1;
    }

    .filter-btn {
        flex: 1;
        padding: 10px 0;
        background: transparent;
        border: none;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #a0aec0;
        cursor: pointer;
        transition: 0.2s;
        font-family: 'Inter', sans-serif;
    }

    .filter-btn.active {
        background: #00b4d8;
        color: white;
        box-shadow: 0 2px 8px rgba(0,180,216,0.3);
    }

    /* Summary Cards */
    .summary-cards {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
    }

    .summary-card {
        flex: 1;
        background: #ffffff;
        border-radius: 20px;
        padding: 14px;
        text-align: center;
        border: 1px solid #e8ecf1;
    }

    .summary-icon {
        font-size: 1.3rem;
        margin-bottom: 6px;
    }

    .summary-label {
        font-size: 0.65rem;
        color: #a0aec0;
        margin-bottom: 4px;
    }

    .summary-value {
        font-size: 1rem;
        font-weight: 800;
        color: #1a1a2e;
    }

    /* Transaction List */
    .transaction-list {
        background: #ffffff;
        border-radius: 24px;
        padding: 8px 0;
        border: 1px solid #e8ecf1;
        overflow: hidden;
    }

    .transaction-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        border-bottom: 1px solid #f0f2f5;
        transition: 0.2s;
        cursor: pointer;
    }

    .transaction-item:active {
        background: #f8f9fa;
    }

    .transaction-item:last-child {
        border-bottom: none;
    }

    .transaction-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .transaction-icon {
        width: 50px;
        height: 50px;
        border-radius: 16px;
        background: #f0f8ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .transaction-info {
        flex: 1;
    }

    .transaction-title {
        font-weight: 700;
        font-size: 0.9rem;
        color: #1a1a2e;
        margin-bottom: 4px;
    }

    .transaction-desc {
        font-size: 0.7rem;
        color: #a0aec0;
        margin-bottom: 4px;
    }

    .transaction-time {
        font-size: 0.6rem;
        color: #cbd5e1;
    }

    .transaction-right {
        text-align: right;
    }

    .transaction-amount {
        font-weight: 800;
        font-size: 1rem;
        margin-bottom: 6px;
    }

    .transaction-amount.credit {
        color: #2eb84b;
    }

    .transaction-amount.debit {
        color: #1a1a2e;
    }

    .transaction-status {
        font-size: 0.6rem;
        padding: 3px 8px;
        border-radius: 30px;
        display: inline-block;
    }

    .status-success {
        background: #e6f7e6;
        color: #2e7d32;
    }

    .status-pending {
        background: #fff3e0;
        color: #ed6c02;
    }

    .status-failed {
        background: #ffe6e6;
        color: #d32f2f;
    }

    /* No Results */
    .no-results {
        text-align: center;
        padding: 50px 20px;
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid #e8ecf1;
    }

    .no-results i {
        font-size: 3rem;
        color: #cbd5e1;
        margin-bottom: 12px;
    }

    .no-results p {
        color: #a0aec0;
        font-size: 0.9rem;
    }

    /* Toast */
    .toast-message {
        position: fixed;
        bottom: 30px;
        left: 16px;
        right: 16px;
        background: #1e293b;
        backdrop-filter: blur(10px);
        color: white;
        padding: 14px 20px;
        border-radius: 60px;
        font-weight: 500;
        font-size: 0.85rem;
        z-index: 2000;
        max-width: 500px;
        margin: 0 auto;
        animation: slideUp 0.3s ease forwards;
        text-align: center;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideDown {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(20px); }
    }

    /* Modal */
    .transaction-modal {
        display: none;
        position: fixed;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(4px);
        z-index: 1000;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        align-items: center;
        justify-content: center;
    }

    .transaction-modal.show {
        display: flex;
    }

    .modal-content {
        background: white;
        width: 320px;
        padding: 24px;
        border-radius: 28px;
        text-align: center;
    }

    .modal-icon {
        font-size: 3rem;
        margin-bottom: 12px;
    }

    .modal-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .modal-desc {
        font-size: 0.75rem;
        color: #6c757d;
        margin-bottom: 8px;
    }

    .modal-amount {
        font-size: 1.3rem;
        font-weight: 800;
        color: #00b4d8;
        margin: 12px 0;
    }

    .modal-status {
        font-size: 0.7rem;
        padding: 4px 12px;
        border-radius: 30px;
        display: inline-block;
        margin-bottom: 16px;
    }

    .modal-close {
        background: #00b4d8;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
        width: 100%;
    }
</style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="page-title">Transaction History</span>
    </div>
</div>

<div class="container">
    <!-- Filter Tabs -->
    <div class="filter-tabs">
        <button class="filter-btn active" onclick="filterTransactions('all')">All</button>
        <button class="filter-btn" onclick="filterTransactions('success')">Success</button>
        <button class="filter-btn" onclick="filterTransactions('pending')">Pending</button>
        <button class="filter-btn" onclick="filterTransactions('failed')">Failed</button>
    </div>

    <!-- Summary Cards -->
    <div class="summary-cards">
        <div class="summary-card">
            <div class="summary-icon">💰</div>
            <div class="summary-label">Total Spent</div>
            <div class="summary-value" id="totalSpent">₹0</div>
        </div>
        <div class="summary-card">
            <div class="summary-icon">📊</div>
            <div class="summary-label">Transactions</div>
            <div class="summary-value" id="totalCount">0</div>
        </div>
        <div class="summary-card">
            <div class="summary-icon">⭐</div>
            <div class="summary-label">Success Rate</div>
            <div class="summary-value" id="successRate">0%</div>
        </div>
    </div>

    <!-- Transaction List -->
    <div class="transaction-list" id="transactionList">
        <?php foreach ($transactions as $transaction): ?>
        <div class="transaction-item" data-status="<?= $transaction['status'] ?>" onclick="showTransactionDetails('<?= addslashes($transaction['title']) ?>', '<?= addslashes($transaction['desc']) ?>', '<?= $transaction['amount'] ?>', '<?= $transaction['time'] ?>', '<?= $transaction['status'] ?>', '<?= addslashes($transaction['icon']) ?>')">
            <div class="transaction-left">
                <div class="transaction-icon"><?= $transaction['icon'] ?></div>
                <div class="transaction-info">
                    <div class="transaction-title"><?= htmlspecialchars($transaction['title']) ?></div>
                    <div class="transaction-desc"><?= htmlspecialchars($transaction['desc']) ?></div>
                    <div class="transaction-time"><?= $transaction['time'] ?></div>
                </div>
            </div>
            <div class="transaction-right">
                <div class="transaction-amount debit"><?= $transaction['amount'] ?></div>
                <span class="transaction-status status-<?= $transaction['status'] ?>">
                    <?= ucfirst($transaction['status']) ?>
                </span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Transaction Details Modal -->
<div class="transaction-modal" id="transactionModal" onclick="closeTransactionModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-icon" id="modalIcon">📱</div>
        <div class="modal-title" id="modalTitle">Mobile Recharge</div>
        <div class="modal-desc" id="modalDesc">Jio Prepaid ₹399</div>
        <div class="modal-amount" id="modalAmount">₹399</div>
        <div class="modal-status" id="modalStatus">Success</div>
        <div class="modal-desc" id="modalTime">Transaction Time</div>
        <button class="modal-close" onclick="closeTransactionModal()">Close</button>
    </div>
</div>

<script>
    // Filter transactions
    function filterTransactions(status) {
        const items = document.querySelectorAll('.transaction-item');
        const filterBtns = document.querySelectorAll('.filter-btn');
        let visibleCount = 0;
        let totalAmount = 0;
        
        filterBtns.forEach(btn => {
            btn.classList.remove('active');
            if ((status === 'all' && btn.innerText === 'All') ||
                (status === 'success' && btn.innerText === 'Success') ||
                (status === 'pending' && btn.innerText === 'Pending') ||
                (status === 'failed' && btn.innerText === 'Failed')) {
                btn.classList.add('active');
            }
        });
        
        items.forEach(item => {
            if (status === 'all' || item.dataset.status === status) {
                item.style.display = 'flex';
                visibleCount++;
                const amountText = item.querySelector('.transaction-amount').innerText;
                const amount = parseFloat(amountText.replace('₹', '').replace(',', ''));
                if (!isNaN(amount)) totalAmount += amount;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Update summary
        document.getElementById('totalCount').innerText = visibleCount;
        document.getElementById('totalSpent').innerText = '₹' + totalAmount.toLocaleString('en-IN', {minimumFractionDigits: 2});
        
        // Calculate success rate
        const successCount = document.querySelectorAll('.transaction-item[data-status="success"]').length;
        const totalItems = document.querySelectorAll('.transaction-item').length;
        const successRate = totalItems > 0 ? Math.round((successCount / totalItems) * 100) : 0;
        document.getElementById('successRate').innerText = successRate + '%';
        
        showToast(`Showing ${visibleCount} transactions`);
    }
    
    // Show transaction details modal
    function showTransactionDetails(title, desc, amount, time, status, icon) {
        document.getElementById('modalIcon').innerHTML = icon;
        document.getElementById('modalTitle').innerHTML = title;
        document.getElementById('modalDesc').innerHTML = desc;
        document.getElementById('modalAmount').innerHTML = amount;
        document.getElementById('modalTime').innerHTML = '<i class="far fa-clock"></i> ' + time;
        
        const statusElem = document.getElementById('modalStatus');
        statusElem.innerHTML = status.charAt(0).toUpperCase() + status.slice(1);
        statusElem.className = 'modal-status';
        if (status === 'success') {
            statusElem.style.background = '#e6f7e6';
            statusElem.style.color = '#2e7d32';
        } else if (status === 'pending') {
            statusElem.style.background = '#fff3e0';
            statusElem.style.color = '#ed6c02';
        } else {
            statusElem.style.background = '#ffe6e6';
            statusElem.style.color = '#d32f2f';
        }
        
        document.getElementById('transactionModal').classList.add('show');
    }
    
    function closeTransactionModal(event) {
        if (event && event.target !== event.currentTarget && !event.target.classList.contains('modal-close')) return;
        document.getElementById('transactionModal').classList.remove('show');
    }
    
    function showToast(message) {
        let toast = document.querySelector('.toast-message');
        if (toast) toast.remove();
        toast = document.createElement('div');
        toast.className = 'toast-message';
        toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.animation = 'slideDown 0.3s ease forwards';
            setTimeout(() => toast.remove(), 300);
        }, 2000);
    }
    
    // Initial summary calculation
    document.addEventListener('DOMContentLoaded', function() {
        filterTransactions('all');
    });
    
    document.getElementById('transactionModal')?.addEventListener('click', function(e) {
        if (e.target === this) closeTransactionModal();
    });
</script>

</body>
</html>