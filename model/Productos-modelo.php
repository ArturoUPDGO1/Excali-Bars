<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Producto
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertar1($nombre, $descripcion, $precio, $tipo, $foto)
	{
		$sql="INSERT INTO productos (nombre, descripcion, precio, tipo, foto)
		VALUES ('$nombre', '$descripcion', '$precio', '$tipo', '$foto')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editar1($id_prod, $nombre, $descripcion, $precio, $tipo, $foto)
	{
		$sql="UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', tipo='$tipo', foto='$foto' WHERE id_prod='$id_prod'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar1 los datos de un registro a modificar
	public function mostrar1($id_prod)
	{
		$sql="SELECT * FROM productos WHERE id_prod='$id_prod'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar1 los registros
	public function listar1()
	{
		$sql="SELECT * FROM productos";
		return ejecutarConsulta($sql);		
	}
}

?>