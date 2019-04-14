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
                                <h2 class="pageheader-title"></h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('header.dashboard')</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>
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
                                        <h5 class="text-muted">@lang('header.total_vacancies')</h5>
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
                                        <h5 class="text-muted">@lang('header.total_candidates')</h5>
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
                                        <h5 class="text-muted">@lang('header.new_users')</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$usersCount}}</h1>
                                        </div>
                                       
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Revenue</h5>
                            <div class="card-body">
                                <canvas id="revenue" width="400" height="150"></canvas>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                        <h4> Today's Earning: $2,800.30</h4>
                                        <p>Suspendisse potenti. Done csit amet rutrum.
                                        </p>
                                    </div>
                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                        <h2 class="font-weight-normal mb-3"><span>$48,325</span>                                                    </h2>
                                        <div class="mb-0 mt-3 legend-item">
                                            <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">@lang('header.freelancers')</span></div>
                                    </div>
                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                        <h2 class="font-weight-normal mb-3">

                                                        <span>$59,567</span>
                                                    </h2>
                                        <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">@lang('header.jobs')</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end reveune  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total sale  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Total Sale</h5>
                            <div class="card-body">
                                <canvas id="total-sale" width="220" height="155"></canvas>
                                <div class="chart-widget-list">
                                    <p>
                                        <span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text"> Direct</span>
                                        <span class="float-right">$300.56</span>
                                    </p>
                                    <p>
                                        <span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">Affilliate</span>
                                        <span class="float-right">$135.18</span>
                                    </p>
                                    <p>
                                        <span class="fa-xs text-brand mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Sponsored</span>
                                        <span class="float-right">$48.96</span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="fa-xs text-info mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text"> E-mail</span>
                                        <span class="float-right">$154.02</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">@lang('header.recent_candidates')</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                <th class="border-0">@lang('header.name')</th>
                                                <th class="border-0">@lang('header.contact')</th>
                                                <th class="border-0">@lang('header.slug')</th>
                                                <th class="border-0">@lang('header.employment_type')</th>
                                                <th class="border-0">@lang('header.description')</th>
                                                <th class="border-0">@lang('header.price')</th>
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
                                                <!-- * -->
                                                <td>{{ substr(strip_tags($candidate->description), 0,250)}}{{ strlen(strip_tags($candidate->description)) > 250 ? '...' : ""}}</td>
                                                <td>{{$candidate->price}}</td>
                                              
                                               
                                            </tr>
                                           @endforeach
                                                    <tr>
                                                        <td colspan="9"><a href="{{route('list_all_candidates', app()->getLocale())}}" class="btn btn-outline-primary float-right">@lang('header.details')</a></td>
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
                                    <h5 class="card-header">@lang('header.users')</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                        <th class="border-0">@lang('header.name')</th>
                                                        <th class="border-0">@lang('header.contact_email')</th>
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
                                                            <a href="{{route('list_all_users', app()->getLocale())}}" class="btn btn-outline-primary float-right">@lang('header.details')</a>
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
									<ul class="tags">
										<li>
											<a href="#">
                                                {{$job->skill}}
                                               </a>
										</li> 
										
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$job->title}}</h4></a>
											<h6>{{$job->slug}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{route('contact_vacancy', [app()->getLocale(), $job->id])}}">@lang('header.contact')</a></li>
											<li><a href="{{route('show_job', [app()->getLocale(),$job->id])}}">@lang('header.see')</a></li>
										</ul>
									</div>
									<p>
									{!!$job->description!!}
									</p>
									<h5>@lang('header.employment_type'): {{$job->employment_type}}</h5>
									<h5>@lang('header.contact'): {{$job->contact}}</h5>
									<h5>
                                                {{$job->profession}}
                                                </h5>
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
         
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
 @include('layouts.footer')

@endsection
