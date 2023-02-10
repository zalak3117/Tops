<?php

  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $mobile_no = $_POST["mobile_no"];
  $gender = $_POST["gender"];
  $city = $_POST["city"];
  $checkbox = implode(',',$_POST['product']);
  print_r($checkbox);

  
 include 'conn.php';

  $sql = "UPDATE student SET name = '$name', email = '$email', password = '$password', mobile_no = '$mobile_no', gender = '$gender', city = '$city', product ='$checkbox' WHERE id = '$id'" ;
  $rs = $conn->query($sql);


  if ($conn->query($sql) ===TRUE) {
  	?>
  	<script type ='text/javascript'>alert('submitted successful!');window.location.href = 'index.php'; //Will take you to Google.
</script><?php


  	 // header('Location:index.php');
 }
 else{

      
        // echo "<script type='text/javascript'>alert('failed!')</script>";
 	  }






?>