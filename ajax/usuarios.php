<?php 
session_start();
require_once "../model/Usuarios-modelo.php";

$usuario=new Usuario();

$id_user=isset($_POST["id_user"])? limpiarCadena($_POST["id_user"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$username=isset($_POST["username"])? limpiarCadena($_POST["username"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$password=isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_user)){
			$rspta=$usuario->insertar($nombre, $username, $email, $password);
			echo $rspta ? "Usuario registrado" : "Usuario no se pudo registrar";
		}
		else {
			$rspta=$usuario->editar($id_user,$nombre, $username, $email, $password);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrar':
		$rspta=$usuario->mostrar($id_user);
 		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	break;

	case 'listar':
		$rspta=$usuario->listar();
 		//Vamos a declarar un array
		$data= Array();

		while ($reg=$rspta->fetch_object()){
			$data[]=array(
				"0"=>$reg->id_user,
				"1"=>$reg->nombre,
				"2"=>$reg->username,
				"3"=>$reg->email,
				"4"=>$reg->password,
				"5"=>$reg->tipo
				);
			}
			$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
			"aaData"=>$data);
			echo json_encode($results);

	break;
}
?>