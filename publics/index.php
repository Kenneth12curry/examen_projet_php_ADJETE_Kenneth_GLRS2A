<?php

require("../models/User.php");
require("../models/AC.php");
require("../models/Etudiant.php");

//objets=instanciations

$user=new AC();

//Donner des avleurs aux attributs

$user->setId(1);
$user->setLogin("douve@gmail.com");
$user->setPassword("douvewane12");
$user->setNomComplet("douvewane");
$user->setEmail("douvewanewane15@gmail.com");

//affichage
echo "Le login de l'AC est ".$user->getLogin()." son Password est ".$user->getPassword();

