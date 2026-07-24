@extends('frontend.frontend_master')

@section('frontend_content')
<!-- Hero Area -->
<section class="vs-hero__layout1" data-wow-delay="0.25s" aria-hidden="true">
    <div class="vs-hero__item" data-bg-src="{{ asset('/frontend/assets/img/bg/hero-bg-1.jpg') }}">
        <div class="main-container3 position-relative z-index">
            <div class="row justify-content-end align-items-center">
                <div class="col-lg-6 position-relative">
                    <div class="vs-hero__content">
                        <div class="vs-hero__subtitle wow animate__fadeInUp" data-wow-delay="0.90s"><span class="icon"><img src="{{ asset('/frontend/assets/img/icon/satisfaction-icon.svg') }}" alt="Hero Icon"></span>100% Satisfaction</div>
                        <h1 class="vs-hero__title wow animate__fadeInUp" data-wow-delay="0.85s">cleaning Services <span class="vs-hero__title--highlight">For</span> your city</h1>
                        <a class="vs-btn2 wow animate__fadeInUp" data-wow-delay="0.95s" href="index.html">Get Pricing<i class="far fa-long-arrow-right"></i></a>
                        <span class="dot-shape"></span>
                    </div>
                    <span class="shape-mockup hero-shep2 moving" style="left: -110px; bottom: -30px;"><img src="{{ asset('/frontend/assets/img/shapes/clean1.png') }}" alt="hero element"></span>
                </div>
                <div class="col-lg-6">
                    <div class="vs-hero__image position-relative">
                        <div class="main-img vs-carousel" data-fade="true" data-autoplay="true">
                            <div class="slide-item">
                                <img src="{{ asset('/frontend/assets/img/hero/hero-img-1-1.png') }}" alt="Hero Image">
                            </div>
                            <div class="slide-item">
                                <img src="{{ asset('/frontend/assets/img/hero/hero-img-1-2.png') }}" alt="Hero Image">
                            </div>
                        </div>
                        <span class="shape-mockup hero-shep3 custome-sheap1 wow animate__zoomIn" data-wow-delay="0.90s" style="left: -50px; bottom: 0;"><img src="{{ asset('/frontend/assets/img/shapes/hero-shep-1-1.svg') }}" alt="hero element"></span>
                        <span class="shape-mockup hero-shep4 custome-sheap1 wow animate__zoomIn" data-wow-delay="0.80s" style="left: -130px; bottom: 0;"><img src="{{ asset('/frontend/assets/img/shapes/hero-shep-1-2.svg') }}" alt="hero element"></span>
                        <span class="shape-mockup hero-shep5 spin d-lg-block d-none" style="left: 75px; top: 90px;"><img src="{{ asset('/frontend/assets/img/shapes/circle-1.png') }}" alt="hero element"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bubbles d-lg-block d-none">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
    <span class="shape-mockup wow animate__fadeInLeft" data-wow-delay="0.80s" style="left: 0px; top: 60px;"><img src="{{ asset('/frontend/assets/img/shapes/hero-sheap3.png') }}" alt="Hero element"></span>
