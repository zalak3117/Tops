<?php
 
  include 'conn.php';
  $id = $_GET['id'];

  $sql = "DELETE  FROM  student WHERE id = '$id'";
  $rs = $conn->query($sql); 
    
    
   header("Location: index.php");


?>