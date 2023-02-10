<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="task3.php" method="post"> 
		<h1>sub task page</h1>
		<select name="task">
			<option value=""></option>
			<option value="brakfast">brakfast</option>
			<option value="lunch">lunch</option>
			<option value="dinner">dinner</option>
		</select> 
			<br>
<select name="subtask">
	<option value=""></option>
			<option value="tea">tea</option>
			<option value="vegtable">vegtable</option>
			<option value="full ddd">full ddd</option>
		</select> 

<button type="submit" name="submit">Submit</button>
</body>
</html>
<?php
session_destroy();

 ?>
