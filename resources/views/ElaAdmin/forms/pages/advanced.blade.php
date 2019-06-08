@extends('ElaAdmin.layouts.app')

@section('title','Forms Advanced')

@push('css')
<link rel="stylesheet" href="{!! asset('ElaAdmin/assets/css/lib/chosen/chosen.min.css') !!}">
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Advanced</li>
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

            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masked Input</strong> <small> Small Text Mask</small>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">Date input</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 99/99/9999</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Phone input</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. (999) 999-9999</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Taxpayer Identification Numbers</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 99-9999999</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Social Security Number</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 999-99-9999</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Eye Script</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Credit Card Number</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 9999 9999 9999 9999</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Standard Select</strong>
                    </div>
                    <div class="card-body">

                        <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                            <option value="" label="default"></option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                        </select>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Multi Select</strong>
                    </div>
                    <div class="card-body">

                        <select data-placeholder="Choose a country..." multiple class="standardSelect">
                            <option value="" label="default"></option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                        </select>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Multi Select with Groups</strong>
                    </div>
                    <div class="card-body">

                        <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect"
                            tabindex="5">
                            <option value="" label="default"></option>
                            <optgroup label="NFC EAST">
                                <option>Dallas Cowboys</option>
                                <option>New York Giants</option>
                                <option>Philadelphia Eagles</option>
                                <option>Washington Redskins</option>
                            </optgroup>
                            <optgroup label="NFC NORTH">
                                <option>Chicago Bears</option>
                                <option>Detroit Lions</option>
                                <option>Green Bay Packers</option>
                                <option>Minnesota Vikings</option>
                            </optgroup>
                            <optgroup label="NFC SOUTH">
                                <option>Atlanta Falcons</option>
                                <option>Carolina Panthers</option>
                                <option>New Orleans Saints</option>
                                <option>Tampa Bay Buccaneers</option>
                            </optgroup>
                            <optgroup label="NFC WEST">
                                <option>Arizona Cardinals</option>
                                <option>St. Louis Rams</option>
                                <option>San Francisco 49ers</option>
                                <option>Seattle Seahawks</option>
                            </optgroup>
                            <optgroup label="AFC EAST">
                                <option>Buffalo Bills</option>
                                <option>Miami Dolphins</option>
                                <option>New England Patriots</option>
                                <option>New York Jets</option>
                            </optgroup>
                            <optgroup label="AFC NORTH">
                                <option>Baltimore Ravens</option>
                                <option>Cincinnati Bengals</option>
                                <option>Cleveland Browns</option>
                                <option>Pittsburgh Steelers</option>
                            </optgroup>
                            <optgroup label="AFC SOUTH">
                                <option>Houston Texans</option>
                                <option>Indianapolis Colts</option>
                                <option>Jacksonville Jaguars</option>
                                <option>Tennessee Titans</option>
                            </optgroup>
                            <optgroup label="AFC WEST">
                                <option>Denver Broncos</option>
                                <option>Kansas City Chiefs</option>
                                <option>Oakland Raiders</option>
                                <option>San Diego Chargers</option>
                            </optgroup>
                        </select>

                    </div>
                </div>

            </div>



        </div>


    </div><!-- .animated -->
</div><!-- .content -->

@endsection

@push('js')
<script src="{!! asset('ElaAdmin/assets/js/lib/chosen/chosen.jquery.min.js') !!}"></script>
@endpush

@push('script')
<script>
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });

</script>
@endpush
