<?php 


class cargos{

	public function agregaCargos($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$query = "SELECT descripcion from cargo where descripcion = '$datos[0]'";

		$result = mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result) > 0){
			alert("Ciudad Duplicada");
			header("location:../vistas/");

		}
else{

		$sql = "call abm_cargo(1,'','$datos[0]')";

		return mysqli_query($conexion,$sql);

	}
}


	public function actualizaCargos($datos){
		$c = new conectar();
		$conexion=$c->conexion();


		$sql = "call abm_cargo(2,'$datos[0]','$datos[1]')";

		echo mysqli_query($conexion,$sql);
	

	}

	public function eliminaCargo($idcargo){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = " call abm_cargo(3,'$idcargo','')";

		return mysqli_query($conexion,$sql);
	}





}


?>