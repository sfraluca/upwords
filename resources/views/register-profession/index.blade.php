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
                                <h2 class="pageheader-title">@lang('header.index_p')</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('list_all_professions', app()->getLocale())}}" class="breadcrumb-link">@lang('header.profession')</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">@lang('header.index')</li>
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
                            <h5 class="card-header">@lang('header.all_profession')</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('header.profession')</th>
                                                <th>@lang('header.show')</th>    
                                               <th>@lang('header.edit')</th>     
                                               <th>@lang('header.delete')</th>     
                                             </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($professions as $profession)
                                            <tr>
                                                <td>{{$profession->id}}</td>
                                                <td>{{$profession->profession}}</td>
                                                <td>
                                                    <form action ="{{ route('show_profession', [app()->getLocale(),$profession->id])}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-success btn-icon-text btn-sm">@lang('header.show')</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action ="{{ route('edit_profession', [app()->getLocale(),$profession->id])}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-primary btn-icon-text btn-sm">@lang('header.edit')</button>
                                                    </form>
                                                    
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete_form" action ="{{ route('delete_profession', [ app()->getLocale(),$profession->id])}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-danger btn-icon-text btn-sm">@lang('header.delete')</button>
                                                    </form> 
                                                   
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('header.profession')</th>
                                                <th>@lang('header.show')</th>    
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
