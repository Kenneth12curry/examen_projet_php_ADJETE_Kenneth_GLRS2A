<?php
class Professeur extends User{
    private string $grade;

    //constructeur
    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    //Redéfinition
    
    public function setRole($role)
    {
        return $this;
    }
}