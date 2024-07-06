@extends('frontend.master')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <main id="main">
        <section id="nrbreadcrumbs" class="nrbreadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>News</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-8 entries">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="frontend/images/post-images/image-2023-01-07-63b9364a65df4.Events.jpg"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">
                                    The 20th Annual General Meeting of the Economics...
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="07-01-2023">07-01-2023</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>

                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->


                        <article class="entry">

                            <div class="entry-img">
                                <img src="frontend/images/post-images/image-2020-01-12-5e1ad20c2a48c.Email.jpg"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">
                                    Please Reset your Password to update your profile...
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="12-01-2020">12-01-2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                <h2>Kindly follow the instruction:</h2>
                                <p>1. Go to reset link
                                    <a href="http://du-aa.org/member/forget-password" target="_blank"> Reset Password </a>
                                </p>

                                <p>2. Check your email email in DU Acco...
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->


                        <article class="entry">

                            <div class="entry-img">
                                <img src="frontend/images/post-images/image-2023-01-07-63b9364a65df4.Events.jpg"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">
                                    50th Anniversary of Economics Department &amp; Accoun...
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="18-12-2023">18-12-2023</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                <p>50th Anniversary of Economics Department & Economics Alumni 25th Anniversary
                                    Celebration which will be held on Friday and Saturday, January 24 and 25, 2020</p>
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->




                        <div class="blog-pagination">
                            <ul class="justify-content-center">

                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">


                            <h3 class="sidebar-title">News & Events</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="frontend/images/post-images/image-2023-01-07-63b9364a65df4.Events.jpg"
                                        alt="">
                                    <h4>

                                        <a href="#">
                                            50th Anniversary of Economics Department &amp; Economics ALumn...</a>
                                    </h4>

                                    <time datetime="01-01-1970">01-01-1970</time>
                                </div>
                                <div class="post-item clearfix">
                                    <img src="frontend/images/post-images/image-2020-01-12-5e1ad20c2a48c.Email.jpg"
                                        alt="">
                                    <h4>

                                        <a href="#">
                                            Please Reset your Password to update your profile in DU Acco...</a>
                                    </h4>

                                    <time datetime="01-01-1970">01-01-1970</time>
                                </div>
                                <div class="post-item clearfix">
                                    <img src="frontend/images/post-images/image-2020-01-12-5e1ad20c2a48c.Email.jpg"
                                        alt="">
                                    <h4>

                                        <a href="#">
                                            The 20th Annual General Meeting of the Economics Alumni</a>
                                    </h4>

                                    <time datetime="01-01-1970">01-01-1970</time>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
