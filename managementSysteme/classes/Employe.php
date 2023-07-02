<?php 
	class Employe {
		public $id;
		public $nom;
		public $salaire_base_mensuel;

		public function salaire($salaire_base){
			$this->salaire_base_mensuel= $salaire_base;
		}
		public function getSalaire(){
			return $this->salaire_base_mensuel;
		}

	
	}

	
?>