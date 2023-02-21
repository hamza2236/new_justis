@extends('layouts.main')
@section('main-container')
<!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Attorney Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Attorney Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Team Area ==============================-->
    <section class=" space-top overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="as-team team-box style2">
                        <div class="team-overlay" data-bg-src="assets/img/bg/team_shape.png"></div>
                        <div class="team-wrpp team-wrapp-2">
                            <div class="team-img team-1"> <img src="assets/img/team/team_details.jpg" alt="Team"> </div>
                            <div class="team-details">
                                <div class="team-content-wrapper">
                                    <div class="team-content-title">
                                        <h3 class="team-title">Christopher</h3> <span class="team-desig">Criminal Lawyer</span>
                                    </div>
                                    <div class="as-social">
                                        <p class="follow">Follow Him:</p> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="team-wrpp team-wrpp-2">
                                    <div class="case">
                                        <h4 class="cases-title">Case Complete:</h4>
                                        <p>450 already complete</p>
                                    </div>
                                    <div class="case">
                                        <h4 class="cases-title">Case Reviews:</h4>
                                        <div class="review">
                                            <div class="star"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                            <p>5.00 (400+) </p>
                                        </div>
                                    </div>
                                    <div class="case">
                                        <h4 class="cases-title">Contact now:</h4> <a class="case-number" href="tel:+1 856-236-5478">+1 856-236-5478</a>
                                    </div>
                                </div>
                                <div class="team-details-content">
                                    <h3>Personal Statement</h3>
                                    <p class="">Phosfluorescently grow value-added collaboration and idea-sharing before open-source e-markets. Interactively reconceptualize intuitive architectures before worldwide web services. Credibly grow backward-compatible methods of empowerment for multidisciplinary core competencies. Interactively brand performance based content without scalable scenarios. Objectively visualize clicks-and-mortar value vis-a-vis resource-leveling niches. Completely leverage other's premier markets without resource-leveling opportunities.</p>
                                    <div class="btn-group style3 mt-40"> <a href="contact.html" class="as-btn shadow-none">Appointment Now</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="team-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="attorney_details_content">
                        <h3>Educations:</h3>
                        <p>LLM, Received with distinction <span>University of Edinburgh 2019</span></p>
                        <p>BCL / LLB <span>McGill University 2018</span></p>
                        <p>Law Institute of Victoria (LIV)<span> UK University 2017</span></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="attorney_details_content">
                        <h3>Skills:</h3>
                        <div class="skill-area">
                            <div class="skill-feature">
                                <div class="skill-feature_title">Negotiation</div>
                                <div class="skill-feature-outer">
                                    <div class="progress-value html">85%</div>
                                    <div class="skill-feature-inner ht"></div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <div class="skill-feature_title">Success Cases</div>
                                <div class="skill-feature-outer">
                                    <div class="progress-value jquery">80%</div>
                                    <div class="skill-feature-inner jq"></div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <div class="skill-feature_title">Customer Satisfaction</div>
                                <div class="skill-feature-outer">
                                    <div class="progress-value sketch">90%</div>
                                    <div class="skill-feature-inner sk"></div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <div class="skill-feature_title">Industry Experience</div>
                                <div class="skill-feature-outer">
                                    <div class="progress-value photo">75%</div>
                                    <div class="skill-feature-inner ph"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Recent Area ==============================-->
    <div class="recent-post-area space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="recent-post">
                        <h4 class="widget_title recent-title">Resent Case Studies</h4>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow as-carousel" id="blogSlide1" data-slide-show="1" data-xl-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-arrows="true">
                <div class="col-lg-12">
                    <div class="row case-row filter-active">
                        <div class="col-md-4 col-xl-auto filter-item cat1 cat2 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_1_1.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-auto filter-item cat2 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_2_2.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-auto filter-item cat1 cat3 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_2_3.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row case-row filter-active">
                        <div class="col-md-4 col-xl-auto filter-item cat1 cat2 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_2_4.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-auto filter-item cat2 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_2_5.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-auto filter-item cat1 cat3 cat4">
                            <div class="case-card style3">
                                <div class="case-img"> <img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image"> <a href="assets/img/gallery/gallery_2_6.jpg" class="icon-btn popup-image"><i class="fa-solid fa-plus"></i></a> </div>
                                <div class="case-content style3"> <span class="case-degination">Family Matter</span> <a href="cases-details.html">
                                        <h4 class="case-title">General Service</h4>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Newsletter Area ==============================-->
    <div class="">
        <div class="container newsletter" data-bg-src="assets/img/bg/subscribe_bg_1.jpg">
            <div class="footer-top inner-style">
                <div class="row gx-0 align-items-center">
                    <div class="col-xl">
                        <div class="footer-newsletter">
                            <div class="footer-wrpp">
                                <h3 class="h3 newsletter-title">Suscribe to Our Newsletter!</h3>
                                <p>Holisticly provide access to exceptional methodologies for out-of-the-box core competencies.</p>
                            </div>
                            <form class="newsletter-form"> <input class="form-control" type="email" placeholder="Enter Email" required=""> <button type="submit" class="as-btn shadow-none">Subscribe</button> </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!--********************************Code End Here ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"> </path>
        </svg></div>
@endsection
