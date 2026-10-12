<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Djim Barber</title>

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
        <a href="rendez-vous.php">Rendez-vous</a>
        <a href="contact.php" class="active">Contact</a>

    </nav>

    <a href="rendez-vous.php" class="btn-header">
        Prendre rendez-vous
    </a>

</header>


<section class="hero" style="min-height: 350px;">

    <div class="hero-content">

        <p class="small-title">
            CONTACTEZ-NOUS
        </p>

        <h1>
            Parlons <span>ensemble</span>
        </h1>

        <p class="hero-text">
            Une question ? Une demande ? N'hésitez pas à nous contacter.
        </p>

    </div>

</section>


<section class="contact-section">

    <div class="section-heading">

        <p class="section-subtitle">
            CONTACT
        </p>

        <h2>
            Nous sommes à votre <span>écoute</span>
        </h2>

    </div>


    <div class="contact-container">


        <div class="contact-info">

            <div class="contact-card">

                <div class="service-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <h3>Adresse</h3>

                <p>
                    Abidjan, Côte d'Ivoire
                </p>

            </div>


            <div class="contact-card">

                <div class="service-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <h3>Téléphone</h3>

                <p>
                    +225 07 13 43 92 15<br>
                    +225 05 08 71 27 66
                </p>

            </div>


            <div class="contact-card">

                <div class="service-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <h3>Email</h3>

                <p>
                    contact@elegance-coiffure.com
                </p>

            </div>


            <div class="contact-card">

                <div class="service-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>

                <h3>Horaires</h3>

                <p>
                    Lundi - Samedi<br>
                    08h00 - 19h00
                </p>

            </div>

        </div>


        <form class="contact-form"
              method="post"
              action="traitement-contact.php">

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

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Votre adresse email"
                    required
                >

            </div>


            <div class="form-group">

                <label for="sujet">
                    Sujet
                </label>

                <input
                    type="text"
                    id="sujet"
                    name="sujet"
                    placeholder="Sujet de votre message"
                    required
                >

            </div>


            <div class="form-group">

                <label for="message">
                    Message
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="7"
                    placeholder="Votre message..."
                    required
                ></textarea>

            </div>


            <button type="submit" class="btn-primary">
                Envoyer le message
            </button>

        </form>

    </div>

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
