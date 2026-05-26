let boutonAjout = document.querySelector(".add-beer-button a");

// On s'assure que le bouton existe bien sur la page
if (boutonAjout) {
  boutonAjout.addEventListener("click", function (evenement) {
    let choixUtilisateur = confirm(
      "Êtes-vous sûr de vouloir quitter le catalogue pour ajouter une nouvelle bière ?"
    );

    if (choixUtilisateur === false) {
      // On bloque la redirection
      evenement.preventDefault();
    }
  });
}
