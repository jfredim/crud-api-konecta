<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, 
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"];
$cantidad = $data["cantidad"];
require_once "dbconfig.php";

echo $query = "UPDATE tbl_productos   SET stock=stock-'".$cantidad."'   
                           WHERE id='".$id."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{ 
 echo json_encode(array("message" => "Producto Vendido Satisfactoriamente", "status" => true)); 
}
else
{ 
 echo json_encode(array("message" => "Product No pudo ser Vendido", "status" => false)); 
}

?>