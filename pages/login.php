<?php
  include "../config/init.php";
  require_once __DIR__ . "/../config/db.php"; // Obliger pour se connecter à la bdd
 
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "SELECT password FROM users WHERE username='$username'";
    $resultat_sql = qdb($sql);
     $user = mysqli_fetch_assoc($resultat_sql);

    if ($user && $user["password"] === $password) {
      echo "Connection réussite";
    } else {
      echo "Mot de passe incorrect";
    }
  }

?>


<head>
    <meta charset="UTF-8">
    <title>AGLOUGLOU | Entre passionés</title>
    <link rel="stylesheet" href="register-login.css">
</head>
<body>
<?php include __DIR__ . "/../components/navbar.php"; ?>

<div class="login-page">
  <h1>Se connecter</h1>
  <form method="POST">
    <input type="text" name="username" placeholder="Nom d'utilsateur">
    <input type="password" name="password" placeholder="Mot de passe">

    <button type="submit">Se connecter</button>
  </form>
  <p>Pas encore inscrit ? <a href="./register.php">S'inscrire</a></p>
</div>
</body>