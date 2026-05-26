<?php
    include "../config/init.php";
?>
<link rel="stylesheet" href="product-page.css">

<?php
    require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd
    require_once "../api/add_to_cart.php"; // Pour gérer le panier

    // Récupère le slug de l'url
    $slug = $_GET["slug"];
    // Récupère le produit associé dans la db
    $sql = "SELECT * FROM products WHERE slug='$slug'";
    $resultat = qdb($sql);
    $product = mysqli_fetch_assoc($resultat);

    $titre = $product["title"];
    $description = $product["description"];
    $image = $product["image"];
    $prix = $product["price"];


    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        add_to_cart($slug, $_POST['qty']);
    }
?>
<?php include __DIR__ . "/../components/navbar.php"; ?>
<div class="product-page">
    <div class="product-image">
        <img src="<?= $image ?>" alt="<?= $titre ?>">
    </div>

    <div class="product-info">
        <h1><?= $titre ?></h1>
        <p><?= $description ?></p>
        <div class="buttons-wrap">
  
            <form class="add-to-cart" method="post">
                <button type="submit" class="basket-button">
                    Ajouter au panier
                </button>
                <div>
                    <label for="qty">Quantité : </label>
                    <input id="qty" name="qty" type="number" value="1" min="1" placeholder="Quantité"/>
                </div>
            </form>
        </div>
    </div>


</div>
<script src="product-page.js"></script>