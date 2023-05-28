<section class="vh-400 form_log">
    <div class="container">
        <div class="produit">
            <div class="produit-images">
                <div class="slick-slider">
                    <div><img src="<?= $data['photo1']?>" alt="image <?= $data['nomArticle']?>"></div>
                    <div><img src="<?= $data['photo2']?>" alt="image <?= $data['nomArticle']?>"></div>
                    <div><img src="<?= $data['photo3']?>" alt="image <?= $data['nomArticle']?>"></div>
                    <video controls src="<?= $data['video']?>"></video>
                </div>
            </div>
            <h2 class="produit-titre text-center"><?= $data['categorie']?> - <?= $data['nomArticle']?></h2>
            <div class="section">
                <h3 class="section-title">Description</h3>
                <div class="section">
                    <p class="produit-description">
                        <?= $data['description']?>
                    </p>
                </div>

            </div>
            <div class="section">
                <h3 class="section-title">Prix</h3>
                <div class="produit-prix">
                    €1479
                </div>
            </div>

            <div class="produit-actions text-center">
                <div class="input-group">
                    <select class="form-select produit-quantite" aria-label="Quantité">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-primary produit-bouton-ajouter">Ajouter au panier</button>
                    </div>
                </div>
            </div>

            <div class="mt-3"></div>

            <div class="produit-livraison bg-light p-3 rounded">
                <div class="row">
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="logo-postal">
                            <img src="Vue/Affichage/img/logo_postal.png" alt="Logo postal">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h4>Livraison rapide & sécurisé</h4>
                        <p>Prix standard de la livraison : 5,99 € - Envoi sous 2 jours ouvrés !</p>
                        <p>Profitez de la livraison express et sécurisé pour 12,99 € !</p>
                        <p>Nous nous efforçons de vous livrer dans les plus brefs délais afin que vous puissiez profiter de votre achat rapidement.</p>
                        <p>Pour toute question ou demande concernant la livraison, n'hésitez pas à contacter notre service client.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialiser le carousel
        $('.slick-slider').slick();

        // Gérer l'affichage des avis
        $('.avis-client').slice(2).hide();

        $('.voir-tous-avis').click(function(e) {
            e.preventDefault();
            $('.avis-client').show();
            $(this).hide();
        });

        // Ajouter au panier
        $('.produit-bouton-ajouter').click(function() {
            var quantite = $('.produit-quantite').val();

            if (quantite > 0) {
                // Effectuer une action d'ajout au panier
                alert('Le produit a été ajouté au panier avec une quantité de ' + quantite + '.');
            }
        });
    });
</script>