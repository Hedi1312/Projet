<div class="container">
    <div class="produit">
        <div class="produit-images">
            <div class="slick-slider">
                <div><img src="Vue/Affichage/img/articles/iphone/iphone_1.png" alt="iPhone"></div>
                <div><img src="Vue/Affichage/img/articles/iphone/iphone_2.png" alt="iPhone"></div>
                <div><img src="Vue/Affichage/img/articles/iphone/iphone_3.png" alt="iPhone"></div>
            </div>
        </div>
        <h2 class="produit-titre text-center">Téléphone - iPhone 14 Pro Max - 128 Go - Violet Intense</h2>
        <div class="section">
            <h3 class="section-title">Description</h3>
            <p class="produit-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper ipsum at sem convallis, sed tincidunt ipsum ultrices.</p>
        </div>
        <div class="section">
            <h3 class="section-title">Prix</h3>
            <div class="produit-prix">
                €1479
            </div>
        </div>
        <div class="section">
            <h3 class="section-title">Avis clients</h3>
            <div class="avis-client">
                <div class="avis-client-note">4.5/5</div>
                <div class="avis-client-commentaire">J'adore mon nouvel iPhone 14 Pro Max Violet Intense ! La couleur est magnifique et les fonctionnalités sont incroyables. L'appareil photo est exceptionnel et la capacité de stockage de 128 Go est parfaite pour mes besoins. Je le recommande vivement !</div>
            </div>
            <div class="avis-client">
                <div class="avis-client-note">4/5</div>
                <div class="avis-client-commentaire">L'iPhone 14 Pro Max Violet Intense est un excellent téléphone. L'écran est superbe et les performances sont rapides et fluides. Cependant, je trouve que le prix est un peu élevé. Mis à part cela, c'est un superbe appareil.</div>
            </div>
            <div class="avis-client hidden">
                <div class="avis-client-note">3.7/5</div>
                <div class="avis-client-commentaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper ipsum at sem convallis, sed tincidunt ipsum ultrices.</div>
            </div>
            <div class="avis-client hidden">
                <div class="avis-client-note">4.2/5</div>
                <div class="avis-client-commentaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper ipsum at sem convallis, sed tincidunt ipsum ultrices.</div>
            </div>
            <a href="#" class="voir-tous-avis">Voir tous les avis</a>
        </div>
        <div class="produit-actions text-center">
            <div class="input-group">
                <input type="number" class="form-control produit-quantite" value="1">
                <div class="input-group-append">
                    <button class="btn btn-primary produit-bouton-ajouter">Ajouter au panier</button>
                </div>
            </div>
            <div class="produit-quantite-actions mt-2">
                <button class="btn btn-secondary produit-quantite-bouton produit-quantite-bouton-plus">+</button>
                <button class="btn btn-secondary produit-quantite-bouton produit-quantite-bouton-moins">-</button>
            </div>
        </div>
        <div class="produit-livraison">
            <p>Livraison gratuite à partir de 300€ d'achat</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialiser le carousel
        $('.slick-slider').slick();

        // Ajouter au panier
        $('.produit-bouton-ajouter').click(function() {
            var quantite = $('.produit-quantite').val();

            if (quantite > 0) {
                // Effectuer une action d'ajout au panier
                alert('Le produit a été ajouté au panier avec une quantité de ' + quantite + '.');
            } else {
                alert('Veuillez spécifier une quantité supérieure à 0 pour ajouter le produit au panier.');
            }
        });

        // Augmenter la quantité
        $('.produit-quantite-bouton-plus').click(function() {
            var quantite = parseInt($('.produit-quantite').val());
            $('.produit-quantite').val(quantite + 1);
        });

        // Diminuer la quantité
        $('.produit-quantite-bouton-moins').click(function() {
            var quantite = parseInt($('.produit-quantite').val());
            if (quantite > 1) {
                $('.produit-quantite').val(quantite - 1);
            }
        });

        // Gérer l'affichage des avis
        $('.avis-client').slice(2).hide();

        $('.voir-tous-avis').click(function(e) {
            e.preventDefault();
            $('.avis-client').show();
            $(this).hide();
        });
    });
</script>