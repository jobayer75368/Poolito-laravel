@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">our <span>portfolio</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>our portfolio</li>
            </ul>
        </div>
    </div>
</div>
<!-- portfolio Area  -->
<section class="portfolio-layout1 space">
    <div class="container">
        <div class="row gx-20 gy-3">
            <div class="col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-1.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-2.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-3.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.45s">
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-4.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-5.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-6.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-lg-block d-none col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.75s">
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-7.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-8.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
                <div class="portfolio-style1">
                    <div class="portfolio-img">
                        <img src="{{ asset('/frontend/assets/img/gallery/gallery-img-3-9.jpg') }}" alt="gallery image">
                        <span class="icon icon-btn"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></span>
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-subtitle">cleaning 04</p>
                        <h2 class="portfolio-title"><a href="/portfolio_details">Bed & Mattres</a></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="vs-pagination wow animate__fadeInUp" data-wow-delay="0.65s">
            <ul>
                <li class="arrow"><a href="#"><i class="fas fa-chevron-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">6</a></li>
                <li class="arrow"><a class="active" href="#"><i class="fas fa-chevron-double-right"></i></a></li>
            </ul>
        </div>
    </div>

    <span class="shape-mockup" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/') }}assets/img/shapes/service-shape-1.png" alt="team element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/') }}assets/img/shapes/team-shep3.png" alt="team element"></span>
</section>

@endsection