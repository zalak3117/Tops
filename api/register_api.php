<?php
// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);

$name = $data_arr["name"]; 
$email = $data_arr["email"]; 
$password = $data_arr["password"]; 


require_once "config.php";

$query = "INSERT INTO register(name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

if(mysqli_query($conn, $query))
{
	echo json_encode(array("message" => "Registration Successfully", "status" => true));	
}
else
{
	echo json_encode(array("message" => "Registration Failed ", "status" => false));	
}

?>