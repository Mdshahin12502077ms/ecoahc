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
                        <li>President Message</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>President Message</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-2">
                        <img src="https://mitpark.com.bd/assets/components/team-memeber/Masudur%20rahman%20masum.jpg"
                            style="width: 100%; border-radius: 50%;" alt="">
                    </div>
                    <div class="col-lg-10">
                        <div class="section_title_all mt-5">
                            <h3 class="font-weight-bold">Mahmudur Rahman Masum</h3>
                            <p class="section_subtitle mx-auto m-0 p-0">President</p>
                            <p class="section_subtitle mx-auto text-muted m-0 p-0">Economics Alumni Association, Govt. Azizul Haque College </p>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-12">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <br>
                        <br>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-12" style="text-align: right;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Ryan-Signature.png/640px-Ryan-Signature.png" style="width: 100px;" alt="">
                        <p class="section_subtitle mx-auto m-0 p-0">President</p>
                        <p class="section_subtitle mx-auto text-muted m-0 p-0">Economics Alumni Association, Govt. Azizul Haque College </p>
                    </div>
                </div>
            </div>
    </main>
    </section>
@endsection
