<?php





require_once 'config.php';

$message_confirmation = '';
$message_erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
        $message_erreur = 'Veuillez remplir tous les champs obligatoires.';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message_erreur = 'Veuillez saisir une adresse email valide.';

    } else {
        try {
            // Insertion du rendez-vous dans la base de données
            $sql = "INSERT INTO rendez_vous
                    (nom, prenom, telephone, email, prestation, date, heure, commentaire)
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

            $message_confirmation = 'Votre demande de rendez-vous a été enregistrée avec succès !';

        } catch (PDOException $e) {
            error_log($e->getMessage());
            $message_erreur = 'Une erreur est survenue lors de l’enregistrement. Veuillez réessayer.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rendez-vous - Djim Barber</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<header class="header">

    <div class="logo">
        <span>Djim</span>Barber
    </div>

    <nav class="navbar">

        <a href="index.php">Accueil</a>
        <a href="apropos.php">À propos</a>
        <a href="prestations.php">Prestations</a>
        <a href="galerie.php">Galerie</a>
        <a href="rendez-vous.php" class="active">Rendez-vous</a>
        <a href="contact.php">Contact</a>
    </nav>

</header>


<section class="hero" style="min-height: 350px;">

    <div class="hero-content">

        <p class="small-title">
            RÉSERVATION
        </p>

        <h1>
            Prenez <span>rendez-vous</span>
        </h1>

        <p class="hero-text">
            Remplissez le formulaire ci-dessous pour envoyer
            votre demande de rendez-vous.
        </p>

    </div>

</section>


<section class="appointment-form-section">

    <div class="section-heading">

        <p class="section-subtitle">
            RÉSERVATION
        </p>

        <h2>
            Réservez votre <span>moment</span>
        </h2>

    </div>


    <form class="appointment-form"
          method="post"
          action="traitement-rendez-vous.php">

        <div class="form-group">

            <label for="nom">
                Nom
            </label>

            <input
                type="text"
                id="nom"
                name="nom"
                placeholder="Votre nom"
                required
            >

        </div>


        <div class="form-group">

            <label for="prenom">
                Prénom
            </label>

            <input
                type="text"
                id="prenom"
                name="prenom"
                placeholder="Votre prénom"
                required
            >

        </div>


        <div class="form-group">

            <label for="telephone">
                Téléphone
            </label>

            <input
                type="tel"
                id="telephone"
                name="telephone"
                placeholder="+225 XX XX XX XX XX"
                required
            >

        </div>


        <div class="form-group">

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="exemple@email.com"
            >

        </div>


        <div class="form-group">

            <label for="prestation">
                Prestation
            </label>

            <select id="prestation" name="prestation" required>

                <option value="">
                    Choisir une prestation
                </option>

                <option value="coupe-homme">
                    Coupe homme
                </option>

                <option value="coupe-femme">
                    Coupe femme
                </option>

                <option value="soins">
                    Soins capillaires
                </option>

                <option value="tresses">
                    Tresses
                </option>

                <option value="coloration">
                    Coloration
                </option>

                <option value="evenement">
                    Coiffure événement
                </option>

            </select>

        </div>


        <div class="form-group">

            <label for="date">
                Date
            </label>

            <input
                type="date"
                id="date"
                name="date"
                required
            >

        </div>


        <div class="form-group">

            <label for="heure">
                Heure
            </label>

            <input
                type="time"
                id="heure"
                name="heure"
                required
            >

        </div>


        <div class="form-group full">

            <label for="message">
                Commentaire
            </label>

            <textarea
                id="message"
                name="message"
                rows="6"
                placeholder="Informations complémentaires..."
            ></textarea>

        </div>


        <button type="submit" class="btn-primary">
            Envoyer ma demande
        </button>

    </form>

</section>


<footer class="footer">

    <div class="footer-container">

        <div class="footer-column">

            <h3><span>Djim</span>Barber Coiffure</h3>

            <p>
                Votre beauté, notre passion.
            </p>

        </div>

        <div class="footer-column">

            <h4>Navigation</h4>

            <a href="index.php">Accueil</a>
            <a href="apropos.php">À propos</a>
            <a href="prestations.php">Prestations</a>
            <a href="galerie.php">Galerie</a>
            <a href="contact.php">Contact</a>

        </div>

        <div class="footer-column">

            <h4>Contact</h4>

            <p>Abidjan, Côte d'Ivoire</p>
            <p>
                +225 07 13 43 92 15<br>
                    +225 05 08 71 27 66
            </p>

        </div>

        <div class="footer-column">

            <h4>Horaires</h4>

            <p>Lundi - Samedi</p>
            <strong>08h00 - 19h00</strong>

        </div>

    </div>

    <div class="footer-bottom">

        <p>
            © 2026 Djim Barber. Tous droits réservés.
        </p>

    </div>

</footer>

</body>
</html>