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
                                <h2 class="pageheader-title">Create new candidate</h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Candidate</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                                <h5 class="card-header">Basic Form</h5>
                                <div class="card-body">
                                    <form action="{{ route('store_candidate') }}" method="POST" id="basicform" data-parsley-validate="">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="inputCandidateName">Candidate Name</label>
                                            <input id="inputCandidateName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSlug">Title for job wanted</label>
                                            <input id="inputSlug" type="text" name="slug" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmply">Employ type</label>
                                            <input id="inputEmply" type="text" name="emplyment_type" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('emplyment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emplyment_type') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDdesc">Description</label>
                                            <input id="inputDesc" type="text" name="description" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">Price</label>
                                            <input id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                       
                                        <div class="form-group">
                                        <label for="selectSkill">Skill</label>
                                            
                                        <select name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">Profession</label>
                                            
                                        <select name="profession_id" class="form-control">
                                        @foreach($pas as $id=>$profession)

                                            <option value="{{$id}}">{{$profession}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
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
            @include('layouts.navbar')
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>


@endsection
