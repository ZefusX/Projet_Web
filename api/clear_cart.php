<?php
include "../config/init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["cart"] = [];
}

header("Location: ../pages/panier.php");
exit;