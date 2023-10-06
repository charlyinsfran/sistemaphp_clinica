<?php 

class especialidades{

	public function agregaEspecialidad($datos){
			$c = new conectar();
			$conexion=$c->conexion();

			$sql = "call abm_especialidad(1,'$datos[0]')";

			return mysqli_query($conexion,$sql);
}


public function actualizaEspecialidad($datos){

			$c = new conectar();
			$conexion=$c->conexion();
			$sql ="call abm_especialidad(2,'$datos[0]','$datos[1]')";
			echo mysqli_query($conexion,$sql);
}


public function eliminaEspecialidad($idespecialidad){

			$c = new conectar();
			$conexion=$c->conexion();
			$sql = "call abm_especialidad(3,'$idespecialidad','')";

			return mysqli_query($conexion,$sql);

}


}||


 ?>