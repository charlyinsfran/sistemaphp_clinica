<?php 

class citas{
	public function agregaCitas($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "INSERT into citas(fecha,orden,estado,idficha_paciente,iddoctores,idconsultorios) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

		return mysqli_query($conexion,$sql);

	}

	public function actualizaCitas($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "UPDATE citas SET fecha = '$datos[1]',
		orden='$datos[2]',
		estado='$datos[3]',
		idficha_paciente='$datos[4]',
		iddoctores='$datos[5]',
		idconsultorios='$datos[6]' 
		where idcitas = '$datos[0]' ";
		echo mysqli_query($conexion,$sql);

	}

	public function eliminaCitas($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "DELETE FROM citas where idcitas = '$datos[0]'";
		return mysqli_query($conexion,$sql);
	}
}


 ?>