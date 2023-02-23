<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Justiscall - Lawyer & Law Firm </title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW"> <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png')}}"> 
    <!-- <link rel="manifest" href="assets/img/favicons/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!--============================== Google Fonts============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700&amp;family=Rochester&amp;display=swap" rel="stylesheet">
    <!--============================== All CSS File============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"> <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}"> <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}"> <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}"> <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.flipster.min.css')}}"> <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body>


    <!--============================== Mobile Menu ============================== -->
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center"> <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"> <a href="{{ url('/')}}"><img src="assets/img/logo.png"  width="70px" alt="Advoker"></a> </div>
            <div class="as-mobile-menu">
                <ul>
                    <li class="menu-item-has-hildren"> 
                    <a href="{{ url('/')}}">Home</a>
                      
                    </li>
                    <li class="menu-item-has-children"> <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('team')}}">Team</a></li>
                            <li><a href="{{ url('team-details')}}">Team Details</a></li>
                            <li><a href="{{ url('about')}}">About Us</a></li>
                            <li><a href="{{ url('testimonial')}}">Testimonial</a></li>
                            <li><a href="{{ url('pricing')}}">Pricing</a></li>
                            <li><a href="{{ url('faq')}}">Faq Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('service')}}">Services</a></li>
                            <li><a href="{{ url('service-details')}}">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="#">Our Cases</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('cases')}}">Our Cases</a></li>
                            <li><a href="{{ url('cases-details')}}">Case Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('blog')}}">Blog</a></li>
                            <li><a href="{{ url('blog-details')}}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li> <a href="{{ url('contact')}}">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Header Area==============================-->
    <header class="as-header header-layout1">
        <div class="header-top">
            <div class="container-fluid text-lg-start text-center">
                <div class="menu-top">
                    <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-links">
                                <ul>
                                    <li><i class="fat fa-envelope"></i><span>Email :</span><a href=""> info@advoker.com</a></li>
                                    <li><i class="fal fa-clock"></i><span>Opening :</span><a href="#"> Sun-Thu _ 9am-6pm</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-right">
                                <div class="header-links">
                                    <ul>
                                        <li><i class="fat fa-location-dot"></i><a href="#">Office Address : 555 4th St NW, USA</a></li>
                                    </ul>
                                </div>
                                <div class="top-button"> 
                                <a href="#" class="as-btn white-btn">Free Consultation</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between pt-2 pb-2">
                        <div class="col-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul style="display:none">
                                    <li class="menu-item-hashildren">
                                         <a href="{{ url('/')}}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children"> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('team')}}">Team</a></li>
                                            <li><a href="{{ url('team-details')}}">Team Details</a></li>
                                            <li><a href="{{ url('about')}}">About Us</a></li>
                                            <li><a href="{{ url('testimonial')}}">Testimonial</a></li>
                                            <li><a href="{{ url('pricing')}}">Pricing</a></li>
                                            <li><a href="{{ url('faq')}}">Faq Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"> <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('service')}}">Services</a></li>
                                            <li><a href="{{ url('service-details')}}">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                         <a href="#">Our Cases</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('cases')}}">Our Cases</a></li>
                                            <li><a href="{{ url('cases-details')}}">Case Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"> <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('blog')}}">Blog</a></li>
                                            <li><a href="{{ url('blog-details')}}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li> 
                                    <a href="{{ url('contact')}}">Contact Us</a> </li>
                                </ul>
                                
                            </nav> 
                             <nav class="main-menu d-none d-xl-inline-block ">
                                <ul>
                                    <li> 
                                      <img src="{{ url('assets/united-states.png')}}" width="50px" alt="">
                                    </li>
                                      <li> 
                                      <img src="{{ url('assets/france.png')}}" width="50px" alt="">
                                    </li>
                                      <li> 
                                      <img src="{{ url('assets/spain.png')}}" width="50px" alt="">
                                    </li>
                                      <li> 
                                      <img src="{{ url('assets/italy.png')}}" width="50px" alt="">
                                    </li>
                                      <li> 
                                      <img src="{{ url('assets/germany.png')}}" width="50px" alt="">
                                    </li>
                                      <li> 
                                      <img src="{{ url('assets/russia.png')}}" width="50px" alt="">
                                    </li>
                                </ul>
                                
                            </nav>
                           
                        </div>  <button type="button" class="as-menu-toggle d-inline-block d-xl-none"><i class="far fa-bars"></i></button>
                        
                        <div class="header-logo" data-bg-src=""> <a href="{{ url('/')}}"><img src="assets/img/logo.png" width="70px" alt=""></a> </div>
                        <div class="col-auto">
                            <div class="header-social">
                                <button class="btn"><a href="{{ url('auth-login-pro')}}">Client Sign In</a></button>
                                <button  class="btn"><a href="{{ url('auth-register-pro')}}">Client Sign Up</a></button>
                                <button class="btn "><a href="{{ url('auth-login-pro')}}">Pro Sign In</a></button>
                                <button  class="btn"><a href="{{ url('auth-register-pro')}}">Pro Sign Up</a></button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    


@yield('main-container')



    <!--==============================Footer Area==============================-->
    <footer class="footer-wrapper space-top footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.png">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="widget footer-widget">
                            <div class="as-widget-about">
                                <div class="about-logo"> <a href="{{ url('/')}}"><img src="assets/img/logo.png" alt="Advoker" width="130px"></a> </div>
                                <p class="about-text">The new generation of solutions to manage your online appointments or Teleconsultation. Gain in Working Comfort Develop your Activity in a CLICK.</p>
                                <div class="as-social footer-social"> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Usefull Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/')}}">Home</a></li>
                                    <li><a href="{{ url('about')}}">About Us</a></li>
                                    <li><a href="{{ url('pricing')}}">Pricing</a></li>
                                    <li><a href="{{ url('faq')}}">FAQ</a></li>
                                    <li><a href="{{ url('privacy')}}">Privacy</a></li>
                                    <li><a href="{{ url('contact')}}">Contact Us</a></li>
                                    <li><a href="{{ url('terms-and-conditions')}}">Terms and conditions</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Now</h3>
                            <div class="as-widget-contact">
                                <div class="info-box">
                                    <div class="info-box_icon"> <i class="fal fa-location-dot"></i> </div>
                                    <p class="info-box_text"> 291 rue albert caquot, Nova 2 06560 Sophia Antipolis – FRANCE </p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"> <i class="fa-regular fa-mobile"></i> </div>
                                    <p class="info-box_text"> <a href="tel:+1 202-252-7566" class="info-box_link">0 805 951 258</a>  </p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"> <i class="fal fa-envelope"></i> </div>
                                    <p class="info-box_text"> <a href="" class="info-box_link">contact@justiscall.com</a>  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text text-center text-white">Designed & Development by EliteHostingEurope Copyright 2022 JUSTISCALL</p>
            </div>
        </div>
    </footer>



    <!--============================== All Js File============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script> <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> -->
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js')}}"></script> <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script> <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script> <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script> <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script> <!-- Flip Slider -->
    <script src="{{ asset('assets/js/jquery.flipster.min.js')}}"></script> <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>


</body>

</html>


