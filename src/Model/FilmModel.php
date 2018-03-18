<?php
namespace Model;
use \Core\Database;
use \Core\Entity;
use PDO;

class FilmModel extends Entity{

    public function search(){
        $values= $this->params;
        $titre=$values['titre'];
        try{
            $reponse =Database::connect()->prepare("SELECT * FROM films WHERE titre LIKE '%$titre%'");
            $reponse->execute();
            return $reponse->fetchAll(PDO::FETCH_ASSOC);


        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}