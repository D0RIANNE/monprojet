<?php

require 'model/ManageSettings.php';
require_once 'model/Manage_account.php';
$order = new ManageSettings();
$mpd = new Manage_account();

// ici on gère les actions 
$action = $_GET['action']??'';

switch($action) {
    case 'orderlist' : 
        $subtitle="Mes commandes";
        $orderList = $order->orderDetails($_SESSION['user']['id']);
        break;
    case 'pay' :
        $subtitle="Moyens de paiements";
        break;
    case 'privacy' :
        $subtitle="Confidentialité";
        $result=false;
        if(isset($_POST['submit'])){
            
            $mdpUtilisateur=$_POST['tb_mdpUtilisateur'];
            $nmdp=$_POST['tb_newMdp'];
            $vmdp=$_POST['tb_confirmMdp'];
            $NomAdherent=$_SESSION['login'];
                if (($mdpUtilisateur!='')&&($nmdp!='')&&($vmdp!='')) 
                {   if ($mdpUtilisateur==$_SESSION['password']){
                    
                        if($nmdp==$vmdp)
                        
                        {   $sql="UPDATE users SET users password='$nmdp' WHERE id='$NomAdherent'";
                            $result=mysql_query($sql);
                            echo 'Modification du mot de passe effectuee avec succes';
                            $_SESSION['password']=$nmdp;
                        }else{
                            echo 'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
                        }
                    }else{
                        echo 'Le mot de passe actuel n\'est pas valide';
                    }
                }else{
                    echo 'Veuillez remplir tous les champs';
                }
        }        

        break;
    case 'address' :
        $subtitle="Mes addresses";
        break;
    
}


   







require './view/account_private_v.php';