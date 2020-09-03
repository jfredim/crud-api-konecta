<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");


$data = json_decode(file_get_contents("php://input"), true);

$buscar = $data["buscar"];

require_once "dbconfig.php";

echo $query = "SELECT * FROM tbl_productos WHERE nombre LIKE '%".$buscar."%' ";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{ 
 $row = mysqli_fetch_all ($result);
 
 echo json_encode($row);
}
else
{ 
 echo json_encode(array("message" => "No Se Encontro el Producto.", "status" => false));
}

?>