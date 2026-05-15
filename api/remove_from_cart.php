<?php 
  include "../config/init.php";

  function add_to_cart($product_slug) {
    if (isset($_SESSION["cart"][$product_slug])) {
        if ($_SESSION["cart"][$product_slug] > 0) {
          $_SESSION["cart"][$product_slug]--;
        }
      }
  }
?>