<?php
class Etudiant extends User{
    private int $tel;


    //Fonctions naviagtionnelles

    public function inscriptions():array{
        return [];
    }

    public function cours():Cours{
        return new Cours;
    }

    public function reinscriptions():array{
        return [];
    }
    

    //constructeur
     public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    //Redéfinition
    
    public function setRole($role)
    {
        return $this;
    }

}