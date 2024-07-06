@extends('frontend.master')

@section('style')
<style>
    .about_icon i {
        font-size: 22px;
        height: 65px;
        width: 65px;
        line-height: 65px;
        display: inline-block;
        background: #fff;
        border-radius: 35px;
        color: #00bd2a;
        box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
    }

    .about_header_main .about_heading {
        max-width: 450px;
        font-size: 24px;
    }

    .about_icon span {
        position: relative;
        top: -10px;
    }

    .about_content_box_all {
        padding: 28px;
    }

</style>
@endsection

@section('content')

<main id="main">

    <section id="nrbreadcrumbs" class="nrbreadcrumbs">
          <div class="container">

            <div class="d-flex justify-content-between align-items-center">

              <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
                <li>Event</li>
              </ol>
            </div>

          </div>
        </section>

        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
            <div class="row entries blog">
                <div class="col-md-4">
                    <article class="entry">

                        <div class="entry-img">
                            <img data-src="{{ asset('/') }}frontend/images/post-images/image-2023-12-18-65803a1a20914.DEPARTMENT-OF-ACCOUNTING.jpg"
                                style="height:300px;width:100%" alt="" class="lazyload img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">
                                Economics Department Alumni Association Reunion 2024
                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="">
                                    <b>Date : </b> <i class="bi bi-clock "></i>
                                    <span>
                                        2024-12-18 to 2024-01-10
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">

                            <div class="read-more">
                                <a href="#">Registration</a>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-md-4">
                    <article class="entry">

                        <div class="entry-img">
                            <img data-src="{{ asset('/') }}frontend/images/post-images/image-2023-01-07-63b935a455a18.Events.jpg"
                                style="height:300px;width:100%" alt="" class="lazyload img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">
                                Economics Department Alumni Association Annual Tour

                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="">
                                    <b>Date : </b> <i class="bi bi-clock "></i>
                                    <span>
                                        2023-03-03
                                        to 2023-03-03
                                    </span>
                                </li>
                                <li>
                                    <b>Venue : </b> <i class="bi bi-geo-alt"></i>
                                    <span>
                                        Cox's Bazar
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">

                            <div class="read-more">
                                <a href="#">Registration</a>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-md-4">
                    <article class="entry">

                        <div class="entry-img">
                            <img data-src="{{ asset('/') }}frontend/images/post-images/image-2023-01-07-63b935a455a18.Events.jpg"
                                style="height:300px;width:100%" alt="" class="lazyload img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">
                                Economics Department Alumni Association Board Metting

                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="">

                                    <b>Date : </b> <i class="bi bi-clock "></i>
                                    <span>
                                        2021-08-31


                                    </span>
                                </li>





                            </ul>
                        </div>

                        <div class="entry-content">

                            <div class="read-more">
                                <a href="#">Registration</a>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
          </div>
        </section>
</main>
</section>
@endsection
