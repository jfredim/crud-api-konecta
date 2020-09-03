<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, 
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"];
$nombre = $data["nombre"];
$precio = $data["precio"];
$peso = $data["peso"];
$categoria = $data["categoria"];
$stock = $data["stock"];
$fecha_creacion = $data["fecha_creacion"];

require_once "dbconfig.php";

echo $query = "UPDATE tbl_productos SET nombre= '".$nombre."' , 
                                 precio= '".$precio."' ,
                                 peso= '".$peso."' ,
                                 categoria= '".$categoria."' ,
                                 stock= '".$stock."' 
                           WHERE id='".$id."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{ 
 echo json_encode(array("message" => "Producto Actualizado Satisfactoriamente", "status" => true)); 
}
else
{ 
 echo json_encode(array("message" => "Product No pudo ser Actualizado", "status" => false)); 
}

?>