<?php

// Connexion a la BDD 
require 'connectbdd.php';

// Renvoie la liste des Articles du blog
function getAllArticles() {
    // appel de la fonction de connexion à la BDD 
    $bdd = getBdd();
    $articles = $bdd->prepare('SELECT * 
                            FROM article 
                            ORDER BY art_date DESC');
    
        $articles->execute();
    
    // Je renvoie les lignes de tous les articles 
    return $articles->fetchAll(PDO::FETCH_ASSOC);
}
