<?php
// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);

$email = $data_arr["email"]; // value of price
$password = $data_arr["password"]; // value of pname


require_once "config.php";

$query = "SELECT * FROM register WHERE email = '$email'and password = '$password'";
$result=mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0)
{
	echo json_encode(array("message" => "Login Successfully", "status" => true));	
}
else
{
	echo json_encode(array("message" => "Login Failed ", "status" => false));	
}

?>