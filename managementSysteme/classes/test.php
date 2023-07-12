<?php

class Employe
{
    protected $nom;
    protected $identifiant;
    protected $salaireBase;

    public function __construct($nom, $identifiant, $salaireBase)
    {
        try {
            $this->nom = $nom;
            $this->identifiant = $identifiant;

            if ($salaireBase < 0) {
                throw new Exception("Le salaire de base doit être positif", 1);
            }
            $this->salaireBase = $salaireBase;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    public function getSalaireBase()
    {
        return $this->salaireBase;
    }
    public function setSalaireBase($salaireBase)
    {
        if ($salaireBase > 0) {
            $this->salaireBase = $salaireBase;
        } else {
            echo ("Le salaire de base doit être positif");
        }
    }

    public function calculerSalaireMensuel($tauxHoraire)
    {
        return $this->salaireBase;
    }
}

class EmployeRegulier extends Employe
{
    private $heuresTravaillees;

    public function __construct($nom, $identifiant, $salaireBase, $heuresTravaillees)
    {
        try {
            // parent::__construct($nom, $identifiant, $salaireBase);
            try {
                $this->nom = $nom;
                $this->identifiant = $identifiant;
    
                if ($salaireBase < 0) {
                    throw new Exception("Le salaire de base doit être positif", 1);
                }
                $this->salaireBase = $salaireBase;
            } catch (\Throwable $e) {
                echo $e->getMessage();
            }
            if ($heuresTravaillees <= 0) {
                throw new Exception("Les heures de travail doivent être positives", 1);
            } else {
                $this->heuresTravaillees = $heuresTravaillees;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function getHeuresTravaillees()
    {
        return $this->heuresTravaillees;
    }
    public function setHeuresTravaillees($heuresTravaillees)
    {
        try {
            if ($heuresTravaillees <= 0) {
                throw new Exception("Les heures du travail doivent être positives", 1);
            } else {
                $this->heuresTravaillees = $heuresTravaillees;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function calculerSalaireMensuel($tauxHoraire)
    {
        try {
            if ($this->heuresTravaillees <= 0) {
                throw new Exception("Les heures du travail doivent être positives", 1);
            } else if ($tauxHoraire <= 0) {
                throw new Exception("Le taux horaire doit être positif", 1);
            } else {
                return $this->heuresTravaillees * $tauxHoraire;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}

class Gestionnaire extends Employe
{
    private $bonusAnnuel;

    public function __construct($nom, $identifiant, $salaireBase, $bonusAnnuel)
    {
        try {
            parent::__construct($nom, $identifiant, $salaireBase);
            if ($bonusAnnuel < 0) {
                throw new Exception("le bonus annuel doit être positif", 1);
            } else {
                $this->bonusAnnuel = $bonusAnnuel;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function getBonusAnnuel()
    {
        return $this->bonusAnnuel;
    }
    public function setBonusAnnuel($bonusAnnuel)
    {
        $this->bonusAnnuel = $bonusAnnuel;
        try {
            if ($bonusAnnuel < 0) {
                throw new Exception("le bonus annuel doit être positif", 1);
            } else {
                $this->$bonusAnnuel = $bonusAnnuel;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function calculerSalaireMensuel($tauxHoraire = 1)
    {

        try {
            if ($this->bonusAnnuel < 0 || is_null($this->bonusAnnuel)) {
                throw new Exception("Les bonus annuel doivent être positives", 1);
            } else if ($this->salaireBase < 0 || is_null($this->salaireBase)) {
                throw new Exception("Le saliare de base doit être positif", 1);
            } else {
                $salaireTotal = $this->salaireBase + $this->bonusAnnuel;
                return $salaireTotal / 12;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}

class CadreSuperieur extends Employe
{
    private $salaireAnnuel;

    public function __construct($nom, $identifiant, $salaireAnnuel)
    {
        try {
            parent::__construct($nom, $identifiant, 0);
            if ($salaireAnnuel < 0) {
                throw new Exception("Le salaire annuel doit être positif", 1);
            } else {
                $this->salaireAnnuel = $salaireAnnuel;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
    
    public function getSalaireAnnuel()
    {
        return $this->salaireAnnuel;
    }
    public function setSalaireAnnuel($salaireAnnuel)
    {
        try {
            if ($salaireAnnuel < 0) {
                throw new Exception("Le salaire annuel doit être positif", 1);
            } else {
                $this->salaireAnnuel = $salaireAnnuel;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
    
    public function calculerSalaireMensuel($tauxHoraire = 1)
    {
        
        // echo '1212';
        try {
            if ($this->salaireAnnuel < 0 || is_null($this->salaireAnnuel)) {
                throw new Exception("Le salaire annuel doit être positif", 1);
            } else {
                return $this->salaireAnnuel / 12;
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}



// Employé régulier---------------------------
$employeRegulier = new EmployeRegulier("Salma", 1, 1, 1);
echo '<p>' . ("Salaire mensuel de l'employé régulier : \n" . $employeRegulier->calculerSalaireMensuel(-1) . "\n" . '</p>');

echo '<hr>';

// Gestionnaire-------------------------------

$gestionnaire = new Gestionnaire("Asmaa", 2, -2000, 5000);
echo '<p>' . "Salaire mensuel du gestionnaire : " . $gestionnaire->calculerSalaireMensuel() . "\n" . '</p>';

$gestionnaire->setSalaireBase(1);
echo $gestionnaire->getSalaireBase() . '</p>';

$gestionnaire->setSalaireBase(0) . '</p>';
echo '<p>' . $gestionnaire->getSalaireBase();



echo '<hr>';

// Cadre supérieur
$cadreSuperieur = new CadreSuperieur("Hajjou", 3, 60000);
echo "Salaire mensuel du cadre supérieur : " . $cadreSuperieur->calculerSalaireMensuel() . "\n";
