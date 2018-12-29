@extends('platform.platform')

@section('content')



@include('menu')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								<span>Welcome to your application</span> 
							</h1>	

			</section>
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
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10"><h1 class="mb-10">All Profession Area</h1>
								<p>By your profession is smarter and faster to find the best candidate.</p>
							</div>
						</div>
					</div>						
					<div class="row">@foreach ($profession as $p)
						<div class="col-lg-2 col-md-4 col-sm-6">
						
							<div class="single-fcat">
								
								
								<p>{{$p->profession}}</p>
							</div>
							
						</div>@endforeach
																																
					</div>																						
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">Recent</a></li>
							</ul>
							@foreach ($jobs_recent as $job)
                                           
                                           
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
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">See</a></li>
										</ul>
									</div>
									<p>
									{{$job->description}}
									</p>
									<h5>Job Nature: {{$job->employment_type}}</h5>
									<h5>@foreach ($pas as $p)
                                                {{$p->profession}}
                                                @endforeach</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->price}}</p>
								</div>
							</div>
									@endforeach											
						</div>
						
					</div>
				</div>	
			</section>
		@include('platform.footer')
            
@endsection