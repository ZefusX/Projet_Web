<link rel="stylesheet" href="../components/navbar.css">

<?php
    // Logique pour intégrer le panier dans la barre de navigation
    $cart_items = $_SESSION["cart"];
    $total = 0;

    foreach($cart_items as $quantity) {
        $total+=$quantity;
    }
?>

<nav class="navbar">
    <div class="nav-left">
        <a href="../pages/home.php">Accueil</a>
        <a href="../pages/shop.php">Boutique</a>
    </div>
    <div class="nav-logo">
        AGLOUGLOU
    </div>
    <div class="nav-right">
        <a href="../pages/panier.php" id="icone_et_nombre_panier">
            <p><?= $total ?></p>
            <img src="../assets/icone_panier.svg" alt="Panier" />
        </a>
        <a href="../pages/login.php">
            <img src="../assets/icone_utilisateur.svg" alt="Se connecter" />
        </a>
    </div>
</nav>