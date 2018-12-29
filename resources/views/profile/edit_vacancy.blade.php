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
							Edit your profile
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
									<form class="form-area " action="{{ route('update_vacancy', $jobs->id) }}" method="post" class="contact-form text-right">
									{{csrf_field()}}
									<div class="row">	
									<div class="col-lg-12 form-group">
									<label for="Title">Title</label>
									<input value="{{ $jobs->title }}" name="title" placeholder="Enter title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('title'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('title') }}</strong>
										</span>
									@endif    
									<label for="Smalltitle">Small title</label>
									<input  value="{{ $jobs->slug }}" name="slug" placeholder="Enter title job" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title job'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
											<label for="Name">Name</label> 
                                            <input  value="{{ $jobs->name }}" name="name" placeholder="Enter name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif    
									<label for="Employment">Employment type</label> 
											<input  value="{{ $jobs->employment_type }}" name="employment_type" placeholder="Enter employment type" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter employment type'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('employment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('employment_type') }}</strong>
                                                </span>
                                            @endif  
											<label for="Description">Description</label>
											<textarea  class="common-textarea mt-10 form-control" name="description" 
												placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" 
												required="">{{ $candidates->description }}</textarea>
												@if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif  
											<label for="price">Price</label>
											<input value="{{ $jobs->price }}" name="price" placeholder="Enter price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter price'" class="common-input mb-20 form-control" required="" type="text">
											@if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif     
											<div class="form-group">
                                        <label for="selectSkill">Skill</label>
                                            
                                        <select  value="{{ $jobs->skill_id }}" name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">Profession</label>
                                            
                                        <select  value="{{ $jobs->profession_id }}" name="profession_id" class="form-control">
                                        @foreach($pas as $id=>$profession)

                                            <option value="{{$id}}">{{$profession}}</option>
                                        @endforeach
                                        </select>
                                        </div>
										<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Create</button><div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
								</div>
</form>	
</div>
                        </div></div>
						</div></section>
		@include('platform.footer')
            
@endsection