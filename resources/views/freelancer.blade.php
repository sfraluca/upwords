

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
						
						<form action="search.html" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects"">
											<select>
												<option value="1">Select area</option>
												<option value="2">Dhaka</option>
												<option value="3">Rajshahi</option>
												<option value="4">Barishal</option>
												<option value="5">Noakhali</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">All Category</option>
												<option value="2">Medical</option>
												<option value="3">Technology</option>
												<option value="4">Goverment</option>
												<option value="5">Development</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="button" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>								
								</div>
							</form>										
					</div>		</div>
				</div>
			</section>
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							


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