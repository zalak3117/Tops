<?php
   session_start();
   //$add_task = array();

   if(isset($_SESSION["add_task"])){
         	
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="student_arr3.php" method="post">
	<?php
if(isset($_POST['submit'])){
  $add_task = $_POST['add_task'];

 // $add_task =  $_SESSION['add_task'] = $add_task;
   $_SESSION['add_task'] = array();
    foreach($add_task as $value){
           echo '<b>'.$value.'</b>';
        }

 }
 ?>
  
     <select>
        <?php
         $_SESSION['add_task'] = array();

          foreach($add_task as $value){
           echo "<option value='<?php echo $value; ?>'>$value</option>";
        }
        ?>
    </select><br>
<label>Add Tak</label>
  <input type="text" name="add_task[]">
  <br>
  <button type="submit">Submit</button>
	 <br>
   <br>
   <label>sub Tak</label>
  <input type="text" name="sub_task[]">
  <br>
  <button type="submit" name="submit">Submit</button>
	
	</form>
</body>
</html>

 


