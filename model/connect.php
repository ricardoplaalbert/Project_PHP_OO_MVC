<?php
	class connect{
		public static function con(){
			$host = 'localhost';  
    		$user = "root";                     
    		$pass = "chilenas3";                             
    		$db = "Reservas";                      

    		$conexion = mysqli_connect($host, $user, $pass, $db);
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}