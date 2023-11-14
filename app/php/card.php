<?php 
    $cardImg = "https://placehold.co/300x200?text=Hello";
    
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
    <img src= $cardImg class='card-img-top' alt='$cardAlt'>
    <div class='card-body'>
      <h5 class='card-title'>$cardTitle</h5>
      <p class='card-text'>$cardText</p>
      <a href='$cardLink' class='btn btn-sm btn-primary'>Go somewhere</a>
    </div>
  </div>
  </div>";
}
echo "</div>
<br>
<p>Collection: <strong>$collection</strong></p>
</div>";
}
?>


