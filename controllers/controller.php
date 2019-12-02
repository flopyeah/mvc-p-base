<?php

require 'models/model.php';

// Affiche la page d'acceuil
function accueil() {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD

    // appel de la template 
    require 'views/viewHome.php';
}

// Affiche la page Qui sommes nous
function quiSommesNous() {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
    

    // appel de la template 
    require 'views/viewQuiSommes.php';
}

function articleInfo($id_article) {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
    $article = getArticleById($id_article);

    // appel de la template 
    require 'views/viewArticle.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    // appel de la template 
    require 'views/view404.php';
}

