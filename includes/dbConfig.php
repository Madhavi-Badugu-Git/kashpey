<?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kseva_mobile";
$conn = mysqli_connect($servername,$username,$password,$dbname) or die("Connection Failed: " . mysqli_connect_error());

$comp_name = "K-Seva";
$comp_title = "K-Seva";

$comp_mobile = "8885545255";
$comp_email = "support@k-seva.com";
$comp_address = "Flat No:1-8-506/2/b Prakash Nagar Begumpet Hyderabad - Telangana 500016, India";
$comp_pincode = "500016";
$comp_locality = "Hyderabad";

$comp_logo = "assets/logo/kseva.jpeg";
$comp_footer_logo = "assets/logo/footer-1.png";
$comp_favicon = "assets/logo/favicon-1.png";
$comp_web = "https://k-seva.com/";
$comp_noback_logo = "assets/logo/logo.png";

date_default_timezone_set('Asia/Kolkata');

?>