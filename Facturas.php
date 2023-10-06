<?php 

class facturas{

	public function obtenerdatos($idficha){

		$c = new conectar();
		$conexion=$c->conexion();

		$sql = "SELECT ci.fecha,p.nombre,fp.idficha_paciente FROM consulta c JOIN citas ci ON c.idcitas = ci.idcitas 
		JOIN  ficha_paciente fp ON ci.idficha_paciente = fp.idficha_paciente
		JOIN pacientes p ON fp.idpacientes = p.idpacientes WHERE ci.idficha_paciente = '$idficha'";

		$result=mysqli_query($conexion,$sql);
		$ver = mysqli_fetch_row($result);


		$datos=array(
			"ci.fecha" =>$ver[0],
			"p.nombre" =>$ver[1]);

		return $datos;

	}
}




?>