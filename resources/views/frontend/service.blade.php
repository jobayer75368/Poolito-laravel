@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">our <span>service</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>our service</li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Area  -->
<section class="vs-service__layout1 bg-linear space position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                    <span class="sec-subtitle justify-content-center title-anime__title"> CLEANING SERVICE</span>
                    <h2 class="sec-title title-anime__title">Our Excellent Service</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-1.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service">home service</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-1.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.45s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-2.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service">Kitchen Clean</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-2.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.65s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-3.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service">Purification</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-3.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.85s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-4.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service">Bed & Mattres</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-4.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-5.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service">Bed & Mattres</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-4.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup z-index-n1 d-lg-block d-none" style="left: 0px; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/map-shape-3.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/about-shape-1-2.png') }}" alt="counter element"></span>
</section>
<!-- Service Area End  -->
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
<div class="sponsor space-mobile">
    <div class="container text-center">
        <div class="row vs-carousel" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2" data-autoplay="true">
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.35s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-1.png') }}" alt="Brand">
            </div>
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.45s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-2.png') }}" alt="Brand">
            </div>
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.55s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-3.png') }}" alt="Brand">
            </div>
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.65s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-4.png') }}" alt="Brand">
            </div>
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.75s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-5.png') }}" alt="Brand">
            </div>
            <div class="col-auto sponsor__item wow animate__fadeInUp" data-wow-delay="0.45s">
                <img src="{{ asset('/frontend/assets/img/brand/brand-2-2.png') }}" alt="Brand">
            </div>
        </div>
    </div>
</div>
@endsection