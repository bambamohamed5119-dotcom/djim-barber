<?php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: rendez-vous.php');
    exit;
}

// Récupération des données du formulaire
$nom = trim($_POST['nom'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$email = trim($_POST['email'] ?? '');
$prestation = trim($_POST['prestation'] ?? '');
$date = trim($_POST['date'] ?? '');
$heure = trim($_POST['heure'] ?? '');
$commentaire = trim($_POST['commentaire'] ?? '');

// Vérification des champs obligatoires
if (
    $nom === '' ||
    $prenom === '' ||
    $telephone === '' ||
    $email === '' ||
    $prestation === '' ||
    $date === '' ||
    $heure === ''
) {
    exit('Erreur : veuillez remplir tous les champs obligatoires.');
}

// Vérification de l'adresse email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Erreur : veuillez saisir une adresse email valide.');
}

// Vérification de la date
$date_objet = DateTime::createFromFormat('!Y-m-d', $date);

if (!$date_objet || $date_objet->format('Y-m-d') !== $date) {
    exit('Erreur : la date choisie est invalide.');
}

// Vérification de l'heure
$heure_objet = DateTime::createFromFormat('!H:i', $heure);

if (!$heure_objet || $heure_objet->format('H:i') !== $heure) {
    exit('Erreur : l’heure choisie est invalide.');
}

try {

    $sql = "INSERT INTO rendez_vous
            (nom, prenom, telephone, email, prestation, `date`, heure, commentaire)
            VALUES
            (:nom, :prenom, :telephone, :email, :prestation, :date, :heure, :commentaire)";

    $requete = $pdo->prepare($sql);

    $requete->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':telephone' => $telephone,
        ':email' => $email,
        ':prestation' => $prestation,
        ':date' => $date,
        ':heure' => $heure,
        ':commentaire' => $commentaire
    ]);

    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmation - Djim Barber</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section style="max-width:700px; margin:100px auto; padding:30px; text-align:center;">
            <h1 style="color:#c9a227;">Rendez-vous enregistré !</h1>
            <p>Bonjour ' . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . ',</p>
            <p>Votre demande de rendez-vous a été enregistrée avec succès.</p>
            <p>Nous vous remercions d’avoir choisi Djim Barber.</p>
            <br>
            <a href="rendez-vous.php" class="btn-primary">Retour aux rendez-vous</a>
            <br><br>
            <a href="index.php">Retour à l’accueil</a>
        </section>
    </body>
    </html>';

} catch (PDOException $e) {

    error_log($e->getMessage());

    http_response_code(500);

    echo 'Une erreur est survenue lors de l’enregistrement du rendez-vous.
          Vérifiez la connexion à la base de données et la structure de la table rendez_vous.';
}