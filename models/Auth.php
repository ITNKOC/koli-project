<?php
class Auth extends Model
{
    const ADMIN = "admin";
    const CLIENT = "client";
    private $id_utilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $mot_de_passe;
    private $date_naissance;
    private $telephone;
    private $path_image;
    private $id_role;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Utilisateur";
    }
    
    public function __get($prop)
    {
        return $this->$prop;
    }
    
    public function __set($prop, $value)
    {
        $setProp = "set" . ucfirst($prop);
        $this->$setProp($value);
    }
    
    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getPathImage()
    {
        return $this->path_image;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @param mixed $numero_telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;  
    }

    /**
     * @param mixed $path_image
     */
    public function setPathImage($path_image)
    {
        $this->path_image = $path_image;
    }

    /**
     * @param mixed $id_role
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    public function findByEmail()
    {
        $this->sql = "select u.*, r.description from $this->table u join role r on u.id_role = r.id_role  where email = :email";
        $email = ["email" => $this->email];
        return $this->getLines($email, true);
    }

    public function saveUser($datas)
    {
        $datas['id_role'] = 2;
        $this->sql = "insert into Utilisateur(nom, prenom, email,telephone, date_naissance,id_role, mot_de_passe) 
        values (:nom, :prenom, :email, :telephone, :date_naissance, :id_role, :mot_de_passe)";
        
        return $this->getLines($datas, null);
    }
}