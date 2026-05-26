let boutonAchat = document.querySelector(".buy-button");

if (boutonAchat) {
  boutonAchat.addEventListener("click", function () {
    // On bloque le bouton pour éviter les clics multiples comme on va utiliser le bouton pour une animation
    boutonAchat.disabled = true;
    boutonAchat.style.opacity = "0.6";
    boutonAchat.style.cursor = "not-allowed";

    // On change le texte du bouton pour simuler le traitement avec la banque
    boutonAchat.innerHTML = "Connexion à la banque... ⏳";

    // On utilise setTimeout pour attendre 2 secondes
    setTimeout(function () {
      // Calcul d'une fausse date de livraison (Date du jour + 3 jours)
      let dateLivraison = new Date();
      dateLivraison.setDate(dateLivraison.getDate() + 3);

      // On formate la date en format français
      let dateFormatee = dateLivraison.toLocaleDateString("fr-FR");

      // On affiche le message de confirmation avec la date calculée
      alert(
        "🎉 Paiement accepté ! \n\nVos bières sont en cours de préparation. La livraison est estimée au : " +
          dateFormatee +
          ".\n\nMerci pour votre commande !"
      );

      // On affiche la validation sur le bouton
      boutonAchat.innerHTML = "Commande validée ✅";
      boutonAchat.style.backgroundColor = "#4CAF50"; // On le met en vert pour marquer le succès
      boutonAchat.style.color = "white";
    }, 2000); // 2000ms = 2 secondes
  });
}

// Pour ne pas vider le panier par erreur au mauvais clic
let formSuppression = document.querySelector(
  "form[action='../api/clear_cart.php']"
);

if (formSuppression) {
  formSuppression.addEventListener("submit", function (evenement) {
    let confirmation = confirm(
      "Êtes-vous sûr de vouloir vider tout votre panier ?"
    );

    if (confirmation === false) {
      evenement.preventDefault(); // Annule la suppression si on clique sur "Annuler"
    }
  });
}
