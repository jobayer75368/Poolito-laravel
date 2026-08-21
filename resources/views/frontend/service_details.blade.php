@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Service <span>Details </span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- portfolio Area  -->
<section class="portfolio-Details space position-relative">
    <div class="container">
        <div class="portfolio-content pt-0">
            <div class="row gx-60 g-5">
                <div class="col-lg-4">
                    <div class="widget widget_categories style2 wow animate__fadeInUp wow-animated" data-wow-delay="0.75s">
                        <h3 class="widget_title">all Services</h3>
                        <div class="widget_content">
                            <ul>
                                @foreach ( $allServices as $allService )
                                <li>
                                    <a href="/blog_details">
                                        <i class="fa-solid fa-angles-right"></i>{{ $allService->service_title }}</a>
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
                <div class="col-lg-8">
                    <div class="portfolio-img mb-40 wow animate__fadeInUp" data-wow-delay="0.20s">
                        <img src="{{$service->service_image && Storage::disk('public')->exists($service->service_image)? asset('storage/'.$service->service_image ): asset('no-image.png') }}" alt="{{ $service->service_title }}" style="height: 415px; width: 100%;">
                    </div>
                    <h2 class="portfolio-title h3 mb-20 wow animate__fadeInUp" data-wow-delay="0.25s">{{ $service->service_title }}</h2>

                    <div>{!!$service->short_description!!}</div>
                    <div class="text-break">{!! $service->long_description !!}</div>

                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup" style="right: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/contact-sheap2.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-3.png') }}" alt="counter element"></span>
</section>
@endsection