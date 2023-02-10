<?php
include_once('header.php');
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg3.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Sign Up</span></p>
            <h1 class="mb-0 bread">Sign Up</h1>
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

            <form method="post" action="#" enctype="multipart/form-data" class="bg-white p-5 contact-form">
              <h2>Welcome...!!!</h2>
              <p>Sign Up to Start...</p>
           
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                   <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" placeholder="Your Address" rows="4" data-error="Write your Address" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required data-error="Please enter your Mobile">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required data-error="Please enter your Password">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="Male" name="gender" value="male" checked>Male
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="Female" name="gender" value="female">Female
                      </label>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Language</label><br>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="english"> English
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="hindi">Hindi
                          </label>
                        </div>
                        
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="gujarati">Gujarati
                        </label>
                        </div>
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" id="Birthdate" class="form-control" name="birthdate" required data-error="Please enter your Birthdate">
                    </div>
                </div>

                <div class="col-md-12">
                    
                    <label>Image</label>
                  <input class="form-control" type="file"  name="image">
                  
            </div>

                <div class="col-md-12">
                    <div class="submit-button text-center">
                        <div class="form-group">
                    <button type="submit" class="btn btn-primary py-3 px-5" name="submit">Sign Up</button>
                      </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>  
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