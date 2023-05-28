<section class="vh-400 form_log">
<main class="mt-5 pt-4">
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 mb-4">
                <img src="<?= $data['photo1']?>" class="img-fluid" width="100%" height="140px" alt="image <?= $data['nomArticle']?>"/>
            </div>

            <div class="col-md-6 mb-4">
                <strong><p style="font-size: 20px;"><?= $data['nomArticle']?></p></strong>
                <div class="p-4">
                    <div class="mb-3">
                        <a href="#"><span class="badge bg-dark me-1"><?= $data['categorie']?></span></a>
                    </div>

                    <p class="lead"><span><?= $data['prix']?> €</span></p>

                    <strong><p style="font-size: 20px;">Description</p></strong>

                    <p><?= $data['description']?></p>

                    <form action="#" class="d-flex justify-content-left" method="POST">
                        <div class="form-outline me-1" style="width: 100px;">
                            <input type="number" value="1" class="form-control" min="1" name="quantite"/>
                        </div>
                        <button class="btn btn-primary ms-1" type="submit">Ajouter au panier</button>
                    </form>
                </div>
                <div class="hstack gap-3">
                    <div class="p-2"><img src="<?= $data['photo1']?>" class="img-fluid" width="100%" height="140px" alt="image <?= $data['nomArticle']?>" /></div>
                    <div class="p-2"><img src="<?= $data['photo2']?>" class="img-fluid" width="100%" height="140px" alt="image <?= $data['nomArticle']?>" /></div>
                    <div class="p-2"><img src="<?= $data['photo3']?>" class="img-fluid" width="100%" height="140px" alt="image <?= $data['nomArticle']?>" /></div>
                    <?php if (!empty($data['video'])): ?>
                    <video controls src="<?= $data['video']?>" class="img-fluid" width="300px"></video>
                    <?php endif; ?>
                </div>
            </div>


        </div>
</section>
