@extends('ElaAdmin.layouts.app')

@section('title','Flot')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
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
                            <li><a href="#">Charts</a></li>
                            <li class="active">Float Chart</li>
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
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Real Chart</h4>
                        <div class="flot-container">
                            <div id="cpu-load" class="cpu-load"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Line Chart</h4>
                        <div class="flot-container">
                            <div id="flot-line" class="flot-line"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /# column -->
        </div><!-- /# row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Pie Chart</h4>
                        <div class="flot-container">
                            <div id="flot-pie" class="flot-pie-container"></div>
                        </div>
                    </div>
                </div><!-- /# card -->
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Line Chart</h4>
                        <div class="flot-container">
                            <div id="chart1" style="width:100%;height:275px;"></div>
                        </div>
                    </div>
                </div><!-- /# card -->
            </div><!-- /# column -->
        </div><!-- /# row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Bar Chart</h4>
                        <div class="flot-container">
                            <div id="flotBar" style="width:100%;height:275px;"></div>
                        </div>
                    </div>
                </div><!-- /# card -->
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Bar Chart</h4>
                        <div class="flot-container">
                            <div id="flotCurve" style="width:100%;height:275px;"></div>
                        </div>
                    </div>
                </div><!-- /# card -->
            </div><!-- /# column -->
        </div><!-- /# row -->



    </div><!-- .animated -->
</div>
<!-- /.content -->
@endsection

@push('js')

@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/excanvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.time.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.stack.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.resize.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.crosshair.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot.curvedlines@1.1.1/curvedLines.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.flot.tooltip@0.9.0/js/jquery.flot.tooltip.min.js"></script>
<script src="{!! asset('ElaAdmin/assets/js/init/flot-chart-init.js') !!}"></script>
@endpush
