<?php
 include 'conn.php';
 $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $mobile_no = $_POST["mobile_no"];
  $gender = $_POST["gender"];
  $city = $_POST["city"];
$checkbox = implode(',', $_POST['product']);
  // print_r($checkbox);

  $sql = "INSERT INTO student(name,email,password,mobile_no,gender,city,product)VALUES('$name','$email', '$password','$mobile_no','$gender','$city','$checkbox')";
  //print_r($sql);
  // $rs = $conn->query($sql);
  if ($conn->query($sql) ===TRUE) {
  	
  	

 	 	    echo "suceesss....." ;
  }
  else {

  	   echo "failed...";
  }


 	


// id na male echo

?>