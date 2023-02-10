<?php
include_once('header.php');
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row my-2">
                      <div class="col-sm-6">
                        <h4 class="card-title">Add Doctor</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Add Doctor</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="doctorname">Doctor Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Name" name="doc_name" value="<?php echo $fetch->doc_name?>">
                    </div>            
                     
                    <div class="form-group">
                      <label for="doctorname">Doctor Speciality</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Speciality" name="doc_speciality" value="<?php echo $fetch->doc_speciality?>">
                    </div>  

                     <div class="form-group">
                      <label for="doctoremail">Doctor Email</label>
                      <input type="Email" class="form-control" id="exampleInputName1" placeholder="Doctor Email" name="doc_email" value="<?php echo $fetch->doc_email?>">
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Doctor Mobile</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Mobile" name="doc_mobile" value="<?php echo $fetch->doc_mobile?>">
                    </div>

                    <div class="form-group">
                    <label for="productdiscription">Doctor Address</label>
                    <textarea rows="5" class="form-control" id="productname" name="doc_address"><?php echo $fetch->doc_address?>
                    </textarea> 
                    </div>
                    
                    <div class="form-group">
                      <label for="productimage">Product Image</label>
                      <div class="custom-file col-xs-12">
                        <input type="file"class="form-control" name="doc_img"><br>
                        <div>
                        <img src="images/upload/doctor/<?php echo $fetch->doc_img?>" style="width:100px;height:100px" alt=""></div>
                        <label class="form-label" for="customFile"></label>
                      </div>
                     </div>

                    <button type="submit" class="btn btn-primary me-2" name="submit" >Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
                </div>
              </div>
            </div>           
          </div>
        </div>
        <!-- content-wrapper ends -->

<?php
include_once('footer.php');
?>