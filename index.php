<?php

require 'controllers/controller.php';
require 'helper/functions.php';

try {
    
    // Routage
    if (!isset($_GET['action'])) { 
        // si je n'ai pas d'action je redirige vers la home 
        accueil();
    }
    else {
        switch($_GET['action']) {
            // accueil
            case '':
                accueil();
            break;

            // page qui sommes-nous
            case 'qui-sommes-nous' : 
                quiSommesNous();
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
    erreur($e->getMessage());
}