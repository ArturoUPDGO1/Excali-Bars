<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Trainers
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertar2($nombre, $instagram, $youtube_channel, $email, $foto)
	{
		$sql="INSERT INTO online_trainers (nombre, instagram, youtube_channel, email, foto)
		VALUES ('$nombre', '$instagram', '$youtube_channel', '$email', '$foto')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editar2($id_trainer, $nombre, $instagram, $youtube_channel, $email, $foto)
	{
		$sql="UPDATE online_trainers SET nombre='$nombre', instagram='$instagram', youtube_channel='$youtube_channel', email='$email', foto='$foto' WHERE id_trainer='$id_trainer'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar2 los datos de un registro a modificar
	public function mostrar2($id_trainer)
	{
		$sql="SELECT * FROM online_trainers WHERE id_trainer='$id_trainer'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar2 los registros
	public function listar2()
	{
		$sql="SELECT * FROM online_trainers";
		return ejecutarConsulta($sql);		
	}
}

?>