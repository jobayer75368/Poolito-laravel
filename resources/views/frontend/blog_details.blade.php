@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">blog <span>details</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>blog details</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Blog Area
    ==============================-->
<section class="vs-blog-wrapper blog-details space">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-9 pe-4">
                <div class="vs-blog mb-0 blog-single wow animate__fadeInUp wow-animated">
                    <div class="blog-img">
                        <img src="{{ asset('/frontend/assets/img/blog/blog-s-1-1.jpg') }}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-inner-author">
                            <span>Written by:<a href="/blog">frenk</a></span>
                            <a href="/blog" class="blog-date"><i class="fa-regular fa-calendar-days"></i>April 27, 2024</a>
                        </div>
                        <h2 class="blog-title">Dining & Living Room Cleaning</h2>
                        <p class="blog-text wow animate__fadeInUp" data-wow-delay="0.25s">
                            Rainbow’s high techngy system with the help of nanleees our reoving unseen dusot mites and bed bugs can cause
                            harmfully diseases because of dirters. any This also includes changing home bes linens share providd reovinsg that
                            specialized deep unseen unseen dust echngy mites client. We hand-deliver peace of mind and a tidy space, as well
                            as the luxury of spare time to residents all across Chicago.
                        </p>
                        <p class="blog-text wow animate__fadeInUp" data-wow-delay="0.25s">
                            harmfully diseases because of dirters. This also includes changing home in a bes linens share providd reovinsg that
                            specialized deep unseen unseen dust echngy mites client. We hand-deliver peace of mind and a tidy space, as well
                            as the luxury of spare time to residents all across Chicago.
                        </p>
                        <blockquote class="vs-quote wow animate__fadeInUp" data-wow-delay="0.25s">
                            <p>“ Derek Ramsay and Ellen Adarna known thriving acting carers clean home can be nearly impossible “</p>
                            <cite>Written by: frenk</cite>
                        </blockquote>
                        <p class="blog-text mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
                            Window diseases because of dirters. This also includes changing home bes linens share providd reovinsg that
                            specialized deep unseen unseen dust echngy mites client. We hand-deliver peace of mind and a tidy space, as well
                            as the luxury of spare time to residents all across Chicago.
                        </p>
                        <h4 class="text-capitalize wow animate__fadeInUp" data-wow-delay="0.25s">What the Benefits?</h4>
                        <p class="blog-text mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
                            Giving to your bed a new life to breathe by closed system where recircltng cleaning solution is
                            applied (often with nozzles) cleans, rinses and sanitises equipment. The CIP system the help of
                            nanles reoving unseen dust mites and bed bugs can cause harmful diseases because of dirters. usually
                            automatically controlled and the closed system where recircltng cleaning given.
                        </p>
                        <div class="row gx-20">
                            <div class="col-xl-6 col-md-6 mb-20 wow animate__fadeInUp" data-wow-delay="0.25s">
                                <figure class="wp-block-image">
                                    <img src="{{ asset('/frontend/assets/img/blog/blog-d-2.jpg') }}" alt="blog">
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 mb-20 wow animate__fadeInUp" data-wow-delay="0.25s">
                                <figure class="wp-block-image">
                                    <img src="{{ asset('/frontend/assets/img/blog/blog-d-3.jpg') }}" alt="blog">
                                </figure>
                            </div>
                        </div>
                        <p class="blog-text mb-80 mb-sm-40 wow animate__fadeInUp" data-wow-delay="0.25s">
                            Rainbow’s high techngy system with the help of nanleees reoving unseen dusot mites and bed bugs can cause
                            harmfully diseases because of dirters. This also includes changing home bes linens share providd reovinsg that
                            specialized deep unseen unseen dust echngy mites client. We hand-deliver peace of mind and a tidy space, as well
                            as the luxury of spare time to residents all across Chicago.
                        </p>
                    </div>
                    <div class="blog-links">
                        <div class="tagcloud2">
                            <span>Tags:</span>
                            <a href="#" class="tag-cloud-link">game,</a>
                            <a href="#" class="tag-cloud-link">everyone,</a>
                            <a href="#" class="tag-cloud-link">there</a>
                        </div>
                        <a href="#" class="link-btn">share<i class="fas fa-share-alt"></i></a>
                    </div>
                    <!-- Post Admin -->
                    <div class="post-admin wow animate__fadeInUp" data-wow-delay="0.25s">
                        <!-- Author Thumb -->
                        <div class="post-img">
                            <img src="{{ asset('/frontend/assets/img/blog/blog-post-admin-1.jpg') }}" alt="Post Blog Image Thumb">
                        </div>
                        <!-- End of Author Thumb -->
                        <div class="post-content">
                            <div class="post-header">
                                <h4 class="post-header__heading">
                                    <a href="#" class="text-inherit">alex aster</a>
                                    <span>founder & ceo</span>
                                </h4>
                            </div>
                            <p class="post-text">
                                Rainbow’s high techngy system with the help of nanleees reoving unseen dusot
                                mites and bed bugs can causeharmfully diseases because of dirters. This also includes changing home
                                bes linens.
                            </p>
                            <div class="post-admin__social">
                                <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Admin End -->
                    <!-- Post Pagination -->
                    <div class="post-pagination mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div class="row justify-content-between align-items-center gy-4">
                            <div class="col-6">
                                <!-- Nav Previous -->
                                <div class="post-pagi-box prev">
                                    <a class="post-pagi-control" href="#">
                                        <i class="far fa-arrow-left"></i>
                                        Previous Post
                                    </a>
                                </div>
                                <!-- End Nav Previous -->
                            </div>
                            <div class="col-6">
                                <!-- Nav Next -->
                                <div class="post-pagi-box next">
                                    <a class="post-pagi-control" href="#">
                                        Next Post
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End Nav Next -->
                            </div>
                        </div>
                    </div>
                    <!-- Post Pagination End -->
                    <!-- Post Comments -->
                    <div class="vs-comments-wrap wow animate__fadeInUp" data-wow-delay="0.25s">
                        <h2 class="blog-inner-title">3 Comments</h2>
                        <ul class="comment-list">
                            <li class="vs-comment-item">
                                <div class="vs-post-comment wow animate__fadeInUp" data-wow-delay="0.25s">
                                    <div class="vs-post-inner">
                                        <div class="comment-avater">
                                            <img src="{{ asset('/frontend/assets/img/blog/blog-post-user-2.jpg') }}" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">alex aster <span class="commented-on">April 27, 2024</span></h4>
                                            <p class="text">concept gaming tournament is essntially the same as any other sport everyone there is competing.</p>
                                        </div>
                                    </div>
                                    <a href="/blog_details" class="replay-btn">Replay<i class="fas fa-reply"></i></a>
                                </div>
                                <ul class="children">
                                    <li class="vs-comment-item">
                                        <div class="vs-post-comment wow animate__fadeInUp" data-wow-delay="0.25s">
                                            <div class="vs-post-inner">
                                                <div class="comment-avater">
                                                    <img src="{{ asset('/frontend/assets/img/blog/blog-post-user-3.jpg') }}" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <h4 class="name h4">emily blunt <span class="commented-on">April 27, 2024</span></h4>
                                                    <p class="text">concept gaming tournament is essntially the same as any other sport everyone there is competing.</p>
                                                </div>
                                            </div>
                                            <a href="/blog_details" class="replay-btn">Replay<i class="fas fa-reply"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="vs-comment-item">
                                <div class="vs-post-comment wow animate__fadeInUp" data-wow-delay="0.25s">
                                    <div class="vs-post-inner">
                                        <div class="comment-avater">
                                            <img src="{{ asset('/frontend/assets/img/blog/blog-post-user-1.jpg') }}" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">thomas shelby <span class="commented-on">April 27, 2024</span></h4>
                                            <p class="text">concept gaming tournament is essntially the same as any other sport everyone there is competing.</p>
                                        </div>
                                    </div>
                                    <a href="/blog_details" class="replay-btn">Replay<i class="fas fa-reply"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Post Comments End -->
                    <!-- Post Form -->
                    <div class="vs-comment-form mb-0 wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div id="respond" class="comment-respond">
                            <h2 class="blog-inner-title">Leave a Reply</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="form-inner">
                                <div class="row gx-20">
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="your comments *"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="your name *">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="your name *">
                                    </div>
                                    <div class="col-12">
                                        <div class="vs-custom-checkbox">
                                            <input id="vs-checkbox1" name="vs-checkbox1" type="checkbox" value="yes">
                                            <label for="vs-checkbox1">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">
                                            Post Comment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Form End -->
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
                                <img src="{{ asset('/frontend/') }}assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
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