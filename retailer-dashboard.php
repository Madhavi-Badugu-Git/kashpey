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

// Popular Services Data
$popularServicesLine1 = [
    ["name" => "Money Transfer", "icon" => "💸", "desc" => "IMPS / NEFT / RTGS", "offer" => "Instant"],
    ["name" => "Micro ATM", "icon" => "💳", "desc" => "Mini Banking Services", "offer" => "Free"],
    ["name" => "Bill Payment", "icon" => "📄", "desc" => "Electricity / Water / Gas", "offer" => "10% off"],
    ["name" => "Loan", "icon" => "🏦", "desc" => "Personal / Business Loans", "offer" => "Low interest"],
    ["name" => "Recharge", "icon" => "📱", "desc" => "Mobile / DTH / Data Card", "offer" => "5% cashback"],
    ["name" => "Flight Booking", "icon" => "✈️", "desc" => "Book flight tickets", "offer" => "Upto ₹500 off"],
    ["name" => "Bus Booking", "icon" => "🚌", "desc" => "Book bus tickets", "offer" => "Save 15%"],
    ["name" => "Hotel Booking", "icon" => "🏨", "desc" => "Hotel reservations", "offer" => "Best deals"]
];

$popularServicesLine2 = [
    ["name" => "FASTag", "icon" => "🛣️", "desc" => "Recharge FASTag", "offer" => "Instant"],
    ["name" => "Digital Signature", "icon" => "✍️", "desc" => "DSC Certificate", "offer" => "3 year"],
    ["name" => "Income Tax", "icon" => "📊", "desc" => "Tax Filing", "offer" => "Expert help"],
    ["name" => "GST Suvidha", "icon" => "📑", "desc" => "GST Returns", "offer" => "Easy filing"],
    ["name" => "AEPS", "icon" => "🏧", "desc" => "Aadhaar Enabled Payment", "offer" => "Free"],
    ["name" => "PAN Card", "icon" => "🆔", "desc" => "Apply / Update PAN", "offer" => "Instant"],
    ["name" => "Credit Score", "icon" => "📈", "desc" => "Check credit score", "offer" => "FREE"],
    ["name" => "Insurance", "icon" => "🛡️", "desc" => "Health / Life / Car", "offer" => "Best rates"]
];

$allPopularServices = array_merge($popularServicesLine1, $popularServicesLine2);

// ==================== BANKING & FINANCE SERVICES WITH PAGE LINKS ====================
$bankingFinanceServices = [
    ["name" => "Domestic Money Transfer", "icon" => "💸", "desc" => "IMPS / NEFT / RTGS Transfer", "offer" => "Instant", "link" => "money-transfer.php"],
    ["name" => "Financial Services", "icon" => "📈", "desc" => "Investment, Mutual Funds, Portfolio", "offer" => "Expert Advice", "link" => "financial-services.php"],
    ["name" => "NSDL Payments Bank BC", "icon" => "🏛️", "desc" => "Banking Correspondent Services", "offer" => "Banking Partner", "link" => "nsdl-payment-bank-bc.php"],
    ["name" => "Axis Bank BC", "icon" => "🏦", "desc" => "Axis Bank Banking Correspondent", "offer" => "Banking Services", "link" => "axis-bank-bc.php"],
    ["name" => "ICICI Bank Prepaid Debit Card", "icon" => "💳", "desc" => "Prepaid Debit Card Services", "offer" => "Instant Issue", "link" => "icici-prepaid-debit-card.php"],
    ["name" => "Loan", "icon" => "🤝", "desc" => "Personal, Business, Home Loans", "offer" => "Low Interest", "link" => "loan.php"],
    ["name" => "Stock / Share Broking & Trading", "icon" => "📊", "desc" => "Become Sub-Broker or Trader", "offer" => "Start Trading", "link" => "be-a-sub-broker-or-trader-in-stocks"],
    ["name" => "Digital & Physical Gold", "icon" => "🥇", "desc" => "Buy/Sell Digital & Physical Gold", "offer" => "Best Rates", "link" => "digital-and-physical-gold"],
    ["name" => "Insurance Agency", "icon" => "🛡️", "desc" => "Life, Health, Vehicle Insurance", "offer" => "Become Agent", "link" => "insurance-agency.php"],
    ["name" => "Credit Score Check", "icon" => "📋", "desc" => "Check Your Credit Score", "offer" => "FREE", "link" => "credit-score.php"],
    ["name" => "Mutual Funds", "icon" => "📊", "desc" => "SIP, Lump Sum Investment", "offer" => "Expert Guidance", "link" => "mutual-funds.php"],
    ["name" => "Tax Saving Investments", "icon" => "💰", "desc" => "ELSS, PPF, NPS Investments", "offer" => "Tax Benefits", "link" => "tax-saving.php"]
];

// ==================== GST SERVICES ====================
$gstServices = [
    ["name" => "GSTR-10", "icon" => "📋", "desc" => "Final Return for Cancelled Registrations", "offer" => "Expert Filing", "link" => "gstr-10"],
    ["name" => "GST Reconciliation", "icon" => "📊", "desc" => "Reconcile GST Data with Books", "offer" => "100% Accuracy", "link" => "gst-reconciliation"],
    ["name" => "GST Registration + Certification", "icon" => "📄", "desc" => "New GST Registration with Certificate", "offer" => "Quick Process", "link" => "gst-registration"],
    ["name" => "GST Return Filing", "icon" => "📑", "desc" => "File GST Returns Online", "offer" => "On-Time Filing", "link" => "gst-return-filing"],
    ["name" => "GST Return Filing (Regular)", "icon" => "📑", "desc" => "Regular Monthly/Quarterly Filing", "offer" => "Zero Error", "link" => "gst-return-filing-regular"],
    ["name" => "GST Surrendered", "icon" => "❌", "desc" => "Surrender GST Registration", "offer" => "Hassle-Free", "link" => "gst-surrendered"],
    ["name" => "GSTR-9", "icon" => "📊", "desc" => "Annual GST Return Filing", "offer" => "Compliance Done", "link" => "gstr-9"],
    ["name" => "IEC Amendment", "icon" => "✏️", "desc" => "Update Import Export Code", "offer" => "Fast Processing", "link" => "iec-amendment"],
    ["name" => "E-Way Bill", "icon" => "🚛", "desc" => "Generate E-Way Bill for Transport", "offer" => "Instant Generation", "link" => "e-way-bill"],
    ["name" => "GST Annual Return 9/9A", "icon" => "📊", "desc" => "Annual GST Return Filing", "offer" => "Expert Support", "link" => "gst-annual-return"],
    ["name" => "GST Audit", "icon" => "🔍", "desc" => "Complete GST Audit Services", "offer" => "Professional Audit", "link" => "gst-audit"],
    ["name" => "GST Cash Refund", "icon" => "💰", "desc" => "Claim Cash Refund on GST", "offer" => "Quick Refund", "link" => "gst-cash-refund"],
    ["name" => "GSTR-8", "icon" => "📋", "desc" => "E-Commerce Operators Return", "offer" => "Easy Filing", "link" => "gstr-8"]
];

// ==================== TAX & COMPLIANCE SERVICES ====================
$taxComplianceServices = [
    ["name" => "GST Services", "icon" => "📑", "desc" => "Complete GST Solutions", "offer" => "Expert Filing", "link" => "gst-services.php"],
    ["name" => "Income Tax Services", "icon" => "💵", "desc" => "Income Tax Filing & Planning", "offer" => "Save Tax", "link" => "income-tax.php"],
    ["name" => "Company Compliance", "icon" => "🏢", "desc" => "ROC, MCA, Company Law", "offer" => "100% Compliance", "link" => "compliance-services.php"],
    ["name" => "LLP Compliances", "icon" => "🤝", "desc" => "LLP Registration & Filings", "offer" => "Expert Support", "link" => "llp-compliances.php"],
    ["name" => "Intellectual Property Right", "icon" => "💡", "desc" => "Trademark, Patent, Copyright", "offer" => "Legal Protection", "link" => "intellectual-property.php"],
    ["name" => "ISO Certification", "icon" => "✅", "desc" => "ISO 9001, 14001, 27001", "offer" => "Global Standard", "link" => "iso-certification.php"],
    ["name" => "Digital Signature", "icon" => "🖊️", "desc" => "DSC Certificate Services", "offer" => "Instant Issuance", "link" => "digital-signature.php"],
    ["name" => "Legal Drafting Services", "icon" => "⚖️", "desc" => "Contracts, Agreements, Deeds", "offer" => "Expert Drafting", "link" => "legal-drafting.php"]
];

// ==================== GOVERNMENT G2C SERVICES ====================
$g2cServices = [
    ["name" => "Aadhar Correction (OTP)", "icon" => "🪪", "desc" => "Update Aadhar Details via OTP", "offer" => "Quick Update", "link" => "aadhar-correction.php"],
    ["name" => "Driving License", "icon" => "🚗", "desc" => "Apply/ Renew Driving License", "offer" => "Easy Process", "link" => "driving-license.php"],
    ["name" => "Voter ID Application", "icon" => "🗳️", "desc" => "Apply for New Voter ID", "offer" => "Fast Track", "link" => "voter-id-application.php"],
    ["name" => "Marriage Certificate", "icon" => "💑", "desc" => "Apply for Marriage Certificate", "offer" => "Legal Document", "link" => "marriage-certificate.php"],
    ["name" => "Ration Card Application", "icon" => "🛒", "desc" => "Apply/ Update Ration Card", "offer" => "Government Service", "link" => "ration-card-application.php"],
    ["name" => "Passport Application", "icon" => "🛂", "desc" => "Apply/ Renew Passport", "offer" => "Expert Assistance", "link" => "passport-application.php"],
    ["name" => "PM Scheme", "icon" => "⭐", "desc" => "Apply for PM Schemes", "offer" => "Government Benefits", "link" => "pm-scheme.php"],
    ["name" => "E-Shram Card", "icon" => "🛡️", "desc" => "Apply for E-Shram Card", "offer" => "Social Security", "link" => "e-shram-card.php"],
    ["name" => "Death Certificate", "icon" => "🕊️", "desc" => "Apply for Death Certificate", "offer" => "Legal Document", "link" => "death-certificate.php"],
    ["name" => "Birth Certificate", "icon" => "👶", "desc" => "Apply for Birth Certificate", "offer" => "Quick Process", "link" => "birth-certificate.php"],
    ["name" => "Caste Certificate", "icon" => "👥", "desc" => "Apply for Caste Certificate", "offer" => "Government Issued", "link" => "caste-certificate.php"],
    ["name" => "Income Certificate", "icon" => "📄", "desc" => "Apply for Income Certificate", "offer" => "Easy Application", "link" => "income-certificate.php"],
    ["name" => "Government Citizen Services", "icon" => "🏛️", "desc" => "All G2C Services", "offer" => "One-Stop Solution", "link" => "G2C-services.php"],
    ["name" => "Government Registration", "icon" => "📋", "desc" => "Government Registrations", "offer" => "Official Process", "link" => "government-registration.php"],
    ["name" => "Pan Card", "icon" => "🆔", "desc" => "Apply/ Update PAN Card", "offer" => "Instant Issuance", "link" => "pan-card.php"],
    ["name" => "Ayushman Bharat Card", "icon" => "🏥", "desc" => "Apply for Ayushman Card", "offer" => "Health Coverage", "link" => "ayushman-bharat.php"]
];