</section>
<!-- Hero Area End -->
<!-- Counter Area -->
<div class="vs-counter__layout1 position-relative">
    <div class="main-container4">
        <div class="row align-items-center justify-content-sm-center">
            <div class="col-md-auto">
                <div class="vs-counter__inner">
                    <div class="play-video">
                        <a href="https://www.youtube.com/watch?v=moYayPRgaY0" class="play-btn2 popup-video"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="vs-counter__content">
                        <div class="wow animate__fadeInUp" data-wow-delay="0.25s">
                            <div class="title-area title-anime animation-style1">
                                <span class="sec-subtitle justify-content-center title-anime__title">ABOUT CLEANING</span>
                                <h2 class="sec-title title-anime__title">DEEP CLEANING IN YOUR CITY</h2>
                            </div>
                        </div>
                    </div>
                    <span class="shape-mockup  custom-sheap" style="left: -35%; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/counter-shep2.png') }}" alt="counter element"></span>
                </div>
            </div>
            <div class="col">
                <div class="counter-style1">
                    <div class="row g-5 z-index-common justify-content-lg-between justify-content-center align-items-center ">
                        <div class="col-xl-auto col-lg-6 col-6">
                            <div class="media-style">
                                <div class="media-inner">
                                    <span class="counter-icon"><img src="{{ asset('/frontend/assets/img/icon/counter-icon-1-1.svg') }}" alt="icon"></span>
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title h3 counter-number" data-count="950">00</h2>
                                            <span class="count-icon">+</span>
                                        </div>
                                        <p class="media-text">Happpy client</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-auto col-lg-6 col-6">
                            <div class="media-style">
                                <div class="media-inner">
                                    <span class="counter-icon"><img src="{{ asset('/frontend/assets/img/icon/counter-icon-1-2.svg') }}" alt="icon"></span>
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title h3 counter-number" data-count="45">00</h2>
                                            <span class="count-icon">+</span>
                                        </div>
                                        <p class="media-text">Award Winner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-auto col-lg-6 col-6">
                            <div class="media-style">
                                <div class="media-inner">
                                    <span class="counter-icon"><img src="{{ asset('/frontend/assets/img/icon/counter-icon-1-3.svg') }}" alt="icon"></span>
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title h3 counter-number" data-count="400">00</h2>
                                            <span class="count-icon">+</span>
                                        </div>
                                        <p class="media-text">Completed Project</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-auto col-lg-6 col-6">
                            <div class="media-style">
                                <div class="media-inner">
                                    <span class="counter-icon"><img src="{{ asset('/frontend/assets/img/icon/counter-icon-1-4.svg') }}" alt="icon"></span>
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title h3 counter-number" data-count="100">00</h2>
                                            <span class="count-icon">+</span>
                                        </div>
                                        <p class="media-text">Team Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup" style="left: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/counter-bg-shep1.png') }}" alt="counter element"></span>
</div>
<!-- Counter Area End -->
<!-- About Area  -->
<section class="about-layout1 space-top">
    <div class="container">
        <div class="row gx-60 g-5 justify-content-center">
            <div class="col-xl-6">
                <div class="img-box1 wow animate__fadeInUp" data-wow-delay="0.55s">
                    <div class="img-icon">
                        <img src="{{ asset('/frontend/assets/img/icon/about-icon1.svg') }}" alt="icon">
                        <span class="icon-shep">
                            <img src="{{ asset('/frontend/assets/img/shapes/about-icon-shape1.png') }}" alt="shape" class="spin">
                        </span>
                    </div>
                    <div class="img1">
                        <a href="/about"><img src="{{ asset('/frontend/assets/img/about/about-img-1-1.jpg') }}" alt="About Image"></a>
                    </div>
                    <div class="img2">
                        <a href="/about"><img src="{{ asset('/frontend/assets/img/about/about-img-1-2.jpg') }}" alt="About Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content">
                    <div class="wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div class="title-area title-anime animation-style2">
                            <span class="sec-subtitle left-shape justify-content-center title-anime__title">ABOUT CLEANING</span>
                            <h2 class="sec-title title-anime__title">Our Cleaning <span class="title-highlight">Agency</span> For Your City</h2>
                        </div>
                        <p class="about-text">
                            When you work Angeles House Cleaners Referal Agency cleaning breathe easy because your home will soon
                        </p>
                    </div>
                    <div class="about-box1 wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div class="about-item">
                            <span class="item-icon">
                                <img src="{{ asset('/frontend/assets/img/icon/about-icon2.svg') }}" alt="icon">
                            </span>
                            <h2 class="item-title h6">House Cleaning</h2>
                            <p class="item-text">leaning machine your Ultrasonic parts cleaning dioxide</p>
                        </div>
                        <div class="about-item">
                            <span class="item-icon">
                                <img src="{{ asset('/frontend/assets/img/icon/about-icon3.svg') }}" alt="icon">
                            </span>
                            <h2 class="item-title h6">Living Room Cleaning</h2>
                            <p class="item-text">leaning machine your Ultrasonic parts cleaning dioxide</p>
                        </div>
                    </div>
                    <div class="about-inner wow animate__fadeInUp" data-wow-delay="0.25s">
                        <a class="vs-btn2" href="/about">read more <i class="far fa-long-arrow-right"></i></a>
                        <div class="author-box">
                            <img src="{{ asset('/frontend/assets/img/about/author-img.jpg" alt="author image') }}">
                            <div class="author-content">
                                <h2 class="title h5">D.markwin</h2>
                                <p class="desi">Co-founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-notice wow animate__fadeInUp" data-wow-delay="0.30s">
                        <span class="notice-icon"><img src="{{ asset('/frontend/assets/img/icon/about-icon4.svg') }}" alt="icon"></span>
                        <p class="notice-text">Give Your Home A Deep Clean for aesthetic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup z-index-n1 d-lg-block d-none" style="left: 52px; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/about-shape-1-1.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1 d-xl-block d-none" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/about-shape-1-2.png') }}" alt="counter element"></span>
