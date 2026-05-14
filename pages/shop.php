<link rel="stylesheet" href="../components/card.css">
<link rel="stylesheet" href="shop.css">

<?php
require_once __DIR__ . "/../components/card.php";
// Ici c'est codé en brut mais on récupérera ça depuis la BDD après
$products = [
    [
        "title" => "Chaise gaming",
        "slug" => "chaise-gaming",
        "description" => "Ultra confortable pour les longues sessions.",
        "image" => "../assets/chair.jpg"
    ],
    [
        "title" => "Clavier mécanique",
        "slug" => "clavier-mecanique",
        "description" => "Switchs rouges, très réactif.",
        "image" => "/assets/keyboard.jpg"
    ],
    [
        "title" => "Souris RGB",
        "slug" => "souris-rgb",
        "description" => "Légère et précise.",
        "image" => "/assets/mouse.jpg"
    ]
];
?>


<div class="shop-grid">
<?php
foreach ($products as $product) {
    Card($product["title"], $product["description"], $product["image"], $product["slug"]);
}
?>
</div>