<?php
	require_once('../libs/conex.php');
	require_once('../libs/ciudades.lib.php');

// CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
// cors fin

$link=conectar();
if(!isset($_GET['id']))
{
	$res=mostrarCiudades($link);
}
else
{
	$res=mostrarCiudad($link,$_GET['id']);
}
$dbdata = array();

while ( $row = $res->fetch_assoc())  {
	$dbdata[]=$row;
  }
//print_r($dbdata);
header("Content-Type: application/json; charset=UTF-8");
 echo json_encode($dbdata);
?>
