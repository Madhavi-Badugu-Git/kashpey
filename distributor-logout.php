<?php
session_start();

// Destroy all session variables
session_unset();
session_destroy();

// Redirect to distributor login page
header("Location: distributor-login");
exit();
?>