<?php 
$title = "Accueil Admin";
ob_start();

if(isset($auth)) echo $auth;
?>

<nav class="sub_menu">
    <a href="index.php?page=shoes.admin&action=shoes">Chaussures</a>
    <a href="index.php?page=shoes.admin&action=stock">Stock</a>
    <a href="index.php?page=shoes.admin&action=comment">Commentaires</a>
    <a href="index.php?page=login.admin&deconnex=1">Deconnexion</a>
</nav>




<?php
$content = ob_get_clean();
require './view/template.php';