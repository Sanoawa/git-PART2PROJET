 // Fonction pour vérifier si tous les champs sont remplis
        function verifieChamps() {
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            return nom.trim() !== '' && prenom.trim() !== '';
        }

        // Écouter les changements dans les champs
        document.getElementById('nom').addEventListener('input', function() {
            document.getElementById('bouton-reserver').disabled = !verifieChamps();
        });

        document.getElementById('prenom').addEventListener('input', function() {
            document.getElementById('bouton-reserver').disabled = !verifieChamps();
        });

        // Gérer le clic sur le bouton "Réserver"
        document.getElementById('bouton-reserver').addEventListener('click', function() {
            if (verifieChamps()) {
                // Rediriger vers la page de confirmation si tous les champs sont remplis
                window.location.href = 'confirmation.html';
            } else {
                // Afficher un message d'erreur si les champs ne sont pas remplis
                alert('Veuillez remplir tous les champs.');
            }
        });
