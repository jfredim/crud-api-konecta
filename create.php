<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, 
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data["nombre"];
$precio = $data["precio"];
$peso = $data["peso"];
$categoria = $data["categoria"];
$stock = $data["stock"];
$fecha_creacion = $data["fecha_creacion"];

require_once "dbconfig.php";

$query = "INSERT INTO tbl_productos(nombre, precio,peso,categoria,stock,fecha_creacion,fecha_ult_venta) 
                       VALUES ('".$nombre."', '".$precio."', '".$peso."', '".$categoria."', '".$stock."', '".$fecha_creacion."', '')";

if(mysqli_query($conn, $query) or die("Insert Query Failed"))
{
 echo json_encode(array("message" => "Producto Creado Satisfactoriamente", "status" => true)); 
}
else
{
 echo json_encode(array("message" => "Producto No pudo ser Creado", "status" => false)); 
}

?>