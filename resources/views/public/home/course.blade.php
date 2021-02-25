@extends('layouts.home')
@section('content')
<div class="page-wrapper">

  @include('inc.public.navbar')

  <section class="page-banner">
    <div class="anim-icons">
  <span class="icon shape-1 wow fadeInLeft animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInLeft;"><img src="assets/images/shape/banner-shape-1.png" alt=""></span>
  <span class="icon shape-2 wow fadeInRight animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInRight;"><img src="assets/images/shape/banner-shape-1.png" alt=""></span>
  </div>
      <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/banner-bg-8.jpg')}}')"></div>
      <div class="bottom-rotten-curve alternate"></div>
      <div class="auto-container">
          <h1>Our Course Details</h1>
          <ul class="bread-crumb clearfix">
              <li><a href="{{route('home.index')}}">Home</a></li>
              <li class="active">Course</li>
          </ul>
      </div>
  </section>

  <section class="service-details mb-5">
    <div class="anim-icons">
      <span class="icon shape-1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="assets/images/shape/service-shape-1.png" alt=""></span>
      <span class="icon shape-2 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="assets/images/shape/service-shape-2.png" alt=""></span>
    </div>
    <div class="auto-container">
      <div class="sec-title center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
        <h3><span>{{strtoupper($course->name)}}</span></h3>
      </div>
      <div class="content">
        <div class="imagex1"><img src="{{asset($course->cover??'assets/images/service/service-details.jpg')}}" alt=""></div>
        <div style="padding:1rem!important">
          <p class="text-center">{!!$course->description!!}</p>
        </div>
        
      </div>

    </div>
    <div class="text-center">
      <a href="" class="theme-btn btn-style-one">
        <span class="btn-title">Apply now</span>
      </a>
    </div>
    
  </section>

  @include('inc.public.footer')
  
</div>
@endsection