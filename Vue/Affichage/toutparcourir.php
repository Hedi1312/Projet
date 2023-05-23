<div class="container-fluid">
    <div id="toutparcourir" class="row">
        <section id="section-categories" class="section col">
            <h2 class="classe-h2">Catégories</h2>
            <div class="categories">
                <div class="categorie">
                    <h3 class="classe-h3">Articles rares</h3>
                    <div class="articles">
                        <div class="article" data-categorie="rare" data-achat="immédiat">
                            <img src="Vue/Affichage/img/carte_graphique.png" class="img-thumbnail" alt="Carte Graphique">
                            <p>Carte Graphique - Nvidia GeForce RTX 4090</p>
                        </div>
                        <div class="article" data-categorie="rare" data-achat="transaction">
                            <img src="Vue/Affichage/img/ram.png" class="img-thumbnail" alt="Barette de RAM">
                            <p>Barette de RAM - Corsair Vengence DDR5 4x48 Go @</p>
                        </div>
                        <div class="article" data-categorie="rare" data-achat="offre">
                            <img src="Vue/Affichage/img/processeur.png" class="img-thumbnail" alt="Processeur">
                            <p>Processeur</p>
                        </div>
                    </div>
                </div>
                <div class="categorie">
                    <h3 class="classe-h3">Articles haut de gamme</h3>
                    <div class="articles">
                        <div class="article" data-categorie="haut-de-gamme" data-achat="immédiat">
                            <img src="chemin/vers/image4.jpg" alt="Article haut de gamme 1">
                            <p>Article haut de gamme 1 description</p>
                        </div>
                        <div class="article" data-categorie="haut-de-gamme" data-achat="transaction">
                            <img src="chemin/vers/image5.jpg" alt="Article haut de gamme 2">
                            <p>Article haut de gamme 2 description</p>
                        </div>
                        <div class="article" data-categorie="haut-de-gamme" data-achat="offre">
                            <img src="chemin/vers/image6.jpg" alt="Article haut de gamme 3">
                            <p>Article haut de gamme 3 description</p>
                        </div>
                    </div>
                </div>
                <div class="categorie">
                    <h3 class="classe-h3">Articles réguliers</h3>
                    <div class="articles">
                        <div class="article" data-categorie="régulier" data-achat="immédiat">
                            <img src="affichage/img/clavier.png" alt="Clavier">
                            <p>Article régulier 1 description</p>
                        </div>
                        <div class="article" data-categorie="régulier" data-achat="transaction">
                            <img src="chemin/vers/image8.jpg" alt="Article régulier 2">
                            <p>Article régulier 2 description</p>
                        </div>
                        <div class="article" data-categorie="régulier" data-achat="offre">
                            <img src="chemin/vers/image9.jpg" alt="Article régulier 3">
                            <p>Article régulier 3 description</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-filtres" class="section col-md-4 col-lg-3">
            <h2 class="classe-h2">Filtres</h2>
            <div class="filtres">
                <div class="filtre" data-filtre="tous">
                    <h4 class="classe-h4">Tous les articles</h4>
                </div>
                <div class="filtre" data-filtre="immédiat">
                    <h4 class="classe-h4">Achat immédiat</h4>
                </div>
                <div class="filtre" data-filtre="transaction">
                    <h4 class="classe-h4">Transaction vendeur-client</h4>
                </div>
                <div class="filtre" data-filtre="offre">
                    <h4 class="classe-h4">Meilleure offre</h4>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    // Fonction pour afficher tous les articles
    function afficherTousLesArticles() {
        var articles = document.querySelectorAll('.article');
        articles.forEach(function (article) {
            article.style.display = 'block';
        });
    }

    // Fonction pour afficher les articles correspondant au filtre sélectionné
    function filtrerArticles(filtre) {
        // Cacher tous les articles
        var articles = document.querySelectorAll('.article');
        articles.forEach(function (article) {
            article.style.display = 'none';
        });

        // Afficher les articles correspondant au filtre sélectionné
        if (filtre === 'tous') {
            afficherTousLesArticles();
        } else {
            var articlesFiltres = document.querySelectorAll('.article[data-achat="' + filtre + '"]');
            articlesFiltres.forEach(function (articleFiltre) {
                articleFiltre.style.display = 'block';
            });
        }
    }

    // Gérer les clics sur les boutons de filtre
    var boutonsFiltre = document.querySelectorAll('.filtre');
    boutonsFiltre.forEach(function (boutonFiltre) {
        boutonFiltre.addEventListener('click', function () {
            var filtre = boutonFiltre.getAttribute('data-filtre');
            filtrerArticles(filtre);
        });
    });

    // Gérer le clic sur le bouton "Tous les articles"
    var boutonTous = document.querySelector('.filtre[data-filtre="tous"]');
    boutonTous.addEventListener('click', function () {
        afficherTousLesArticles();
    });
</script>
</body>
</html>
