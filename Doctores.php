<?php 
class doctores{

	public function agregaDoctores($datos){
		$c = new conectar();
		$conexion = $c->conexion();
		$query = "SELECT ci from doctores where ci = '$datos[2]'";

		$result = mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result) > 0){
			alert("CI DUPLICADA");
			header("location:../vistas/");

		}
		else
		{

		$sql = "call abm_doctores(1,'','$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]')";


		return mysqli_query($conexion,$sql);
	}
	}

	public function obtenDatosDoctores($iddoctor){
		$c = new conectar();
		$conexion=$c->conexion();


		$sql2 = "SELECT iddoctores,
		nombre,
		apellido,
		ci,
		telefono,
		direccion,
		fecha_contrato,
		sueldo_base,
		email,
		idespecialidad,
		idciudad
		from doctores
		where iddoctores = '$iddoctor'";

		$result=mysqli_query($conexion,$sql2);
		$ver = mysqli_fetch_row($result);


		$datos=array("iddoctores" => $ver[0],
			"nombre" =>$ver[1] , 
			"apellido" =>$ver[2] ,
			"ci" =>$ver[3],
			"telefono" => $ver[4],
			"direccion" =>$ver[5] ,
			"fecha_contrato"=> $ver[6],
			"sueldo_base"=>$ver[7],
			"email" => $ver[8],
			"idespecialidad" => $ver[9],
			"idciudad" => $ver[10]);


		return $datos; 
	}

	public function actualizandoDoctores($datos){

		$c = new conectar();
		$conexion=$c->conexion();
		
		$sql = "call abm_doctores(2,'$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]',
		'$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]')";


		return mysqli_query($conexion,$sql);
	


	}

	public function eliminaDoctores($iddoctores){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_doctores(3,'$iddoctores','','','','','','','','','','')";
		return mysqli_query($conexion,$sql);


}


}



?>