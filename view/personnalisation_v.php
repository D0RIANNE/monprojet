<?php


$title = 'PERSONNALISATION';

$id = isset($_GET['id'])?$_GET['id']:'';

$name = isset($_GET['name'])?$_GET['name']:'';


ob_start();


?>

<section id="container_personnalisation" class="container_personnalisation">

    <div class="canva_container">
        <canvas id="canvas" width="1200" height="700"></canvas>
    </div>
    
    <div class="zone_personnalisation">
    
        <div class="accordeon">
            
            <div class="accordeon-item">
                <div class="accordeon-title">
                    <h2> Couleur </h2>
                </div>
                <div class="accordeon-content">
                    <div class="colors">
                        <input class="red color" id="red" type="button" /> 
                        <input class="green color" id="pink" type="button" /> 
                        <input class="pink color" id="green" type="button" /> 
                        <input class="black color" type="button" value=""/> 
                        <input class="blue color" type="button" value=""/> 
                        <input class="yellow color" type="button" value=""/>
                    </div>
                </div>
            </div>
            
            <div class="accordeon-item">
                <div class="accordeon-title">
                    <h2> Texte </h2>
                </div>
                <div class="accordeon-content">
                    <form action="">
                        <h3> Tape ton texte :</h3>
                        <input type="text" id="txt" class="write" value="">
                    </form>
                    <div class="write" id="ecrire"></div>
                    <div class="button_personnalisation" id="add">Ajouter</div>
                    <div class="button_personnalisation" id="clear">Effacer</div>
                </div>
            </div>
            
            <div class="accordeon-item">
                <div class="accordeon-title">
                    <h2> Image </h2>
                </div>
                <div class="accordeon-content">
                    <h3> Charge ton image :</h3>
                    <input type="file"  id="uploader" name="avatar" accept="image/png, image/jpeg" value="uploader">
                </div>
            </div>
                
            <div class="accordeon-item">
                <div class="accordeon-title">
                    <h2> Tailles </h2>
                </div>
                <div class="accordeon-content">
                    <div class="list_size">
                        <?php while($s = $liste_sizes ->fetch(PDO::FETCH_ASSOC)): ?>
                        <input class="input size" type="button" value="EU <?=$s['size']?>"/>
                        <?php endwhile ?>    
                    </div>
                </div>
            </div>
            
            <input id="addCart" class="add" type="button" value="Ajouter au panier">
                
            </div>
        </div>
    </div>
</section>
   
<div style="display:none;">
   <?php $r = $details_id->fetch(); ?>
    <img id="basket" src="public/pictures/sneakers/<?=$r['pictures']?>">
</div>

<input id="id" type="hidden" value="<?=$r['id']?>"/>
<input id="name" type="hidden" value="<?=$r['name']?>"/>

<div class="hidden">
    <img src="public/pictures/custom/<?=$r['pictures']?>_rouge.png" id="color_red">
    <img src="public/pictures/custom/<?=$r['pictures']?>_vert.png" id="color_green">
    <img src="public/pictures/custom/<?=$r['pictures']?>_rose.png" id="color_pink">
    <img src="public/pictures/custom/<?=$r['pictures']?>_masque.png" id="masque">
</div>

<section class="description">
    <div class="detail_prod">
        <h1>Details du produits</h1>
        <p><?=$r['description']?></p>
    </div>
   
    <div class="comment">
        <h1>Avis</h1>
        <form class="com" action="index.php?page=personnalisation&id='.$id.'" method="POST">
            <textarea name="comment" placeholder="commentaire"></textarea>
            <input class="sub_comm" type="submit"  name="submit" value="Ajouter commentaire"/>
        </form>
        <?php 
        if(isset($liste_com)) :
            while($c = $liste_com ->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="list_com">
            <p><?=$c['date_crea']?></p>
            <h3><?=$c['author']?></h3>
            <p><?=$c['comment']?></p>
        </div>
        <?php endwhile ?>
        <?php endif ?>
    </div>
</section>';

<?php

$content = ob_get_clean();
