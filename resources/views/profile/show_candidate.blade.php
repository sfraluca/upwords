@extends('platform.platform')

@section('content')



@include('menu')
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								@lang('header.dashboard')Your CV				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home', app()->getLocale())}}">@lang('header.home') </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('job')}}">@lang('header.go_to') </a></p>
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
							<ul> 
							
							@can('delete-candidate')
								<li><form method="POST" class="delete_form" action ="{{ route('deletecandidate', [$candidates->id, app()->getLocale()])}}">
								 
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE"/>
									<button type="submit" style="float: right;" class="genric-btn danger">@lang('header.delete')</button>
								</form></li>@endcan
								@can('update-candidate') 
								<li><a class="genric-btn primary" style="float: right;" href="{{route('edit_candidate', [$candidates->id, app()->getLocale()])}}">@lang('header.edit')</a></li>
								@endcan 
							</ul>

							<br><br><br>
                                           
							<div class="col-lg-13 post-list">

                            <div class="single-post d-flex flex-row">
                                <div class="thumb">
                                    <img src="img/post.png" alt=""> 
									@lang('header.skills')
										<ul class="tags">
											<li>
												<a href="#">
													{{$candidates->skill}}
												</a>
											</li>
											
										</ul>
										@lang('header.profession')
                                        <ul class="tags">
                                            <li>
                                                <a href="#">
                                                    {{$candidates->profession}}
                                                </a>
                                            </li>
                                            
                                        </ul>
									</div>

									<div class="details">
										<div class="title d-flex flex-row justify-content-between">
											<div class="titles">
												<h4>{{$candidates->name}}</h4>
												<h6>{{$candidates->slug}}</h6>					
											</div>
											
										</div>
										<p>
                                        _____________________________________________________________
                                    </p>
										<h5>@lang('header.employment_type'): {{$candidates->emplyment_type}}</h5>
										<h5>@lang('header.contact'): {{$candidates->contact}}</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidates->price}}</p>
									</div>

									
							
									</div>
				</div>	<div class="single-post job-details">
                                <h4 class="single-title">@lang('header.description')</h4>
                                <p>
                                {{$candidates->description}}</p>
                                
                                </div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection