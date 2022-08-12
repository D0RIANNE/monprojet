<?php
require './model/Manage_Shoes.php';
require './model/Manage_Comment.php';
require './model/Manage_perso.php';

$prod = new Manage_Shoes();
$size = new Manage_Shoes();
$avis = new Manage_Comment();

// Inserer commentaire via le formulaire
if(isset($_POST['submit'])) {   
    if(isset($_POST['comment'])) {
        $comment = htmlspecialchars($_POST['comment']);
    } else {
        $comment ='';
    }
    if(isset($_POST['author'])) {
        $author = htmlspecialchars($_POST['author']);
    }else {
        $author ='';
    }
    if(isset($_POST['date_crea'])) {
        $date_crea = date('Y-m-d', ($_POST['date_crea']));
    }else {
        $date_crea='';
    }
    
    $avis->setAvisList($comment, $id, $date_crea);
}

// Inserer détails de la personnalisation de la chaussure
$details_id = $prod->getProductId($id);
$liste_sizes = $size->getSizeList($id);
$liste_com = $avis->getAvisList($id);

require './view/personnalisation_v.php';
