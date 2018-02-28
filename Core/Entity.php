<?php
namespace Core;

class Entity {
    public function __construct($table,$fields){
        $this->orm= new ORM();
}


}
