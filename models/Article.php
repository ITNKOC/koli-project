<?php 

class Article extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'article';
        $this->sql = ''; 
    }

    public function getLastInsertedId()
    {
        global $oPDO;
        return $oPDO->lastInsertId();
    }

    public function getAll()
    {
        $this->sql = "SELECT a.*, i.chemin_Image FROM " . $this->table . " a 
            LEFT JOIN ImageArticle i ON a.id_article = i.id_article";
        return $this->getLines();
    }

    public function getProductById($data)
    {
        $this->sql = "SELECT * FROM " . $this->table . " f 
            LEFT JOIN ImageArticle i ON f.id_article = i.id_article WHERE f.id_article = :id_article";
        return $this->getLines($data, true);
    }

    public function ajouterCategorie($nom_categorie)
    {
        $this->sql = "INSERT INTO categorie (nom_categorie) VALUES (:nom_categorie)";
        $params = ["nom_categorie" => $nom_categorie];
        return $this->getLines($params, null);
    }

    public function getCategories() {
        $this->sql = "SELECT * FROM categorie";
        return $this->getLines([], false); 
    }
    
    public function ajouterArticle($data)
    {
        $this->sql = "INSERT INTO " . $this->table . " (nomArticle, prix, courte_description, description, statut, quantite, id_categorie) 
            VALUES (:nomArticle, :prix, :courte_description, :description, :statut, :quantite, :id_categorie)";
        return $this->getLines($data, null);
    }

    public function update($data)
    {
        $this->sql = "UPDATE " . $this->table . " SET nomArticle = :nomArticle, prix = :prix, desciption = :desciption, courte_description = :courte_description, quantite = :quantite WHERE id_article = :id";
        $this->getLines($data, null);
    }
    public function updateCategory($data)
    {
        $this->sql = "UPDATE Categorie SET nom_categorie = :nom_categorie WHERE id_categorie = :id_categorie";
        $this->getLines($data, null);
    }

    public function delete($data)
    {
        $this->sql = "DELETE FROM " . $this->table . " WHERE id_article = :id_article";
        $this->getLines($data, null);
    }

    public function findProductByName($data)
    {
        $this->sql = "SELECT * FROM " . $this->table . " WHERE nomArticle = :nomArticle";
        $this->getLines($data);
    }
}

?>