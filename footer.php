<footer>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        section {

            padding: 1px 0;
            /* min-height: 100vh;*/
        }

        .footer {
            /* max-height:400px; */
            background: linear-gradient(105deg, #04192e, #04192e);
            padding-top: 40px;
            padding-bottom: 30px;
        }

        /*END FOOTER SOCIAL DESIGN*/
        .single_footer {}

        @media only screen and (max-width:768px) {
            .single_footer {
                margin-bottom: 30px;
            }
        }

        .single_footer h4 {
            color: #fff;
            margin-top: 0;
            margin-bottom: 25px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 20px;
        }

        .single_footer h4::after {
            content: "";
            display: block;
            height: 2px;
            width: 40px;
            background: #fff;
            margin-top: 20px;
        }

        .single_footer p {
            color: #fff;
        }

        .single_footer ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .single_footer ul li {}

        .single_footer ul li a {
            color: #fff;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            line-height: 36px;
            font-size: 15px;
            text-transform: capitalize;
        }

        .single_footer ul li a:hover {
            color: #ff3666;
        }

        .single_footer_address {}

        .single_footer_address ul {}

        .single_footer_address ul li {
            color: #fff;
        }

        .single_footer_address ul li span {
            font-weight: 400;
            color: #fff;
            line-height: 28px;
        }

        .contact_social ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }

        /*START NEWSLETTER CSS*/
        .subscribe {
            display: block;
            position: relative;
            margin-top: 15px;
            width: 100%;
        }

        .subscribe__input {
            background-color: #fff;
            border: medium none;
            border-radius: 5px;
            color: #333;
            display: block;
            font-size: 15px;
            font-weight: 500;
            height: 60px;
            letter-spacing: 0.4px;
            margin: 0;
            padding: 0 150px 0 20px;
            text-align: center;
            text-transform: capitalize;
            width: 100%;
        }

        @media only screen and (max-width:768px) {
            .subscribe__input {
                padding: 0 50px 0 20px;
            }
        }

        .subscribe__btn {
            background-color: transparent;
            border-radius: 0 25px 25px 0;
            color: #01c7e9;
            cursor: pointer;
            display: block;
            font-size: 20px;
            height: 60px;
            position: absolute;
            right: 0;
            top: 0;
            width: 60px;
        }

        .subscribe__btn i {
            transition: all 0.3s ease 0s;
        }

        @media only screen and (max-width:768px) {
            .subscribe__btn {
                right: 0px;
            }
        }

        .subscribe__btn:hover i {
            color: #ff3666;
        }

        button {
            padding: 0;
            border: none;
            background-color: transparent;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        /*END NEWSLETTER CSS*/

        /*START SOCIAL PROFILE CSS*/
        .social_profile {
            margin-top: 40px;
        }

        .social_profile ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }

        .social_profile ul li {
            float: left;
        }

        .social_profile ul li a {
            text-align: center;
            border: 0px;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
            margin: 0px 5px;
            font-size: 18px;
            color: #fff;
            border-radius: 30px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            display: block;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @media only screen and (max-width:768px) {
            .social_profile ul li a {
                margin-right: 10px;
                margin-bottom: 10px;
            }
        }

        @media only screen and (max-width:480px) {
            .social_profile ul li a {
                width: 40px;
                height: 40px;
                line-height: 40px;
            }
        }

        .social_profile ul li a:hover {
            background: #ff3666;
            border: 1px solid #ff3666;
            color: #fff;
            border: 0px;
        }

        /*END SOCIAL PROFILE CSS*/
        .copyright {
            margin-top: 70px;
            padding-top: 40px;
            color: #fff;
            font-size: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.4);
            text-align: center;
        }

        .copyright a {
            color: #01c7e9;
            transition: all 0.2s ease 0s;
        }

        .copyright a:hover {
            color: #ff3666;
        }
    </style>
    <div class="footer" style="margin: 0%; margin-top:0%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="single_footer">
                        <h4>Courses</h4>
                        <ul>
                            <li><a href="department-computer-science.html">Computer Science Engineering</a></li>
                            <li><a href="">Computer Science Engineering(AI & ML)</a></li>
                            <li><a href="department-ECE.html">Electronics and Communication Engineering</a></li>
                            <li><a href="department-mech.html">Mechanical Engineering</a></li>
                            <li><a href="department-civil.html">Civil Engineering</a></li>
                            <!-- <li><a href="#">-----------------</a></li>
                            <li><a href="#">Hostel Facilities</a></li>
                            <li><a href="#">Campus</a></li>
                            <li><a href="#">Playground</a></li> -->

                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Page Link</h4>
                        <ul>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="aboutus.php#president">Our Founder</a></li>
                            <li><a href="aboutkvgce.php#about">Motto,Mission & Vision</a></li>


                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Contact Us</h4>
                        <div class="signup_form">
                            <form action="#" class="subscribe">
                                <input type="text" class="subscribe__input" placeholder="Ask a question here" id="email12">
                                <button type="button" class="subscribe__btn" onclick="gotowhatsapp1()"><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="social_profile">
                        <ul>
                            <!-- <li><a href="https://www.facebook.com/KVG-College-of-Engineering-105686592193925/?ref=page_internal"><i class="fab fa-facebook-f"></i></a></li> -->
                            <li><a href="https://www.instagram.com/p/Cf5jQe2p1Bb/?utm_source=ig_web_button_share_sheet" target="_blank"><i class="entypo-instagrem"></i></a></li>
                            <li><a href="https://www.facebook.com/KVG-College-of-Engineering-105686592193925/?ref=page_internal" target="_blank"><i class="entypo-facebook"></i></a></li>
                            <li><a href="#"><i class="entypo-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <p class="copyright">Copyright © 2022 <a href="#">ANASOFT</a>.</p>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
</footer>


<!-- endfooter -->
<script>
    function gotowhatsapp1() {

        // var name = document.getElementById("name").value;
        // var phone = document.getElementById("phone").value;
        var email = document.getElementById("email12").value;
        // var service = document.getElementById("service").value;
        // https://api.whatsapp.com/send?text
        var url = "https://api.whatsapp.com/send?phone=7618752850&text=" +
            "Question:" + "%0a"

            +
            "Email: " + email + "%0a";
        // + "Service: " + service +"\n";


        window.open(url, '_blank').focus();
    }
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47795374-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-47795374-1');
</script>


<!-- Google Tag Manager DM Team college on 6th may 2020-->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NVNRLTG');
</script>
<!-- End Google Tag Manager -->

<a href="#" class="back-to-top wow fadeIn">TOP</a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/pushy.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="css/magnific/jquery.magnific-popup.js"></script>

