<?php
namespace Model;
use \Core\Database;
use \Core\Entity;
use PDO;

//anciemment extended de Database
///anciement extended de Request
class UserModel extends Entity {
    public $email;
    public $password;
    private $bdd;

    public function __construct(){
        //$request=Request::cleanRequest();
        try
        {
           $this->bdd = new PDO('mysql:host=localhost:8889;dbname=pie_database;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function setPassword($password)
    {
        $this->password=$password;
    }


    public function create($password, $email)
    {
        try {
           //$reponse = Database::connect()->prepare("INSERT INTO users (`email`, `password`) VALUES ('$email', '$password')");
           $reponse = $this->bdd->prepare("INSERT INTO users (`email`, `password`) VALUES ('$email', '$password')");
           $reponse->execute();
       } catch (Exception $e) {
           die('Erreur : ' . $e->getMessage());
       }

    }

    public function read($id)
    {
        try {
           $reponse = $this->bdd->prepare("SELECT *  from users WHERE id=$id");
           if($reponse->execute()){
              $this->info = $reponse->fetchAll(PDO::FETCH_ASSOC);
              return $this->info;
           }
       } catch (Exception $e) {
           die('Erreur : ' . $e->getMessage());
       }
    }
    public function update($email, $id)
    {   //refaire la requete
        try {
           $reponse = $this->bdd->prepare("UPDATE *  from users WHERE id=$id");
           $reponse->execute();
       } catch (Exception $e) {
           die('Erreur : ' . $e->getMessage());
       }
    }

    public function delete($id)
    {
        try {
           $reponse = $this->bdd->prepare("DELETE *  from users WHERE id=$id");
           $reponse->execute();
       } catch (Exception $e) {
           die('Erreur : ' . $e->getMessage());
       }
    }

    public function read_all()
    {
        try {
           $reponse = $this->bdd->prepare("SELECT *  from users");
           $reponse->execute();
       } catch (Exception $e) {
           die('Erreur : ' . $e->getMessage());
       }
    }


}
