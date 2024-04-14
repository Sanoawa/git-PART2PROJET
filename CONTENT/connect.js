document.addEventListener("DOMContentLoaded", function() {
    // Vérifier si l'utilisateur est inscrit avant de permettre la connexion
    var connexionForm = document.getElementById("connexion-form");
    connexionForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher l'envoi du formulaire

        // Vérifier si l'utilisateur est inscrit (par exemple, en vérifiant s'il existe une clé "inscription" dans le stockage local)
        var inscription = localStorage.getItem("inscription");

        if (inscription) {
            // Si l'utilisateur est inscrit, vous pouvez ajouter le code pour gérer la connexion ici
            alert("Vous êtes connecté !");
            // Par exemple, vous pouvez rediriger l'utilisateur vers une page de profil ou une autre page appropriée
        } else {
            // Si l'utilisateur n'est pas inscrit, afficher un message d'erreur
            alert("Vous devez d'abord vous inscrire !");
        }
    });
});
