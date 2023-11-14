<?php 
    include "php/card.php";

    for ($i=0; $i < 6; $i++) { 
        gerarCards($cardImg, $cardTitle, $cardText, $cardAlt, $cardLink, $collection);
    }
    
?>