<header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center">


        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo me-auto me-lg-0">
            <img src="frontend/images/header-logo.png" alt="logo" class="img-fluid">
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li class="dropdown"><a href="#"><span>Organization</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('history') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('president-message') }}">President Message</a>
                        </li>
                         <li>
                            <a href="#">Executive Committee</a>
                        </li>
                    </ul>
                </li>



                <li class="dropdown"><a href="#"><span>Members</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('lifetime-member-list') }}">Life Time Member</a>
                        </li>
                        <li>
                            <a href="{{ route('associate-member-list') }}">Associate Member</a>
                        </li>
                        <li>
                            <a href="{{ route('general-member-list') }}">General Member</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('photos') }}">Photos</a>
                        </li>
                        <li>
                            <a href="{{ route('videos') }}">Videos</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('events') }}">News</a>
                </li>
                <li class="">
                    <a href="{{ route('events') }}">Notice</a>
                </li>
                <li class="">
                    <a href="{{ route('events') }}">Event</a>
                </li>
                <a href="{{ route('member-login') }}" class="">Sign In <i class="bi bi-box-arrow-in-right"></i></a>
                <a href="{{ route('member-register') }}" class="bg-warning" style="margin-left: 14px; font-weight:bold; padding-right:20px; border-radius:5px;">Registration <i class="bi bi-box-arrow-in-right"></i></a>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
