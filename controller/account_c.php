<?php 

require './model/Manage_account.php';

$acc = new Manage_account();


// deconnexion
if(isset($_GET['deconnex'])){
    unset($_SESSION);
    session_destroy();
}

// identification
if(isset($_POST['submit'])) {
    $user = $acc->getUser($_POST['name'], $_POST['pwd']);
    
    if(isset($user['id'])) {
        $auth = '<h2>Identification reussi</h2>';
        $_SESSION['Auth'] = true;
        $_SESSION['user'] = $user;
    } else {
        $auth = '<h2>indentif incorrect !</h2>';
        
    }
}

// inscription
if(isset($_POST['sign_up'])) {   
    if(isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
    }else{
        $email ='';
    }
    if(isset($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
    }else{
        $password ='';
    }
    if(isset($_POST['first_name'])) {
        $first_name = htmlspecialchars($_POST['first_name']);
    }else{
        $first_name ='';
    }
    if(isset($_POST['last_name'])) {
        $last_name = htmlspecialchars($_POST['last_name']);
    }else{
        $last_name ='';
    }

    if(isset($_POST['street'])) {
        $street = htmlspecialchars($_POST['street']);
    }else{
        $street ='';
    }
    if(isset($_POST['number'])) {
        $number = htmlspecialchars($_POST['number']);
    }else{
        $number ='';
    }
    if(isset($_POST['postal_code'])) {
            $postal_code = htmlspecialchars($_POST['postal_code']);
    }else{
        $postal_code ='';
    }
    if(isset($_POST['city'])) {
        $city = htmlspecialchars($_POST['city']);
    }else{
        $city ='';
    }
    
    
    $user_id = $acc->createAccount($last_name, $first_name, $email, $password);
    $acc->setAddresse($street, $number, $postal_code, $city, $user_id);
    
 

}


if(isset($_SESSION['Auth'])){
// si identifié on renvoie la vue account_private view
require './controller/account_private_c.php';
} else {
// si pas identifié 
require './view/account_v.php';
}


