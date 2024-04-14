<?php
//connexin à la base de donnée

$serveur = "localhost";
$utilisateur = "root";
$mot_de_pass = "";
$base_donnee = "snounou_app";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_pass, $base_donnee);
//verification de laconnexion

if ($connexion -> connect_error) {
   die("echec de la connexion: " . $connexion -> connect_error);
}

//recuperation des donnees

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$Email = $_POST['Email'];
$mot_de_pass = $_POST['password'];

$sql = "INSERT INTO utilisateur (nom,prenoms,Email,mot_de_passe) VALUES ('$nom','$prenom','$Email','$mot_de_pass')";
if ($connexion->query($sql) === TRUE) {
   header("location: incri.html");
   exit();
} else {
   echo "Erreur : " . $sql . "<br>" . $connexion ->error;
}
//fermeture de laconnection
$connexion -> close();
?>