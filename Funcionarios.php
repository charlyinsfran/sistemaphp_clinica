<?php 

class funcionarios{
	public function agregarFuncionarios($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "INSERT INTO personal_administrativo(nombre,apellido,ci,telefono,direccion,sueldo_base,idcargo) 
		VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";

		return mysqli_query($conexion,$sql);

	}


	public function obtenerDatosFuncionarios($idpersonal_administrativo){
		$c = new conectar();
		$conexion=$c->conexion();


		$sql = "SELECT idpersonal_administrativo,
		nombre,
		apellido,
		ci,
		telefono,
		direccion,
		sueldo_base,
		idcargo
		from personal_administrativo
		where idpersonal_administrativo = '$idpersonal_administrativo'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);


		$datos=array("idpersonal_administrativo" => $ver[0],
			"nombre" =>$ver[1] , 
			"apellido" =>$ver[2] ,
			"ci" =>$ver[3],
			"telefono" => $ver[4],
			"direccion" =>$ver[5] ,
			"sueldo_base" => number_format($ver[6]),
			"idcargo" => $ver[7]);


		return $datos; 
	}

	public function actualizandoFuncionarios($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "UPDATE personal_administrativo
		set nombre='$datos[1]',
		apellido='$datos[2]',
		ci='$datos[3]',
		telefono='$datos[4]',
		direccion='$datos[5]',
		sueldo_base='$datos[6]',
		idcargo='$datos[7]'
		where idpersonal_administrativo = '$datos[0]'";


		return mysqli_query($conexion,$sql);

	}
	public function eliminaFuncionarios($idpersonal_administrativo){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "DELETE FROM personal_administrativo where idpersonal_administrativo = '$idpersonal_administrativo'";
		return mysqli_query($conexion,$sql);
	}
}


 ?>