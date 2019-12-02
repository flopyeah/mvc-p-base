<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

        <h2>Bienvenue sur mon Blog</h2>
        <br>
        <div class="row">
            <a href="index.php?action=article&id=3">Voir l'article 3 </a>
        </div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>