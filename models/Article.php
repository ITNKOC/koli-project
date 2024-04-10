<?php 
class Article extends Model{
    public function __construct(){
        parent::__construct();
        $this->table = 'article';
    }
    public function getAll()
    {
        $this->sql = "SELECT a.*,i.chemin_Image FROM " . $this->table . " f 
            LEFT JOIN ImageArticle i on a.id_article = i.id_article;";
        return $this->getLines();
    }

    public function getProductById($data)
    {
        $this->sql = "SELECT * from " . $this->table . " f 
            LEFT JOIN ImageArticle i on f.id_article = i.id_article where f.id_article = :id_article";
        return $this->getLines($data, true);
    }

    public function ajouterCategorie($data)
    {
        $this->sql = "insert into categorie (nom_categorie) 
        values (:nom_categorie)";
        return $this->getLines($data, null);
    }
    
    public function ajouterArticle($data)
    {
        $this->sql = "insert into " . $this->table . "(nomArticle,prix,courte_description,description,statut,quantite,) 
            value (:nomArticle,:prix,:description,:courte_description,:quantite)";
        return $this->getLines($data, null);
    }

    public function update($data)
    {
        $this->sql = "update " . $this->table . " set nomArticle =:nomArticle,prix=:prix,
        desciption=:desciption,
        courte_description=:courte_description,
        quantite=:quantite where id_article = :id";
        $this->getLines($data, null);
    }

    public function delete($data)
    {
        $this->sql = "delete from " . $this->table . " where id_article = :id_article";
        $this->getLines($data, null);
    }

    public function findProductByName($data)
    {
        $this->sql = "select * from " . $this->table . " where nomArticle = :nomArticle";
        $this->getLines($data);
    }
}

?>