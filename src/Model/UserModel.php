<?php
namespace Model;
use \Core\Database;
use \Core\Entity;
use PDO;

//anciemment extended de Database
///anciement extended de Request
// a extend de entity
class UserModel extends Entity {

    public function insert_user(){
        $fields = $this->params;
        $all_keys = array_keys ($fields);
        $request = implode("` , `", $all_keys);
        $value_list = array_values ($fields);
        $mdp = hash_hmac('ripemd160',$value_list[5],"la vie c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre");
        $replacement = array(5 => $mdp);
        $final_arr= array_replace ($value_list , $replacement);
        $values = implode("' , '", $final_arr);
        try {
            $reponse = Database::connect()->prepare("INSERT INTO users (`$request`) VALUES ('$values')");
            var_dump($reponse);
            var_dump($reponse->execute());
            return Database::connect()->lastInsertId();
        }   catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }

    public function log(){
        $values= $this->params;
        $email=$values['email'];
        try{
            var_dump($reponse =Database::connect()->prepare("SELECT * FROM users WHERE email='$email'"));
            var_dump($reponse->execute());
            while ($row = $reponse->fetch()) {
                if (hash_hmac('ripemd160',$values['mot_de_passe'],"la vie c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre")== $row['mot_de_passe']) {
                    echo "bon mot de passe";
                    //$flag = true;
                    return $row['id_user'];
                }
                else{
                    echo "mauvais mdp";
                    return false;
                }
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    //ajouter une methode login et faire une methode register qui va verifier si il existe deja en db
    /*public $email;
    public $password;
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

    public function save(){
        echo " save me";
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
   }*/


}
