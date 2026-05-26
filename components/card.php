<?php
require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd

$slug = $_POST["slug"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "DELETE FROM products WHERE slug='$slug'";
    $resultat = qdb($sql);
}

// On fait ça sous forme de fonction pour pouvoir l'appeler de manière lisible
function Card($title, $description, $image, $slug) {
?>


<div class="card">
    <form method="POST" class="delete-form">
        <input type="hidden" name="slug" value="<?= $slug ?>"> <!-- On fait ça pour avoir l'information du slug sans que celle ci sois visible-->
        <button type="submit" class="delete-btn" onclick="alert('Vous aller supprimer un élément de la BDD')">Supprimer</button>
    </form>

    <a href="./product-page.php?slug=<?= $slug ?>">

        <div class="card-image">
            <img src="<?= $image ?>" alt="<?= $title ?>">
        </div>

        <div class="card-content">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
        </div>
    </a>
</div>


<?php } ?>