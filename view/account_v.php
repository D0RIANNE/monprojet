<?php


$title = 'MON COMPTE';

ob_start();

?>
    <div class="container_video">
        <video class="fullscreen" src="./public/video/video.mp4"playsinline autoplay muted loop></video>
   
        <div class="identification">
        
            <h2>Identification</h2>
            <?php
            if(isset($auth)) 
            echo $auth;
            ?>
            <form class="form" method="post" action="index.php?page=account">
                <input type="text" name="name" value="" placeholder="Adresse e-mail"/>
                <input type="password" name="pwd" value="" placeholder="Mot de passe"/>
                <input type="submit" class="submit_form" name="submit" value="OK">
            </form>
            
            <h2>Pas inscrit ?</h2>
            
            <form action="index.php?page=account" class="form" method="POST">
                <input type="text" name="email" value="" placeholder="Adresse e-mail"/>
                <input type="password" name="password" value="" placeholder="Mot de passe"/>
                <input type="text" name="first_name" value="" placeholder="Prénom"/>
                <input type="text" name="last_name" value="" placeholder="Nom"/>
                
            <h2>Adresse Postale</h2>
                <input type="text" name="street" value="" placeholder="Rue"/>
                <input type="text" name="number" value="" placeholder="Numéro"/>
                <input type="text" name="postal_code" value="" placeholder="Code Postale"/>
                <input type="text" name="city" value="" placeholder="Ville"/>
                <input type="submit" class="submit_form" name="sign_up" value="OK">
            </form>
        </div>
    </div>

<?php


$content = ob_get_clean();
