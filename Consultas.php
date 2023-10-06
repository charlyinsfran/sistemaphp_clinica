
<?php  class consultas{
	public function agregaConsultas($datos){
		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "INSERT into consulta(motivo,hora,diagnostico,tratamiento,idcitas) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

		return mysqli_query($conexion,$sql);

	}

	public function actualizandoConsultas($datos){
		$c = new conectar();
		$conexion=$c->conexion();
		$sql = "UPDATE consulta SET motivo = '$datos[1]',
		hora = '$datos[2]',
		diagnostico = '$datos[3]',
		tratamiento = '$datos[4]',
		idcitas = '$datos[5]' 
		WHERE idconsulta = '$datos[0]'";
		echo mysqli_query($conexion,$sql);
	}
	public function eliminaConsultas($idconsulta){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "DELETE FROM consulta
		WHERE idconsulta = '$idconsulta'";
		return mysqli_query($conexion,$sql);
	}
}

?>