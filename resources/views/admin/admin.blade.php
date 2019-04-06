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
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total vacancies</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$jobCount}}</h1>
                                        </div>
                                       
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total candidates</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$candCount}}</h1>
                                        </div>
                                       
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">New users</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$usersCount}}</h1>
                                        </div>
                                       
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent candidates</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                <th class="border-0">Name</th>
                                                <th class="border-0">Contact</th>
                                                <th class="border-0">Slug</th>
                                                <th class="border-0">Employment</th>
                                                <th class="border-0">Description</th>
                                                <th class="border-0">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($candidates as $candidate)
                                            <tr>
                                                <td>{{$candidate->id}}</td>
                                                <td>{{$candidate->name}}</td>
                                                <td>{{$candidate->contact}}</td>
                                                <td>{{$candidate->slug}}</td>
                                                <td>{{$candidate->emplyment_type}}</td>
                                                <td>{{$candidate->description}}</td>
                                                <td>{{$candidate->price}}</td>
                                              
                                               
                                            </tr>
                                           @endforeach
                                                    <tr>
                                                        <td colspan="9"><a href="{{route('list_all_candidates', app()->getLocale())}}" class="btn btn-outline-primary float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                    <h5 class="card-header">Top Performing Campaigns</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                
                                            </tr>
                                           @endforeach
                                                    <tr>
                                                        <td colspan="3">
                                                            <a href="{{route('list_all_users', app()->getLocale())}}" class="btn btn-outline-primary float-right">Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <section class="post-area section-gap">
				<div class="container">

					<div class="row justify-content-center d-flex">
					
						<div class="col-lg-8 post-list">
					
							@foreach ($jobs_recent as $job)
                                           
                                           
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">@foreach ($skills as $s)
										<li>
											<a href="#">
                                                {{$s->skill}}
                                               </a>
										</li> @endforeach
										
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{route('contact_vacancy', [$job->id, app()->getLocale()])}}">Contact</a></li>
											<li><a href="{{route('compare', [$job->id, app()->getLocale()])}}">See</a></li>
										</ul>
									</div>
									<p>
									{{$job->description}}
									</p>
									<h5>Job Nature: {{$job->employment_type}}</h5>
									<h5>Contact: {{$job->contact}}</h5>
									<h5>@foreach ($pas as $p)
                                                {{$p->profession}}
                                                @endforeach</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->name}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->price}}</p>
								</div>
							</div>
									@endforeach				
									<div class="text-center">{{ $jobs_recent->links('vendor.pagination.bootstrap-4') }}</div>							
						</div>
						
						

									

					</div>
				</div>	
			</section>
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
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
