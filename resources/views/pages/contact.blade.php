@extends('layouts.default')
@section('content')   
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/contact.jpg') }}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="{{ url('/') }}">Home</a></li>
									<li>Contact</li>
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

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Get in touch with us</div>
                        <div class="section_subtitle">Say hello</div>
                        <div class="fb-like fb-recommend" 
                            data-href="https://www.facebook.com/Bohol-Real-Estate-361621404404257/" 
                            data-layout="button" data-action="recommend" 
                            data-size="large" 
                            data-show-faces="true" 
                            data-share="true">
                        </div>
						<div class="contact_info_text"><p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget.</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
								<li>
									<div>Address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 93424</div>
								</li>
								<li>
									<div>Phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>Email:</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
                        <form class="contact_form" method="POST" id="contact_form" action="{{ route('contact') }}">
                            @csrf
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<input type="text" class="contact_input" placeholder="Name" required="required">
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input type="email" class="contact_input" placeholder="E-mail" required="required">
								</div>
							</div>
							<div><input type="text" class="contact_input" placeholder="Subject"></div>
                            <div><textarea class="contact_textarea contact_input" placeholder="Message" required="required"></textarea></div>
                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif
							<button class="contact_button button">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="dvMap" style="width: 100%; height: 745px; margin: 20px 0px; position: relative; overflow: hidden;"></div>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css') }}">
@endpush

@push('extra-js')
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQuDQmtiHkS7CcriyEiYXWja3ODrG4vFI&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script>
        $('document').ready(function(){
            
        });
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('dvMap'), {
                center: {lat: 9.74230902220424, lng: 123.84400606155396 },
                zoom: 20,
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