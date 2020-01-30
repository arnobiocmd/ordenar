<?php

	class Painel{

			public static function getAll(){
			$sql = MySql::conectar()->prepare("SELECT * FROM ordenar");
			$sql->execute();
			if($sql->rowCount() > 0){
				return $sql->fetchAll();
			}
				
		} 
		

		public static function orde($ordem){
			$sql = MySql::conectar()->prepare("SELECT * FROM ordenar ORDER BY $ordem");
			$sql->execute();
			if($sql->rowCount() > 0){
					return $sql->fetchAll();
				}
		}

	

		
	}


?>