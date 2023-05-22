<section class="vh-100 form_log">
    <h1 id="h1Vendeur">Espace vendeur</h1>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="Vue/Affichage/img/pageVendeur.png" class="img-fluid" alt="Sample image" id="log_img">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModConnexionVendeur&action=connexion" method="POST">

                    <!-- Pseudo input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example1" class="form-control form-control-lg" placeholder="Entrer un pseudo" name="pseudo" required/>
                        <label for="form3Example1"></label>
                    </div>

                    <!-- Email input -->
                    <div class="mb-3">
                        <input type="email" id="form3Example2" class="form-control form-control-lg" placeholder="Entrer une adresse mail" name="login" required/>
                        <label for="form3Example2"></label>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Connexion</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0"style="color: black;">Vous n'avez pas de compte ? <a href="index.php?module=ModInscriptionVendeur" class="link-danger">Inscription</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
