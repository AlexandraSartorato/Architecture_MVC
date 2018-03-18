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
        $all_keys=array_keys ($fields);
        $request= implode("` , `", $all_keys);
        $value_list = array_values ($fields);
        $values = implode("' , '", $value_list);

        $reponse = $this->bdd->prepare("INSERT INTO $table (`$request`) VALUES ('$values')");
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
                $reponse = $this->bdd->prepare("SELECT * FROM $table");
                $reponse->execute();
                return $reponse->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        public function update ($table, $id, $fields) {
            try {
                $all_keys=array_keys ($fields);
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
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
    }

    public function create_account ($table, $fields) {
        try {
            $all_keys = array_keys ($fields);
            $request = implode("` , `", $all_keys);
            $value_list = array_values ($fields);
            $mdp = hash_hmac('ripemd160',$value_list[5],"la vie c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre");
            $replacement = array(5 => $mdp);
            $final_arr= array_replace ($value_list , $replacement);
            $values = implode("' , '", $final_arr);

            $reponse = $this->bdd->prepare("INSERT INTO users (`$request`) VALUES ('$values')");
            $reponse->execute();
            $this->bdd->lastInsertId();
            return $this->bdd->lastInsertId();
        }   catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

        public function find ($table, $params = array( 'WHERE' => '1',
    'ORDER BY' => 'id ASC',
    'LIMIT' => ''
)) {


    }
}
