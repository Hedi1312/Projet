<?php

require_once "./Vue/vue_article.php";
require_once "./modules/ModArticle/modele_article.php";


class ContArticle {

    private $modele;
    private $vue;

    function __construct () {
        $this->vue = new VueArticle();
        $this->modele = new ModeleArticle();
    }

    function accueil(){
        $listeArticle = $this->modele->getListeArticles();
        $this->vue->accueil($listeArticle);
    }

    public function supprimer(){
        $idArticle = $_GET["id"];
        $this->modele->supprimerArticle($idArticle);
        header('Location: index.php?module=ModArticle');
    }

    function formAjouter(){
        $this->vue->formAjouter();
    }

    function ajouter(){
        $numeroIdentification=$_POST['numeroIdentification'];
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        $categorie=$_POST['categorie'];
        $prix=$_POST['prix'];

        $img_name = $_FILES['image1']['name'];
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $origine1 = $_FILES['image1']['tmp_name'];
        $destination1 = "Vue/Affichage/img/articles/".$new_img_name;

        $img_name = $_FILES['image2']['name'];
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $origine2 = $_FILES['image2']['tmp_name'];
        $destination2 = "Vue/Affichage/img/articles/".$new_img_name;

        $img_name = $_FILES['image3']['name'];
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $origine3 = $_FILES['image3']['tmp_name'];
        $destination3 = "Vue/Affichage/img/articles/".$new_img_name;

        move_uploaded_file($origine1,$destination1);
        move_uploaded_file($origine2,$destination2);
        move_uploaded_file($origine3,$destination3);

        try {
            $this->modele->ajoutArticle($numeroIdentification,$nom,$description,$destination1,$destination2,$destination3,$video,$categorie,$prix);
            $this->vue->alerte_message("Un article a été ajouté avec succès</br>Retour sur <a href='index.php?module=ModArticle' class='alert-link'>vos articles</a>","success","index.php?module=ModArticle");
        }
        catch (Exception $e) {
            $this->vue->alerte_message("Erreur l'adresse mail : $email est deja associée à un compte</br>Veuillez réessayer votre <a href='index.php?module=ModArticle&action=form-ajouter' class='alert-link'>ajout de vendeur</a>","danger","index.php?module=ModArticle&action=form-ajouter");
        }
    }

}