<?php

class Articles extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->render("index");
    }
    public function addCategory()
    {
        if (isset($_POST['nom_categorie'])) {
            if (!$this->estVide($_POST)) {
                unset($_POST['nom_categorie']);
                $article = new Article();
                $article->ajouterCategorie($_POST);
            }
        }
        $this->render("addCategory",[],true);
    }
    public function addProduct()
    {
        // if (isset($_SESSION['utilisateur'])) {
            // if (strtolower($_SESSION['utilisateur']->description) === Auth::ADMIN) {
                if (isset($_POST['addProduct'])) {
                    if (!$this->estVide($_POST)) {
                        unset($_POST['addProduct']);
                        $article = new Article();
                        $article->ajouterArticle($_POST);
                        global $oPDO;
                        $id_article = $oPDO->lastInsertId();
                        $this->importImage($id_article);
                    }
                }
                $this->render("addProduct",[],true);
            // }
            // header("Location: " . URI . "articles/index");
        // }
        // header("Location: " . URI . "articles/index");
    }


    public function shop(){

        $this->render("shop");
    }
    public function productDetails(){
        $this->render("productDetails");
    }

    function importImage($id_Article)
    {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
            $image_name = $_FILES["image"]["name"];
            $image_tmp = $_FILES["image"]["tmp_name"];
            $image_destination = "assets/images/" . basename($image_name); // Chemin de destination du fichier sur le serveur

            // Vérifier que le fichier est une image (facultatif mais recommandé)
            // images/a-2-1634829071.JPG
            $image_type = strtolower(pathinfo($image_destination, PATHINFO_EXTENSION));
            // jpg
            if (!in_array($image_type, array("jpg", "jpeg", "png", "gif"))) {
                echo "Seules les images JPG, JPEG, PNG et GIF sont autorisées.";
                exit();
            }

            // Déplacer l'image téléchargée vers le dossier spécifié
            if (move_uploaded_file($image_tmp, ROOT . $image_destination)) {
                $image = new Image();
                $data = ["id_Article" => $id_Article,
                    "chemin_image" => $image_destination];
                $image->ajouter($data);
            }
        }
    }

    public function admin()
    {

        $Article = new Article();
        $Articles = $Article->getAll();
        $this->render("admin", compact('Articles'));

    }

    public function supprimer($id_Article)
    {
        if (is_numeric($id_Article)) {
            $Article = new Article();
            $data = [
                "id_Article" => $id_Article
            ];
            $Article->delete($data);
            header("Location: " . URI . "Articles/admin");
        }
    }


}