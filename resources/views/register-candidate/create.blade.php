
@extends('layouts.app')

@section('content')
<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        
        @include('layouts.navbar')
      
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
                                <h2 class="pageheader-title">@lang('header.new_candidate')</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('list_all_candidates', app()->getLocale())}}" class="breadcrumb-link">@lang('header.candidates')</a></li>
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
                                    <form action="{{ route('store_candidate', app()->getLocale()) }}" method="POST" id="basicform" data-parsley-validate="">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="inputCandidateName">@lang('header.name')</label>
                                            <input id="inputCandidateName" type="text" name="name" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <label for="Contact">@lang('header.contact_email')</label> 
                                            <input  name="contact" class="common-input mb-20 form-control" required="" type="text">
									@if ($errors->has('contact'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('contact') }}</strong>
										</span>
									@endif    
                                        <div class="form-group">
                                            <label for="inputSlug">@lang('header.title')</label>
                                            <input id="inputSlug" type="text" name="slug" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmply">@lang('header.employment_type')</label>
                                            <input id="inputEmply" type="text" name="emplyment_type" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                            @if ($errors->has('emplyment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emplyment_type') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDdesc">@lang('header.description')</label>
                                             <textarea class="common-textarea mt-10 form-control" name="description"></textarea>
                                          
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">@lang('header.price')</label>
                                            <input id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                       
                                        <div class="form-group">
                                        <label for="selectSkill">@lang('header.skills')</label>
                                            
                                        <select name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">@lang('header.profession')</label>
                                            
                                        <select name="profession_id" class="form-control">
                                        @foreach($pas as $id=>$profession)

                                            <option value="{{$id}}">{{$profession}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="users">@lang('header.user')</label>
                                            
                                        <select name="user_id" class="form-control">
                                        @foreach($users as $id=>$user)

                                            <option value="{{$id}}">{{$user}}</option>
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
