<?php
namespace Core;
use \Core\Database;

use PDO;

class ORM{
   public function __construct(){
        try
        {
           $this->bdd = new PDO('mysql:host=localhost:8889;dbname=epitech_tp;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function create ($table, $fields) {
        try {
        //stocker les cles
        $all_keys=array_keys ($fields);
        $request= implode("` , `", $all_keys);
        //stocker les valeurs
        $value_list = array_values ($fields);
        $values = implode("' , '", $value_list);

        $reponse = $this->bdd->prepare("INSERT INTO $table (`$request`) VALUES ('$values')");
        var_dump($reponse);
        $reponse->execute();
        return $this->bdd->lastInsertId();
    }   catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    }

        public function read ($table, $id) {
        try{
            $tab=$table.'s';
            $reponse = $this->bdd->prepare("SELECT * FROM $tab WHERE id_$table=$id");
            $reponse->execute();
            return $reponse->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        public function read_all($table){
            try{
                $reponse = $this->bdd->prepare("SELECT * FROM $table LIMIT 30");
                $reponse->execute();
                return $reponse->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        public function update ($table, $id, $fields) {
            try {
                //stocker les cles
                $all_keys=array_keys ($fields);
                //stocker les valeurs
                $value_list = array_values ($fields);
                $tab = $table.'s';
                for($i=0; $i < count($all_keys); $i ++) {
                    $reponse = $this->bdd->prepare("UPDATE $tab SET $all_keys[$i]='$value_list[$i]' WHERE id_$table=$id");
                    $reponse->execute();
                }
            }   catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
    }
        public function delete ($table, $id) {
            try{
                $tab=$table.'s';
                $reponse = $this->bdd->prepare("DELETE FROM $tab WHERE id_$table=$id");
                $reponse->execute();
                var_dump($reponse);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
    }

        public function find ($table, $params = array( 'WHERE' => '1',
    'ORDER BY' => 'id ASC',
    'LIMIT' => ''
)) {


    }
}
