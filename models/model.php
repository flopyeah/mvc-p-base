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

// Renvoie les informations sur un Article
function getArticleById($id_article) {
    // appel de la fonction de connexion à la BDD 
    $bdd = getBdd();
    
    $articleInfo = $bdd->prepare('SELECT * 
                            FROM article 
                            WHERE art_id = ?');
    
    // J'excute la requete avec le parametre art_id
    $articleInfo->execute([
        $id_article
    ]);
        
    // s'il y a une ligne, c'est que l'ID_article correspond à un article existant
    if ($articleInfo->rowCount() == 1) {
         // Accès à la première ligne de résultat
        return $articleInfo->fetch(PDO::FETCH_ASSOC); 
    }
    else {
        // Je renvoie une erreur si l'id est inexistant 
        throw new Exception("Aucun article ne correspond à l'identifiant : '$id_article'");
    }
}
