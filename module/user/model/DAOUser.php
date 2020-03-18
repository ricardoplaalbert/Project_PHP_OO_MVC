<?php
	  $path = $_SERVER['DOCUMENT_ROOT'] . '/Table v1.1/';
	  include($path . "model/connect.php");	
	class DAOUser{
		function insert_user($datos){
			$pers=$datos["num_personas"];
			$menores=$datos['num_menores'];
			$nombre=$datos['Nombre'];
			$dni=$datos['DNI'];
			$sex=$datos['Sexo'];
			$fnac=$datos['fnac'];
			$edad=$datos['Edad'];
        	$fecha=$datos['fecha_reserva'];
		
			$sql = " INSERT INTO Reservas (num_personas, num_menores, Nombre, DNI, Sexo, fnac, Edad, fecha_reserva)"
			. " VALUES ('$pers', '$menores', '$nombre', '$dni', '$sex', '$fnac', '$edad', '$fecha')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
			
		function select_all_user(){
			$sql = "SELECT * FROM Reservas ORDER BY DNI ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($dni){
			$sql = "SELECT * FROM Reservas WHERE DNI='$dni'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

	//UPDATE
		/*function update_user($datos){ 
			$pers=$datos['num_personas'];
			$menores=$datos['num_menores'];
			$nombre=$datos['Nombre'];
			$dni=$datos['DNI'];
			$sex=$datos['Sexo'];
			$fnac=$datos['fnac'];
			$edad=$datos['Edad'];
			$fecha=$datos['fecha_reserva'];
			
        	$sql = " UPDATE Reservas SET num_personas='$pers', num_menores='$menores', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE user='$user'";
			}
		 /* 
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
			}
	*/
		function delete_user($dni){	
			$sql = "DELETE FROM Reservas WHERE DNI='$dni'";
			
		/*	function delete_all_user($dni){	
				$sql = "DELETE FROM Reservas WHERE DNI='$dni'";
		*/		
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
	
	} 