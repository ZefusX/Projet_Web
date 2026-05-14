<link rel="stylesheet" href="../components/card.css">
<link rel="stylesheet" href="shop.css">

<?php
require_once __DIR__ . "/../components/card.php";

require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd
$sql = "SELECT * FROM products";
$resultat = qdb($sql);

$products = [];

while ($row = mysqli_fetch_assoc($resultat)) {
    $products[] = $row;
}
?>
<?php include __DIR__ . "/../components/navbar.php"; ?>

<div class="shop-grid">
<?php
foreach ($products as $product) {
    Card($product["title"], $product["description"], $product["image"], $product["slug"]);
}
?>
</div>