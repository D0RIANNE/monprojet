<?php 
$title = "Accueil Admin";

require_once './model/Manage_Shoes.php';
$prod = new Manage_Shoes();
$liste_prod = $prod->getProductList();
    
ob_start();


//afficher un bouton pour créer une nouveau produit
    echo '
    <div class="add">
        <a href="index.php?page=shoes.admin&action=shoes&do=create">Ajouter un produit</a>
    </div>';

if(!isset($bouton)) $bouton = 'ok';   
if(!isset($comment)) $comment = ['id'=>'','name'=>'','price'=>'','description'=>''];
    
    
  
// formulaire
if(isset($do)) {
    
    if($do=="modify"  || $do=='create') {
       
            echo '
            <form method="post" action="index.php?page=shoes.admin&action=shoes">
                Nom :<input type="text" name="name" value="'.$info_product['name'].'">
                Description : <textarea name="description">'.$info_product['description'].'</textarea>
                Prix : <input type="text" name="price" value="'.$info_product['price'].'">
                Image : <input type="file" name="pictures" accept="image/png, image/jpeg">
                <input type="submit" name="submit" value="'.$bouton.'">
            </form>
            ';
    }
    
}
// affiche la liste des chaussures existantes
        while($r=$liste_prod ->fetch(PDO::FETCH_ASSOC)) {
                
            echo '
            <div class="shoes_admin">
                <p>'.$r['name'].'</p>
                <p>'.$r['price'].' €</p>
                <p>'.$r['description'].'</p>
                <div class="supp_up">
                    <a href="index.php?page=shoes.admin&action=shoes&do=modify&id='.$r['id'].'">Modifier</a> -
                    <a href="index.php?page=shoes.admin&action=shoes&do=delete&id='.$r['id'].'">Supprimer</a>
                </div>
            </div>';
        }
 
 
echo'<ul>
    <li><a href="index.php?page=home.admin">Home</a></li>
    <li><a href="index.php?page=">Stock</a></li>
    <li><a href="index.php?page=">Commentaires</a></li>
    <li><a href="index.php?page=login.admin&deconnex=1">Deconnexion</a></li>
</ul>';          


$content = ob_get_clean();
require './view/template.php';