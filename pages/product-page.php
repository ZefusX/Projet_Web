<link rel="stylesheet" href="product-page.css">

<?php
    require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd

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


?>
<?php include __DIR__ . "/../components/navbar.php"; ?>
<div class="product-page">
    <div class="product-image">
        <img src="<?= $image ?>" alt="<?= $titre ?>">
    </div>

    <div class="product-info">
        <h1><?= $titre ?></h1>
        <p><?= $description ?></p>
        <div class="product-price">
            <button class="buy-button" onclick="">
                Acheter maintenant <span id="price"><?= $prix ?>€</span>
            </button>
        </div>
    </div>


</div>