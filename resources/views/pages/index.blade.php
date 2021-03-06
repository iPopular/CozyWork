@extends('layout.master')


@section('content')
  <!-- Start Home Page Slider -->
  <section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
      </ol>
      <!--/ Indicators end-->

      <!-- Carousel inner -->
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="{{ URL::asset('images/slider/bg1.jpg')}}" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated2">
                            <span>ยินดีต้อนรับเข้าสู่ <strong>CozyWork</strong></span>
                            </h2>
              <h3 class="animated3">
                              <span>เว็บไซต์หางานที่มีมากกว่างาน</span>
                            </h3>
              <p class="animated4"><a href="/signup" class="slider btn btn-system btn-large">สมัครสมาชิก</a>
              </p>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="{{ URL::asset('images/slider/bg2.jpg')}}" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated4">
                              <span>ทำงานกับ <strong>CozyWork</strong> ไม่มีวันเบื่อ</span>
                          </h2>
              <h3 class="animated5">
                            <span>เพราะคุณสามารถเลือกได้ด้วยตนเอง!</span>
                          </h3>
              <p class="animated6"><a href="/signup" class="slider btn btn-system btn-large">สมัครสมาชิก</a>
              </p>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="{{ URL::asset('images/slider/bg3.jpg')}}" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                              <span>เส้นทางสู่ <strong>ความสำเร็จ</strong></span>
                          </h2>
              <h3 class="animated8 white">
                            <span>รออะไรอยู่</span>
                          </h3>
              <div class="">
                <a class="animated4 slider btn btn-system btn-large btn-min-block" href="/signup">สมัครสมาชิก</a><a class="animated4 slider btn btn-default btn-min-block" href="#" data-toggle="modal" data-target="#login_modal">เข้าสู่ระบบ</a>
              </div>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
      </div>
      <!-- Carousel inner end-->

      <!-- Controls -->
      <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
      </a>
      <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
      </a>
    </div>
    <!-- /carousel -->
  </section>
  <!-- End Home Page Slider -->

    @include('pages.login')

    @include('layout.partials.services')

    @include('layout.partials.recentproject')
@stop
