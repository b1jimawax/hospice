<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "hospice";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$date = $_POST['date'];
$specialite = $_POST['specialite'];

// Recherche de l'ID de la spécialité en fonction du nom
// (Suppose que le nom de la spécialité correspond exactement aux options du formulaire)
switch ($specialite) {
    case "Cardiologie":
        $specialite_id = 1;
        break;
    case "Dermatologie":
        $specialite_id = 2;
        break;
    case "Gynécologie":
        $specialite_id = 3;
        break;
    case "Ophtalmologie":
        $specialite_id = 4;
        break;
    default:
        // Gérer le cas où la spécialité n'est pas valide
        break;
}

// Requête d'insertion des données dans la table 'reservations'
$sql = "INSERT INTO reservations (nom_reserveur, prenom_reserveur, age_reserveur, date_reserveur, specialite_idspecialite) VALUES ('$nom', '$prenom', '$age', '$date', '$specialite_id')";

// Exécution de la requête
if ($connexion->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erreur lors de l'enregistrement de la réservation : " . $connexion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
