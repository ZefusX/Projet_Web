<?php
    include "../config/init.php";
    $cart_items = $_SESSION["cart"];
?>
<?php include __DIR__ . "/../components/navbar.php"; ?>
<p>tets</p>
<?php
  foreach ($cart_items as $cle => $valeur) {echo $cle . " : " . $valeur . " 
" ;}
?>