<?php 
require_once 'config.php';
require_login(); 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Explore the world with our adventure travel services" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="shortcut icon" type="image/x-icon" href="photos/favicon.ico">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meanmenu/2.0.8/meanmenu.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    
    <link rel="stylesheet" href="CSS/styles.css">
    
    <link rel="stylesheet" href="CSS/responsive.css">
    <!-- modernizr css -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <style>
        body {
            background-color: #000000;
            color: #ffffff; 
        }
  
        .header-one, .footer1, .support-service-area, .blog-area {
            background-color: #111111;
        }
        h1, h2, h3, h4, h5, h6, p {
            color: #ffffff;
        }
        a {
            color: #ffffff;
        }
    </style>
</head>
<body>
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> mailto:info@safrni.org</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i> +201208985001</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="topbar-right">
                            <div class="top-social">
                                <ul>
                                    <li><a href="https://www.instagram.com/safrnitravels"><i class="fab fa-instagram"> safernitravels</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        
        <!-- header-area start -->
        <div id="sticker" class="header-area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!-- logo start -->
                            <div class="col-md-3 col-sm-3">
                                <div class="logo">
                                    <a class="navbar-brand page-scroll white-logo" href="index.html">
                                        <img src="Logo.png" alt="Adventure Travel Logo">
                                    </a>
                                    <!---<a class="navbar-brand page-scroll black-logo" href="index.html">
                                        <img src="photos/Logo-dark.png" alt="Adventure Travel Logo">
                                    </a>--->
                                </div>
                            </div>
                            <!-- logo end -->
                            <div class="col-md-9 col-sm-9">
                                <!-- mainmenu start -->
                                <nav class="navbar navbar-default">
                                    <div class="collapse navbar-collapse" id="navbar-example">
                                        <div class="main-menu">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="tours.html">Tours</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="hiking.html">Hiking</a></li>
                                                        <li><a href="safari.html">Safari</a></li>
                                                        <li><a href="water.html">Water Adventures</a></li>
                                                        <li><a href="cultural.html">Cultural Experiences</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!-- mainmenu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->

        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <div class="logo">
                                <a href="index.html"><img src="photos/Logo-dark.png" alt="Adventure Travel Logo"></a>
                            </div>
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="code_source'safarni'.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="tours.html">Tours</a>
                                        <ul class="sub-menu">
                                            <li><a href="hiking.html">Hiking</a></li>
                                            <li><a href="safari.html">Safari</a></li>
                                            <li><a href="water.html">Water Adventures</a></li>
                                            <li><a href="cultural.html">Cultural Experiences</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div class="intro-area">
        <div class="main-overly"></div>
        <div class="intro-carousel">
            <div class="intro-content">
                <div class="slider-images">
                    <img src="photos/slider1.jpg" alt="Mountain Adventure">
                </div>
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slide-content text-center">
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            <h2 class="title2">Discover the World's Wonders</h2>
                                            <div class="layer-1-3">
                                                <a href="tours.html" class="ready-btn left-btn">EXPLORE TOURS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-content">
                <div class="slider-images">
                    <img src="photos/slider2.jpg" alt="Beach Adventure">
                </div>
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slide-content text-center">
                                            <h2 class="title2">Create Unforgettable Memories</h2>
                                            <div class="layer-1-3">
                                                <a href="destinations.html" class="ready-btn left-btn">VIEW DESTINATIONS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start Support-service Area -->
    <div class="support-service-area fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Our Services</h3>
                        <p>We offer a wide range of adventure travel experiences to suit every explorer!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-all">
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="hiking.html">
                            <div class="support-services wow">
                                <i class="fas fa-hiking support-images"></i>
                                <div class="support-content">
                                    <h4>Tours</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                    
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="safari.html">
                            <div class="support-services">
                                <i class="fas fa-paw support-images"></i>
                                <div class="support-content">
                                    <h4></h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                    
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="water.html">
                            <div class="support-services">
                                <i class="fas fa-water support-images"></i>
                                <div class="support-content">
                                    <h4></h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                    
                    <!-- Start services -->
                     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="cultural.html">
                            <div class="support-services">
                                <i class="fas fa-landmark support-images"></i>
                                <div class="support-content">
                                    <h4></h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                    
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="family.html">
                            <div class="support-services">
                                <i class="fas fa-users support-images"></i>
                                <div class="support-content">
                                    <h4></h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                    
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="luxury.html">
                            <div class="support-services">
                                <i class="fas fa-gem support-images"></i>
                                <div class="support-content">
                                    <h4></h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End services -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Support-service Area -->

    <!-- Start Banner Area -->
    <div class="banner-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <h3>Ready for your next adventure?</h3>
                            <a class="banner-btn" href="quote.html">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Blog Area-->
    <div class="blog-area fix bg-color area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>LATEST TRAVEL STORIES</h3>
                        <p>Read about our recent adventures and travel tips</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-grid home-blog">
                    <!-- Start single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        SAFERNI
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        7 June, 2025
                                    </span>
                                </div>
                                <a href="blog-single.html">
                                    <h4>Nile Cruise</h4>
                                </a>
                                <p>A Nile cruise is a peaceful boat trip between Luxor and Aswan, offering views of ancient temples and beautiful landscapes.</p>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="des.webp">
                                    <img src="des.webp" alt="Inca Trail">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    
                    <!-- Start single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        SAFERNI 
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        9 June, 2025
                                    </span>
                                </div>
                                <a href="blog-single.html">
                                    <h4>Hurghada</h4>
                                </a>
                                <p>Hurghada is a popular Egyptian resort on the Red Sea, known for its sandy beaches, coral reefs, and water sports like snorkeling and diving </p>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="hur.webp">
                                    <img src="hur.webp" alt="Serengeti">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    
                    <!-- Start single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                       SAFERNI
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        13 June, 2025
                                    </span>
                                </div>
                                <a href="blog-single.html">
                                    <h4>Black and white desert</h4>
                                </a>
                                <p>The White Desert has strange white rock shapes, and the Black Desert has dark volcanic hills. Both are unique and great for adventure</p>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="Black-and-white-desert645654-webp.webp">
                                    <img src="Black-and-white-desert645654-webp.webp" alt="Packing">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area-->

    <!-- Start Footer Area -->
    <footer class="footer1">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="footer-content logo-footer">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <a class="footer-black-logo" href="#"><img src="Logo.png" alt="Saferni"></a>
                                </div>
                                <p>
                                    Saferni is dedicated to creating unforgettable experiences in the world's most beautiful destinations. Our expert guides and carefully crafted itineraries ensure you get the most out of every adventure.
                                </p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"> </i></a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Quick Links</h4>
                                <ul class="footer-list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="tours.html">Tours</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="test.html">Testimonials</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content last-content">
                            <div class="footer-head">
                                <h4>Contact Us</h4>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +201208985001</p>
                                    <p><span>Email:</span> mailto:info@safrni.org</p>
                                    <!---<p><span>Location:</span> 123 Adventure Way, Boulder, CO 80301, USA</p>--->
                                </div>
                                <div class="subs-feilds">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright">
                            <p>
                                Copyright © 2024 <a href="#">Saferni</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer area -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <!-- stellar js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.stellar/0.6.2/jquery.stellar.min.js"></script>
    <!-- magnific js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- meanmenu js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/meanmenu/2.0.8/jquery.meanmenu.min.js"></script>
    <!-- Form validator js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>
</html>