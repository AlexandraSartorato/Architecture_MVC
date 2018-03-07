<?php
namespace Core;
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
        $reponse->execute();
    }   catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    }

        public function read ($table, $id) {
        try{
            $reponse = $this->bdd->prepare("SELECT * FROM $table WHERE id_perso=$id");
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

    }
        public function delete ($table, $id) {
            try{
                $reponse = $this->bdd->prepare("DELETE FROM $table WHERE id_perso=$id");
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
