@extends('ElaAdmin.layouts.app')

@section('title','Home')

@push('css')

@endpush

@push('style')

@endpush

@section('content')
<!-- Breadcrumbs-->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Widgets</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.breadcrumbs-->
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">$<span class="count">23569</span></div>
                                    <div class="stat-heading">Revenue</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">3435</span></div>
                                    <div class="stat-heading">Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">349</span></div>
                                    <div class="stat-heading">Templates</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">2986</span></div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="currency float-left mr-1">$</span>
                                <span class="count">23569</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Revenue</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-6">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count float-left">85</span>
                                <span>%</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Dummy text here</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <div id="flotBar1" class="flotBar1"></div>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">6569</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Total clients</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-users"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">1490</span>
                            </h3>
                            <p class="text-light mt-1 m-0">New users</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <div id="flotLine1" class="flotLine1"></div>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->



            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="ti-server text-muted"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading">Database</div>
                                    <div class="stat-text">Total: 765</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="ti-user text-muted"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading">Users</div>
                                    <div class="stat-text">Total: 24720</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="ti-stats-up text-muted"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading">Daily Sales</div>
                                    <div class="stat-text">Total: $76,58,714</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="ti-pulse text-muted"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading">Bandwidth</div>
                                    <div class="stat-text">Total: 4TB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Customer</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Referrals</div>
                                <div class="stat-digit">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-sm-12 mb-4">
                <div class="card-group">
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-users"></i>
                            </div>

                            <div class="h4 mb-0">
                                <span class="count">87500</span>
                            </div>

                            <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">385</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-cart-plus"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">1238</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">28</span>%
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="h4 mb-0">5:34:11</div>
                            <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">972</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1"
                                style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
@endsection

@push('js')
<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
<!--Flot Chart-->
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
<!-- local -->
<script src="{!! asset('ElaAdmin/assets/js/widgets.js') !!}"></script>
@endpush

@push('script')

@endpush
