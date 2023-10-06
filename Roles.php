<?php 

class roles{



	public function agreganuevo($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "INSERT INTO tipo_usuario(descripcion) values ('$datos[0]')";

		return mysqli_query($conexion,$sql);
	}


	public function actualizandoRoles($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "UPDATE tipo_usuario set descripcion = '$datos[1]' where idtipo_usuario = '$datos[0]'";

		echo mysqli_query($conexion,$sql);
	}

	public function eliminar_rol($idroles){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "DELETE FROM tipo_usuario where idtipo_usuario = '$idroles'";
		return mysqli_query($conexion,$sql);
	}
}




 ?>