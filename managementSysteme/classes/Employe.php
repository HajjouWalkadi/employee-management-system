<?php 
	class Employe {
		public $id;
		public $nom;
		protected $salaire_base_mensuel;

		public function  __construct($id, $nom, $SBM)
		{
			$this->id = $id;
			$this->nom = $nom;
			$this->salaire_base_mensuel = $SBM;
	
		} 

		public function salaire($salaire_base){
			$this->salaire_base_mensuel= $salaire_base;
		}
		public function calculerSalaire(){
			return $this->salaire_base_mensuel;
		}

	
	}

	$employe = new Employe("HD3488", "Hajjou", 10000);
	echo $employe->nom;
	

	
?>