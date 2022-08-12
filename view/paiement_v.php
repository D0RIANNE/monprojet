 <?php


$title = 'Paiement';

ob_start(); 
  
?>
  
<div class="kr-embedded"  kr-form-token="DEMO-TOKEN-TO-BE-REPLACED">
    <div class="kr-pan"></div>
    <div class="kr-expiry"></div>
    <div class="kr-security-code"></div>
    <button class="kr-payment-button"></button>
    <div class="kr-form-error"></div>
</div>
     
<?php
$content = ob_get_clean();
