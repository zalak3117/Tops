<?php
 //echo "this page is success";

  session_start();

if(isset($_POST['submit'])){
   $email = $_POST['email'];
    $password = $_POST['password'];

 $email = $_SESSION['email'] = $email;
 $password = $_SESSION['password'] = $password;

}

 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="success.php" method="post">
	
	<label>email:</label>
	<input type="email" name="email" value="<?php echo $_SESSION['email'];?>"><br>
    <label>password:</label>
	<input type="password" name="password" value="<?php echo $_SESSION['password'];?>"><br>
   <button type="submit" name="submit"><a href="register_sess.php">Submit</a></button>
</form>
</body>
</html>