<?php
class Auth extends Model
{
    private $id_utilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $mot_de_passe;
    private $date_naissance;
    private $numero_telephone;
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
    public function getNumeroTelephone()
    {
        return $this->numero_telephone;
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
        if (preg_match('/^[a-zA-ZÀ-ÿ\- ]+$/', $nom)) {
            $this->nom = $nom;
        } else {
            throw new InvalidArgumentException('Le nom est invalide.');
        }
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        if (preg_match('/^[a-zA-ZÀ-ÿ\- ]+$/', $prenom)) {
            $this->prenom = $prenom;
        } else {
            throw new InvalidArgumentException('Le prénom est invalide.');
        }
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException('L\'email est invalide.');
        }
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $mot_de_passe)) {
            $this->mot_de_passe = $mot_de_passe;
        } else {
            throw new InvalidArgumentException('Le mot de passe est invalide.');
        }
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date_naissance)) {
            $this->date_naissance = $date_naissance;
        } else {
            throw new InvalidArgumentException('La date de naissance est invalide.');
        }
    }

    /**
     * @param mixed $numero_telephone
     */
    public function setNumeroTelephone($numero_telephone)
    {
        if (preg_match('/^\d{3}-\d{3}\(\d{4}\)$/', $numero_telephone)) {
            $this->numero_telephone = $numero_telephone;
        } else {
            throw new InvalidArgumentException('Le numéro de téléphone est invalide.');
        }
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