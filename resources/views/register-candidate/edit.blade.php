
@extends('layouts.app')

@section('content')
<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
                <a class="navbar-brand" href="index.html">JOB LISTING</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" navbar-toggler-icon">Menu</span>
                </button><h4 >{{ Auth::user()->name }}</h4> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        @foreach (config('app.available_locales') as $locale)
                            <li >
                        <a class="nav-link"
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),[app()->getLocale(), $candidates->id ]) }}"
                                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </li>
						@endforeach
                                 <li ><a class="nav-link" href="{{ route('admin.logout', app()->getLocale())}}"><i class="fas fa-power-off mr-2"></i>@lang('header.logout')</a>
                            </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">@lang('header.edit')</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.candidates')</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">@lang('header.add')</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">@lang('header.form')</h5>
                                <div class="card-body">
                                    <form action="{{ route('update_candidates', [app()->getLocale(), $candidates->id ]) }}" method="POST" id="basicform" data-parsley-validate="">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="inputCandidateName">@lang('header.name')</label>
                                            <input value="{{ $candidates->name }}"  id="inputCandidateName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <label for="Contact">@lang('header.contact_email')</label> 
                                            <input  value="{{ $candidates->contact }}" name="contact" placeholder="Enter contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact'" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('contact'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('contact') }}</strong>
										</span>
									@endif    
                                       
                                        <div class="form-group">
                                            <label for="inputSlug">@lang('header.title')</label>
                                            <input value="{{ $candidates->slug }}" id="inputSlug" type="text" name="slug" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmply">@lang('header.employment_type')</label>
                                            <input value="{{ $candidates->emplyment_type }}" id="inputEmply" type="text" name="emplyment_type" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('emplyment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emplyment_type') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDdesc">@lang('header.description')</label>
                                             <textarea value="{{ $candidates->description }}" class="common-textarea mt-10 form-control" name="description" 
						placeholder="Description" ></textarea>
                                            
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">@lang('header.price')</label>
                                            <input value="{{ $candidates->price }}" id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                       
                                        <div class="form-group">
                                        <label for="selectSkill">@lang('header.skills')</label>
                                            
                                        <select value="{{ $candidates->skill_id }}" name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">@lang('header.profession')</label>
                                            
                                        <select value="{{ $candidates->profession_id }}" name="profession_id" class="form-control">
                                        @foreach($pas as $id=>$profession)

                                            <option value="{{$id}}">{{$profession}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">@lang('header.submit')</button>
                                                    <button class="btn btn-space btn-secondary">@lang('header.cancel')</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                      <!-- end -->
                </div>
            </div>
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

 @include('layouts.footer')
@endsection
