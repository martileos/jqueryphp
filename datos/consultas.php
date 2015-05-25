<?php
function consultas()
{
	$respuesta = false;
	$conexion  = mysql_connect("localhost","root","");
	mysql_select_db("pw10am");
	$consulta  = sprintf("select * from usuarios");
	$resultado = mysql_query($consulta);
	$renglones = "<tr>";
	$renglones.= "<th>No.</th><th>Usuario</th><th>Nombre</th><th>Tipo</th><th>Acción</th>";
	$renglones.= "</tr>";
	$cuenta    = 0;
	if(mysql_num_rows($resultado)>0)
	{
		$respuesta = true;
		while($registro = mysql_fetch_array($resultado))
		{
			$cuenta    = $cuenta+1;
			$renglones.= "<tr>";
			$renglones.= "<td>".$cuenta."</td>";
			$renglones.= "<td>".$registro["usuario"]."</td>";
			$renglones.= "<td>".$registro["nombre"]."</td>";
			$renglones.= "<td>".$registro["tipousuario"]."</td>";
			$renglones.= "<td>";
			$renglones.= "<button value='".$registro["usuario"]."' class='btnTablaEliminar btn btn-danger'>";
			$renglones.= "Eliminar";
			$renglones.= "</button>";
			$renglones.= "</td>";
			$renglones.= "</tr>";
		}
	}
	else
	{
		$renglones.= "<tr><td colspan=4>Sin usuarios</td></tr>";
	}
	$salidaJSON = array('respuesta' => $respuesta, 
						'renglones' => $renglones);
	print json_encode($salidaJSON);
}

$opcion = $_POST["opcion"];
switch ($opcion) {
	case 'consultas':
		consultas();
		break;
	
	default:
		# code...
		break;
}
?>