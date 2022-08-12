<?php

$title = 'VOTRE PANIER';
ob_start();

?>

<div class="basket">
    
    <section class="sectionShoes">
    <?php foreach($cart as $key => $info): ?>
        <div class="basket_item">
            <div class="basket_choise">
                <img src="./public/pictures/sneakers/<?=$info['pictures']?>" alt='sneakers'>
            </div>
            <div class="basket_bloc">
                <div class="basket_details">
                    <p><?=$info['name']?></p>
                    <p> Taille : <?=$info['size']?></p>
                    <p><?=$info['price']?> €</p>
                    <a class="trash" href="?page=panier&action=supp&key=<?=$key?>"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
       <?php endforeach ?>
    </section>
    
    <section class="sectionPay">
        <div class="pay">
            <h2> Récapitulatif </h2>
            <p>Sous-total :  </p>
            <p><b><?=$cart_total?> €</b></p>
            <p> Frais estimés de prise en charge et d\'expédition </p>
            <p> 0,00 € </p>
            <p> Total : </p>
            <p><b><?=$cart_total?> €</b></p>
        </div>
        <div class="pay_order">
            <a href="index.php?page=paiement">PAYER</a>
        </div>
        <div class="delivery">
            <p>Livraison standard entre 5-7 jours ouvrés.</p>
            <p>Retour sous 14 jours.</p>
        </div>
    </section>
    
</div>

<?php

$content = ob_get_clean();
