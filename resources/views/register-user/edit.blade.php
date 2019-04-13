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
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),  [app()->getLocale(), $users->id ]) }}"
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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.user')</a></li>
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
                                    <form action="{{ route('update_user', [app()->getLocale(), $users->id ]) }}" method="POST" id="basicform" data-parsley-validate="">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="inputUserName">@lang('header.name')</label>
                                            <input value="{{ $users->name }}"  id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">@lang('header.contact_email')</label>
                                            <input value="{{ $users->email }}" id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">@lang('header.pass')</label>
                                            <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif  
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">@lang('header.confirm')</label>
                                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="selectUser">@lang('header.select')</label>
                                            
                                        <select name="role" value="{{ $users->role }}" class="form-control">
                                        @foreach($roles as $id=>$role)

                                            <option value="{{$id}}">{{$role}}</option>
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
