<?php
class Paniers extends Controllers{
    public function __construct()
    {
        parent:: __construct();
    }

    public function checkout()
    {
        $this->render("checkout");
    }

    public function shopCart()
    {
        $panier = new Panier();
        $articles = [];
        $articles = $panier->getAll();
        $this->render("shopCart",["articles"=>$articles] );

    }
    public function ajouter($id_article){

        $panier = new Panier();
        $panier->ajouter($id_article, 1);
        header("Location: " . URI . "paniers/shopCart");
    }

    public function supprimer($id_article){
        if(is_numeric($id_article)){
            $panier = new Panier();
            $panier->supprimer($id_article);
            header("Location: " . URI . "paniers/shopCart");
        }
    }

    public function modifier($id_article){
        if(is_numeric($id_article)){
            $quantite = $_POST["quantite"];
            $panier = new Panier();
            $panier->ajouter($id_article, $quantite);
            header("Location: " . URI . "paniers/shopCart");
        }
    }

    

}