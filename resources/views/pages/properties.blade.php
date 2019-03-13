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
									<li><a href="{{ url('/') }}">Home</a></li>
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

	<!-- Properties -->

	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">25 Properties found</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row properties_row">
				
				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_1.jpg') }}" alt="">
							<div class="tag_featured property_tag"><a href="{{ url('/property') }}">Featured</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_2.jpg') }}" alt="">
							<div class="tag_offer property_tag"><a href="{{ url('/property') }}">Offer</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Los Angeles</div>
							<div class="property_title"><a href="{{ url('/property') }}">2 Floor Town House</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_3.jpg') }}" alt="">
							<div class="tag_featured property_tag"><a href="{{ url('/property') }}">Featured</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Florida</div>
							<div class="property_title"><a href="{{ url('/property') }}">Vacation Home</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_4.jpg') }}" alt="">
							<div class="tag_new property_tag"><a href="{{ url('/property') }}">New</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_5.jpg') }}" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">New York</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_6.jpg') }}" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_7.jpg') }}" alt="">
							<div class="tag_new property_tag"><a href="{{ url('/property') }}">New</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_8.jpg') }}" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">San Francisco</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('images/property_9.jpg') }}" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="{{ url('/property') }}">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('images/icon_1.png') }}" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_2.png') }}" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="{{ asset('images/icon_3.png') }}" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="pagination">
						<ul>
							<li class="active"><a href="{{ url('/property') }}">01.</a></li>
							<li><a href="{{ url('/property') }}">02.</a></li>
							<li><a href="{{ url('/property') }}">03.</a></li>
							<li><a href="{{ url('/property') }}">04.</a></li>
						</ul>
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

	<!-- Footer -->
@stop 

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/properties.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/properties_responsive.css') }}">
@endpush

@push('extra-js')
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{ asset('js/properties.js') }}"></script>
@endpush