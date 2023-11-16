<?php 
    $cardImg = "https://placehold.co/300x400?text=Hello";
    
    $cardTitle = "Product Title";

    $cardText = "Very fuck description of the product";

    $cardAlt = "fodas";

    $cardLink = "#";

    $collection = "Dark Throne";
?>


<?php
function gerarCards($cardImg, $cardTitle, $cardText, $cardAlt, $cardLink, $collection) {

echo  
"<div class='container-fluid'>
<div class='row row-cols-2 row-cols-md-6 g-4 p-3'>";

for ($i=0; $i < 6; $i++) { 
  echo 
  "<div class='col'>
  <div class='card'>
    <a href='#'><img src=$cardImg class='card-img-top' alt='$cardAlt'></a>
    <div class='card-body'>
      <h5 class='card-title'>$cardTitle</h5>
      <p class='card-text'>$cardText</p>
    </div>
  </div>
  </div>";
}
echo "</div>
<br>
<p>Collection: <strong><a class='h6'href='#'>$collection</strong></a></p>
</div>";
}
?>


