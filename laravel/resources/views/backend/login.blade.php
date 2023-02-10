
@extends('backend.layout.main1')

@section('main_section')

<body class="bg-silver-300">
@include('sweetalert::alert')
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">Cosmetic Admin</a>
        </div>
        <form id="login-form" action="{{url('/login')}}" method="post">
            @csrf
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">
                    @error('email')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}">
                    @error('password')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.html">Forgot password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
            
            <div class="text-center">Not a member?
                <a class="color-blue" href="register">Create accaunt</a>
            </div>
        </form>
    </div>
    @endsection