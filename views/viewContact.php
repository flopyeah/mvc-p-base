<?php $titre = "Mon Blog - Contact"; ?>

<?php ob_start(); ?>

<h1>Contact </h1>
<p>Mon formulaire</p>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>
