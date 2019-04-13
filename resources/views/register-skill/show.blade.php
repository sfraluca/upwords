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
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [app()->getLocale(), $skills->id ]) }}"
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
                                <h2 class="pageheader-title">@lang('header.skill')</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.skill')</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.add')</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">@lang('header.show')</li>
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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">@lang('header.skill')</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                               <th>@lang('header.skill')</th>
                                               <th>@lang('header.edit')</th>     
                                               <th>@lang('header.delete')</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$skills->id}}</td>
                                                <td>{{$skills->skill}}</td>
                                                <td>
                                                    <form action ="{{ route('edit_skill', [app()->getLocale(), $skills->id ])}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-primary btn-icon-text btn-sm">@lang('header.edit')</button>
                                                    </form>
                                                    
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete_form" action ="{{ route('delete_skill', [app()->getLocale(), $skills->id ])}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-danger btn-icon-text btn-sm">@lang('header.delete')</button>
                                                    </form> 
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                              <th>@lang('header.skill')</th>  
                                               <th>@lang('header.edit')</th>     
                                               <th>@lang('header.delete')</th> 
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

 @include('layouts.footer')
@endsection
