# mvc-p-base

Nous Utilisons à présent un MVC afin de gérer des projets de plus grande ampleur, nous allons avancer par étapes afin d'arriver à l'élaboration de notre blog.

# 1 - Nous commençons par nous occuper du model en effectuant les requetes dont nous allons avoir besoin 
    - getAllArticle() // Liste de tous les articles 
    - getArticleById($article_id) // Information de l'article par son Id
    - getAllAuthor() // liste de tous les auteurs 
    - getAuthorById($auteur_id) // Information de l'auteur par son Id 
    - getArticleByAuthorId($auteur_id) // Liste de tous les articles écrit par l'auteur 
    - getCommentByArticleId($article_id) // Liste des commentaire de l'article correspondant
  
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


# 4 - Bonus 
    Nouvelle routes : 
    - login             -> loginAcion
    - admin             -> AdminAction

    Nouvelles Vues : 
    - loginAcion        -> viewLogin
    - AdminAction       -> ViewAdmin

# 5 - Gerer la connexion Utilisateur 
    - Verifier si l'e-mail exite en BDD (si l'e-mail tapé est présent dans la table user de la colonne email)
    - s'il existe, je vérifie si le mot de passe tapé correspond à celui enregistré en BDD (table user colonne password)
    - si le mot de passe est valide cela signifie que le couple (email/password) est bon, je peux donc créer une session 

# 6 - gerer la déconnexion 


  
