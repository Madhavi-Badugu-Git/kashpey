<div class="call_button_1">
    <a href="tel:<?php echo $comp_mobile ; ?>">
        <img src="upload/callsupport.gif" alt="call gif">
    </a>
</div>

<a href="https://api.whatsapp.com/send?phone=<?php echo $comp_mobile ; ?>" class="float" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <!-- <span class="tooltiptext">
        <img src="wp-content/whtsapp_img.jpg" alt="<?php echo $comp_info; ?> chat" class="imga">
    </span> -->
</a>


<style type="text/css">
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        right: 30px;
        background: linear-gradient(to right, #2FD000, #009446);
        color: #FFF;
        border-radius: 50%;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .float i {
        font-size: 32px;
        line-height: 1;
        display: block;
        margin: 0;
        padding: 0;
    }

    .float:hover {
        transform: scale(1.1);
        box-shadow: 0 5px 15px rgba(0, 148, 70, 0.4);
    }

    .float .tooltiptext {
        visibility: hidden;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 100%;
        font-size: 14px;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 10px;
        white-space: nowrap;
    }

    .float:hover .tooltiptext {
        visibility: visible;
    }

    .imga {
        max-width: 200px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    /* Call button styling */
    .call_button_1 {
        position: fixed;
        bottom: 30px;
        left: 30px;
        z-index: 100;
    }

    .call_button_1 a {
        display: block;
        width: 60px;
        height: 60px;
    }

    .call_button_1 img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        display: block;
    }

    .call_button_1 img:hover {
        transform: scale(1.1);
    }

    @media screen and (max-width: 800px) {
        .float {
            width: 50px;
            height: 50px;
            bottom: 15px;
            right: 15px;
        }

        .float i {
            font-size: 26px;
        }

        .call_button_1 {
            bottom: 15px;
            left: 15px;
        }

        .call_button_1 a {
            width: 50px;
            height: 50px;
        }

        .call_button_1 img {
            width: 50px;
            height: 50px;
        }

        .imga {
            display: none;
        }
    }

    /* Animation for WhatsApp button */
    @keyframes whatsappPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .float {
        animation: whatsappPulse 2s infinite;
    }
</style>