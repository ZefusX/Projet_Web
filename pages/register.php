<?php
  include "../config/init.php";
  require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd

  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm-password"];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if ($password===$confirm_password) {
        $sql = "INSERT INTO users (username, password) 
                VALUES ('$username', '$password')";
        $resultat = qdb($sql);
        echo "Compte créé";
      }  else {
        echo "Les mots de passe ne correspondent pas";
    }
  }
?>
<?php include __DIR__ . "/../components/navbar.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>AGLOUGLOU | Entre passionés</title>
    <link rel="stylesheet" href="register-login.css">
</head>
<body>
<div class="register-page">
  <h1>S'inscrire</h1>
  <form method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="confirm-password" placeholder="Confirmer le mot de passe">

    <button type="submit">
      Valider
    </button>
  </form>
  <p>Déjà inscrit ? <a href="./login.php">Se connecter</a></p>
</div>
</body></body>