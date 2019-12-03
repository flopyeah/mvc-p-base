<?php 
// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    // connexion à la BDD 
    $servername = 'localhost';
    $username   = 'root';
    $password   = 'root';
    $dbname     = 'mvc_blog';
    
    //On essaie de se connecter
    try{
        // j'instencie 
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
      die;
    }

    // je renvoie l'objet PDO associé
    return $bdd;
}
?>