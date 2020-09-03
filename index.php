<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_productos";

$result = mysqli_query($conn, $query) or die("Select Query Failed.");

$count = mysqli_num_rows($result);

if ($count > 0)
{ 
 $row = mysqli_fetch_all($result);
 
 echo json_encode($row);
}
else
{ 
 echo json_encode(array("message" => "No se encontraron productos.", "status" => false));
}

?>