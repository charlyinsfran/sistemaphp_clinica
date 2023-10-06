<?php 
class ciudades{



	public function agregaCiudad($datos)
	{
		$c = new conectar();
		$conexion=$c->conexion();
		$query = "SELECT nombre from ciudad where nombre = '$datos[0]'";

		$result = mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result) > 0){
			alert("Ciudad Duplicada");
			header("location:../vistas/ciudades.php");

		}
else{
		$sql = "call abm_ciudad(1,' ','$datos[0]')";

		return mysqli_query($conexion,$sql);
	}

	}


	public function actualizarCiudad($datos){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_ciudad(2,'$datos[0]','$datos[1]')";

		echo mysqli_query($conexion,$sql);
	
	}

	public function eliminaCiudad($idciudad){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "call abm_ciudad(3,'$idciudad','')";
		return mysqli_query($conexion,$sql);
	}
}


?>