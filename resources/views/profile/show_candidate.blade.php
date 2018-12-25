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
							@can('update-candidate') 
							<li><a href="{{route('edit_candidate', $candidates->id)}}">Edit profile</a></li>
							@endcan 
							@can('delete-candidate')
								<li><form method="POST" class="delete_form" action ="{{ route('deletecandidate', $candidates->id)}}">
								 @endcan
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE"/>
									<button type="submit" class="btn btn-gradient-danger btn-icon-text btn-sm">Delete profile</button>
								</form></li>
							</ul>


                                           
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
												<h4>{{$candidates->name}}</h4>
												<h6>{{$candidates->slug}}</h6>					
											</div>
											
										</div>
										
										<h5>Job Nature: {{$candidates->emplyment_type}}</h5>
										<h5>@foreach ($pas as $p)
													{{$p->profession}}
													@endforeach</h5>
										<p class="address"><span class="lnr lnr-database"></span> {{$candidates->price}}</p>
									</div>
							</div>
																
						</div>
						
						

									

					</div>
				</div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection