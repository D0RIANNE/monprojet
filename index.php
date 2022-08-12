<?php
session_start();

$page = $_GET['page']??'';
$id = $_GET['id']?? 0;

// Routeur
switch($page) {
    case 'account' : 
        require './controller/account_c.php';
        break ;
        
    case 'Shoes' : 
        require './controller/Shoes_c.php';
        break ;
        
    case 'panier' : 
        require './controller/panier_c.php';
        break ;
        
    case 'contact' :
        require './controller/contact_c.php';
        break ;
        
    case 'about' :
        require './controller/about_c.php';
        break ;
        
    case 'personnalisation' : 
        require './controller/personnalisation_c.php';
        break ;
        
    case 'account_private' :
        require './controller/account_private_c.php';
        break ;
        
    case 'paiement' :
        require'./controller/paiement_c.php';
        break;
        
    //----------------------ADMIN-----------------------------
    case 'login.admin' :
        require './controller/admin/login_admin.php';
        break;
        
    case 'home.admin' :
        require './controller/admin/home_admin.php';
        break;
        
    case 'shoes.admin' :
        require './controller/admin/shoes_admin.php';
        break;
    //---------------------------------------------------------
    
    default : 
        require './controller/home_c.php';
}
require './view/template.php';
