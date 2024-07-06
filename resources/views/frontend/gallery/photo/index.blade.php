@extends('frontend.master')

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

@endsection

@section('content')
    <main id="main">
        <section id="nrbreadcrumbs" class="nrbreadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Photo Gallery</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5 mb-5">
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                    <div class="col-sm-3 mt-4">
                        <a href="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" data-lightbox="gallery">
                            <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" width="100%;" alt="Image 1">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection
