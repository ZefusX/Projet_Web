let champQuantite = document.getElementById("qty");

if (champQuantite) {
  champQuantite.addEventListener("input", function () {
    // On convertit la valeur du input en int
    let valeurSaisie = parseInt(champQuantite.value);
    // si l'utilisateur tape un nombre négatif ou 0 on remet à 1
    if (valeurSaisie < 1) {
      champQuantite.value = 1;
    }

    // Si plus de 50 bières on affiche un message
    if (valeurSaisie > 49) {
      alert("50 bières ? Vous devez être bien désydraté ! ");
    }
  });
}
