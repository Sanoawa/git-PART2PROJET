<?php
//connexin à la base de donnée

$serveur = "localhost";
$utilisateur = "root";
$mot_de_pass = "";
$base_donnee = "nounou_app";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_pass, $base_donnee);
//verification de laconnexion

if ($connexion -> connect_error) {
   die("echec de la connexion: " . $connexion -> connect_error);
}

//recuperation des donnees

$nom_du_parent = $_POST['nom du parent'];
$prenom_du_parent = $_POST['prenom du parent'];
$nom_de_l_enfant = $_POST['nom de l enfant'];
$Date_de_naissance = $_POST['date de naissance'];
$sexe = $_POST['sexe'];
$nombre_d_enfant = $_POST['nombre_enfant'];
$allergies = $_POST['allergies'];
$Besoins_speciaux = $_POST['Besoin_speciaux'];
$nounou = $_POST['nounou'];
$Tarif = $_POST['Tarif'];

$sql = "INSERT INTO nounou (nom du parent,prenom_du_parent,nom_de_l_enfant,Date_de_naissance,sexe,nombre_d_enfant,allergies,Besoins_speciaux,nounou,Tarif) VALUES ('$nom_du_parent','$prenom_du_parent','$nom_de_l_enfant','$Date_naissance','$sexe',$nombre_d_enfant''$allergies','$Besoins_speciaux','$nounou','$Tarif')";
if ($connexion->query($sql) === TRUE) {
   exit();
} else {
   echo "Erreur : " . $sql . "<br>" . $connexion ->error;
}
//fermeture de laconnection
$connexion -> close();
?>