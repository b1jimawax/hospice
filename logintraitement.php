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
$username = $_POST['username'];
$password = $_POST['password'];

// Préparation de la requête SQL pour vérifier les informations de connexion
$sql = "SELECT * FROM users WHERE nom_user='$username' AND mdp_user='$password'";

// Exécution de la requête
$resultat = $connexion->query($sql);

// Vérification si l'utilisateur existe dans la base de données
if ($resultat->num_rows > 0) {
    // L'utilisateur est authentifié avec succès
    // Redirection vers le tableau de bord
    header("Location: dashboard.php");
    exit(); // Assurez-vous d'utiliser exit() après la redirection pour arrêter l'exécution du script
} else {
    // L'utilisateur n'existe pas ou les informations de connexion sont incorrectes
    echo "Échec de l'authentification. Veuillez vérifier vos informations de connexion.";
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
