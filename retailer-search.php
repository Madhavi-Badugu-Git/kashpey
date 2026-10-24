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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
<title>K-Seva | Search Services</title>
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

    /* Search Bar */
    .search-container {
        background: #ffffff;
        border-radius: 28px;
        padding: 8px 16px;
        margin-bottom: 24px;
        border: 1px solid #e8ecf1;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .search-container i {
        color: #a0aec0;
        font-size: 1.1rem;
    }

    .search-container input {
        flex: 1;
        border: none;
        outline: none;
        padding: 14px 0;
        font-size: 0.95rem;
        font-family: 'Inter', sans-serif;
        background: transparent;
    }

    .search-container input::placeholder {
        color: #cbd5e1;
    }

    .clear-search {
        background: none;
        border: none;
        color: #a0aec0;
        cursor: pointer;
        font-size: 0.9rem;
        display: none;
    }

    /* Category Sections */
    .category-section {
        margin-bottom: 28px;
    }

    .category-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
    }

    .category-title i {
        font-size: 1.2rem;
        color: #00b4d8;
        background: rgba(0,180,216,0.1);
        padding: 8px;
        border-radius: 12px;
    }

    .category-title h3 {
        font-size: 1rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
    }

    .service-item {
        background: #ffffff;
        border-radius: 16px;
        padding: 14px 8px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
        border: 1px solid #e8ecf1;
    }

    .service-item:active {
        transform: scale(0.95);
        background: #f8f9fa;
    }

    .service-icon {
        font-size: 1.6rem;
        margin-bottom: 8px;
    }

    .service-name {
        font-size: 0.7rem;
        font-weight: 600;
        color: #4a5568;
    }

    .service-offer {
        font-size: 0.55rem;
        color: #00b4d8;
        margin-top: 4px;
        font-weight: 500;
    }

    /* Search Results */
    .search-results {
        display: none;
    }

    .search-results.active {
        display: block;
    }

    .result-item {
        background: #ffffff;
        border-radius: 16px;
        padding: 16px;
        margin-bottom: 12px;
        border: 1px solid #e8ecf1;
        display: flex;
        align-items: center;
        gap: 14px;
        cursor: pointer;
        transition: 0.2s;
    }

    .result-item:active {
        transform: scale(0.98);
        background: #f8f9fa;
    }

    .result-icon {
        width: 50px;
        height: 50px;
        background: #f0f8ff;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
    }

    .result-info {
        flex: 1;
    }

    .result-name {
        font-weight: 700;
        font-size: 0.9rem;
        color: #1a1a2e;
        margin-bottom: 4px;
    }

    .result-desc {
        font-size: 0.7rem;
        color: #a0aec0;
    }

    .result-offer {
        font-size: 0.7rem;
        color: #00b4d8;
        font-weight: 600;
    }

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

    /* Categories (hidden when searching) */
    .all-categories {
        display: block;
    }

    .all-categories.hide {
        display: none;
    }

    /* Modal */
    .service-modal {
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

    .service-modal.show {
        display: flex;
    }

    .service-modal-content {
        background: white;
        width: 280px;
        padding: 24px;
        border-radius: 28px;
        text-align: center;
        margin: auto;
    }

    .service-modal-icon {
        font-size: 3rem;
        margin-bottom: 12px;
    }

    .service-modal-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .service-modal-desc {
        font-size: 0.75rem;
        color: #6c757d;
        margin-bottom: 20px;
    }

    .service-modal-close {
        background: #00b4d8;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
        width: 100%;
    }

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
</style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="page-title">Search Services</span>
    </div>
</div>

<div class="container">
    <!-- Search Bar -->
    <div class="search-container">
        <i class="fas fa-search"></i>
        <input type="text" id="searchInput" placeholder="Search for recharge, bills, services..." autocomplete="off">
        <button class="clear-search" id="clearSearch" onclick="clearSearch()">
            <i class="fas fa-times-circle"></i>
        </button>
    </div>

    <!-- All Categories Section -->
    <div id="allCategories" class="all-categories">
        <!-- Recharge & Bills -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-mobile-alt"></i>
                <h3>Recharge & Bills</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Mobile Recharge', 'Prepaid / Postpaid / International', '📱', '5% cashback')">
                    <div class="service-icon">📱</div>
                    <div class="service-name">Mobile</div>
                    <div class="service-offer">5% cashback</div>
                </div>
                <div class="service-item" onclick="openServiceModal('DTH Recharge', 'Tata Sky / Airtel / Dish TV', '📺', 'Up to 10% off')">
                    <div class="service-icon">📺</div>
                    <div class="service-name">DTH</div>
                    <div class="service-offer">10% off</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Electricity Bill', 'Pay Electricity Bill', '⚡', '10% off')">
                    <div class="service-icon">⚡</div>
                    <div class="service-name">Electricity</div>
                    <div class="service-offer">10% off</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Water Bill', 'Pay Water Bill', '💧', '5% cashback')">
                    <div class="service-icon">💧</div>
                    <div class="service-name">Water</div>
                    <div class="service-offer">5% off</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Gas Bill', 'PNG / Cylinder Booking', '🔥', 'Instant')">
                    <div class="service-icon">🔥</div>
                    <div class="service-name">Gas</div>
                    <div class="service-offer">Instant</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Broadband', 'WiFi / Fiber Recharge', '📡', 'Fast']')">
                    <div class="service-icon">📡</div>
                    <div class="service-name">Broadband</div>
                    <div class="service-offer">Fast</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Landline', 'BSNL / Airtel Landline', '☎️', 'Pay bills')">
                    <div class="service-icon">☎️</div>
                    <div class="service-name">Landline</div>
                    <div class="service-offer">Pay bills</div>
                </div>
                <div class="service-item" onclick="openServiceModal('FASTag', 'Recharge FASTag', '🛣️', 'Instant')">
                    <div class="service-icon">🛣️</div>
                    <div class="service-name">FASTag</div>
                    <div class="service-offer">Instant</div>
                </div>
            </div>
        </div>

        <!-- Money & Banking -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-rupee-sign"></i>
                <h3>Money & Banking</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Money Transfer', 'IMPS / NEFT / RTGS', '💸', 'Instant')">
                    <div class="service-icon">💸</div>
                    <div class="service-name">Money Transfer</div>
                    <div class="service-offer">Instant</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Micro ATM', 'Mini Banking Services', '💳', 'Free')">
                    <div class="service-icon">💳</div>
                    <div class="service-name">Micro ATM</div>
                    <div class="service-offer">Free</div>
                </div>
                <div class="service-item" onclick="openServiceModal('AEPS', 'Aadhaar Enabled Payment', '🏧', 'Free')">
                    <div class="service-icon">🏧</div>
                    <div class="service-name">AEPS</div>
                    <div class="service-offer">Free</div>
                </div>
                <div class="service-item" onclick="openServiceModal('BBPS', 'Bharat Bill Pay', '📄', 'Secure')">
                    <div class="service-icon">📄</div>
                    <div class="service-name">BBPS</div>
                    <div class="service-offer">Secure</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Credit Card Pay', 'Pay Credit Card Bills', '💳', 'No fee')">
                    <div class="service-icon">💳</div>
                    <div class="service-name">Credit Card</div>
                    <div class="service-offer">No fee</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Loan Repayment', 'EMI / Loan Payment', '🏦', 'No fees')">
                    <div class="service-icon">🏦</div>
                    <div class="service-name">Loan Repayment</div>
                    <div class="service-offer">No fees</div>
                </div>
            </div>
        </div>

        <!-- Financial Services -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-chart-line"></i>
                <h3>Financial Services</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Personal Loan', 'Instant personal loan up to ₹10L', '👤', 'Low interest')">
                    <div class="service-icon">👤</div>
                    <div class="service-name">Personal Loan</div>
                    <div class="service-offer">Low interest</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Business Loan', 'Loan for business', '🏢', 'Quick approval')">
                    <div class="service-icon">🏢</div>
                    <div class="service-name">Business Loan</div>
                    <div class="service-offer">Quick approval</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Gold Loan', 'Loan against gold', '🥇', 'Lowest rates')">
                    <div class="service-icon">🥇</div>
                    <div class="service-name">Gold Loan</div>
                    <div class="service-offer">Lowest rates</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Credit Score', 'Check your credit score', '📊', 'FREE')">
                    <div class="service-icon">📊</div>
                    <div class="service-name">Credit Score</div>
                    <div class="service-offer">FREE</div>
                </div>
                <div class="service-item" onclick="openServiceModal('PAN Card', 'Apply / Update PAN', '🆔', 'Instant')">
                    <div class="service-icon">🆔</div>
                    <div class="service-name">PAN Card</div>
                    <div class="service-offer">Instant</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Income Tax', 'Tax Filing', '📊', 'Expert help')">
                    <div class="service-icon">📊</div>
                    <div class="service-name">Income Tax</div>
                    <div class="service-offer">Expert help</div>
                </div>
                <div class="service-item" onclick="openServiceModal('GST Suvidha', 'GST Returns Filing', '📑', 'Easy filing')">
                    <div class="service-icon">📑</div>
                    <div class="service-name">GST Suvidha</div>
                    <div class="service-offer">Easy filing</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Digital Signature', 'DSC Certificate', '✍️', '3 year')">
                    <div class="service-icon">✍️</div>
                    <div class="service-name">Digital Signature</div>
                    <div class="service-offer">3 year</div>
                </div>
            </div>
        </div>

        <!-- Insurance -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-shield-alt"></i>
                <h3>Insurance</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Health Insurance', 'Medical coverage up to ₹1Cr', '🏥', 'Starting ₹500/mo')">
                    <div class="service-icon">🏥</div>
                    <div class="service-name">Health</div>
                    <div class="service-offer">Starting ₹500</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Life Insurance', 'Secure your family', '👨‍👩‍👧‍👦', 'Tax Benefits')">
                    <div class="service-icon">👨‍👩‍👧‍👦</div>
                    <div class="service-name">Life</div>
                    <div class="service-offer">Tax Benefits</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Car Insurance', 'Protect your car', '🚗', 'Save up to 50%')">
                    <div class="service-icon">🚗</div>
                    <div class="service-name">Car</div>
                    <div class="service-offer">Save 50%</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Bike Insurance', 'Two wheeler insurance', '🏍️', 'Instant')">
                    <div class="service-icon">🏍️</div>
                    <div class="service-name">Bike</div>
                    <div class="service-offer">Instant</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Travel Insurance', 'International trip cover', '✈️', 'COVID Cover')">
                    <div class="service-icon">✈️</div>
                    <div class="service-name">Travel</div>
                    <div class="service-offer">COVID Cover</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Term Insurance', 'High coverage low cost', '🛡️', 'Low Premium')">
                    <div class="service-icon">🛡️</div>
                    <div class="service-name">Term</div>
                    <div class="service-offer">Low Premium</div>
                </div>
            </div>
        </div>

        <!-- Travel Services -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-plane-departure"></i>
                <h3>Travel Services</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Flight Booking', 'Domestic & International', '✈️', 'Upto ₹500 off')">
                    <div class="service-icon">✈️</div>
                    <div class="service-name">Flights</div>
                    <div class="service-offer">₹500 off</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Train Booking', 'IRCTC Tickets', '🚂', 'Cashback ₹100')">
                    <div class="service-icon">🚂</div>
                    <div class="service-name">Trains</div>
                    <div class="service-offer">Cashback ₹100</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Bus Booking', 'Book bus tickets', '🚌', 'Save 15%')">
                    <div class="service-icon">🚌</div>
                    <div class="service-name">Buses</div>
                    <div class="service-offer">Save 15%</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Hotel Booking', 'Hotel reservations', '🏨', 'Best deals')">
                    <div class="service-icon">🏨</div>
                    <div class="service-name">Hotels</div>
                    <div class="service-offer">Best deals</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Metro Card', 'Metro Card Recharge', '🚇', 'Instant')">
                    <div class="service-icon">🚇</div>
                    <div class="service-name">Metro Card</div>
                    <div class="service-offer">Instant</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Cabs', 'Book Ola / Uber', '🚕', 'Cashback')">
                    <div class="service-icon">🚕</div>
                    <div class="service-name">Cabs</div>
                    <div class="service-offer">Cashback</div>
                </div>
            </div>
        </div>

        <!-- Gift Cards -->
        <div class="category-section">
            <div class="category-title">
                <i class="fas fa-gift"></i>
                <h3>Gift Cards</h3>
            </div>
            <div class="services-grid">
                <div class="service-item" onclick="openServiceModal('Amazon Gift Card', 'Shopping voucher', '🛍️', '0% Commission')">
                    <div class="service-icon">🛍️</div>
                    <div class="service-name">Amazon</div>
                    <div class="service-offer">0% Commission</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Flipkart Gift Card', 'Shopping voucher', '📦', '0% Commission')">
                    <div class="service-icon">📦</div>
                    <div class="service-name">Flipkart</div>
                    <div class="service-offer">0% Commission</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Myntra Gift Card', 'Fashion voucher', '👕', '0.4% Commission')">
                    <div class="service-icon">👕</div>
                    <div class="service-name">Myntra</div>
                    <div class="service-offer">0.4%</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Swiggy Gift Card', 'Food voucher', '🍕', '0% Commission')">
                    <div class="service-icon">🍕</div>
                    <div class="service-name">Swiggy</div>
                    <div class="service-offer">0%</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Zomato Gift Card', 'Food voucher', '🍔', '0% Commission')">
                    <div class="service-icon">🍔</div>
                    <div class="service-name">Zomato</div>
                    <div class="service-offer">0%</div>
                </div>
                <div class="service-item" onclick="openServiceModal('Google Play', 'Play Store credit', '🎮', '0%')">
                    <div class="service-icon">🎮</div>
                    <div class="service-name">Google Play</div>
                    <div class="service-offer">0%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Results Section -->
    <div id="searchResults" class="search-results">
        <div id="resultsList"></div>
    </div>
