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
                                <h2 class="pageheader-title">Edit candidate</h2>
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
                                    <form action="{{ route('update_candidate', $candidates->id) }}" method="POST" id="basicform" data-parsley-validate="">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="inputCandidateName">Candidates Name</label>
                                            <input value="{{ $candidates->name }}"  id="inputCandidateName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="inputSlug">Title for job wanted</label>
                                            <input value="{{ $candidates->slug }}" id="inputSlug" type="text" name="slug" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmply">Employ type</label>
                                            <input value="{{ $candidates->emplyment_type }}" id="inputEmply" type="text" name="emplyment_type" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('emplyment_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emplyment_type') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDdesc">Description</label>
                                            <input value="{{ $candidates->description }}" id="inputDesc" type="text" name="description" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">Price</label>
                                            <input value="{{ $candidates->price }}" id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif    
                                        </div>
                                       
                                        <div class="form-group">
                                        <label for="selectSkill">Skill</label>
                                            
                                        <select value="{{ $candidates->skill_id }}" name="skill_id" class="form-control">
                                        @foreach($skills as $id=>$skill)

                                            <option value="{{$id}}">{{$skill}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectProfession">Profession</label>
                                            
                                        <select value="{{ $candidates->profession_id }}" name="profession_id" class="form-control">
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