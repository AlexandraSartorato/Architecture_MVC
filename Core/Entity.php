<?php
namespace Core;
use \Core\ORM;
//extends à ORM obligatoire
class Entity{

    public function __construct($params){
        $this->orm= new ORM();
        $this->params= $params;
        $this->table=get_class($this);
}

    public function save(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    $this->orm->create($tab2.'s',$this->params);
}

    public function get_info(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    return $this->orm->read($tab2.'s', 251);
}

    public function get_all_info(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    return $this->orm->read_all($tab2.'s');
}

    public function deleted(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    $this->orm->delete($tab2.'s', 252);
}

}


