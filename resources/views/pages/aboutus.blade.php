@extends('layouts.default')
@section('content')   
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">About</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="{{ url('/') }}">Home</a></li>
									<li>About us</li>
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

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">
                            A few words about us 
                            <div class="fb-share-button" 
                                data-href="{{ url()->current() }}" 
                                data-layout="button_count">
                            </div>
                        </div>
						<div class="section_subtitle">Search your dream home</div>
						<div class="about_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curabitur ornare nisl at sagittis cursus. Sed mattis, eros non vulputate luctus, erat dui dapibus augue, eu fringilla tortor ante id mi. Sed a enim libero. Vestibulum pharetra aliquam convallis. </p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="{{ asset('images/about_image.jpg') }}" alt=""></div>
				</div>
			</div>
			<div class="row milestones_row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('images/milestones_1.png') }}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="651">0</div>
							<div class="milestone_text">Properties Sold</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('images/milestones_2.png') }}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="1256">0</div>
							<div class="milestone_text">Happy Clients</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('images/milestones_3.png') }}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="124">0</div>
							<div class="milestone_text">Buildings Sold</div>
						</div>
						
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('images/milestones_4.png') }}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="25">0</div>
							<div class="milestone_text">Awards Won</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Realtors -->

	<div class="realtors">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">The Realtors</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row realtors_row">
				
				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="{{ asset('images/realtor_1.jpg') }}" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Maria Williams</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="{{ asset('images/realtor_2.jpg') }}" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Christian Smith</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="{{ asset('images/realtor_3.jpg') }}" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Steve G. Brown</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="{{ asset('images/realtor_4.jpg') }}" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Jessica Walsh</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
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
    <meta property="og:url"           content="{{ url()->current() }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Search your dream home" />
    <meta property="og:description"   content="Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River." />
    <meta property="og:image"         content="{{ asset('images/about_image.jpg') }}" />
@endpush


@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">
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
    <script src="{{ asset('js/about.js') }}"></script>
@endpush