<?php
class Panier{
    const PANIER = "Paniers";

    public function __construct()
    {
        if (!isset($_SESSION[self::PANIER])) {
            $_SESSION[self::PANIER] = [];
        }
    }

    public function ajouter($id, $quantite)
    {
        if(!isset($_SESSION[self::PANIER])){
        $_SESSION[self::PANIER][$id] = $quantite;
        }
    }
    public function supprimer($id){
        unset($_SESSION[self::PANIER][$id]);
    }

    public function getAll()
    {
        $articles = [];
        // [id] => quantite
        foreach ($_SESSION[self::PANIER] as $id_article => $quantite) {
            $article = new Article();
            $articles[] = [$quantite, $article->getProductById(compact("id_article"))];
        }
        return $articles;
    }
            

    
}