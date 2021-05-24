<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
  <meta name="author" content="Inovatik">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>@yield('title')</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="{{asset('style/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/fontawesome-all.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/swiper.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/magnific-popup.css')}}" rel="stylesheet">

  @yield('style_navbar')

  <!-- Favicon  -->
  <link rel="icon" href="{{asset('photos/LogoBiru-01.png')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Preloader -->
  <div class="spinner-wrapper">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  <!-- end of preloader -->


  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    {{-- <a class="navbar-brand logo-text page-scroll" href="index.html">Travel Skuy</a> --}}

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/"><img src="{{asset('photos/LogoBiru-01.png')}}" style="width:50px;"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto text-center">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#services">Services</a>
        </li>
    </div>

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
      <ul class="navbar-nav mr-auto text-center">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#team">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#contact">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/register" class="btn-solid-lg page-scroll btn-sm" role="button">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/login" class="btn btn-primary btn-sm" role="button">Login</a></li>
      </ul>
    </div>

  </nav> <!-- end of navbar -->
  <!-- end of navbar -->
  
  @yield('container')


  <!-- Scripts -->
  <script src="{{asset('style/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="{{asset('style/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="{{asset('style/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
  <script src="{{asset('style/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="{{asset('style/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
  <script src="{{asset('style/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
  <script src="{{asset('style/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
  <script src="{{asset('style/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
  <script src="{{asset('style/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
  <script src="{{asset('style/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>
