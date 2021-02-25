@extends('layouts.home')
@section('content')
<div class="page-wrapper">

  @include('inc.public.navbar')
  
  <!-- Banner Section -->
  <section class="banner-section">
  <div class="banner-carousel theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
    <!-- Slide Item -->
    <div class="slide-item">
      <div class="anim-icons">
        <span class="icon shape-1"><img src="assets/images/shape/slider-1-shape-1.png" alt=""></span>
        <span class="icon shape-2"><img src="assets/images/shape/slider-1-shape-2.png" alt=""></span>
        <span class="icon shape-3"><img src="assets/images/shape/slider-1-shape-3.png" alt=""></span>
      </div>
      <div class="image-layer lazy-image" data-bg="url('assets/images/mr/7.jpg')"></div>

      <div class="auto-container">
        <div class="content-box">
          <h3>Welcome To ASP-Abroad Study Planner</h3>
          <h1>Every <br> Applicant Matters<br></h1>
          <br>
          <div class="text">The company is managed by a team of professionals who have graduated <br> from universities in the UK and gained combined experience of more than 30 years <br> in advisory and consulting roles in Australian and British corporations.</div>
          <div class="btn-box">
            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Let's start the application</span></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
      <div class="anim-icons">
        <span class="icon shape-1"><img src="assets/images/shape/slider-1-shape-1.png" alt=""></span>
        <span class="icon shape-2"><img src="assets/images/shape/slider-1-shape-2.png" alt=""></span>
        <span class="icon shape-3"><img src="assets/images/shape/slider-1-shape-3.png" alt=""></span>
      </div>
      <div class="image-layer lazy-image" data-bg="url('assets/images/mr/9.jpg')"></div>

      <div class="auto-container">
        <div class="content-box">
          <h3>Welcome To ASP-Abroad Study Planner</h3>
          <h1>Every <br> Applicant Matters<br></h1>
          <br>
          <div class="text">The company is managed by a team of professionals who have graduated <br> from universities in the UK and gained combined experience of more than 30 years <br> in advisory and consulting roles in Australian and British corporations.</div>
          <div class="btn-box">
            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Let's start the application</span></a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide Item -->
    <div class="slide-item">
      <div class="anim-icons">
        <span class="icon shape-1"><img src="assets/images/shape/slider-1-shape-1.png" alt=""></span>
        <span class="icon shape-2"><img src="assets/images/shape/slider-1-shape-2.png" alt=""></span>
        <span class="icon shape-3"><img src="assets/images/shape/slider-1-shape-3.png" alt=""></span>
      </div>
      <div class="image-layer lazy-image" data-bg="url('assets/images/mr/8.jpg')"></div>

      <div class="auto-container">
        <div class="content-box">
          <div class="content-box">
            <h3>Welcome To ASP-Abroad Study Planner</h3>
            <h1>Every <br> Applicant Matters<br></h1>
            <br>
            <div class="text">The company is managed by a team of professionals who have graduated <br> from universities in the UK and gained combined experience of more than 30 years <br> in advisory and consulting roles in Australian and British corporations.</div>
            <div class="btn-box">
              <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Let's start the application</span></a>
            </div>
          </div>
      </div>
    </div>

  </div>
  </section>
  <!--End Banner Section -->
  
	<section class="info-style-three my-4">
		<div class="auto-container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-sm-12 culmn wow " data-wow-delay="200ms" data-wow-duration="1200ms">
					<div class="item">
						<div class="content">
							<div class="icon"><span class="flaticon-laptop"></span></div>
							<h2>Hiring Process</h2>
							<p>Send an application,We are ready to help</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-sm-12 culmn wow " data-wow-delay="400ms" data-wow-duration="1200ms">
					<div class="item">
						<div class="content">
							<div class="icon"><span class="flaticon-presentation"></span></div>
							<h2>Counselling Process</h2>
							<p>Any Question?</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-sm-12 culmn wow " data-wow-delay="600ms" data-wow-duration="1200ms">
					<div class="item">
						<div class="content">
							<div class="icon"><span class="flaticon-settings"></span></div>
							<h2>Our Team</h2>
							<p>We have professionals from Uk</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <!--About us -->
  <section class="about-us">
    <div class="auto-container">
      <div class="row">
        <div class="col-xl-6 col-lg-12 col-sm-12">
          <div class="image-box"><img src="assets/images/about/aboutus-1-1.png" alt=""></div>
        </div>
        <div class="col-xl-6 col-lg-12 col-sm-12">
          <div class="content">
            <div class="sec-title" data-wow-delay="200ms" data-wow-duration="1200ms">
              <h3>ASP <span>Abroad Study Planner</span></h3>
              <h2>What About.16 Years <br> Consulting <span>Experienced</span></h2>
              <p>Lakimata sanctus est Lorem ipsum dolor sit amet. publishing rem Ipsu default model text. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="row">
            <div class="col-lg-4">
              <div class="progress-block">
                <div class="inner-box">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#db8621" data-bgColor="#db846300" data-width="130" data-height="130" data-linecap="normal"  value="89">
                    <div class="icon"><span class="flaticon-adjust"></span></div>
                  </div>
                </div>
                <div class="counter-title">Adjustment-</div>
                <div class="inner-text count-box"><span class="count-text" data-stop="89" data-speed="2000"></span>%</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="progress-block">
                <div class="inner-box">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#db8621" data-bgColor="#db846300" data-width="130" data-height="130" data-linecap="normal"  value="92">
                    <div class="icon"><span class="flaticon-dialogue"></span></div>
                  </div>
                </div>
                <div class="counter-title">Resposiblity-</div>
                <div class="inner-text count-box"><span class="count-text" data-stop="99" data-speed="2000"></span>%</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="progress-block">
                <div class="inner-box">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#db8621" data-bgColor="#db846300" data-width="130" data-height="130" data-linecap="normal"  value="90">
                    <div class="icon"><span class="flaticon-data"></span></div>
                  </div>
                </div>
                <div class="counter-title">Profitable-</div>
                <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>%</div>
              </div>
            </div>
          </div>
            <div class="btn-box wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1200ms"><a href="#">More About Here</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End About us -->
  
  <!-- Service Facilites -->
  <section class="service-facilites">
    <div class="auto-container">
      <div class="sec-title center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
      <h3>Our Core<span> Strength</span></h3>
      <h2>ASP <span>Abroad Study Management</span></h2>
      <p>The company is managed by a team of professionals who have graduated from universities in the UK and gained combined experience of more than 30 years in advisory and consulting roles in Australian and British corporations.</p>
    </div>
       <div class="row">
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="200ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-pricing"></span>
             </div>
             <h2><a href="#">Global Presence</a></h2>
             <p>Contact offices in Australia, UK, USA, CANADA</p>
           </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="300ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-award"></span>
             </div>
             <h2><a href="#">Post VISA Service</a></h2>
             <p>CV preparation, job search & travel advice</p>
           </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="400ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-global"></span>
             </div>
             <h2><a href="#">Indepth Preparation</a></h2>
             <p>Research based course mapping & application</p>
           </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="500ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-advantage"></span>
             </div>
             <h2><a href="#">Course Counselling</a></h2>
             <p>Overseas destination career insight</p>
           </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="600ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-productivity"></span>
             </div>
             <h2><a href="#">Digital Platform</a></h2>
             <p>Digitization of your overall visa process</p>
           </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-sm-12 wow " data-wow-delay="700ms" data-wow-duration="1200ms">
           <div class="item">
             <div class="icon">
               <span class="flaticon-customer-support"></span>
             </div>
             <h2><a href="#">Result Oriented</a></h2>
             <p>Timely and Successful application</p>
           </div>
         </div>
       </div>
    </div>
  </section>
  <!--End Service Facilites -->
  
  
  <!-- Faqs Testimonials -->
  <section class="faqs-testimonials">
    <div class="anim-icons">
    <span class="icon shape-1 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 200ms; animation-name: fadeInUp;"><img src="assets/images/shape/faqs-testimonials.png" alt=""></span>
  </div>
    <div class="auto-container">
      <div class="sec-title" data-wow-delay="200ms" data-wow-duration="1200ms">
      <h3><span>Quick Know</span></h3>
      <h2>Before Work With Us. What We Provided.</h2>
      <p>Lmet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et <br> accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
      <div class="row" data-wow-delay="600ms" data-wow-duration="1200ms">
        <div class="col-xl-6 col-lg-12 col-sm-12">
          <ul class="accordion-box mb-30">
                      <!--Accordion Block-->
                      <li class="accordion block">
                          <div class="acc-btn active">Insurance consulting planning with responsiable fact<div class="icon-outer"><span class="icon icon_plus fas fa-angle-right"></span> <span class="icon icon_minus fas fa-angle-down"></span></div></div>
                          <div class="acc-content current">
                              <div class="content">
                                  <div class="text">A strong idea change the best level est Lorem ipsum dolor sit ametarcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. Cras ante massa, tincidunt nec lobortis quis, dignissim vitae sem
                                  </div>
                              </div>
                          </div>
                      </li>

                      <!--Accordion Block-->
                      <li class="accordion block">
                          <div class="acc-btn">Insurance consulting planning with responsiable fact<div class="icon-outer"><span class="icon icon_plus fas fa-angle-right"></span> <span class="icon icon_minus fas fa-angle-down"></span></div></div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">A strong idea change the best level est Lorem ipsum dolor sit ametarcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. Cras ante massa, tincidunt nec lobortis quis, dignissim vitae sem
                                  </div>
                              </div>
                          </div>
                      </li>

                      <!--Accordion Block-->
                      <li class="accordion block">
                          <div class="acc-btn">Insurance consulting planning with responsiable fact<div class="icon-outer"><span class="icon icon_plus fas fa-angle-right"></span> <span class="icon icon_minus fas fa-angle-down"></span></div></div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">A strong idea change the best level est Lorem ipsum dolor sit ametarcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. Cras ante massa, tincidunt nec lobortis quis, dignissim vitae sem
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="btn-box">
             <a href="#" class="theme-btn btn-style-one">
             <span class="btn-title">ASP Config</span>
             </a>
           </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-sm-12 culmn">
          <div class="testimonial">
          <div class="auto-container">
            <div class="testimonial-outer">
              <div class="testimonial-carousel">
                <div class="swiper-container testimonial-content">
                  <div class="swiper-wrapper">

                    @foreach($testimonials as $test)
                    <div class="swiper-slide">
                      <!-- Testimonial Block -->
                      <div class="testimonial-block">
                        <div class="inner-box">
                          <h2>{{$test->name}}</h2>
                          <h3>{{$test->course}}</h3>
                          <div class="content-box">
                            <div class="row">
                              <div class="col-xl-8 col-lg-12">
                                <p>{!!$test->description!!}</p>
                                <ul class="ratting">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                              </div>
                              <div class="col-xl-4 col-lg-12">
                                <div class="image">
                                  <img src="{{asset($test->image)}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>              
                </div>
                <div class="row">
                  <div class="col-xl-8 col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper-container testimonial-thumbs">
                      <div class="swiper-wrapper">
                        @foreach($testimonials as $test)
                        <div class="swiper-slide">
                          <div class="author-thumb"><img src="{{asset($test->image)}}" alt=""></div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12">
                    <div class="swiper-nav-button">
                      <!-- Add Arrows -->
                      <div class="swiper-button-next"><i class="fas fa-arrow-right"></i></div>
                      <div class="swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
                    </div> 
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Faqs Testimonials -->
  
  
  <!-- Why Choos us -->
  <section class="why-choos-us" style="background-image: url(assets/images/background/why-choos-us-bg-3.png);">
    <div class="auto-container">
      <div class="row">
        <div class="col-lg-8 col-sm-12">
          <div class="sec-title" data-wow-delay="200ms" data-wow-duration="1200ms">
          <h3>Why Choose Us & Work <span>With ‘ASP’</span></h3>
          <h2>Perfect Calculation Grow Your <br> Business <span>Right Consultation</span></h2>
          <p>Dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo do- <br>lores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum justo <br> duo dolores et ea rebum. Stet clita ipsum dolor sit ame</p>
        </div>
           <div class="service-block">
             <div class="row">
               <div class="col-xl-4  col-lg-6 col-sm-12" data-wow-delay="400ms" data-wow-duration="1200ms">
                 <div class="item">
                   <div class="icon"><span class="flaticon-consulting"></span></div>
                   <h2>30k Consultation</h2>
                   <p>Country we have adviced they are very satisfied.</p>
                 </div>
               </div>
               <div class="col-xl-4  col-lg-6 col-sm-12" data-wow-delay="600ms" data-wow-duration="1200ms">
                 <div class="item">
                   <div class="icon"><span class="flaticon-problem"></span></div>
                   <h2>46k Solved</h2>
                   <p>Country we have adviced they are very satisfied.</p>
                 </div>
               </div>
               <div class="col-xl-4  col-lg-6 col-sm-12" data-wow-delay="800ms" data-wow-duration="1200ms">
                 <div class="item">
                   <div class="icon"><span class="flaticon-certification"></span></div>
                   <h2>Worlwide Awards</h2>
                   <p>Country we have adviced they are very satisfied.</p>
                 </div>
               </div>
             </div>
           </div>
           <div class="btn-box" data-wow-delay="1000ms" data-wow-duration="1200ms">
             <a href="whychoosus.html" class="theme-btn btn-style-one">
             <span class="btn-title">Request Your Call Back</span>
             </a>
           </div>
        </div>
        <div class="col-lg-4 col-sm-12 ">
          <div class="image"><img src="assets/images/resource/why-choos-us-1.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!--End Why Choos us -->
  
  
  <!-- Calltoaction -->
  <section class="calltoaction" style="background-image: url(assets/images/background/calltoaction-bg.jpg);">
    <div class="auto-container">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="sec-title light wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
            <h3>Global</h3>
            <h2></h2>
            <div class="auto-container wow fadeInUp" data-wow-delay="200ms">
              <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true,"margin": 10, "autoheight":true, "lazyload":true, "nav": true, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                @foreach($countries as $country)
                  <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset($country->cover)}}" alt=""></a></figure></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Calltoaction -->
  
  
  <!-- Team -->
  <section class="team">
    <div class="auto-container">
      <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
      <h3>Consultation <span>Management Team</span></h3>
      <h2>We Do- Protect, Fix, Business <br> <span>Growth, Make Smile You.</span></h2>
      <p>Think positive.It’s very important to create myself groth. Our consultation <br> team will help you.</p>
    </div>
      <div class="row">
        <div class="col-xl-4  col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
          <div class="item">
            <div class="image"><img src="assets/images/team/team1-1.png" alt=""></div>
            <h2><a href="team.html">Mantul Maronx</a></h2>
            <h3>Senior Advisor</h3>
            <p>I will help you with any financial advices. <br> justo duo dolores et ea rebum. Stet clita kasd guber- <br> gren, no sea takimata sanctus est <br> Lorem ipsum dolor sit amet</p>
            <div class="link-btn"><a href="team.html"><span class="fas fa-plus"></span></a></div>
          </div>
        </div>
        <div class="col-xl-4  col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
          <div class="item">
            <div class="image"><img src="assets/images/team/team1-2.png" alt=""></div>
            <h2><a href="team.html">Janorex Makey</a></h2>
            <h3>Problem Fixer</h3>
            <p>I will help you with any financial advices. <br> justo duo dolores et ea rebum. Stet clita kasd guber- <br> gren, no sea takimata sanctus est <br> Lorem ipsum dolor sit amet</p>
            <div class="link-btn"><a href="team.html"><span class="fas fa-plus"></span></a></div>
          </div>
        </div>
        <div class="col-xl-4  col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1200ms">
          <div class="item">
            <div class="image"><img src="assets/images/team/team1-3.png" alt=""></div>
            <h2><a href="team.html">RT Shuvroli</a></h2>
            <h3>Senior Advisor</h3>
            <p>I will help you with any financial advices. <br> justo duo dolores et ea rebum. Stet clita kasd guber- <br> gren, no sea takimata sanctus est <br> Lorem ipsum dolor sit amet</p>
            <div class="link-btn"><a href="team.html"><span class="fas fa-plus"></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Team -->
  
  
  <!-- Clients -->
  <section class="clients" style="background-image: url(assets/images/background/clinents-bg.png);">
    <div class="auto-container wow fadeInUp" data-wow-delay="200ms">
      <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
        <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/clients-1.png')}}" alt=""></a></figure></div>
        <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/clients-2.png')}}" alt=""></a></figure></div>
        <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/clients-3.png')}}" alt=""></a></figure></div>
        <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/clients-4.png')}}" alt=""></a></figure></div>
        <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/clients-5.png')}}" alt=""></a></figure></div>
      </div>
    </div>
  </section>
  <!--End Clients -->
  
  
  <!-- Work -->
  <section class="work" id="Courses">
    <div class="auto-container">
      <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
      <h3>Our  <span>Courses</span></h3>
      <h2>ASP-Abroad Study Planner <br> <span>Trending Courses.</span></h2>
      <p>Think positive.It’s very important to implement growth. Our consultancy <br> team will help you.</p>
    </div>
       <div class="row wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
         
         @foreach($courses as $course)
         <div class="col-xl-4  col-lg-6 col-sm-12">
           <div class="item">
             <div class="image"><img src="{{asset($course->cover)}}" alt=""></div>
             <div class="lower-content" style="background-image: url(assets/images/shape/work-link-img-shape.png);">
               <div class="link-btn"><a href="{{route('home.course',$course->id)}}"><span class="fas fa-plus"></span></a></div>
               <h2>{{strtoupper($course->name)}}</h2>
               <p>{!! substr($course->description,0,100) !!}...</p>
             </div>
           </div>
         </div>
         @endforeach
        
       </div>
    </div>
  </section>
  <!--End Work -->
  
  
  <!-- Blog -->
  <section class="blog" id="Blogs" style="background-image: url({{asset('assets/images/background/blog-bg.png')}});">
    <div class="auto-container">
      <div class="sec-title center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
      <h3>Every Day <span>Updates</span></h3>
      <h2>Our News And <span>Updates</span></h2>
    </div>
      <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
      
        @foreach($news as $new)
        <div class="inner-box">
        <div class="image">
          <div class="overflow">
            <a href="{{route('home.blog',$new->id)}}"><img src="{{asset($new->image??'/assets/images/blog/blog-1-1.jpg')}}" alt="blog image"></a>
          </div>
          <div class="date">{{$new->created_at->format('d M Y')}}</div>
        </div>
        <div class="lower-content">
          <ul class="post-meta">
            <li><a href="#">Category: {{ $new->category }}</a></li>
          </ul>
          <h3><a href="{{route('home.blog',$new->id)}}">{{$new->title}}</a></h3>
          <div class="link-btn"><a href="{{route('home.blog',$new->id)}}"><span class="fas fa-angle-double-right"></span></a></div>
        </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <!--End Blog -->
  
  
  <!-- Map Contact -->
  <section class="map-contact-info">
    <div class="auto-container">
      <div class="row">
        <div class="col-xl-6 col-lg-12 col-sm-12">
          <div class="map">
            <div class="map-column">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.268516785171!2d85.32300911453834!3d27.708994532027535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19088cf744ff%3A0x5d442b976acd7fcc!2sQFX%20Kumari%20Hall!5e0!3m2!1sne!2snp!4v1611905743222!5m2!1sne!2snp" width="600" height="1000" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-sm-12">
          <div class="contact">
            <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
            <h3>Our Address</h3>
            <h2>Contact <span>Information</span></h2>
          </div>
             <div class="row wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
            <div class="info-column col-lg-12">
              <div class="icon-box">
                <div class="icon"><span class="fas fa-envelope"></span></div>
                <h3>Mail Information</h3>
                <ul>
                  <li>{{$email->value??'info@asp.com'}}</li>
                </ul>
              </div>
            </div>
            <div class="info-column col-lg-12">
              <div class="icon-box">
                <div class="icon"><span class="fas fa-map-marker-alt"></span></div>
                <h3>Our Main Office Address</h3>
                <ul>
                  <li>Opp. to Kumari Cinema Kamal Pokhari Kathmandu</li>
                </ul>
              </div>
            </div>
            <div class="info-column col-lg-12">
              <div class="icon-box">
                <div class="icon"><span class="fas fa-phone"></span></div>
                <h3>Call Us Now</h3>
                <ul>
                  <li>+977 {{$phone->value??''}}</li>
                </ul>
              </div>
            </div>
          </div>
             <div class="btn-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
            <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Map Contact -->

  @include('inc.public.footer')
  
</div>

@endsection