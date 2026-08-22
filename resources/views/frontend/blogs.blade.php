@extends('frontend/frontend_master')
@section('frontend_content')
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">blog <span>sidebar</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>our blog</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Blog Area
    ==============================-->
<section class="vs-blog-wrapper space">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-9 pe-4">
                @foreach ($blogs as $blog )
                <div class="vs-blog blog-single wow animate__fadeInUp wow-animated">
                    <div class="blog-img">
                        <a href="{{ route('blogs',$blog->blog_slug) }}">
                            <img src="{{$blog->blog_image && Storage::disk('public')->exists($blog->blog_image)? asset('storage/'.$blog->blog_image ): asset('no-image.png') }}" alt="{{ $blog->blog_title }}" style="height: 100%; width: 100%">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-inner-author">
                            <span>Written by:<a href="{{route('blogs',$blog->blog_slug)}}">{{$blog->creator->name}}</a></span>
                            <a href="{{ route('blogs',$blog->blog_slug) }}" class="blog-date"><i class="fa-regular fa-calendar-days"></i>{{ $blog->created_at->format('d M Y, h:i A') }}</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog_details',$blog->blog_slug) }}">{{ $blog->blog_title }}</a></h2>
                        <div>
                            {{ Str::words(strip_tags($blog->short_description), 40, '...') }}
                        </div>
                    </div>
                    <div class="blog-links">
                        <a href="{{ route('blogs',$blog->blog_slug) }}" class="link-btn">read more<i class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
                @endforeach
                <div class="vs-pagination">
                    <ul>
                        <li class="arrow"><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">6</a></li>
                        <li class="arrow"><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar-area">
                    <div class="widget widget_about wow animate__fadeInUp wow-animated">
                        <img src="{{ asset('/frontend/assets/img/blog/widget-profile-img-1-1.jpg') }}" alt="about">
                        <h3 class="title">Amalia elha</h3>
                        <p class="text">Lorem ipsum dolor sit amet cons elitsedid that eiusmod aboret dolore</p>
                    </div>
                    <div class="widget widget_categories wow animate__fadeInUp wow-animated">
                        <h3 class="widget_title">
                            category
                        </h3>
                        <ul>
                            <li>
                                <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Pool Cleaning</a>
                                <span>09</span>
                                <img class="dot-shape" src="{{ asset('/frontend/assets/img/shapes/dot-shape-3.svg') }}" alt="dot-shape">
                            </li>
                            <li>
                                <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Pools Maintenance</a>
                                <span>02</span>
                                <img class="dot-shape" src="{{ asset('/frontend/assets/img/shapes/dot-shape-3.svg') }}" alt="dot-shape">
                            </li>
                            <li>
                                <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Sweep Home</a>
                                <span>08</span>
                                <img class="dot-shape" src="{{ asset('/frontend/assets/img/shapes/dot-shape-3.svg') }}" alt="dot-shape">
                            </li>
                            <li>
                                <a href="/blog_details"><i class="fa-solid fa-angles-right"></i>Window Cleaning</a>
                                <span>03</span>
                                <img class="dot-shape" src="{{ asset('/frontend/assets/img/shapes/dot-shape-3.svg') }}" alt="dot-shape">
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title title-shep">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="/blog_details"><img src="{{ asset('/frontend/assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="/blog"><i class="fa-regular fa-calendar-days"></i>Dec 13, 2024</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="/blog_details">dining & leving room cleaning</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="/blog_details"><img src="{{ asset('/frontend/assets/img/blog/recent-post-1-2.jpg') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="/blog"><i class="fa-regular fa-calendar-days"></i>Jan 08, 2024</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="/blog_details">Keeping the Hive Deep Clean plan</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="/blog_details"><img src="{{ asset('/frontend/assets/img/blog/recent-post-1-3.jpg') }}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="/blog"><i class="fa-regular fa-calendar-days"></i>Nov 07, 2024</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="/blog_details">Most Caring Cleaning Service?</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tags wow animate__fadeInUp wow-animated">
                        <h3 class="widget_title">
                            Tags
                        </h3>
                        <div class="tagcloud">
                            <a href="/blog_details">cleaning</a>
                            <a href="/blog_details">keeping</a>
                            <a href="/blog_details">service</a>
                            <a href="/blog_details">Window</a>
                            <a href="/blog_details">Move-In</a>
                            <a href="/blog_details">Water Pool</a>
                            <a href="/blog_details">home clean</a>
                        </div>
                    </div>
                    <div class="widget widget_gallery wow animate__fadeInUp wow-animated">
                        <h3 class="widget_title">Follow Us</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-1.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-1.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-2.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-2.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-3.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-3.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-4.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-4.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-5.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-5.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('/frontend/assets/img/widget/gal-1-6.jpg') }}" alt="Gallery Image" class="w-100">
                                <a href="{{ asset('/frontend/assets/img/widget/gal-1-6.jpg') }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_search wow animate__fadeInUp wow-animated">
                        <form class="search-form">
                            <input type="text" placeholder="type here...">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection