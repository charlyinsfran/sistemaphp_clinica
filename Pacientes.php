<?php 

class pacientes{

	public function insertaPacientes($datos){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_pacientes(1,' ','$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',
		'$datos[4]',
		'$datos[5]',
		'$datos[6]')";


		return  mysqli_query($conexion,$sql);

	}


	public function obtenDatosPacientes($idpacientes){
		$c = new conectar();
		$conexion=$c->conexion();


		$sql = "SELECT idpacientes,
		nombre,
		apellido,
		ci,
		telefono,
		direccion,
		email,
		idciudad
		from pacientes
		where idpacientes = '$idpacientes'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);


		$datos=array("idpacientes" => $ver[0],
			"nombre" =>$ver[1] , 
			"apellido" =>$ver[2] ,
			"ci" =>$ver[3],
			"telefono" => $ver[4],
			"direccion" =>$ver[5] ,
			"email"	=> $ver[6],
			"idciudad" => $ver[7]);


		return $datos;
	}
	public function actualizandoPacientes($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "call abm_pacientes(2,'$datos[0]','$datos[1]',
			'$datos[2]',
			'$datos[3]',
			'$datos[4]',
			'$datos[5]',
			'$datos[6]',
			'$datos[7]')";


		return mysqli_query($conexion,$sql);
	}


public function eliminaPacientes($idpacientes){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_pacientes(3,'$idpacientes','','','','','','','')";
		
		return mysqli_query($conexion,$sql);


}


}




?>