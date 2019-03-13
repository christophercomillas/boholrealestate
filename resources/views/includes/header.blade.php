<div class="container">
    <div class="row">
        <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                <div class="logo">
                    <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
                <nav class="main_nav">
                    <ul>
                        <li class="{{ $title == 'Bohol Real Estate - Home' ? "active" : "" }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ $title == 'Bohol Real Estate - About Us' ? "active" : "" }}"><a href="{{ url('/aboutus') }}">About us</a></li>
                        <li class="{{ $title == 'Bohol Real Estate - Properties' ? "active" : "" }}"><a href="{{ url('/properties') }}">Properties</a></li>
                        <li class="{{ $title == 'Bohol Real Estate - News' ? "active" : "" }}"><a href="{{ url('/news') }}">News</a></li>
                        <li class="{{ $title == 'Bohol Real Estate - Contact' ? "active" : "" }}"><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-media-header-container">
                    <ul>
                        <li><a href="https://www.facebook.com/Bohol-Real-Estate-361621404404257/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" title="Like us on Facebook"></i></a></li>                                                
                        <li><a href="https://www.instagram.com/boholrealestaterealtor/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" title="Follow us on Instagram"></i></a></li>
                    </ul>
                </div>
                <div class="phone_num ml-auto">
                    <div class="phone_num_inner">
                        <img src="{{ asset('images/phone.png') }}" alt=""><span> 411-3544</span>                                
                    </div>
                    
                </div>
                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container"><div class="menu_close"></div></div>
        <div class="logo menu_logo">
            <a href="#">
                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                    <div class="logo_image"><div><img src="{{ asset('images/logo.png') }}" alt=""></div></div>
                </div>
            </a>
        </div>
        <ul>
            <li class="menu_item"><a href="index.html">Home</a></li>
            <li class="menu_item"><a href="about.html">About us</a></li>
            <li class="menu_item"><a href="#">Speakers</a></li>
            <li class="menu_item"><a href="#">Tickets</a></li>
            <li class="menu_item"><a href="news.html">News</a></li>
            <li class="menu_item"><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
</div>