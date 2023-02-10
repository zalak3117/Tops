<?php
if(isset($_SESSION['email']))
{
    echo "<script>
        window.location='index';
        </script>";
}
include_once('header.php');
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg3.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Sign In</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div class="row block-9">
          <div class="col-md-2 order-md-last d-flex">
          </div>
          <div class="col-md-8 order-md-last d-flex">

            <form action="#" class="bg-white p-5 contact-form" method="POST">
              <h2>Welcome...!!!</h2>
              <p>Sign In to continue...</p>
           
              <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Your Email" id="email" class="form-control" required data-error="Please enter your email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];}?>">
                                        <div class="help-block with-errors" ></div>
                                    </div>
                                </div>
              <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required data-error="Please enter your Password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <input type="checkbox" name="rem" class="p-4"> Remember Me
                                </div>
                                </div>

            <div class="col-md-12">
                    <div class="submit-button text-center">
                        <div class="form-group">
                    <button type="submit" class="btn btn-primary py-3 px-5" name="login">Sign In</button>
                      </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>  
                </div>  
                                                </form>
          
          </div>

          
        </div>
      </div>
    </section> 
    <?php
    include_once('footer.php');
  ?>