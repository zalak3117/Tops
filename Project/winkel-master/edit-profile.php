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
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required data-error="Please enter your name" value="<?php echo $fetch->name?>">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                   <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" placeholder="Your Address" rows="4" data-error="Write your Address" required ><?php echo $fetch->address?></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required data-error="Please enter your Mobile" value="<?php echo $fetch->mobile?>">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email" value="<?php echo $fetch->email?>" readonly>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="Male" name="gender" value="male" <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="male")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Male
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="Female" name="gender" value="female"<?php 
                                            $gender=$fetch->gender;
                                            if($gender=="female")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Female
                      </label>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Language</label><br>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="english" <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("english",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>> English
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="hindi" <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("hindi",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Hindi
                          </label>
                        </div>
                        
                        <div class="form-check-inline">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input"  name="language[]" value="gujarati" <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("gujarati",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Gujarati
                        </label>
                        </div>
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" id="birthdate" class="form-control" name="birthdate" required data-error="Please enter your Birthdate" value="<?php echo $fetch->birthdate?>"><?php echo $fetch->birthdate?>
                    </div>
                </div>

                <div class="col-md-12">
                    
                    <label>Image</label>
                  <input class="form-control" type="file"  name="image">
                  <img src="images/upload/<?php echo $fetch->image?>" style="width:100px;height:100px" alt="">
                  
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