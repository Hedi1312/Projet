<section class="vh-100 form_log">
    <h1 id="h1Vendeur">Espace acheteur</h1>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="Vue/Affichage/img/acheteur.jpg" class="img-fluid form_connexion_img" alt="acheteur image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModConnexion&action=connexionAcheteur" method="POST">

                    <!-- Email input -->
                    <div class="mb-3">
                        <input type="email" id="form3Example1" class="form-control form-control-lg" placeholder="Adresse mail" name="email" required/>
                        <label for="form3Example1"></label>
                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <input type="password" id="form3Example2" class="form-control form-control-lg" placeholder="Mot de passe" name="mdp" required/>
                        <label for="form3Example2"></label>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Connexion</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0"style="color: black;">Vous n'avez pas de compte ? <a href="index.php?module=ModInscription" class="link-danger">Inscription</a></p>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
