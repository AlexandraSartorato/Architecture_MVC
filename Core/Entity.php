<?php
namespace Core;
use \Core\ORM;

class Entity
{

    public function __construct($params)
    {
        $this->orm= new ORM();
        $this->params = $params;
        $this->table = strtolower(ltrim(str_replace('Model', '', get_class($this)), '\\')).'s';
    }

    public function save()
    {
        return $this->orm->create($this->table , $this->params);
    }

    public function get_info($id)
    {
        return $this->orm->read($this->table, $id);
    }

    public function get_all_info()
    {
        return $this->orm->read_all($this->table);
    }
    
    public function update_info($id)
    {
        return $this->orm->update($this->table, $id, $this->params);
    }

    public function deleted($id)
    {
        $this->orm->delete($this->table,$id);
    }

    public function insert_user()
    {
        return $this->orm->create_account($tthis->table, $this->params);
    }

}
