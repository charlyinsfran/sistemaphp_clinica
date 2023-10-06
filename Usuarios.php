<?php 

class usuarios{
	public function registroUsuario($datos){
		$c = new conectar();
		$conexion=$c->conexion();
			$query = "SELECT cuenta from usuario where cuenta = '$datos[2]'";

		$result = mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result) > 0){
			alert("Ciudad Duplicada");
			header("location:../vistas/usuarios.php");

		}
else{
		
	$sql = "INSERT into usuario(nombre,apellido,cuenta,password,email,tipo_usuario) 
	values ('$datos[0]',
			'$datos[1]',
			'$datos[2]',
			'$datos[3]',
			'$datos[4]',
			'$datos[5]')";

	return mysqli_query($conexion,$sql);
}

	}
	

	
public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			//$password=sha1($datos[1]);

			$_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self::traeID($datos);

			$sql="SELECT * 
					from usuario 
				where cuenta='$datos[0]'
				and password='$datos[1]'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}



		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();


			$sql="SELECT idusuario 
					from usuario
					where cuenta='$datos[0]'
					and password='$datos[1]'"; 
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}

	}	




 ?>