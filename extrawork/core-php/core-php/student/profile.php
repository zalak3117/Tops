

<?php
session_start();

 if(isset($_SESSION["name"])){
         
 	
 }else{
 	 header("location:profile.php");
 }
 

?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
   $mobile = $_POST['mobile'];
  $gender = $_POST['gender'];
 $lag = implode(',',$_POST['lag']);
  


 $name = $_SESSION['name'] = $name;
 $email = $_SESSION['email'] = $email;
$mobile = $_SESSION['mobile'] = $mobile;
 $gender = $_SESSION['gender'] = $gender;
$lag = $_SESSION['lag'] = $lag;

      //header("localtion:register.php");
   
 //print_r($name);
 }
	?>
	<form action="" method="post"> 
		<h1>profile page</h1>
		<p>Name : <?php echo $_SESSION['name'];?></p>
		<p>email : <?php echo $_SESSION['email'];?></p>
		<p>mobile : <?php echo $_SESSION['mobile'];?></p>
		<p>gender : <?php echo $_SESSION['gender'];?></p>
		<p>lag : <?php echo $_SESSION['lag'];?></p>
		<a href="register.php">save</a>
	
	</form>
</body>
</html>
 