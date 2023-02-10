<?php
 
  include 'conn.php';
  $sql = "SELECT * FROM student";
  $rs = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title> bootstrap table</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/boo0tstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class=" container">
		<h1><u>bootstrap table</u></h1>
		<br>
<button><a href="form.php"> form page</a></button>
<br>
<table  class=" table">
	<thead>
	<tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>password</th>
      <th>mobile_no</th>
      <th>gender</th>
      <th>city</th>
      <th>product</th>
      <th rowspan="10">View record</th>
      

	</tr>
	</thead>
	<tbody>
	<tr> 
		<?php
		while($rd= $rs->fetch_assoc()) {

			?>
	</tr>
      <tr>
      	<td><?php  echo $rd['id'] ?></td>
      	<td><?php  echo $rd['name'] ?></td>
      	<td><?php  echo $rd['email'] ?></td>
      	<td><?php  echo $rd['password'] ?></td>
       	<td><?php  echo $rd['mobile_no'] ?></td>
       	<td><?php  echo $rd['gender'] ?></td>
       	<td><?php  echo $rd['city'] ?></td>
       	<td><?php  echo $rd['product']?></td>
      <td><button><a href="edit.php?id=<?php echo $rd['id'] ?>"> edit</a></button></td>
      <td><button><a href="delete.php?id=<?php echo $rd['id'] ?>"> delete</a></button></td>
   	
      </tr>
  <tr>
  	<?php

  }
  ?>
  </tr>
</tbody>
</div>
</table>	
</body>
</html>