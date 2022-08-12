<?php

require_once 'Manage.php';

class Manage_account extends Manage {
    
    public function createAccount(string $last_name, string $first_name, string $email, string $password):int {
        $data=[
            'last_name'=>$last_name,
            'first_name'=>$first_name,
            'email'=>$email,
            'password'=>md5($password)
            ];
            
        $query = "INSERT INTO users (last_name, first_name, email, password) VALUES ( :last_name, :first_name, :email, :password)";
        
        var_dump($this->setQuery($query, $data));
        return $this->setQuery($query, $data);
         
    }
    
    public function setAddresse(string $street, string $number, string $postal_code, string $city, int $user_id):void {
        $data=[
            'street'=>$street,
            'number'=>$number,
            'postal_code'=>$postal_code,
            'city'=>$city,
            'user_id'=>$user_id
            ];
            
        $query = "INSERT INTO addresses (street, number, postal_code, city, user_id) VALUES (:street, :number, :postal_code, :city, :user_id)";
        
        $this->getQuery($query, $data);
    }
    
    public function getUser(string $email, string $pwd):array {
        $data=['email'=>$email, 'password'=>$pwd];
        $result = $this->getQuery("SELECT * FROM users WHERE email=:email AND password=:password", $data);
        return $result->fetch();
    }
    
    public function privacy (string $password):int {
        
        
    }
    
    
}