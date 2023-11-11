<?php

    $title = null;

    $img1 = "https://placehold.co/600x400/orange/white?text=Product+Sample+1";
    $img2 = "https://placehold.co/600x400/cyan/white?text=Product+Sample+2";
    $img3 = "https://placehold.co/600x400/pink/white?text=Product+Sample+3";

    $img = [$img1, $img2, $img3];

    require "public/includes/header.php";


?>

<!-- Content goes here -->    

    <h1 class="display-1">Hello World</h1>

    <?php include "public/includes/carousel.php" ?>
    
    <?php include "public/includes/login-modal.php" ?>

<?php require "public/includes/footer.php" ?>