

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
								@lang('header.search_job') Search results				
							</h1>	
							
							<p class="text-white"> <span>@lang('header.searching'):</span> @lang('header.subtitle')</p>
						
														
					</div>		</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
            <section class="post-area section-gap">
                <div class="container">
                    @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message')}}
                    </div>
                    @endif
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row justify-content-center d-flex">

                        <div class="col-lg-8 post-list">

                   @foreach ($jobs as $job)
                                           
                                           
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<ul class="tags">
										<li>
											<a href="#">
                                                {{$job->skill}}
                                               </a>
										</li>
										
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{route('contact_vacancy', [ app()->getLocale(), $job->id])}}">@lang('header.contact')</a></li>
											<li><a href="{{route('compare', [ app()->getLocale(), $job->id])}}">@lang('header.compare')</a></li>
										</ul>
									</div>
									<p>
										{{ substr(strip_tags($job->description), 0,80)}}{{ strlen(strip_tags($job->description)) > 80 ? '...' : ""}}
										<!-- * -->
									</p>
									<h5>@lang('header.employment_type'): {{$job->employment_type}}</h5>
									<h5>@lang('header.contact'): {{$job->contact}}</h5>
									<h5>
                                                {{$job->profession}}
                                               </h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->price}}</p>
								</div>
							</div>
									@endforeach	
									<div class="text-center" style="float: right;">{{ $jobs->links('vendor.pagination.bootstrap-4') }}</div>
                                    @foreach ($candidates as $candidate)
                                           
                                           
							<div class="single-post d-flex flex-row">
									<div class="thumb">
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
												<li><a href="{{route('contact_candidate', [app()->getLocale(), $candidate->id])}}">@lang('header.contact')</a></li>
												<li><a href="{{route('choose_vacancy', [app()->getLocale(), $candidate->id])}}">@lang('header.see')</a></li>
											</ul>
										</div>
										
										<h5>@lang('header.employment_type'): {{$candidate->emplyment_type}}</h5>
										<h5>@lang('header.contact'): {{$candidate->contact}}</h5>
										<h5>
													{{$candidate->profession}}
													</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidate->price}}</p>
									</div>
							</div>
									@endforeach			
									<div class="text-center" style="float: right;">{{ $candidates->links('vendor.pagination.bootstrap-4') }}</div>
                       


                        </div>
                        </div>
                </div>	
            </section>
			<!-- End post Area -->

		
            
		@include('platform.footer')
            
            @endsection
		