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
        <div class="gx-20 gy-3">
            <div class="row col-sm-12 wow animate__fadeInUp" data-wow-delay="0.45s">
                @foreach ($portfolios as $portfolio )
                <div class="col-lg-4">
                    <div class="portfolio-style1">
                        <div class="portfolio-img">
                            <img src="{{ $portfolio->portfolio_image && Storage::disk('public')->exists($portfolio->portfolio_image)? asset('storage/'.$portfolio->portfolio_image):asset('no-image.png')}}" alt="{{ $portfolio->portfolio_title }}" style="height:350px">
                            <span class="icon icon-btn"><a href="{{ route('portfolio_details',$portfolio->portfolio_slug) }}"><i class="fa-solid fa-arrow-up"></i></a></span>
                        </div>
                        <div class="portfolio-content">
                            <p class="portfolio-subtitle">cleaning 04</p>
                            <h2 class="portfolio-title"><a href="{{ route('portfolio_details',$portfolio->portfolio_slug) }}">{{ $portfolio->portfolio_title }}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach
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

    <span class="shape-mockup" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="team element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/team-shep3.png') }}" alt="team element"></span>
</section>

@endsection