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
                                <h2 class="pageheader-title">@lang('header.profile')</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.candidate')</a></li>
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
                            <h5 class="card-header">@lang('header.candidate')</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>  <th>#</th>
                                            <th>@lang('header.name')</th>
                                            <th>@lang('header.contact')</th>
                                                <th>@lang('header.slug')</th>
                                                <th>@lang('header.employment_type')</th>
                                                <th>@lang('header.description')</th>
                                                <th>@lang('header.price')</th>
                                                <th>@lang('header.skills')</th>
                                                <th>@lang('header.profession')</th>  
                                               <th>@lang('header.edit')</th>     
                                               <th>@lang('header.delete')</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>{{$data->id}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->contact}}</td>
                                                <td>{{$data->slug}}</td>
                                                <td>{{$data->emplyment_type}}</td>
                                                <td>{{$data->description}}</td>
                                                <td>{{$data->price}}</td>
                                                <td>{{$data->skill}}</td>
                                                <td>{{$data->profession}}</td>
                                             
                                                <td>
                                                    <form action ="{{ route('edit_candidates', [$data->id, app()->getLocale()])}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-gradient-dark btn-icon-text btn-sm">@lang('header.edit')</button>
                                                    </form>
                                                    
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete_form" action ="{{ route('delete_candidate', [$data->id, app()->getLocale()])}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-gradient-danger btn-icon-text btn-sm">@lang('header.delete')</button>
                                                    </form> 
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>  <th>#</th>
                                              <th>@lang('header.name')</th>
                                            <th>@lang('header.contact')</th>
                                                <th>@lang('header.slug')</th>
                                                <th>@lang('header.employment_type')</th>
                                                <th>@lang('header.description')</th>
                                                <th>@lang('header.price')</th>
                                                <th>@lang('header.skills')</th>
                                                <th>@lang('header.profession')</th>  
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
            @include('layouts.navbar')
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>


@endsection
