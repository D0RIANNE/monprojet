<?php


//Deconnexion
if(isset($_GET['deconnex'])){
    unset($_SESSION);
    session_destroy();
}

//gestion du formulaire
if(isset($_POST['submit'])){
    if ($_POST['nom']=='dorianne' && $_POST['pwd']=='alon'){
        $auth = '<h2>Identification reussi</h2>';
    $_SESSION['Auth']= true;
    $_SESSION['nom']=$_POST['nom'];
    }else{
    $auth = '<h2>indentif incorrect !</h2>';
    }
}

// Controle de l'identification
if(!isset($_SESSION['Auth']) || !$_SESSION['Auth']){
    require './view/admin/login.php';
    exit;
}
