<?php
// On fait ça sous forme de fonction pour pouvoir l'appeler de manière lisible
function Cart_item($title, $price, $image, $slug, $quantity) {
?>

<div class="cart-item">
    <div class="cart-item-image">
      <a href="./product-page.php?slug=<?= $slug ?>">
          <img src="<?= $image ?>" alt="<?= $title ?>">
      </a>
    </div>

    <div class="cart-item-content">
        <h2><?= $title ?></h2>
        <p>Prix : <?= $price*$quantity ?>€</p>
        <p>Quantité : <?= $quantity ?></p>
    </div>

</div>
<?php } ?>