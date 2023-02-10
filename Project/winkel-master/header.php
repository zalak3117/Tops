<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Winkel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
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
	      <a class="navbar-brand" href="index">Pharma Care</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index" class="nav-link"><b>Home</b></a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Shop</b></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop">Shop</a>
                <a class="dropdown-item" href="product-single"><b>Single Product</b></a>
                <a class="dropdown-item" href="cart"><b>Cart</b></a>
                <a class="dropdown-item" href="checkout"><b>Checkout</b></a>
              </div>
            </li>
	          <li class="nav-item"><a href="about" class="nav-link"><b>About</b></a></li>
	          <li class="nav-item"><a href="blog" class="nav-link"><b>Blog</b></a></li>
	          <li class="nav-item"><a href="contact" class="nav-link"><b>Contact</b></a></li>
	          <li class="nav-item cta cta-colored"><a href="cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
	           <?php
                        if(isset($_SESSION['email']))
                        {
                        ?>
                                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Welcome <?php echo $_SESSION['name'] ?>...!!!</b></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="profile"><b>Profile</b></a>
              	<a class="dropdown-item" href="wishlist"><b>Wishlist</b></a>
                <a class="dropdown-item" href="cart"><b>Cart</b></a>
                <a class="dropdown-item" href="checkout"><b>Checkout</b></a>
                <a class="dropdown-item" href="signout"><b>Sign Out</b></a>
              </div>
            </li>	
                        <?php
                        }
                        else
                        {
                            ?>
                            <li class="nav-item"><a href="signin" class="nav-link"><b>Sign In</b></a></li>
	          								<li class="nav-item"><a href="signup" class="nav-link"><b>Sign Up</b></a></li>
                            <?php                        
                        }
                        ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
