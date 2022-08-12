<?php

$title = 'Chaussures';

$action = $_GET['action']??null; 
$do = $_GET['do']??null;
$id = $_GET['id']??0;

require_once './model/Manage_Shoes.php';


// SWITCH DU SOUS MENU ADMIN
if(isset($action)){
    switch($action) {
        case 'shoes' : adminShoes($do,$id);//gérer les chaussures
        break;
 
        case 'comment' : adminComment();//gérer les commentaires
        break;
        
    }
}  
// FONCTION PAGE MODIF SUPP ET AJOUT PRODUIT  
function adminShoes($do='',$id=0) {
   
    // traitement de mon formulaire de création
    if(isset($_POST['submit']) && $_POST['submit']=='Enregistrer'){
        
       
        if(isset($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
        }else{
            $name='';
        }
        if(isset($_POST['price'])) {
            $price = htmlspecialchars($_POST['price']);
        }else{
            $price='';
        }
        if(isset($_POST['description'])) {
            $description = htmlspecialchars($_POST['description']);
        }else{
            $description ='';
        }
 
        setProduct($name, $description, $price);
       
    }
    // AJOUTER PRODUIT
    if(isset($_POST['submit']) && $_POST['submit']=="ok") {
        
        $data=[
        'name'=>$name,
        'description'=> $description,
        'price'=>$price
        ];
               
        $query = "INSERT INTO products (name,description,price) VALUES (:name, :description, :price)";
            
    // MODIFIER PRODUIT  
    }else if(isset($_POST['submit']) && $_POST['submit']=="Modifier") {
        $data=[
            'name'=>$name,
            'price'=>$price,
            'description'=>$description,
            'id'=>intval($_POST['id'])
        ];
   
        $query="UPDATE products SET name=:name,price=:price,description=:description WHERE id=:id";
    
  
    }else{
    $content ='';
    
}

    $prod = new Manage_Shoes();
    

    // SWITCH SUPP MODIFIER CREER PRODUIT
    if(isset($do)) {
        switch($do) {
            case 'delete' : 
                $prod->deleteProduct($id); 
                break;
                    
            case 'modify' :
                $info_product = $prod->getProductId($id);
                $info_product = $info_product->fetch();
                $bouton = 'Modifier';
                break;
                
            case 'create' :
            $info_product = ['name'=>'', 'description'=>'', 'price'=>''];
            
            $bouton = 'Enregistrer';
                
        }
    }
    
     
    require './view/admin/shoes.php';
}

function adminStock() {
    
}

function adminComment() {
    
}



