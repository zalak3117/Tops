<?php
if(isset($_SESSION["login_sess"])) 
{
    header("location:change_password.php"); 
}
 
  session_start();
if(isset($_POST['submit'])){
	$name = $_POST['name'];
   $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

$name = $_SESSION['name'] = $name;
 $email = $_SESSION['email'] = $email;
 $password = $_SESSION['password'] = $password;
 $mobile = $_SESSION['mobile'] = $mobile;


}

if(isset($_SESSION["name"])){

 	
 	// header("location:register_sess.php");

 }else{
 	echo "<script>window.location='register_sess.php';</script>";
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
   <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<!-- <?php
 if(isset($_SESSION['name']) &&  ! empty($_SESSION['name'])) {
    echo $_SESSION['name'] . '<br>';
 }

if(isset($_SESSION['email']) &&  ! empty($_SESSION['email'])) {
    echo $_SESSION['email'] . '<br>';
 }  

if(isset($_SESSION['password']) &&  ! empty($_SESSION['password'])) {
    echo $_SESSION['password'] . '<br>';
 } 

 if(isset($_SESSION['mobile']) &&  ! empty($_SESSION['mobile'])) {
    echo $_SESSION['mobile'] . '<br>';
 } 

?> -->