<?php
class Auths extends Controllers{

    public function __construct()
    {
        parent::__construct();
    }

    public function login(){

        if(isset($_SESSION["utilisateur"])){
            header("Location: ".URI."articles/index");
        }

        if(isset($_POST["submit"])){
            if(!$this->estVide($_POST)){
                $mdp = $_POST["mot_de_passe"];
                $auth = new Auth();
                $auth->email = $_POST["email"];
                $user = $auth->findByEmail();
                if($user){
                    if(password_verify($mdp, $user->mot_de_passe)){
                        unset($user->mot_de_passe);
                        $_SESSION["utilisateur"] = $user;
                        if (strtolower($_SESSION['utilisateur']->description) === Auth::ADMIN){
                        header("Location: ".URI."articles/addCategory");
                        }else{
                        header("Location: ".URI."articles/addCategory");
                        }
                    }else{
                        $erreurs["message"] = "Mot de passe invalid";
                        $this->render("login", $erreurs);
                        return;
                    }
                }else{
                    $erreurs["message"] = "User don't exist";
                    $this->render("login", $erreurs);
                    return;
                }
            }else{
                $erreurs["message"] = "Remplir tous les champs svp";
                $this->render("login", $erreurs);
                return;
            }
        }
        $this->render("login");
    }

    public function register(){
        if(isset($_SESSION["utilisateur"])){
            $this->render("index", [], "Koli-project");
        }
        if(isset($_POST['enregistre'])){
            if(!$this->estVide($_POST)){
                $mdp = $_POST['mot_de_passe'];
                $cmdp = $_POST['c_mot_de_passe'];
                if($mdp === $cmdp){
                    unset($_POST['enregistre']);
                    unset($_POST['c_mot_de_passe']);
                    $_POST['mot_de_passe'] = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
                    $auth = new Auth();
                    $auth->saveUser($_POST);
                    header("Location: ".URI."auths/login");
                }
                
            }
        }
        $this->render("register");
    }

    public function deconnexion(){
        unset($_SESSION["utilisateur"]);
        header("Location: ".URI."articles/index");
    }

    public function index(){
        var_dump($_SESSION["utilisateur"]);
        if(!isset($_COOKIE["utilisateur"])){
            setcookie("utilisateur","utilisateur",time()+(60 * 60 * 24 * 2), "/");
    }
    echo"je suis index";
    }
}