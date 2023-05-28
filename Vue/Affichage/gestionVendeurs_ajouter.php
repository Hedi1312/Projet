<section class="vh-100 form_log">
    <h1 id="h1Vendeur">Ajouter vendeur</h1>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="Vue/Affichage/img/autres/ajouter.png" class="img-fluid form_connexion_img" alt="ajouter acheteur image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModGestionVendeurs&action=ajouter" method="POST" enctype="multipart/form-data">

                    <!-- Pseudo input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example1" class="form-control form-control-lg" placeholder="Pseudo" name="pseudo" required/>
                        <label for="form3Example1"></label>
                    </div>

                    <!-- Email input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example2" class="form-control form-control-lg" placeholder="Adresse mail" name="email" required/>
                        <label for="form3Example2"></label>
                    </div>

                    <!-- Nom input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nom" name="nom" required/>
                        <label for="form3Example3"></label>
                    </div>

                    <!-- Image input -->
                    <div class="mb-3">
                        <input type="file" id="form3Example4" class="form-control form-control-lg" name="imageVendeur" required/>
                        <label for="form3Example4"></label>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Ajouter vendeur</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
