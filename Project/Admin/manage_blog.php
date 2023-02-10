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
                        <h4 class="card-title">Blog Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Blog Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Blog Id.</th>
                          <th>Blog Title</th>
                          <th>Blog Image</th>
                          <th>Blog Discription</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            foreach($blog_arr as $data)
                          {
                          ?>
                        <tr>
                          <td><?php echo $data->blog_id;?></td>
                          <td><?php echo $data->title;?></td>
                          <td><?php echo $data->image;?></td>
                          <td><?php echo $data->description;?></td>
                          
                          <td>
                            <a href="edit_blog?btnblog_id=<?php echo $data->blog_id?>" type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit" value="submit"></i>Edit</a> &nbsp

                            <a href="delete?delblog_id=<?php echo $data->blog_id?>" type="button" class="btn btn-outline-danger btn-sm">
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