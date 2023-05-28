<div class="container-fluid">
    <div id="toutparcourir" class="row">
        <section id="section-categories" class="section col">
            <h2 class="classe-h2">Catégories</h2>
            <div class="categories">
                <div class="categorie">
                    <h3 class="classe-h3">Articles rares</h3>
                    <div class="articles">
                        <div class="article" data-categorie="rare" data-achat="immédiat">
                            <img src="Vue/Affichage/img/articles/carte_graphique/carte_graphique.png" class="d-block w-100" alt="Carte Graphique">
                            <p>Carte Graphique - Nvidia GeForce RTX 4090 - Asus ROG</p>
                        </div>
                        <div class="article" data-categorie="rare" data-achat="transaction">
                            <img src="Vue/Affichage/img/articles/ram/ram.png" class="d-block w-100" alt="Barette de RAM">
                            <p>Barette de RAM - Corsair Vengence DDR5 4x48 Go @5200 MHz</p>
                        </div>
                        <div class="article" data-categorie="rare" data-achat="offre">
                            <img src="Vue/Affichage/img/articles/processeur/processeur.png" class="d-block w-100" alt="Processeur">
                            <p>Processeur - Intel Core i9 @5.8 GHz</p>
                        </div>
                    </div>
                </div>
                <div class="categorie">
                    <h3 class="classe-h3">Articles haut de gamme</h3>
                    <div class="articles">
                        <div class="article" data-categorie="haut-de-gamme" data-achat="immédiat">
                            <img src="Vue/Affichage/img/articles/iphone/iphone_1.png" class="d-block w-100" alt="iPhone">
                            <p>Téléphone - iPhone 14 Pro Max - 128 Go - Violet Intense</p>
                        </div>
                        <div class="article" data-categorie="haut-de-gamme" data-achat="transaction">
                            <img src="Vue/Affichage/img/articles/macbook/macbook.png" class="d-block w-100" alt="Macbook">
                            <p>Laptop - MacBook Pro 16" - M2 Max - 32 Go - SSD 1 To</p>
                        </div>
                        <div class="article" data-categorie="haut-de-gamme" data-achat="offre">
                            <img src="Vue/Affichage/img/articles/frigo/frigo.png" class="d-block w-100" alt="Frigo">
                            <p>Frigo - Samsung Smart Fridge - Carbon Black</p>
                        </div>
                    </div>
                </div>
                <div class="categorie">
                    <h3 class="classe-h3">Articles réguliers</h3>
                    <div class="articles">
                        <div class="article" data-categorie="régulier" data-achat="immédiat">
                            <img src="Vue/Affichage/img/articles/casque/casque.png" class="d-block w-100" alt="Casque">
                            <p>Casque - Logitech G Pro X - League of Legends Edition</p>
                        </div>
                        <div class="article" data-categorie="régulier" data-achat="transaction">
                            <img src="Vue/Affichage/img/articles/clavier/clavier.png" class="d-block w-100" alt="Clavier">
                            <p>Clavier - Logitech G915 Lightspeed TKL - Switch GL Tactile</p>
                        </div>
                        <div class="article" data-categorie="régulier" data-achat="offre">
                            <img src="Vue/Affichage/img/articles/souris/souris.png" class="d-block w-100"" alt="Souris">
                            <p>Souris - Logitech G502 Lightspeed</p>
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