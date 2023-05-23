<section class="vh-100 form_log">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="Vue/Affichage/img/pageVendeur.png" class="img-fluid" alt="Sample image" id="log_img">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModInscription&action=inscription" method="POST">

                    <!-- Pseudo -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"  placeholder="Entrer un pseudo" name="pseudo" required/>
                        <label for="form3Example3"></label>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-3">
                        <input type="email" id="form3Example7" class="form-control form-control-lg" placeholder="Entrer une adresse mail" name="login" required/>
                        <label for="form3Example7"></label>
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" placeholder="Entrer un nom" name="nom" required/>
                        <label for="form3Example8"></label>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Inscription">Inscription</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0"style="color: black;">Vous avez déjà un compte ? <a href="index.php?module=ModConnexion" class="link-danger">Connexion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>