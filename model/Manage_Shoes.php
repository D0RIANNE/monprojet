<?php

require_once 'Manage.php';

class Manage_Shoes extends Manage {
    
    //AFFICHER PRODUITS
    
    public function getProductList():object {
        return $this->getQuery("SELECT id, name, price, description, pictures FROM products");
    }
    
    public function getProductId($id):object {
        $data = ['id'=>$id];
        return $this->getQuery("SELECT id, name, price, description, pictures FROM products WHERE id=:id", $data);
    }
    
    //AFFICHER TAILLES DES PRODUITS
     public function getSizeList($id):object {
        $data = ['id'=>$id];
        return $this->getQuery("SELECT id, size, stock FROM sizes WHERE product_id=:id", $data);
    }
    
    //SUPPRIMER PRODUIT
    public function deleteProduct(int $id):void {
        $data = ['id'=>intval ($_GET['id'])];
        
        $this->getQuery("DELETE FROM products WHERE id='".$id."'");
    }
    
    //MODIFIER PRODUIT
    public function upProduct($id):object {
        
        $data = ['id'=>intval ($_GET['id'])];
        
        return $this->getQuery("SELECT id, name, price, description FROM products WHERE id=:id", $data);
        
    }
    
    //AJOUTER PRODUIT 
    public function setProduct(string $name, string $description, string $price):void {
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price
            ];
            
        $query = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
        
        $this->getQuery($query, $data);
        
        
    }
    
    
}