<section class="form_log">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-md-9 col-lg-6 col-xl-5">
                <h2 id="h2inscription">Inscription Acheteur</h2>
                <img src="Vue/Affichage/img/autres/acheteur.jpg" class="img-fluid" alt="Sample image" id="ins_img">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModInscription&action=inscription" method="POST">
                    <!-- Nom -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example1" class="form-control form-control-lg"  placeholder="Nom" name="nom" required/>
                        <label for="form3Example1"></label>
                    </div>

                    <!-- Prenom -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example2" class="form-control form-control-lg"  placeholder="Prenom" name="prenom" required/>
                        <label for="form3Example2"></label>
                    </div>

                    <!-- Pseudo -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"  placeholder="Pseudo" name="pseudo" required/>
                        <label for="form3Example3"></label>
                    </div>

                    <!-- Adresse 1 -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example4" class="form-control form-control-lg"  placeholder="Adresse 1" name="adresse1" required/>
                        <label for="form3Example4"></label>
                    </div>

                    <!-- Adresse 2 -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example5" class="form-control form-control-lg"  placeholder="Adresse 2 (facultatif)" name="adresse2"/>
                        <label for="form3Example5"></label>
                    </div>

                    <!-- Ville -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example6" class="form-control form-control-lg"  placeholder="Ville" name="ville" required/>
                        <label for="form3Example6"></label>
                    </div>

                    <!-- Code postal -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example7" class="form-control form-control-lg"  placeholder="Code postal" name="codePostal" required/>
                        <label for="form3Example7"></label>
                    </div>

                    <!-- Pays -->
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example8" class="form-control form-control-lg"  placeholder="Pays" name="pays" required/>
                        <label for="form3Example8"></label>
                    </div>

                    <!-- Numero -->
                    <div class="form-outline mb-3">
                        <input type="tel" id="form3Example9" class="form-control form-control-lg"  placeholder="Numero" name="numero" required/>
                        <label for="form3Example9"></label>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-3">
                        <input type="email" id="form3Example10" class="form-control form-control-lg" placeholder="Adresse mail" name="email" required/>
                        <label for="form3Example10"></label>
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example11" class="form-control form-control-lg" placeholder="Mot de passe" name="mdp" required/>
                        <label for="form3Example11"></label>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Inscription">Inscription</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0"style="color: black;">Vous avez déjà un compte ? <a href="index.php?module=ModConnexion" class="link-danger">Connexion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>