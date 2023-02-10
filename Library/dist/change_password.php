<?php

include_once('header1.php');

?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/lms.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Change Password</h4></div>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <input type="hidden"  name="admin_id">
                    
                    <label for="Password">Old Password</label>
                    <input id="Password" type="Password" class="form-control" name="old_password" tabindex="1" required autofocus>
                    
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Enter New Password</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="new_password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Confirm New Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="con_password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="change_password">
                      Change Password
                    </button>
                  </div>
                </form>           

              </div>
            </div>
            
            <div class="simple-footer">
              Copyright &copy; Library 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>