<?php
namespace Core;
use \Core\ORM;
//extends à ORM obligatoire
class Entity{
    private $info;
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
    return $this->orm->read($tab2.'s', 252);
}

}


