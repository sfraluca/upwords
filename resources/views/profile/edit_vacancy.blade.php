@extends('platform.platform')

@section('content')


<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('website', app()->getLocale()) }}"><img src="/img/logo.png" alt="" title="" /></a>
				      </div><h4 class="text-white">{{ Auth::user()->name }}</h4>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
									@foreach (config('app.available_locales') as $locale)
										<li class="nav-item">
												<a class="nav-link"
											href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName() , [app()->getLocale(), $jobs->id]) }}"
											@if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
										</li>
								@endforeach
				          <li class="menu-active"><a href="{{ route('home', app()->getLocale()) }}">@lang('header.home')</a></li>
									@can('create-vacancy') 
									<li class="menu-active"><a href="{{ route('registration_job', app()->getLocale()) }}">@lang('header.post_job')</a></li>
									@endcan
									@can('index-vacancy') 
				          <li><a href="{{ route('job', app()->getLocale()) }}">@lang('header.jobs')</a></li>
									@endcan
									@can('index-candidate') 
                          <li><a href="{{ route('freelancer', app()->getLocale()) }}">@lang('header.freelancers')</a></li>
													@endcan



                           @if (Auth::guest())
				          <li><a href="{{ route('register', app()->getLocale()) }}">@lang('header.register')</a></li>
				          <li><a href="{{ route('login', app()->getLocale()) }}">@lang('header.login')</a></li>		
                            @else
                                <li><a  href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    @lang('header.logout')
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>

                                @endif

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
							@lang('header.edit_profile')
							</h1>	
							
								
							</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
            <section class="contact-page-area section-gap">
									<div class="container ">
									<div class="row justify-content-center">
									<div class="col-lg-8">
									<form class="form-area " action="{{ route('update_vacancy', [app()->getLocale(),$jobs->id]) }}" method="post" class="contact-form text-right">
									{{csrf_field()}}
									<div class="row">	
									<div class="col-lg-12 form-group">
									<label for="Title">@lang('header.title')</label>
									<input value="{{ $jobs->title }}" name="title" placeholder="Enter title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('title'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('title') }}</strong>
										</span>
									@endif    
									<label for="Smalltitle">@lang('header.slug')</label>
									<input  value="{{ $jobs->slug }}" name="slug" placeholder="Enter title job" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title job'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
											<label for="Name">@lang('header.name')</label> 
                                            <input  value="{{ $jobs->name }}" name="name" placeholder="Enter name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif    
									<label for="Contact">@lang('header.contact_email')</label> 
                                            <input  value="{{ $jobs->contact }}" name="contact" placeholder="Enter contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('contact'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('contact') }}</strong>
										</span>
									@endif    
									<label for="Employment">@lang('header.employment_type')</label> 
											<input  value="{{ $jobs->employment_type }}" name="employment_type" placeholder="Enter employment type" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter employment type'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('employment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('employment_type') }}</strong>
                                                </span>
                                            @endif  
											<label for="Description">@lang('header.description')</label>
											<textarea  class="common-textarea mt-10 form-control" name="description" 
												placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" 
												required="">{{ $jobs->description }}</textarea>
												@if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif  
											<label for="price">@lang('header.price')</label>
											<input value="{{ $jobs->price }}" name="price" placeholder="Enter price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter price'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif     
											<div class="form-group">
                                        <label for="selectSkill">@lang('header.skills')</label>
                                            
                                        <select  value="{{ $jobs->skill_id }}" name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">@lang('header.profession')</label>
                                            
                                        <select  value="{{ $jobs->profession_id }}" name="profession_id" class="form-control">
                                        @foreach($pas as $id=>$profession)

                                            <option value="{{$id}}">{{$profession}}</option>
                                        @endforeach
                                        </select>
                                        </div>
										<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">@lang('header.create')</button><div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
								</div>
</form>	
</div>
                        </div></div>
						</div></section>
		@include('platform.footer')
            
@endsection