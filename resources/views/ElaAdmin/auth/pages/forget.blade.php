@extends('ElaAdmin.layouts.auth')

@section('title','Forger')

@push('css')
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

@endpush

@push('style')

@endpush

@section('content')

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush

@push('script')

@endpush
