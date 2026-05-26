<?php 
  include "../config/init.php";

  function add_to_cart($product_slug, $quantity) {
    // On vérifie si on a déjà enregistré un exemplaire du produit dans la sesion
    if (!isset($_SESSION["cart"][$product_slug])) {
      // Si non on enregistre ce produit avec la quantité voulu
      $_SESSION["cart"][$product_slug] = $quantity;
        } else {
          // Si oui on ajoute la quantité au produit
          $_SESSION["cart"][$product_slug]+=$quantity;
        }
  }
?>