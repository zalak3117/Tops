<?php
  session_start();
   
//  if(isset($_POST['submit'])){
//   $name = $_POST['name'];
//   $email = $_POST['email'];

//  $name = $_SESSION['name'] = $name;
//  $email = $_SESSION['email'] = $email;
//  //$arr = $this->session->userdata('namme'); 

// // $_SESSION['name']   = $_GET['name']; 
//  //print_r($rd);
//  //print_r($rs);
// }
?>
  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="profile.php" method="post">
	<h1>Register Page</h1>
	<label>Name</label>
	<input type="hidden" name="reg_id" id="reg_id"><br>
	<input type="text" name="name" id="name" placeholder="enter your name"><br>
	<label>Email</label>
	<input type="email" name="email" id="email" placeholder="enter your email"><br>
    <label>password</label>
	<input type="password" name="password" id="password" placeholder="enter your password"><br>
<label>mobile</label>
	<input type="number" name="mobile" id="mobile" placeholder="enter your number"><br>
<label>gender</label>
	<input type="radio" name="gender" id="gender" value="male">male
	<input type="radio" name="gender" id="gender" value="female">female<br>
<label>language</label><br>
	<input type="checkbox" name="lag[]" id="hindi" value="hindi">hindi<br>
	<input type="checkbox" name="lag[]" id="gujarati" value="gujarati">gujarati<br>
	<input type="checkbox" name="lag[]" id="english" value="english">english<br>

	<button type="submit" name="submit" id="submit">Submit</button>

</form>
</body>
</html> 
<?php

//     include 'conn.php';

//  if(isset($_SESSION['name']) &&  ! empty($_SESSION['name'])) {
//     echo $_SESSION['name'] . '<br>';
//  }

// if(isset($_SESSION['email']) &&  ! empty($_SESSION['email'])) {
//     echo $_SESSION['email'] . '<br>';
//  }  
 
  session_destroy();
?>

