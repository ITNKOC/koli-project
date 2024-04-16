<?php

class Image extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "ImageArticle"; 
    }

    public function ajouter($data)
    {
        $this->sql = "INSERT INTO " . $this->table . "(id_article, chemin_image) VALUES (:id_article, :chemin_image)";
        return $this->getLines($data, null);
    }

}