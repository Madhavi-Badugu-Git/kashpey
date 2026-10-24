<?php include('includes/dbConfig.php'); ?>

<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include('includes/header.php'); ?>

<body class="home page-template page-template-home-page page-template-home-page-php page page-id-158 bg js-focus-visible" id="home">

    <!-- <div id="google_translate_element"></div> -->

    <div class="over-menu"></div>

    <div id="wrap" class="cf">

        <?php include('includes/navbar.php'); ?>

    </div>
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/gst-service.css">


    <section class="cont-sect" style="height: auto;background-image: linear-gradient(to right, #FFC107 , #FF5722)">

        <div class="container" style="width: 100%;">
            <div class="row_box">


                <div class="column_box">
                    <h2 style="font-size: 54px;">A Complete Solution for GST Compliance </h2>
                    <p style="font-size: 22px;margin-bottom: 10px;">One Tax | One Nation | One Solution</p>
                    <button type="button" class="arrow-n direct_customer_gst_number_open buttons_Filing pointer"><b>Apply</b></button>
                    &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="arrow-n application_tracker_open buttons_Track pointer"><b>Track Application</b></button>
                </div>

                <div class="column_box_2">
                    <img src="images/GST-Advisory-Services.png">
                </div>
            </div>

        </div>
    </section>

    <!-- end slider -->

    <!-- gst content -->
    <div class="entry-content">
        <section class="gst-content-wrapper">
            <div class="gst-container">

            <!-- MAIN HEADING -->
           <!-- <div class="gst-content-wrapper"> -->

                <h2 class="gst-main-heading">
                    GST – <span class="orange-txt">One Nation,</span> <span class="blue-txt">One Tax</span>
                </h2>
                <p class="gst-subtitle">India's unified indirect tax system — simpler, transparent &amp; uniform</p>

                <!-- INTRO HIGHLIGHT BOX -->
                <div class="gst-intro-box">
                    <div class="gst-intro-icon">🇮🇳</div>
                    <div class="gst-intro-text">
                    <strong>What is GST?</strong>
                    Goods and Services Tax (GST) is a single tax system used across India. Before GST, different states had different taxes, which made buying, selling, and transporting goods complicated. After GST was introduced, the tax system became simpler, transparent, and uniform across the country.
                    <br><br>
                    A customer in <strong>Kanyakumari</strong> pays the same tax rate on a product as someone in <strong>Jammu &amp; Kashmir</strong>, if the product falls under the same GST category.
                    </div>
                </div>
            <!-- </div> -->

            <!-- 2-COLUMN: WHY GST + INTRO PARAGRAPH -->
            <div class="gst-two-col">

                <!-- LEFT: Why GST is Important -->
                <div class="gst-card">
                <div class="gst-card-title">
                    <div class="card-icon icon-orange">💡</div>
                    Why GST is Important
                </div>
                <p>GST has made business operations easier and more organized. Businesses can now plan their production, storage, and transportation more efficiently without worrying about different tax rules in every state.</p>
                <ul class="gst-benefits-list">
                    <li><span class="check">✓</span> Single tax system across India</li>
                    <li><span class="check">✓</span> No multiple state taxes like before</li>
                    <li><span class="check">✓</span> Faster movement of goods between states</li>
                    <li><span class="check">✓</span> More transparency in pricing</li>
                    <li><span class="check">✓</span> Simplified tax filing for businesses</li>
                </ul>
                </div>

                <!-- RIGHT: How it Works -->
                <div class="gst-card">
                <div class="gst-card-title">
                    <div class="card-icon icon-blue">⚙️</div>
                    How GST Works
                </div>
                <p>GST replaced a complex web of central and state taxes — including excise duty, VAT, service tax, and entry tax — with one unified system.</p>
                <p>The tax is collected at every stage of the supply chain, but the final burden falls only on the end consumer. Businesses in the chain can claim credit for tax already paid (Input Tax Credit), which eliminates the old problem of "tax on tax."</p>
                <p>This makes the overall system far more efficient, transparent, and business-friendly compared to the earlier multi-layered tax structure.</p>
                </div>

            </div>

            <hr class="gst-divider">

            <!-- TYPES OF GST -->
            <h3 class="gst-types-heading">Types of GST in India</h3>
            <p class="gst-types-sub">GST is divided into three components based on whether the transaction is within a state or between states</p>

            <div class="gst-types-grid">

                <!-- CGST -->
                <div class="gst-type-card card-cgst">
                <div class="gst-type-badge">Central Tax</div>
                <div class="gst-type-name">
                    CGST
                    <span>Central Goods and Services Tax</span>
                </div>
                <p class="gst-type-desc">
                    CGST is the tax collected by the <strong>Central Government</strong> when a transaction happens within the same state. It is always paired with SGST for intra-state transactions.
                </p>
                <div class="gst-type-example">
                    <strong>📍 When Applied</strong>
                    Buying goods or services within your own state — half the GST goes as CGST to the Centre.
                </div>
                </div>

                <!-- SGST -->
                <div class="gst-type-card card-sgst">
                <div class="gst-type-badge">State Tax</div>
                <div class="gst-type-name">
                    SGST
                    <span>State Goods and Services Tax</span>
                </div>
                <p class="gst-type-desc">
                    SGST is the tax collected by the <strong>State Government</strong> when a transaction happens within the same state. It is always charged alongside CGST.
                </p>
                <div class="gst-type-example">
                    <strong>📍 Example</strong>
                    When you buy a product from a shop in your state, the GST is split equally into CGST + SGST.
                </div>
                </div>

                <!-- IGST -->
                <div class="gst-type-card card-igst">
                <div class="gst-type-badge">Inter-State Tax</div>
                <div class="gst-type-name">
                    IGST
                    <span>Integrated Goods and Services Tax</span>
                </div>
                <p class="gst-type-desc">
                    IGST is applied when goods or services move from <strong>one state to another</strong>. It is collected by the Central Government and then shared with the destination state.
                </p>
                <div class="gst-type-example">
                    <strong>📍 Example</strong>
                    A product sold from Telangana to Karnataka — the tax collected is IGST, handled by the Central Government.
                </div>
                </div>

            </div>

            </div>
        </section>
        </div>
    <!-- gst content -->
    
    <!-- service -->

    <!-- SERVICE SECTION -->
    <section class="services-pg-section section-padding" style="padding:15px;padding-bottom: 0px;background-color: #ffffff;">
        <div class="container">
            <div class="heading" style="text-align: left;">GST <span class="blue-txt"> Services </span></div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">

                        <center>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-1.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Registration</h4>
                                    </a>
                                    <!--  <p>The goods and services tax (GST) is a value-added tax levied on most goods and services sold.</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#direct_customer_gst_number" class="direct_customer_gst_number_open">Apply Now</a></button>


                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst2.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GSTIN Modification</h4>
                                    </a>
                                    <!--  <p>PAN Card Services Permanent Account Number, the ten-digit number issued in form laminated card.</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#direct_customer_gst_modification" class="direct_customer_gst_modification_open">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst4.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Return Filing </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#direct_customer" class="direct_customer_open">Apply Now</a></button>
                                </div>
                            </div>




                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst5.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> LUT ( Letter Of Undertaking ) </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst6.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Refund Application </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst8.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Consultancy / Reply to GST Notices </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst7.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> E-Invoicing </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subservice94.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Reconciliation </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst8.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GST Audit Consultancy </h4>
                                    </a>
                                    <!--   <p>Company related services are activities that combine or consolidate certain needed</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#">Apply Now</a></button>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/subgst3.png" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> GSTIN Cancellation / Surrender / Revocation of Cancellation of Registration</h4>
                                    </a>
                                    <!--  <p>Financial services are the economic services provided by the finance industry.</p> -->
                                </div>
                                <div class="details" style="margin-top: 5px;">
                                    <button type="button" class="arrow-w"><a href="#direct_customer_gst_cancellation" class="direct_customer_gst_cancellation_open">Apply Now</a></button>
                                </div>
                            </div>

                        </center>



                    </div>

                </div>

            </div>
            <div style="border: #ffc107 1px solid;margin-bottom: 15px;"></div>

        </div> <!-- end container -->
    </section>

    <!-- ENDS ECTION -->

    <!-- ennd -->

    <?php include('includes/contact-section.php'); ?>

    <?php include('includes/upper-footer.php'); ?>

    <?php include('includes/whats-app.php'); ?>


   <?php include('includes/sticky-footer.php'); ?>

    <!-- END Caution -->



 <?php include('includes/footer.php'); ?>


 <?php include('includes/script.php'); ?>

</body>


</html>



