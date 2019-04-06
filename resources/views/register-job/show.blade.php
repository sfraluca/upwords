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
                                <h2 class="pageheader-title">Job Profile</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Job</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Show</li>
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
                            <h5 class="card-header">Current job</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Contact</th>
                                                <th>Slug</th>
                                                <th>Employment_type</th>
                                                <th>Skill</th>
                                                <th>Profession</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Name</th>    
                                               <th>Edit</th>     
                                               <th>Delete</th>     
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>{{$data->id}}</td>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->contact}}</td>
                                                <td>{{$data->slug}}</td>
                                                <td>{{$data->employment_type}}</td>
                                                <td>{{$data->skill}}</td>
                                                <td>{{$data->profession}}</td>
                                                <td>{{$data->description}}</td>
                                                <td>{{$data->price}}</td>
                                                <td>{{$data->name}}</td>
                                               
                                                <td>
                                                    <form action ="{{ route('edit_job', [$data->id, app()->getLocale()])}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-gradient-dark btn-icon-text btn-sm">Edit</button>
                                                    </form>
                                                    
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete_form" action ="{{ route('delete_job', [$data->id, app()->getLocale()])}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-gradient-danger btn-icon-text btn-sm">Delete</button>
                                                    </form> 
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Contact</th>
                                                <th>Slug</th>
                                                <th>Employment_type</th>
                                                <th>Skill</th>
                                                <th>Profession</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Name</th>     
                                               <th>Edit</th>     
                                               <th>Delete</th>      
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
