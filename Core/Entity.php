<?php
namespace Core;
use \Core\ORM;
//extends à ORM obligatoire
class Entity {

    public function __construct($params){
        $this->orm= new ORM();
        $this->params= $params;
        $this->table=get_class($this);
}

    public function save(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    return $this->orm->create($tab2.'s',$this->params);
}

    public function get_info($id){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    return $this->orm->read($tab2, $id);
}

    public function get_all_info(){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    return $this->orm->read_all($tab2.'s');
}
    public function update_info($id){
        $tab=str_replace('Model','', $this->table);
        $tab2=strtolower(ltrim($tab, '\\'));
       return $this->orm->update($tab2,$id, $this->params);
    }

    public function deleted($id){
    $tab=str_replace('Model','', $this->table);
    $tab2=strtolower(ltrim($tab, '\\'));
    $this->orm->delete($tab2,$id);
}

}


