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
                <li>About</li>
              </ol>
            </div>

          </div>
        </section>

        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">



        <div class="row">
            <div class="col-lg-12">
                <div class="section_title_all text-center">
                    <h3 class="font-weight-bold">Welcome To <span class="text-custom">Lorem Ipsum</span></h3>
                    <p class="section_subtitle mx-auto text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br/>Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="">
                        <i class=""></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row vertical_content_manage mt-5">
            <div class="col-lg-6">
                <div class="about_header_main mt-3">
                    <div class="about_icon_box">
                        <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                    </div>
                    <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy text of the printing industry.</h4>
                    <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                    <p class="text-muted mt-3"> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img_about mt-3">
                    <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Loren Ipsum</h5>
                        <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Loren Ipsum</h5>
                        <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                        <div class="about_icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Loren Ipsum</h5>
                        <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</section>
@endsection
