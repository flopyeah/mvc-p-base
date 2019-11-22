<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
<p>La page demandée est introuvable : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>