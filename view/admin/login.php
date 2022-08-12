<?php
$title = 'Admin : Identification';

ob_start();

if(isset($auth)) echo $auth;
?>

<h1>Identification admin</h1>
<form method="post" class="form_admin" action="index.php?page=home.admin">
    <label for="nom">Nom :</label>
    <input type="text" name="nom"/><br>
    <label for="pwd">Mot de passe :</label>
    <input type="password" name="pwd"/><br>
    <input type="submit" class="submit_admin" name="submit" value="OK">
</form>







<?php 
$content = ob_get_clean();

require './view/template.php';