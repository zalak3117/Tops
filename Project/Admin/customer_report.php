<?php
include_once('header.php');
?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row my-2">
                      <div class="col-sm-6">
                        <h4 class="card-title">Product Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Product Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Customer Id.</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Language</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($customer_arr as $data)
                          {
                      ?>
                        <tr>
                          <td><?php echo $data->cust_id;?></td>
                          <td><?php echo $data->name;?></td>
                          <td><?php echo $data->address;?></td>
                          <td><?php echo $data->mobile;?></td>
                          <td><?php echo $data->email;?></td>
                          <td><?php echo $data->gender;?></td>
                          <td><?php echo $data->language;?></td>
                          <td><?php echo $data->image;?></td>
                        </tr>
                        <?php 
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
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