@extends('platform.platform')

@section('content')

@include('platform.header')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								<span>{{$freelancers}}+</span> Freelancers				
							</h1>	
							
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development and many other profession area. Navigate and see what we offer.</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start features Area -->
			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Searching</h4>
								<p>
									You can find many types of freelancers and jobs. With search bar you can fnd them very quickly.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Profession</h4>
								<p>
									There are many profession area where you can choose from as you want.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Skills</h4>
								<p>
									You know a freelancer or a job is good by his skills.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Contact</h4>
								<p>
									After you choose a freelancer or a job you can contact them.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			
			<!-- Start popular-post Area -->
			<section class="popular-post-area pt-100">
				<div class="container">
                <h1>Best freelancers</h1>
					<div class="row align-items-center">
						<div class="active-popular-post-carusel">
						@foreach ($candidates as $candidate)
							<div class="single-popular-post d-flex flex-row">
								
								<div class="details">
									<a href="#"><h4>{{$candidate->name}}</h4></a>
									<h6>{{$candidate->slug}}</h6>
									<p>
									Employment type: {{$candidate->emplyment_type}}</p>
									<p>
									Price: {{$candidate->price}}$/h</p>
								
									<a class=" text-uppercase text-right" href="{{route('login')}}">View freelancer</a>
								</div>
							</div>	
							@endforeach
																																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-post Area -->
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Profession Area</h1>
								<p>By your profession is smarter and faster to find the best candidate.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o1.png" alt="">
								
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o2.png" alt="">
								
								<p>Writing</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o3.png" alt="">
								
								<p>Data science, IT</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o4.png" alt="">
								
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o5.png" alt="">
								
								<p>Legal</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o6.png" alt="">
								
								<p>Design</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">Recent</a></li>
							</ul>
							@foreach ($jobs as $job)
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">@foreach ($skills as $s)
										<li>
											<a href="#">
                                                {{$s->skill}}
                                               </a>
										</li> @endforeach
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{route('login')}}">See</a></li>
										</ul>
									</div>
									<h5>Job Nature: {{$job->employment_type}}</h5>
									<h5>Profession: @foreach ($pas as $p)
                                                {{$p->profession}}
												@endforeach</h5>
									<p class="address"><span class="lnr lnr-map"></span>User Name: {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-map"></span>Contact: {{$job->contact}}</p>
									<p class="address"><span class="lnr lnr-database"></span>Price: {{$job->price}}$/h</p>
								</div>
							</div>
							@endforeach													
							
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="{{route('login')}}">View more freelancers</a>
                           
						</div>
						 <p><span>If you are for the first time here, you have to register to see all candidates available.</span></p>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">If you want to post a job to find a freelancer you have to login as a job, but if you are a freelancer and you want to find a job you have to lgin as freelancer. These have different roles and you have to pay attention to what you want.</p>
								<a class="primary-btn" href="{{route('register')}}">Search for job</a>
								<a class="primary-btn" href="{{route('register')}}">Search for freelancer</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start download Area -->
			
			<!-- End download Area -->
		
		@include('platform.footer')
            
@endsection