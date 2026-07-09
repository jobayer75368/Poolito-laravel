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
                        <h3 class="widget_title">all project</h3>
                        <div class="widget_content">
                            <ul>
                                <li>
                                    <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Air Purification</a>
                                </li>
                                <li>
                                    <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Bed & Mattress Cleaning</a>
                                </li>
                                <li>
                                    <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Kitchen Cleaning</a>
                                </li>
                                <li>
                                    <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Aromatizing</a>
                                </li>
                                <li>
                                    <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Bathroom Sanitation</a>
                                </li>
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
                        <img src="{{ asset('/frontend/assets/img/service/s-d-1.jpg') }}" alt="service-Image">
                    </div>
                    <h2 class="portfolio-title h3 mb-20 wow animate__fadeInUp" data-wow-delay="0.25s">Dining & Living Room Cleaning</h2>
                    <p class="portfolio-text mb-20 wow animate__fadeInUp" data-wow-delay="0.35s">
                        closed system where recircultng cleaning solution is applied (often with nozzles) cleans, rinses and sanitises equipment.
                        The CIP system is usually automatically controlled and the cleaning sequeces are given optimum timing for efficient cleaning
                        of all parts of the plants. Knowing the different types of cleaning is essential to ensure main types of cleaning that dea.
                    </p>
                    <p class="portfolio-text mb-30 wow animate__fadeInUp" data-wow-delay="0.45s">
                        Rainbow’s high techngy system with the help of nanles reoving unseen dust mites and bed bugs can cause harmful diseases because of dirters.
                        This also includes changing the bed linens shee provided reoving the specialized deep unseen dust mites client.
                    </p>
                    <h2 class="portfolio-title h4 mb-20 wow animate__fadeInUp" data-wow-delay="0.55s">What the Benefits?</h2>
                    <p class="portfolio-text wow animate__fadeInUp" data-wow-delay="0.65s">
                        Giving to your bed a new life to breathe by closed system where recircltng cleaning solution is applied (often with nozzles) cleans,
                        rinses and sanitises equipment. The CIP system the help of nanles reoving unseen dust mites and bed bugs can cause harmful diseases because of dirters.
                        usually automatically controlled and the cleaning sequeces are given
                    </p>
                    <div class="list-box1 mb-35 wow animate__fadeInUp animation-style2" data-wow-delay="0.50s">
                        <ul class="list-style2 wow animate__fadeInUp wow-animated" data-wow-delay="0.30s">
                            <li class="list-icon"><i class="fas fa-arrow-circle-right"></i>Bed & Mattress Cleaning</li>
                            <li class="list-icon"><i class="fas fa-arrow-circle-right"></i>Kitchen Cleaning</li>
                        </ul>
                        <ul class="list-style2 wow animate__fadeInUp wow-animated" data-wow-delay="0.30s">
                            <li class="list-icon"><i class="fas fa-arrow-circle-right"></i>Giving to your bed a new life to breathe</li>
                            <li class="list-icon"><i class="fas fa-arrow-circle-right"></i>Floor Vacuuming & Mopping</li>
                        </ul>
                    </div>
                    <div class="row align-items-center">
                        <div class=" col-lg-6">
                            <div class=" wow animate__fadeInUp wow-animated" data-wow-delay="0.65s">
                                <img src="{{ asset('/frontend/assets/img/service/s-d-2.jpg') }}" alt="Service Image">
                            </div>
                        </div>
                        <div class=" col-lg-6">
                            <div class=" wow animate__fadeInUp wow-animated" data-wow-delay="0.65s">
                                <img src="{{ asset('/frontend/assets/img/service/s-d-3.jpg') }}" alt="Service Image">
                            </div>
                        </div>
                    </div>
                    <p class="portfolio-text mt-30 mb-0 wow animate__fadeInUp" data-wow-delay="0.65s">
                        Dlosed system where recircultng cleaning solution is applied (often with nozzles) cleans,
                        rinses and sanitises equipment. The CIP system is usually automatically controlled and the cleaning
                        sequeces are given optimum timing for efficient cleaning of all parts of the plants. Knowing the different
                        types of cleaning is essential to ensure main types of cleaning that dea.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup" style="right: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/contact-sheap2.png') }}" alt="counter element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-3.png') }}" alt="counter element"></span>
</section>
@endsection