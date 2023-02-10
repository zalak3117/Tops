<?php
  session_start();
  
  if(isset($_SESSION["name"])){
  	
  	$name=$_SESSION["name"];
  
} else{
	echo "<script>window.location='login_sess.php';</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="login_sess.php" method="post">
	<label>Name:</label>
	<input type="text" name="name"><br>
	<label>email:</label>
	<input type="email" name="email"><br>
    <label>password:</label>
	<input type="password" name="password"><br>
   <label>mobile:</label>
	<input type="number" name="mobile"><br>
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<?php
   session_destroy();
?>