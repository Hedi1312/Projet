<?php $listeArticles = $data["listeArticles"]; ?>

<div class="container mt-5">
    <h1 class="titreListes">Liste de mes articles</h1>

    <a class="btn btn-primary mb-5" href="index.php?module=ModArticle&action=form-ajouter" role="button">Ajouter un article</a>
    <?php if (!empty($listeArticles)): ?>
    <table class="table table-striped borderStyleTable">
        <thead>
        <tr>
            <th scope="col">Numero identification</th>
            <th scope="col">Nom article</th>
            <th scope="col">Photo 1</th>
            <th scope="col">Categorie</th>
            <th scope="col">Prix</th>
            <th scope="col">Consulter</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listeArticles as $value): ?>
            <tr>
                <td><?= $value['numeroIdentification']?></td>
                <td><?= $value['nomArticle']?></td>
                <td><img src="<?= $value['photo1']?>" alt="image <?= $value['nomArticle']?>" height="80" width="80"></td>
                <td><?= $value['categorie']?></td>
                <td><?= $value['prix']?> €</td>
                <td><a href='?module=ModArticle&action=consulter&id=<?= $value['idArticle']?>' role="button" class="btn btn-primary">Consulter</a></td>
                <td><a href='?module=ModArticle&action=supprimer&id=<?= $value['idArticle']?>' role="button" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-danger mt-5">Il n'y a actuellement aucun articles</div>
    <?php endif; ?>

</div>