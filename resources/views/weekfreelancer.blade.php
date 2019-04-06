

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
								Search for a job				
							</h1>	
							
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development and many other profession area. Navigate and see what we offer.</p>
						
													
					</div>		</div>
				</div>
			</section>
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							
						<ul class="cat-list">
								<li><a href="{{route('freelancer_month', app()->getLocale())}}">31 days</a></li>
								<li><a href="{{route('freelancer_week', app()->getLocale())}}">7 days</a></li>
								<li><a href="{{route('freelancer_day', app()->getLocale())}}">1 days</a></li>
								<li><a href="{{route('freelancer', app()->getLocale())}}">All candidates</a></li>
							</ul>

							@foreach ($candidates as $candidate)
                                           
                                           
							<div class="single-post d-flex flex-row">
									<div class="thumb">
										<img src="img/post.png" alt="">
										<ul class="tags">
											<li>
												<a href="#">
													{{$candidate->skill}}
												</a>
											</li> 
											
										</ul>
									</div>

									<div class="details">
										<div class="title d-flex flex-row justify-content-between">
											<div class="titles">
												<a href="single.html"><h4>{{$candidate->name}}</h4></a>
												<h6>{{$candidate->slug}}</h6>					
											</div>
											<ul class="btns">
												<li><a href="{{route('contact_candidate', [$candidate->id, app()->getLocale()])}}">Contact</a></li>
												<li><a href="{{route('compare', [$candidate->id, app()->getLocale()])}}">See</a></li>
											</ul>
										</div>
										
										<h5>Job Nature: {{$candidate->emplyment_type}}</h5>
										<h5>Contact: {{$candidate->contact}}</h5>
										<h5>Profession: {{$candidate->profession}}</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidate->price}}</p>
									</div>
							</div>
									@endforeach		
									<div class="text-center" style="float: right;">{{ $candidates->links('vendor.pagination.bootstrap-4') }}</div>
																		
						</div>
						
						

									

					</div>
				</div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection