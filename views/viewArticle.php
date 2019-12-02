<?php $titre = "Mon Blog - " . $article['art_title']; ?>

<?php ob_start(); ?>
<article>
    <header>
        <h1 class="titreBillet"><?= $article['art_title'] ?></h1>
        <time><?= formatDate($article['art_date']) ?></time>
    </header>
    <div class="row">
        <div class="col-4">
            <img class="bd-img" src="public/img/<?= $article['art_media'] ?>" />
        </div>
        <div class="col-8">
            <p><?= $article['art_content'] ?></p>
        </div>
    
</article>

<h2>Commentaires</h2>
<div id="commentaires">
    <a href="#" onclick="loadComments(<?= $article['art_id'] ?>);" class="btn btn-primary" >Charger les commentaires</a>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>
