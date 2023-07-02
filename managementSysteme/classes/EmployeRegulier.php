<?php 
require_once 'Employe.php';

    class EmployeRegulier extends Employe {
        public $id;
        public $heures_travaillees = 160;
        // public $taux_horaire;

        public function salaire($taux_horaire)
        {
            $this->salaire_base_mensuel = $this->heures_travaillees * $taux_horaire;
        }

        public function getSalaire()
        {
            return $this->salaire_base_mensuel;
        }
    }

    // $objet = new EmployeRegulier();
    // $objet->salaire(15);
    // var_dump($objet);

?>