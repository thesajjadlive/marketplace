<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="application-name" content="">
<meta name="description" content="">
<title>{{ isset($title)?$title:config('app.name') }}</title>
<link rel="icon" href="{{ asset('frontend/img/Thumbnail.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vendor/bootstrap.min.css') }}">

<!-- Normalize -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vendor/normalize.css') }}">

<!-- Font Awesome -->
<script src="{{ asset('frontend/js/vendor/font-awesome.js') }}"></script>

<!-- Ico Font -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vendor/icofont/css/icofont.css') }}">

@stack('library-css')
@stack('custom-css')

<!-- Style Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}">

<!-- Responsive Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/responsive.css') }}">