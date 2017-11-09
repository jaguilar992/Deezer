<?php
	class Genero{
		private $idGenero;
		private $nombreGenero;

		public function __construct($idGenero=null, $nombreGenero=null){
			$this->idGenero = $idGenero;
			$this->nombreGenero = $nombreGenero;
		}

		public function setIdGenero($idGenero) { 
			$this->idGenero = $idGenero; 
		}

		public function getIdGenero() { 
			return $this->idGenero; 
		}

		public function setNombreGenero($nombreGenero) { 
			$this->nombreGenero = $nombreGenero; 
		}

		public function getNombreGenero() { 
			return $this->nombreGenero; 
		}

		public function __toString(){
			return "idGenero: ".$this->idGenero." nombreGenero: ".$this->nombreGenero;
		}

		public static function listarGeneros($conexion){
			$sql = "
				SELECT 
				  id_genero as id,
				  nombre_genero as nombre
				FROM tbl_generos
				ORDER BY nombre ASC;
			";

			$resultado = $conexion->ejecutarConsulta($sql);
			$generos=array();
			while($fila=$conexion->obtenerFila($resultado)){
				$genero = array();
				$genero["id"]= $fila["id"];
				$genero["nombre"]= $fila["nombre"];

				$generos[]=$genero;
			}
			return json_encode($generos);
		}

		public function seleccionarGenero($conexion){
			$resultado=$conexion->ejecutarConsulta(sprintf("
				SELECT 
					nombre_genero as nombre,
					id_genero as id
				FROM tbl_generos
				WHERE id_genero = %s
				",
				$conexion->antiInyeccion($this->getIdGenero())
			));
			$fila=$conexion->obtenerFila($resultado);
			return json_encode($fila);
		}
	}
?>