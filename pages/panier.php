<?php
    // Partie session
    include "../config/init.php";
    $cart_items = $_SESSION["cart"];
    
    require_once __DIR__ . "/../components/cart_item.php";

    // Partie BDD
    require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd

    function get_product_infos($slug) {
      $sql = "SELECT * FROM products WHERE slug='$slug'";
      $resultat = qdb($sql);
      $product = mysqli_fetch_assoc($resultat);
      return $product;
    };

?>

<link rel="stylesheet" href="../components/cart_item.css">
<link rel="stylesheet" href="panier.css">
<?php include __DIR__ . "/../components/navbar.php"; ?>

<div class="page-panier">
  <h1>Panier</h1>
  <div>
  <?php
    // Affichage des éléments dans le panier et du prix du panier
    $total = 0;
    foreach ($cart_items as $slug => $quantity) {
      Cart_item(get_product_infos($slug)["title"],
                get_product_infos($slug)["price"],
                get_product_infos($slug)["image"],
                $slug,
                $quantity);
      $total+=get_product_infos($slug)["price"] * $quantity;
    }

  ?>
<div class="buttons-wrap">
    <h2>
      Total : <?= $total ?>€
    </h2>
    <form method="POST" action="../api/clear_cart.php">
      <button type="submit" class="clear-cart">Supprimer le panier</button>
    </form>

    <button class="buy-button" onclick="">
      Acheter maintenant</span>
    </button>

    </div>
  </div>
</div>

<script src="panier.js"></script>