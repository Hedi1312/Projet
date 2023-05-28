<?php
$listeVendeurs = $data["listeVendeurs"];


if (!empty($listeVendeurs)): ?>


<div class="container mt-5">
    <h1 class="titreListes">Liste de mes vendeurs</h1>

    <table class="table table-striped borderStyleTable">
        <thead>
        <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Email</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listeVendeurs as $value): ?>
            <tr>
                <td><?= $value['pseudo'] ?> </td>
                <td><?= $value['email']?></td>
                <td><?= $value['nom']?></td>
                <td><img src="<?= $value['img']?>" alt="image profil" height="80" width="80"></td>
                <td><a href='?module=ModGestionVendeurs&action=supprimer&id=<?= $value['idVendeur']?>' role="button" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-danger mt-5">Il n'y a actuellement aucun vendeur</div>
        <div class="float-end">
            <a class="btn btn-danger" href="index.php?module=ModGestionVendeurs" role="button">Revenir a la gestion des vendeurs</a>
        </div>
    <?php endif; ?>

</div>