<script>
    jQuery.noConflict();
    (function($) {
        $(document).ready(function() {
            // Start Header Animation
            //var height = $(window).height();
            var height = 50;
            $(window).scroll(function() {
                if ($(document).scrollTop() > height - 1) {
                    $('.top-menu').addClass('tiny');
                } else {
                    $('.top-menu').removeClass('tiny');
                }
            });
            /**back-to-top starts**/
            var offset = 200;
            var duration = 900;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
            /**back-to-top ends**/

        });
        //Wow
        new WOW().init();

        $(document).ready(function() {
            'use strict';
            $("html").niceScroll({
                cursorcolor: '#075c9f',
                cursoropacitymin: '1',
                cursorborder: '0px',
                cursorborderradius: '5px',
                mousescrollstep: 40,
                cursorwidth: '4px',
                cursorminheight: 60,
                horizrailenabled: false,
                zindex: 1111
            });



            //magnific-popup
            $('.image-popup-no-margins').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            });
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });

            $('.zoom-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',

                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function(element) {
                        return element.find('img');
                    }
                }

            });

            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });

            //Multiple galleries
            $('.gallery').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });

            /**social strts**/
            $('.fixedSocialIcon ul li').hover(function() {
                $(this).addClass('hover');
                $(this).stop(true, false).animate({
                    left: -60
                }, 500);
            }, function() {
                $(this).stop(true, false).animate({
                    left: 0
                }, 500, function() {
                    $(this).removeClass('hover');
                });
            });
            /**social end**/


        });
    })(jQuery);
</script>
<!-- Social Media Start -->
<!-- <div class="fixedSocialIcon" ">
        <ul>
            <li class="facebook"><a
                    href="https://www.facebook.com/pages/category/Educational-Research-Center/St-Joseph-Engineering-College-Mangalore-693504384043128/"
                    target="_blank"><span></span>/sjec</a></li>
            <li class="twitter"><a href="https://twitter.com/SJEC_Mangaluru?s=08" target="_blank"><span></span>@sjec</a>
            </li>
            <li class="instagram"><a href="https://instagram.com/official_sjec_mangaluru"
                    target="_blank"><span></span>@sjec</a></li>
            <li class="youtube"><a href="https://www.youtube.com/channel/UCUI7tBByrJ-T1cdN_CrifIg?view_as=subscriber"
                    target="_blank"><span></span>/chillipages</a></li> -->
<!--<li class="googlePlus"><a href="#nogo" target="_blank"><span></span>+chillipages</a></li>
        <li class="linkedin"><a href="#" target="_blank"><span></span>chillipages</a></li>
        <li class="youtube"><a href="#nogo" target="_blank"><span></span>/chillipages</a></li>-->
<!-- </ul>
    </div> -->
<!-- Social Media End -->
<!-- Pushy JS -->
<link rel="stylesheet" href="css/pushy.css">
<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <br />
    <br />
    <br />
    <br />
    <div class="modal-content">
        <div class="modal-body" align="center" style="width:fit-content;height: fit-content;top: 15%;">
            <!-- <button data-dismiss="modal" class="close">&times;</button> -->
            <h4>Admission Form</h4>
            <form onsubmit="gotowhatsapp()">
                <input type="text" name="username" class="username form-control" placeholder="Name" id="name" required />
                <input type="email" name="Email" class="username form-control" placeholder="Email" id="email" required />
                <input type="tel" name="phone" class="username form-control" placeholder="Phone Number" id="phone" pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Please Enter a valid Phone Number')" oninput="this.setCustomValidity('')" required />

                <!-- <input type="text" name="username" class="username form-control" placeholder="Name of the previous college" />
                        <input type="text" name="username" class="username form-control" placeholder="City" />
                        <input type="text" name="username" class="username form-control" placeholder="District" />
                        <input type="text" name="username" class="username form-control" placeholder="State" />
                        <input type="text" name="username" class="username form-control" placeholder="Pre-University board"/>
                        <input type="text" name="username" class="username form-control" placeholder="Marks secured in Pre-university" />
                        <input type="text" name="username" class="username form-control" placeholder="CET Rank"/> -->

                <input class="btn login" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</nav>
<style>
    .swing {
        animation: swing ease-in-out .5s infinite alternate;
        transform-origin: center -20px;
        float: left;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0);
    }

    .swing img {
        border: 5px solid #f8f8f8;
        display: block;
    }

    .swing:after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 1px solid #999;
        top: -10px;
        left: 50%;
        z-index: 0;
        border-bottom: none;
        border-right: none;
        transform: rotate(45deg);
    }

    /* nail */
    .swing:before {
        content: '';
        position: absolute;
        width: 5px;
        height: 5px;
        top: -14px;
        left: 54%;
        z-index: 5;
        border-radius: 50% 50%;
        background: #000;
    }

    @keyframes swing {
        0% {
            transform: rotate(12deg);
        }

        100% {
            transform: rotate(-12deg);
        }
    }
</style>
<!-- Site Overlay -->
<div class="site-overlay1"></div>
<div class="site-overlay"></div>
<!-- <div class="alert alert-info" style="font-size:25px; font-weight: bold;">
        Addmission
    </div> -->
<!-- <a href="#" data-target="#login" data-toggle="modal"> <button class="alert alert-info swing " style="background-color: #ffc800;
                border:2px solid black;
                border-color: #000;
                color: rgb(0, 0, 0);
                padding: 10px;
                padding-left: 2%;
                padding-right: 2%;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                
                margin: 4px 2px; border-radius: 50px; "><strong>Admission</strong></button> </a> -->
<!-- <div class="alert alert-info total"> 
                    <div class="all-wrap">  
                      <div class="all">
                        <div class="yarn">
                          <a href="https://codepen.io">Click Me</a> 
                        </div>
                       
                    </div>
                    </div> -->
<style>
    .login-trigger {
        font-weight: bold;
        color: #fff;
        background: linear-gradient(to bottom right, #B05574, #F87E7B);
        padding: 15px 30px;
        border-radius: 30px;
        position: relative;
        top: 50%;
    }

    /*Modal*/
    h4 {
        font-weight: bold;
        color: #fff;
    }

    .close {
        color: #fff;
        transform: scale(1.2)
    }

    .modal-content {
        font-weight: bold;
        background: linear-gradient(to bottom right, #F87E7B, #B05574);
    }

    .form-control {
        margin: 1em 0;
    }

    .form-control:hover,
    .form-control:focus {
        box-shadow: none;
        border-color: #fff;
    }

    .username,
    .password {
        border: none;
        border-radius: 0;
        box-shadow: none;
        border-bottom: 2px solid #eee;
        padding-left: 0;
        font-weight: normal;
        background: transparent;
    }

    .form-control::-webkit-input-placeholder {
        color: #eee;
    }

    .form-control:focus::-webkit-input-placeholder {
        font-weight: bold;
        color: #fff;
    }

    .login {
        padding: 6px 20px;
        border-radius: 20px;
        background: none;
        border: 2px solid #FAB87F;
        color: #FAB87F;
        font-weight: bold;
        transition: all .5s;
        margin-top: 1em;
    }

    .login:hover {
        background: #FAB87F;
        color: #fff;
    }

    #login {
        margin-left: 80%;
    }

    @media (max-width:767px) {
        #login {
            margin-left: 20%;
        }
    }
