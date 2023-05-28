<?php $listeArticlePanier = $data["listeArticlePanier"]; ?>

<section class="vh-400 form_log">
    <div class="container">
        <h1 class="panier-title">Panier</h1>

        <?php if (!empty($listeArticlePanier)): ?>
        <table class="table table-striped borderStyleTable">
            <thead>
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantite</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listeArticlePanier as $value): ?>
                <tr>
                    <td><img src="<?= $value['photo1']?>" alt="image <?= $value['nomArticle']?>" height="80" width="80"></td>
                    <td><?= $value['nomArticle']?></td>
                    <td><?= $value['nomArticle']?></td>
                    <td><?= $value['prix']?></td>
                    <td><?= $value['prix']*$value['quantite']?> €</td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <?php else: ?>
            <div class="alert alert-danger mt-5">Il n'y a actuellement aucun articles dans votre panier</div>
        <?php endif; ?>

        <div class="panier-actions">
            <button class="btn btn-primary update-cart">Mettre à jour le panier</button>
            <button class="btn btn-success empty-cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                </svg>
                Paiement
            </button>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title" style="font-weight:bold;">Prix final</h4>
                <div class="total-amount" style="font-weight:bold;">
                    <span>Total :</span>
                    <span class="total-price"><?= $data['total']?> €</span>
                </div>
            </div>
        </div>

    </div>
</section>