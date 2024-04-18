<?php
class Panier{
    const PANIER = "Paniers";

    public function __construct()
    {
        if (!isset($_SESSION[self::PANIER])) {
            $_SESSION[self::PANIER] = [];
        }
    }

    public function ajouter($id_article, $quantite)
    {
            $_SESSION[self::PANIER][$id_article] = $quantite;
            if($quantite==0){
                unset($_SESSION[self::PANIER][$id_article]);
            }
        
      
    }
    
    public function supprimer($id){
        unset($_SESSION[self::PANIER][$id]);
    }

    public function getAll()
    {
    $articles = [];
    $articleModel = new Article();

    foreach ($_SESSION[self::PANIER] as $id_article => $quantite) {
        $articleDetails = $articleModel->getProductByIdPanier(["id_article" => $id_article]);
        if ($articleDetails) {
            $articles[] = [$quantite, $articleDetails];
        } else {
            // Gérez le cas où l'article n'existe plus dans la base de données
            // Par exemple, vous pouvez supprimer l'article du panier
            unset($_SESSION[self::PANIER][$id_article]);
        }
    }
    return $articles;
    }  
}