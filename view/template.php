<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sneakers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://static.payzen.eu/static/js/krypton-client/V4.0/ext/classic-reset.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    <link rel="stylesheet" href="./public/css/projet.css" type="text/css">
    
    <link rel="shortcut icon" href="public/pictures/favicon.png" type="public/image/png">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./public/pictures/logo.png">
        </div>
        <h1><?=$title?></h1>
        
        <section class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button'></div>
            </label>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php?page=Shoes">CHAUSSURES</a></li>
                <li><a href="index.php?page=account">COMPTE</a></li>
                <li><a href="index.php?page=about">A PROPOS</a></li>
                <li><a href="index.php?page=contact">CONTACT</a></li>
                <li><a href="index.php?page=panier"><i class="fas fa-shopping-basket"></i></a></li>
            </ul>
        </section>
        
    </header>
    
    <main>
        
            <?=$content?>
       
    </main>
    <div class="template_footer">
            <p>#SneakersAddict</p>
    </div>
    <footer>
        
        <nav>
            <a href="index.php">HOME</a>
            <a href="index.php?page=Shoes">CHAUSSURES</a>
            <a href="index.php?page=account">COMPTE</a>
            <a href="?page=login.admin">.</a>
        </nav>
        
        <address class="contact">
            <p>Dorianne viemont</p>
            <p>49100 ANGERS</p>
            <p><a href="tel:0303030303">03.03.03.03.03</a></p>
            <p><a href="mailto:dorianne.viemont@mail.com">dorianneviemont@gmail.com</a></p>
        </address>
        
        <div class="social_media">
            <i class="fab fa-facebook fa-2x" style="color:blue"></i>
            <i class="fab fa-twitter fa-2x" style="color:#1da1f2"></i>
            <i class="fab fa-instagram-square fa-2x" style="color:#cd0264"></i>
            
        </div>
        
    </footer>
    
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://static.payzen.eu/static/js/krypton-client/V4.0/ext/classic.js"></script> 
    <script src="slideshow.js"></script>
    <script type="text/javascript" src="./public/javascript/projet.js"></script>
</body>
</html>