// ==================== ALL GIFT VOUCHERS FROM EXCEL (279 ITEMS) ====================
$giftVouchers = [
    ["code" => "63874", "name" => "109F E-Gift", "brand" => "Gift Card", "commission" => "1.25%"],
    ["code" => "46839", "name" => "Aeropostale INR", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "82403", "name" => "Airtel Xstream", "brand" => "Entertainment", "commission" => "2.6%"],
    ["code" => "56170", "name" => "AJIO E-Gift Card", "brand" => "Fashion", "commission" => "0.4%"],
    ["code" => "82389", "name" => "ALDO INR", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "76017", "name" => "Aliste", "brand" => "Gift Card", "commission" => "1.7%"],
    ["code" => "11176", "name" => "Allen Solly", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "63843", "name" => "Amazon Prime Voucher-12 months Membership", "brand" => "Entertainment", "commission" => "2.6%"],
    ["code" => "63842", "name" => "Amazon Prime Voucher-3 months Membership", "brand" => "Entertainment", "commission" => "2.6%"],
    ["code" => "58966", "name" => "Amazon Shopping Voucher", "brand" => "E-commerce", "commission" => "0%"],
    ["code" => "65650", "name" => "Amazon Shopping Voucher (For B2C usecase only)", "brand" => "E-commerce", "commission" => "0%"],
    ["code" => "51507", "name" => "American Eagle", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "63832", "name" => "American Tourister INR", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "14382", "name" => "Archies", "brand" => "Gifts", "commission" => "1.7%"],
    ["code" => "53881", "name" => "ARMANI-EXCHANGE - LUXE E-Gift Card", "brand" => "Luxury", "commission" => "1.7%"],
    ["code" => "5022", "name" => "Arrow", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "81923", "name" => "Assembly", "brand" => "Gift Card", "commission" => "1.7%"],
    ["code" => "48011", "name" => "Aurelia", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "56633", "name" => "Auric", "brand" => "Jewellery", "commission" => "6.2%"],
    ["code" => "48061", "name" => "Barbeque Nation E-voucher", "brand" => "Dining", "commission" => "0.4%"],
    ["code" => "63834", "name" => "Baskin Robbins INR", "brand" => "Dining", "commission" => "2.15%"],
    ["code" => "14196", "name" => "Bata", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "82390", "name" => "BATH & BODY WORKS", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "19913", "name" => "Beer Cafe INR", "brand" => "Dining", "commission" => "1.25%"],
    ["code" => "82399", "name" => "Behrouz Biryani", "brand" => "Dining", "commission" => "0.4%"],
    ["code" => "82395", "name" => "BEVERLY HILLS POLO CLUB", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "65362", "name" => "Bewakoof Brands E-Gift Card", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "63836", "name" => "Beyoung INR", "brand" => "Fashion", "commission" => "2.15%"],
    ["code" => "46426", "name" => "Bigbasket", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "67560", "name" => "Bikanervala E-Gift Card", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "66340", "name" => "Birkenstock E-Gift Card", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "67970", "name" => "Black + Decker", "brand" => "Electronics", "commission" => "0.85%"],
    ["code" => "63837", "name" => "Blaupunkt INR", "brand" => "Electronics", "commission" => "1.7%"],
    ["code" => "63838", "name" => "Blinkit INR", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "53912", "name" => "Blue Tokai E-Gift Card", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "53648", "name" => "BlueStone Diamond E-Gift Cards", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "53647", "name" => "BlueStone Gold Coin & Solitaires Jewellery", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "11106", "name" => "Bluestone Gold jewellery", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "48726", "name" => "Bodycraft", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "54717", "name" => "Bombay Shaving Company", "brand" => "Beauty", "commission" => "2.6%"],
    ["code" => "11164", "name" => "BookMyShow E-Gift Card", "brand" => "Entertainment", "commission" => "0.4%"],
    ["code" => "61015", "name" => "BrainGymJr", "brand" => "Education", "commission" => "0.85%"],
    ["code" => "228", "name" => "Cafe Coffee Day E-Gift Cards", "brand" => "Dining", "commission" => "1.3%"],
    ["code" => "61017", "name" => "Cafe Delhi Heights", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "75919", "name" => "Campus", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "53861", "name" => "Candere Gold Coin", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "61018", "name" => "Candere Gold Jewellery", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "82388", "name" => "CHARLES & KEITH", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "71386", "name" => "Chicago Pizza E-Voucher", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "46666", "name" => "Chumbak", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "76574", "name" => "Cleartax", "brand" => "Finance", "commission" => "2.6%"],
    ["code" => "65834", "name" => "Cleartrip E-Gift (Instant Voucher)", "brand" => "Travel", "commission" => "0.4%"],
    ["code" => "12800", "name" => "Cleartrip Hotels", "brand" => "Travel", "commission" => "0.85%"],
    ["code" => "65363", "name" => "Cloud Tailor E-Gift Card", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "29937", "name" => "Costa Coffee E-Gift Voucher", "brand" => "Dining", "commission" => "1.25%"],
    ["code" => "14383", "name" => "Croma", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "67974", "name" => "Cult E-Gift Card", "brand" => "Fitness", "commission" => "1.3%"],
    ["code" => "56673", "name" => "Daily Objects", "brand" => "Lifestyle", "commission" => "3.5%"],
    ["code" => "51577", "name" => "Decathlon INR", "brand" => "Sports", "commission" => "0.4%"],
    ["code" => "65752", "name" => "Discovery Plus", "brand" => "Entertainment", "commission" => "3.5%"],
    ["code" => "76950", "name" => "Disney+ Hotstar", "brand" => "Entertainment", "commission" => "0.4%"],
    ["code" => "52665", "name" => "Docubay", "brand" => "Entertainment", "commission" => "2.15%"],
    ["code" => "14186", "name" => "Domino's Pizza", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "53949", "name" => "Donatekart E-Gift Card", "brand" => "Charity", "commission" => "0%"],
    ["code" => "63841", "name" => "Dpauls INR", "brand" => "Gift Card", "commission" => "0.85%"],
    ["code" => "53887", "name" => "DUNE-LONDON - LUXE E-Gift Card", "brand" => "Luxury", "commission" => "1.7%"],
    ["code" => "66721", "name" => "EaseMyTrip E-Gift Card", "brand" => "Travel", "commission" => "0.4%"],
    ["code" => "52784", "name" => "EatSure E-Gift Card-B2B", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "51199", "name" => "Elleven", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "52927", "name" => "Epic On E-Gift Cards-1 month subscription", "brand" => "Entertainment", "commission" => "0.85%"],
    ["code" => "52930", "name" => "Epic On E-Gift Cards-1 year subscription", "brand" => "Entertainment", "commission" => "0.85%"],
    ["code" => "52928", "name" => "Epic On E-Gift Cards-3 month subscription", "brand" => "Entertainment", "commission" => "0.85%"],
    ["code" => "52929", "name" => "Epic On E-Gift Cards-6 month subscription", "brand" => "Entertainment", "commission" => "0.85%"],
    ["code" => "48707", "name" => "ESBEDA e-Gift Voucher", "brand" => "Gift Card", "commission" => "6.65%"],
    ["code" => "61019", "name" => "Estele", "brand" => "Beauty", "commission" => "1.7%"],
    ["code" => "63845", "name" => "Euphoria Jewellery Gold Coin", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "63846", "name" => "Euphoria Jewellery Silver Coin", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "47294", "name" => "Faasos", "brand" => "Dining", "commission" => "0.4%"],
    ["code" => "62054", "name" => "Fab Hotels", "brand" => "Travel", "commission" => "1.25%"],
    ["code" => "51253", "name" => "Fabindia", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "71385", "name" => "Fashion Factory", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "264", "name" => "Fastrack", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "61020", "name" => "Fastrack Bags", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "63847", "name" => "Ferns N Petals", "brand" => "Gifts", "commission" => "1.7%"],
    ["code" => "61021", "name" => "FinuSmart Easy Cash", "brand" => "Finance", "commission" => "1.25%"],
    ["code" => "61043", "name" => "FinuSmart Suraksha", "brand" => "Finance", "commission" => "1.25%"],
    ["code" => "1009", "name" => "First Cry eGift voucher", "brand" => "Baby Care", "commission" => "0%"],
    ["code" => "65753", "name" => "Fitpass", "brand" => "Fitness", "commission" => "3.5%"],
    ["code" => "1007", "name" => "Flipkart INR", "brand" => "E-commerce", "commission" => "0%"],
    ["code" => "74096", "name" => "Flower Aura", "brand" => "Gifts", "commission" => "1.25%"],
    ["code" => "65833", "name" => "Forever New E-Gift Card", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "58976", "name" => "Freecultr", "brand" => "Fashion", "commission" => "3.5%"],
    ["code" => "53659", "name" => "G-STAR RAW - LUXE E-Gift Card", "brand" => "Luxury", "commission" => "1.7%"],
    ["code" => "48708", "name" => "GINI and JONY", "brand" => "Fashion", "commission" => "2.15%"],
    ["code" => "53940", "name" => "Girias E-Gift Card", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "84928", "name" => "GIVA Silver Coin", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "65835", "name" => "Global Desi E-gift card", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "32320", "name" => "Godrej Natures Basket", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "48801", "name" => "Google Play Gift Code", "brand" => "Entertainment", "commission" => "0%"],
    ["code" => "67930", "name" => "Great Eastern Retail e-voucher", "brand" => "Retail", "commission" => "0%"],
    ["code" => "62052", "name" => "GRT Jewellers", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "51616", "name" => "Gupta Distributors", "brand" => "Retail", "commission" => "0.4%"],
    ["code" => "53657", "name" => "HAMLEYS - LUXE E-Gift Card", "brand" => "Toys", "commission" => "1.25%"],
    ["code" => "63850", "name" => "Hammer", "brand" => "Electronics", "commission" => "3.05%"],
    ["code" => "53934", "name" => "Health and Glow E-Gift Card", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "63853", "name" => "Healthians", "brand" => "Healthcare", "commission" => "1.25%"],
    ["code" => "1651", "name" => "Helios", "brand" => "Electronics", "commission" => "1.3%"],
    ["code" => "288", "name" => "HiDesign", "brand" => "Furniture", "commission" => "1.25%"],
    ["code" => "1658", "name" => "Himalaya", "brand" => "Healthcare", "commission" => "0.4%"],
    ["code" => "61058", "name" => "Home Centre", "brand" => "Furniture", "commission" => "0%"],
    ["code" => "53939", "name" => "HopInTown PLUS Pack of 2 Lifestyle Membership E-Gi", "brand" => "Lifestyle", "commission" => "1.3%"],
    ["code" => "53941", "name" => "HopInTown PLUS Pack of 3 Lifestyle Membership E-Gi", "brand" => "Lifestyle", "commission" => "1.3%"],
    ["code" => "53943", "name" => "HopInTown PLUS Pack of 5 Lifestyle Membership E-Gi", "brand" => "Lifestyle", "commission" => "1.3%"],
    ["code" => "47269", "name" => "Hush Puppies", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "77512", "name" => "Ikea Giftcard India", "brand" => "Furniture", "commission" => "0.4%"],
    ["code" => "51610", "name" => "Imagine Apple Premium Reseller", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "82391", "name" => "INGLOT", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "51611", "name" => "ITC Hotels", "brand" => "Travel", "commission" => "0.85%"],
    ["code" => "14191", "name" => "Jack and Jones", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "81793", "name" => "JAR", "brand" => "Gift Card", "commission" => "0%"],
    ["code" => "49461", "name" => "JOCKEY INR", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "50554", "name" => "Jos Alukkas Gold Coin", "brand" => "Jewellery", "commission" => "3.5%"],
    ["code" => "53631", "name" => "Jos Alukkas Jewellery E-Gift Card", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "50540", "name" => "Joyalukkas Diamond E-Gift Voucher", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "50376", "name" => "Joyalukkas Gold E-Gift Voucher", "brand" => "Jewellery", "commission" => "3.5%"],
    ["code" => "30587", "name" => "Joyalukkas Pure Gold (Conditional) E-Gift Voucher", "brand" => "Jewellery", "commission" => "3.5%"],
    ["code" => "66043", "name" => "Kalyan Diamond Jewellery Voucher", "brand" => "Jewellery", "commission" => "0.85%"],
    ["code" => "66045", "name" => "Kalyan Gold Coin E-Gift Card", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "47630", "name" => "Kalyan Gold Jewellery E-Gift Voucher", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "48269", "name" => "Kama Ayurveda gift voucher", "brand" => "Beauty", "commission" => "1.7%"],
    ["code" => "49894", "name" => "Ketan Diamond Jewellery", "brand" => "Jewellery", "commission" => "1.25%"],
    ["code" => "49892", "name" => "Ketan Gold Coin", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "49893", "name" => "Ketan Gold Jewellery", "brand" => "Jewellery", "commission" => "0.85%"],
    ["code" => "29939", "name" => "KFC INR", "brand" => "Dining", "commission" => "1.3%"],
    ["code" => "77432", "name" => "Khadims", "brand" => "Footwear", "commission" => "0.4%"],
    ["code" => "50544", "name" => "Kiehls", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "21297", "name" => "Lakme Salon", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "50545", "name" => "Lawrence And Mayo", "brand" => "Eyewear", "commission" => "0.85%"],
    ["code" => "12977", "name" => "Levis", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "11141", "name" => "Lifestyle", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "61054", "name" => "Lifestyle Online", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "65365", "name" => "Louis Philippe E-Gift Card", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "61008", "name" => "Love, Beauty & Planet", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "65366", "name" => "Lulu Hypermarket E-Gift Cards", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "82400", "name" => "Lunch Box", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "49347", "name" => "Luxe Gift Card", "brand" => "Luxury", "commission" => "1.3%"],
    ["code" => "21003", "name" => "Machaan", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "21000", "name" => "Mainland China", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "24346", "name" => "MakeMyTrip - Flights & Hotels", "brand" => "Travel", "commission" => "0%"],
    ["code" => "68487", "name" => "Mamaearth", "brand" => "Beauty", "commission" => "0.85%"],
    ["code" => "81922", "name" => "Marks & Spencer", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "53935", "name" => "Marriott Hotels India E-Gift Card", "brand" => "Travel", "commission" => "0.85%"],
    ["code" => "53960", "name" => "McDonald's Value Club Gift Voucher-INR 2000", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "63858", "name" => "Melorra Diamond Jewellery", "brand" => "Jewellery", "commission" => "1.3%"],
    ["code" => "63860", "name" => "Melorra Gold Jewellery", "brand" => "Jewellery", "commission" => "0.85%"],
    ["code" => "47229", "name" => "More", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "68498", "name" => "Muthoot Gold Voucher", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "61045", "name" => "My Jio Store", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "41773", "name" => "MyGlamm E-Gift Voucher", "brand" => "Beauty", "commission" => "2.6%"],
    ["code" => "6903", "name" => "Myntra", "brand" => "Fashion", "commission" => "0.4%"],
    ["code" => "56674", "name" => "Mystique(Nike Factory Store) TX e-Gift Voucher", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "61032", "name" => "myUpchar Medicines", "brand" => "Healthcare", "commission" => "0%"],
    ["code" => "50393", "name" => "Netmeds", "brand" => "Healthcare", "commission" => "0.85%"],
    ["code" => "40548", "name" => "Nykaa", "brand" => "Beauty", "commission" => "0.85%"],
    ["code" => "28224", "name" => "O2 Spa", "brand" => "Wellness", "commission" => "1.25%"],
    ["code" => "21001", "name" => "Oh! Calcutta", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "46545", "name" => "Ola Cabs", "brand" => "Mobility", "commission" => "0.4%"],
    ["code" => "14193", "name" => "ONLY Apparel", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "53656", "name" => "ORGANIC INDIA", "brand" => "Healthcare", "commission" => "1.3%"],
    ["code" => "82402", "name" => "Oven Story", "brand" => "Dining", "commission" => "0.4%"],
    ["code" => "77433", "name" => "PAI INTERNATIONAL", "brand" => "Retail", "commission" => "0%"],
    ["code" => "23254", "name" => "Pantaloons", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "65360", "name" => "PCJ Diamond Jewellery", "brand" => "Jewellery", "commission" => "0.4%"],
    ["code" => "50556", "name" => "PCJ Gold Coin", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "53626", "name" => "PCJ Gold Jewellery E-Gift Card", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "46836", "name" => "Pepperfry", "brand" => "Furniture", "commission" => "0.85%"],
    ["code" => "48704", "name" => "Perfume2order", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "52748", "name" => "Peter England E-Gift Voucher", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "230", "name" => "Pizza Hut", "brand" => "Dining", "commission" => "1.3%"],
    ["code" => "65367", "name" => "Planet Fashion E-Gift Card", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "46050", "name" => "points for Good", "brand" => "Charity", "commission" => "1.3%"],
    ["code" => "53938", "name" => "Polar Bear E-Gift Cards", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "53933", "name" => "Polaroid E-Gift Card", "brand" => "Gift Card", "commission" => "1.25%"],
    ["code" => "51520", "name" => "Postcard Hotels", "brand" => "Travel", "commission" => "1.25%"],
    ["code" => "56391", "name" => "Pothys E-gift Voucher", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "11199", "name" => "Prestige Smart Kitchen", "brand" => "Appliances", "commission" => "2.15%"],
    ["code" => "48701", "name" => "PUMA", "brand" => "Sports", "commission" => "1.25%"],
    ["code" => "19104", "name" => "PVR eGift Voucher", "brand" => "Entertainment", "commission" => "0.85%"],
    ["code" => "82394", "name" => "R&B", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "48059", "name" => "Ratnadeep Super Market E-Gift Voucher", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "51517", "name" => "Ray-Ban India", "brand" => "Eyewear", "commission" => "1.3%"],
    ["code" => "83572", "name" => "Raymond - Ready to Wear", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "48200", "name" => "Relaxo", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "21721", "name" => "Reliance Digital", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "53978", "name" => "Reliance Jewels", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "67953", "name" => "Reliance Jio Mart", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "63862", "name" => "Reliance Smart INR", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "53857", "name" => "Reliance Smart Point", "brand" => "Retail", "commission" => "0.4%"],
    ["code" => "61048", "name" => "Reliance Trends", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "53856", "name" => "Reliance Trends Footwear", "brand" => "Footwear", "commission" => "1.3%"],
    ["code" => "50460", "name" => "RuPay Bank Gift e-Card", "brand" => "Banking", "commission" => "3.5%"],
    ["code" => "81794", "name" => "Safilo", "brand" => "Eyewear", "commission" => "1.7%"],
    ["code" => "81924", "name" => "Samsonite", "brand" => "Luggage", "commission" => "0%"],
    ["code" => "67929", "name" => "Sathya", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "53937", "name" => "Selected Homme E-Gift Card", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "56390", "name" => "Senco Gold Tx E-gift Voucher", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "12567", "name" => "Shoppers Stop", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "71394", "name" => "Shopy Vision", "brand" => "Eyewear", "commission" => "0.4%"],
    ["code" => "21006", "name" => "Sigree", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "53929", "name" => "Simon Carter eGift cards", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "65756", "name" => "Simple", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "53853", "name" => "Skechers", "brand" => "Footwear", "commission" => "0.4%"],
    ["code" => "61036", "name" => "Skinn", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "61037", "name" => "Skullcandy", "brand" => "Electronics", "commission" => "1.25%"],
    ["code" => "63866", "name" => "Smile Foundation INR", "brand" => "Charity", "commission" => "2.15%"],
    ["code" => "67928", "name" => "Soch", "brand" => "Fashion", "commission" => "3.05%"],
    ["code" => "51256", "name" => "Sony Liv 12 month subscription", "brand" => "Entertainment", "commission" => "2.6%"],
    ["code" => "52036", "name" => "SOTC Travel E-Gift Cards", "brand" => "Travel", "commission" => "0.4%"],
    ["code" => "49250", "name" => "Speedo", "brand" => "Sports", "commission" => "1.7%"],
    ["code" => "47275", "name" => "Spencers Retail", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "50538", "name" => "Starbucks INR", "brand" => "Dining", "commission" => "0.4%"],
    ["code" => "50549", "name" => "Sterling Holidays", "brand" => "Travel", "commission" => "1.7%"],
    ["code" => "53884", "name" => "STEVE-MADDEN - LUXE E-Gift Card", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "81926", "name" => "Superbottoms", "brand" => "Baby Care", "commission" => "1.25%"],
    ["code" => "53885", "name" => "SUPERDRY - LUXE E-Gift Card", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "50542", "name" => "Surat Diamond", "brand" => "Jewellery", "commission" => "1.7%"],
    ["code" => "50543", "name" => "Surat Diamond Solitaire", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "20998", "name" => "Sweet Bengal", "brand" => "Dining", "commission" => "1.7%"],
    ["code" => "82397", "name" => "Sweet Truth", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "51794", "name" => "Swiggy Money Voucher", "brand" => "Dining", "commission" => "0%"],
    ["code" => "63867", "name" => "Taj Experiences INR", "brand" => "Travel", "commission" => "1.3%"],
    ["code" => "50559", "name" => "Taneria", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "80914", "name" => "Tanishq Gold Coin e-Gift Voucher", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "21598", "name" => "Tanishq Gold Jewellery eGift voucher", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "50605", "name" => "Tanishq Studded E-Gift Card", "brand" => "Jewellery", "commission" => "3.5%"],
    ["code" => "50557", "name" => "Tata Cliq", "brand" => "E-commerce", "commission" => "0.4%"],
    ["code" => "62051", "name" => "TBZ-The Original Jewellery Retail", "brand" => "Jewellery", "commission" => "0%"],
    ["code" => "81927", "name" => "TEGO", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "14197", "name" => "Tgi Fridays", "brand" => "Dining", "commission" => "1.25%"],
    ["code" => "49174", "name" => "The Body Shop INR", "brand" => "Beauty", "commission" => "0.4%"],
    ["code" => "53910", "name" => "The Collective E-Gift Card", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "82401", "name" => "The Good Bowl", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "48060", "name" => "The Man Company E-voucher", "brand" => "Beauty", "commission" => "0.85%"],
    ["code" => "58584", "name" => "The Skin Story", "brand" => "Beauty", "commission" => "2.15%"],
    ["code" => "61049", "name" => "TimeZone INR", "brand" => "Entertainment", "commission" => "1.3%"],
    ["code" => "11197", "name" => "Titan", "brand" => "Accessories", "commission" => "1.25%"],
    ["code" => "61050", "name" => "Titan Minimals", "brand" => "Accessories", "commission" => "1.25%"],
    ["code" => "61055", "name" => "TrueFitt & Hill", "brand" => "Grooming", "commission" => "1.25%"],
    ["code" => "40203", "name" => "Uber egift", "brand" => "Mobility", "commission" => "0%"],
    ["code" => "63869", "name" => "Unlimited INR", "brand" => "Fashion", "commission" => "0.85%"],
    ["code" => "53633", "name" => "Urban Ladder E-Gift Card", "brand" => "Furniture", "commission" => "0.85%"],
    ["code" => "63870", "name" => "V Mart", "brand" => "Retail", "commission" => "0.4%"],
    ["code" => "77434", "name" => "VALUE PLUS RETAIL", "brand" => "Retail", "commission" => "0%"],
    ["code" => "65361", "name" => "Van Heusen E-Gift Card", "brand" => "Fashion", "commission" => "0%"],
    ["code" => "77435", "name" => "Vaya", "brand" => "Lifestyle", "commission" => "1.3%"],
    ["code" => "63872", "name" => "Veridicus INR", "brand" => "Gift Card", "commission" => "3.5%"],
    ["code" => "14192", "name" => "Vero Moda", "brand" => "Fashion", "commission" => "1.7%"],
    ["code" => "82392", "name" => "VICTORIA'S SECRET", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "82393", "name" => "VICTORIA'S SECRET BEAUTY", "brand" => "Beauty", "commission" => "1.25%"],
    ["code" => "52666", "name" => "Vijay Sales", "brand" => "Electronics", "commission" => "0%"],
    ["code" => "75865", "name" => "VROTT", "brand" => "Gift Card", "commission" => "4.4%"],
    ["code" => "48010", "name" => "W for women", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "53932", "name" => "Wakefit E-Gift Card", "brand" => "Furniture", "commission" => "1.3%"],
    ["code" => "82398", "name" => "Wendy's", "brand" => "Dining", "commission" => "0.85%"],
    ["code" => "13096", "name" => "Westside", "brand" => "Fashion", "commission" => "1.25%"],
    ["code" => "77436", "name" => "Wildcraft e-voucher", "brand" => "Fashion", "commission" => "1.3%"],
    ["code" => "63873", "name" => "Wildcraft INR", "brand" => "Fashion", "commission" => "0.4%"],
    ["code" => "46702", "name" => "William Penn", "brand" => "Accessories", "commission" => "1.3%"],
    ["code" => "69062", "name" => "Woggles", "brand" => "Fashion", "commission" => "2.15%"],
    ["code" => "54434", "name" => "Wonderchef Gift Voucher", "brand" => "Appliances", "commission" => "1.25%"],
    ["code" => "42720", "name" => "Woodland", "brand" => "Footwear", "commission" => "1.25%"],
    ["code" => "61051", "name" => "Wow! China", "brand" => "Dining", "commission" => "0%"],
    ["code" => "54952", "name" => "Wow! Momo Special", "brand" => "Dining", "commission" => "0%"],
    ["code" => "83574", "name" => "Wow!Chicken", "brand" => "Dining", "commission" => "0%"],
    ["code" => "2810", "name" => "Yatra.com General", "brand" => "Travel", "commission" => "0.4%"],
    ["code" => "52410", "name" => "Zee5", "brand" => "Entertainment", "commission" => "1.7%"],
    ["code" => "84749", "name" => "Zepto E-Gift Card", "brand" => "Grocery", "commission" => "0%"],
    ["code" => "52391", "name" => "Zomato E-Gift Card", "brand" => "Dining", "commission" => "0%"],
    ["code" => "67962", "name" => "Zoomin Gift Card", "brand" => "Gift Card", "commission" => "0.4%"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
<title>K-Seva | Retail Dashboard - Home</title>
<link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; -webkit-tap-highlight-color: transparent; }
    body { font-family: 'Inter', sans-serif; background: #f5f7fa; color: #1a1a2e; overflow-x: hidden; padding-bottom: 70px; }
    .mobile-container { max-width: 500px; margin: 0 auto; padding: 16px 16px 80px; position: relative; z-index: 2; }
    
    /* Offer Cards */
    .offers-scroll-section { margin-bottom: 24px; border-radius: 28px; position: relative; overflow: hidden; box-shadow: 0 12px 25px -10px rgba(0,0,0,0.2); }
    .offers-header { padding: 0 16px 12px 16px; display: flex; justify-content: space-between; align-items: center; }
    .offers-title { display: flex; align-items: center; gap: 8px; }
    .offers-title i { font-size: 1.4rem; color: #012F65; }
    .offers-title h2 { font-size: 1.1rem; font-weight: 700; color: #31B5FC; }
    .scroll-container { width: 100%; overflow-x: auto; overflow-y: hidden; scrollbar-width: none; -ms-overflow-style: none; scroll-behavior: smooth; }
    .scroll-container::-webkit-scrollbar { display: none; }
    .scroll-track { display: flex; gap: 14px; padding: 6px 16px 12px 16px; width: max-content; }
    .medium-offer-card { border-radius: 20px; padding: 16px 18px; min-width: 230px; max-width: 230px; display: flex; flex-direction: column; gap: 10px; cursor: pointer; transition: all 0.25s ease; box-shadow: 0 8px 20px rgba(0,0,0,0.15); border: 1px solid rgba(255,255,255,0.3); }
    .medium-offer-card:active { transform: scale(0.97); }
    .card-0 { background: linear-gradient(135deg, #FF512F, #DD2476); }
    .card-1 { background: linear-gradient(135deg, #11998E, #38EF7D); }
    .card-2 { background: linear-gradient(135deg, #F2994A, #F2C94C); }
    .card-3 { background: linear-gradient(135deg, #8E2DE2, #4A00E0); }
    .card-4 { background: linear-gradient(135deg, #00B4DB, #0083B0); }
    .offer-card-top { display: flex; justify-content: space-between; align-items: flex-start; }
    .offer-badge-small { background: rgba(255,255,255,0.2); backdrop-filter: blur(4px); padding: 3px 10px; border-radius: 40px; font-size: 0.6rem; font-weight: 600; color: white; }
    .offer-emoji-medium { font-size: 2rem; filter: drop-shadow(2px 3px 6px rgba(0,0,0,0.2)); }
    .offer-card-middle { text-align: center; margin: 4px 0; }
    .offer-value-medium { font-size: 1.5rem; font-weight: 800; color: white; letter-spacing: -0.5px; margin-bottom: 4px; }
    .offer-desc-medium { font-size: 0.7rem; color: rgba(255,255,255,0.95); font-weight: 500; }
    .offer-mini-tag-medium { background: rgba(0,0,0,0.2); display: inline-block; padding: 3px 10px; border-radius: 40px; font-size: 0.6rem; font-weight: 500; color: rgba(255,255,255,0.9); margin-top: 6px; }
    .offer-card-bottom { display: flex; align-items: center; justify-content: space-between; background: rgba(255,255,255,0.15); border-radius: 50px; padding: 4px 4px 4px 14px; margin-top: 6px; backdrop-filter: blur(4px); }
    .promo-code-medium { font-family: monospace; font-weight: 800; font-size: 0.7rem; letter-spacing: 1px; color: white; }
    .copy-btn-medium { background: white; border: none; padding: 5px 14px; border-radius: 40px; font-weight: 600; font-size: 0.65rem; color: #333; cursor: pointer; display: flex; align-items: center; gap: 5px; transition: 0.2s; }
    .copy-btn-medium:active { transform: scale(0.94); }
    .offer-footer-medium { display: flex; justify-content: center; gap: 12px; margin-top: 8px; font-size: 0.55rem; color: rgba(255,255,255,0.8); }
    
    /* Service Categories */
    .service-category { margin-bottom: 24px; }
    .category-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .category-header .title { display: flex; align-items: center; gap: 10px; }
    .category-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .category-header .title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .category-header .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .category-header .more-link:active { transform: scale(0.95); }
    .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 10px; }
    .service-card { background: #ffffff; border-radius: 16px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; box-shadow: 0 2px 8px rgba(0,0,0,0.04); position: relative; }
    .service-card:active { transform: scale(0.95); background: #f8f9fa; }
    .service-card .service-icon { font-size: 1.5rem; margin-bottom: 6px; }
    .service-card .service-name { font-size: 0.65rem; font-weight: 600; color: #4a5568; }
    .service-card .service-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 3px; font-weight: 500; }
    .service-card .free-badge { position: absolute; top: -5px; right: -5px; background: #ff6b6b; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px; font-weight: 600; }
    .jio-sim-card { background: linear-gradient(135deg, #00b4d8, #023e8a); border-radius: 16px; padding: 12px 16px; margin: 10px 0; display: flex; align-items: center; justify-content: space-between; cursor: pointer; }
    .jio-sim-card .jio-info { display: flex; align-items: center; gap: 10px; }
    .jio-sim-card .jio-info i { font-size: 1.5rem; color: #fff; }
    .jio-sim-card .jio-info span { color: white; font-weight: 600; font-size: 0.8rem; }
    .jio-sim-card i:last-child { color: white; }
    
    /* BANKING & FINANCE SECTION */
    .banking-finance-section { margin-bottom: 24px; }
    .banking-finance-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .banking-finance-header .title { display: flex; align-items: center; gap: 10px; }
    .banking-finance-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .banking-finance-header .title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .banking-finance-header .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .banking-finance-header .more-link:active { transform: scale(0.95); }
    
    .banking-finance-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 10px; }
    .banking-finance-card { background: #ffffff; border-radius: 16px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; box-shadow: 0 2px 8px rgba(0,0,0,0.04); position: relative; min-height: 95px; text-decoration: none; display: block; color: inherit; }
    .banking-finance-card:active { transform: scale(0.95); background: #f8f9fa; }
    .banking-finance-card .bf-icon { font-size: 1.8rem; margin-bottom: 4px; }
    .banking-finance-card .bf-name { font-size: 0.6rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .banking-finance-card .bf-offer { font-size: 0.5rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    .banking-finance-card .bf-arrow { font-size: 0.5rem; color: #a0aec0; margin-top: 4px; }
    
    /* GST SECTION */
    .gst-section { margin-bottom: 24px; }
    .gst-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .gst-header .title { display: flex; align-items: center; gap: 10px; }
    .gst-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .gst-header .title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .gst-header .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .gst-header .more-link:active { transform: scale(0.95); }
    
    .gst-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 10px; }
    .gst-card { background: #ffffff; border-radius: 16px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; box-shadow: 0 2px 8px rgba(0,0,0,0.04); position: relative; min-height: 90px; text-decoration: none; display: block; color: inherit; }
    .gst-card:active { transform: scale(0.95); background: #f8f9fa; }
    .gst-card .gst-icon { font-size: 1.6rem; margin-bottom: 4px; }
    .gst-card .gst-name { font-size: 0.6rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .gst-card .gst-offer { font-size: 0.5rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    .gst-card .gst-arrow { font-size: 0.5rem; color: #a0aec0; margin-top: 4px; }
    .gst-tag { position: absolute; top: -5px; right: -5px; background: #ff6b6b; color: white; font-size: 0.45rem; padding: 2px 6px; border-radius: 20px; font-weight: 600; }
    
    /* TAX & COMPLIANCE SECTION */
    .tax-compliance-section { margin-bottom: 24px; }
    .tax-compliance-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .tax-compliance-header .title { display: flex; align-items: center; gap: 10px; }
    .tax-compliance-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .tax-compliance-header .title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .tax-compliance-header .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .tax-compliance-header .more-link:active { transform: scale(0.95); }
    
    .tax-compliance-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 10px; }
    .tax-compliance-card { background: #ffffff; border-radius: 16px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; box-shadow: 0 2px 8px rgba(0,0,0,0.04); position: relative; min-height: 95px; text-decoration: none; display: block; color: inherit; }
    .tax-compliance-card:active { transform: scale(0.95); background: #f8f9fa; }
    .tax-compliance-card .tc-icon { font-size: 1.6rem; margin-bottom: 4px; }
    .tax-compliance-card .tc-name { font-size: 0.6rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .tax-compliance-card .tc-offer { font-size: 0.5rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    .tax-compliance-card .tc-arrow { font-size: 0.5rem; color: #a0aec0; margin-top: 4px; }
    
    /* Tax & Compliance Modal */
    .tax-modal { display: none; position: fixed; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; top: 0; left: 0; right: 0; bottom: 0; align-items: center; justify-content: center; }
    .tax-modal.show { display: flex; }
    .tax-modal-content { background: white; border-radius: 28px; width: 92%; max-width: 450px; max-height: 80vh; overflow-y: auto; padding: 20px; position: relative; animation: modalPop 0.3s ease; }
    .tax-modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid #e8ecf1; }
    .tax-modal-header h3 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; }
    .close-tax-modal { background: none; border: none; font-size: 1.3rem; cursor: pointer; color: #6c757d; }
    .tax-modal-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .tax-modal-item { background: #f8f9fa; border-radius: 12px; padding: 12px 8px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; text-decoration: none; display: block; color: inherit; }
    .tax-modal-item:active { transform: scale(0.95); background: #f0f2f5; }
    .tax-modal-icon { font-size: 1.8rem; margin-bottom: 4px; }
    .tax-modal-name { font-size: 0.65rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .tax-modal-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    
    /* GOVERNMENT G2C SECTION */
    .g2c-section { margin-bottom: 24px; }
    .g2c-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .g2c-header .title { display: flex; align-items: center; gap: 10px; }
    .g2c-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .g2c-header .title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .g2c-header .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .g2c-header .more-link:active { transform: scale(0.95); }
    
    .g2c-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 10px; }
    .g2c-card { background: #ffffff; border-radius: 16px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; box-shadow: 0 2px 8px rgba(0,0,0,0.04); position: relative; min-height: 95px; text-decoration: none; display: block; color: inherit; }
    .g2c-card:active { transform: scale(0.95); background: #f8f9fa; }
    .g2c-card .g2c-icon { font-size: 1.6rem; margin-bottom: 4px; }
    .g2c-card .g2c-name { font-size: 0.6rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .g2c-card .g2c-offer { font-size: 0.5rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    .g2c-card .g2c-arrow { font-size: 0.5rem; color: #a0aec0; margin-top: 4px; }
    
    /* Government G2C Modal */
    .g2c-modal { display: none; position: fixed; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; top: 0; left: 0; right: 0; bottom: 0; align-items: center; justify-content: center; }
    .g2c-modal.show { display: flex; }
    .g2c-modal-content { background: white; border-radius: 28px; width: 92%; max-width: 450px; max-height: 80vh; overflow-y: auto; padding: 20px; position: relative; animation: modalPop 0.3s ease; }
    .g2c-modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid #e8ecf1; }
    .g2c-modal-header h3 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; }
    .close-g2c-modal { background: none; border: none; font-size: 1.3rem; cursor: pointer; color: #6c757d; }
    .g2c-modal-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .g2c-modal-item { background: #f8f9fa; border-radius: 12px; padding: 12px 8px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; text-decoration: none; display: block; color: inherit; }
    .g2c-modal-item:active { transform: scale(0.95); background: #f0f2f5; }
    .g2c-modal-icon { font-size: 1.8rem; margin-bottom: 4px; }
    .g2c-modal-name { font-size: 0.65rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .g2c-modal-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    
    /* Travel Section */
    .travel-section { margin-bottom: 20px; }
    .travel-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
    .travel-header .title { display: flex; align-items: center; gap: 10px; }
    .travel-header .title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .travel-header .title h3 { font-size: 1rem; font-weight: 700; }
    .travel-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
    .travel-small-card { background: #ffffff; border-radius: 16px; padding: 12px 8px; text-align: center; cursor: pointer; border: 1px solid #e8ecf1; transition: all 0.2s; }
    .travel-small-card:active { transform: scale(0.95); background: #f8f9fa; }
    .travel-small-card .travel-icon { font-size: 1.8rem; margin-bottom: 8px; }
    .travel-small-card .travel-name { font-size: 0.7rem; font-weight: 600; color: #4a5568; }
    .travel-small-card .travel-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 3px; font-weight: 500; }
    
    /* Recent Activity */
    .section-title { display: flex; justify-content: space-between; align-items: center; margin: 20px 0 12px; }
    .section-title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .activity-list { background: #ffffff; border-radius: 16px; padding: 12px; margin-bottom: 20px; border: 1px solid #e8ecf1; }
    .activity-item { display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #f0f2f5; }
    .activity-icon { width: 36px; height: 36px; border-radius: 10px; background: #f0f8ff; display: flex; align-items: center; justify-content: center; font-size: 1rem; }
    .activity-details h4 { font-size: 0.85rem; color: #1a1a2e; font-weight: 600; }
    .activity-details p { font-size: 0.65rem; color: #a0aec0; }
    .amount { font-weight: 700; color: #00b4d8; font-size: 0.85rem; }
    .time { font-size: 0.6rem; color: #a0aec0; }
    
    /* Metro Cards Section */
    .metro-cards-section { background: #ffffff; border-radius: 16px; margin-bottom: 24px; border: 1px solid #e8ecf1; overflow: hidden; display: none; }
    .metro-cards-section.show { display: block; }
    .metro-cards-header { padding: 12px 16px; background: #f8f9fa; border-bottom: 1px solid #e8ecf1; display: flex; justify-content: space-between; align-items: center; }
    .metro-cards-header h4 { font-size: 0.85rem; font-weight: 700; color: #1a1a2e; }
    .close-metro { background: none; border: none; font-size: 0.7rem; color: #ff6b6b; cursor: pointer; padding: 4px 8px; border-radius: 20px; }
    .metro-cards-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; padding: 16px; }
    .metro-card-item { background: #f8f9fa; border-radius: 12px; padding: 12px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; }
    .metro-card-item:active { transform: scale(0.95); background: #f0f2f5; }
    .metro-card-icon { font-size: 1.5rem; margin-bottom: 6px; }
    .metro-card-name { font-size: 0.7rem; font-weight: 600; color: #4a5568; }
    .metro-card-code { font-size: 0.55rem; color: #00b4d8; margin-top: 3px; }
    
    /* Gift Cards Section */
    .giftcards-section { background: #ffffff; border-radius: 16px; margin-bottom: 24px; border: 1px solid #e8ecf1; overflow: hidden; display: none; }
    .giftcards-section.show { display: block; }
    .giftcards-header { padding: 12px 16px; background: #f8f9fa; border-bottom: 1px solid #e8ecf1; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 10; }
    .giftcards-header h4 { font-size: 0.85rem; font-weight: 700; color: #1a1a2e; }
    .close-giftcards { background: none; border: none; font-size: 0.7rem; color: #ff6b6b; cursor: pointer; padding: 4px 8px; border-radius: 20px; }
    .giftcards-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; padding: 16px; max-height: 500px; overflow-y: auto; }
    .giftcard-item { background: #f8f9fa; border-radius: 12px; padding: 10px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; border: 1px solid #e8ecf1; transition: all 0.2s; }
    .giftcard-item:active { transform: scale(0.97); background: #f0f2f5; }
    .giftcard-info { flex: 1; }
    .giftcard-name { font-size: 0.7rem; font-weight: 600; color: #1a1a2e; line-height: 1.3; }
    .giftcard-brand { font-size: 0.55rem; color: #a0aec0; margin-top: 2px; }
    .giftcard-commission { font-size: 0.7rem; font-weight: 700; color: #00b4d8; white-space: nowrap; margin-left: 8px; }
    .giftcard-code { font-size: 0.55rem; color: #6c757d; margin-top: 2px; font-family: monospace; }
    
    /* Recharge Operators Section */
    .recharge-operators-section { background: #ffffff; border-radius: 16px; margin-bottom: 24px; border: 1px solid #e8ecf1; overflow: hidden; display: none; }
    .recharge-operators-section.show { display: block; }
    .recharge-operators-header { padding: 12px 16px; background: #f8f9fa; border-bottom: 1px solid #e8ecf1; display: flex; justify-content: space-between; align-items: center; }
    .recharge-operators-header h4 { font-size: 0.85rem; font-weight: 700; color: #1a1a2e; }
    .close-recharge { background: none; border: none; font-size: 0.7rem; color: #ff6b6b; cursor: pointer; padding: 4px 8px; border-radius: 20px; }
    .recharge-operators-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; padding: 16px; }
    .recharge-operator-item { background: #f8f9fa; border-radius: 12px; padding: 12px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; }
    .recharge-operator-item:active { transform: scale(0.97); background: #f0f2f5; }
    .recharge-operator-left { display: flex; align-items: center; gap: 10px; }
    .recharge-operator-icon { width: 36px; height: 36px; border-radius: 50%; background: #e8ecf1; display: flex; align-items: center; justify-content: center; font-size: 1rem; }
    .recharge-operator-name { font-size: 0.75rem; font-weight: 600; color: #1a1a2e; }
    .recharge-operator-type { font-size: 0.6rem; color: #a0aec0; margin-top: 2px; }
    .recharge-operator-rate { font-size: 0.8rem; font-weight: 700; color: #00b4d8; }
    
    /* Insurance Section */
    .insurance-all-section { background: #ffffff; border-radius: 16px; margin-bottom: 24px; border: 1px solid #e8ecf1; overflow: hidden; display: none; }
    .insurance-all-section.show { display: block; }
    .insurance-all-header { padding: 12px 16px; background: #f8f9fa; border-bottom: 1px solid #e8ecf1; display: flex; justify-content: space-between; align-items: center; }
    .insurance-all-header h4 { font-size: 0.85rem; font-weight: 700; color: #1a1a2e; }
    .close-insurance { background: none; border: none; font-size: 0.7rem; color: #ff6b6b; cursor: pointer; padding: 4px 8px; border-radius: 20px; }
    .insurance-all-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; padding: 16px; }
    .insurance-all-item { background: #f8f9fa; border-radius: 12px; padding: 12px; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; text-align: center; }
    .insurance-all-item:active { transform: scale(0.97); background: #f0f2f5; }
    .insurance-all-icon { font-size: 1.8rem; margin-bottom: 6px; }
    .insurance-all-name { font-size: 0.7rem; font-weight: 600; color: #1a1a2e; }
    .insurance-all-desc { font-size: 0.55rem; color: #6c757d; margin-top: 4px; }
    .insurance-all-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 4px; font-weight: 500; }
    .category-divider { grid-column: span 2; background: #e8ecf1; padding: 8px 12px; border-radius: 8px; margin: 5px 0; font-size: 0.7rem; font-weight: 700; color: #1a1a2e; }
    
    /* Popular Services Section - Continuous Scroll */
    .popular-services-section { background: #ffffff; border-radius: 20px; margin-bottom: 24px; padding: 16px 0; border: 1px solid #e8ecf1; overflow: hidden; }
    .popular-header { padding: 0 16px 12px 16px; display: flex; justify-content: space-between; align-items: center; }
    .popular-title { display: flex; align-items: center; gap: 8px; }
    .popular-title i { font-size: 1.3rem; color: #00b4d8; background: rgba(0,180,216,0.1); padding: 8px; border-radius: 12px; }
    .popular-title h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .more-link { font-size: 0.65rem; color: #00b4d8; font-weight: 500; cursor: pointer; background: #e6f7ff; padding: 4px 12px; border-radius: 20px; transition: 0.2s; }
    .more-link:active { transform: scale(0.95); }
    
    .scroll-line-left { width: 100%; overflow: hidden; white-space: nowrap; margin-bottom: 16px; position: relative; }
    .scroll-line-left .scroll-track { display: inline-flex; gap: 12px; animation: scrollLeft 30s linear infinite; white-space: nowrap; }
    .scroll-line-left:hover .scroll-track { animation-play-state: paused; }
    @keyframes scrollLeft { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    
    .scroll-line-right { width: 100%; overflow: hidden; white-space: nowrap; position: relative; }
    .scroll-line-right .scroll-track { display: inline-flex; gap: 12px; animation: scrollRight 30s linear infinite; white-space: nowrap; }
    .scroll-line-right:hover .scroll-track { animation-play-state: paused; }
    @keyframes scrollRight { 0% { transform: translateX(-50%); } 100% { transform: translateX(0); } }
    
    .popular-service-card { display: inline-flex; flex-direction: column; align-items: center; justify-content: center; min-width: 100px; background: #f8f9fa; border-radius: 16px; padding: 12px 8px; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; text-align: center; }
    .popular-service-card:active { transform: scale(0.95); background: #f0f2f5; }
    .popular-service-icon { font-size: 1.5rem; margin-bottom: 6px; }
    .popular-service-name { font-size: 0.7rem; font-weight: 600; color: #4a5568; white-space: normal; }
    .popular-service-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 3px; font-weight: 500; white-space: normal; }
    
    /* Popular Modal */
    .popular-modal { display: none; position: fixed; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; top: 0; left: 0; right: 0; bottom: 0; align-items: center; justify-content: center; }
    .popular-modal.show { display: flex; }
    .popular-modal-content { background: white; border-radius: 28px; width: 90%; max-width: 450px; max-height: 80vh; overflow-y: auto; padding: 20px; position: relative; animation: modalPop 0.3s ease; }
    @keyframes modalPop { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }
    .popular-modal-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
    .popular-modal-item { background: #f8f9fa; border-radius: 12px; padding: 12px 6px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; }
    .popular-modal-item:active { transform: scale(0.95); background: #f0f2f5; }
    .popular-modal-icon { font-size: 1.5rem; margin-bottom: 6px; }
    .popular-modal-name { font-size: 0.65rem; font-weight: 600; color: #4a5568; }
    .popular-modal-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 3px; font-weight: 500; }
    .popular-modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid #e8ecf1; }
    .popular-modal-header h3 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; }
    .close-popular-modal { background: none; border: none; font-size: 1.3rem; cursor: pointer; color: #6c757d; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .close-popular-modal:hover { background: #f0f2f5; }
    
    /* Other Pages */
    .page-content { display: none; }
    .page-content.active-page { display: block; }
    .commission-card { background: linear-gradient(135deg, #1a1a2e, #16213e); border-radius: 16px; padding: 18px; color: white; margin-bottom: 16px; }
    .commission-amount { font-size: 1.8rem; font-weight: 800; margin: 8px 0; }
    .commission-desc { font-size: 0.75rem; opacity: 0.8; margin-top: 8px; }
    .logout-btn { width: 100%; padding: 14px; background: #fff0f0; border: 1px solid #ffcdcd; border-radius: 12px; color: #ff6b6b; font-weight: 600; margin-top: 20px; cursor: pointer; }
    .switch { position: relative; display: inline-block; width: 50px; height: 24px; }
    .switch input { opacity: 0; width: 0; height: 0; }
    .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 34px; }
    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
    input:checked + .slider { background-color: #00b4d8; }
    
    /* Service Modal */
    .service-modal { display: none; position: fixed; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; top: 0; left: 0; right: 0; bottom: 0; align-items: center; justify-content: center; }
    .service-modal.show { display: flex; }
    .service-modal-content { background: white; width: 280px; padding: 24px; border-radius: 28px; text-align: center; margin: auto; }
    .service-modal-icon { font-size: 3rem; margin-bottom: 12px; }
    .service-modal-title { font-size: 1.2rem; font-weight: 700; margin-bottom: 8px; }
    .service-modal-desc { font-size: 0.75rem; color: #6c757d; margin-bottom: 20px; }
    .service-modal-close { background: #00b4d8; color: white; border: none; padding: 10px 20px; border-radius: 40px; font-weight: 600; cursor: pointer; width: 100%; }
    .toast-message { position: fixed; bottom: 80px; left: 16px; right: 16px; background: #1a1a2e; padding: 12px; border-radius: 12px; text-align: center; font-weight: 500; color: white; z-index: 2000; max-width: 500px; margin: 0 auto; animation: fadeUp 0.3s ease; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    
    /* GST Modal */
    .gst-modal { display: none; position: fixed; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; top: 0; left: 0; right: 0; bottom: 0; align-items: center; justify-content: center; }
    .gst-modal.show { display: flex; }
    .gst-modal-content { background: white; border-radius: 28px; width: 92%; max-width: 450px; max-height: 80vh; overflow-y: auto; padding: 20px; position: relative; animation: modalPop 0.3s ease; }
    .gst-modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid #e8ecf1; }
    .gst-modal-header h3 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; }
    .close-gst-modal { background: none; border: none; font-size: 1.3rem; cursor: pointer; color: #6c757d; }
    .gst-modal-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .gst-modal-item { background: #f8f9fa; border-radius: 12px; padding: 12px 8px; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid #e8ecf1; text-decoration: none; display: block; color: inherit; }
    .gst-modal-item:active { transform: scale(0.95); background: #f0f2f5; }
    .gst-modal-icon { font-size: 1.8rem; margin-bottom: 4px; }
    .gst-modal-name { font-size: 0.65rem; font-weight: 600; color: #4a5568; line-height: 1.2; }
    .gst-modal-offer { font-size: 0.55rem; color: #00b4d8; margin-top: 2px; font-weight: 500; }
    
    /* Bottom Navigation */
    .bottom-nav { position: fixed; bottom: 0; left: 0; right: 0; background: rgba(255,255,255,0.98); border-top: 1px solid #e8ecf1; display: flex; justify-content: space-around; align-items: center; padding: 8px 16px 20px; z-index: 100; max-width: 500px; margin: 0 auto; backdrop-filter: blur(10px); }
    .nav-item { display: flex; flex-direction: column; align-items: center; gap: 4px; background: transparent; border: none; cursor: pointer; padding: 6px 12px; border-radius: 30px; font-family: 'Inter', sans-serif; flex: 1; max-width: 80px; text-decoration: none; }
    .nav-item i { font-size: 1.3rem; color: #a0aec0; }
    .nav-item span { font-size: 0.65rem; font-weight: 600; color: #a0aec0; }
    .nav-item.active i, .nav-item.active span { color: #00b4d8; }
    
    @media (max-width: 400px) {
        .banking-finance-grid { grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .banking-finance-card { padding: 8px 4px; }
        .banking-finance-card .bf-icon { font-size: 1.4rem; }
        .banking-finance-card .bf-name { font-size: 0.5rem; }
        .banking-finance-card .bf-offer { font-size: 0.45rem; }
        .gst-grid { grid-template-columns: repeat(2, 1fr); gap: 8px; }
        .gst-card { padding: 8px 4px; min-height: 75px; }
        .gst-card .gst-icon { font-size: 1.3rem; }
        .gst-card .gst-name { font-size: 0.5rem; }
        .tax-compliance-grid { grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .tax-compliance-card { padding: 8px 4px; min-height: 75px; }
        .tax-compliance-card .tc-icon { font-size: 1.3rem; }
        .tax-compliance-card .tc-name { font-size: 0.5rem; }
        .g2c-grid { grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .g2c-card { padding: 8px 4px; min-height: 75px; }
        .g2c-card .g2c-icon { font-size: 1.3rem; }
        .g2c-card .g2c-name { font-size: 0.5rem; }
    }
</style>
</head>
<body>

<?php include('includes/header-nav.php'); ?>

<div class="mobile-container">
    <div id="home-page" class="page-content active-page">
        
        <!-- Offer Cards -->
        <div class="offers-scroll-section">
            <div class="offers-header">
                <div class="offers-title"><i class="fas fa-tags"></i><h2>Exclusive Offers</h2></div>
            </div>
            <div class="scroll-container" id="offersScrollContainer">
                <div class="scroll-track" id="offersScrollTrack">
                    <div class="medium-offer-card card-0" onclick="handleOfferClick('KASHPE50', '₹50 cashback on first transfer')">
                        <div class="offer-card-top"><span class="offer-badge-small"><i class="fas fa-bolt"></i> FLASH</span><div class="offer-emoji-medium">🎉</div></div>
                        <div class="offer-card-middle"><div class="offer-value-medium">₹50 Cashback</div><div class="offer-desc-medium">First money transfer</div><div class="offer-mini-tag-medium">Min ₹199</div></div>
                        <div class="offer-card-bottom"><span class="promo-code-medium">KASHPE50</span><button class="copy-btn-medium" onclick="event.stopPropagation(); copyCode('KASHPE50')"><i class="fas fa-copy"></i> COPY</button></div>
                        <div class="offer-footer-medium"><span><i class="far fa-clock"></i> Limited</span><span><i class="fas fa-users"></i> All users</span></div>
                    </div>
                    <div class="medium-offer-card card-1" onclick="handleOfferClick('BILL10', '10% off on electricity/water/gas bills')">
                        <div class="offer-card-top"><span class="offer-badge-small"><i class="fas fa-bolt"></i> SALE</span><div class="offer-emoji-medium">⚡</div></div>
                        <div class="offer-card-middle"><div class="offer-value-medium">10% Off Bills</div><div class="offer-desc-medium">Electricity/Water/Gas</div><div class="offer-mini-tag-medium">Max ₹200 off</div></div>
                        <div class="offer-card-bottom"><span class="promo-code-medium">BILL10</span><button class="copy-btn-medium" onclick="event.stopPropagation(); copyCode('BILL10')"><i class="fas fa-copy"></i> COPY</button></div>
                        <div class="offer-footer-medium"><span><i class="far fa-calendar"></i> Till 30 June</span><span><i class="fas fa-tag"></i> All bills</span></div>
                    </div>
                    <div class="medium-offer-card card-2" onclick="handleOfferClick('RECHARGE20', '₹20 off on mobile recharge')">
                        <div class="offer-card-top"><span class="offer-badge-small"><i class="fas fa-fire"></i> WEEKEND</span><div class="offer-emoji-medium">📱</div></div>
                        <div class="offer-card-middle"><div class="offer-value-medium">₹20 Off</div><div class="offer-desc-medium">Mobile Recharge</div><div class="offer-mini-tag-medium">Min ₹199</div></div>
                        <div class="offer-card-bottom"><span class="promo-code-medium">RECHARGE20</span><button class="copy-btn-medium" onclick="event.stopPropagation(); copyCode('RECHARGE20')"><i class="fas fa-copy"></i> COPY</button></div>
                        <div class="offer-footer-medium"><span><i class="far fa-clock"></i> Limited slots</span><span><i class="fas fa-mobile"></i> Prepaid/Postpaid</span></div>
                    </div>
                    <div class="medium-offer-card card-3" onclick="handleOfferClick('AEPSFREE', 'Zero convenience fee on AEPS')">
                        <div class="offer-card-top"><span class="offer-badge-small"><i class="fas fa-star"></i> EXCLUSIVE</span><div class="offer-emoji-medium">🏧</div></div>
                        <div class="offer-card-middle"><div class="offer-value-medium">Free AEPS</div><div class="offer-desc-medium">Zero convenience fee</div><div class="offer-mini-tag-medium">Upto ₹10,000</div></div>
                        <div class="offer-card-bottom"><span class="promo-code-medium">AEPSFREE</span><button class="copy-btn-medium" onclick="event.stopPropagation(); copyCode('AEPSFREE')"><i class="fas fa-copy"></i> COPY</button></div>
                        <div class="offer-footer-medium"><span><i class="far fa-calendar"></i> Valid for all</span><span><i class="fas fa-shield-alt"></i> Secure</span></div>
                    </div>
                    <div class="medium-offer-card card-4" onclick="handleOfferClick('PAN100', '₹100 off on new PAN application')">
                        <div class="offer-card-top"><span class="offer-badge-small"><i class="fas fa-gem"></i> NEW</span><div class="offer-emoji-medium">🆔</div></div>
                        <div class="offer-card-middle"><div class="offer-value-medium">₹100 Off</div><div class="offer-desc-medium">New PAN Card</div><div class="offer-mini-tag-medium">Instant issuance</div></div>
                        <div class="offer-card-bottom"><span class="promo-code-medium">PAN100</span><button class="copy-btn-medium" onclick="event.stopPropagation(); copyCode('PAN100')"><i class="fas fa-copy"></i> COPY</button></div>
                        <div class="offer-footer-medium"><span><i class="far fa-calendar"></i> Till 31 July</span><span><i class="fas fa-id-card"></i> New users</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ BANKING & FINANCE SECTION ============ -->
        <div class="banking-finance-section">
            <div class="banking-finance-header">
                <div class="title">
                    <i class="fas fa-university"></i>
                    <h3>Banking & Finance</h3>
                </div>
                <span class="more-link" onclick="window.location.href='banking-finance.php'">View All →</span>
            </div>
            <div class="banking-finance-grid">
                <?php 
                $firstBF = array_slice($bankingFinanceServices, 0, 8);
                foreach ($firstBF as $service): 
                ?>
                <a href="<?= $service['link'] ?>" class="banking-finance-card">
                    <div class="bf-icon"><?= $service['icon'] ?></div>
                    <div class="bf-name"><?= htmlspecialchars($service['name']) ?></div>
                    <div class="bf-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    <div class="bf-arrow"><i class="fas fa-chevron-right"></i></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ============ GST SECTION ============ -->
        <div class="gst-section">
            <div class="gst-header">
                <div class="title">
                    <i class="fas fa-file-invoice"></i>
                    <h3>GST Services</h3>
                </div>
                <span class="more-link" onclick="showAllGSTServices()">View All →</span>
            </div>
            <div class="gst-grid">
                <?php 
                $firstGST = array_slice($gstServices, 0, 6);
                foreach ($firstGST as $service): 
                ?>
                <a href="<?= $service['link'] ?>.php" class="gst-card">
                    <div class="gst-icon"><?= $service['icon'] ?></div>
                    <div class="gst-name"><?= htmlspecialchars($service['name']) ?></div>
                    <div class="gst-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    <div class="gst-arrow"><i class="fas fa-chevron-right"></i></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ============ GST MODAL (All Services) ============ -->
        <div class="gst-modal" id="gstModal">
            <div class="gst-modal-content">
                <div class="gst-modal-header">
                    <h3><i class="fas fa-file-invoice" style="color:#00b4d8;"></i> All GST Services</h3>
                    <button class="close-gst-modal" onclick="closeGSTModal()">&times;</button>
                </div>
                <div class="gst-modal-grid">
                    <?php foreach ($gstServices as $service): ?>
                    <a href="<?= $service['link'] ?>.php" class="gst-modal-item" onclick="closeGSTModal()">
                        <div class="gst-modal-icon"><?= $service['icon'] ?></div>
                        <div class="gst-modal-name"><?= htmlspecialchars($service['name']) ?></div>
                        <div class="gst-modal-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- ============ TAX & COMPLIANCE SECTION ============ -->
        <div class="tax-compliance-section">
            <div class="tax-compliance-header">
                <div class="title">
                    <i class="fas fa-gavel"></i>
                    <h3>Tax & Compliance</h3>
                </div>
                <span class="more-link" onclick="showAllTaxCompliance()">View All →</span>
            </div>
            <div class="tax-compliance-grid">
                <?php 
                $firstTC = array_slice($taxComplianceServices, 0, 8);
                foreach ($firstTC as $service): 
                ?>
                <a href="<?= $service['link'] ?>" class="tax-compliance-card">
                    <div class="tc-icon"><?= $service['icon'] ?></div>
                    <div class="tc-name"><?= htmlspecialchars($service['name']) ?></div>
                    <div class="tc-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    <div class="tc-arrow"><i class="fas fa-chevron-right"></i></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ============ TAX & COMPLIANCE MODAL (All Services) ============ -->
        <div class="tax-modal" id="taxModal">
            <div class="tax-modal-content">
                <div class="tax-modal-header">
                    <h3><i class="fas fa-gavel" style="color:#00b4d8;"></i> All Tax & Compliance Services</h3>
                    <button class="close-tax-modal" onclick="closeTaxModal()">&times;</button>
                </div>
                <div class="tax-modal-grid">
                    <?php foreach ($taxComplianceServices as $service): ?>
                    <a href="<?= $service['link'] ?>" class="tax-modal-item" onclick="closeTaxModal()">
                        <div class="tax-modal-icon"><?= $service['icon'] ?></div>
                        <div class="tax-modal-name"><?= htmlspecialchars($service['name']) ?></div>
                        <div class="tax-modal-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- ============ GOVERNMENT G2C SECTION ============ -->
        <div class="g2c-section">
            <div class="g2c-header">
                <div class="title">
                    <i class="fas fa-city"></i>
                    <h3>Government G2C Services</h3>
                </div>
                <span class="more-link" onclick="showAllG2CServices()">View All →</span>
            </div>
            <div class="g2c-grid">
                <?php 
                $firstG2C = array_slice($g2cServices, 0, 8);
                foreach ($firstG2C as $service): 
                ?>
                <a href="<?= $service['link'] ?>" class="g2c-card">
                    <div class="g2c-icon"><?= $service['icon'] ?></div>
                    <div class="g2c-name"><?= htmlspecialchars($service['name']) ?></div>
                    <div class="g2c-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    <div class="g2c-arrow"><i class="fas fa-chevron-right"></i></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ============ GOVERNMENT G2C MODAL (All Services) ============ -->
        <div class="g2c-modal" id="g2cModal">
            <div class="g2c-modal-content">
                <div class="g2c-modal-header">
                    <h3><i class="fas fa-city" style="color:#00b4d8;"></i> All Government G2C Services</h3>
                    <button class="close-g2c-modal" onclick="closeG2CModal()">&times;</button>
                </div>
                <div class="g2c-modal-grid">
                    <?php foreach ($g2cServices as $service): ?>
                    <a href="<?= $service['link'] ?>" class="g2c-modal-item" onclick="closeG2CModal()">
                        <div class="g2c-modal-icon"><?= $service['icon'] ?></div>
                        <div class="g2c-modal-name"><?= htmlspecialchars($service['name']) ?></div>
                        <div class="g2c-modal-offer"><?= htmlspecialchars($service['offer']) ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Recharge & Bills -->
        <div class="service-category">
            <div class="category-header">
                <div class="title"><i class="fas fa-mobile-alt"></i><h3>Recharge & Bills</h3></div>
                <span class="more-link" onclick="showAllRechargeOperators()">More →</span>
            </div>
            <div class="grid-4">
                <div class="service-card" onclick="openServiceModal('Mobile Recharge', 'Prepaid / Postpaid / International', '📱', '5% cashback')"><div class="service-icon">📱</div><div class="service-name">Mobile</div><div class="service-offer">5% cashback</div></div>
                <div class="service-card" onclick="openServiceModal('Tuition Fees', 'School / College Fees Payment', '🎓', 'Instant')"><div class="service-icon">🎓</div><div class="service-name">Tuition Fees</div><div class="service-offer">Instant</div></div>
                <div class="service-card" onclick="openServiceModal('Electricity Bill', 'Pay Electricity Bill', '⚡', '10% off')"><div class="service-icon">⚡</div><div class="service-name">Electricity</div><div class="service-offer">10% off</div></div>
                <div class="service-card" onclick="openServiceModal('Loan Repayment', 'EMI / Loan Payment', '🏦', 'No fees')"><div class="service-icon">🏦</div><div class="service-name">Loan Repayment</div><div class="service-offer">No fees</div></div>
            </div>
            <div class="jio-sim-card" onclick="showToast('Jio SIM home delivery coming soon')"><div class="jio-info"><i class="fas fa-sim-card"></i><span>Buy Jio SIM: Home Delivered</span></div><i class="fas fa-chevron-right"></i></div>
        </div>

        <!-- All Recharge Operators Section -->
        <div class="recharge-operators-section" id="rechargeOperatorsSection">
            <div class="recharge-operators-header">
                <h4><i class="fas fa-tower-cell"></i> All Recharge Operators</h4>
                <button class="close-recharge" onclick="closeRechargeOperators()">✕ Close</button>
            </div>
            <div class="recharge-operators-grid" id="rechargeOperatorsGrid"></div>
        </div>

        <!-- Metro Cards -->
        <div class="service-category">
            <div class="category-header">
                <div class="title"><i class="fas fa-subway"></i><h3>Metro Card Recharge</h3></div>
                <span class="more-link" onclick="showAllMetroCards()">More →</span>
            </div>
            <div class="grid-4">
                <div class="service-card" onclick="selectMetroCard('Delhi Metro')"><div class="service-icon">🚇</div><div class="service-name">Delhi Metro</div><div class="service-offer">DMRC Card</div></div>
                <div class="service-card" onclick="selectMetroCard('Mumbai Metro')"><div class="service-icon">🚈</div><div class="service-name">Mumbai Metro</div><div class="service-offer">MMRDA Card</div></div>
                <div class="service-card" onclick="selectMetroCard('Bangalore Metro')"><div class="service-icon">🚇</div><div class="service-name">Bangalore Metro</div><div class="service-offer">Namma Metro</div></div>
                <div class="service-card" onclick="selectMetroCard('Kolkata Metro')"><div class="service-icon">🚊</div><div class="service-name">Kolkata Metro</div><div class="service-offer">KMRC Card</div></div>
            </div>
        </div>

        <!-- All Metro Cards Section -->
        <div class="metro-cards-section" id="allMetroCardsSection">
            <div class="metro-cards-header">
                <h4><i class="fas fa-subway"></i> All Metro Cards</h4>
                <button class="close-metro" onclick="closeAllMetroCards()">✕ Close</button>
            </div>
            <div class="metro-cards-grid" id="metroCardsGrid"></div>
        </div>

        <!-- Gift Cards -->
        <div class="service-category">
            <div class="category-header">
                <div class="title"><i class="fas fa-gift"></i><h3>Gift Cards</h3></div>
                <span class="more-link" onclick="showAllGiftCards()">More →</span>
            </div>
            <div class="grid-4">
                <div class="service-card" onclick="buyGiftCard('Amazon', '0%')"><div class="service-icon">🛍️</div><div class="service-name">Amazon</div><div class="service-offer">0% Commission</div></div>
                <div class="service-card" onclick="buyGiftCard('Flipkart', '0%')"><div class="service-icon">📦</div><div class="service-name">Flipkart</div><div class="service-offer">0% Commission</div></div>
                <div class="service-card" onclick="buyGiftCard('Myntra', '0.4%')"><div class="service-icon">👕</div><div class="service-name">Myntra</div><div class="service-offer">0.4% Commission</div></div>
                <div class="service-card" onclick="buyGiftCard('Swiggy', '0%')"><div class="service-icon">🍕</div><div class="service-name">Swiggy</div><div class="service-offer">0% Commission</div></div>
            </div>
        </div>

        <!-- All Gift Cards Section -->
        <div class="giftcards-section" id="allGiftCardsSection">
            <div class="giftcards-header">
                <h4><i class="fas fa-gift"></i> All Gift Cards (<?= count($giftVouchers) ?> Cards)</h4>
                <button class="close-giftcards" onclick="closeAllGiftCards()">✕ Close</button>
            </div>
            <div class="giftcards-grid" id="giftCardsGrid">
                <?php foreach ($giftVouchers as $voucher): ?>
                <div class="giftcard-item" onclick="buyGiftCardWithCode('<?= addslashes($voucher['name']) ?>', '<?= $voucher['commission'] ?>', '<?= $voucher['code'] ?>')">
                    <div class="giftcard-info">
                        <div class="giftcard-name"><?= htmlspecialchars($voucher['name']) ?></div>
                        <div class="giftcard-brand"><?= htmlspecialchars($voucher['brand']) ?></div>
                        <div class="giftcard-code">Code: <?= $voucher['code'] ?></div>
                    </div>
                    <div class="giftcard-commission"><?= $voucher['commission'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Loans -->
        <div class="service-category">
            <div class="category-header"><div class="title"><i class="fas fa-hand-holding-usd"></i><h3>Loans</h3></div><span class="more-link" onclick="showToast('View all loan options')">More →</span></div>
            <div class="grid-4">
                <div class="service-card" onclick="openServiceModal('Personal Loan', 'Instant personal loan up to ₹10L', '👤', 'Low interest')"><div class="service-icon">👤</div><div class="service-name">Personal Loan</div><div class="service-offer">Low interest</div></div>
                <div class="service-card" onclick="openServiceModal('Mutual Funds Loan', 'Loan against mutual funds', '📈', 'Quick approval')"><div class="service-icon">📈</div><div class="service-name">Mutual Funds Loan</div><div class="service-offer">Quick approval</div></div>
                <div class="service-card" onclick="openServiceModal('Gold Loan', 'Loan against gold', '🥇', 'Lowest rates')"><div class="service-icon">🥇</div><div class="service-name">Gold Loan</div><div class="service-offer">Lowest rates</div></div>
                <div class="service-card" onclick="openServiceModal('Credit Score', 'Check your credit score', '📊', 'FREE')"><div class="service-icon">📊</div><div class="service-name">Credit Score</div><div class="service-offer free-badge">FREE</div></div>
            </div>
        </div>

        <!-- Insurance -->
        <div class="service-category">
            <div class="category-header"><div class="title"><i class="fas fa-shield-alt"></i><h3>Insurance</h3></div><span class="more-link" onclick="showAllInsurance()">More →</span></div>
            <div class="grid-4">
                <div class="service-card" onclick="selectInsurance('Health Insurance', 'Medical coverage up to ₹1Cr', '🏥', 'Starting ₹500/mo')"><div class="service-icon">🏥</div><div class="service-name">Health</div><div class="service-offer">Starting ₹500/mo</div></div>
                <div class="service-card" onclick="selectInsurance('Life Insurance', 'Secure your family\'s future', '👨‍👩‍👧‍👦', 'Tax Benefits')"><div class="service-icon">👨‍👩‍👧‍👦</div><div class="service-name">Life</div><div class="service-offer">Tax Benefits</div></div>
                <div class="service-card" onclick="selectInsurance('Car Insurance', 'Protect your car', '🚗', 'Save up to 50%')"><div class="service-icon">🚗</div><div class="service-name">Car</div><div class="service-offer">Save up to 50%</div></div>
                <div class="service-card" onclick="selectInsurance('Business Insurance', 'Protect your business', '🏢', 'Custom Plans')"><div class="service-icon">🏢</div><div class="service-name">Business</div><div class="service-offer">Custom Plans</div></div>
            </div>
        </div>

        <!-- All Insurance Section -->
        <div class="insurance-all-section" id="allInsuranceSection">
            <div class="insurance-all-header">
                <h4><i class="fas fa-shield-alt"></i> All Insurance Plans</h4>
                <button class="close-insurance" onclick="closeAllInsurance()">✕ Close</button>
            </div>
            <div class="insurance-all-grid" id="insuranceAllGrid"></div>
        </div>

        <!-- Travel Services -->
        <div class="travel-section">
            <div class="travel-header"><div class="title"><i class="fas fa-plane-departure"></i><h3>Travel Services</h3></div><span class="view-all" onclick="showToast('View all travel deals')">View All →</span></div>
            <div class="travel-grid">
                <div class="travel-small-card" onclick="openTravelModal('Flights', 'Book domestic & international flights', '✈️', 'Upto ₹500 off')"><div class="travel-icon">✈️</div><div class="travel-name">Flights</div><div class="travel-offer">Upto ₹500 off</div></div>
                <div class="travel-small-card" onclick="openTravelModal('Trains', 'Book train tickets - IRCTC', '🚂', 'Cashback ₹100')"><div class="travel-icon">🚂</div><div class="travel-name">Trains</div><div class="travel-offer">Cashback ₹100</div></div>
                <div class="travel-small-card" onclick="openTravelModal('Buses', 'Book bus tickets', '🚌', 'Save 15%')"><div class="travel-icon">🚌</div><div class="travel-name">Buses</div><div class="travel-offer">Save 15%</div></div>
            </div>
        </div>

        <!-- Popular Services - Continuous Scroll -->
        <div class="popular-services-section">
            <div class="popular-header">
                <div class="popular-title"><i class="fas fa-star"></i><h3>Popular Services</h3></div>
                <span class="more-link" onclick="showAllPopularServices()">More →</span>
            </div>
            
            <!-- Line 1 - Scroll Left -->
            <div class="scroll-line-left">
                <div class="scroll-track">
                    <?php foreach ($popularServicesLine1 as $service): ?>
                    <div class="popular-service-card" onclick="openServiceModal('<?= $service['name'] ?>', '<?= $service['desc'] ?>', '<?= $service['icon'] ?>', '<?= $service['offer'] ?>')">
                        <div class="popular-service-icon"><?= $service['icon'] ?></div>
                        <div class="popular-service-name"><?= $service['name'] ?></div>
                        <div class="popular-service-offer"><?= $service['offer'] ?></div>
                    </div>
                    <?php endforeach; ?>
                    <?php foreach ($popularServicesLine1 as $service): ?>
                    <div class="popular-service-card" onclick="openServiceModal('<?= $service['name'] ?>', '<?= $service['desc'] ?>', '<?= $service['icon'] ?>', '<?= $service['offer'] ?>')">
                        <div class="popular-service-icon"><?= $service['icon'] ?></div>
                        <div class="popular-service-name"><?= $service['name'] ?></div>
                        <div class="popular-service-offer"><?= $service['offer'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Line 2 - Scroll Right -->
            <div class="scroll-line-right">
                <div class="scroll-track">
                    <?php foreach ($popularServicesLine2 as $service): ?>
                    <div class="popular-service-card" onclick="openServiceModal('<?= $service['name'] ?>', '<?= $service['desc'] ?>', '<?= $service['icon'] ?>', '<?= $service['offer'] ?>')">
                        <div class="popular-service-icon"><?= $service['icon'] ?></div>
                        <div class="popular-service-name"><?= $service['name'] ?></div>
                        <div class="popular-service-offer"><?= $service['offer'] ?></div>
                    </div>
                    <?php endforeach; ?>
                    <?php foreach ($popularServicesLine2 as $service): ?>
                    <div class="popular-service-card" onclick="openServiceModal('<?= $service['name'] ?>', '<?= $service['desc'] ?>', '<?= $service['icon'] ?>', '<?= $service['offer'] ?>')">
                        <div class="popular-service-icon"><?= $service['icon'] ?></div>
                        <div class="popular-service-name"><?= $service['name'] ?></div>
                        <div class="popular-service-offer"><?= $service['offer'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Popular Services Modal -->
        <div class="popular-modal" id="popularModal">
            <div class="popular-modal-content">
                <div class="popular-modal-header">
                    <h3><i class="fas fa-star" style="color:#00b4d8;"></i> All Popular Services</h3>
                    <button class="close-popular-modal" onclick="closePopularModal()">&times;</button>
                </div>
                <div class="popular-modal-grid" id="popularModalGrid">
                    <?php foreach ($allPopularServices as $service): ?>
                    <div class="popular-modal-item" onclick="openServiceModal('<?= $service['name'] ?>', '<?= $service['desc'] ?>', '<?= $service['icon'] ?>', '<?= $service['offer'] ?>'); closePopularModal();">
                        <div class="popular-modal-icon"><?= $service['icon'] ?></div>
                        <div class="popular-modal-name"><?= $service['name'] ?></div>
                        <div class="popular-modal-offer"><?= $service['offer'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="section-title"><h3>Recent Activity</h3></div>
        <div class="activity-list">
            <div class="activity-item"><div><div class="activity-icon">📱</div><div class="activity-details"><h4>Mobile Recharge</h4><p>Jio Prepaid ₹399</p></div></div><div><div class="amount">₹399</div><div class="time">1h ago</div></div></div>
            <div class="activity-item"><div><div class="activity-icon">⚡</div><div class="activity-details"><h4>Electricity Bill</h4><p>Bill Payment</p></div></div><div><div class="amount">₹1,250</div><div class="time">2h ago</div></div></div>
            <div class="activity-item"><div><div class="activity-icon">✈️</div><div class="activity-details"><h4>Flight Booking</h4><p>DEL → BOM</p></div></div><div><div class="amount">₹3,499</div><div class="time">Yesterday</div></div></div>
        </div>
    </div>
    
    <!-- Other Pages Content -->
    <div id="notifications-page" class="page-content"><div class="section-title"><h3>Notifications</h3></div><div class="activity-list"><div class="activity-item"><div><div class="activity-icon">🎉</div><div class="activity-details"><h4>Welcome Offer</h4><p>Get ₹50 cashback on first transaction</p></div></div><div class="time">New</div></div><div class="activity-item"><div><div class="activity-icon">💰</div><div class="activity-details"><h4>Commission Credited</h4><p>₹350 credited to your wallet</p></div></div><div class="time">Yesterday</div></div></div></div>
    <div id="commission-page" class="page-content"><div class="commission-card"><div>💰 Total Commission</div><div class="commission-amount"><?= $totalCommission ?></div><div class="commission-desc">This month earnings: <?= $monthEarning ?></div></div><div class="commission-card" style="background: linear-gradient(135deg, #2c3e50, #3498db);"><div>💸 Wallet Balance</div><div class="commission-amount"><?= $walletBalance ?></div><div class="commission-desc">Available for withdrawal</div><button class="logout-btn" style="background:#fff; color:#2c3e50; margin-top:12px;" onclick="showToast('Withdrawal initiated')">Withdraw</button></div></div>
    <div id="support-page" class="page-content"><div class="section-title"><h3>Support</h3></div><div class="activity-list"><div class="activity-item"><div><div class="activity-icon">📞</div><div class="activity-details"><h4>Call Support</h4><p>1800-123-4567</p></div></div><i class="fas fa-phone" style="color:#00b4d8;"></i></div><div class="activity-item"><div><div class="activity-icon">✉️</div><div class="activity-details"><h4>Email Support</h4><p>support@kseva.com</p></div></div><i class="fas fa-envelope" style="color:#00b4d8;"></i></div><div class="activity-item"><div><div class="activity-icon">💬</div><div class="activity-details"><h4>Live Chat</h4><p>Available 9 AM - 9 PM</p></div></div><i class="fas fa-comment" style="color:#00b4d8;"></i></div></div></div>
    <div id="settings-page" class="page-content"><div class="section-title"><h3>Settings</h3></div><div class="activity-list"><div class="activity-item"><div><div class="activity-icon">🔔</div><div class="activity-details"><h4>Notifications</h4><p>Enable push notifications</p></div></div><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label></div>
    <div class="activity-item"><div><div class="activity-icon">🔒</div><div class="activity-details"><h4>Privacy Policy</h4><p>View our privacy policy</p></div></div><i class="fas fa-chevron-right"></i></div>
    <div class="activity-item"><div><div class="activity-icon">⏰</div><div class="activity-details"><h4>Refund</h4><p>View our Refund </p></div></div><i class="fas fa-chevron-right"></i></div>
    <div class="activity-item"><div><div class="activity-icon">💰</div><div class="activity-details"><h4>Cancellation</h4><p>View our cancellation</p></div></div><i class="fas fa-chevron-right"></i></div>
    <div class="activity-item"><div><div class="activity-icon">📜</div><div class="activity-details"><h4>Terms & Conditions</h4><p>Read our terms</p></div></div><i class="fas fa-chevron-right"></i></div></div></div>
</div>

<?php include('includes/bottom-nav.php'); ?>

<script>
// Auto-scroll for offers
const scrollContainer = document.getElementById('offersScrollContainer');
let autoScrollInterval = null;
let isAutoScrolling = true;
let scrollSpeed = 1.2;

function performAutoScroll() {
    if (scrollContainer && isAutoScrolling && scrollContainer.scrollWidth > scrollContainer.clientWidth) {
        const maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
        let newScroll = scrollContainer.scrollLeft + scrollSpeed;
        if (newScroll >= maxScroll) newScroll = 0;
        scrollContainer.scrollLeft = newScroll;
    }
}

function startAutoScroll() {
    if (autoScrollInterval) clearInterval(autoScrollInterval);
    autoScrollInterval = setInterval(performAutoScroll, 30);
}

if (scrollContainer) setTimeout(() => startAutoScroll(), 100);

function copyCode(code) {
    navigator.clipboard.writeText(code).then(() => showToast(`✅ Copied ${code}! Use at checkout`)).catch(() => showToast(`📋 Code: ${code}`));
}

function handleOfferClick(code, message) { showToast(`🎁 ${message}. Use code: ${code}`); }

function showToast(message) {
    let toast = document.querySelector('.toast-message');
    if (toast) toast.remove();
    toast = document.createElement('div');
    toast.className = 'toast-message';
    toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
    document.body.appendChild(toast);
    setTimeout(() => { toast.style.opacity = '0'; setTimeout(() => toast.remove(), 300); }, 2000);
}

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

function openTravelModal(title, desc, icon, offer) {
    document.getElementById('travelModalTitle').innerHTML = title;
    document.getElementById('travelModalDesc').innerHTML = desc;
    document.getElementById('travelModalIcon').innerHTML = icon;
    document.getElementById('travelModalOffer').innerHTML = offer;
    document.getElementById('travelModal').classList.add('show');
}

function closeTravelModal(event) {
    if (event && event.target !== event.currentTarget && !event.target.classList.contains('service-modal-close')) return;
    document.getElementById('travelModal').classList.remove('show');
    showToast('Travel booking started');
}

function closePopularModal() {
    document.getElementById('popularModal').classList.remove('show');
}

function showAllPopularServices() {
    document.getElementById('popularModal').classList.add('show');
}

// ============ GST FUNCTIONS ============
function showAllGSTServices() {
    document.getElementById('gstModal').classList.add('show');
    closeRechargeOperators();
    closeAllMetroCards();
    closeAllGiftCards();
    closeAllInsurance();
    closeTaxModal();
    closeG2CModal();
}

function closeGSTModal() {
    document.getElementById('gstModal').classList.remove('show');
}

// ============ TAX & COMPLIANCE FUNCTIONS ============
function showAllTaxCompliance() {
    document.getElementById('taxModal').classList.add('show');
    closeRechargeOperators();
    closeAllMetroCards();
    closeAllGiftCards();
    closeAllInsurance();
    closeGSTModal();
    closeG2CModal();
}

function closeTaxModal() {
    document.getElementById('taxModal').classList.remove('show');
}

// ============ GOVERNMENT G2C FUNCTIONS ============
function showAllG2CServices() {
    document.getElementById('g2cModal').classList.add('show');
    closeRechargeOperators();
    closeAllMetroCards();
    closeAllGiftCards();
    closeAllInsurance();
    closeGSTModal();
    closeTaxModal();
}

function closeG2CModal() {
    document.getElementById('g2cModal').classList.remove('show');
}

// Recharge Operators
const rechargeOperators = [
    { name: "Airtel", type: "Mobile", commission: "2.50%", icon: "📱" },
    { name: "JIO", type: "Mobile", commission: "1.00%", icon: "📱" },
    { name: "VI", type: "Mobile", commission: "4.00%", icon: "📱" },
    { name: "BSNL", type: "Mobile", commission: "5.00%", icon: "📡" },
    { name: "Tata Sky", type: "DTH", commission: "3.80%", icon: "📺" },
    { name: "Airtel DTH", type: "DTH", commission: "4.00%", icon: "📺" },
    { name: "Dish TV", type: "DTH", commission: "4.00%", icon: "📺" },
    { name: "Sun Direct", type: "DTH", commission: "3.30%", icon: "📺" }
];

function showAllRechargeOperators() {
    const grid = document.getElementById('rechargeOperatorsGrid');
    grid.innerHTML = '';
    rechargeOperators.forEach(op => {
        grid.innerHTML += `<div class="recharge-operator-item" onclick="selectRechargeOperator('${op.name}', '${op.commission}')">
            <div class="recharge-operator-left"><div class="recharge-operator-icon">${op.icon}</div>
            <div><div class="recharge-operator-name">${op.name}</div><div class="recharge-operator-type">${op.type}</div></div></div>
            <div class="recharge-operator-rate">${op.commission}</div></div>`;
    });
    document.getElementById('rechargeOperatorsSection').classList.add('show');
    closeAllMetroCards(); closeAllGiftCards(); closeAllInsurance(); closeGSTModal(); closeTaxModal(); closeG2CModal();
}
function closeRechargeOperators() { document.getElementById('rechargeOperatorsSection').classList.remove('show'); }
function selectRechargeOperator(operator, commission) { showToast(`Selected ${operator} - ${commission} commission`); closeRechargeOperators(); }

// Metro Cards
const metroCards = [
    { name: "Delhi Metro", code: "DMRC", icon: "🚇" }, { name: "Mumbai Metro", code: "MMRDA", icon: "🚈" },
    { name: "Bangalore Metro", code: "BMRCL", icon: "🚇" }, { name: "Kolkata Metro", code: "KMRC", icon: "🚊" },
    { name: "Chennai Metro", code: "CMRL", icon: "🚇" }, { name: "Hyderabad Metro", code: "HMRL", icon: "🚈" },
    { name: "Lucknow Metro", code: "LMRC", icon: "🚇" }, { name: "Pune Metro", code: "PMRDA", icon: "🚈" },
    { name: "Jaipur Metro", code: "JMRC", icon: "🚇" }, { name: "Ahmedabad Metro", code: "GMRC", icon: "🚈" }
];
function showAllMetroCards() {
    const grid = document.getElementById('metroCardsGrid');
    grid.innerHTML = '';
    metroCards.forEach(metro => {
        grid.innerHTML += `<div class="metro-card-item" onclick="selectMetroCard('${metro.name}')">
            <div class="metro-card-icon">${metro.icon}</div><div class="metro-card-name">${metro.name}</div>
            <div class="metro-card-code">${metro.code}</div></div>`;
    });
    document.getElementById('allMetroCardsSection').classList.add('show');
    closeRechargeOperators(); closeAllGiftCards(); closeAllInsurance(); closeGSTModal(); closeTaxModal(); closeG2CModal();
}
function closeAllMetroCards() { document.getElementById('allMetroCardsSection').classList.remove('show'); }
function selectMetroCard(city) { showToast(`${city} Metro recharge - Enter amount to proceed`); closeAllMetroCards(); }

// Gift Cards
function showAllGiftCards() { document.getElementById('allGiftCardsSection').classList.add('show'); closeRechargeOperators(); closeAllMetroCards(); closeAllInsurance(); closeGSTModal(); closeTaxModal(); closeG2CModal(); }
function closeAllGiftCards() { document.getElementById('allGiftCardsSection').classList.remove('show'); }
function buyGiftCard(name, commission) { showToast(`Selected ${name} - Commission ${commission}`); }
function buyGiftCardWithCode(name, commission, code) { showToast(`Selected ${name} - Commission ${commission} | Code: ${code}`); closeAllGiftCards(); }

// Insurance
const insurancePlans = [
    { name: "Health Insurance", desc: "Medical coverage up to ₹1Cr", icon: "🏥", offer: "Starting ₹500/mo", category: "Personal" },
    { name: "Life Insurance", desc: "Secure your family's future", icon: "👨‍👩‍👧‍👦", offer: "Tax Benefits", category: "Personal" },
    { name: "Car Insurance", desc: "Protect your car with zero depreciation", icon: "🚗", offer: "Save up to 50%", category: "Personal" },
    { name: "Bike Insurance", desc: "Comprehensive bike coverage", icon: "🏍️", offer: "Instant Renewal", category: "Personal" },
    { name: "Travel Insurance", desc: "International trip coverage", icon: "✈️", offer: "COVID Cover", category: "Personal" },
    { name: "Term Insurance", desc: "High coverage at low cost", icon: "🛡️", offer: "Low Premium", category: "Personal" },
    { name: "Business Liability", desc: "Protect against lawsuits", icon: "🏢", offer: "Custom Coverage", category: "Business" },
    { name: "Property Insurance", desc: "Protect business property", icon: "🏭", offer: "Asset Protection", category: "Business" }
];
function showAllInsurance() {
    const grid = document.getElementById('insuranceAllGrid');
    grid.innerHTML = '';
    grid.innerHTML += `<div class="category-divider"><i class="fas fa-user"></i> Personal Insurance</div>`;
    insurancePlans.filter(p => p.category === "Personal").forEach(plan => {
        grid.innerHTML += `<div class="insurance-all-item" onclick="selectInsurance('${plan.name}', '${plan.desc}', '${plan.icon}', '${plan.offer}')">
            <div class="insurance-all-icon">${plan.icon}</div><div class="insurance-all-name">${plan.name}</div>
            <div class="insurance-all-desc">${plan.desc}</div><div class="insurance-all-offer">${plan.offer}</div></div>`;
    });
    grid.innerHTML += `<div class="category-divider"><i class="fas fa-building"></i> Business Insurance</div>`;
    insurancePlans.filter(p => p.category === "Business").forEach(plan => {
        grid.innerHTML += `<div class="insurance-all-item" onclick="selectInsurance('${plan.name}', '${plan.desc}', '${plan.icon}', '${plan.offer}')">
            <div class="insurance-all-icon">${plan.icon}</div><div class="insurance-all-name">${plan.name}</div>
            <div class="insurance-all-desc">${plan.desc}</div><div class="insurance-all-offer">${plan.offer}</div></div>`;
    });
    document.getElementById('allInsuranceSection').classList.add('show');
    closeRechargeOperators(); closeAllMetroCards(); closeAllGiftCards(); closeGSTModal(); closeTaxModal(); closeG2CModal();
}
function closeAllInsurance() { document.getElementById('allInsuranceSection').classList.remove('show'); }
function selectInsurance(name, desc, icon, offer) { showToast(`Selected ${name} - ${offer}`); closeAllInsurance(); }

// Event listeners
document.getElementById('serviceModal')?.addEventListener('click', function(e) { if (e.target === this) closeServiceModal(); });
document.getElementById('travelModal')?.addEventListener('click', function(e) { if (e.target === this) closeTravelModal(); });
document.getElementById('popularModal')?.addEventListener('click', function(e) { if (e.target === this) closePopularModal(); });
document.getElementById('gstModal')?.addEventListener('click', function(e) { if (e.target === this) closeGSTModal(); });
document.getElementById('taxModal')?.addEventListener('click', function(e) { if (e.target === this) closeTaxModal(); });
document.getElementById('g2cModal')?.addEventListener('click', function(e) { if (e.target === this) closeG2CModal(); });

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePopularModal();
        closeServiceModal();
        closeTravelModal();
        closeGSTModal();
        closeTaxModal();
        closeG2CModal();
        closeAllMetroCards();
        closeAllGiftCards();
        closeAllInsurance();
        closeRechargeOperators();
    }
});
</script>

<!-- Service Modal -->
<div class="service-modal" id="serviceModal" onclick="closeServiceModal(event)">
    <div class="service-modal-content" onclick="event.stopPropagation()">
        <div class="service-modal-icon" id="modalIcon">🏧</div>
        <div class="service-modal-title" id="modalTitle">Service</div>
        <div class="service-modal-desc" id="modalDesc">Description</div>
        <div class="service-modal-desc" id="modalOffer" style="color:#00b4d8; font-weight:600; margin-bottom:16px;"></div>
        <button class="service-modal-close" onclick="closeServiceModal()">Proceed</button>
    </div>
</div>

<!-- Travel Modal -->
<div class="service-modal" id="travelModal" onclick="closeTravelModal(event)">
    <div class="service-modal-content" onclick="event.stopPropagation()">
        <div class="service-modal-icon" id="travelModalIcon">✈️</div>
        <div class="service-modal-title" id="travelModalTitle">Flights</div>
        <div class="service-modal-desc" id="travelModalDesc">Book domestic & international flights</div>
        <div class="service-modal-desc" id="travelModalOffer" style="color:#00b4d8; font-weight:600; margin-bottom:16px;"></div>
        <button class="service-modal-close" onclick="closeTravelModal()">Book Now</button>
    </div>
</div>
</body>
</html>