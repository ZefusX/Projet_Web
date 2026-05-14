<link rel="stylesheet" href="product-page.css">

<?php
// Ici c'est codé en brut mais on récupérera ça depuis la BDD après
// Faudra faire un select * from produit where slug = ...
// y'aura plus besoin de la boucle en bas
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

  $slug = $_GET["slug"];
  foreach ($products as $product) {
    if ($product["slug"] === $slug) {
      $titre = $product["title"];
      $description = $product["description"];
      $image = $product["image"];
    }
  }
?>

<div class="product-page">
    <div class="product-image">
        <img src="<?= $image ?>" alt="<?= $titre ?>">
    </div>

    <div class="product-info">
        <h1><?= $titre ?></h1>
        <p><?= $description ?></p>
    </div>
</div>