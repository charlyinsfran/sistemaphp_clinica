<?php 



class consultorios{

	public function agregandoConsultorio($datos){
		$c= new conectar();
		$conexion = $c->conexion();
		$sql = "call abm_consultorios(1,'','$datos[0]','$datos[1]','$datos[2]')";

		return mysqli_query($conexion,$sql);
	}


	public function actualizandoConsultorios($datos){
		$c= new conectar();
		$conexion = $c->conexion();
		$sql ="call abm_consultorios(2,'$datos[0]','$datos[1]', '$datos[2]','$datos[3]')";
			return mysqli_query($conexion,$sql);

	}

	public function eliminaConsultorios($idconsultorios){


		$c= new conectar();
		$conexion = $c->conexion();
		$sql ="call abm_consultorios(3,'$idconsultorios','','','')";

		return mysqli_query($conexion,$sql);


	}
} 
?>