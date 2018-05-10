<?php
namespace Model;
use \Core\Database;
use \Core\Entity;
use PDO;

class UserModel extends Entity
{

    public function log()
    {
        $values= $this->params;
        $email=$values['email'];
        try{
            $reponse =Database::connect()->prepare("SELECT * FROM users WHERE email='$email'");
            $reponse->execute();
            while ($row = $reponse->fetch()) {
                if (hash_hmac('ripemd160',$values['mot_de_passe'],"la vie c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre")== $row['mot_de_passe']) {
                    return $row['id_user'];
                }
                else{
                    return false;
                }
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    
}