</div>

<!-- Service Modal -->
<div class="service-modal" id="serviceModal" onclick="closeServiceModal(event)">
    <div class="service-modal-content" onclick="event.stopPropagation()">
        <div class="service-modal-icon" id="modalIcon">🏧</div>
        <div class="service-modal-title" id="modalTitle">Service</div>
        <div class="service-modal-desc" id="modalDesc">Description</div>
        <div class="service-modal-desc" id="modalOffer" style="color:#00b4d8; font-weight:600;"></div>
        <button class="service-modal-close" onclick="closeServiceModal()">Proceed</button>
    </div>
</div>
<?php include('includes/bottom-nav.php'); ?>
<script>
    // All services data for search
    const allServices = [
        // Recharge & Bills
        { name: "Mobile Recharge", category: "Recharge & Bills", desc: "Prepaid / Postpaid / International", icon: "📱", offer: "5% cashback", keywords: ["mobile", "recharge", "prepaid", "postpaid", "jio", "airtel", "vi", "bsnl"] },
        { name: "DTH Recharge", category: "Recharge & Bills", desc: "Tata Sky / Airtel / Dish TV", icon: "📺", offer: "Up to 10% off", keywords: ["dth", "tatasky", "airtel dth", "dish tv", "sundirect"] },
        { name: "Electricity Bill", category: "Recharge & Bills", desc: "Pay Electricity Bill", icon: "⚡", offer: "10% off", keywords: ["electricity", "bill", "power", "bijli", "tneb", "bses", "tata power"] },
        { name: "Water Bill", category: "Recharge & Bills", desc: "Pay Water Bill", icon: "💧", offer: "5% cashback", keywords: ["water", "bill", "jal", "municipal"] },
        { name: "Gas Bill", category: "Recharge & Bills", desc: "PNG / Cylinder Booking", icon: "🔥", offer: "Instant", keywords: ["gas", "cylinder", "png", "indane", "hp gas", "bharat gas"] },
        { name: "Broadband", category: "Recharge & Bills", desc: "WiFi / Fiber Recharge", icon: "📡", offer: "Fast", keywords: ["broadband", "wifi", "fiber", "internet", "jio fiber", "airtel fiber"] },
        { name: "Landline", category: "Recharge & Bills", desc: "BSNL / Airtel Landline", icon: "☎️", offer: "Pay bills", keywords: ["landline", "telephone", "bsnl", "airtel"] },
        { name: "FASTag", category: "Recharge & Bills", desc: "Recharge FASTag", icon: "🛣️", offer: "Instant", keywords: ["fastag", "toll", "highway"] },
        
        // Money & Banking
        { name: "Money Transfer", category: "Money & Banking", desc: "IMPS / NEFT / RTGS", icon: "💸", offer: "Instant", keywords: ["money", "transfer", "imps", "neft", "rtgs", "send money"] },
        { name: "Micro ATM", category: "Money & Banking", desc: "Mini Banking Services", icon: "💳", offer: "Free", keywords: ["micro atm", "mini atm", "banking", "withdrawal"] },
        { name: "AEPS", category: "Money & Banking", desc: "Aadhaar Enabled Payment", icon: "🏧", offer: "Free", keywords: ["aeps", "aadhaar", "payment", "withdrawal"] },
        { name: "BBPS", category: "Money & Banking", desc: "Bharat Bill Pay", icon: "📄", offer: "Secure", keywords: ["bbps", "bharat bill", "bill pay"] },
        { name: "Credit Card Pay", category: "Money & Banking", desc: "Pay Credit Card Bills", icon: "💳", offer: "No fee", keywords: ["credit card", "card bill", "credit card payment"] },
        { name: "Loan Repayment", category: "Money & Banking", desc: "EMI / Loan Payment", icon: "🏦", offer: "No fees", keywords: ["loan", "repayment", "emi", "loan payment"] },
        
        // Financial Services
        { name: "Personal Loan", category: "Financial Services", desc: "Instant personal loan up to ₹10L", icon: "👤", offer: "Low interest", keywords: ["personal loan", "loan", "instant loan"] },
        { name: "Business Loan", category: "Financial Services", desc: "Loan for business", icon: "🏢", offer: "Quick approval", keywords: ["business loan", "msme loan"] },
        { name: "Gold Loan", category: "Financial Services", desc: "Loan against gold", icon: "🥇", offer: "Lowest rates", keywords: ["gold loan", "loan against gold"] },
        { name: "Credit Score", category: "Financial Services", desc: "Check your credit score", icon: "📊", offer: "FREE", keywords: ["credit score", "cibil", "credit report"] },
        { name: "PAN Card", category: "Financial Services", desc: "Apply / Update PAN", icon: "🆔", offer: "Instant", keywords: ["pan card", "pan", "new pan"] },
        { name: "Income Tax", category: "Financial Services", desc: "Tax Filing", icon: "📊", offer: "Expert help", keywords: ["income tax", "tax filing", "itr"] },
        { name: "GST Suvidha", category: "Financial Services", desc: "GST Returns Filing", icon: "📑", offer: "Easy filing", keywords: ["gst", "gst return", "gst filing"] },
        { name: "Digital Signature", category: "Financial Services", desc: "DSC Certificate", icon: "✍️", offer: "3 year", keywords: ["digital signature", "dsc", "signature"] },
        
        // Insurance
        { name: "Health Insurance", category: "Insurance", desc: "Medical coverage up to ₹1Cr", icon: "🏥", offer: "Starting ₹500/mo", keywords: ["health", "insurance", "medical", "mediclaim"] },
        { name: "Life Insurance", category: "Insurance", desc: "Secure your family", icon: "👨‍👩‍👧‍👦", offer: "Tax Benefits", keywords: ["life", "insurance", "term"] },
        { name: "Car Insurance", category: "Insurance", desc: "Protect your car", icon: "🚗", offer: "Save up to 50%", keywords: ["car", "insurance", "auto", "vehicle"] },
        { name: "Bike Insurance", category: "Insurance", desc: "Two wheeler insurance", icon: "🏍️", offer: "Instant", keywords: ["bike", "insurance", "two wheeler"] },
        { name: "Travel Insurance", category: "Insurance", desc: "International trip cover", icon: "✈️", offer: "COVID Cover", keywords: ["travel", "insurance", "trip"] },
        { name: "Term Insurance", category: "Insurance", desc: "High coverage low cost", icon: "🛡️", offer: "Low Premium", keywords: ["term", "insurance", "life"] },
        
        // Travel
        { name: "Flight Booking", category: "Travel", desc: "Domestic & International", icon: "✈️", offer: "Upto ₹500 off", keywords: ["flight", "air ticket", "booking"] },
        { name: "Train Booking", category: "Travel", desc: "IRCTC Tickets", icon: "🚂", offer: "Cashback ₹100", keywords: ["train", "irctc", "ticket"] },
        { name: "Bus Booking", category: "Travel", desc: "Book bus tickets", icon: "🚌", offer: "Save 15%", keywords: ["bus", "ticket", "travel"] },
        { name: "Hotel Booking", category: "Travel", desc: "Hotel reservations", icon: "🏨", offer: "Best deals", keywords: ["hotel", "stay", "booking"] },
        { name: "Metro Card", category: "Travel", desc: "Metro Card Recharge", icon: "🚇", offer: "Instant", keywords: ["metro", "card", "recharge", "delhi metro", "mumbai metro"] },
        { name: "Cabs", category: "Travel", desc: "Book Ola / Uber", icon: "🚕", offer: "Cashback", keywords: ["cab", "ola", "uber", "taxi"] },
        
        // Gift Cards
        { name: "Amazon Gift Card", category: "Gift Cards", desc: "Shopping voucher", icon: "🛍️", offer: "0% Commission", keywords: ["amazon", "gift", "card", "voucher"] },
        { name: "Flipkart Gift Card", category: "Gift Cards", desc: "Shopping voucher", icon: "📦", offer: "0% Commission", keywords: ["flipkart", "gift", "card"] },
        { name: "Myntra Gift Card", category: "Gift Cards", desc: "Fashion voucher", icon: "👕", offer: "0.4% Commission", keywords: ["myntra", "gift", "card"] },
        { name: "Swiggy Gift Card", category: "Gift Cards", desc: "Food voucher", icon: "🍕", offer: "0% Commission", keywords: ["swiggy", "gift", "card", "food"] },
        { name: "Zomato Gift Card", category: "Gift Cards", desc: "Food voucher", icon: "🍔", offer: "0% Commission", keywords: ["zomato", "gift", "card"] },
        { name: "Google Play", category: "Gift Cards", desc: "Play Store credit", icon: "🎮", offer: "0%", keywords: ["google play", "play store", "gift"] }
    ];

    const searchInput = document.getElementById('searchInput');
    const allCategoriesDiv = document.getElementById('allCategories');
    const searchResultsDiv = document.getElementById('searchResults');
    const resultsList = document.getElementById('resultsList');
    const clearBtn = document.getElementById('clearSearch');

    function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        
        if (query === '') {
            allCategoriesDiv.classList.remove('hide');
            searchResultsDiv.classList.remove('active');
            clearBtn.style.display = 'none';
            return;
        }
        
        clearBtn.style.display = 'flex';
        allCategoriesDiv.classList.add('hide');
        searchResultsDiv.classList.add('active');
        
        const filtered = allServices.filter(service => {
            return service.name.toLowerCase().includes(query) ||
                   service.category.toLowerCase().includes(query) ||
                   service.desc.toLowerCase().includes(query) ||
                   service.keywords.some(keyword => keyword.includes(query));
        });
        
        if (filtered.length === 0) {
            resultsList.innerHTML = `
                <div class="no-results">
                    <i class="fas fa-search"></i>
                    <p>No services found for "${query}"</p>
                    <p style="font-size: 0.7rem; margin-top: 8px;">Try searching for "recharge", "bill", "loan", or "insurance"</p>
                </div>
            `;
        } else {
            resultsList.innerHTML = filtered.map(service => `
                <div class="result-item" onclick="openServiceModal('${service.name}', '${service.desc}', '${service.icon}', '${service.offer}')">
                    <div class="result-icon">${service.icon}</div>
                    <div class="result-info">
                        <div class="result-name">${service.name}</div>
                        <div class="result-desc">${service.desc}</div>
                    </div>
                    <div class="result-offer">${service.offer}</div>
                </div>
            `).join('');
        }
    }

    function clearSearch() {
        searchInput.value = '';
        performSearch();
        searchInput.focus();
    }

    searchInput.addEventListener('input', performSearch);
    searchInput.addEventListener('focus', performSearch);

    // Modal functions
    function openServiceModal(title, desc, icon, offer) {
        document.getElementById('modalTitle').innerHTML = title;
        document.getElementById('modalDesc').innerHTML = desc;
        document.getElementById('modalIcon').innerHTML = icon;
        document.getElementById('modalOffer').innerHTML = offer;
        document.getElementById('serviceModal').classList.add('show');
    }

    function closeServiceModal(event) {
        if (event && event.target !== event.currentTarget && !event.target.classList.contains('service-modal-close')) return;
        document.getElementById('serviceModal').classList.remove('show');
        showToast('Service selected');
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

    document.getElementById('serviceModal')?.addEventListener('click', function(e) {
        if (e.target === this) closeServiceModal();
    });
</script>

</body>
</html>