<section class="vh-200 form_log">
    <h1 id="h1Vendeur">Ajouter article</h1>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="Vue/Affichage/img/autres/article_ajouter.png" class="img-fluid form_connexion_img" alt="ajouter article image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="index.php?module=ModArticle&action=ajouter" method="POST" enctype="multipart/form-data">

                    <!-- Numero identification input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example1" class="form-control form-control-lg" placeholder="Numero identification" name="numeroIdentification" required/>
                        <label for="form3Example1"></label>
                    </div>

                    <!-- Nom input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example2" class="form-control form-control-lg" placeholder="Nom article" name="nom" required/>
                        <label for="form3Example2"></label>
                    </div>

                    <!-- Description input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Description" name="description" required/>
                        <label for="form3Example3"></label>
                    </div>

                    <!-- Image input -->
                    <div class="mb-3">
                        <input type="file" id="form3Example4" class="form-control form-control-lg" name="image1" required/>
                        <label for="form3Example4"></label>
                    </div>

                    <!-- Image 2 input -->
                    <div class="mb-3">
                        <input type="file" id="form3Example5" class="form-control form-control-lg" name="image2" required/>
                        <label for="form3Example5"></label>
                    </div>

                    <!-- Image 3 input -->
                    <div class="mb-3">
                        <input type="file" id="form3Example6" class="form-control form-control-lg" name="image3" required/>
                        <label for="form3Example6"></label>
                    </div>

                    <!-- Video input -->
                    <div class="mb-3">
                        <input type="file" id="form3Example7" class="form-control form-control-lg" name="video"/>
                        <label for="form3Example7"></label>
                    </div>

                    <!-- Categorie input -->
                    <div class="mb-3">
                        <select class="form-select" name="categorie" aria-label="Default select example">
                            <option selected>Categorie</option>
                            <option value="Rare">Articles rares</option>
                            <option value="Haut de gamme">Articles haut de gamme</option>
                            <option value="Reguliers">Articles reguliers</option>
                        </select>
                    </div>

                    <!-- Prix input -->
                    <div class="mb-3">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="prix" placeholder="Prix en €" required/>
                        <label for="form3Example8"></label>
                    </div>

                    <div class="text-center text-lg-end mt-4 pt-2">
                        <button type="reset" class="btn btn-danger btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Effacer</button>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Ajouter article</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
