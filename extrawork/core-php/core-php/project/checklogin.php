<?php
session_start();
 include 'conn.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

 

  $sql = "SELECT * FROM admin WHERE email = '$email ' AND  password = '$password'";
  $rs = $conn->query($sql);
  if ($rd=$rs->fetch_assoc()) {
  	  $_SESSION['email'] = $email;
   $_SESSION['password'] = $password;

  	     header("Location:form.php");
  }


   else{

   	   header("Location:login.php");
   }
?>