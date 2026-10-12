```php
<?php

session_start();

require_once 'config.php';

// Vérifier que le formulaire a été envoyé avec POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Récupérer et nettoyer les données du formulaire
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$sujet = trim($_POST['sujet'] ?? '');
$message = trim($_POST['message'] ?? '');

// Vérifier que tous les champs sont remplis
if ($nom === '' || $email === '' || $sujet === '' || $message === '') {
    $_SESSION['message_contact'] = [
        'type' => 'error',
        'texte' => 'Veuillez remplir tous les champs du formulaire.'
    ];

    header('Location: contact.php');
    exit;
}

// Vérifier le format de l'adresse email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message_contact'] = [
        'type' => 'error',
        'texte' => 'Veuillez saisir une adresse email valide.'
    ];

    header('Location: contact.php');
    exit;
}

// Vérifier la longueur des données
if (
    strlen($nom) > 100 ||
    strlen($email) > 150 ||
    strlen($sujet) > 200 ||
    strlen($message) > 5000
) {
    $_SESSION['message_contact'] = [
        'type' => 'error',
        'texte' => 'Certains champs dépassent la longueur autorisée.'
    ];

    header('Location: contact.php');
    exit;
}

try {

    // Enregistrer le message dans la base de données
    $sql = "INSERT INTO messages_contact
            (nom, email, sujet, message)
            VALUES
            (:nom, :email, :sujet, :message)";

    $requete = $pdo->prepare($sql);

    $requete->execute([
        ':nom' => $nom,
        ':email' => $email,
        ':sujet' => $sujet,
        ':message' => $message
    ]);

    // Message de confirmation
    $_SESSION['message_contact'] = [
        'type' => 'success',
        'texte' => 'Votre message a été envoyé avec succès ! Nous vous répondrons dès que possible.'
    ];

} catch (PDOException $e) {

    // Enregistrer une erreur dans les journaux du serveur
    error_log($e->getMessage());

    $_SESSION['message_contact'] = [
        'type' => 'error',
        'texte' => 'Une erreur est survenue lors de l’envoi. Veuillez réessayer plus tard.'
    ];
}

// Retourner sur la page de contact
header('Location: contact.php');
exit;

?>
```
