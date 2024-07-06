@extends('frontend.master')

@section('content')
    <section id="hero">
      
        <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <img src="{{asset('frontend/images/slider-images/slider-1.jpg')}}" class="d-block w-100"
                        alt="Sunset Over the City" />
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2 class="text-center">Economics Alumni AHC</h2>
                                <!-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
                            </div>
                        </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="{{asset('frontend/images/slider-images/slider-2.jpg')}}" class="d-block w-100">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="text-center">Economics Alumni AHC</h2>
                            <!-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                  <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="{{asset('frontend/images/slider-images/slider-3.jpg')}}" class="d-block w-100"
                        alt="Cliff Above a Stormy Sea" />
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2 class="text-center">Economics Alumni AHC</h2>
                                <!-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
                            </div>
                        </div>
                </div>
   <!-- Single item -->
   <div class="carousel-item">
    <img src="{{asset('frontend/images/slider-images/slider-4.jpg')}}" class="d-block w-100"
        alt="Cliff Above a Stormy Sea" />
        <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
                <h2 class="text-center">Economics Alumni AHC</h2>
                <!-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
        </div>
</div>


            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next"
            type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden" >Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </section>






    <main id="main">
        <section class="about container-fluid wow zoomIn"  data-aos="zoom-in" data-aos-delay="100" >
            <div class="row">
             <div class="col-md-3"></div>
              <div class="col-md-8">
                <div class="about_main" style="margin-top:20vh">
                    <div class="row">
                        <div class="col-md-4">
                             <div class="about_img col-md-6">
                            <img src="{{asset('frontend/images/post-images/GLOBAL-TEA-DIGEST-02.jpg')}}" alt="" height="100%" width="100%">
                          </div>
                    </div>
                        <div class="col-md-8 about_content">
                            <div class="section-title text-center text-lg-left" style="margin-top: 10vh">
                                <h2>About BAAS</h2>
                            </div>

                      <p style="text-align:justify;font-size:20px;color:black;margin-right:2%">Bangladesh AOTS Alumni Society (BAAS) has led a silent revolution in the arena of Quality Management and
                            Human Resources Development in Bangladesh. BAAS has travelled a long way in converting its aspirations into
                            actions. The journey has started from Japan, the land of the rising sun where modern concept of quality was born
                            after The World War-II. It is the story of enrichment that has taken place following Deming, Juran, Ishikawa and
                            many more. </p>
                           <div style="margin-top: 5vh">
                            <button class="btn btn-info btn-lg button1">KNOW MORE</button>
                           </div>
                        </div>


                    </div>

                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
        </section>

        <section class="chairman_msg container-fluid"data-aos="zoom-out" data-aos-delay="100" >
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 10vh ;margin-top:10vh">
                    <h1 class="text-center">PRESIDENT MESSAGE</h1>
                </div>
             <div class="col-md-1" data-aos="zoom-in"></div>
                <div class="col-md-5 chairman_img">
                    <img src="{{asset('frontend/images/post-images/president.png')}}" alt="" height="100%" width="90%">
                </div>
                <div class="col-md-4 chairman_content">
                    <div class="heading">
                        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Welcome to BCCI</h1>
                    </div>
                    <div class="content">
                        <p style="">On behalf of the board of directors, staff and myself, welcome to the Bogra Chamber of Commerce & Industry (BCCI). The mission of the Chamber is to facilitate and foster trade, investment and opportunities among the member companies and to encourage business ventures and the exchange of knowledge by
                             acting as a catalyst for the commercial energies of among companies.</p>
                    </div>
                    <a href="" class="btn btn-info btn-grad btn-lg button">ABOUT BCCI</a>
                </div>
                <div class="col-md-2"></div>
            </div>

        </section>


        <section id="" class="faq section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title"style="margin-top:20vh">
                    <h2>Our Events</h2>
                </div>

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
                                    <a href="#">Read More</a>
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
                                    <a href="#">Read More</a>
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
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>

            </div>
        </section>



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
                        <div class="nricon-box nriconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bi bi-person-bounding-box"></i>
                            </div>
                            <h4><a href="#">27</a></h4>
                            <p>Committee Member's</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="nricon-box nriconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bi bi-person-vcard"></i>
                            </div>
                            <h4><a href="#">2732</a></h4>
                            <p>Life Member's</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="nricon-box nriconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-person-hearts"></i>
                            </div>
                            <h4><a href="#">2</a></h4>
                            <p>Assosiate Member's</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="nricon-box nriconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 20 500 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h4><a href="#">1</a></h4>
                            <p>General Member's</p>
                        </div>
                    </div>





                </div>

            </div>
        </section><!-- End Services Section -->



        <section id="faq" class="faq section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our News</h2>
                </div>

                <div class="row entries blog">
                    <div class="col-md-4">
                        <article class="entry">

                            <div class="entry-img">
                                <img data-src="{{ asset('/') }}frontend/images/post-images/image-2023-01-07-63b935a455a18.Events.jpg"
                                    style="height:300px;width:100%" alt="" class="lazyload img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">
                                    The 20th Annual General Meeting of the Economics Alumni

                                </a>
                            </h2>



                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="#">Read More</a>
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
                                    Please Reset your Password to update your profile in AHC Economics Alumni Website

                                </a>
                            </h2>



                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="#">Read More</a>
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
                                    1th Reunion of Economics Department

                                </a>
                            </h2>
                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

<script>
    // Initialization for ES Users
    import {
        Carousel,
        initMDB
    } from "mdb-ui-kit";

    initMDB({
        Carousel
    });
</script>
