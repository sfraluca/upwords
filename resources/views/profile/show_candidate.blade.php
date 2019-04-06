@extends('platform.platform')

@section('content')



@include('menu')
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Your CV				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home', app()->getLocale())}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('job')}}"> Go to Jobs</a></p>
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
									<button type="submit" style="float: right;" class="genric-btn danger">Delete profile</button>
								</form></li>@endcan
								@can('update-candidate') 
								<li><a class="genric-btn primary" style="float: right;" href="{{route('edit_candidate', [$candidates->id, app()->getLocale()])}}">Edit profile</a></li>
								@endcan 
							</ul>

							<br><br><br>
                                           
							<div class="col-lg-13 post-list">

                            <div class="single-post d-flex flex-row">
                                <div class="thumb">
                                    <img src="img/post.png" alt=""> 
									Skill
										<ul class="tags">
											<li>
												<a href="#">
													{{$candidates->skill}}
												</a>
											</li>
											
										</ul>
										Profession
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
										<h5>Job Nature: {{$candidates->emplyment_type}}</h5>
										<h5>Contact: {{$candidates->contact}}</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidates->price}}</p>
									</div>

									
							
									</div>
				</div>	<div class="single-post job-details">
                                <h4 class="single-title">Description</h4>
                                <p>
                                {{$candidates->description}}</p>
                                
                                </div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection