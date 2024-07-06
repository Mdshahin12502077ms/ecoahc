<!DOCTYPE html>


<html lang="en">

<!-- Mirrored from www.du-aa.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 16:01:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>AHC Economics Alumni Association | Home </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="X7nJ2lOWmdyoZ1sCdawnwdcW4xynj9cB82xWr2OF">


    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{asset('/') }}frontend/images/favicon.png" rel="icon">
    <link href="{{asset('/') }}frontend/images/favicon.png" rel="apple-touch-icon">


    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{asset('/') }}frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('/') }}frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('/') }}frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/') }}frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="{{asset('/') }}frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="{{asset('/') }}frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
rel="stylesheet"
/>

    <link href="{{asset('/') }}frontend/css/style.css" rel="stylesheet">


    <style>
        .breaking-news {
            /* position: relative; */
            padding: 10px 0px;
            margin: 0 10px;
            overflow: hidden;
        }

        .breaking-news__text {
            /* border: 2px solid #0A2A62 !important; */
            /* padding: 10px; */
            height: 50px;
            line-height: 50px;
            padding-left: 25px !important;
            margin-left: -5px;
            width: calc(100% - 300px);
        }



        .breaking-news__title {
            height: 40px;

            width: 100px;
            border-left: 2px solid #0A2A62 !important;
            position: relative;
            padding: 10px;
            text-transform: uppercase !important;
            font-weight: 600;
            background-color: #0A2A62;
            -webkit-animation-name: blinker;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-duration: 2s;
            z-index: 1;

        }

        .breaking-news__title span {
            padding: 10px;
            background-color: #0A2A62;

            width: 20px;
            height: 20px;
            position: absolute;
            right: -10px;
            transform: rotate(45deg);
            z-index: -1;
        }

        @-webkit-keyframes blinker {
            0% {
                color: white;
                text-shadow: #D2AD6F 0px 0px 8px;
                font-size: 120%
            }

            50% {
                color: white;
                text-shadow: white 0px 0px 8px;
                font-size: 120%;
            }

            100% {
                color: #D2AD6F;
                text-shadow: #D2AD6F 0px 0px 8px;
                font-size: 120%;
            }
        }


        @-webkit-keyframes ticker {
            0% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                visibility: visible;
            }

            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes ticker {
            0% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                visibility: visible;
            }

            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        .ticker-wrap {
            /* position: fixed;
  bottom: 0; */
            width: 100%;
            /* padding-right: 10px; */
            overflow: hidden;
            height: 40px;
            /* background-color: rgba(0, 0, 0, 0.9); */
            padding-left: 100%;
            box-sizing: content-box;
        }

        .ticker-wrap .ticker {
            display: inline-block;
            height: 40px;
            line-height: 40px;
            white-space: nowrap;
            padding-right: 100%;
            box-sizing: content-box;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-name: ticker;
            animation-name: ticker;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
        }

        .ticker-wrap .ticker__item {
            display: inline-block;
            /* padding: 0 2rem; */
            font-size: 19px;
            color: black;
            /* margin-right: 20px; */
        }
    </style>



    <style>
        .text-white {
            color: white;
        }
    </style>

    @yield('style')

</head>

<body>


    @include('frontend.inc.nav')

    @yield('content')

    @include('frontend.inc.footer')

    <div class="col-sm-12 col-md-6" style="position:fixed;bottom:2%">
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="{{asset('/') }}frontend/js/jquery.min.js"></script>

    <script src="{{asset('/') }}frontend/vendor/aos/aos.js"></script>
    <script src="{{asset('/') }}frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/') }}frontend/vendor/glightbox/js/glightbox.min.js"></script>

    <script src="{{asset('/') }}frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('/') }}frontend/vendor/waypoints/noframework.waypoints.js"></script>


    <script src="{{asset('/') }}frontend/js/main.js"></script>

    <script src="{{asset('/') }}frontend/js/lazyload.min.js"></script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script>

    <script async defer crossorigin="anonymous" src="../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>

    @yield('script')

    <script>
        // 	var $ticker = $('[data-ticker="list"]'),
        //     tickerItem = '[data-ticker="item"]'
        //     itemCount = $(tickerItem).length,
        //     viewportWidth = 0;

        // function setupViewport(){
        //     $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');

        //     for (i = 0; i < itemCount; i ++){
        //         var itemWidth = $(tickerItem).eq(i).outerWidth();
        //         viewportWidth = viewportWidth + itemWidth;
        //     }

        //     $ticker.css('width', viewportWidth);
        // }

        // function animateTicker(){
        //     $ticker.animate({
        //         marginLeft: -viewportWidth
        //       }, 30000, "linear", function() {
        //         $ticker.css('margin-left', '0');
        //         animateTicker();
        //       });
        // }

        // function initializeTicker(){
        //     setupViewport();
        //     animateTicker();

        //     $ticker.on('mouseenter', function(){
        //         $(this).stop(true);
        //     }).on('mouseout', function(){
        //         animateTicker();
        //     });
        // }

        // initializeTicker();
    </script>



    <script>
        lazyload();
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".memberLoginForm").on("submit", function(e) {
                e.preventDefault();

                let frmData = $(this).serialize();

                $.ajax({
                        type: "POST",
                        url: "https://www.du-aa.org/login",
                        data: frmData,

                    })
                    .done(function(res) {
                        window.location.href = "index.html";
                    })
                    .fail(function(err) {
                        //   console.log(err.response);
                        $(".loginError").css("display", "inline");
                        setTimeout(function() {
                            $(".loginError").css("display", "none");
                        }, 4000)
                    });
            })
        });
    </script>

</body>


<!-- Mirrored from www.du-aa.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 16:02:04 GMT -->

</html>
