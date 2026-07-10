@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Team <span>Details</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Team Details</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
        Team Details
        ============================== -->
<section class="team-details space">
    <div class="container">
        <div class="row gy-5 gx-60 align-items-center space-mobile-bottom">
            <div class="col-xl-6">
                <div class="team-img wow animate__fadeInUp animation-style2" data-wow-delay="0.25s">
                    <img src="{{ asset('/frontend/assets/img/team/team-details-1-1.png') }}" alt="team-details">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="team-top wow animate__fadeInUp animation-style2" data-wow-delay="0.35s">
                    <div class="title-area">
                        <h2 class="team-title">erica hanson</h2>
                        <span class="team-degi">office cleaner</span>
                    </div>
                    <div class="social-style1">
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <p class="team-text wow animate__fadeInUp animation-style2" data-wow-delay="0.45s">
                    closed system where recircultng cleaning solution is applied (often with nozzles) cleans,
                    rinses and sanitises equipment. The CIP system is usually automatically cleaning sequec.
                </p>
                <ul class="team-contact-list wow animate__fadeInUp animation-style2" data-wow-delay="0.55s">
                    <li><sub>Age:</sub><span> 29</span></li>
                    <li><sub>Phone Number:</sub><span> +92 7971 1145</span></li>
                    <li><sub>Email Id:</sub><span> oliviathompson@exemple.com</span></li>
                    <li><sub>Address:</sub><span> 1234 Oakwood Lane, IL 62704, United States</span></li>
                    <li><sub>Experience:</sub><span> 12 Years Plus</span></li>
                </ul>
                <a class="vs-btn2 wow animate__fadeInUp animation-style2" data-wow-delay="0.65s" href="#">download cv <i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row gy-5 gx-60">
            <div class="col-lg-6 wow animate__fadeInUp animation-style2" data-wow-delay="0.45s">
                <h2 class="sec-title title-anime__title">Professional <span class="title-highlight">skills</span></h2>
                <p class="team-text mb-30">
                    closed system where recircultng cleaning solution is applied often with The CIP system is usually cleaning.
                </p>
                <div class="skills-area">
                    <div class="progress-box">
                        <h3 class="progress-box__title">Dining & Living Room </h3>
                        <span class="progress-box__number">83%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 83%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Kitchen Cleaning </h3>
                        <span class="progress-box__number">90%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 90%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow animate__fadeInUp animation-style2" data-wow-delay="0.65s">
                <h2 class="sec-title title-anime__title">Award and <span class="title-highlight">Honor's</span></h2>
                <p class="team-text mb-30">
                    closed system where recircultng cleaning solution is applied often with The CIP system is usually cleaning.
                </p>

                <div class="icon-area">
                    <span class="icon">
                        <img src="{{ asset('/frontend/assets/img/icon/service-d-icon1.svg') }}" alt="icon">
                    </span>
                    <div class="icon-box">
                        <div class="title-area">
                            <span class="team-degi">office cleaner</span>
                            <h2 class="team-title">Deep Home Cleaning Award</h2>
                        </div>
                        <p class="team-text mb-0">
                            applied often with The CIP system is usually
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area  -->
<section class="vs-testi__layout1 space" data-bg-src="{{ asset('/frontend/assets/img/bg/testi-bg1.jpg') }}">
    <div class="container">
        <div class="row gx-60 g-5">
            <div class="col-xl-5">
                <div class="vs-testi__form1 wow animate__fadeInUp" data-wow-delay="0.45s">
                    <div class="title-area text-left  wow animate__fadeInUp" data-wow-delay="0.25s">
                        <span class="sec-subtitle text-white left-shape justify-content-center">CLEANING SERVICE</span>
                        <h2 class="sec-title text-white">Book Your Cleaning?</h2>
                    </div>
                    <div class="vs-comment-form">
                        <div id="respond">
                            <form action="https://html.vecurosoft.com/poolito/demo/mail.php" method="post" class="ajax-contact">
                                <div class="row gx-3">
                                    <div class="col-md-6 form-group">
                                        <input name="fname" type="text" class="form-control" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email *" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="number" type="number" class="form-control" placeholder="Phone *" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select name="subject" id="subject">
                                            <option selected="" disabled="" hidden="">Type of service</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="UI Design">UI Design</option>
                                            <option value="CMS Development">CMS Development</option>
                                            <option value="Theme Development">Theme Development</option>
                                            <option value="Wordpress Development">Wordpress Development</option>
                                        </select>
                                    </div>
                                    <div class="col-12  form-group mt-1 mb-20">
                                        <textarea name="message" class="form-control" placeholder="your message"
                                            required=""></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn" type="submit">see my instant quote</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages mb-0 mt-3"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="vs-testi__inner">
                    <div class="title-area text-left wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                        <span class="sec-subtitle  left-shape justify-content-center title-anime__title">TESTIMONIAL</span>
                        <h2 class="sec-title text-white title-anime__title">Our Client Are Saying</h2>
                        <p class="sec-text">When you work with Los Angeles House Cleaners Referal Agency cleaning breathe easy because your home will soon</p>
                    </div>
                    <div class="vs-testi__items wow animate__fadeInUp" data-wow-delay="0.35s">
                        <div class="vs-carousel testi-slider" data-autoplay="true" data-fade="true">
                            <div class="vs-testi__style1">
                                <span class="vs-testi__icon"><i class="fas fa-quote-left"></i></span>
                                <div class="vs-testi__top">
                                    <div class="vs-testi__image">
                                        <img class="img1" src="{{ asset('/frontend/assets/img/testimonial/testi-1-1.png') }}" alt="testimonials">
                                    </div>
                                    <div class="vs-testi__author">
                                        <div class="star-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-solid fa-star"></i> -->
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <h3 class="vs-testi__title">rodja hartmann</h3>
                                    </div>
                                </div>
                                <div class="vs-testi__content">
                                    <p class="vs-testi__text">
                                        “ When you work with Los Angeles House Cleaners Refal Agen cleaning room breathe easy because your
                                        home will soon When yowork with Angeles House Cleaners Referal Agency cleaning breathe ”
                                    </p>
                                </div>
                            </div>
                            <div class="vs-testi__style1">
                                <span class="vs-testi__icon"><i class="fas fa-quote-left"></i></span>
                                <div class="vs-testi__top">
                                    <div class="vs-testi__image">
                                        <img class="img1" src="{{ asset('/frontend/assets/img/testimonial/testi-1-1.png') }}" alt="testimonials">
                                    </div>
                                    <div class="vs-testi__author">
                                        <div class="star-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-regular fa-star"></i> -->
                                        </div>
                                        <h3 class="vs-testi__title">alaxander pall</h3>
                                    </div>
                                </div>
                                <div class="vs-testi__content">
                                    <p class="vs-testi__text">
                                        “ When you work with Los Angeles House Cleaners Refal Agen cleaning room breathe easy because your
                                        home will soon When yowork with Angeles House Cleaners Referal Agency cleaning breathe ”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-arraw wow animate__fadeInUp" data-wow-delay="0.45s">
                        <div class="icon-arraw slick-prev" data-slick-prev=".testi-slider">
                            <button class="icon-btn2">
                                <img src="{{ asset('/frontend/assets/img/icon/arraw-right.svg') }}" alt="icon">
                            </button>
                        </div>
                        <div class="icon-arraw slick-next" data-slick-next=".testi-slider">
                            <button class="icon-btn2">
                                <img src="{{ asset('/frontend/assets/img/icon/arraw-left.svg') }}" alt="icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="common-line shape-mockup d-none d-xxl-block" style="top: -7px;">
        <img src="{{ asset('/frontend/assets/img/shapes/line-shep.png') }}" alt="shapes">
    </div>
