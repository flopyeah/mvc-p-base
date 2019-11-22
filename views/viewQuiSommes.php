<?php $titre = 'Qui Sommes-nous ?'; ?>

<?php ob_start() ?>

    <p>Bonjour, Voici la présentation de l'équipe</p>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>