<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US" data-ng-app="beetApp">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>BEET | WELCOME</title>
    <meta name="description" content="Beet ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C300%2C700%7CRaleway%3A400%2C200%2C600%2C700&amp;ver=4.2.6"
          type="text/css" media="all">
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/icons/icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/core-icons/core_style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/scripts.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <style>
        div > p {
            cursor: pointer;
        }

        li h3:hover {
            color: #821e3b !important;
            font-weight: bold;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

    <script>
        var pant1 = "images/sing1.png";
        var pant2 = "images/donde1.jpg";
        var pant3 = "images/cat.png";
        var pant4 = "images/howit4.png";
        var pant5 = "images/howit5.png";
        var pant6 = "images/service.png";

        function changeImage(src) {
            document.getElementById("myImage").src = src;
        }
    </script>

</head>

<body class="page">

<div ng-include="'menu-bar.html'"></div>

<section id="ABdev_main_slider">
    <div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="main_slider"
         style="background-color:#E9E9E9;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
        <div id="rev_slider_12_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-38" data-transition="slideup" data-slotamount="0" data-easein="default"
                    data-easeout="default" data-masterspeed="500" data-thumb="rs-plugin/assets/1bg-100x50.jpg"
                    data-rotate="0" data-saveperformance="off" data-title="Repair Phone" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="rs-plugin/assets/dummy.png" alt="" data-lazyload="images/home-2.jpg"
                         data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"
                         class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Raleway   tp-resizeme" id="slide-38-layer-4" data-x="center" data-y="380"
                         data-width="auto" data-height="auto" data-transform_idle=""
                         data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;"
                         data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                         style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align:center;"><strong>WE KNOW THAT YOUR DEVICES</strong>
                            <br>ARE IMPORTANT FOR YOU
                        </div>
                    </div>
                    <!-- LAYER NR. 5
                    <div class="tp-caption Raleway_small   tp-resizeme" id="slide-38-layer-5" data-x="center" data-y="500" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:bottom;s:1600;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="550" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on" style="z-index: 9; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align:center;">Consectetur adipisicing elit. Ab vel mollitia dignissimos,<br>
                        scupiditate rerum facilis.</div>
                    </div>-->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-46" data-transition="slideup" data-slotamount="0" data-easein="default"
                    data-easeout="default" data-masterspeed="500" data-thumb="rs-plugin/assets/1bg-100x50.jpg"
                    data-rotate="0" data-saveperformance="off" data-title="Repair Phone" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="rs-plugin/assets/dummy.png" alt="" data-lazyload="images/tryit2-black.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"
                         class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Raleway   tp-resizeme" id="slide-38-layer-4" data-x="center" data-y="380"
                         data-width="auto" data-height="auto" data-transform_idle=""
                         data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;"
                         data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                         style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align:center;"><strong>GET A SERVICE</strong>
                            <br><a href="trynow.html" style="color: #ffffff">TRY IT NOW!</a></div>
                    </div>
                    <!-- LAYER NR. 5
                    <div class="tp-caption Raleway_small   tp-resizeme" id="slide-38-layer-5" data-x="center" data-y="500" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:bottom;s:1600;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="550" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on" style="z-index: 9; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align:center;">Consectetur adipisicing elit. Ab vel mollitia dignissimos,<br>
                        scupiditate rerum facilis.</div>
                    </div>-->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-42" data-transition="slidedown" data-slotamount="7" data-easein="default"
                    data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                    data-saveperformance="on" data-title="Service" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="rs-plugin/assets/dummy.png" alt="" data-lazyload="rs-plugin/assets/2bg.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"
                         class="rev-slidebg" data-no-retina>
                    <div class="tp-caption Raleway   tp-resizeme" id="slide-41-layer-6" data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="0" data-width="auto" data-height="auto" data-transform_idle=""
                         data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;" data-transform_out="y:top;s:300;s:300;"
                         data-start="250" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                         data-captionhidden="on"
                         style="z-index: 10; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align:center; font-size: 100px;"><a href="prices.html"
                                                                             style="color: #ffffff"><img id="main_logo"
                                                                                                         src="images/logo.png"
                                                                                                         alt="BEET"><br>
                            <span style="text-align:center; font-size: 80px">FOR BUSINESS</span>
                        </a></div>
                    </div>
                    <!-- LAYER NR. 7 color:rgba(132, 31, 59, 1.00);
                    <div class="tp-caption Raleway_small   tp-resizeme" id="slide-41-layer-7" data-x="center" data-hoffset="0" data-y="center" data-voffset="180" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:bottom;s:2000;e:Power4.easeInOut;" data-transform_out="y:top;s:300;s:300;" data-start="250" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 11; white-space: nowrap;border-color:rgba(255, 255, 255, 1.00);">
                        <div style="text-align: center;">consectetur adipisicing elit. Ab vel mollitia dignissimos <br>
                            scupiditate rerum facilis.
                        </div>
                    </div>-->
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</section>

<div id="aboutus"></div>
<section class="spiral_section_tc section_with_header">
    <header>
        <div class="spiral_container">
            <h3>¿Why we are the <strong>best option</strong> for you?</h3>
        </div>
    </header>
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span4 spiral-animo" data-animation="bounceInUp" data-trigger_pt="0"
                 data-duration="2000" data-delay="0">
                <div class="spiral_service_box spiral_service_box_default ">
                    <div class="spiral_service_box_header link-p">
                        <a href="#" target="_self" class="spiral_icon_boxed">
                            <i class="tmf-settings service_box_default_icon_style"></i>
                        </a>
                        <a href="#" target="_self"><h3>PRODUCTIVITY</h3></a>
                    </div>
                    <p style="color: #821e3b; text-align: center">Missing any lifetime worthwhile moments? You don't have to miss a thing! We're online 24/7.</p>
                </div>
            </div>
            <div class="spiral_column_tc_span4 spiral-animo" data-animation="bounceInUp" data-trigger_pt="0"
                 data-duration="2000" data-delay="100">
                <div class="spiral_service_box spiral_service_box_default ">
                    <div class="spiral_service_box_header">
                        <a href="#" target="_self" class="spiral_icon_boxed">
                            <i class="tmf-link service_box_default_icon_style"></i>
                        </a>
                        <a href="#" target="_self">
                            <h3>CONNECTIVITY</h3>
                        </a>
                    </div>
                    <p style="color: #821e3b; text-align: center">BEET lets you connect with thousands of our users-anytime and everywhere through our app.</p>
                </div>
            </div>

            <div class="spiral_column_tc_span4 spiral-animo" data-animation="bounceInUp" data-trigger_pt="0"
                 data-duration="2000" data-delay="200">
                <div class="spiral_service_box spiral_service_box_default ">
                    <div class="spiral_service_box_header">
                        <a href="#" target="_self" class="spiral_icon_boxed">
                            <i class="tmf-arrow-top-right service_box_default_icon_style"></i>
                        </a>
                        <a href="#" target="_self"><h3>EFFICIENCY</h3></a>
                    </div>
                    <p style="color: #821e3b; text-align: center">Just like that in a snap, your technician just arrives and gets the job done! When it's all fixed up, payment will go securely through our app.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spiral_section_tc tabs_bg_black">
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span12 center_aligned">
                <blockquote class="spiral_blockquote spiral_blockquote_style4 ">
                    <p> Our <strong>same-day service platform</strong> instantly connects you with<br/> <strong>skilled technician</strong> to repair your devices in record time </p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<div id="howitworks" name="howitworks"></div>
<section class="spiral_section_tc">
    <header>
        <div class="spiral_container">
            <h3>How it <strong>Works</strong></h3>
        </div>
    </header>
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span2"></div>
            <div class="spiral_column_tc_span4">

                <div class="images spiral-animo" data-animation="fadeInLeft" data-trigger_pt="0" data-duration="1000"
                     data-delay="200" style="width: 300px">
                    <img id="myImage" src="images/sing1.png">
                </div>
            </div>

            <div class="spiral_column_tc_span5">
                <div class="spiral_stats_excerpt spiral_stats_excerpt_1">

                    <ul class="spiral_shortcode_ul left_aligned gray_text" style="margin-top: 30px;">
                        <li onmouseover="changeImage(pant1)">
                            <img src="images/svg/008-web-log-in.svg" width="30px" style="float: left;"
                                 onmouseover="this.src='https://placeimg.com/480/480/any'"
                                 onmouseout="this.src='images/svg/008-web-log-in.svg'"/>
                            <h3 style="color: gray; margin-left: 50px; word-break: normal;">Log in through our app</h3>

                        </li>
                        <li onmouseover="changeImage(pant2)">
                            <img src="images/svg/007-map-location.svg" width="30px" style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">Let us know where you
                                are</h3>
                        </li>
                        <li onmouseover="changeImage(pant3)">
                            <img src="images/svg/005-category.svg" width="30px" style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">Choose one of the service
                                categories</h3>

                        </li>
                        <li onmouseover="changeImage(pant4)">
                            <img src="images/svg/003-male-silhouette-holding-wrench.svg" width="30px"
                                 style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">We find the perfect tech
                                for your service</h3>
                        </li>
                        <li onmouseover="changeImage(pant5)">
                            <img src="images/svg/002-time.svg" width="30px" style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">We'll follow up with your
                                confirmed appointment time. They'll arrive on-time and ready to get to work</h3>
                        </li>
                        <li>
                            <img src="images/svg/001-hourglass.svg" width="30px" style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">Now sit back and relax
                                while your tech does the heavy lifting</h3>
                        </li>
                        <li onmouseover="changeImage(pant6)">
                            <img src="images/svg/web-log-out.svg" width="30px" style="float: left;"/>
                            <h3 style="color: gray;  margin-left: 50px; word-break: normal;">Once you're complety
                                satisfied, simply sign off on the work completed</h3>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<div id="joinus"><a name="joinus"></a></div>
<section class="spiral_section_tc spiral-parallax spiral-inversed_text section_body_fullwidth section_bg_image"
         data-background_image="images/typingbg.jpg" data-parallax="0.1">
    <header><span class="clear spacer_100"></span>
        <div class="spiral_container white_text">
            <h3>Join to
                <strong> our Tech Team</strong>
            </h3>
        </div>
    </header>

    <div class="spiral_container">
        <div class="spiral_column_tc_span12 spiral-animo center_aligned" data-animation="fadeInUp" data-trigger_pt="0"
             data-duration="500" data-delay="0">
            <div class="">
                <h3 class="white_text center_aligned">
                    <span>No more schedules, we have thousands of services available to be attended by you in the time that you want. Find yours and start make money right now.</span>
                </h3>
                <span class="clear spacer_100"></span>
                </span><a href="joinus.html" target="_self"
                          class="spiral-button spiral-button_light spiral-button_rounded spiral-button_medium ripplelink spiral-button_transparent ">Join
                Us</a>
            </div>
            <span class="clear spacer_100"></span>
        </div>
    </div>
</section>
<div id="newsevents"></div>
<section
        class="spiral_section_tc spiral-centered spiral-inversed_text section_body_fullwidth section_with_header section_bg no_padding_bottom">

    <header>
        <div class="spiral_container">
            <h3>News & <strong>Events</strong>
            </h3>
        </div>
    </header>
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span12 spiral-animo" data-animation="bounceInRight" data-trigger_pt="0"
                 data-duration="1000" data-delay="0">
                <div class="spiral_post_excerpt_carousel" data-duration="800">
                    <div class="carousel_navigation">
                        <a href="#" class="carousel_prev">
                            <i class="ci_icon-angle-left"></i>
                        </a>
                        <a href="#" class="carousel_next">
                            <i class="ci_icon-angle-right"></i>
                        </a>
                    </div>
                    <ul class="clearfix">
                        <li class="first">
                        <li>
                            <div class="spiral_posts_shortcode_carousel spiral_posts_shortcode spiral_posts_shortcode-1 clearfix">
                                <a class="spiral_latest_news_shortcode_thumb" href="#">
                                    <img src="http://placehold.it/570x300" alt="post2">
                                </a>
                                <div class="spiral_latest_news_shortcode_container">
                                    <div class="date_container">
                                        <div class="spiral_posts_date_month">Jun</div>
                                        <div class="spiral_posts_date_day">15</div>
                                    </div>
                                    <div class="spiral_latest_news_shortcode_content">
                                        <h5>
                                            <a href="#">Vestibulum scelerisque imperdiet molestie.</a>
                                        </h5>
                                        <div class="spiral_posts_author">by
                                            <a href="#">admin</a>
                                        </div>
                                        <div class="spiral_posts_comments">1 comment</div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Now that we know who you are, I
                                            know who I am. I’m...</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="spiral_posts_shortcode_carousel spiral_posts_shortcode spiral_posts_shortcode-1 clearfix">
                                <a class="spiral_latest_news_shortcode_thumb" href="#">
                                    <img src="http://placehold.it/570x300" alt="post5">
                                </a>
                                <div class="spiral_latest_news_shortcode_container">
                                    <div class="date_container">
                                        <div class="spiral_posts_date_month">Jun</div>
                                        <div class="spiral_posts_date_day">15</div>
                                    </div>
                                    <div class="spiral_latest_news_shortcode_content">
                                        <h5>
                                            <a href="blog-fullwidth.html">Vestibulum scelerisque imperdiet molestie.</a>
                                        </h5>
                                        <div class="spiral_posts_author">by
                                            <a href="#">admin</a>
                                        </div>
                                        <div class="spiral_posts_comments">0 comments</div>
                                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Now that we know who you...</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="spiral_posts_shortcode_carousel spiral_posts_shortcode spiral_posts_shortcode-1 clearfix">
                                <a class="spiral_latest_news_shortcode_thumb" href="#">
                                    <img src="http://placehold.it/570x300" alt="post1">
                                </a>
                                <div class="spiral_latest_news_shortcode_container">
                                    <div class="date_container">
                                        <div class="spiral_posts_date_month">Jun</div>
                                        <div class="spiral_posts_date_day">10</div>
                                    </div>
                                    <div class="spiral_latest_news_shortcode_content">
                                        <h5>
                                            <a href="#">Vestibulum scelerisque imperdiet molestie.</a>
                                        </h5>
                                        <div class="spiral_posts_author">by
                                            <a href="#">admin</a>
                                        </div>
                                        <div class="spiral_posts_comments">0 comments</div>
                                        <p>Nunc eros arcu, porttitor a ornare at, eleifend ut sapien. Nunc sagittis
                                            hendrerit mollis. Donec id leo id nibh vestibulum sodales.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="spiral_posts_shortcode_carousel spiral_posts_shortcode spiral_posts_shortcode-1 clearfix">
                                <a class="spiral_latest_news_shortcode_thumb" href="#">
                                    <img src="http://placehold.it/570x300" alt="audiothumb1">
                                </a>
                                <div class="spiral_latest_news_shortcode_container">
                                    <div class="date_container">
                                        <div class="spiral_posts_date_month">Jan</div>
                                        <div class="spiral_posts_date_day">15</div>
                                    </div>
                                    <div class="spiral_latest_news_shortcode_content">
                                        <h5>
                                            <a href="#">Mauris lobortis vel lacus sed vestibulum. </a>
                                        </h5>
                                        <div class="spiral_posts_author">by
                                            <a href="#">admin</a>
                                        </div>
                                        <div class="spiral_posts_comments">0 comments</div>
                                        <p>Nunc eros arcu, porttitor a ornare at, eleifend ut sapien. Nunc sagittis
                                            hendrerit mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="spiral_posts_shortcode_carousel spiral_posts_shortcode spiral_posts_shortcode-1 clearfix">
                                <a class="spiral_latest_news_shortcode_thumb" href="#">
                                    <img src="http://placehold.it/570x300" alt="post3">
                                </a>
                                <div class="spiral_latest_news_shortcode_container">
                                    <div class="date_container">
                                        <div class="spiral_posts_date_month">Nov</div>
                                        <div class="spiral_posts_date_day">15</div>
                                    </div>
                                    <div class="spiral_latest_news_shortcode_content">
                                        <h5>
                                            <a href="#">Mauris lobortis vel lacus sed vestibulum. </a>
                                        </h5>
                                        <div class="spiral_posts_author">by
                                            <a href="#">admin</a>
                                        </div>
                                        <div class="spiral_posts_comments">0 comments</div>
                                        <p>Nunc eros arcu, porttitor a ornare at, eleifend ut sapien. Nunc sagittis
                                            hendrerit mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="spiral_section_tc spiral-centered no_padding_top section_bg">
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span12">
                <a href="blog-timeline.html" target="_self"
                   class="spiral-button spiral-button_light spiral-button_rounded spiral-button_medium ripplelink spiral-button_transparent ">More
                    News and Events</a>
            </div>
        </div>
    </div>
</section>

<div id="contactus"></div>
<section class="spiral_section_tc column_title_left section_with_header" style=" background-color: #F3F3F3">
    <header>
        <div class="spiral_container">
            <h3>WANT
                <strong> TO HEAR</strong> MORE?
            </h3>
        </div>
    </header>
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span4">
                <h3 class="gray_text">
                    <span>Contact Us</span>
                </h3>
                <span class="clear spacer_30"></span>
                <div class="gray_text">
                    <p>60th Street <br>Ciudad de Guatemala, Guatemala</p>
                    <p>(01)234 555 -6523<br>
                        <a href="mailto:">info@beetcg.com</a>
                    </p>
                </div>
                <h3 class="gray_text">
                    <span>Follow Us</span>
                </h3>
                <div class="spiral_follow_us">
                    <a class="spiral_tooltip" data-gravity="s" href="http://www.linkedin.com" target="_blank"
                       title="Follow us on Linkedin"><i class="tmf-linkedin"></i></a>
                    <a class="spiral_tooltip" data-gravity="s" href="http://www.instagram.com/beetcg" target="_blank"
                       title="Follow us on Instagram"><i class="tmf-instagram"></i></a>
                </div>
            </div>
            <div class="spiral_column_tc_span8">
                <h2 class="dark_gray">
						<span>
							<strong>Feel free to contact us</strong>
						</span>
                </h2>
                <span class="clear spacer_10"></span>
                <div class="spiralcf" id="spiralcf-wrapper" dir="ltr">
                    <form action="#" method="post" class="contact-form" style="color: #000000" name="sentMessage"
                          id="contactForm" novalidate>
                        <div class="hidden">
                            <input type="hidden" name="nonce" value="214a162653">
                            <input type="hidden" name="formid" id="formid" value="contact" style="color: grey;">
                        </div>
                        <div class="row">
                            <div class="span6">
									<span class="spiralcf-form-control-wrap your-name">
										<input type="text" name="name" value="" size="40" class="spiralcf-text"
                                               placeholder="Name" style="color: grey;">
									</span>
                            </div>
                            <div class="span6">
									<span class="spiralcf-form-control-wrap your-email">
										<input type="email" name="email" value="" size="40"
                                               class="spiralcf-text spiralcf-email spiralcf-validates-as-email"
                                               placeholder="Email" style="color: grey;">
									</span>
                            </div>
                        </div>
                        <div class="row">
								<span class="spiralcf-form-control-wrap your-message">
									<textarea name="message" cols="40" rows="10" class="spiralcf-textarea"
                                              placeholder="Message"></textarea>
								</span>
                            <br>
                            <input type="submit" value="Send Message" class="spiralcf-submit" id="spiralcf-submit">
                        </div>
                        <div class="spiralcf-response-output spiralcf-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="spiral_section_tc section_body_fullwidth no_padding">
    <div class="spiral_section_content">
        <div class="spiral_container">
            <div class="spiral_column_tc_span12">
                <div class="spiral_google_map_wrapper">
                    <div id="spiral_google_map_1" data-map_type="ROADMAP" data-auto_center_zoom="0" data-lat="14.633858"
                         data-lng="-90.506981" data-zoom="13" data-scrollwheel="0" data-maptypecontrol="1"
                         data-pancontrol="1" data-zoomcontrol="1" data-scalecontrol="1"
                         class="spiral_google_map google_map_style_2">
                    </div>
                    <div class="spiral_google_map_marker" data-title="Guatemala" data-icon="images/pin.png"
                         data-lat="14.633858" data-lng="-90.506981">
                        <h5>60th street, Guatemala</h5>
                        <p class="no_margin_bottom">60th street, Guatemala</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="ABdev_main_footer">
    <div id="footer_copyright">
        <div class="container">
            <div class="row">
                <div class="span4 footer_copyright left_aligned">
                    BEET ©2017. All Rights Reserved
                    <a href="../es/index.html">
                        <img src="images/es.svg" width="20px"></a>
                </div>
                <div class="span6 right_aligned">


                    <a href="#"><img src="images/google-play-badge.svg" width="135"></a>
                    <a href="#"><img src="images/Download_on_the_App_Store_Badge_US-UK_135x40.svg"></a>
                </div>
                <div class="span2 center_aligned">
                    <a href="#" id="back_to_top" title="Back to top">
                        <i class="ci_icon-angle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="../js/angular/angular.min.js"></script>
<script type="text/javascript" src="../js/angular/app.js"></script>
<script type="text/javascript" src="js/stickymenu.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/portfolio-init.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>