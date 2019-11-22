<?php 
    // Répertoire de fonction pour aider le traitement de requetes simple 

    // format français de la date reçu de la BDD 
    function formatDate($date) {
        $date = new DateTime($date);
        return $date->format('d-m-Y à H:i');
    }

