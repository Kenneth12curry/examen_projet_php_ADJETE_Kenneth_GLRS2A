<?php
class Reinscriptions{
    private int $id;
    private string $nomEtudiant;
    private string $filiere;
    private DateTime $dateRéins;


    //Fonctions navigationnelles;

    public function etudiants():Etudiant{
        return new Etudiant;
    }
    
    //constructeur 
    public function __construct()
    {
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomEtudiant
     */ 
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * Set the value of nomEtudiant
     *
     * @return  self
     */ 
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of dateRéins
     */ 
    public function getDateRéins()
    {
        return $this->dateRéins;
    }

    /**
     * Set the value of dateRéins
     *
     * @return  self
     */ 
    public function setDateRéins($dateRéins)
    {
        $this->dateRéins = $dateRéins;

        return $this;
    }
}