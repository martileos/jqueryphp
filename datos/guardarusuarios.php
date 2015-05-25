<?php
function guardarusuarios()
{
	$respuesta = false;
	$usuario   = "'".$_POST["usuario"]."'";
	$nombre    = "'".$_POST["nombre"]."'";
	$tipo      = "'".$_POST["tipo"]."'";
	$con=mysql_connect("localhost","root","");
	mysql_select_db("pw10am");
	// $consulta = "insert into usuarios(usuario,nombre,tipousuario) values(".$usuario.",".$nombre.",".$tipo.")";
	$consulta = sprintf("insert into usuarios(usuario,nombre,tipousuario)values(%s,%s,%s)",$usuario,$nombre,$tipo);
	mysql_query($consulta);
	if(mysql_affected_rows()>0)
	{
		$respuesta = true;
	}
	$salidaJSON = array('respuesta' => $respuesta);
	print json_encode($salidaJSON);
}
//Menú principal.
$opcion = $_POST["opcion"];
switch ($opcion) {
	case 'guardarusuarios':
		guardarusuarios();
		break;	
	default:
		# code...
		break;
}
?>