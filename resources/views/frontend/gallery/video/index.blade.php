@extends('frontend.master')

@section('style')


@endsection

@section('content')
    <main id="main">
        <section id="nrbreadcrumbs" class="nrbreadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Video Gallery</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <!-- /section title -->
                    <!-- single blog post -->
                    @foreach($videoList->items as $item)
                        <div class="col-md-4 col-sm-6 col-xs-12 clearfix mb-3">
                            <div class="post-item">
                                <div class="media-wrapper">
                                    <iframe src="https://www.youtube.com/embed/{{ $item->id->videoId??'' }}?modestbranding=1&playsinline=1&rel=0" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    <h6 class="text-center">{{ $item->snippet->title??'' }}</h6>
                                </div>
                            </div>
                        </div>
                        <!-- /single blog post -->
                    @endforeach
                </div>
            </div>
        </section>
    </main>




@endsection
@section('script')


@endsection
