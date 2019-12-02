<?php

require 'controllers/controller.php';
require 'helper/functions.php';

try {
    
    // Routage
    if (!isset($_GET['action'])) { 
        // si je n'ai pas d'action je redirige par défaut vers la home page
        accueilAction();
    }
    else {
        switch($_GET['action']) {
            // accueil
            case '':
                accueilAction();
            break;

            // page qui sommes-nous
            case 'qui-sommes-nous' : 
                quiSommesNousAction();
                break;

            // page avec parametre 
            case 'article' : 
                articleInfoAction($_GET['id']);
                break;

            /// Si une erreur est renvoyée, l'utilisateur est redirigé vers une page 404
            default : 
                throw new Exception("Action non valide");
                break;
        }
    }
    
}
catch (Exception $e) {
    // Si une erreur est renvoyée, l'utilisateur est redirigé vers une page 404>
    erreurAction($e->getMessage());
}