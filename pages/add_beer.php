<?php
    // Partie session
    include "../config/init.php";
    $cart_items = $_SESSION["cart"];
    
    // Partie BDD
    require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Une fois le formulaire envoyé on sauvegarde les données
        $title = $_POST["title"];
        $slug = $_POST["slug"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        $price = $_POST["price"];

        // Qu'on insere dans la BDD
        $sql = "INSERT INTO products (title, slug, description, image, price)
        VALUES ('$title', '$slug', '$description', '$image', $price)";
        $resultat = qdb($sql);
    }
?>


<?php include __DIR__ . "/../components/navbar.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une bière</title>
    <link rel="stylesheet" href="add_beer.css">
</head>
<body>
    <div class="add-beer-page">
      <h1>Ajouter une bière</h1>

      <form action="add_beer.php" method="POST">

          <label for="title">Nom de la bière</label><br>
          <input type="text" id="title" name="title" placeholder="Heineken" required>
          <br><br>

          <label for="slug">Slug</label><br>
          <input type="text" id="slug" name="slug" placeholder="heineken" required>
          <br><br>

          <label for="description">Description</label><br>
          <textarea id="description" name="description" rows="5" placeholder="Une très bonne bière" required></textarea>
          <br><br>

          <label for="price">Prix (€)</label><br>
          <input type="number" id="price" name="price" step="1" placeholder="8" required>
          <br><br>

          <label for="image">URL image</label><br>
          <input type="text" id="image" name="image" placeholder="../assets/heineken.png" required>
          <br><br>

          <button type="submit">Ajouter la bière</button>

      </form>
    </div>
</body>
</html> 