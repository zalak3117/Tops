<?php
// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);

$name = $data_arr["name"]; 
$rollno = $data_arr["rollno"]; 
$email = $data_arr["email"]; 
$age = $data_arr["age"]; 


require_once "config.php";

$query = "INSERT INTO student(name, rollno, email, age) VALUES ('{$name}', '{$rollno}', '{$email}', '{$age}')";

if(mysqli_query($conn, $query))
{
	echo json_encode(array("message" => "Insert Successfully", "status" => true));	
}
else
{
	echo json_encode(array("message" => "Insert Failed ", "status" => false));	
}

?>