<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yalafa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('assets1/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

   @include('template_category.header')

     <div class="container">
       @yield('content')  
     </div>

   @include('template_category.footer')