</style>
<!-- <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Login</a> -->

<div id="login" class="modal fade" role="dialog" style="width:fit-content; height: fit-content;top: 15%;">
    <div class="modal-dialog" style="width:fit-content;height: fit-content;top: 15%;">

        <div class="modal-content">
            <div class="modal-body" align="center" style="width:fit-content;height: fit-content;top: 15%;">
                <button data-dismiss="modal" class="close">&times;</button>
                <h4>Admission Form</h4>
                <form onsubmit="gotowhatsapp()">
                    <input type="text" name="username" class="username form-control" placeholder="Name" id="name" required />
                    <input type="email" name="Email" class="username form-control" placeholder="Email" id="email" required />
                    <input type="tel" name="phone" class="username form-control" placeholder="Phone Number" id="phone" pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Please Enter a valid Phone Number')" oninput="this.setCustomValidity('')" required />

                    <!-- <input type="text" name="username" class="username form-control" placeholder="Name of the previous college" />
                        <input type="text" name="username" class="username form-control" placeholder="City" />
                        <input type="text" name="username" class="username form-control" placeholder="District" />
                        <input type="text" name="username" class="username form-control" placeholder="State" />
                        <input type="text" name="username" class="username form-control" placeholder="Pre-University board"/>
                        <input type="text" name="username" class="username form-control" placeholder="Marks secured in Pre-university" />
                        <input type="text" name="username" class="username form-control" placeholder="CET Rank"/> -->

                    <input class="btn login" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function gotowhatsapp() {

        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        // var service = document.getElementById("service").value;
        // https://api.whatsapp.com/send?text
        var url = "https://api.whatsapp.com/send?phone=7618752850&text=" +
            "Admisssion at KVGCE" + "%0a" +
            "Name: " + name + "%0a" +
            "Phone: " + phone + "%0a" +
            "Email: " + email + "%0a";
        // + "Service: " + service +"\n";


        window.open(url, '_blank').focus();
    }
</script>


