
    <!-- jQuery Popup Overlay -->

    <script src="wp-content/cache/minify/popups.js"></script>

    <script src='cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.html'></script>

    <script src='cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.html'></script>

    <script>
    /******* Smooth Scroll *****/

    $("#menu-item-136 a").addClass("scrler");
    </script>

    <script>
    $(document).ready(function()

        {

            // Add smooth scrolling to all links

            $("a.scrler").on('click', function(event)

                {

                    // Make sure this.hash has a value before overriding default behavior

                    if (this.hash !== "") {

                        // Prevent default anchor click behavior

                        event.preventDefault();



                        // Store hash

                        var hash = this.hash;



                        // Using jQuery's animate() method to add smooth page scroll

                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

                        $('html, body').animate({

                            scrollTop: $(hash).offset().top - 117

                        }, 800, function() {



                            // Add hash (#) to URL when done scrolling (default click behavior)

                            //                window.location.hash = hash;

                        });

                    } // End if

                });

        });

    /******** END Smooth Scroll *********/
    </script>

    <script>
    /***** Cookies onclick *****/

    $("#cookies").click(function() {

        $(".cookies").hide();

        $("footer").removeClass("margin-b56");

    });

    /***** END Cookies onclick *****/







    /**** Caution footer ****/

    $(".close").click(function() {

        $(".caution-notice").hide();

        $("footer").removeClass("margin-services");

        $('footer').css('margin-bottom', 0);

    });

    /********/





    /**** ATM Services footer ****/

    $(".close").click(function() {

        $(".sect-card").hide();

        $("footer").removeClass("card-margin");

        $('footer').css('margin-bottom', 0);

    });

    /********/





    /**** Footer height ****/

    $(document).ready(function() {

        var headerHeight = $('.caution-notice').outerHeight();

        $('footer').css('margin-bottom', headerHeight);

    });





    $(document).ready(function() {



        $('#fade').popup({

            transition: 'all 0.3s',

            closebutton: true

        });



    });
    </script>

    <script>
    $(document).ready(function() {

        $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');

        $('.acc-container .acc:nth-child(1) .acc-content').slideDown();

        $('.acc-head').on('click', function() {

            if ($(this).hasClass('active')) {

                $(this).siblings('.acc-content').slideUp();

                $(this).removeClass('active');

            } else {

                $('.acc-content').slideUp();

                $('.acc-head').removeClass('active');

                $(this).siblings('.acc-content').slideToggle();

                $(this).toggleClass('active');

            }

        });

    });



    /*Upload brand image*/

    // var loadFile = function(event) 

    // {

    // 	$('img.output').each(function()

    // 	{

    // 		this.src = URL.createObjectURL(event.target.files[0]);

    // 	});

    // };



    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();



            reader.onload = function(e) {

                $('img.output').attr('src', e.target.result);

            };



            reader.readAsDataURL(input.files[0]);

            $('.post-upload').hide();

            $('.post-download').show();

        }

    }



    $(document).ready(function() {

        $("#resetFile").click(function() {

            $('img.output').each(function()

                {

                    this.src = "";

                });

            $('.post-download').hide();

            $('.post-upload').show();

        });

    });



    function generate() {

        html2canvas($("#html-element"), {

            onrendered: function(canvas) {

                canvas.toBlob(function(blob) {

                    saveAs(blob, "saveme.html");

                });

            }

        });

    }


    $(document).ready(function() {

        $('#awareness.owl-carousel').owlCarousel({

            autoplay: true,

            autoplayTimeout: 10000,

            smartSpeed: 1500,

            loop: true,

            dots: true,

            nav: false,

            margin: 0,

            responsiveClass: true,

            responsive: {

                0: {

                    items: 1

                },

                480: {

                    items: 1

                },

                640: {

                    items: 1

                },

                850: {

                    items: 1

                },

                1180: {

                    items: 1

                }

            }

        });

    });

    $(document).ready(function() {

        $('#consideration.owl-carousel').owlCarousel({

            autoplay: true,

            autoplayTimeout: 8000,

            smartSpeed: 1500,

            loop: true,

            dots: true,

            nav: false,

            margin: 0,

            responsiveClass: true,

            responsive: {

                0: {

                    items: 1

                },

                480: {

                    items: 1

                },

                640: {

                    items: 1

                },

                850: {

                    items: 1

                },

                1180: {

                    items: 1

                }

            }

        });

    });

    $(document).ready(function() {

        $('#decision.owl-carousel').owlCarousel({

            autoplay: true,

            autoplayTimeout: 12000,

            smartSpeed: 1500,

            loop: true,

            dots: true,

            nav: false,

            margin: 0,

            responsiveClass: true,

            responsive: {

                0: {

                    items: 1

                },

                480: {

                    items: 1

                },

                640: {

                    items: 1

                },

                850: {

                    items: 1

                },

                1180: {

                    items: 1

                }

            }

        });

    });

    /*END 13-3-2020*/



    /**** Tab filter ****/

    filterSelection("all")

    function filterSelection(c) {

        var x, i;

        x = document.getElementsByClassName("filterDiv");

        if (c == "all") c = "";

        for (i = 0; i < x.length; i++) {

            w3RemoveClass(x[i], "show");

            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");

        }

    }



    function w3AddClass(element, name) {

        var i, arr1, arr2;

        arr1 = element.className.split(" ");

        arr2 = name.split(" ");

        for (i = 0; i < arr2.length; i++) {

            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }

        }

    }



    function w3RemoveClass(element, name) {

        var i, arr1, arr2;

        arr1 = element.className.split(" ");

        arr2 = name.split(" ");

        for (i = 0; i < arr2.length; i++) {

            while (arr1.indexOf(arr2[i]) > -1) {

                arr1.splice(arr1.indexOf(arr2[i]), 1);

            }

        }

        element.className = arr1.join(" ");

    }



    // Add active class to the current button (highlight it)

    var btnContainer = document.getElementById("myBtnContainer");

    var btns = btnContainer.getElementsByClassName("filtbtn");

    for (var i = 0; i < btns.length; i++) {

        btns[i].addEventListener("click", function() {

            var current = document.getElementsByClassName("active");

            current[0].className = current[0].className.replace(" active", "");

            this.className += " active";

        });

    }

    /**** END Tab filter ****/



    function onlyNumbers(evt)

    {

        var e = window.event || evt; // for trans-browser compatibility

        var charCode = e.which || e.keyCode;



        if (charCode > 31 && (charCode < 45 || charCode > 57))

            return false;



        return true;

    }
    </script>

    <script type='text/javascript'>
    /* <![CDATA[ */

    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/indicash.co.in\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };

    /* ]]> */
    </script>





    <script type='text/javascript'>
    /* <![CDATA[ */

    var awsmJobsPublic = {
        "ajaxurl": "https:\/\/indicash.co.in\/wp-admin\/admin-ajax.php",
        "is_tax_archive": "",
        "is_search": "",
        "job_id": "0",
        "wp_max_upload_size": "8388608",
        "i18n": {
            "loading_text": "Loading...",
            "form_error_msg": {
                "general": "Error in submitting your application. Please try again later!",
                "file_validation": "The file you have selected is too large."
            }
        }
    };

    /* ]]> */
    </script>

    <script type="text/javascript">
    window.addEventListener("load", function(event) {

        jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(function() {

            var form = jQuery(this);

            var screen_width = "";
            var screen_height = "";

            if (screen_width == "") {

                if (screen) {

                    screen_width = screen.width;

                } else {

                    screen_width = jQuery(window).width();

                }
            }

            if (screen_height == "") {

                if (screen) {

                    screen_height = screen.height;

                } else {

                    screen_height = jQuery(window).height();

                }
            }

            form.append('<input type="hidden" name="vx_width" value="' + screen_width + '">');

            form.append('<input type="hidden" name="vx_height" value="' + screen_height + '">');

            form.append('<input type="hidden" name="vx_url" value="' + window.location.href + '">');

        });



    });
    </script>