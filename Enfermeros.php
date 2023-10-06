<?php 				

class enfermeros{

	public function agregaEnfermeros($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$query = "SELECT ci from enfermeros where ci = '$datos[2]'";

		$result = mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result) > 0){
			alert("CI DUPLICADA");
			header("location:../vistas/");

		}
		else
		{


		$sql = "call abm_enfermeros(1,' ','$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',
		'$datos[4]',
		'$datos[5]',
		'$datos[6]',
		'$datos[7]')";
		return mysqli_query($conexion,$sql);
	}

	}

	public function obtenDatosEnfermeros($idenfermeros){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "SELECT idenfermeros,
		nombre,
		apellido,
		ci,
		direccion,
		telefono,
		fecha_contrato,
		sueldo_base,
		idciudad
		from enfermeros
		where idenfermeros = '$idenfermeros'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);

		$datos=array("idenfermeros" => $ver[0],
			"nombre" =>$ver[1] , 
			"apellido" =>$ver[2] ,
			"ci" =>$ver[3],
			"direccion" =>$ver[4] ,
			"telefono" => $ver[5],
			"fecha_contrato"=> $ver[6],
			"sueldo_base"=>round($ver[7]),
			"idciudad" => $ver[8]);

		return $datos;

	}
	public function actualizandoEnfermeros($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "UPDATE enfermeros 
		set nombre='$datos[1]',
			apellido='$datos[2]',
			ci='$datos[3]',
			direccion='$datos[4]',
			telefono='$datos[5]',
			fecha_contrato='$datos[6]',
			sueldo_base = '$datos[7]',
			idciudad='$datos[8]'
			 where idenfermeros = '$datos[0]'";
		return mysqli_query($conexion,$sql);
	}

public function eliminaEnfermeros($idenfermeros){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "DELETE FROM enfermeros 
		WHERE idenfermeros = '$idenfermeros'";
		
		return mysqli_query($conexion,$sql);


}


}





?>