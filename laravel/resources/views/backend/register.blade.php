@extends('backend.layout.main1')

@section('main_section')

<body class="bg-silver-300">
@include('sweetalert::alert')
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">Cosmetic Admin</a>
        </div>
        <form id="register-form" action="{{url('/register')}}" method="post">
            @csrf
            <h2 class="login-title">Sign Up</h2>
            
                
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                        @error('name')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                    </div>
                
    
            
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">
                @error('email')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password" value="{{old('password')}}">
                @error('password')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
            </div>
            
           
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Sign up</button>
            </div>
            
            <div class="text-center">Already a member?
                <a class="color-blue" href="login">Login here</a>
            </div>
        </form>
    </div>
    
@endsection