<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

        <h2>Bienvenue sur mon Blog</h2>
        <br>
        <div class="row">
            
        </div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>