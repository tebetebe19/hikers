<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$320 / Rp 4.500.000</title>
    <meta name="description" content="">
    <script src="{{asset('assets/themekit/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets/themekit/scripts/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/themekit/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/skin.css')}}">
    <link rel="icon" href="{{asset('assets/media/favicon.png')}}">
</head>
<body class="page-main">
    <div id="preloader"></div>
    
    @include('visitor-layout.navbar')

    @yield('content')

    @include('visitor-layout.footer')
</body>
</html>