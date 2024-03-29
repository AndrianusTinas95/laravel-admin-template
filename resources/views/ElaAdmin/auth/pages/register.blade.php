@extends('ElaAdmin.layouts.auth')

@section('title','Register')

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
                        <label>User Name</label>
                        <input type="email" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Agree the terms and policy
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    <div class="social-login-content">
                        <div class="social-button">
                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i
                                    class="ti-facebook"></i>Register with facebook</button>
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i
                                    class="ti-twitter"></i>Register with twitter</button>
                        </div>
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="#"> Sign in</a></p>
                    </div>
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
