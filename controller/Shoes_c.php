<?php

require_once './model/Manage_Shoes.php';
$prod = new Manage_Shoes();

$liste_prod = $prod->getProductList();

require './view/Shoes_v.php';
