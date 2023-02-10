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
                        <h4 class="card-title">Add Lab Teests</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Add Lab Tests</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="productname">Lab Test Name</label>
                      <input type="text" class="form-control"  name="labtest_name" placeholder="Lab Test Name">
                    </div>            
                     
                     <div class="form-group">
                      <label for="productmainprice">Lab Test Discription</label>
                      <textarea rows="5" class="form-control" name="labtest_discription">
                    </textarea> 
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Lab Test Main Price</label>
                      <input type="text" class="form-control" name="labtest_mainprice" placeholder="Lab Test Main Price">
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Lab Test Discounted Price</label>
                      <input type="text" class="form-control" name="labtest_disprice" placeholder="Lab Test Discounted Price">
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
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