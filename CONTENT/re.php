<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="re.css">
    <link rel="stylesheet" href="re.js">
</head>
<body>
    <div class="container">
        <h1>Réservation de nounou</h1>
        <form action="co_enfant.php" method="post">
            <label for="nom_parent">Nom du parent :</label>
            <input type="text" id="nom du parent" name="nom du parent" required><br>

            <label for="prenom_parent">Prénom du parent :</label>
            <input type="text" id="prenom du parent" name="prenom du parent" required><br>

            <label for="prenom_Enfant">Nom de l'enfant :</label>
            <input type="text" id="Nom de l'enfant" name="Nom de l'enfant" required><br>

            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date Naissance" name="date Naissance" required><br>
             
            <label for="sexe">sexe:</label>
            <!--input type="sexe" id="sexe" name="sexe" required><br-->
            <select id="sexe" name="sexe">
                <option value=""> </option>
                <option value="feminin">feminin</option>
                <option value="masculin">masculin</option>
            </select><br>


            <label for="Nombre_d'enfant">Nombre d'enfant :</label>
            <select id="Nombre d'enfant" name="Nombre d'enfant[]">
                <option value="1 Enfant">1 enfant</option>
                <option value="2 Enfants">2 enfants</option>
                <option value="3 enfants">3 enfants</option>
                <option value="4 enfants">4 enfants</option>
                <option value="5 enfants">5 enfants</option>
                <option value="6 enfants">6 enfants</option>
                <option value="7 enfants">7 enfants</option>
                <option value="8 enfants">8 enfants</option>
                <option value="9 enfants">9 enfants</option>
                <option value="10 enfants">10 enfants</option>
            </select><br>    

            <label for="allergie">Allergie :</label>
            <select id="allergie" name="allergie[]">
                <option value="">Aucune</option>
                <option value="nourriture">nourriture</option>
                <option value="legumes">Allergie aux legumes</option>
                <option value="avocat">Allergie à l'avocat</option>
                <option value="banane">Allergie à la banane</option>
                <option value="fraises">Allergie aux fraises </option>
                <option value="pommes">Allergie aux pommes</option>
                <option value="poissons">Allergie aux poissons</option>
                <option value="chips">Allergie aux chips</option>
                <option value="fruits">Allergie aux fruits</option>
                <option value="pas d'allergie">pas d'allergie</option>
                <option value="autre">autre</option>
            </select><br>

            <label for="besoins_Speciaux">Besoins spéciaux :</label>
            <select id="besoins Speciaux" name="besoins Speciaux[]">
                <option value="">Aucune</option>
                <option value="malade">malade</option>
                <option value="en cours">en cours</option>
                <option value="le goute">le goute</option>
                <option value="revision">revision</option>
                <option value="autre">autre</option>
            </select><br>


            <label for="Nounou">Nounou:</label>
            <select id="Nounou " name="TNounou []">
                <option value=" Awa Touré">Awa Touré</option>
            </select><br>


            <label for="Tarifs">Tarifs par enfant:</label>
            <select id="Tarifs " name="Tarifs []">
                <option value=""></option>
                <option value="1h = 5000f">1h = 5000f</option>
                <option value="2h = 10000f">2h = 8000f</option>
                <option value="3h = 12000f">3h = 12000f</option>
                <option value="4h = 16000f">3h = 16000f</option>
                <option value="5h = 20000f">5h = 20000f</option>
                <option value="6h = 25000f">3h = 25000f</option>
                <option value="7h = 28000f">3h = 28000f</option>
                <option value="8h = 32000f">3h = 32000f</option>
                <option value="9h = 38000f">3h = 38000f</option>
                <option value="Journée = 40000f">Journée = 40000f</option>
            </select><br>
                


                <button id="boutonReservation">Réserver</button>

                <script>
                  document.getElementById("boutonReservation").onclick = function() {
                    location.href = "confir.php";
                  };
                </script>
              

<script>
   /*function redirigerVersConfir() {
        // Ajoutez ici votre logique pour vérifier si toutes les informations sont renseignées
        // Par exemple, vous pouvez vérifier si tous les champs de formulaire sont remplis

        // Si toutes les informations sont renseignées, redirigez vers la page de confirmation
        window.location.href = 'confir.html';
    }*/
     // Fonction pour vérifier si tous les champs sont remplis
        function verifieChamps() {
            var nom = document.getElementById('nom duparent').value;
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

</script>

        </form>
    </div>
</body>
</html>