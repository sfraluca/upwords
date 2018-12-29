

@extends('platform.platform')

@section('content')



@include('menu')
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Freelancer				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="category.html"> Job category</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">Recent</a></li>
							</ul>


							@foreach ($candidates as $candidate)
                                           
                                           
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
												<a href="single.html"><h4>{{$candidate->name}}</h4></a>
												<h6>{{$candidate->slug}}</h6>					
											</div>
											<ul class="btns">
												<li><a href="{{route('contact')}}">Contact</a></li>
												<li><a href="{{route('compare', $candidate->id)}}">See</a></li>
											</ul>
										</div>
										
										<h5>Job Nature: {{$candidate->emplyment_type}}</h5>
										<h5>@foreach ($pas as $p)
													{{$p->profession}}
													@endforeach</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidate->price}}</p>
									</div>
							</div>
									@endforeach											
						</div>
						
						

									

					</div>
				</div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection