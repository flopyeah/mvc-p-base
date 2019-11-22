<?php

require 'models/model.php';

// Affiche la page d'acceuil
function accueil() {
    // j'affectue ici mes appel au model 

    // appel de la template 
    require 'views/viewHome.php';
}

// Affiche la page Qui sommes nous
function quiSommesNous() {
    // j'affectue ici mes appel au model 
    

    // appel de la template 
    require 'views/viewQuiSommes.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    // appel de la template 
    require 'views/view404.php';
}

