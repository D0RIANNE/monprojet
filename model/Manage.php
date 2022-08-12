<?php

class Manage {
    
    protected function db_connect() {
         
        $server = 'db.3wa.io';
        $login = 'dorianneviemont';
        $pwd = '5941d35624ff6b1b9d6c3b73f1051b7f';
        $base= 'dorianneviemont_sneakers';
        
        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
        
    }
    
    protected function getQuery ($query,$data = []) {
        
        $db = $this->db_connect(); // se connecte à la base de données
        $stmt= $db -> prepare($query);
        $stmt->execute($data); 
        // Le renvoie
        return $stmt;
    }
    
    
    protected function setQuery ($query,$data = []):int {
        
        $db = $this->db_connect(); // se connecte à la base de données
        $stmt= $db -> prepare($query);
        $stmt->execute($data); 
        // Le renvoie
        return $db->lastInsertId();
    }
    
    
}