<!-- <style>
        .social-btn {
            display: flex;
            width: 150px;
            align-items: center;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px;
            border-bottom-right-radius: 30px;
            border-top-right-radius: 20px;
            margin-bottom: 5px;
            position: relative;
            left: -145px;
            transition: left 1s;
        }

        .social-btn:hover {
            left: -10px;
            transition: left 1s;
        }

        .social {
            position: fixed;
            top: 50px;
        }

        .social a {
            text-decoration: none;
        }

        .color-telegram {

            background-color: #0084c6;
        }

        .color-instagram {
            background-color: #f62782;
        }

        .color-whatsapp {
            background-color: #24cc63;
        }

        .google-font {
            font-family: "Lato", sans-serif;
            font-size: 1.25rem;
            align-items: right;
        }

        .social-btn img {
            width: 40px;
        }

        .social-btn p {
            color: white;
            
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .icons8-telegram-app {
            order: 2;
            display: inline-block;
            width: 40px;
            height: 40px;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCA1MCA1MCIKc3R5bGU9IiBmaWxsOiNmZmZmZmY7Ij48cGF0aCBkPSJNIDQ0LjM3Njk1MyA1Ljk4NjMyODEgQyA0My44ODk5MDUgNi4wMDc2OTU3IDQzLjQxNTgxNyA2LjE0MzI0OTcgNDIuOTg4MjgxIDYuMzE0NDUzMSBDIDQyLjU2NTExMyA2LjQ4NDUxMTMgNDAuMTI4ODgzIDcuNTI0MzQwOCAzNi41MzEyNSA5LjA2MjUgQyAzMi45MzM2MTcgMTAuNjAwNjU5IDI4LjI1Njk2MyAxMi42MDM2NjggMjMuNjIxMDk0IDE0LjU4OTg0NCBDIDE0LjM0OTM1NiAxOC41NjIxOTYgNS4yMzgyODEzIDIyLjQ3MDcwMyA1LjIzODI4MTIgMjIuNDcwNzAzIEwgNS4zMDQ2ODc1IDIyLjQ0NTMxMiBDIDUuMzA0Njg3NSAyMi40NDUzMTIgNC43NTQ3ODc1IDIyLjYyOTEyMiA0LjE5NzI2NTYgMjMuMDE3NTc4IEMgMy45MTg1MDQ3IDIzLjIxMTgwNiAzLjYxODYwMjggMjMuNDYyNTU1IDMuMzczMDQ2OSAyMy44MjgxMjUgQyAzLjEyNzQ5MSAyNC4xOTM2OTUgMi45NDc5NzM1IDI0LjcxMTc4OCAzLjAxNTYyNSAyNS4yNTk3NjYgQyAzLjI1MzI0NzkgMjcuMTg0NTExIDUuMjQ4MDQ2OSAyNy43MzA0NjkgNS4yNDgwNDY5IDI3LjczMDQ2OSBMIDUuMjU1ODU5NCAyNy43MzQzNzUgTCAxNC4xNTgyMDMgMzAuNzgxMjUgQyAxNC4zODUxNzcgMzEuNTM4NDM0IDE2Ljg1ODMxOSAzOS43OTI5MjMgMTcuNDAyMzQ0IDQxLjU0MTAxNiBDIDE3LjcwMjc5NyA0Mi41MDc0ODQgMTcuOTg0MDEzIDQzLjA2NDk5NSAxOC4yNzczNDQgNDMuNDQ1MzEyIEMgMTguNDI0MTMzIDQzLjYzNTYzMyAxOC41Nzc5NjIgNDMuNzgyOTE1IDE4Ljc0ODA0NyA0My44OTA2MjUgQyAxOC44MTU2MjcgNDMuOTMzNDE1IDE4Ljg4NjcgNDMuOTY1NTI1IDE4Ljk1NzAzMSA0My45OTQxNDEgQyAxOC45NTg1MzEgNDMuOTk0ODA2IDE4Ljk1OTQzNyA0My45OTM0OCAxOC45NjA5MzggNDMuOTk0MTQxIEMgMTguOTY5NTc5IDQzLjk5Nzk1MiAxOC45Nzc3MDggNDMuOTk4Mjk1IDE4Ljk4NjMyOCA0NC4wMDE5NTMgTCAxOC45NjI4OTEgNDMuOTk2MDk0IEMgMTguOTc5MjMxIDQ0LjAwMjY5NCAxOC45OTUzNTkgNDQuMDEzODAxIDE5LjAxMTcxOSA0NC4wMTk1MzEgQyAxOS4wNDM0NTYgNDQuMDMwNjU1IDE5LjA2MjkwNSA0NC4wMzAyNjggMTkuMTAzNTE2IDQ0LjAzOTA2MiBDIDIwLjEyMzA1OSA0NC4zOTUwNDIgMjAuOTY2Nzk3IDQzLjczNDM3NSAyMC45NjY3OTcgNDMuNzM0Mzc1IEwgMjEuMDAxOTUzIDQzLjcwNzAzMSBMIDI2LjQ3MDcwMyAzOC42MzQ3NjYgTCAzNS4zNDU3MDMgNDUuNTU0Njg4IEwgMzUuNDU3MDMxIDQ1LjYwNTQ2OSBDIDM3LjAxMDQ4NCA0Ni4yOTUyMTYgMzguNDE1MzQ5IDQ1LjkxMDQwMyAzOS4xOTMzNTkgNDUuMjc3MzQ0IEMgMzkuOTcxMzcgNDQuNjQ0Mjg0IDQwLjI3NzM0NCA0My44MjgxMjUgNDAuMjc3MzQ0IDQzLjgyODEyNSBMIDQwLjMxMDU0NyA0My43NDIxODggTCA0Ni44MzIwMzEgOS43NTE5NTMxIEMgNDYuOTk4OTAzIDguOTkxNTE2MiA0Ny4wMjI2MTIgOC4zMzQyMDIgNDYuODY1MjM0IDcuNzQwMjM0NCBDIDQ2LjcwNzg1NyA3LjE0NjI2NjggNDYuMzI1NDkyIDYuNjI5OTM2MSA0NS44NDU3MDMgNi4zNDM3NSBDIDQ1LjM2NTkxNCA2LjA1NzU2MzkgNDQuODY0MDAxIDUuOTY0OTYwNSA0NC4zNzY5NTMgNS45ODYzMjgxIHogTSA0NC40Mjk2ODggOC4wMTk1MzEyIEMgNDQuNjI3NDkxIDguMDEwMzcwNyA0NC43NzQxMDIgOC4wMzI5ODMgNDQuODIwMzEyIDguMDYwNTQ2OSBDIDQ0Ljg2NjUyMyA4LjA4ODExMDkgNDQuODg3MjcyIDguMDg0NDgyOSA0NC45MzE2NDEgOC4yNTE5NTMxIEMgNDQuOTc2MDExIDguNDE5NDIzIDQ1LjAwMDAzNiA4Ljc3MjE2MDUgNDQuODc4OTA2IDkuMzI0MjE4OCBMIDQ0Ljg3NSA5LjMzNTkzNzUgTCAzOC4zOTA2MjUgNDMuMTI4OTA2IEMgMzguMzc1Mjc1IDQzLjE2MjkyNiAzOC4yNDAxNTEgNDMuNDc1NTMxIDM3LjkzMTY0MSA0My43MjY1NjIgQyAzNy42MTY5MTQgNDMuOTgyNjUzIDM3LjI2Njg3NCA0NC4xODI1NTQgMzYuMzM3ODkxIDQzLjc5Mjk2OSBMIDI2LjYzMjgxMiAzNi4yMjQ2MDkgTCAyNi4zNTkzNzUgMzYuMDA5NzY2IEwgMjYuMzUzNTE2IDM2LjAxNTYyNSBMIDIzLjQ1MTE3MiAzMy44Mzc4OTEgTCAzOS43NjE3MTkgMTQuNjQ4NDM4IEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAzOC45NzQ2MDkgMTMgQSAxLjAwMDEgMS4wMDAxIDAgMCAwIDM4LjQ0NTMxMiAxMy4xNjc5NjkgTCAxNC44NDM3NSAyOC45MDIzNDQgTCA1LjkyNzczNDQgMjUuODQ5NjA5IEMgNS45Mjc3MzQ0IDI1Ljg0OTYwOSA1LjA0MjM3NzEgMjUuMzU2OTI3IDUgMjUuMDEzNjcyIEMgNC45OTc2NSAyNC45OTQ2NTIgNC45ODcxOTYxIDI1LjAxMTg2OSA1LjAzMzIwMzEgMjQuOTQzMzU5IEMgNS4wNzkyMTAxIDI0Ljg3NDg2OSA1LjE5NDg1NDYgMjQuNzU5MjI1IDUuMzM5ODQzOCAyNC42NTgyMDMgQyA1LjYyOTgyMTggMjQuNDU2MTU5IDUuOTYwOTM3NSAyNC4zMzM5ODQgNS45NjA5Mzc1IDI0LjMzMzk4NCBMIDUuOTk0MTQwNiAyNC4zMjIyNjYgTCA2LjAyNzM0MzggMjQuMzA4NTk0IEMgNi4wMjczNDM4IDI0LjMwODU5NCAxNS4xMzg4OTQgMjAuMzk5ODgyIDI0LjQxMDE1NiAxNi40Mjc3MzQgQyAyOS4wNDU3ODcgMTQuNDQxNjYgMzMuNzIxNjE3IDEyLjQ0MDEyMiAzNy4zMTgzNTkgMTAuOTAyMzQ0IEMgNDAuOTE0MTc1IDkuMzY0OTYxNSA0My41MTI0MTkgOC4yNTgzNjU4IDQzLjczMjQyMiA4LjE2OTkyMTkgQyA0My45ODI4ODYgOC4wNjk2MjUzIDQ0LjIzMTg4NCA4LjAyODY5MTggNDQuNDI5Njg4IDguMDE5NTMxMiB6IE0gMzMuNjEzMjgxIDE4Ljc5Mjk2OSBMIDIxLjI0NDE0MSAzMy4zNDU3MDMgTCAyMS4yMzgyODEgMzMuMzUxNTYyIEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAyMS4xODM1OTQgMzMuNDIzODI4IEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAyMS4xMjg5MDYgMzMuNTA3ODEyIEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAyMC45OTgwNDcgMzMuODkyNTc4IEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAyMC45OTgwNDcgMzMuOTAwMzkxIEwgMTkuMzg2NzE5IDQxLjE0NjQ4NCBDIDE5LjM1OTkzIDQxLjA2ODE5NyAxOS4zNDExNzMgNDEuMDM5NTU1IDE5LjMxMjUgNDAuOTQ3MjY2IEwgMTkuMzEyNSA0MC45NDUzMTIgQyAxOC44MDA3MTMgMzkuMzAwODUgMTYuNDY3MzYyIDMxLjUxNjEgMTYuMTQ0NTMxIDMwLjQzOTQ1MyBMIDMzLjYxMzI4MSAxOC43OTI5NjkgeiBNIDIyLjY0MDYyNSAzNS43MzA0NjkgTCAyNC44NjMyODEgMzcuMzk4NDM4IEwgMjEuNTk3NjU2IDQwLjQyNTc4MSBMIDIyLjY0MDYyNSAzNS43MzA0NjkgeiI+PC9wYXRoPjwvc3ZnPg==") 50% 50% no-repeat;
            background-size: 70%;
        }

        .icons8-instagram {
            order: 2;
            display: inline-block;
            width: 40px;
            height: 40px;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNiAxNiIKc3R5bGU9IiBmaWxsOiNmZmZmZmY7Ij48cGF0aCBkPSJNIDQuNzczNDM4IDEgQyAyLjY5NTMxMyAxIDEgMi42OTUzMTMgMSA0Ljc3MzQzOCBMIDEgMTAuMjMwNDY5IEMgMSAxMi4zMDQ2ODggMi42OTUzMTMgMTQgNC43NzM0MzggMTQgTCAxMC4yMzA0NjkgMTQgQyAxMi4zMDQ2ODggMTQgMTQgMTIuMzA0Njg4IDE0IDEwLjIyNjU2MyBMIDE0IDQuNzczNDM4IEMgMTQgMi42OTUzMTMgMTIuMzA0Njg4IDEgMTAuMjI2NTYzIDEgWiBNIDQuNzczNDM4IDIgTCAxMC4yMjY1NjMgMiBDIDExLjc2NTYyNSAyIDEzIDMuMjM0Mzc1IDEzIDQuNzczNDM4IEwgMTMgMTAuMjI2NTYzIEMgMTMgMTEuNzY1NjI1IDExLjc2NTYyNSAxMyAxMC4yMzA0NjkgMTMgTCA0Ljc3MzQzOCAxMyBDIDMuMjM0Mzc1IDEzIDIgMTEuNzY1NjI1IDIgMTAuMjMwNDY5IEwgMiA0Ljc3MzQzOCBDIDIgMy4yMzQzNzUgMy4yMzQzNzUgMiA0Ljc3MzQzOCAyIFogTSAxMS41IDMgQyAxMS4yMjI2NTYgMyAxMSAzLjIyMjY1NiAxMSAzLjUgQyAxMSAzLjc3NzM0NCAxMS4yMjI2NTYgNCAxMS41IDQgQyAxMS43NzczNDQgNCAxMiAzLjc3NzM0NCAxMiAzLjUgQyAxMiAzLjIyMjY1NiAxMS43NzczNDQgMyAxMS41IDMgWiBNIDcuNSA0IEMgNS41NzQyMTkgNCA0IDUuNTc0MjE5IDQgNy41IEMgNCA5LjQyNTc4MSA1LjU3NDIxOSAxMSA3LjUgMTEgQyA5LjQyNTc4MSAxMSAxMSA5LjQyNTc4MSAxMSA3LjUgQyAxMSA1LjU3NDIxOSA5LjQyNTc4MSA0IDcuNSA0IFogTSA3LjUgNSBDIDguODg2NzE5IDUgMTAgNi4xMTMyODEgMTAgNy41IEMgMTAgOC44ODY3MTkgOC44ODY3MTkgMTAgNy41IDEwIEMgNi4xMTMyODEgMTAgNSA4Ljg4NjcxOSA1IDcuNSBDIDUgNi4xMTMyODEgNi4xMTMyODEgNSA3LjUgNSBaIj48L3BhdGg+PC9zdmc+") 50% 50% no-repeat;
            background-size: 70%;
        }

        .icons8-whatsapp {
            order: 2;
            display: inline-block;
            width: 38px;
            height: 38px;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCA1MCA1MCIKc3R5bGU9IiBmaWxsOiNmZmZmZmY7Ij48cGF0aCBkPSJNIDI1IDIgQyAxMi4zMDk1MzQgMiAyIDEyLjMwOTUzNCAyIDI1IEMgMiAyOS4wNzkwOTcgMy4xMTg2ODc1IDMyLjg4NTg4IDQuOTg0Mzc1IDM2LjIwODk4NCBMIDIuMDM3MTA5NCA0Ni43MzA0NjkgQSAxLjAwMDEgMS4wMDAxIDAgMCAwIDMuMjQwMjM0NCA0Ny45NzA3MDMgTCAxNC4yMTA5MzggNDUuMjUxOTUzIEMgMTcuNDM0NjI5IDQ2Ljk3MjkyOSAyMS4wOTI1OTEgNDggMjUgNDggQyAzNy42OTA0NjYgNDggNDggMzcuNjkwNDY2IDQ4IDI1IEMgNDggMTIuMzA5NTM0IDM3LjY5MDQ2NiAyIDI1IDIgeiBNIDI1IDQgQyAzNi42MDk1MzQgNCA0NiAxMy4zOTA0NjYgNDYgMjUgQyA0NiAzNi42MDk1MzQgMzYuNjA5NTM0IDQ2IDI1IDQ2IEMgMjEuMjc4MDI1IDQ2IDE3Ljc5MjEyMSA0NS4wMjk2MzUgMTQuNzYxNzE5IDQzLjMzMzk4NCBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgMTQuMDMzMjAzIDQzLjIzNjMyOCBMIDQuNDI1NzgxMiA0NS42MTcxODggTCA3LjAwMTk1MzEgMzYuNDI1NzgxIEEgMS4wMDAxIDEuMDAwMSAwIDAgMCA2LjkwMjM0MzggMzUuNjQ2NDg0IEMgNS4wNjA2ODY5IDMyLjUyMzU5MiA0IDI4Ljg5MDEwNyA0IDI1IEMgNCAxMy4zOTA0NjYgMTMuMzkwNDY2IDQgMjUgNCB6IE0gMTYuNjQyNTc4IDEzIEMgMTYuMDAxNTM5IDEzIDE1LjA4NjA0NSAxMy4yMzg0OSAxNC4zMzM5ODQgMTQuMDQ4ODI4IEMgMTMuODgyMjY4IDE0LjUzNTU0OCAxMiAxNi4zNjk1MTEgMTIgMTkuNTkzNzUgQyAxMiAyMi45NTUyNzEgMTQuMzMxMzkxIDI1Ljg1NTg0OCAxNC42MTMyODEgMjYuMjI4NTE2IEwgMTQuNjE1MjM0IDI2LjIyODUxNiBMIDE0LjYxNTIzNCAyNi4yMzA0NjkgQyAxNC41ODg0OTQgMjYuMTk1MzI5IDE0Ljk3MzAzMSAyNi43NTIxOTEgMTUuNDg2MzI4IDI3LjQxOTkyMiBDIDE1Ljk5OTYyNiAyOC4wODc2NTMgMTYuNzE3NDA1IDI4Ljk2NDY0IDE3LjYxOTE0MSAyOS45MTQwNjIgQyAxOS40MjI2MTIgMzEuODEyOTA5IDIxLjk1ODI4MiAzNC4wMDc0MTkgMjUuMTA1NDY5IDM1LjM0OTYwOSBDIDI2LjU1NDc4OSAzNS45NjY3NzkgMjcuNjk4MTc5IDM2LjMzOTQxNyAyOC41NjQ0NTMgMzYuNjExMzI4IEMgMzAuMTY5ODQ1IDM3LjExNTQyNiAzMS42MzIwNzMgMzcuMDM4Nzk5IDMyLjczMDQ2OSAzNi44NzY5NTMgQyAzMy41NTI2MyAzNi43NTU4NzYgMzQuNDU2ODc4IDM2LjM2MTExNCAzNS4zNTE1NjIgMzUuNzk0OTIyIEMgMzYuMjQ2MjQ4IDM1LjIyODczIDM3LjEyMzA5IDM0LjUyNDcyMiAzNy41MDk3NjYgMzMuNDU1MDc4IEMgMzcuNzg2NzcyIDMyLjY4ODI0NCAzNy45Mjc1OTEgMzEuOTc5NTk4IDM3Ljk3ODUxNiAzMS4zOTY0ODQgQyAzOC4wMDM5NzYgMzEuMTA0OTI3IDM4LjAwNzIxMSAzMC44NDc2MDIgMzcuOTg4MjgxIDMwLjYwOTM3NSBDIDM3Ljk2OTMxMSAzMC4zNzExNDggMzcuOTg5NTgxIDMwLjE4ODY2NCAzNy43Njc1NzggMjkuODI0MjE5IEMgMzcuMzAyMDA5IDI5LjA1OTgwNCAzNi43NzQ3NTMgMjkuMDM5ODUzIDM2LjIyNDYwOSAyOC43Njc1NzggQyAzNS45MTg5MzkgMjguNjE2Mjk3IDM1LjA0ODY2MSAyOC4xOTEzMjkgMzQuMTc1NzgxIDI3Ljc3NTM5MSBDIDMzLjMwMzg4MyAyNy4zNTk5MiAzMi41NDg5MiAyNi45OTE5NTMgMzIuMDgzOTg0IDI2LjgyNjE3MiBDIDMxLjc5MDIzOSAyNi43MjA0ODggMzEuNDMxNTU2IDI2LjU2ODM1MiAzMC45MTQwNjIgMjYuNjI2OTUzIEMgMzAuMzk2NTY5IDI2LjY4NTU1MyAyOS44ODU0NiAyNy4wNTg5MzMgMjkuNTg3ODkxIDI3LjUgQyAyOS4zMDU4MzcgMjcuOTE4MDY5IDI4LjE3MDM4NyAyOS4yNTgzNDkgMjcuODI0MjE5IDI5LjY1MjM0NCBDIDI3LjgxOTYxOSAyOS42NDk1NDQgMjcuODQ5NjU5IDI5LjY2MzM4MyAyNy43MTI4OTEgMjkuNTk1NzAzIEMgMjcuMjg0NzYxIDI5LjM4MzgxNSAyNi43NjExNTcgMjkuMjAzNjUyIDI1Ljk4NjMyOCAyOC43OTQ5MjIgQyAyNS4yMTE1IDI4LjM4NjE5MiAyNC4yNDIyNTUgMjcuNzgyNjM1IDIzLjE4MTY0MSAyNi44NDc2NTYgTCAyMy4xODE2NDEgMjYuODQ1NzAzIEMgMjEuNjAzMDI5IDI1LjQ1NTk0OSAyMC40OTcyNzIgMjMuNzExMTA2IDIwLjE0ODQzOCAyMy4xMjUgQyAyMC4xNzE5MzcgMjMuMDk3MDQgMjAuMTQ1NjQzIDIzLjEzMDkwMSAyMC4xOTUzMTIgMjMuMDgyMDMxIEwgMjAuMTk3MjY2IDIzLjA4MDA3OCBDIDIwLjU1Mzc4MSAyMi43Mjg5MjQgMjAuODY5NzM5IDIyLjMwOTUyMSAyMS4xMzY3MTkgMjIuMDAxOTUzIEMgMjEuNTE1MjU3IDIxLjU2NTg2NiAyMS42ODIzMSAyMS4xODE0MzcgMjEuODYzMjgxIDIwLjgyMjI2NiBDIDIyLjIyMzk1NCAyMC4xMDY0NCAyMi4wMjMxMyAxOS4zMTg3NDIgMjEuODE0NDUzIDE4LjkwNDI5NyBMIDIxLjgxNDQ1MyAxOC45MDIzNDQgQyAyMS44Mjg4NjMgMTguOTMxMDE0IDIxLjcwMTU3MiAxOC42NTAxNTcgMjEuNTY0NDUzIDE4LjMyNjE3MiBDIDIxLjQyNjk0MyAxOC4wMDEyNjMgMjEuMjUxNjYzIDE3LjU4MDAzOSAyMS4wNjQ0NTMgMTcuMTMwODU5IEMgMjAuNjkwMDMzIDE2LjIzMjUwMSAyMC4yNzIwMjcgMTUuMjI0OTEyIDIwLjAyMzQzOCAxNC42MzQ3NjYgTCAyMC4wMjM0MzggMTQuNjMyODEyIEMgMTkuNzMwNTkxIDEzLjkzNzY4NCAxOS4zMzQzOTUgMTMuNDM2OTA4IDE4LjgxNjQwNiAxMy4xOTUzMTIgQyAxOC4yOTg0MTcgMTIuOTUzNzE3IDE3Ljg0MDc3OCAxMy4wMjI0MDIgMTcuODIyMjY2IDEzLjAyMTQ4NCBMIDE3LjgyMDMxMiAxMy4wMjE0ODQgQyAxNy40NTA2NjggMTMuMDA0NDMyIDE3LjA0NTAzOCAxMyAxNi42NDI1NzggMTMgeiBNIDE2LjY0MjU3OCAxNSBDIDE3LjAyODExOCAxNSAxNy40MDgyMTQgMTUuMDA0NzAxIDE3LjcyNjU2MiAxNS4wMTk1MzEgQyAxOC4wNTQwNTYgMTUuMDM1ODUxIDE4LjAzMzY4NyAxNS4wMzcxOTIgMTcuOTcwNzAzIDE1LjAwNzgxMiBDIDE3LjkwNjcxMyAxNC45Nzc5NzIgMTcuOTkzNTMzIDE0Ljk2ODI4MiAxOC4xNzk2ODggMTUuNDEwMTU2IEMgMTguNDIzMDk4IDE1Ljk4ODAxIDE4Ljg0MzE3IDE2Ljk5OTI0OSAxOS4yMTg3NSAxNy45MDAzOTEgQyAxOS40MDY1NCAxOC4zNTA5NjEgMTkuNTgyMjkyIDE4Ljc3MzgxNiAxOS43MjI2NTYgMTkuMTA1NDY5IEMgMTkuODYzMDIxIDE5LjQzNzEyMiAxOS45MzkwNzcgMTkuNjIyMjk1IDIwLjAyNzM0NCAxOS43OTg4MjggTCAyMC4wMjczNDQgMTkuODAwNzgxIEwgMjAuMDI5Mjk3IDE5LjgwMjczNCBDIDIwLjExNTgzNyAxOS45NzM0ODMgMjAuMTA4MTg1IDE5Ljg2NDE2NCAyMC4wNzgxMjUgMTkuOTIzODI4IEMgMTkuODY3MDk2IDIwLjM0MjY1NiAxOS44Mzg0NjEgMjAuNDQ1NDkzIDE5LjYyNSAyMC42OTE0MDYgQyAxOS4yOTk5OCAyMS4wNjU4MzggMTguOTY4NDUzIDIxLjQ4MzQwNCAxOC43OTI5NjkgMjEuNjU2MjUgQyAxOC42Mzk0MzkgMjEuODA3MDcgMTguMzYyNDIgMjIuMDQyMDMyIDE4LjE4OTQ1MyAyMi41MDE5NTMgQyAxOC4wMTYyMjEgMjIuOTYyNTc4IDE4LjA5NzA3MyAyMy41OTQ1NyAxOC4zNzUgMjQuMDY2NDA2IEMgMTguNzQ1MDMyIDI0LjY5NDYgMTkuOTY0NDA2IDI2LjY3OTMwNyAyMS44NTkzNzUgMjguMzQ3NjU2IEMgMjMuMDUyNzYgMjkuMzk5Njc4IDI0LjE2NDU2MyAzMC4wOTU5MzMgMjUuMDUyNzM0IDMwLjU2NDQ1MyBDIDI1Ljk0MDkwNiAzMS4wMzI5NzMgMjYuNjY0MzAxIDMxLjMwNjYwNyAyNi44MjYxNzIgMzEuMzg2NzE5IEMgMjcuMjEwNTQ5IDMxLjU3Njk1MyAyNy42MzA2NTUgMzEuNzI0NjcgMjguMTE5MTQxIDMxLjY2NjAxNiBDIDI4LjYwNzYyNyAzMS42MDczNjYgMjkuMDI4NzggMzEuMzEwOTc5IDI5LjI5Njg3NSAzMS4wMDc4MTIgTCAyOS4yOTg4MjggMzEuMDA1ODU5IEMgMjkuNjU1NjI5IDMwLjYwMTM0NyAzMC43MTU4NDggMjkuMzkwNzI4IDMxLjIyNDYwOSAyOC42NDQ1MzEgQyAzMS4yNDYxNjkgMjguNjUyMTMxIDMxLjIzOTEwOSAyOC42NDYyMzEgMzEuNDA4MjAzIDI4LjcwNzAzMSBMIDMxLjQwODIwMyAyOC43MDg5ODQgTCAzMS40MTAxNTYgMjguNzA4OTg0IEMgMzEuNDg3MzU2IDI4LjczNjQ3NCAzMi40NTQyODYgMjkuMTY5MjY3IDMzLjMxNjQwNiAyOS41ODAwNzggQyAzNC4xNzg1MjYgMjkuOTkwODg5IDM1LjA1MzU2MSAzMC40MTc4NzUgMzUuMzM3ODkxIDMwLjU1ODU5NCBDIDM1Ljc0ODIyNSAzMC43NjE2NzQgMzUuOTQyMTEzIDMwLjg5Mzg4MSAzNS45OTIxODggMzAuODk0NTMxIEMgMzUuOTk1NTcyIDMwLjk4MjUxNiAzNS45OTg5OTIgMzEuMDc3ODYgMzUuOTg2MzI4IDMxLjIyMjY1NiBDIDM1Ljk1MTI1OCAzMS42MjQyOTIgMzUuODQzOSAzMi4xODAyMjUgMzUuNjI4OTA2IDMyLjc3NTM5MSBDIDM1LjUyMzU4MiAzMy4wNjY3NDYgMzQuOTc1MDE4IDMzLjY2NzY2MSAzNC4yODMyMDMgMzQuMTA1NDY5IEMgMzMuNTkxMzg4IDM0LjU0MzI3NyAzMi43NDkzMzggMzQuODUyNTE0IDMyLjQzNzUgMzQuODk4NDM4IEMgMzEuNDk5ODk2IDM1LjAzNjU5MSAzMC4zODY2NzIgMzUuMDg3MDI3IDI5LjE2NDA2MiAzNC43MDMxMjUgQyAyOC4zMTYzMzYgMzQuNDM3MDM2IDI3LjI1OTMwNSAzNC4wOTI1OTYgMjUuODkwNjI1IDMzLjUwOTc2NiBDIDIzLjExNDgxMiAzMi4zMjU5NTYgMjAuNzU1NTkxIDMwLjMxMTUxMyAxOS4wNzAzMTIgMjguNTM3MTA5IEMgMTguMjI3Njc0IDI3LjY0OTkwOCAxNy41NTI1NjIgMjYuODI0MDE5IDE3LjA3MjI2NiAyNi4xOTkyMTkgQyAxNi41OTI4NjYgMjUuNTc1NTg0IDE2LjM4MzUyOCAyNS4yNTEwNTQgMTYuMjA4OTg0IDI1LjAyMTQ4NCBMIDE2LjIwNzAzMSAyNS4wMTk1MzEgQyAxNS44OTcyMDIgMjQuNjA5ODA1IDE0IDIxLjk3MDg1MSAxNCAxOS41OTM3NSBDIDE0IDE3LjA3Nzk4OSAxNS4xNjg0OTcgMTYuMDkxNDM2IDE1LjgwMDc4MSAxNS40MTAxNTYgQyAxNi4xMzI3MjEgMTUuMDUyNDk1IDE2LjQ5NTYxNyAxNSAxNi42NDI1NzggMTUgeiI+PC9wYXRoPjwvc3ZnPg==") 50% 50% no-repeat;
            background-size: 70%;
        }
    </style>

    <div class="social" style="margin-left:2.5%;top:40%;z-index: 100;">
        
        <a href="#">
            <div class="social-btn color-telegram">
                <div class="icons8-telegram-app"></div>
                <p class="order-1 google-font margin-telgram" style="align-item:right">Telegram</p>
            </div>
        </a>
        <a href="https://www.facebook.com/KVG-College-of-Engineering-105686592193925/?ref=page_internal">
            <div class="social-btn color-instagram">
                <div class="icons8-instagram"></div>
                <p class="order-1 google-font margin-instagram">instagram</p>
            </div>
        </a>
        <a href="#">
            <div class="social-btn color-whatsapp">
                <div class="icons8-whatsapp"></div>
                <p class="order-1 google-font margin-instagram">whats app</p>
            </div>
        </a>
    </div> -->
<!-- social media  -->

<!-- social media end  -->
<!-- container -->
<!-- <div id="container"> -->
<!-- Menu Button -->

<!-- <div class="menu-btn">
                <img src="images/Admission-btn.svg" alt="get a quote" style="border-radius: 8px;">
            </div> -->
<!-- Menu Button -->
<!-- <div class="clearfix"></div> -->
<!-- Menu Button -->
<!-- <div class="menu-btncont">
                <p><a href="tel:+919972932972">+91 99999 9999</a><br>
                    <a href="tel:+918242868155">+91 999999 9999</a>
                </p>
                <img src="images/call.jpg" alt="Call">
            </div>
            <div class="clearfix"></div>
            <div class="menu-btncont topmenu">
                <p>Mail To<br>
                    <a href="mailto:admissions@sjec.ac.in">exam@kvg.com</a>
                </p>
                <img src="images/mail.jpg" alt="Mail">
            </div>
        </div> -->
<!-- Pushy Menu end-->
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/responsive-tabs.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/AnimOnScroll.js"></script>
<!-- Counter -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<script type="text/javascript" src="js/jquery-cabg-circlus.js"></script>
<script>
    jQuery.noConflict();
    (function($) {
        $(document).ready(function() {
            var height = 50;
            $(window).scroll(function() {
                if ($(document).scrollTop() > height - 1) {
                    $('.top-menu').addClass('tiny animated fadeInDown');
                } else {
                    $('.top-menu').removeClass('tiny animated fadeInDown');
                }
            });
            jQuery("footer").circlus({
                fps: 30,
                scale: 1,
                background: false,
                items: 25,
                itemMinSpeed: 1000,
                itemMaxSpeed: 2500,
                itemMinSize: 20,
                itemMaxSize: 50,
                itemShapes: ["circle"],
                itemColors: ["#0000ff", "#00ff00", "#00ffff", "#ff0000", "#ff00ff", "#ffff00"],
                unique: true,
            });

            $('.carousel').carousel({
                    interval: 5500, // in milliseconds
                    pause: 'none' // set to 'true' to pause slider on mouse hover
                }) <
                !--Counter-- >
                $('.counter').counterUp({
                    delay: 20,
                    time: 2000
                });

            new AnimOnScroll(document.getElementById('grid'), {
                minDuration: 0.4,
                maxDuration: 0.7,
                viewportFactor: 0.2
            });

            //Function to animate slider captions
            function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function() {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function() {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel
            $myCarousel.carousel();

            //Animate captions in first slide on page load
            doAnimations($firstAnimatingElems);

            //Pause carousel
            $myCarousel.carousel('pause');

            //Other slides to be animated on carousel slide event
            $myCarousel.on('slide.bs.carousel', function(e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });

            $('#home-highlights').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })

            $('#home-placed-students').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })

            $('#home-campus-placements').owlCarousel({
                loop: true,
                animateOut: 'slideOutUp',
                animateIn: 'slideInUp',
                smartSpeed: 450,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })
            $('#home-testimonials').owlCarousel({
                loop: true,
                smartSpeed: 550,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })
            $('#home-showcase-events').owlCarousel({
                loop: true,
                smartSpeed: 550,
                margin: 10,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })
            $('#home-sjec-conferences').owlCarousel({
                loop: true,
                smartSpeed: 400,
                margin: 10,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        margin: 20
                    }
                }
            })

            $('.home-announcements-slide').easyTicker({
                direction: 'up',
                easing: 'easeInOutBack',
                speed: 'slow',
                interval: 5000,
                height: 'auto',
                mousePause: 0,
                visible: 2
            });

            $('ul.nav.nav-tabs  a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            (function($) {
                // Test for making sure event are maintained
                $('.js-alert-test').click(function() {
                    alert('Button Clicked: Event was maintained');
                });
                fakewaffle.responsiveTabs(['xs', 'sm']);
            })(jQuery);

            // $(window).load(function () {

            // $.magnificPopup.open({
            // items: {
            //    src: 'images/pop/Pop-up-covid-19.jpg'
            // },
            //  type: 'image'

            //}, 0);
            // });

            // $('#ModalloadPopup').modal({keyboard:true,show:true,backdrop:'static'})
        });

        // Close menu
        $("#close-menu").click(function(e) {
            $(".slide-hang").fadeToggle("slow");
        });
        // Open menu
        $("#menu-toggle").click(function(e) {
            $(".slide-hang").fadeToggle("slow");
        });
    })(jQuery);
