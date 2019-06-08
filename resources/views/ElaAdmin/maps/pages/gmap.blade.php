@extends('ElaAdmin.layouts.app')

@section('title','Gmap')
@push('css')
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

@endpush

@push('style')

@endpush

@section('content')

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
                            <li><a href="#">Map</a></li>
                            <li class="active">Gmap</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Map</h4>
                    </div>
                    <div class="gmap_unix card-body">
                        <div class="map" id="basic-map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Fusion Tables layers</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-2" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Geometry overlays</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-3"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Elevation locations</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-4" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Geolocation</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-5"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>KML layers</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-6" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Layers</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-7"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Map events</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-8"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->




    </div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>

@endsection

@push('js')
<!-- Gmaps -->
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM"></script>

<script src="{!! asset('ElaAdmin/assets/js/lib/gmap/gmaps.js') !!}"></script>
<script src="{!! asset('ElaAdmin/assets/js/init/gmap-init.js') !!}"></script>
@endpush

@push('script')

@endpush
