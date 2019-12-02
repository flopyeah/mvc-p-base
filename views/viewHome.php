<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

        <h2>Bienvenue sur mon Blog</h2>
        <br>
        <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="index.php?action=article&id=3">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="public/img/5.jpg">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Adipisci beatae distinctio aut. Et quod architecto voluptate laudantium aut eum cumque. Qui quae ut ...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="index.php?action=article&id=3" class="btn btn-sm btn-outline-secondary">Lire plus </a>
                                    </div>
                                    <small class="text-muted">20-11-2019 à 11:25</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="index.php?action=article&id=3">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="public/img/2.jpg">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Ex molestias dolorum alias at corporis. Consequatur sit voluptatibus fuga inventore minus. At vitae ...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="index.php?action=article&id=3" class="btn btn-sm btn-outline-secondary">Lire plus </a>
                                    </div>
                                    <small class="text-muted">18-11-2019 à 17:09</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="index.php?action=article&id=3">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="public/img/1.jpg">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Nisi aspernatur nesciunt ut in sed. Laborum doloremque et numquam sit dolore tempore nam. Pariatur i...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="index.php?action=article&id=3" class="btn btn-sm btn-outline-secondary">Lire plus </a>
                                    </div>
                                    <small class="text-muted">18-11-2019 à 12:28</small>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>