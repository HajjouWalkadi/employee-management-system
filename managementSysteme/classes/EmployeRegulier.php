<?php 
require_once 'Employe.php';

    class EmployeRegulier extends Employe {
        // public $id;
        public $heures_travaillees ;

        public function salaire($taux_horaire)
        {
            $this->salaire_base_mensuel = $this->heures_travaillees * $taux_horaire;
        }

        public function calculerSalaire()
        {
            return $this->salaire_base_mensuel;
        }
    }

    

?>