</section>
<!-- About Area End -->
<!-- Service Area  -->
<section class="vs-service__layout1 space position-relative">
    <div class="container custome-space-bottom">
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
                        <a href="/service_details">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-1.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service-details">home service</a></h2>
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
                        <a href="/service-details">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-2.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service-details">Kitchen Clean</a></h2>
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
                        <a href="/service-details">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-3.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service-details">Purification</a></h2>
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
                        <a href="/service_details">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-4.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service_details">Bed & Mattres</a></h2>
                            </div>
                            <div class="vs-service__icon">
                                <img src="{{ asset('/frontend/assets/img/icon/service-icon-1-4.svg') }}" alt="Service Icon">
                            </div>
                        </div>
                        <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.95s">
                <div class="vs-service__style1">
                    <div class="vs-service__img">
                        <a href="/service_details">
                            <img src="{{ asset('/frontend/assets/img/service/service-img-1-5.jpg') }}" alt="Serevice Image">
                        </a>
                    </div>
                    <div class="vs-service__body">
                        <div class="vs-service__header">
                            <div class="vs-service__content">
                                <p class="vs-service__subtitle">cleaning 01</p>
                                <h2 class="vs-service__title h6"><a href="/service_details">House Clean</a></h2>
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
    <span class="shape-mockup z-index-n1 d-xl-block d-none" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1 custom-sheap" style="right: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-2.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1 d-xl-block d-none" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-3.png') }}" alt="counter element"></span>
