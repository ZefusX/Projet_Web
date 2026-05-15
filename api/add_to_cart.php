<?php 
  include "../config/init.php";

  function add_to_cart($product_slug, $quantity) {
    if (!isset($_SESSION["cart"][$product_slug])) {
      $_SESSION["cart"][$product_slug] = $quantity;
        } else {
          $_SESSION["cart"][$product_slug]+=$quantity;
        }
  }
?>