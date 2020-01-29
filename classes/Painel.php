<?php

	class Painel{

		public static function GetAll(){
			$sql = MySql::conectar()->prepare("SELECT * FROM ordenar");
			$sql->execute();
				if($sql->rowCount() > 0){
					return $sql->fetchAll();
				}
		}

		
	}


?>