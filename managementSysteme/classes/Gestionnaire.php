<?php
require_once 'Employe.php';

    class Gestionnaire extends Employe {
        public $id;
        public $salaire_base = 8000;

        public function salaire($bonus_annuel)
        {
            $this->salaire_base_mensuel = $this->salaire_base + ($bonus_annuel/12);
        }

        public function getSalaire(){
			return $this->salaire_base_mensuel;
		}
    }
?>