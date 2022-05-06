<?php
class Inscriptions{

    private DateTime $dateInsc;
    private int $annee;

    //Fonctions navigationnelles
    public function etudiants():Etudiant{
        return new Etudiant;
    }

    public function classes():Classe{
        return new Classe;
    }
    
    //constructeur
    public function __construct()
    {
         
    }

    /**
     * Get the value of dateInsc
     */ 
    public function getDateInsc()
    {
        return $this->dateInsc;
    }

    /**
     * Set the value of dateInsc
     *
     * @return  self
     */ 
    public function setDateInsc($dateInsc)
    {
        $this->dateInsc = $dateInsc;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }
}