@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">contace <span>us</span></h1>
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
                            <a href="#" class="address">roda wQ 966 munich Express 70Germany, park lan, TX 7859</a>
                        </div>
                        <div class="contact-box">
                            <span class="contact-icon">
                                <i class="fa-light fa-phone-volume"></i>
                            </span>
                            <div class="contact-content">
                                <h6 class="contact-title">Customer Service :</h6>
                                <p class="contact-text">+9-555-888-679, +9-666-888-679</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <span class="contact-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                            <div class="contact-content">
                                <h6 class="contact-title">careers :</h6>
                                <p class="contact-text">exemple@info.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-style2 wow animate__fadeInUp" data-wow-delay="0.45s">
                        <span class="social-title">Follow Us :</span>
                        <div class="social-icon">
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="form-style2 wow animate__fadeInUp" data-wow-delay="0.55s">
                    <div class="vs-comment-form">
                        <div id="respond">
                            <form action="https://html.vecurosoft.com/poolito/demo/mail.php" method="post" class="ajax-contact">
                                <div class="row gx-3">
                                    <div class="col-md-6 form-group">
                                        <input name="fname" type="text" class="form-control" placeholder="First Name *" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="lname" type="text" class="form-control" placeholder="Last Name *" required="">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input name="number" type="number" class="form-control" placeholder="Your Phone *" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Your Email *" required="">
                                    </div>
                                    <div class="col-12  form-group mt-1 mb-30">
                                        <textarea name="message" class="form-control" placeholder="your message ..."
                                            required=""></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages mb-0 mt-3"></p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1665403058628!5m2!1sen!2sbd" width="800" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection