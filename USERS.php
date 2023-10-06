
<?php 
class users {
	public function actualizandoUsuarios($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "UPDATE usuario SET nombre = '$datos[1]',
								apellido = '$datos[2]',
								cuenta = '$datos[3]',
								password = '$datos[4]',
								email = '$datos[5]',
								tipo_usuario = '$datos[6]'
								where idusuario = '$datos[0]'";
		return mysqli_query($conexion,$sql);

	}


	public function obtenerDatosUsuarios($idusuario){
		$c = new conectar();
		$conexion=$c->conexion();


		$sql = "SELECT idusuario,
		nombre,
		apellido,
		cuenta,
		password,
		email,
		tipo_usuario
		from usuario
		where idusuario = '$idusuario'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);


		$datos=array("idusuario" => $ver[0],
			"nombre" =>$ver[1], 
			"apellido" =>$ver[2] ,
			"cuenta" =>$ver[3],
			"password" => $ver[4],
			"email" =>$ver[5],
			"tipo_usuario"=> $ver[6]);


		return $datos; 
	}


	public function eliminaUsuarios($idusuario){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "DELETE FROM usuario where idusuario = '$idusuario'";
		return mysqli_query($conexion,$sql);

	}
}
?>
