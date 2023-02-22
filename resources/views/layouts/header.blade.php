
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
    