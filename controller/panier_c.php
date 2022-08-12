<?php

require './model/Manage_Shoes.php';

$shoe = new Manage_Shoes();

// Supprimer l'article du panier dans la session
if(isset($_GET['action']) && $_GET['action']=='supp'){
    unset($_SESSION['cart'][$_GET['key']]);
}

//unset supprime la valariable

//créer panier 
$cart = array();
$cart_size = array();
$cart_total=0;
if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {

    foreach($_SESSION['cart'] as $key => $prod_id) {
        $result = $shoe->getProductId($prod_id);
        $product_info = $result->fetch();
        $product_info['size'] = $_SESSION['size'][$key];
        $cart[$key] = $product_info;
        $cart_total+=$product_info['price'];
    }
}



require './view/panier_v.php';