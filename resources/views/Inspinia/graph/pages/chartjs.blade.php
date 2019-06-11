@extends('Inspinia.layouts.app')

@section('title','ChartJS')


@push('plugin-css')
{{-- your script here --}}
@endpush


@push('css')
{{-- your script here --}}
@endpush


@push('style')
{{-- your script here --}}
@endpush



@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Chart.js</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Graphs</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Chart</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Line Chart Example
                        <small>With custom colors.</small>
                    </h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="lineChart" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Bar Chart Example</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="barChart" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Polar Area</h5>

                </div>
                <div class="ibox-content">
                    <div class="text-center">
                        <canvas id="polarChart" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Pie </h5>

                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="doughnutChart" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Radar Chart Example</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@push('plugin-js')
@include('Inspinia.layouts.assets.js.custom')
<!-- ChartJS-->
<script src="{!! asset('Inspinia/js/plugins/chartJs/Chart.min.js') !!}"></script>
<script src="{!! asset('Inspinia/js/demo/chartjs-demo.js') !!}"></script>
@endpush


@push('js')
{{-- your script here --}}
@endpush


@push('script')
{{-- your script here --}}
@endpush
