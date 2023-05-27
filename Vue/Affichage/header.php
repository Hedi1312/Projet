<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="Vue/Affichage/img/favicon-16x16.png"/>
    <link rel="stylesheet" href="./Vue/Affichage/Css/Style.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?= $data['titre']?></title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?module=ModAccueil">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?module=ModToutparcourir">Tout parcourir</a>
                </li>


                <?php if(!empty($_SESSION['admin'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajouter article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=ModGestionVendeurs">Gestion vendeurs</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger" disabled>Admin</button>
                    </li>

                <?php elseif(!empty($_SESSION['vendeur'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajouter article</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-warning" disabled>Vendeur</button>
                    </li>

                <?php elseif(!empty($_SESSION['acheteur'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=ModToutparcourir">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=ModToutparcourir">Panier</a>
                    </li>
                <?php endif; ?>
                <?php if(!empty($_SESSION)):?>

            </ul>
            <span class="navbar-text">
                <a class="nav-link lienNav" href="index.php?module=ModConnexion&action=deconnexion">Deconnexion</a>
            </span>

                <span class="navbar-text">
                <a class="nav-link" href="index.php?module=ModCompte">Mon compte</a>
            </span>
            <?php else: ?>

                </ul>
                <span class="navbar-text">
                <a class="nav-link lienNav" href="index.php?module=ModInscription">Inscription</a>
            </span>
                <span class="navbar-text">
                <a class="nav-link" href="index.php?module=ModConnexion">Mon compte</a>
            </span>
            <?php endif; ?>


        </div>
    </div>
</nav>





