<title>{{ $title }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bohol Real State">
<meta name="viewport" content="width=device-width, initial-scale=1">

@stack('metas')

<link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">

@stack('extra-css')
{{-- @if($site=='home')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
@elseif($site=='about')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">
@elseif($site=='properties')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/properties.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/properties_responsive.css') }}">
@elseif($site=='news')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/news_responsive.css') }}">
@elseif($site=='property')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property_responsive.css') }}">
@elseif($site=='contact')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css') }}">
@elseif($site=='elements')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/elements_responsive.css') }}">
@endif
     --}}
</head>