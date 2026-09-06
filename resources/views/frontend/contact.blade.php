@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ $settings->header_logo? asset('storage/'.$settings->page_banner) :'';}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">contact <span>us</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>contact us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    contact Area
    ==============================-->
<section class="contact-layout1 space">
    <div class="container">
        <div class="row g-5 gx-60">
            <div class="col-xl-5">
                <div class="contact-style1">
                    <div class="title-area text-left  wow animate__fadeInUp animation-style2" data-wow-delay="0.25s">
                        <span class="sec-subtitle left-shape justify-content-center title-anime__title">CONTACT US</span>
                        <h2 class="sec-title title-anime__title">Get in touch with us</h2>
                    </div>
                    <div class="contact-inner wow animate__fadeInUp" data-wow-delay="0.35s">
                        <div class="contact-address">
                            <span>Address:</span>
                            <a href="#" class="address">{{$settings->address}}</a>
                        </div>
                        <div class="contact-box">
                            <span class="contact-icon">
                                <i class="fa-light fa-phone-volume"></i>
                            </span>
                            <div class="contact-content">
                                <h6 class="contact-title">Customer Service :</h6>
                                <p class="contact-text">{{$settings->phone}}</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <span class="contact-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                            <div class="contact-content">
                                <h6 class="contact-title">careers :</h6>
                                <p class="contact-text">{{$settings->email}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-style2 wow animate__fadeInUp" data-wow-delay="0.45s">
                        <span class="social-title">Follow Us :</span>
                        <div class="social-icon">
                            <a href="{{$settings->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                            <a href="{{$settings->linkedin}}"><i class="fab fa-linkedin-in"> </i></a>
                            <a href="{{$settings->instagram}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="form-style2 wow animate__fadeInUp" data-wow-delay="0.55s">
                    <div class="vs-comment-form">
                        <div id="respond">
                            <form action="{{ route('message.store') }}" method="post" class="">
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-md-6 form-group">
                                        <input name="first_name" type="text" class="form-control" placeholder="First Name *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="last_name" type="text" class="form-control" placeholder="Last Name *">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="number" class="form-control" placeholder="Your Phone *" required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Your Email *">
                                    </div>

                                    <div class="col-12  form-group mt-1 mb-30">
                                        <textarea name="message" class="form-control" placeholder="your message ..." required></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>

                            @if(session('success'))
                            <p class="btn btn-success mb-0 mt-3">
                                {{ session('success') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
    map Area
    ==============================-->
<div class="map-layout1">
    <div class="ratio ratio-21x9" style="height:550px">
        {!! $settings->location !!}
    </div>
</div>
@endsection