@extends('layouts.default')
@section('content')   
    <div class="home">

        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('images/home_slider_1.jpg') }})"></div>
                    <div class="slide_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slide_content">
                                        <div class="home_subtitle">super offer</div>
                                        <div class="home_title">Villa with sea view</div>
                                        <div class="home_details">
                                            <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_1.png') }}" alt=""></div>
                                                    <span> 650 Ftsq</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_2.png') }}" alt=""></div>
                                                    <span> 3 Bedrooms</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_3.png') }}" alt=""></div>
                                                    <span> 2 Bathrooms</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="home_price">$ 1. 245 999</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('images/home_slider_1.jpg') }})"></div>
                    <div class="slide_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slide_content">
                                        <div class="home_subtitle">super offer</div>
                                        <div class="home_title">Villa with sea view</div>
                                        <div class="home_details">
                                            <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_1.png') }}" alt=""></div>
                                                    <span> 650 Ftsq</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_2.png') }}" alt=""></div>
                                                    <span> 3 Bedrooms</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_3.png') }}" alt=""></div>
                                                    <span> 2 Bathrooms</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="home_price">$ 1. 245 999</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('images/home_slider_1.jpg') }})"></div>
                    <div class="slide_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slide_content">
                                        <div class="home_subtitle">super offer</div>
                                        <div class="home_title">Villa with sea view</div>
                                        <div class="home_details">
                                            <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_1.png') }}" alt=""></div>
                                                    <span> 650 Ftsq</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_2.png') }}" alt=""></div>
                                                    <span> 3 Bedrooms</span>
                                                </li>
                                                <li>
                                                    <div class="home_details_image"><img src="{{ asset('images/icon_3.png') }}" alt=""></div>
                                                    <span> 2 Bathrooms</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="home_price">$ 1. 245 999</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Home Search -->
    <div class="home_search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_content">
                            <form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
                                <div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
                                    <div>
                                        <select class="search_form_select">
                                            <option disabled selected>For rent</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select class="search_form_select">
                                            <option disabled selected>All types</option>
                                            <option>Type 1</option>
                                            <option>Type 2</option>
                                            <option>Type 3</option>
                                            <option>Type 4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select class="search_form_select">
                                            <option disabled selected>City</option>
                                            <option>New York</option>
                                            <option>Paris</option>
                                            <option>Amsterdam</option>
                                            <option>Rome</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select class="search_form_select">
                                            <option disabled selected>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select class="search_form_select">
                                            <option disabled selected>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="search_form_button ml-auto">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent -->

    <div class="recent">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">Recent Properties</div>
                    <div class="section_subtitle">Search your dream home</div>
                </div>
            </div>
            <div class="row recent_row">
                <div class="col">
                    <div class="recent_slider_container">
                        <div class="owl-carousel owl-theme recent_slider">
                            
                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="recent_item">
                                    <div class="recent_item_inner">
                                        <div class="recent_item_image">
                                            <img src="{{ asset('images/property_1.jpg') }}" alt="">
                                            <div class="tag_featured property_tag"><a href="{{ url('/property') }}">Featured</a></div>
                                        </div>
                                        <div class="recent_item_body text-center">
                                            <div class="recent_item_location">Miami</div>
                                            <div class="recent_item_title"><a href="{{ url('/property') }}">Sea view property</a></div>
                                            <div class="recent_item_price">$ 1. 234 981</div>
                                        </div>
                                        <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="recent_item">
                                    <div class="recent_item_inner">
                                        <div class="recent_item_image">
                                            <img src="{{ asset('images/property_2.jpg') }}" alt="">
                                            <div class="tag_offer property_tag"><a href="{{ url('/property') }}">Offer</a></div>
                                        </div>
                                        <div class="recent_item_body text-center">
                                            <div class="recent_item_location">Los Angeles</div>
                                            <div class="recent_item_title"><a href="{{ url('/property') }}">2 Floor Town House</a></div>
                                            <div class="recent_item_price">$ 1. 234 981</div>
                                        </div>
                                        <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="recent_item">
                                    <div class="recent_item_inner">
                                        <div class="recent_item_image">
                                            <img src="{{ asset('images/property_3.jpg') }}" alt="">
                                            <div class="tag_featured property_tag"><a href="{{ url('/property') }}">Featured</a></div>
                                        </div>
                                        <div class="recent_item_body text-center">
                                            <div class="recent_item_location">Florida</div>
                                            <div class="recent_item_title"><a href="{{ url('/property') }}">Vacation Home</a></div>
                                            <div class="recent_item_price">$ 1. 234 981</div>
                                        </div>
                                        <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
                                            <div><div class="recent_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
                            <div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            <div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="button recent_button"><a href="{{ url('/property') }}">see more</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cities -->

    <div class="cities">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">Find properties in these cities</div>
                    <div class="section_subtitle">Search your dream home</div>
                </div>
            </div>
        </div>
        
        <div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_1.jpg') }}" alt="https://unsplash.com/@dnevozhai">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_2.jpg') }}" alt="https://unsplash.com/@lachlanjdempsey">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_3.jpg') }}" alt="https://unsplash.com/@hellolightbulb">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_4.jpg') }}" alt="https://unsplash.com/@justinbissonbeck">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_5.jpg') }}" alt="https://unsplash.com/@claudiotrigueros">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_6.jpg') }}" alt="https://unsplash.com/@andersjilden">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_7.jpg') }}" alt="https://unsplash.com/@sawyerbengtson">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>

            <!-- City -->
            <div class="city">
                <img src="{{ asset('images/city_8.jpg') }}" alt="https://unsplash.com/@mathewwaters">
                <div class="city_overlay">
                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                        <div class="city_title">Ibiza Town</div>
                        <div class="city_subtitle">Rentals from $450/month</div>
                    </a>	
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">What our clients say</div>
                    <div class="section_subtitle">Search your dream home</div>
                </div>
            </div>
            <div class="row testimonials_row">
                
                <!-- Testimonial Item -->
                <div class="col-lg-4 testimonial_col">
                    <div class="testimonial">
                        <div class="testimonial_title">Amazing home for me</div>
                        <div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
                        <div class="testimonial_author_image"><img src="{{ asset('images/testimonial_3.jpg') }}" alt=""></div>
                        <div class="testimonial_author"><a href="{{ url('/property') }}">Cyril Andrew Paredes</a><span>, Client</span></div>
                        <div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <div class="col-lg-4 testimonial_col">
                    <div class="testimonial">
                        <div class="testimonial_title">Friendly Realtors</div>
                        <div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
                        <div class="testimonial_author_image"><img src="{{ asset('images/testimonial_2.jpg') }}" alt=""></div>
                        <div class="testimonial_author"><a href="{{ url('/property') }}">Christopher Comillas</a><span>, Client</span></div>
                        <div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <div class="col-lg-4 testimonial_col">
                    <div class="testimonial">
                        <div class="fb-page"            data-href="https://www.facebook.com/Bohol-Real-Estate-361621404404257/" data-tabs="timeline,events,messages" 
                        data-small-header="false" 
                        data-adapt-container-width="true" 
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Bohol-Real-Estate-361621404404257/"  class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bohol-Real-Estate-361621404404257/">Facebook</a>
                        </blockquote></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/newsletter.jpg') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">Are you buying or selling?</div>
                            <div class="newsletter_subtitle">Search your dream home</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="Your e-mail address" required="required">
                                <button class="newsletter_button">subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop 

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
@endpush

@push('extra-js')
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush