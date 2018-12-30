@extends('platform.platform')

@section('content')



@include('menu')

<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Job Details				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="single.html"> Job Details</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
                <h1 class="text-center">- {{$procentaj}}%-</h1>
                <br>
					<div class="row justify-content-center d-flex">
						<div class="col-lg-6 post-list">
								<div class="single-post d-flex flex-row">
										
										<div class="details col-lg-5">
											<div class="title d-flex flex-row justify-content-between">
												<div class="titles">
													<a href="#"><h4>{{$cand->name}}</h4></a>
													<h6>{{$cand->slug}}</h6>					
												</div>
												
											</div>
											
											<h5>Job Nature: {{$cand->emplyment_type}}</h5>
											<h5>Contact: {{$cand->contact}}</h5>
											<p class="address"><span class="lnr lnr-database"></span> {{$cand->price}}</p>
										</div>

										<div class="thumb">
											<img src="img/post.png" alt="">
											Skill
											<ul class="tags">
													<li>
														<a href="#">
															{{$cand->skill}}
														</a>
													</li> 
													
												</ul>
												Profession
												<ul class="tags">
													<li>
														<a href="#">
															{{$cand->profession}}
														</a>
													</li> 
													
												</ul>
										</div>
								</div>		
								
							<div class="single-post job-details">
								<h4 class="single-title">Description</h4>	<p>{{$cand->description}}</p>
							</div>
							</div>
								<div class="col-lg-6 post-list">

							<div class="single-post d-flex flex-row">
								
								<div class="details col-lg-5">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#"><h4>{{$vacancy->title}}</h4></a>
											<h6>{{$vacancy->slug}}</h6>					
										</div>
										
									</div>
									
									<h5>Job Nature: {{$vacancy->employment_type}}</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$vacancy->name}}</p>
									<p class="address"><span class="lnr lnr-map"></span> {{$vacancy->contact}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$vacancy->price}}</p>
								</div>	
								<div class="thumb">
									<img src="img/post.png" alt="">
									Skill
									<ul class="tags">
											<li>
												<a href="#">
													{{$vacancy->skill}}
												</a>
											</li> 
											
										</ul>
										Profession
										<ul class="tags">
											<li>
												<a href="#">
													{{$vacancy->profession}}
												</a>
											</li>
											
										</ul>
								</div></div>

							<div class="single-post job-details">
								<h4 class="single-title">Description</h4>
								<p>
								{{$vacancy->description}}</p>
								
							</div>
							


					
						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			
		@include('platform.footer')
            
@endsection