</section>
<!-- Service Area End  -->
<!-- Client Area  -->
<section class="vs-client__layout1 space-bottom" data-bg-src="{{ asset('/frontend/assets/img/bg/client-bg1.jpg') }}">
    <div class="container">
        <div class="video-style1 background-image" data-bg-src="{{ asset('/frontend/assets/img/bg/video-bg1.png') }}">
            <div class="row justify-content-center">
                <div class="video-area text-center">
                    <a href="https://www.youtube.com/watch?v=moYayPRgaY0" class="play-btn popup-video">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
                <div class="col-xl-6">
                    <div class="title-area text-center wow animate__fadeInUp title-anime animation-style2" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2 class="sec-title title-anime__title">Most Trusted service</h2>
                        <a class="vs-btn2" href="about.html">discover more <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-5 position-relative wow animate__fadeInUp">
                <div class="title-area title-anime animation-style5">
                    <span class="sec-subtitle left-shape justify-content-center title-anime__title">ABOUT CLEANING</span>
                    <h2 class="sec-title text-white title-anime__title">Excellent <span class="title-highlight">Service</span> cleaning</h2>
                </div>
                <div class="vs-client__inner">
                    <div class="author-img">
                        <img src="{{ asset('/frontend/assets/img/cleaning/cleaning-tumb-1.png') }}" alt="cleaning tumb">
                    </div>
                    <div class="vs-client__content">
                        <span class="vs-client__subtitle">57+</span>
                        <p class="vs-client__text">Members</p>
                    </div>
                </div>
                <span class="shape-mockup vs-slider-shape-1  d-xl-block d-none" style="right: 35px; top: -35px;"><img src="{{ asset('/frontend/assets/img/shapes/cleaning-shapes-1.png') }}" alt="counter element"></span>
            </div>
            <div class="col-xl-7">
                <div class="row gx-3 gy-3">
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-1.png') }}" alt="Brand Images">
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.35s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-2.png') }}" alt="Brand Images">
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.45s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-3.png') }}" alt="Brand Images">
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.65s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-4.png') }}" alt="Brand Images">
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.75s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-5.png') }}" alt="Brand Images">
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 col-md-4 wow animate__fadeInUp" data-wow-delay="0.85s">
                        <div class="vs-client__brand">
                            <img src="{{ asset('/frontend/assets/img/brand/brand-1.png') }}" alt="Brand Images">
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
<!-- Client Area End -->
<!-- Team Area  -->
<section class="vs-team__layout1 bg-linear space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                    <span class="sec-subtitle justify-content-center title-anime__title">MEET OUR TEAM</span>
                    <h2 class="sec-title title-anime__title">We have a expert team</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-autoplay="true" data-arrows="true">
            <div class="col-xl-3 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="team.html">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-1.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="team.html">erica hanson</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 wow animate__fadeInUp" data-wow-delay="0.35s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="team.html">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-2.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="team.html">Alexandra Dario</a></h2>
                        <p class="vs-team__subtitle">founder, CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 wow animate__fadeInUp" data-wow-delay="0.45s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="team.html">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-3.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="team.html">emely jonson</a></h2>
                        <p class="vs-team__subtitle">office cleaner</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 wow animate__fadeInUp" data-wow-delay="0.55s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="team.html">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-4.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="team.html">Tonoy Rahomon</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 wow animate__fadeInUp" data-wow-delay="0.65s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="team.html">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-4.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="team.html">Rivan islam</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup d-xl-block d-none" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="team element"></span>
    <span class="shape-mockup d-xl-block d-none z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/team-shep1.png') }}" alt="team element"></span>
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
<!-- Blog Area -->
<section class="vs-blog__layout1 space" data-bg-src="{{ asset('/frontend/assets/img/bg/blog-bg1.png') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                    <span class="sec-subtitle justify-content-center title-anime__title">OUR UPDATE BLOG</span>
                    <h2 class="sec-title title-anime__title">Updated Natest News</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 wow animate__fadeInUp" data-wow-delay="0.35s">
                <div class="vs-blog__style1  mb-0">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/frontend/assets/img/blog/blog-s-2-1.jpg') }}" alt="Blog Image"></a>
                        <a href="blog.html" class="blog-cate">deep cleaning</a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-inner-author">
                            <a href="blog.html" class="blog-date"><i class="fa-regular fa-calendar-days"></i>April 27, 2024</a>
                            <a href="blog.html" class="blog-date"><i class="far fa-comments"></i>0 Comments</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Residential House & Apartment Cleaning Services Include</a></h2>
                        <div class="blog-btn">
                            <a class="link-btn" href="blog-details.html"><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow animate__fadeInUp" data-wow-delay="0.65s">
                <div class="blog-box2">
                    <div class="vs-blog__style1 style2 mb-25">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-auto">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/assets/img/blog/blog-s-2-2.jpg') }}" alt="Blog Image"></a>
                                    <a href="blog.html" class="blog-cate">Bedroom</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="blog-content">
                                    <div class="blog-inner-author">
                                        <a href="blog.html" class="blog-date"><i class="fa-regular fa-calendar-days"></i>April 27, 2024</a>
                                        <a href="blog.html" class="blog-date"><i class="far fa-comments"></i>0 Comments</a>
                                    </div>
                                    <h2 class="blog-title"><a href="blog-details.html">Get Launches Cleaning room service</a></h2>
                                    <div class="blog-btn">
                                        <a class="link-btn" href="blog-details.html"><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog__style1 style2 mb-0">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-auto">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/assets/img/blog/blog-s-2-3.jpg') }}" alt="Blog Image"></a>
                                    <a href="blog.html" class="blog-cate">Mattress</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="blog-content">
                                    <div class="blog-inner-author">
                                        <a href="blog.html" class="blog-date"><i class="fa-regular fa-calendar-days"></i>April 27, 2024</a>
                                        <a href="blog.html" class="blog-date"><i class="far fa-comments"></i>0 Comments</a>
                                    </div>
                                    <h2 class="blog-title"><a href="blog-details.html">exclusive coupon for 10% off cleaning</a></h2>
                                    <div class="blog-btn">
                                        <a class="link-btn" href="blog-details.html"><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>Read More</a>
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
<!-- Blog Area End  -->
@endsection