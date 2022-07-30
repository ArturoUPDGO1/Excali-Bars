<?php 
session_start();
require_once "../model/Productos-modelo.php";

$producto=new Producto();

$id_prod=isset($_POST["id_prod"])? limpiarCadena($_POST["id_prod"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$precio=isset($_POST["precio"])? limpiarCadena($_POST["precio"]):"";
$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";
$foto=isset($_POST["foto"])? limpiarCadena($_POST["foto"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar1':

        
		if (!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name']))
		{
			$foto=$_POST["ia5"];
		}
		else 
		{
			$ext = explode(".", $_FILES["foto"]["name"]);
			if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png")
			{
				$foto = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["foto"]["tmp_name"], "../public/images/products/" . $foto);
			}
		}
		
		if (empty($id_prod)){
			$rspta=$producto->insertar1($nombre, $descripcion, $precio, $tipo, $foto);
			echo $rspta ? "Producto registrado" : "Producto no se pudo registrar";
		}
		else {
			$rspta=$producto->editar1($id_prod, $nombre, $descripcion, $precio, $tipo, $foto );
			echo $rspta ? "Producto actualizado" : "Producto no se pudo actualizar";
		}
	break;

	case 'mostrar1':
		$rspta=$producto->mostrar1($id_prod);
 		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	break;

	case 'listar1':
		$rspta=$producto->listar1();
 		//Vamos a declarar un array
		$data= Array();

		while ($reg=$rspta->fetch_object()){
			$data[]=array(
				"0"=>'<button class="btn btn-warning" onclick="mostrar1('.$reg->id_prod.')"><i class="fa fa-edit"></i></button>',
				//"0"=>$reg->id_prod,
				"1"=>$reg->nombre,
				"2"=>$reg->descripcion,
				"3"=>$reg->precio,
				"4"=>$reg->tipo,
				"5"=>"<img src='../public/images/products/".$reg->foto."' height='100px' width='100px'>",
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