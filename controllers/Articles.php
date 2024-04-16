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
    if (isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']->description) === Auth::ADMIN) {
        if (isset($_POST['nom_categorie']) && !$this->estVide($_POST)) {
            $article = new Article();
            try {
                $article->ajouterCategorie($_POST['nom_categorie']);
                
                $this->render("addCategory", ["success" => true], true);
            } catch (Exception $e) {

                $this->render("addCategory", ["error" => $e->getMessage()], true);
            }
        } else {

            $this->render("addCategory", ["error" => "Category name is required"], true);
        }
    } else {
        header("Location: " . URI . "articles/index");
    }
    }
    public function addProduct()
    {
        if (isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']->description) === Auth::ADMIN) {
            $article = new Article();
            $categories = $article->getCategories();

            if (isset($_POST['addProduct'])) {
                // Vérification des champs requis
                $required_fields = ['nomArticle', 'id_categorie', 'quantite', 'courte_description', 'description', 'prix', 'statut'];
                $missing_fields = [];
                foreach ($required_fields as $field) {
                    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                        $missing_fields[] = $field;
                    }
                }

                if (!empty($missing_fields)) {
                    $this->render("addProduct", ["categories" => $categories, "error" => "The following fields are required: " . implode(', ', $missing_fields)], true);
                    return;
                }

                // Tous les champs requis sont remplis, procéder à l'ajout du produit
                unset($_POST['addProduct']);
                try {
                    $article->ajouterArticle($_POST);
                    $id_article = $article->getLastInsertedId();
                    $this->importImage($id_article);
                    $this->render("addProduct", ["categories" => $categories, "success" => true], true);
                    return;
                } catch (Exception $e) {
                    $this->render("addProduct", ["categories" => $categories, "error" => $e->getMessage()], true);
                    return;
                }
            }

            $this->render("addProduct", ["categories" => $categories], true);
            return;
        } else {
            header("Location: " . URI . "articles/index");
            return;
        }
    }


    function importImage($id_article)
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
                $data = ["id_article" => $id_article,
                    "chemin_image" => $image_destination];
                $image->ajouter($data);
            }
        }
    }

    function EditImportImage($id_article)
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
                $data = ["id_article" => $id_article,
                    "chemin_image" => $image_destination];
                $image->update($data);
            }
        }
    }
    
    public function admin()
    {

        $Article = new Article();
        $Articles = $Article->getAll();
        $this->render("admin", compact('Articles'));

    }

    public function shop(){
        $articles = [];
        $article = new Article();
        $articles = $article->getAll();
        $categories = $article->getCategories();
        

        $this->render("shop",["articles"=>$articles,"categories"=>$categories],false);
    }

    public function productDetails($id_article){
        $article = new Article();
        $data = [
            'id_article' => $id_article
        ];
        $articles = $article->getProductById($data);
    
        // Vérifier si des articles ont été récupérés
        if ($articles) {
            // Articles trouvés, afficher la page des détails du produit
            $this->render("productDetails", ["articles" => $articles], false);
        } else {
            // Aucun article trouvé avec cet identifiant, rediriger ou afficher un message d'erreur
            // Exemple de redirection :
            // header("Location: /erreur404"); 
            // exit();
            // Ou afficher un message d'erreur dans la vue
            echo "Aucun article trouvé avec cet identifiant.";
        }
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
    public function editCategory($id_categorie) {
        $categorieModel = new Article();
        $category = $categorieModel->getCategoryById($id_categorie);
    
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateCategory'])) {
            $nom_categorie = $_POST['nom_categorie'];
            if (!empty($nom_categorie)) {
                $data = [
                    "id_categorie" => $id_categorie,
                    "nom_categorie" => $nom_categorie
                ];
                $categorieModel->updateCategory($data);
                $success = true;
            } else {
                $error = "Category name cannot be empty.";
            }
        }
        
        $this->render("editCategory", compact('category', 'success', 'error'), true);
    }
    
    
    public function categoryList(){
        $categorie = new Article;
        $categories = $categorie->getCategories();
        $this->render("categoryList",["categories"=>$categories],true);
    }

    public function productList(){
        $articles = [];
        $article = new Article();
        $articles = $article->getAll();
        $this->render("productList",["articles"=>$articles],true);
    }

    
    public function editProduct($id_article)
    {
        if (isset($_SESSION['utilisateur']) && strtolower($_SESSION['utilisateur']->description) === Auth::ADMIN) {
            $article = new Article();
            $categories = $article->getCategories();
            $product = $article->getProductById(['id_article' => $id_article]);
    
            if (isset($_POST['updateProduct'])) {
                // Vérification des champs requis
                $required_fields = ['nomArticle', 'id_categorie', 'quantite', 'courte_description', 'description', 'prix', 'statut'];
                $missing_fields = [];
                foreach ($required_fields as $field) {
                    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                        $missing_fields[] = $field;
                    }
                }
    
                if (!empty($missing_fields)) {
                    $this->render("editProduct", ["product" => $product, "categories" => $categories, "error" => "The following fields are required: " . implode(', ', $missing_fields)], true);
                    return;
                }
    
                // Tous les champs requis sont remplis, procéder à la mise à jour du produit
                try {
                    $data = [
                        'id_article' => $id_article,
                        'nomArticle' => $_POST['nomArticle'],
                        'id_categorie' => $_POST['id_categorie'],
                        'quantite' => $_POST['quantite'],
                        'courte_description' => $_POST['courte_description'],
                        'description' => $_POST['description'],
                        'prix' => $_POST['prix'],
                        'statut' => $_POST['statut']
                    ];
                    $article->update($data);
                    
                    // Importer l'image
                    $this->EditImportImage($id_article);
                
                    $this->render("editProduct", ["product" => $product, "categories" => $categories, "success" => true], true);
                    return;
                } catch (Exception $e) {
                    $this->render("editProduct", ["product" => $product, "categories" => $categories, "error" => $e->getMessage()], true);
                    return;
                }
            }
    
            $this->render("editProduct", ["product" => $product, "categories" => $categories], true);
            return;
        } else {
            header("Location: " . URI . "articles/index");
            return;
        }
    }
    


}