</script>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    window.onload = function() {
        setInterval(function() {
            plusSlides(1);
        }, 3000);
    }
</script>


<script>
    window.onload = function() {
        var layout1 = document.getElementById('layout1'),
            layout2 = document.getElementById('layout2');

        function hideLeft(layout) {
            for (i = 0; i < layout.children.length; i++) {
                if (layout.children[i].classList.contains('show-left')) {
                    layout.children[i].classList.remove('show-left');
                } else if (layout.children[i].classList.contains('show-right')) {
                    layout.children[i].classList.remove('show-right');
                };
                layout.children[i].classList.add('hide-left');
            }
        }

        function hideRight(layout) {
            for (i = 0; i < layout.children.length; i++) {
                if (layout.children[i].classList.contains('show-left')) {
                    layout.children[i].classList.remove('show-left');
                } else if (layout.children[i].classList.contains('show-right')) {
                    layout.children[i].classList.remove('show-right');
                };
                layout.children[i].classList.add('hide-right');
            }
        }

        function showLeft(layout) {
            for (i = 0; i < layout.children.length; i++) {
                if (layout.children[i].classList.contains('hide-left')) {
                    console.log("It had a hide left on it");
                    layout.children[i].classList.remove('hide-left');
                    console.log("but I removed it!");
                } else if (layout.children[i].classList.contains('hide-right')) {
                    layout.children[i].classList.remove('hide-right');
                };
                // Add show right
                layout.children[i].classList.add('show-left');
            }
        }

        function showRight(layout) {
            for (i = 0; i < layout.children.length; i++) {
                if (layout.children[i].classList.contains('hide-left')) {
                    layout.children[i].classList.remove('hide-left');
                } else if (layout.children[i].classList.contains('hide-right')) {
                    layout.children[i].classList.remove('hide-right');
                };
                //Add show right
                layout.children[i].classList.add('show-right');
            }
        }

        // Initialize Layout 2 as hidden
        hideLeft(layout2);

        document.addEventListener('click', function(event) {
            // If the clicked element doesn't have the right selector then bail
            if (!event.target.matches('.grid__item--nav span')) return;
            // Don't follow any links
            event.preventDefault();
            // Perform desired action once clicked 
            if (event.target.matches('.grid--layout1 .grid__item--prev span')) {
                //Add hide LEFT to current grid items and show RIGHT other grid items
                console.log("Layout 1 Prev was clicked!");
                hideLeft(layout1);
                layout2.classList.remove('hide');
                setTimeout(function() {
                    layout1.classList.add('hide');
                }, 750);
                showLeft(layout2);
                return;
            } else if (event.target.matches('.grid--layout1 .grid__item--next span')) {
                //Add hide LEFT to current grid items and show RIGHT other grid items
                console.log("Layout 1 Next was pressed!");
                hideRight(layout1);
                setTimeout(function() {
                    layout1.classList.add('hide');
                    layout2.classList.remove('hide');
                }, 750);
                showRight(layout2);
                return;
            } else if (event.target.matches('.grid--layout2 .grid__item--prev span')) {
                //Add hide LEFT to current grid items and show RIGHT other grid items
                console.log("Layout 2 Prev was clicked!");
                hideLeft(layout2);
                setTimeout(function() {
                    layout1.classList.remove('hide');
                    layout2.classList.add('hide');
                }, 750);
                showLeft(layout1);
                return;
            } else if (event.target.matches('.grid--layout2 .grid__item--next span')) {
                //Add hide LEFT to current grid items and show RIGHT other grid items
                console.log("Layout 2 Next was clicked!");
                hideRight(layout2);
                setTimeout(function() {

                    layout2.classList.add('hide');
                    layout1.classList.remove('hide');
                }, 750);
                showRight(layout1);
                return;
            }
        }, false);
    }
</script>