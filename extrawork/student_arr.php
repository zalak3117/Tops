<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="student_arr2.php" method="post">
	<label>Add Tak</label>
	<input type="text" name="add_task[]">


	<br>
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<?php 
 session_destroy();
 ?>

<!--   ---- -->
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
    <select>
        <option selected="selected">--Select--</option>
        <?php
       // foreach($add_task as $value){
         //   echo "<option value='<?php echo $value; ?>'>$value</option>";
        }
        ?>
    </select>
</form>
</body>
</html>
 -->