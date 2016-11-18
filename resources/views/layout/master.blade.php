<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>CozyWork | หาฟรีแลนซ์ฝีมือดีได้ที่นี่</title>

  @include('layout.partials.header')

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">   

      @include('layout.partials.top')

      @include('layout.partials.nav')

    </header>
    <!-- End Header Section -->

    @yield('content')

    @include('layout.partials.footer') 

  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <!--@include('layout.partials.styleswitcher') -->


</body>

</html>