</section>
<!-- Testimonial Area End  -->
<!-- About Area  -->
<section class="about-layout1 bg-linear space">
    <div class="container">
        <div class="row gx-60 g-5 justify-content-center">
            <div class="col-xl-6">
                <div class="img-box1 style2 wow animate__fadeInUp" data-wow-delay="0.55s">
                    <div class="img-icon">
                        <img src="{{ asset('/frontend/assets/img/icon/about-icon1.svg') }}" alt="icon">
                        <span class="icon-shep">
                            <img src="{{ asset('/frontend/assets/img/shapes/about-icon-shape1.png') }}" alt="shape" class="spin">
                        </span>
                    </div>
                    <div class="img1">
                        <a href="/about"><img src="{{ asset('/frontend/assets/img/about/about-img-3-1.jpg') }}" alt="About Image"></a>
                    </div>
                    <div class="img2">
                        <a href="/about"><img src="{{ asset('/frontend/assets/img/about/about-img-1-2.jpg') }}" alt="About Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area pe-0 title-anime animation-style2">
                    <span class="sec-subtitle left-shape justify-content-center title-anime__title">ASKED QUESTIONS</span>
                    <h2 class="sec-title title-anime__title">General Frequently <span class="title-highlight">Asked</span> Questions</h2>
                </div>
                <div class="accordion accordion-style1" id="faqVersion1">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. Deep House Cleaning Service</button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>give your home a fresh new look and feel that you especially after a long day
                                    of work. our deep clean will help bring your property back up to scratch
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. NYC home cleaning company
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>give your home a fresh new look and feel that you especially after a long day
                                    of work. our deep clean will help bring your property back up to scratch
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. 100% secure online payments
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>give your home a fresh new look and feel that you especially after a long day
                                    of work. our deep clean will help bring your property back up to scratch
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. Fast, same day booking confirmation
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Yes, despite the removal of Government Feed-in Tariff, installs have been forecast to
                                    continue at the current rate and even increase in 2025.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup z-index-n1 d-lg-block d-none" style="left: 0px; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/map-shape-3.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/about-shape-1-2.png') }}" alt="counter element"></span>
    <span class="shape-mockup" style="right: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/map-shape-1.png') }}" alt="counter element"></span>
</section>
<!-- About Area End -->
@endsection