<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="demo.css">
  <script src="https://cdn.jsdelivr.net/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.form/3.51/jquery.form.min.js"></script>
<script src="dist/jquery.validator.js?local=en"></script>
  <title></title>
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
           
            <div class="card card-primary">
              <div class="card-header"><h4>Registration</h4></div>

              <div class="card-body">
                <form method="POST" action="" data-validator-option="{timely:2, focusCleanup:true}">
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus data-rule="required; username;"
            data-rule-username="[/[\w\d]{4,30}/, 'Please enter 3-12 digits, letters, underscores']"
            data-tip="You can use letters, numbers and periods">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" data-rule="required; username;"
            data-rule-username="[/[\w\d]{4,30}/, 'Please enter 3-12 digits, letters, underscores']"
            data-tip="You can use letters, numbers and periods">
                    </div>
                  </div>

                    <div class="form-group ">
                      <label for="mobile">Mobile</label>
                      <input id="mobile" type="text" class="form-control" name="mobile" autofocus>
                    </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" data-rule="required;email" data-tip="Ex: example@abc.com">
                    <div class="invalid-feedback" >
                    </div>
                  </div>


                    <div class="form-group ">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" data-rule="Password: required; length(8~16)"
            data-tip="Please fill in at least eight characters">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" >Gender</label><br>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" data-rule="checked">Male
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                          </label>
                        </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Language</label><br>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check1">
                          <input type="checkbox" class="form-check-input" id="check1" name="language[]" value="English">English
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check2">
                          <input type="checkbox" class="form-check-input" id="check2" name="language[]" value="Hindi">Hindi
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check2">
                          <input type="checkbox" class="form-check-input" id="check2" name="language[]" value="Gujarati">Gujarati
                        </label>
                      </div>
                    </div>
                  </div>                   

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>