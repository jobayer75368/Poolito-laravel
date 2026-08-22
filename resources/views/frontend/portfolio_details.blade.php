@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">portfolio <span>Details </span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    <a href="{{ route('portfolio')}}">Portfolios</a>
                </li>
                <li>
                    <a href="{{ route('portfolio_details',$portfolio->portfolio_slug) }}">{{ $portfolio->portfolio_slug }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- portfolio Area  -->
<section class="portfolio-Details space">
    <div class="container">
        <div class="portfolio-img wow animate__fadeInUp" data-wow-delay="0.20s">
            <img src="{{$portfolio->portfolio_image && Storage::disk('public')->exists($portfolio->portfolio_image) ? asset('storage/'.$portfolio->portfolio_image):asset('no-image.png')}}" alt="{{ $portfolio->portfolio_title }}">
        </div>
        <div class="portfolio-content">
            <div class="row gx-60 g-2">
                <div class="col-lg-8">
                    <h2 class="portfolio-title h3 mb-20 wow animate__fadeInUp" data-wow-delay="0.25s">{{ $portfolio->portfolio_title }}</h2>
                    {!! $portfolio->description !!}
                </div>
                <div class="col-lg-4">
                    <div class="widget widget_categories style2 wow animate__fadeInUp wow-animated" data-wow-delay="0.75s">
                        <h3 class="widget_title">all portfolio</h3>
                        <div class="widget_content">
                            <ul>
                                @foreach ($allPortfolios as $allPortfolio )
                                <li>
                                    <a href="{{ route('portfolio_details',$allPortfolio->portfolio_slug) }}"><i class="fa-solid fa-angles-right"></i>{{ $allPortfolio->portfolio_title }}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="contact-box2 wow animate__fadeInUp wow-animated" data-wow-delay="0.85s">
                        <h2 class="portfolio-title">Let’s Contact with us</h2>
                        <span class="icon-btn">
                            <img src="{{ asset('/frontend/assets/img/icon/call-icon2.svg') }}" alt="call icon">
                        </span>
                        <div class="contact-content">
                            <h6 class="contact-title">Need help? Talk to expert</h6>
                            <p class="contact-text"><a href="tel:+9-666-888-679">+9 112 - 8899</a></p>
                        </div>
                        <span class="shape-mockup" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/contact-sheap1.png') }}" alt="team element"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="team element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/team-shep3.png') }}" alt="team element"></span>
</section>

@endsection