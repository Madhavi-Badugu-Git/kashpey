<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractive Popup Design</title>
    
    <!-- Add jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        h1 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            font-size: 3em;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        /* Popup styles */
        #newBanner {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background: white;
            max-width: 1000px;
            width: 95%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
            border-radius: 20px;
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        /* Overlay */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(5px);
            z-index: 9998;
            animation: fadeIn 0.3s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Floating button styles */
        .float {
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            z-index: 100;
            cursor: pointer;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .float:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .float .tooltiptext {
            visibility: hidden;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            padding: 8px 15px;
            position: absolute;
            z-index: 1;
            bottom: 120%;
            font-size: 14px;
            right: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            white-space: nowrap;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .float .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            right: 25px;
            border-width: 8px;
            border-style: solid;
            border-color: #764ba2 transparent transparent transparent;
        }

        .float:hover .tooltiptext {
            visibility: visible;
            animation: fadeInUp 0.3s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Submit button animation */
        .green-btn1 {
            animation: gradientShift 5s infinite alternate;
            padding: 12px 40px !important;
            border: none !important;
            color: white !important;
            cursor: pointer !important;
            border-radius: 50px !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            letter-spacing: 1px !important;
            text-transform: uppercase !important;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
            transition: all 0.3s ease !important;
            position: relative !important;
            overflow: hidden !important;
        }

        .green-btn1:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3) !important;
        }

        .green-btn1:active {
            transform: translateY(0);
        }

        .green-btn1::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .green-btn1:hover::after {
            width: 300px;
            height: 300px;
        }

        @keyframes gradientShift {
            0% { background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%); }
            25% { background: linear-gradient(45deg, #4facfe 0%, #00f2fe 100%); }
            50% { background: linear-gradient(45deg, #43e97b 0%, #38f9d7 100%); }
            75% { background: linear-gradient(45deg, #fa709a 0%, #fee140 100%); }
            100% { background: linear-gradient(45deg, #30cfd0 0%, #330867 100%); }
        }
        
        /* Close button */
        .popup_close {
            position: absolute;
            right: 15px;
            top: 15px;
            cursor: pointer;
            font-size: 24px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            background: linear-gradient(135deg, #ff6b6b, #ee5253);
            color: white;
            border-radius: 50%;
            z-index: 10;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(238, 82, 83, 0.3);
            font-weight: bold;
        }

        .popup_close:hover {
            transform: rotate(90deg) scale(1.1);
            background: linear-gradient(135deg, #ee5253, #ff6b6b);
            box-shadow: 0 8px 20px rgba(238, 82, 83, 0.4);
        }
        
        /* Side-by-side layout */
        .cont-row {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .cont-row article {
            flex: 1;
            min-width: 300px;
        }
        
        .cont-row article:first-child {
            padding: 0 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px 0 0 20px;
            position: relative;
            overflow: hidden;
        }
        
        .cont-row article:first-child::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .cont-row article:last-child {
            padding: 40px !important;
            background: white;
            border-radius: 0 20px 20px 0;
        }
        
        .add-sect {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        
        .add-sect img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .add-sect img:hover {
            transform: scale(1.05) rotate(0deg);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }
        
        /* Form styling */
        .frm-divide-main {
            width: 100%;
        }
        
        .heading {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .sub-heading {
            text-align: center;
            margin-bottom: 25px;
            font-size: 16px;
            color: #666;
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .sub-heading::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 3px;
        }
        
        .input-group {
            position: relative;
            margin-bottom: 20px;
        }
        
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .cont-box {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .cont-box:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.2);
            background: white;
        }
        
        .cont-box:focus + i {
            color: #764ba2;
            transform: translateY(-50%) scale(1.1);
        }
        
        select.cont-box {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 15px;
        }
        
        textarea.cont-box {
            padding: 12px 15px 12px 45px;
            resize: none;
            min-height: 80px;
        }
        
        #msg_p {
            margin-top: 15px;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            border-radius: 10px;
            animation: shake 0.5s ease-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        
        #gif_image_p {
            display: none;
            width: 50px;
            margin-top: 15px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Floating shapes background */
        .shape {
            position: fixed;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            z-index: -1;
        }
        
        .shape1 {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 10%;
            animation: moveShape1 15s infinite alternate;
        }
        
        .shape2 {
            width: 150px;
            height: 150px;
            bottom: 10%;
            right: 10%;
            animation: moveShape2 20s infinite alternate;
        }
        
        @keyframes moveShape1 {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(200px, 200px) rotate(360deg); }
        }
        
        @keyframes moveShape2 {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(-200px, -200px) rotate(-360deg); }
        }
        
        /* Responsive design */
        @media screen and (max-width: 768px) {
            .cont-row {
                flex-direction: column;
            }
            
            .cont-row article:first-child {
                border-radius: 20px 20px 0 0;
                padding: 30px !important;
            }
            
            .cont-row article:last-child {
                border-radius: 0 0 20px 20px;
                padding: 30px !important;
            }
            
            .float {
                bottom: 10px;
                right: 12px;
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            
            .heading {
                font-size: 24px;
            }
            
            h1 {
                font-size: 2em;
                text-align: center;
            }
        }
        
        /* Success message animation */
        .success-message {
            animation: slideUp 0.5s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Input validation styles */
        .cont-box.error {
            border-color: #ff6b6b;
            animation: shake 0.5s ease-out;
        }
        
        .cont-box.success {
            border-color: #51cf66;
        }
    </style>
</head>
<body>
    <!-- Floating shapes background -->
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    
    <h1>✨ Welcome to Our Website ✨</h1>
    
    <!-- Floating button to open popup -->
    <div class="float" id="openPopupBtn">
        <span class="tooltiptext">Apply Now!</span>
        <i class="fas fa-phone-alt"></i>
    </div>
    
    <!-- Overlay -->
    <div class="popup-overlay" id="popupOverlay"></div>

    <!-- Popup HTML with side-by-side layout -->
    <div id="newBanner" class="well">
        <div class="popup_close newBanner_close" title="Close" aria-label="Close" id="closepopup">
            <span aria-hidden="true" class="closePop">×</span>
        </div>
        <section class="cont-sect">
            <div class="cont-row">
                <!-- Left side - Image with overlay -->
                <article>
                    <div class="add-sect" id="advertising-solutions-msg">
                        <a href="#" target="_blank" class="initialism closebutton_open">
                            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                 alt="Business Meeting" 
                                 class="mb-15">
                        </a>
                    </div>
                </article>
                
                <!-- Right side - Form -->
                <article>
                    <form method="post" name="franchise_form_p" id="franchise_form_p" enctype="multipart/form-data">
                        <input type="hidden" name="page_name" id="page_name" value="Home Popup">
                        <input type="hidden" name="dept_email" value="test@email.com">
                        <input type="hidden" name="dept_mob" value="1234567890">
                        <input type="hidden" name="token" value="09X6MOzpipINpumGv7V65Mc+Kx1S1UmUV0BqJeqGWBE=">

                        <div class="frm-divide-main">
                            <div class="heading" style="text-align: center;">Connect With Us</div>
                            <p class="sub-heading">Apply For Business Opportunities</p>
                            
                            <div class="input-group">
                                <i class="fas fa-user"></i>
                                <input type="text" name="full_name" id="full_name_p" placeholder="Full Name" class="cont-box frm-m-input" />
                            </div>
                            
                            <div class="input-group">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email_id" id="email_id_p" placeholder="Email Address" class="cont-box frm-m-input" />
                            </div>
                            
                            <div class="input-group">
                                <i class="fab fa-whatsapp"></i>
                                <input type="text" name="contact_no" id="contact_no_p" placeholder="WhatsApp Number" class="cont-box drp-input-width" maxlength="10" onkeypress="return onlyNumbers(event);" />
                            </div>

                            <div class="input-group">
                                <i class="fas fa-map-marker-alt"></i>
                                <select name="state" id="state_p" class="cont-box form-control">
                                    <option value="">Select Your State</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <i class="fas fa-comment"></i>
                                <textarea name="comment" id="comment_p" placeholder="Your Message / Comments" rows="2" class="cont-box frm-m-input"></textarea>
                            </div>

                            <input type="hidden" name="recaptcha_token" id="recaptchaToken">
                            
                            <center>
                                <button type="button" id="apply_btn_p" class="arrow-n green-btn1">
                                    <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>
                                    Submit Application
                                </button>
                            </center>
                            
                            <p id="msg_p" style="text-align: center;"></p>
                            
                            <center>
                                <img id="gif_image_p" src="https://media.tenor.com/wpSo-8CrXqUAAAAi/loading-loading-forever.gif" style="display:none; width: 50px;">
                            </center>
                        </div>
                    </form>
                </article>
            </div>
        </section>
    </div>

    <script>
    // Only Numbers function
    function onlyNumbers(event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    // Add/remove error class
    function removeErrorClass(element) {
        $(element).removeClass('error');
    }

    $(document).ready(function() {
        console.log("Document ready!");
        
        // Function to show popup
        function showPopup() {
            $('#newBanner').fadeIn(400);
            $('#popupOverlay').fadeIn(400);
            $('body').css('overflow', 'hidden');
        }
        
        // Function to hide popup
        function hidePopup() {
            $('#newBanner').fadeOut(400);
            $('#popupOverlay').fadeOut(400);
            $('body').css('overflow', 'auto');
            // Reset form
            $('#franchise_form_p')[0].reset();
            $('#msg_p').html('');
            $('.cont-box').removeClass('error success');
        }
        
        // Auto-show after 2 seconds
        setTimeout(function() {
            showPopup();
        }, 2000);
        
        // Open popup when floating button is clicked
        $('#openPopupBtn').click(function() {
            showPopup();
        });
        
        // Close when clicking close button
        $('.closePop, .popup_close').click(function(e) {
            e.preventDefault();
            hidePopup();
        });
        
        // Close when clicking overlay
        $('#popupOverlay').click(function() {
            hidePopup();
        });
        
        // Remove error class on input focus
        $('.cont-box').focus(function() {
            $(this).removeClass('error');
        });
        
        // Form validation
        $("#apply_btn_p").click(function() {
            var full_name = $("#full_name_p").val().trim();
            var email_id = $("#email_id_p").val().trim();
            var contact_no = $("#contact_no_p").val().trim();
            var state = $("#state_p").val();
            
            var emailRegExp = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var mobileRegExp = /^[0-9]{10}$/;
            
            // Remove previous error classes
            $('.cont-box').removeClass('error');
            
            if (full_name == "" || full_name.length <= 2) {
                $("#msg_p").html("<span style='color:red'><i class='fas fa-exclamation-circle'></i> Please enter valid name</span>");
                $("#full_name_p").addClass('error').focus();
            } else if (email_id == "") {
                $("#msg_p").html("<span style='color:red'><i class='fas fa-exclamation-circle'></i> Please enter email</span>");
                $("#email_id_p").addClass('error').focus();
            } else if (email_id != "" && (!email_id.match(emailRegExp))) {
                $("#msg_p").html("<span style='color:red'><i class='fas fa-exclamation-circle'></i> Please enter proper email</span>");
                $("#email_id_p").addClass('error').focus();
            } else if (contact_no == "" || !contact_no.match(mobileRegExp)) {
                $("#msg_p").html("<span style='color:red'><i class='fas fa-exclamation-circle'></i> Please enter valid 10-digit WhatsApp number</span>");
                $("#contact_no_p").addClass('error').focus();
            } else if (state == "") {
                $("#msg_p").html("<span style='color:red'><i class='fas fa-exclamation-circle'></i> Please select your state</span>");
                $("#state_p").addClass('error').focus();
            } else {
                // Show loading
                $("#apply_btn_p").prop("disabled", true);
                $("#gif_image_p").show();
                $("#msg_p").html("<span style='color:#667eea'><i class='fas fa-spinner fa-pulse'></i> Submitting...</span>");
                
                // Simulate AJAX call
                setTimeout(function() {
                    $("#gif_image_p").hide();
                    $("#msg_p").html("<span style='color:#51cf66' class='success-message'><i class='fas fa-check-circle'></i> Thank you! We will contact you soon.</span>");
                    $("#apply_btn_p").prop("disabled", false);
                    
                    // Add success class to inputs
                    $('.cont-box').addClass('success');
                    
                    // Hide popup after success
                    setTimeout(function() {
                        hidePopup();
                    }, 2000);
                }, 2000);
                
                // Uncomment below for actual AJAX call
                /*
                $.ajax({
                    url: 'your-endpoint.php',
                    method: 'post',
                    data: $("#franchise_form_p").serialize(),
                    success: function(data) {
                        $("#gif_image_p").hide();
                        $("#msg_p").html("<span style='color:#51cf66' class='success-message'><i class='fas fa-check-circle'></i> Thank you! We will contact you soon.</span>");
                        $("#apply_btn_p").prop("disabled", false);
                        $('.cont-box').addClass('success');
                        
                        setTimeout(function() {
                            hidePopup();
                        }, 2000);
                    },
                    error: function() {
                        $("#gif_image_p").hide();
                        $("#msg_p").html("<span style='color:#ff6b6b'><i class='fas fa-exclamation-triangle'></i> Something went wrong. Please try again.</span>");
                        $("#apply_btn_p").prop("disabled", false);
                    }
                });
                */
            }
            
            // Clear message after 5 seconds
            setTimeout(function() {
                $("#msg_p").html("");
            }, 5000);
        });
        
        // Prevent popup close when clicking inside popup
        $('#newBanner').click(function(e) {
            e.stopPropagation();
        });
    });
    </script>
</body>
</html>