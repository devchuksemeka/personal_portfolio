<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{asset('assets')}}/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
            name="description"
            content="Web site created using create-react-app"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="logo192.png" />
    <link rel="manifest" href="{{asset('assets')}}/manifest.json" />

    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/normalize.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/transition-animations.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main-red.css" rel="stylesheet">
    <link href="{{asset('assets')}}/preview/lmpixels-demo-panel.css" rel="stylesheet">
    <title>DevChuksEmeka: Full Stack Software Developer</title>
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div class="preloader">
    <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
@yield('content')
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/modernizr.custom.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/pages-switcher.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/validator.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.shuffle.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/tilt.jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/preview/lmpixels-demo-panel.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
@yield('requiredJs')
</body>
</html>

