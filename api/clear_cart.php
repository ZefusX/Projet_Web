<?php
include "../config/init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // On remet le panier à 0
    $_SESSION["cart"] = [];
}
// On redirige vers la page du panier pour éviter d'avoir une page blanche après avoir cliqué sur le bouton
header("Location: ../pages/panier.php");
exit;