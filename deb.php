<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de prise de rendez-vous</title>
</head>
<body>

<h2>Prise de rendez-vous</h2>

<form action="traitement.php" method="post">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom"><br>

    <label for="prenom">Prénom :</label><br>
    <input type="text" id="prenom" name="prenom"><br>
    
    <label for="age">Age :</label><br>
    <input type="number" id="age" name="age"><br>
    
    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br>

    <label for="specialite">Spécialité :</label><br>
    <select id="specialite" name="specialite">
        <option value="Cardiologie">Cardiologie</option>
        <option value="Dermatologie">Dermatologie</option>
        <option value="Gynécologie">Gynécologie</option>
        <option value="Ophtalmologie">Ophtalmologie</option>
    </select><br>
    
    <input type="submit" value="Envoyer">
</form>

</body>
</html>
