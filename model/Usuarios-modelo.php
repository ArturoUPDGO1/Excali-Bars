<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertar($nombre, $username, $email, $password, $tipo)
	{
		$sql="INSERT INTO usuarios (nombre, username, email, password, tipo)
		VALUES ('$nombre', '$username', '$email', '$tipo', '$password')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editar($id_user, $nombre, $username, $email, $password, $tipo)
	{
		$sql="UPDATE usuarios SET nombre='$nombre', username='$username', email='$email', password='$password', tipo='$tipo',  WHERE id_user='$id_user'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_user)
	{
		$sql="SELECT * FROM usuarios WHERE id_user='$id_user'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM usuarios";
		return ejecutarConsulta($sql);		
	}
}

?>