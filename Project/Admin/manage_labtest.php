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
                        <h4 class="card-title">Labtest Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Labtest Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Lab Test Id.</th>
                          <th>Lab Test Name</th>
                          <th>Lab Test Discription</th>
                          <th>Lab Test Main Price</th>
                          <th>Lab Test Discounted Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php
                          foreach($labtest_arr as $data)
                          {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $data->labtest_id;?></td>
                          <td><?php echo $data->labtest_name;?></td>
                          <td><?php echo $data->labtest_discription;?></td>
                          <td><?php echo $data->labtest_mainprice;?></td>
                          <td><?php echo $data->labtest_disprice;?></td>
                          <td>
                            <a href="edit_labtest?btnlabtest_id=<?php echo $data->labtest_id?>" type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit" value="submit"></i>Edit</a> &nbsp

                            <a href="delete?dellabtest_id=<?php echo $data->labtest_id?>" type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</a>
                          </td>
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