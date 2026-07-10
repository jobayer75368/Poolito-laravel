@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">meet our <span>team</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>our team member</li>
            </ul>
        </div>
    </div>
</div>
<!-- Team Area  -->
<section class="team-layout2 space">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-1.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">rodja man</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.35s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-2.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">Alexandra Dario</a></h2>
                        <p class="vs-team__subtitle">founder, CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.45s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-3.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">emely jonson</a></h2>
                        <p class="vs-team__subtitle">office cleaner</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.55s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-4.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">erica hanson</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.65s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-5.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">urica hanson</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.75s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-6.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">Alexandra Dario</a></h2>
                        <p class="vs-team__subtitle">office cleaner</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.85s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-7.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">axmel Ronson</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.95s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="/team_details">
                            <img src="{{ asset('/frontend/assets/img/team/team-img-1-8.png') }}" alt="Team Image">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="/team_details">kylie jenner</a></h2>
                        <p class="vs-team__subtitle">Supervisor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="shape-mockup" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="team element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/team-shep3.png') }}" alt="team element"></span>
</section>
@endsection