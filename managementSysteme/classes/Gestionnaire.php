<?php
require_once 'Employe.php';

    class Gestionnaire extends Employe {
        public $bonus_annuel ;

        public function salaire($bonus_annuel)
        {
            $this->salaire_base_mensuel = ($bonus_annuel/12);
        }

        public function calculerSalaire(){
			return $this->salaire_base_mensuel;
		}
    }
?>