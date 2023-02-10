<?php
session_start();

 if(isset($_SESSION["subtask"])){
         
 	
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
  $task = $_POST['task'];
  $subtask = $_POST['subtask'];

  
 $task = $_SESSION['task'] = $task;
 $subtask = $_SESSION['subtask'] = $subtask;


}
 ?>
<form action="#" method="post"> 
		<h1>sub task page</h1>
		<p>task : <?php echo $_SESSION['task'];?></p> 
	     <p>subtask : <?php echo $_SESSION['subtask'];?></p>
</body>
</html>
<?php
session_destroy();

 ?>
