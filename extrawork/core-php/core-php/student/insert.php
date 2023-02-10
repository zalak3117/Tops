<?php
    include 'conn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
     $address = $_POST['address'];
      $gender = $_POST['gender'];
       $mobile = $_POST['mobile'];

$sql = "INSERT INTO register(name,email,address,gender,mobile)VALUES('$name','$email','$address','$gender','$mobile')";
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






