<?php $titre = 'Qui Sommes-nous ?'; ?>

<?php ob_start() ?>

<h2>http://localhost:8888/mvc-p-base/index.php?action=qui-sommes-nous</h2>
    <p>Bonjour, Voici la présentation de l'équipe</p>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>