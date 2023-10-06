<?php 

class fichas{
	
	public function insertaFicha($datos){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_fichas(1,'','$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',
		'$datos[4]')";


		return  mysqli_query($conexion,$sql);

	}

	public function obtenDatosFicha($idficha_paciente){


		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "SELECT idficha_paciente,fecha_admision,peso,alergias,idpacientes,grupo_sanguineo 
		FROM ficha_paciente
		WHERE idficha_paciente = '$idficha_paciente'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);

		$datos = array("idficha_paciente"=> $ver[0],
				"fecha_admision"=> $ver[1],
				"peso"=> $ver[2],
				"alergias"=> $ver[3],
				"idpacientes"=> $ver[4],
				"grupo_sanguineo"=> $ver[5]);

		return $datos;
	}



	public function actualizandoFicha($datos){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_fichas(2,'$datos[0]','$datos[1]',
					'$datos[2]',
					'$datos[3]',
					'$datos[4]',
					'$datos[5]')";


		return mysqli_query($conexion,$sql);
	}




	public function eliminaFicha($idficha_paciente)
	{
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "call abm_fichas(3,'$idficha_paciente','','','','','')";
		
		return mysqli_query($conexion,$sql);
	}

}



?>