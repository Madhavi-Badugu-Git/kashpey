<?php include('includes/dbConfig.php'); ?>

<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php include('includes/header.php'); ?>


<body
    class="home page-template page-template-home-page page-template-home-page-php page page-id-158 bg js-focus-visible"
    id="home">



    <!-- <div id="google_translate_element"></div> -->

    <div class="over-menu"></div>

    <div id="wrap" class="cf">

        <?php include('includes/navbar.php'); ?>

    </div>

    <style>
        /*service setction*/

        #home .foot {
            margin: 0;
        }

        .foot {
            /* padding: 20px 0 0 0; */
            /* background: #f9f9f9; */
            color: #6d7278;
            font-size: 14px;
            /* border-top: 1px solid #ebebeb; */
            transition: all 0.5s ease;
            /* padding-bottom: 15px; */
        }

        .moneyMatter.green .cntb h2 {
            font-weight: 600;
            padding-bottom: 0px;
        }

        .moneyMatter.green .cntb p {
            padding-bottom: 5px;
        }

        .foot {
            display: block;
        }

        .foot .col {
            display: table-cell;
            padding-right: 30px;
            max-width: 164px;
        }

        .foot p.ttl {
            color: #fff;
            padding-bottom: 8px;
            font-weight: 700;
        }

        .foot p {
            line-height: 24px;
            padding-bottom: 9px;
            font-size: 16px;
        }

        .foot p a {
            color: #000000;
            font-weight: 500;

        }

        .foot p a:hover {
            color: #904598;

        }


        @media (max-width: 767px) {
            .foot .col {
                display: block !important;
                padding-right: 0;
                max-width: 100%;
                margin-bottom: 20px;
            }
        }


        img {
            pointer-events: none;
        }

        .moneyMatter {
            margin: 52px 0 30px;
        }

        /*service out section*/

        /*.services-pg-section .service-grids .grid, .services-section-s2 .service-grids .grid, .services-section-s3 .service-grids .grid {
        width: calc(25% - 30px);
        float: left;
        margin: 0 15px 40px;
        overflow: hidden;
        }*/


        /*mobile view*/
        @media (max-width: 767px) {
            .moneyMatter {
                /*  margin: 20px 0;*/
                text-align: LEFT;
            }
        }

        /*end mobile view*/


        /*BOX_SLIDER*/

        .video-sect .container {
            border-top: none;
            padding-top: 10px;
        }


        /*margin*/

        .moneyMatter {
            margin: 18px 0 30px;
        }

        /*pading on slide*/

        .video-sect {
            width: 100%;
            display: inline-block;
            padding: 0px 0 18px;
        }



        /*extra box*/

        .services-pg-section .service-grids .grid {
            margin: 0 15px 25px;
        }

        /*extra box*/



        .cont-sect {
            width: 100%;
            display: inline-block;
            padding: 29px 0;
            height: auto;
        }
    </style>


    <section>
        <div class="owl-carousel owl-theme" id="owl-banner">

            <div class="item">
                <div class="bannerbg bann1"
                    style='background: url("wp-content/uploads/2020/02/govt_slider.jpg") no-repeat center center;color: #ffffff;background-size: cover; height: 420px;'>
                    <div class="container">
                        <div class="tbl">
                            <div class="td">
                                <h1></h1>
                                <p></p>
                                <!-- <a href="#fade" class="white-brb-btn green-btn fade_open" style="margin-top: 0px;">Enquire Now!</a>  -->
                            </div>
                            <div class="td">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bannerbg bann1"
                    style='background: url("wp-content/uploads/2020/02/premium_slider.jpg") no-repeat center center;color: #ffffff;background-size: cover; height: 420px;'>
                    <div class="container">
                        <div class="tbl">
                            <div class="td" style="color: #128eff;">
                                <h1></h1>
                                <p></p>
                                <!--   <a href="#fade" class="white-brb-btn green-btn fade_open" style="margin-top: 0px;">Enquire Now!</a>  -->
                            </div>
                            <div class="td">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bannerbg bann1"
                    style='background: url("wp-content/uploads/2020/02/financial_slider.jpg") no-repeat center center;color: #ffffff;background-size: cover; height: 420px;'>
                    <div class="container">
                        <div class="tbl">
                            <div class="td" style="color:black;">
                                <h1></h1>
                                <p></p>
                                <!-- <a href="#fade" class="white-brb-btn green-btn fade_open" style="margin-top: 0px;">Enquire Now!</a> -->
                            </div>
                            <div class="td">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="bannerbg bann1"
                    style='background: url("wp-content/uploads/2020/02/company_slider.jpg") no-repeat center center;color: #ffffff;background-size: cover; height: 420px;'>
                    <div class="container">
                        <div class="tbl">
                            <div class="td" style="color:black;">
                                <h1></h1>
                                <p></p>
                                <!-- <a href="#fade" class="white-brb-btn green-btn fade_open" style="margin-top: 0px;">Enquire Now!</a> -->
                            </div>
                            <div class="td">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- end slider -->




    <!-- STRENTH -->
    <?php include('includes/strength-section.php'); ?>

    <!-- END -->



    <!-- contact form -->

    <?php include('includes/contact-form.php'); ?>

    <!-- end contact form -->

    <a href="https://taxware.co.in/" target="_blank" style="z-index: 1000;">
        <div class="container">

            <img src="assets/app_guide_3.png" alt="popcorn suvidha kendra franchise" style="margin-top: 10px; margin-bottom: 10px; width: 100%;
               max-width: 1118px;" />

        </div>
    </a>
    <br>

    <!-- services -->

    <!-- ONE SERVICE -->
    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <a href="gst-services">
                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-1.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="cntb">
                <h2><span>GST</span> <span style="color: #2c2e8d;">Services</span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">





                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="gst-registration"><i class="fa fa-star" aria-hidden="true"></i>
                                                GST Registration</p>
                                        <p><a href="gst-modification"><i class="fa fa-star" aria-hidden="true"></i>
                                                GST Modification</a></p>
                                        <p><a href="gst-services"><i class="fa fa-star" aria-hidden="true"></i> GST
                                                Cancellation</a></p>
                                        <p><a href="gst-cancellation"><i class="fa fa-star" aria-hidden="true"></i>
                                                Revocation of GST Number Cancellation</a></p>
                                        <p><a href="gst-refund-application"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Refund</a></p>
                                        <p><a href="gst-consultancy"><i class="fa fa-star" aria-hidden="true"></i>
                                                GST Consultancy</a></p>
                                        <p><a href="gst-reconciliation"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Reconcilation</a></p>
                                        <p><a href="gst-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Quaterly / Monthly Return Filing</a></p>



                                    </div>
                                </aside>
                            </div>


                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="e-invoicing"><i class="fa fa-star" aria-hidden="true"></i>
                                                E-Invoicing</a></p>
                                        <p><a href="gst-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Annual Return Filing</a></p>
                                        <p><a href="gst-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Final Return Filing </a></p>
                                        <p><a href="gst-consultancy"><i class="fa fa-star" aria-hidden="true"></i>
                                                Reply to GST Notice</a></p>
                                        <p><a href="gst-audit-consultancy"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GST Audit</a></p>
                                        <p><a href="gst-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Yearly and Half-Yearly GST Filing
                                                Packages</a></p>
                                        <p><a href="e-way-bill"><i class="fa fa-star" aria-hidden="true"></i> E-Way
                                                Bill Registration</a></p>
                                        <p><a href="e-way-bill"><i class="fa fa-star" aria-hidden="true"></i> E-Way
                                                Bill Generation</p>
                                        <p><a href="lut"><i class="fa fa-star" aria-hidden="true"></i> Letter of
                                                Undertaking (LUT) </a></p>


                                    </div>
                                </aside>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>




    <!--  -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Aadhar ATM - <span style="color: #2c2e8d;">Aadhar Enabled Payment System
                            (AEPS)</span></h2>
                </div>
                <a href="aadhar-atm">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/AEPS.jpg" alt="NSDL_Payments_Bank_BC"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Income Tax <span style="color: #2c2e8d;">Services</span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">


                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">

                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Salaried Individual Tax Filing [ITR 1]</p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Capital Gains Income Tax Filing [ITR 2]</p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Business Tax Return [ITR 3]</p>

                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Presumptive Income Tax Filing [ITR 4]</a>
                                        </p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Partnership Firm / LLP Tax Filing [ITR
                                                5]</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Corporate Assessee / Company Tax Filing [ITR
                                                6]</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trust Tax Filing [ITR 7]</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Filing For Securities Traders</a>
                                        </p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Filing for Professionals</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Filing For NRI</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Computation of Income</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Balance Sheet</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Profit and Loss Account</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Projected Balance Sheet</a></p>

                                    </div>
                                </aside>
                            </div>

                            <div class="col">
                                <aside id="text-9" class="widget widget_text">
                                    <div class="textwidget">


                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Provisional Balance Sheet</a></p>
                                       
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> CA Certification of Books of Accounts and
                                                Returns</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Return Consultancy</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Revised / Belated Income Tax Return</a></p>

                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Notice</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Refund</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Assessment </a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Advance Tax Payment</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Tax Assessment and Scrutiny</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> TDS Filing</a></p>

                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Verification</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Form 10E</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Form 10IE</p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Form 10BA </a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Tax Audit</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Statutory Company Audit</a></p>
                                        <p><a href="income-tax-return-filing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trust Audit</a></p>

                                    </div>
                                </aside>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-4_a.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>

    <!-- TWO SERVICE -->



    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/img-29.png" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="cntb">
                <h2><span>Financial</span> <span style="color: #2c2e8d;">Services</span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="#"><i class="fa fa-star" aria-hidden="true"></i> TAN Registration
                                        </p>
                                        <!-- <p><a href="#"><i class="fa fa-star" aria-hidden="true"></i> TDS Quarterly Return</p> -->
                                        <p><a href="#"><i class="fa fa-star" aria-hidden="true"></i> Profession Tax
                                                Registration</p>
                                        <p><a href="#"><i class="fa fa-star" aria-hidden="true"></i> Profession Tax
                                                Returns</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Net-worth Certificate</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Certificate</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> TDS Return Filing</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Business Plan and Project Report</a></p>



                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">

                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Confirmation Certificate</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Book-Keeping and Accounting Services</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Turnover Certificate</a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Current Account Opening Certificate</p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> CMA Data </a></p>
                                        <p><a href="other-financial-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Project Report</a></p>

                                    </div>
                                </aside>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!-- new service -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Start <span style="color: #2c2e8d;">New Business</span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">

                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> One Person Company (OPC)</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Private Limited Company</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Limited Liability Partnership (LLP)</p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Public Limited Company</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> NGO / Section 8 Company</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Nidhi Company</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Producer Company</a></p>


                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">



                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Partnership Firm</p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trust</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Society</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Sole Proprietorship</a></p>
                                        <p><a href="new-business-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Hindu Undivided Family (HUF)</a></p>


                                    </div>
                                </aside>
                            </div>



                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-6.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>
    <!-- THIRED -->

    <!-- end service -->


    <!--  -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Delhivery <span style="color: #2c2e8d;">Courier Service</span></h2>
                </div>
                <a href="courier-service">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/COURIER_SERVICE_ONE.jpg"
                            alt="NSDL_Payments_Bank_BC" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!--  -->

    <section class="moneyMatter">
        <div class="container">
            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Company <span style="color: #2c2e8d;">Compliance</span></h2>
                <div class="foot">
                    <div class="container">
                        <div class="tbl">
                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Auditor Appointment [ADT 1]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Director KYC [DIR-3 KYC]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Company KYC [INC-22A]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Commencement Of Business Certificate
                                                [INC-20A]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Deposit Return [DPT-03]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> MSME Form</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Appointment of Directors</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Removal of Directors</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Director's Report Creation and MGT-9</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Alteration in AOA</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Alteration in MOA</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Increase in Authorized Share Capital</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> DIN Registration</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Issuance of Share Certificate</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Minutes book</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> AOA Drafting</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> MOA Drafting</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Company Name Change </a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Company Address Change</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change In Object Clause</a></p>



                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">


                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Share Transfer in Company</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Annual Compliance for Private Limited
                                                Company [MGT-7 and AOC-4]</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Annual Compliance for OPC Company</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Annual Compliance for Nidhi Company </a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Annual Compliance for NGO</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Annual Compliance for Producer Company</a>
                                        </p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change of Nominee in OPC</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Partnership Firm to Private
                                                Limited</a></p>

                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert OPC To Private Limited</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Section 8 to Private Limited</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Private Limited to OPC</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Private Limited to Public
                                                Limited</a></p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Active Company to Dormant Status</a>
                                        </p>
                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Dormant Company to Active Status</a>
                                        </p>

                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Winding Up Company [STK-2]</a></p>

                                        <p><a href="compliance-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Dissolve Partnership Firm</a></p>



                                    </div>
                                </aside>
                            </div>



                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-4_a_a.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>
    <!-- THIRED -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Cash<span style="color: #2c2e8d;">@POS</span></h2>
                </div>
                <a href="m-pos-micro-atm">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/CASH_POS.jpg" alt="MICRO_ATM"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">LLP <span style="color: #2c2e8d;">Compliances</span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">

                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> DPIN Registration</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> LLP Annual Compliance [Form 8 and Form
                                                11]</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change in LLP Agreement</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change Name of LLP</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change in LLP Main Object</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change in LLP Registered Address</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Change of Partner in LLP</a></p>





                                    </div>
                                </aside>
                            </div>


                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert LLP to Private Limited</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Private Limited To LLP</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Convert Partnership to LLP</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Winding Up of LLP [Form 24]</a></p>



                                    </div>
                                </aside>
                            </div>




                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/llp.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Micro <span style="color: #2c2e8d;">ATM</span></h2>
                </div>
                <a href="m-pos-micro-atm">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/MICRO_ATM.jpg" alt="MICRO_ATM"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->


    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/img-4_a_aa.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="cntb">
                <h2><span>Government </span> <span style="color: #2c2e8d;">Registration</span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> MSME Registration (Udhyam)</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FSSAI Registration ( Food License)</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FSSAI State License</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FSSAI Central License</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FSSAI Annual Return Filing</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FSSAI License Renewal</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Shop and Establishment Registration
                                                (Gumasta)</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Drug License</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Tobacco License</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Fertilizer Sale License</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trade License</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Start-Up India Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Start-Up India Tax Exemption</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Central Labour License</a></p>

                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Import Export Code (IEC)</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Import Export Code Modification</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> MSME DataBank Registrations</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> EPF Registration</a></p>



                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">



                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ESIC Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Provident Fund Withdrawal</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> EPF Return</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ESIC Return</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Hallmark</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Icegate Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> GeM Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> DOT Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Police Clearance Certificate</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Character Certificate</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Merchandise Exports from India Scheme
                                                Application </a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Service Exports from India Scheme
                                                Application </a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> RCMC Application</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> NSIC Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> CII Membership</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FIEO Registration</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> APEDA Registration</a></p>



                                    </div>
                                </aside>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
            <section class="cont-sect2" style="BACKGROUND: #f26b3d;COLOR: WHITE;padding: 8px 0;margin-top: 10px;">
                <div class="container">
                    <p style="float:right;padding-right: 10px;">Note: *Services Subject to Availability State Wise</p>
                    <div class="clear"></div>
                </div>
            </section>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!-- NEW SERVICEh -->


    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Domestic <span style="color: #2c2e8d;">Money Transfer</span></h2>
                </div>
                <a href="money-transfer">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/MONEY_TRANSFER.jpg" alt="MONEY_TRANSFER"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Government <span style="color: #2c2e8d;">Citizen Services (G2C
                        Services) </span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">

                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Aadhar Correction (OTP)</a></p>
                                        <p><a href="passport-application"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Learners License</a></p>
                                        <p><a href="driving-license-application"><i class="fa fa-star"
                                                    aria-hidden="true"></i> New Passport Application</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Renewal of Passport</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Driving License </a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Renewal of Driving License</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Voter ID Application</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Caste Certificate</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Marriage Certificate</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Ration Card Application</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Death Certificate</a></p>


                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">

                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Birth Certificate</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Pradhan Mantri Kisan Samman Nidhi Yojna</p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Pradhan Mantri Kisan Maandhan Yojna</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Pradhan Mantri BimaYojna</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> E-Shram Card</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Income Certificate</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Domicile Certificate</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Pan-Aadhaar Linking</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Jeevan Pramaan Patra</a></p>
                                        <p><a href="government-citizen-services-G2C-services"><i class="fa fa-star"
                                                    aria-hidden="true"></i> E-stamp Paper</a></p>



                                    </div>
                                </aside>
                            </div>




                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-6.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <section class="cont-sect2"
                style="BACKGROUND: #f26b3d;COLOR: WHITE;padding: 8px 0;margin-top: 10px;padding-left: 10px;">
                <div class="container">
                    <p>Note: *Services Subject to Availability State Wise</p>
                    <div class="clear"></div>
                </div>
            </section>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>

    <!-- FIFTH -->

    <!-- NEW SERVICEE -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> TATA <span style="color: #2c2e8d;">Indicash ATM</span></h2>
                </div>
                <a href="popcorn-atm">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/TATA_INDICASH.jpg" alt="TATA_INDICASH"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/intel.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="cntb">
                <h2><span>Intellectual </span> <span style="color: #2c2e8d;">Property Right (IPR)</span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Application</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Copyright Application</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Patent Application</p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Objection Reply</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Renewal</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Logo Designing</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Opposition</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Hearing</a></p>
                                        <p><a href="government-registration"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Trademark Assignment</p>
                                        <!-- <p><a href="https://popcorninfotech.com/government-registration.php"><i class="fa fa-star" aria-hidden="true"></i> Trademark Renewal</a></p> -->



                                    </div>
                                </aside>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!-- NEW SERVICEh -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> NSDL Payments <span style="color: #2c2e8d;">Bank BC</span></h2>
                </div>
                <a href="nsdl-payment-bank-bc">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/NSDL_PAYMENTS_BANK.jpg"
                            alt="NSDL_Payments_Bank_BC" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->


    <!-- SERVICE SECTION -->
    <section class="services-pg-section section-padding"
        style="padding:15px;padding-bottom: 0px;background-color: #ffffff;">
        <div class="container">
            <!--  <center><h1 class="background" style="font-size: 30px;margin-top:20px;"><a href="" class="typewrite" data-period="2000" style="color: #3db166;" data-type='[ "Services", "सेवाएं" ]'><span class="wrap"></span></a></h1></center> -->
            <div class="heading" style="text-align: left;"> <span>PAN CARD (Become Direct UTI Agent) </span></div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/pan_application.jpg" alt>
                                <div class="overlay">
                                    <a href="pan-card"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="pan-card">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Pan Card – New Application </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/pan_application_correction.jpg" alt>
                                <div class="overlay">
                                    <a href="pan-card"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="pan-card">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Pan Card – Correction Application
                                    </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/pan_application_duplicate.jpg" alt>
                                <div class="overlay">
                                    <a href="pan-card"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="pan-card">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Pan Card – Duplicate Application
                                    </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/pan_application_duplicate.jpg" alt>
                                <div class="overlay">
                                    <a href="pan-card"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="pan-card">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Pan Card – NRI Pan </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/subservice57.png" alt>
                                <div class="overlay">
                                    <a href="pan-card"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="pan-card">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> E - Pan Card </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>



                    </div>

                </div>

            </div>
            <div style="border: #ffc107 1px solid;margin-bottom: 15px;"></div>

        </div> <!-- end container -->
    </section>

    <!-- ENDS ECTION -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Digital & Physical <span style="color: #2c2e8d;">Gold</span></h2>
                </div>
                <a href="nsdl-payment-bank-bc">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/Digital-and-Physical-Gold.jpg"
                            alt="Digital-and-Physical-Gold" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!-- NEW SERVICESER -->


    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/iso.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="cntb">
                <h2><span>ISO </span> <span style="color: #2c2e8d;">Certification </span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 9001 2015</p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 14001 EMS</p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 22000 FSMS</p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 27001 ISMS</a></p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 50001 Energy Management</a></p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO 45001</a></p>
                                        <p><a href="iso-certification"><i class="fa fa-star"
                                                    aria-hidden="true"></i> ISO Renewal</a></p>



                                    </div>
                                </aside>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!-- NEW SERVICEh -->


    <!-- NEW SERVICE -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Stock | <span style="color: #2c2e8d;">Share Broking and Trading</span>
                    </h2>
                </div>
                <a href="be-a-sub-broker-or-trader-in-stocks">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/STOCK_SHARE.jpg" alt="STOCK_SHARE"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!-- NEW SERVICR -->

    <!-- SERVICE SECTION -->
    <section class="services-pg-section section-padding"
        style="padding-top:15px;padding-bottom: 0px;background-color: #ffffff;">
        <div class="container">
            <!--  <center><h1 class="background" style="font-size: 30px;margin-top:20px;"><a href="" class="typewrite" data-period="2000" style="color: #3db166;" data-type='[ "Services", "सेवाएं" ]'><span class="wrap"></span></a></h1></center> -->
            <div class="heading" style="text-align: left;"> <span>Digital Signature (DSC) </span></div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/dsc_tab.png" alt>
                                <div class="overlay">
                                    <a href="digital-signature"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="digital-signature">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> DSC – Class 3 : Only Signing </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/dsc_tab_1.jpg" alt>
                                <div class="overlay">
                                    <a href="digital-signature"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="digital-signature">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> DSC – Class 3: Combo – Signing +
                                        Encryption </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/dsc_tab_2.jpg" alt>
                                <div class="overlay">
                                    <a href="digital-signature"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="digital-signature">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> DSC – DGFT</h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>


                        <!-- <div class="grid">
                                <div class="img-overlay">
                                    <img src="https://popcorninfotech.com/assets/images/services/dsc_tab_3.jpg" alt>
                                    <div class="overlay">
                                        <a href="https://popcorninfotech.com/digital-signature.php"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="https://popcorninfotech.com/digital-signature.php"><h4><i class="fa fa-star" aria-hidden="true"></i> DSC – DGFT – 2 Years </h4></a>
                                  
                                </div>
                            </div> -->


                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-bottom: 15px;"></div>
        </div> <!-- end container -->
    </section>

    <!-- ENDS ECTION -->

    <!-- SIXTH -->

    <!-- process -->

    <div class="entry-content">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Axis <span style="color: #2c2e8d;">Bank BC</span></h2>
                </div>
                <a href="#">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/AXIS_BANK.jpg" alt="Axis_Bank_BC"
                            style="margin: 0 auto 0px;"></p>
                </a>
                <div style="border: #ffc107 1px solid;"></div>
            </div>
        </div>
    </div>
    <!-- end process -->

    <!-- SEVENTH -->
    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/img-7.png" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="item">
        <div class="itemLogo">
          <div class="imgSec">
            <img src="https://popcorninfotech.com/assets/images/services/img-bbps.png" alt="" />
          </div>
        </div>
        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




            </div>
            <div class="cntb">
                <h2><span>Loan</span> <span style="color: #2c2e8d;"></span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">


                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Personal Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Business Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Home Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                MSME Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Agricultural Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Micro Finance (Self Employed)</a></p>



                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">

                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Micro Finance (Salaried)</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Loan Against Property</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Owned Car Refinance</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Used Car Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Mudra Loan</a></p>
                                        <p><a href="loans-finance"><i class="fa fa-star" aria-hidden="true"></i>
                                                Unsecured Business Loan</a></p>



                                    </div>
                                </aside>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <section class="cash-sect" style="padding: 20px 0 15px;">
                <div class="container">

                    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <div id="clients">
                        <div class="clients-wrap">
                            <strong>
                                <ul id="clients-list3" class="clearfix" style="font-size:30px;">


                                    <li><img src="assets/images/logo_png/fair.png"></li>

                                    <li><img src="assets/images/logo_png/bajaj.jpg"> </li>
                                    <li><img src="assets/images/logo_png/incred.jpg"> </li>
                                    <li><img src="assets/images/logo_png/upword.jpg"> </li>
                                    <li><img src="assets/images/logo_png/loan_tap.jpg"> </li>
                                    <li><img src="assets/images/logo_png/paysense.jpg"> </li>
                                    <li><img src="assets/images/logo_png/fullerton.jpg"> </li>
                                    <li><img src="assets/images/logo_png/lendi.jpg"> </li>
                                    <li><img src="assets/images/logo_png/indi.jpg"> </li>
                                    <li><img src="assets/images/logo_png/sme.jpg"> </li>
                                    <li><img src="assets/images/logo_png/neo.jpg"> </li>
                                    <li><img src="assets/images/logo_png/cashe.png"></li>
                                    <li><img src="assets/images/logo_png/MAHINDRA_loan.jpg"></li>
                                    <li><img src="assets/images/logo_png/aadhar_hosing.jpg"></li>


                                </ul>
                            </strong>
                        </div>
                        <!-- @end .clients-wrap -->
                    </div>
                    <!-- @end #clients -->
                </div>
            </section>
            <script type="text/javascript">
            $(function() {
                // vars for clients list carousel
                // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
                var $clientcarousel = $('#clients-list3');
                var clients = $clientcarousel.children().length;
                var clientwidth = (clients * 220); // 140px width for each client item 
                $clientcarousel.css('width', clientwidth);

                var rotating = true;
                var clientspeed = 1;
                var seeclients = setInterval(rotateClients, clientspeed);

                $(document).on({
                    mouseenter: function() {
                        rotating = false; // turn off rotation when hovering
                    },
                    mouseleave: function() {
                        rotating = true;
                    }
                }, '#clients');

                function rotateClients() {
                    if (rotating != false) {
                        var $first = $('#clients-list3 li:first');
                        $first.animate({
                            'margin-left': '-220px'
                        }, 2000, function() {
                            $first.remove().css({
                                'margin-left': '0px'
                            });
                            $('#clients-list3 li:last').after($first);
                        });
                    }
                }
            });
            </script>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>


    <!-- END BANNER -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> EV <span style="color: #2c2e8d;">Charging Station</span></h2>
                </div>
                <a href="ev-charging-station">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/ev_charge_st.jpg"
                            alt="EV Charging Station" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Recharges & <span style="color: #2c2e8d;">Bill Payment</span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Electricity</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Water</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> LPG Gas</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Gas Pipeline</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Broadband Postapaid</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Landline Postpaid</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Mobile Prepaid</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Mobile Postpaid</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Cable TV</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> FASTag</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Housing Society</a></p>




                                    </div>
                                </aside>
                            </div>



                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">


                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Municipal Taxes</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Education Fees</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Loan Repayment</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Insurance</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Hospital and Pathology</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Life Insurance</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Health Insurance</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Subscription Fees</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Municipal Services</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Credit Card</a></p>
                                        <p><a href="recharge-utility-bill-payments"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Clubs and Associations</a></p>


                                    </div>
                                </aside>
                            </div>


                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">

                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-bbps.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-bbps.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="cash-sect" style="padding: 20px 0 15px;">
                        <div class="container">

                            <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <div id="clients">
                                <div class="clients-wrap">
                                    <strong>
                                        <ul id="clients-list2" class="clearfix" style="font-size:30px;">

                                            <li><img src="assets/images/sub/a.png"></li>
                                            <li><img src="assets/images/sub/b.png"></li>
                                            <li><img src="assets/images/sub/c.png"></li>
                                            <li><img src="assets/images/sub/d.png"></li>
                                            <li><img src="assets/images/sub/e.png"></li>
                                            <li><img src="assets/images/sub/3.png"></li>
                                            <li><img src="assets/images/sub/4.png"></li>
                                            <li><img src="assets/images/sub/5.png"></li>
                                            <li><img src="assets/images/sub/6.png"></li>
                                            <li><img src="assets/images/sub/2/1.png"></li>
                                            <li><img src="assets/images/sub/2/2.png"></li>
                                            <li><img src="assets/images/sub/2/3.png"></li>
                                            <li><img src="assets/images/sub/2/4.png"></li>
                                            <li><img src="assets/images/sub/2/5.png"></li>
                                            <li><img src="assets/images/sub/2/6.png"></li>
                                            <li><img src="assets/images/sub/2/7.png"></li>
                                            <li><img src="assets/images/sub/2/8.png"></li>
                                            <li><img src="assets/images/sub/2/9.png"></li>
                                            <li><img src="assets/images/sub/2/10.png"></li>
                                            <li><img src="assets/images/sub/2/11.png"></li>


                                        </ul>
                                    </strong>
                                </div>
                                <!-- @end .clients-wrap -->
                            </div>
                            <!-- @end #clients -->
                        </div>
                    </section>
                    <script type="text/javascript">
                    $(function() {
                        // vars for clients list carousel
                        // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
                        var $clientcarousel = $('#clients-list2');
                        var clients = $clientcarousel.children().length;
                        var clientwidth = (clients * 220); // 140px width for each client item 
                        $clientcarousel.css('width', clientwidth);

                        var rotating = true;
                        var clientspeed = 1;
                        var seeclients = setInterval(rotateClients, clientspeed);

                        $(document).on({
                            mouseenter: function() {
                                rotating = false; // turn off rotation when hovering
                            },
                            mouseleave: function() {
                                rotating = true;
                            }
                        }, '#clients');

                        function rotateClients() {
                            if (rotating != false) {
                                var $first = $('#clients-list2 li:first');
                                $first.animate({
                                    'margin-left': '-220px'
                                }, 2000, function() {
                                    $first.remove().css({
                                        'margin-left': '0px'
                                    });
                                    $('#clients-list2 li:last').after($first);
                                });
                            }
                        }
                    });
                    </script>


                    <!--  <img src="https://popcorninfotech.com/assets/images/services/img-bbps.png" alt="" style="max-width: 100%;" /> -->
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>

    <!--  -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> ICICI Bank <span style="color: #2c2e8d;">Prepaid Debit Card</span></h2>
                </div>
                <a href="#">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/ICICI_DEBIT_CARD.jpg"
                            alt="NSDL_Payments_Bank_BC" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!-- EIGHT -->
    <section class="moneyMatter green">
        <div class="container">
            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/img-22.png" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="cntb">
                <h2><span>Legal Drafting </span> <span style="color: #2c2e8d;">Services</span></h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Lease Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Leave and License (Rent) Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Gift Deed</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Business Agreements</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Service Agreements</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Power of Attorney</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Affidavit</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Debt Recovery Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Privacy Policy</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Terms and Condition for Website</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Vendor Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Rent Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Sale Deed</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Affidavits</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Memorandum of Understanding (MOU)</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Termination of Agreement</a></p>



                                    </div>
                                </aside>
                            </div>


                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">

                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> No Objection Certificate (NOC)</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Non-Disclosure Agreement (NDA)</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Appointment Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Appointment Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Will Drafting</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Divorce with Consent</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Completion of Probation Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Employee Termination Notice</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Employment Contract</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Employment Agreement</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Job Offer Rejection Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> NDA for Employees</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Offer Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Resignation Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Employee Relieving Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Consumer Complaint Letter</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Direct Selling Agreement</a></p>



                                    </div>
                                </aside>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!--  -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Ayushman <span style="color: #2c2e8d;">Bharat Card</span></h2>
                </div>
                <a href="#">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/AYUSHMAN_BHARAT_ONE.jpg"
                            alt="NSDL_Payments_Bank_BC" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!--  -->

    <section class="moneyMatter">
        <div class="container">

            <div class="cntb">
                <h2 style="margin-bottom: 20px;">Graphic <span style="color: #2c2e8d;">Designing</span></h2>

                <div class="foot">
                    <div class="container">
                        <div class="tbl">

                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Logo Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Pamphlet Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Brochure Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Standee</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Hoarding</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Business Card Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Letterhead Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Flyer Designing</a></p>




                                    </div>
                                </aside>
                            </div>


                            <div class="col">
                                <aside id="text-5" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Menu Card</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Hanging Sticker</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Banner Designing</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Packaging</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Web Banner</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Greeting Card</a></p>
                                        <p><a href="graphic-designing"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Poster</a></p>



                                    </div>
                                </aside>
                            </div>




                        </div>


                    </div>
                </div>


            </div>
            <div class="imgb">
                <a class="initialism closebutton_open" id="closebutton_open">
                    <section class="video-sect banks">
                        <div class="container">
                            <div class="center-box">
                                <div class="video-row">
                                    <div class="all">
                                        <div class="inner-all">
                                            <div id="decision" class="owl-carousel owl-theme videoSlide">

                                                <div class="item">
                                                    <div class="itemLogo">
                                                        <div class="imgSec">
                                                            <img src="assets/images/services/img-25.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>
    </section>

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Website <span style="color: #2c2e8d;">Designing</span></h2>
                </div>
                <a href="website-development-seo">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/WEB_DESIGN.jpg"
                            alt="NSDL_Payments_Bank_BC" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!-- NINE -->

    <section class="moneyMatter green">
        <div class="container">

            <div class="imgb text-left hide767">
                <section class="video-sect banks">
                    <div class="container">
                        <div class="center-box">
                            <div class="video-row">
                                <div class="all">
                                    <div class="inner-all">
                                        <div id="decision" class="owl-carousel owl-theme videoSlide">

                                            <div class="item">
                                                <div class="itemLogo">
                                                    <div class="imgSec">
                                                        <img src="assets/images/services/img-9.png" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="cntb">
                <h2><span>Social Media Marketing & </span> <span style="color: #2c2e8d;">Application Development</span>
                </h2>
                         
                <div class="foot">
                    <div class="container">

                        <div class="tbl">




                            <div class="col">
                                <aside id="text-3" class="widget widget_text">
                                    <div class="textwidget">
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Social Media Page Creation</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Google Listing</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Google Ad Campaign</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Facebook Ad Campaign</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Multi Level Marketing</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Food Delivery</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Car Rental</a></p>
                                        <p><a href="intellectual-property"><i class="fa fa-star"
                                                    aria-hidden="true"></i> Digital Retail Shop-keeper Mobile
                                                Application</a></p>



                                    </div>
                                </aside>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
        </div>

    </section>

    <!-- ANOTEHR SERVICE -->
    <!-- NEW SERVICESD -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> IRCTC <span style="color: #2c2e8d;">Sub Agent</span></h2>
                </div>
                <a href="#">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/IRCTC_SUB_AGENT.jpg"
                            alt="IRCTC_SUB_AGENT" style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->


    <!-- SERVICE SECTION -->
    <section class="services-pg-section section-padding"
        style="padding:15px;padding-bottom: 0px;background-color: #ffffff;">
        <div class="container">
            <!--  <center><h1 class="background" style="font-size: 30px;margin-top:20px;"><a href="" class="typewrite" data-period="2000" style="color: #3db166;" data-type='[ "Services", "सेवाएं" ]'><span class="wrap"></span></a></h1></center> -->
            <div class="heading" style="text-align: left;"> <span>Other Services </span></div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="suvidha/assets/port/idfc_credit.png" alt>
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> IDFC Credit Card </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/credit_scor.jpg" alt>
                                <div class="overlay">
                                    <a href="loans-finance"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="loans-finance">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Cibil Report </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/sip_mutual.jpg" alt>
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> SIP / Mutual Fund </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-overlay">
                                <img src="assets/images/services/accounting.jpg" alt>
                                <div class="overlay">
                                    <a href="accounting-services"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <a href="accounting-services">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Accounting Services </h4>
                                </a>
                                <!--   <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the of the holder.</p> -->
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div style="border: #ffc107 1px solid;margin-bottom: 15px;"></div>
        </div> <!-- end container -->
    </section>

    <!-- ENDS ECTION -->

    <!-- NEW SERVICE -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Insurance <span style="color: #2c2e8d;"></span></h2>
                </div>
                <a href="insurance">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/INSURANCE.jpg" alt="Insurance"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <section class="cash-sect" style="padding: 1px 0 15px;">
                    <div class="container">

                        <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <div id="clients">
                            <div class="clients-wrap">
                                <strong>
                                    <ul id="clients-list4" class="clearfix" style="font-size:30px;">


                                        <li><img src="assets/images/logo_png/INS_ONE.jpg"></li>

                                        <li><img src="assets/images/logo_png/INS_1.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_2.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_3.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_4.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_5.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_6.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_7.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_8.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_9.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_10.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_11.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_12.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_13.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_14.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_15.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_16.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_17.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_18.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_19.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_20.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_21.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_22.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_23.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_24.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_25.jpg"> </li>
                                        <li><img src="assets/images/logo_png/INS_26.jpg"> </li>
                                        <!-- <li><img src="https://popcorninfotech.com/assets/images/logo_png/INS_27.jpg"> </li> -->


                                    </ul>
                                </strong>
                            </div>
                            <!-- @end .clients-wrap -->
                        </div>
                        <!-- @end #clients -->
                    </div>
                </section>
                <script type="text/javascript">
                $(function() {
                    // vars for clients list carousel
                    // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
                    var $clientcarousel = $('#clients-list4');
                    var clients = $clientcarousel.children().length;
                    var clientwidth = (clients * 220); // 140px width for each client item 
                    $clientcarousel.css('width', clientwidth);

                    var rotating = true;
                    var clientspeed = 1;
                    var seeclients = setInterval(rotateClients, clientspeed);

                    $(document).on({
                        mouseenter: function() {
                            rotating = false; // turn off rotation when hovering
                        },
                        mouseleave: function() {
                            rotating = true;
                        }
                    }, '#clients');

                    function rotateClients() {
                        if (rotating != false) {
                            var $first = $('#clients-list4 li:first');
                            $first.animate({
                                'margin-left': '-220px'
                            }, 2000, function() {
                                $first.remove().css({
                                    'margin-left': '0px'
                                });
                                $('#clients-list4 li:last').after($first);
                            });
                        }
                    }
                });
                </script>
                <div style="border: #ffc107 1px solid;margin-top: 15px;"></div>
            </div>

            </section>

        </div>

    </div>

    </div>
    <!-- END BANNER -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> IDFC <span style="color: #2c2e8d;">Fastag Agency</span></h2>
                </div>
                <a href="fastag">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/IDFC_FASTAG.jpg" alt="IDFC_FASTAG"
                            style="margin: 0 auto 0px;"></p>
                </a>

                <div style="border: #ffc107 1px solid;"></div>
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <!-- BANNER -->
    <div class="entry-content" style="padding-bottom: 15PX;">
        <div class="foot">
            <div class="container">
                <div class="heading blue-txt" style="float: left;">
                    <h2 style="color: black;"> Tour & <span style="color: #2c2e8d;">Travel Services</span></h2>
                </div>
                <a href="tour-travel-services">
                    <p><img class="alignnone size-medium wp-image-388"
                            src="wp-content/themes/tata-indicash/images/images/TOURS_AND_TRAVELS.jpg"
                            alt="TOURS_AND_TRAVELS" style="margin: 0 auto 0px;"></p>
                </a>

                <!-- <div style="border: #ffc107 1px solid;"></div> -->
            </div>

        </div>

    </div>
    <!-- END BANNER -->

    <script type="text/javascript">
    $(function() {
        // vars for clients list carousel
        // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
        var $clientcarousel = $('#clients-list');
        var clients = $clientcarousel.children().length;
        var clientwidth = (clients * 220); // 140px width for each client item 
        $clientcarousel.css('width', clientwidth);

        var rotating = true;
        var clientspeed = 1;
        var seeclients = setInterval(rotateClients, clientspeed);

        $(document).on({
            mouseenter: function() {
                rotating = false; // turn off rotation when hovering
            },
            mouseleave: function() {
                rotating = true;
            }
        }, '#clients');

        function rotateClients() {
            if (rotating != false) {
                var $first = $('#clients-list li:first');
                $first.animate({
                    'margin-left': '-220px'
                }, 2000, function() {
                    $first.remove().css({
                        'margin-left': '0px'
                    });
                    $('#clients-list li:last').after($first);
                });
            }
        }
    });
    </script>
    <!--end-->

    <?php include('includes/upper-footer.php'); ?>

    <?php include('includes/whats-app.php'); ?>



   <?php include('includes/sticky-footer.php'); ?>
    <?php include('includes/footer.php'); ?>

    <!-- jQuery Popup Overlay -->

    <?php include('includes/script.php'); ?>

</body>

</html>