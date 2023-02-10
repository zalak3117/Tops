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
                        <h4 class="card-title">Edit Product</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                      <label>Category Name</label>
                      <select name="cate_id" class="form-control">
                        <option>Select Category</option>
                        <?php
                          foreach($category as $c)
                          {
                            if($c->cate_id==$fetch->cate_id)
                            {
                          ?>
                          <option value="<?php echo $c->cate_id ?>" selected>
                                  <?php echo $c->cate_name?>
                          </option>
                          <?php   
                          }
                          else
                      {
                    ?>
                      <option value="<?php echo $c->cate_id?>">
                              <?php echo $c->cate_name?>
                      </option>
                    <?php                   
                      }
                    }
                    ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="productname">Product Name</label>
                      <input type="text" class="form-control"  name="prod_name" placeholder="Product Name" value="<?php echo $fetch->prod_name?>">
                    </div>            
                     
                     <div class="form-group">
                      <label for="productmainprice">Product Main Price</label>
                      <input type="text" class="form-control" name="prod_mainprice" placeholder=" Product Main Price" value="<?php echo $fetch->prod_mainprice?>">
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Product Discounted Price</label>
                      <input type="text" class="form-control" name="prod_discount" placeholder="Product Discounted Price" value="<?php echo $fetch->prod_discount?>">
                    </div>

                     <div class="form-group">
                      <label for="productimage">Product Image</label>
                      <div class="custom-file col-xs-12">
                        <input type="file"class="form-control" name="prod_img"><br>
                        <div>
                        <img src="images/upload/product/<?php echo $fetch->prod_img?>" style="width:100px;height:100px" alt=""></div>
                        <label class="form-label" for="customFile"></label>
                      </div>
                     </div>

                    <div class="form-group">
                    <label for="productdiscription">Product Discription</label>
                    <textarea rows="5" class="form-control" name="prod_description"><?php echo $fetch->prod_description?>
                    </textarea> 
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