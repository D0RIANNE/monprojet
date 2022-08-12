<?php

$title = 'PAGE PRIVEE';
ob_start();

?>

<div class="account">
    <nav>
        <a href="?page=account&action=orderlist">Mes commandes</a>
        <a href="?page=account&action=pay">Mode de paiements</a>
        <a href="?page=account&action=privacy">Confidentialité</a>
        <a href="?page=account&action=address">Mes adresses</a>
        <a href="index.php?page=account&deconnex">Deconnexion</a>
    </nav>
</div>

<?php if($action=='orderlist'): ?>

    <h2><?=$subtitle?></h2>
        
    <?php if(isset($orderList) && count($orderList)) :
        foreach($orderList as $order): 
            
            if($order['nb_product']) : ?>
                <div class="orders">
                    <?php foreach($order['detail'] as $produit): ?>   
                    <div class="listOrders">
                        <div class="img_order">
                            <img src="public/pictures/sneakers/<?=$produit['pictures']?>" alt=''> 
                        </div>
                        
                        <div class="details_orders">
                            <h3> <?=$produit['name']?></h3>
                            <p> Référence : <?=$order['reference']?></p>
                            <p> Date d\'achat : <?=$order['date']?></p>
                        </div>
                    </div>
                    <?php endforeach ?>
            <?php endif ?>
                    <p> Prix total de la commande :</p>
                </div>
                
        <?php endforeach ?>
    <?php endif  ?>
    
<?php endif ?>   
    
<?php     
if($action=='privacy') : ?>
    <h2><?=$subtitle?></h2>
    <?php 
    if(isset($_POST['submit'])): ?>
    
    <form method="post" class="form_privacy">
        <label>Mot de passe actuel : 
        <input type="password" name="tb_mdpUtilisateur" ></label><br>
        <label>Nouveau mot de passe : <input type="password" name="tb_newMdp" ></label><br>
        <label>Verification mot de passe : <input type="password" name="tb_confirmMdp" ></label><br>
        <input type="submit" class="submit_privacy" name="submit" value=" Envoyer ">
    </form>
    <?php endif ?>
<?php endif ?>

<?php 
            
if($action=='pay') {
    echo'
    <h2>'.$subtitle.'</h2>';
}

if($action=='address') {
    echo'
    <h2>'.$subtitle.'</h2>';
}

$content = ob_get_clean();
