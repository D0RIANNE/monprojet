<?php

require_once 'Manage.php';

class Manage_perso extends Manage {

        public function setPersonnalisation(string $name, string $description):object {
            
            $data = [
                'name'=>$name,
                'description'=>$description
            ];
            return $this->getQuery("INSERT INTO personnalisation (id, name, description)
            VALUES (:id,:name,:description)", $data);
        
        }
}