<?php

require 'models/model.php';

// Affiche la page d'acceuil
function accueilAction() {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD


    // appel de la template 
    require 'views/viewHome.php';
}

// Affiche la page contact 
function contactAction() {
    // pour l'instant pas d'appel en BDD 

    // appel de la template 
    require 'views/viewContact.php';
}

// Affiche la page Qui sommes nous
function quiSommesNousAction() {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
    

    // appel de la template 
    require 'views/viewQuiSommes.php';
}

// affiche la page article en fonction de son id_article 
function articleInfoAction($id_article) {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
    $article = getArticleById($id_article);

    // appel de la template 
    require 'views/viewArticle.php';
}

// Affiche une erreur
function erreurAction($msgErreur) {
    // appel de la template 
    require 'views/view404.php';
}

