<?php 
session_start();
require_once "../model/Trainers-modelo.php";

$trainer=new Trainers();

$id_trainer=isset($_POST["id_trainer"])? limpiarCadena($_POST["id_trainer"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$instagram=isset($_POST["instagram"])? limpiarCadena($_POST["instagram"]):"";
$youtube_channel=isset($_POST["youtube_channel"])? limpiarCadena($_POST["youtube_channel"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$foto=isset($_POST["foto"])? limpiarCadena($_POST["foto"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar2':

        
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
				move_uploaded_file($_FILES["foto"]["tmp_name"], "../public/images/team/" . $foto);
			}
		}
		
		if (empty($id_trainer)){
			$rspta=$trainer->insertar2($nombre, $instagram, $youtube_channel, $email, $foto);
			echo $rspta ? "Entrenador registrado" : "Entrenador no se pudo registrar";
		}
		else {
			$rspta=$trainer->editar2($id_trainer,$nombre, $instagram, $youtube_channel, $email, $foto);
			echo $rspta ? "Entrenador actualizado" : "Entrenador no se pudo actualizar";
		}
	break;

	case 'mostrar2':
		$rspta=$trainer->mostrar2($id_trainer);
 		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	break;

	case 'listar2':
		$rspta=$trainer->listar2();
 		//Vamos a declarar un array
		$data= Array();

		while ($reg=$rspta->fetch_object()){
			$data[]=array(
				"0"=>'<button class="btn btn-warning" onclick="mostrar2('.$reg->id_trainer.')"><i class="fa fa-edit"></i></button>',
				"1"=>$reg->nombre,
				"2"=>$reg->instagram,
				"3"=>$reg->youtube_channel,
				"4"=>$reg->email,
				"5"=>"<img src='../public/images/team/".$reg->foto."' height='100px' width='100px'>",
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