<!DOCTYPE html>
<html lang="en">
  <head>
    <title>cosmetics - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{url('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/profile.css')}}">
	
  </head>
  
  <body class="goto-here">
	
  @include('sweetalert::alert')

		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">cosmetics</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{url('/shop')}}">Shop</a>              
              </div>
            </li>
	          <li class="nav-item"><a href="{{url('/about')}}" class="nav-link"><b>About</b></a></li>
	          <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
			  <li class="nav-item cta cta-colored"><a href="{{url('/cart')}}" class="nav-link"><span class="icon-shopping_cart">[0]</span></a></li>
			  @if(session()->has('cust_id'))
			  <li class="nav-item cta cta-colored"><a href="{{url('/wishlist')}}" class="nav-link"><span class="icon-heart">[0]</span></a></li>
			  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome {{session('name')}}..!</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{url('/profile1')}}">profile</a>
              	<a class="dropdown-item" href="{{url('/wishlist')}}">Wishlist</a>
                <a class="dropdown-item" href="{{url('/cart')}}">Cart</a>
                <a class="dropdown-item" href="{{url('/checkout')}}">Checkout</a>
				<a class="dropdown-item" href="logout1">Log Out</a>
              </div>
            </li>
			@else
						
			<li class="nav-item"><a href="login1" class="nav-link">Login</a></li>
						@endif

			  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->