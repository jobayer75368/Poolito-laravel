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
            @foreach ($members as $member )
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-team__style1">
                    <div class="vs-team__img">
                        <a href="{{ route('team_details',$member->slug) }}">
                            <img src="{{$member->member_image && Storage::disk('public')->exists($member->member_image)? asset('storage/'.$member->member_image ): asset('no-image.png') }}" alt="{{ $member->name }}" style="height: 310px; width: 320px;">
                        </a>
                        <div class="vs-team__social--media">
                            <a href="{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $member->linkedin }}"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="{{ $member->instagram }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="vs-team__content">
                        <h2 class="vs-team__title"><a href="{{ route('team_details' ,$member->slug) }}">{{ $member->name }}</a></h2>
                        <p class="vs-team__subtitle">{{ $member->designation }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <span class="shape-mockup" style="right: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/service-shape-1.png') }}" alt="team element"></span>
    <span class="shape-mockup z-index-n1" style="left: 0; bottom: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/team-shep3.png') }}" alt="team element"></span>
</section>
@endsection