@extends('layouts.home')
@section('content')
<div class="page-wrapper">

  @include('inc.public.navbar')

  <section class="page-banner">
    <div class="anim-icons">
      <span class="icon shape-1 wow fadeInLeft animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInLeft;"><img src="assets/images/shape/banner-shape-1.png" alt=""></span>
      <span class="icon shape-2 wow fadeInRight animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInRight;"><img src="assets/images/shape/banner-shape-1.png" alt=""></span>
    </div>
    <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/banner-bg-11.jpg')}}')"></div>
    <div class="bottom-rotten-curve alternate"></div>
    <div class="auto-container">
        <h1>Our Blog Details</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li class="active">Blog Details</li>
        </ul>
    </div>
  </section>

  <section class="sidebar-page-container">
		<div class="auto-container">
			<div class="row">
				<div class="col-xl-8 col-sm-12 mx-auto">
					<div class="inner-box">
						<div class="image"><img src="{{asset($blog->image??'assets/images/blog/blog-details.jpg')}}" alt=""></div>
						<ul class="post-meta">
							<li><a href="#"><i class="far fa-user"></i>Post By: Admin</a></li>
							<li><a href="#"><i class="far fa-calendar-alt"></i>{{$blog->created_at->format('d M Y')}}</a></li>
							<li><a href="#"><i class="far fa-layer-group"></i>Category: {{$blog->category}}</a></li>
						</ul>
						<h2>{{$blog->title}} </h2>
						<p>{!!$blog->description!!}</p>
						</div>
					</div>
				</div>
    </div>
	</section>

  @include('inc.public.footer')
  
</div>

@endsection