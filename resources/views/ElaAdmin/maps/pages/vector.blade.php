@extends('ElaAdmin.layouts.app')

@section('title','Vector')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
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
                            <li class="active">Vector map</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Algeria</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap2" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Argentina</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap3" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Brazil</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap4" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap5" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Germany</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap6" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Greece</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap7" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Russia</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap10" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tunasia</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap11" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Europe</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap12" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>USA</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap13" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Turkey</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap14" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Inactive Regions</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap15" class="vmap"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->



        </div>
        <!-- /# row -->


    </div><!-- .animated -->
</div><!-- .content -->

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
<script src="{!! asset('ElaAdmin/assets/js/vmap.sampledata.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.algeria.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.argentina.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.brazil.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.france.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.germany.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.greece.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.iran.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.iraq.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.russia.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.tunisia.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.europe.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.turkey.js"></script>
<script src="{!! asset('ElaAdmin/assets/js/init/vector-init.js') !!}"></script>

@endpush

@push('script')

@endpush
