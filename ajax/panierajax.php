<?php
session_start();

if(isset($_POST['id'])) {
    $_SESSION['cart'][]= intval($_POST['id']);
    
    end($_SESSION['cart']);
    echo $key = key($_SESSION['cart']);
    
    if(!isset($_SESSION['size'])) $_SESSION['size'] = array();
    $_SESSION['size'][$key] = $_POST['size'];
    
}


echo 'Produit '.$_POST['id'].' ajouté au panier';