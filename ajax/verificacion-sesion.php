<?php 

	include ("../class/class-conexion.php");
	include ("../class/class-usuario.php");	
	
			
		$objConexion=new Conexion();
	if (isset($_POST['accion'])) {
		switch ($_POST["accion"]) {
			case 'iniciar-sesion':
				$correo=$_POST["inputEmail"];
				$password=$_POST["inputPassword"];

				$password = hash('sha512',$password); 		
				$respuesta = Usuario::verificarUsuario($objConexion,$correo,$password);
				echo json_encode($respuesta);
				
				break;
			case 'cerrar-sesion':
					session_start();
					$_SESSION['status']=false;
					$respuesta['loggedin'] = 0;
					session_destroy();
					echo json_encode($respuesta);
				break;
			
			default:
				# code...
				break;
		}
		# code...
	}
	$objConexion->cerrarConexion();

?>