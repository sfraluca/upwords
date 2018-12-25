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
                            @can('update-vacancy') 
							<li><a href="{{route('edit_vacancy', $jobs->id)}}">Edit profile</a></li>
                            @endcan
                            @can('delete-vacancy') 
								<li><form method="POST" class="delete_form" action ="{{ route('delete_vacancy', $jobs->id)}}">
                                @endcan
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE"/>
									<button type="submit" class="btn btn-gradient-danger btn-icon-text btn-sm">Delete profile</button>
								</form></li>
							</ul>


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
                <a href="#"><h4>{{$jobs->title}}</h4></a>
                <h6>{{$jobs->slug}}</h6>					
            </div>
            <ul class="btns">
                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                <li><a href="#">Apply</a></li>
            </ul>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
        </p>
        <h5>Job Nature: {{$jobs->employment_type}}</h5>
        <p class="address"><span class="lnr lnr-map"></span> {{$jobs->name}}</p>
        <p class="address"><span class="lnr lnr-database"></span> {{$jobs->price}}</p></div>
</div>	
<div class="single-post job-details">
    <h4 class="single-title">Description</h4>
    <p>
    {{$jobs->description}}</p>
    
</div>


									

					</div>
				</div>	
			</section>
			<!-- End calto-action Area -->	
            
		@include('platform.footer')
            
            @endsection