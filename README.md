# mvc-p-base

Nous Utilisons à présent un MVC afin de gérer des projets de plus grande ampleur, nous allons avancer par étap.es afin d'arriver à l'élaboration de notre blog.

# 1 - Nous commençons par nous occuper du model en effectuant les requetes dont nous allons avoir besoin 
  - getAllArticle() // Liste de tous les articles 
  - getArticleById() // Information de l'article par son Id
  - getAllAuthor() // liste de tous les auteurs 
  - getAuthorById() // Information de l'auteur par son Id 
  - getArticleByAuthorId() // Liste de tous les articles écrit par l'auteur 
  - getCommentByArticleId() // Liste des commentaire de l'article correspondant
  
# 2 - Pour chaque route que nous allons créer ($_GET['action']) nous allons faire appel au controller correspondant
  - auteurs           -> auteursAction
  - auteur &id=       -> auteurInfoAction
  - articles          -> articleAction
  - article &id=      -> articleInfoAction
  - commentaire &id=  -> commentairesAction
  
# 3 - Pour chaque controller créer la vue correspondante 
  - auteursAction       -> viewAuteurListe.php
  - auteurInfoAction    -> viewAuteur.php
  - articleAction       -> viewArticleListe.php
  - articleInfoAction   -> viewArticle.php
  - commentairesAction  -> json_encode (afin de pouvoir traiter l'affichage des commentaire en AJAX)
  
  
