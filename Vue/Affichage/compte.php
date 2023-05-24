<div class="container" id="profilComptePHP">
    <div id="content" class="content p-0">
        <div class="profile-header">
            <div class="profile-header-content">
                <?php if(!empty($_SESSION['vendeur'])):?>
                <div class="profile-header-img mb-4">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png">
                </div>
                <?php endif; ?>
                <div class="profile-header-info">
                    <h4 class="m-t-sm"><?= $data['pseudo'] ?></h4>
                    <a href="#" class="btn btn-xs btn-primary mb-2">Modifier mon profil</a>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="true">Mes informations</button>
                    <button class="nav-link" id="nav-cartes-tab" data-bs-toggle="tab" data-bs-target="#nav-cartes" type="button" role="tab" aria-controls="nav-cartes" aria-selected="false">Mes cartes</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                    <div class="card" >
                        <div class="card-body">
                            <?php if(!empty($_SESSION['acheteur'])):?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="color: black;">Nom : </p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?= $data['nom']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Prénom :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?= $data['prenom']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Pseudo : </p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?= $data['pseudo']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Adresse 1 :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['adresse1']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Adresse 2 :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['adresse2']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Ville :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['ville']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Code postal :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['codepostal']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Pays :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['pays']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Numero :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['numero']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['email']?></p>
                                </div>
                            </div>
                            <?php elseif(!empty($_SESSION['vendeur'])):?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Pseudo :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['pseudo']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['email']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nom :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?=  $data['nom']?></p>
                                </div>
                            </div>
                            <?php endif; ?>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float:right;">
                                Supprimer mon compte
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Voulez-vous vraiment supprimer votre compte ?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="index.php?module=ModCompte&action=supprimer" class="btn btn-primary">Oui</a>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cartes" role="tabpanel" aria-labelledby="nav-cartes-tab" tabindex="0">
                    <div class="card" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Carte : </p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?= $data['nom']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Prénom :</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0"><?= $data['prenom']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" id="profile"></div>
        </div>
    </div>


