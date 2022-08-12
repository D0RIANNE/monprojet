<?php


$title = 'CHAUSSURES';

ob_start();

?>

<div class="containeur">
                
    <div class="affbasket">
        <section class="template">
            <h2>CHOISIS TA PAIRE DE BASKET</h2>
        </section>
        
        <section  class="affich_basket">
        <?php while($r = $liste_prod->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="item">
                <a href="index.php?page=personnalisation&id=<?=$r['id']?>&name=<?=$r['name']?>">
                    <img src="public/pictures/sneakers/<?=$r['pictures']?>" alt=""> 
                    <p><?=$r['name']?></p>
                    <p><?=$r['price']?> €</p>
                </a>
            </div>
        <?php endwhile ?>
        </section>
    </div>
</div>

<?php 
$content = ob_get_clean();
