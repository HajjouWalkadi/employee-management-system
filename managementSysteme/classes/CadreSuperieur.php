<?php
require_once 'Employe.php';
    class CadreSuperieur extends Employe{
        public $salaire_annuel;

        public function salaire($salaire_annuel)
        {
            $this->salaire_base_mensuel = $salaire_annuel / 12;
        }

        public function calculerSalaire(){
            return $this->salaire_base_mensuel;
        }
    }
?> 