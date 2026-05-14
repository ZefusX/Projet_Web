<?php
// On fait ça sous forme de fonction pour pouvoir l'appeler de manière lisible
function Card($title, $description, $image, $slug) {
?>
<a href="./product-page.php?slug=<?= $slug ?>">
<div class="card">
    <div class="card-image">
        <img src="<?= $image ?>" alt="<?= $title ?>">
    </div>

    <div class="card-content">
        <h2><?= $title ?></h2>
        <p><?= $description ?></p>
    </div>
</div>
</a>
<?php } ?>

<script></script>