@extends('platform.platform')

@section('content')



@include('header')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
                        <br>
                        
							<h1 class="text-white">
								@lang('header.complete_title')
							</h1>	
							
								
							<p class="text-white"> <span>@lang('header.complete_sub')</span> </p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
            <section class="contact-page-area section-gap">
									<div class="container ">
									<div class="row justify-content-center">
									<div class="col-lg-8">
									<h1>@lang('header.complete_form')</h1><br>
									<form class="form-area " action="{{ route('store_freelancer', app()->getLocale()) }}" method="post" class="contact-form text-right">
									{{csrf_field()}}
									<div class="row">	
									<div class="col-lg-12 form-group">
									<label for="Name">@lang('header.name')</label>
									<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif   
									<label for="Job">@lang('header.Job_to_do')</label> 
									<input name="slug" placeholder="Enter title job" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title job'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif   
											<label for="Employment">@lang('header.employment_type')</label> 
											<input name="emplyment_type" placeholder="Enter employment type" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter employment type'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('emplyment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emplyment_type') }}</strong>
                                                </span>
                                            @endif  
											<label for="Contact">@lang('header.email')</label> 
                                            <input  name="contact" placeholder="Enter contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact'" class="common-input mb-20 form-control" required="" type="text">
                                                @if ($errors->has('contact'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('contact') }}</strong>
                                                    </span>
                                                @endif    
											<label for="Description">@lang('header.description')</label>
											<textarea class="common-textarea mt-10 form-control" name="description" 
												placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" 
												required=""></textarea>
											@if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif  
											<label for="price">@lang('header.price')</label>
											<input name="price" placeholder="Enter price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter price'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif     
											<div class="form-group">
                                        <label for="selectSkill">@lang('header.skills')</label>
                                            
                                        <select name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">@lang('header.profession')Profession</label>
                                            
                                        <select name="profession_id" class="form-control">
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
						</div>
</section>
					
		@include('platform.footer')
            
@endsection