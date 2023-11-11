<?php

    $title = null;

    $img1 = "https://placehold.co/600x400/orange/white?text=Product+Sample+1";
    $img2 = "https://placehold.co/600x400/cyan/white?text=Product+Sample+2";
    $img3 = "https://placehold.co/600x400/pink/white?text=Product+Sample+3";

    $img = [$img1, $img2, $img3];

    require "public/includes/header.php";


?>

<!-- Content goes here -->    

    <h3 class="display-1">Hello World</h3>

    <?php include "public/includes/carousel.php" ?>
    
    <?php include "public/includes/login-modal.php" ?>

    <div class="container-fluid p-3"> 
    <h2 class="display-3"> Our Products</h2>
    <p class=lead><strong>See our collection of amazing products designed just to you:</strong></p>
    </div>

    <?php include "public/includes/card-carousel.php"?>

<?php require "public/includes/footer.php" ?>