<?php
	include("../class/class-conexion.php");
	include("../class/class-usuario.php");
	session_start();
	if(isset($_POST["accion"])){
		$conexion = new Conexion;
		switch ($_POST['accion']) {
			case 'actualizar-registro': 
				$_SESSION['id_usuario']= $_POST['id_usuario'];
				$_SESSION['usuario']= $_POST['usuario'];
				$_SESSION['nombre']= $_POST['nombre'];
				$_SESSION['apellido']= $_POST['apellido'];
				$_SESSION['sexo']= $_POST['sexo'];
				$_SESSION['email']= $_POST['email'];
				$_SESSION['fecha_nacimiento']= $_POST['fecha_nacimiento'];

				$usuario=new Usuario();
				$usuario -> setIdUsuario($_POST['id_usuario']);
				$usuario -> setUsuario($_POST['usuario']);
				$usuario -> setNombre($_POST['nombre']);
				$usuario -> setApellido($_POST['apellido']);
				$usuario -> setSexo($_POST['sexo']);
				$usuario -> setEmail($_POST['email']);
				$usuario -> setContrasenia(hash("sha512",$_POST['contrasenia']));
				$usuario -> setFechaNacimiento($_POST['fecha_nacimiento']);
				$respuesta = $usuario->actualizarRegistro($conexion);
				echo json_encode($respuesta);

			break;
			case 'insertar-registro': 
				$usuario = new Usuario();
				$usuario->setIdPais($_POST["id_pais"]);
				$usuario->setUsuario($_POST["usuario"]);
				$usuario->setNombre($_POST["nombre"]);
				$usuario->setApellido($_POST["apellido"]);
				$usuario->setSexo($_POST["sexo"]);
				$usuario->setEmail($_POST["email"]);
				$usuario -> setContrasenia(hash("sha512",$_POST['contrasenia']));
				$usuario->setFechaNacimiento($_POST["fecha_nacimiento"]);
				$usuario->setUrlFotoPerfil($_POST["url_foto_perfil"]);
				$usuario->setTipoUsuario($_POST["id_tipo_usuario"]);
				$respuesta=$usuario->insertarRegistro($conexion);
				echo json_encode($respuesta);
			break;
			case "listar-todos":
				$respuesta = Usuario::listarTodos($conexion);
				echo json_encode($respuesta);
			break;
			case "seleccionar":
				$usuario = new Usuario();
				$usuario->setIdUsuario($_POST["id_usuario"]);
				$respuesta = $usuario->seleccionar($conexion);
				echo json_encode($respuesta);
			break;
			case "eliminar-registro":
				session_destroy();
				$respuesta=Usuario::eliminarRegistro($conexion, $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;
			case 'obtener-datos-usuario':
				$respuesta = Usuario::obtenerDatosUsuario($conexion,$_POST['id_usuario']);
				echo json_encode($respuesta);
			break;
			
			case 'artistas-favoritos':
				$respuesta=Usuario::artistasFavoritos($conexion, $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;
			case 'albumes-favoritos':
				$respuesta=Usuario::albumesFavoritos($conexion, $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;
			case 'playlist-favoritos':
				$respuesta=Usuario::playlistFavoritos($conexion, $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;
			case 'canciones-favoritos':
				$respuesta=Usuario::cancionesFavoritos($conexion, $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;

			case "agregar-historial":
				$respuesta = Usuario::agregarHistorial($conexion,  $_POST["id_usuario"], $_POST["id_cancion"]);
				echo json_encode($respuesta);
			break;

			case "listar-historial":
				$respuesta = Usuario::listarHistorial($conexion,  $_POST["id_usuario"]);
				echo json_encode($respuesta);
			break;

			default:
				echo json_encode("Petición inválida");
				break;
		}
		$conexion->cerrarConexion();
	}else{
		echo json_encode("No se especificó petición");
	}
?>
