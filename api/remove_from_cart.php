<?php 
  include "../config/init.php";

  function add_to_cart($product_slug) {
    // On vérifie que le produit est bien dans la panier
    if (isset($_SESSION["cart"][$product_slug])) {
        // Que le produit à plus d'un exemplaire dans le panier
        if ($_SESSION["cart"][$product_slug] > 0) {
          $_SESSION["cart"][$product_slug]--;
        }
      }
  }
?>