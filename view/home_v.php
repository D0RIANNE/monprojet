<?php


$title = 'ACCUEIL';

ob_start();

?>

<section class="containeur_home">
    <div class="section1">
        <div class="title">
            <h2>PERSONNALISE TA PAIRE DE CHAUSSURES EN</h2>
            <h2>3 ETAPES</h2>
        </div>
    </div>
    
    <div class="container">
        <div class="wrapper slide">
            <img src="./public/pictures/home/img1.png" alt="">
            <img src="./public/pictures/home/img2.png" alt="">
            <img src="./public/pictures/home/img3.png" alt="">
            <img src="./public/pictures/home/img1.png" alt="">
        </div>
    </div>
    
    <div class="section3">
        <h2>Votre seul limite est votre imagination</h2>
        <a class="button" href="index.php?page=Shoes">PERSONNALISE TA PAIRE</a>
    </div>
</section>

<?php

$content = ob_get_clean();