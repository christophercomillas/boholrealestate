
@extends('layouts.default')
@section('content')   
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/properties.jpg') }}" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="home_title">Search results</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="index.htmo">Home</a></li>
                                    <li>Search Results</li>
                                </ul>
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

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="intro_title_container">
                            <div class="intro_title">Town house with sea view   
                                <div class="fb-share-button" 
                                    data-href="{{ url()->current() }}" 
                                    data-layout="button_count">
                                </div>
                            </div>
                            <div class="intro_tags">
                                <ul>
                                    <li><a href="#">Hottub</a></li>
                                    <li><a href="#">Swimming Pool</a></li>
                                    <li><a href="#">Garden</a></li>
                                    <li><a href="#">Patio</a></li>
                                    <li><a href="#">Hard Wood Floor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
                            <div>For Sale</div>
                            <div class="intro_price">$980,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_slider_container">

            <!-- Intro Slider -->
            <div class="owl-carousel owl-theme intro_slider">
                <!-- Slide -->
                <div class="owl-item"><img src="{{ asset('images/intro_1.jpg') }}" alt=""></div>
                <!-- Slide -->
                <div class="owl-item"><img src="{{ asset('images/intro_1.jpg') }}" alt=""></div>
                <!-- Slide -->
                <div class="owl-item"><img src="{{ asset('images/intro_1.jpg') }}" alt=""></div>
            </div>

            <!-- Intro Slider Nav -->
            <div class="intro_slider_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
                                <div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Property -->

    <div class="property">
        <div class="container">
            <div class="row">
                
                <!-- Sidebar -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar_search">
                            <div class="sidebar_search_title">Search your home</div>
                            <div class="sidebar_search_form_container">
                                <form action="#" class="sidebar_search_form" id="sidebar_search_form">
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Keywords</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property ID</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property Status</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>City</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property Type</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <div class="row sidebar_search_row">
                                        <div class="col-lg-6">
                                            <input type="text" class="sidebar_search_input" placeholder="Bedrooms No">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="sidebar_search_input" placeholder="Bathrooms No">
                                        </div>
                                    </div>

                                    <!-- Filter Price -->
                                    <div class="price_filter">
                                        <div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
                                            <div>Min Price</div>
                                            <div class="ml-auto">Max Price</div>
                                        </div>
                                        <input type="range" min="0" max="1000" step="10" value="250" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                    </div>

                                    <!-- Filter Area -->
                                    <div class="area_filter">
                                        <div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
                                            <div>Min Price</div>
                                            <div class="ml-auto">Max Price</div>
                                        </div>
                                        <input type="range" min="0" max="1000" step="10" value="300" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                    </div>
                                    <button class="sidebar_search_button search_form_button">search</button>
                                </form>
                            </div>
                        </div>
                        <h5 class="fb-comments-header">Leave Comments</h5>
                        <div class="fb-comments" 
                            data-href="{{ url()->current() }}" 
                            data-width="100%" 
                            data-numposts="5" 
                            data-colorscheme="light">
                        </div>
                        <!-- Realtor -->
                        <div class="sidebar_realtor">
                            <div class="sidebar_realtor_image"><img src="{{ asset('images/sidebar_realtor.jpg') }}" alt=""></div>
                            <div class="sidebar_realtor_body text-center">
                                <div class="sidebar_realtor_title"><a href="#">Maria Williams</a></div>
                                <div class="sidebar_realtor_subtitle">Senior Realtor</div>
                                <div class="sidebar_realtor_phone"><span>call us: </span>652 345 3222 11</div>
                                <div class="realtor_link"><a href="#">+</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Property Content -->
                <div class="col-lg-7 offset-lg-1">
                    <div class="property_content">
                        <div class="property_icons">
                            <div class="property_title">Extra Facilities</div>
                            <div class="property_text property_text_1">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
                            </div>
                            <div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Bedrooms</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="{{ asset('images/room_1.png') }}" alt=""></div>
                                        <div class="room_num">4</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Bathrooms</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="{{ asset('images/room_2.png') }}" alt=""></div>
                                        <div class="room_num">3</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Area</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="{{ asset('images/room_3.png') }}" alt=""></div>
                                        <div class="room_num">7100 Sq Ft</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Patio</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="{{ asset('images/room_4.png') }}" alt=""></div>
                                        <div class="room_num">1</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Garage</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="{{ asset('images/room_5.png') }}" alt=""></div>
                                        <div class="room_num">2</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Description -->

                        <div class="property_description">
                            <div class="property_title">Description</div>
                            <div class="property_text property_text_2">
                                <p>Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.</p>
                            </div>
                        </div>

                        <!-- Additional Details -->

                        <div class="additional_details">
                            <div class="property_title">Additional Details</div>
                            <div class="details_container">
                                <ul>
                                    <li><span>bedroom features: </span>Main Floor Master Bedroom, Walk-In Closet</li>
                                    <li><span>dining area: </span>Breakfast Counter/Bar, Living/Dining Combo</li>
                                    <li><span>doors & windows: </span>Bay Window</li>
                                    <li><span>entry location: </span>Mid Level</li>
                                    <li><span>floors: </span>Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Property On Map -->

                        <div class="property_map">
                            <div class="property_title">Property on map</div>
                            <div class="property_map_container">

                                <!-- Google Map -->
                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                <div id="dvMap" style="width: 100%; height: 400px; margin: 20px 0px; position: relative; overflow: hidden;"></div>
                            </div>
                        </div>
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

@push('metas')
    <meta property="fb:app_id"        content="276143793038841" />
    <meta property="og:url"           content="{{ url('/property') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Town house with sea view" />
    <meta property="og:description"   content="Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River." />
    <meta property="og:image"         content="{{ asset('images/intro_1.jpg') }}" />
    <meta property="og:image"         content="{{ asset('images/property_1.jpg') }}" />
@endpush


@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property_responsive.css') }}">
@endpush

@push('extra-js')
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQuDQmtiHkS7CcriyEiYXWja3ODrG4vFI&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="{{ asset('js/property.js') }}"></script>

    <script>
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('dvMap'), {
                center: {lat: 9.74230902220424, lng: 123.84400606155396 },
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            //Click event for getting lat lng
            google.maps.event.addListener(map, 'click', function (e) {
                $('input#latitude').val(e.latLng.lat());
                $('input#longitude').val(e.latLng.lng());
            });

            var markers = [];
            // [START region_getplaces]
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
            // [END region_getplaces]
        }
    </script>

@endpush