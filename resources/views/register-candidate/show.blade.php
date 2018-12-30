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
                                <h2 class="pageheader-title">Candidate Profile</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Candidate</a></li>
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
                            <h5 class="card-header">Current candidate</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>  <th>#</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                                <th>Slug</th>
                                                <th>Employment</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Skill</th>
                                                <th>Profession</th>
                                                <th>Show</th>    
                                               <th>Edit</th>     
                                               <th>Delete</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>{{$candidates->id}}</td>
                                                <td>{{$candidates->name}}</td>
                                                <td>{{$candidate->contact}}</td>
                                                <td>{{$candidates->slug}}</td>
                                                <td>{{$candidates->emplyment_type}}</td>
                                                <td>{{$candidates->description}}</td>
                                                <td>{{$candidates->price}}</td>
                                                <td>@foreach ($skills as $s)
                                                {{$s->skill}}
                                                @endforeach</td>
                                                <td>@foreach ($pas as $p)
                                                {{$p->profession}}
                                                @endforeach</td>
                                                <td>
                                                    <form action ="{{ route('show_candidate', $candidates->id)}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-gradient-primary btn-icon-text btn-sm">Show</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action ="{{ route('edit_candidate', $candidates->id)}}">
                                                        <input type="hidden"/>
                                                        <button type="submit" class="btn btn-gradient-dark btn-icon-text btn-sm">Edit</button>
                                                    </form>
                                                    
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete_form" action ="{{ route('delete_candidate', $candidates->id)}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-gradient-danger btn-icon-text btn-sm">Delete</button>
                                                    </form> 
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>  <th>#</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                                <th>Slug</th>
                                                <th>Employment</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Skill</th>
                                                <th>Profession</th>
                                                <th>Show</th>    
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
