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
                <h1 class="text-center">- 99,99% -</h1>
                <br>
					<div class="row justify-content-center d-flex">
						<div class="col-lg-6 post-list">

							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									Skill
									<ul class="tags">@foreach ($skills as $s)
											<li>
												<a href="#">
													{{$s->skill}}
												</a>
											</li> @endforeach
											
										</ul>
										Profession
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
											<a href="#"><h4>{{$candidates->name}}</h4></a>
											<h6>{{$candidates->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>
									<p> 
									</p>
									<h5>Job Nature: {{$candidates->emplyment_type}}</h5>
									
									<p class="address"><span class="lnr lnr-database"></span> {{$candidates->price}}</p>
								</div>
							</div>		

							<div class="single-post job-details">
								<h4 class="single-title">{{$candidates->description}}</h4>
								
							</div>

								<div class="col-lg-6 post-list">

							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									Skill
									<ul class="tags">@foreach ($skills as $s)
											<li>
												<a href="#">
													{{$s->skill}}
												</a>
											</li> @endforeach
											
										</ul>
										Profession
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
											<a href="#"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
										</ul>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: {{$job->employment_type}}</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->price}}</p></div>
							</div>	
							<div class="single-post job-details">
								<h4 class="single-title">Description</h4>
								<p>
								{{$job->description}}</p>
								
							</div>
							


					
						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			
		@include('platform.footer')
            
@endsection