<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galerie - Djim Barber</title>

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
        <a href="galerie.php" class="active">Galerie</a>
        <a href="rendez-vous.php">Rendez-vous</a>
        <a href="contact.php">Contact</a>

    </nav>

    <a href="rendez-vous.php" class="btn-header">
        Prendre rendez-vous
    </a>

</header>


<section class="hero" style="min-height: 400px;">

    <div class="hero-content">

        <p class="small-title">
            NOS RÉALISATIONS
        </p>

        <h1>
            Notre <span>galerie</span>
        </h1>

        <p class="hero-text">
            Découvrez quelques-unes de nos réalisations.
        </p>

    </div>

</section>


<section class="gallery">

    <div class="section-heading">

        <p class="section-subtitle">
            NOS CRÉATIONS
        </p>

        <h2>
            Découvrez notre <span>travail</span>
        </h2>

    </div>


    <div class="gallery-container">

        <div class="gallery-item">
            <img src="css/images/coiffure6.jfif" alt="Coiffure">
        </div>

        <div class="gallery-item">
            <img src="css/images/coiffure5.jfif" alt="Coiffure">
        </div>

        <div class="gallery-item">
            <img src="css/images/coiffure4.jfif" alt="Coiffure">
        </div>

        <div class="gallery-item">
            <img src="css/images/coiffure3.jfif" alt="Coiffure">
        </div>

        <div class="gallery-item">
            <img src="css/images/coiffure2.jfif" alt="Coiffure">
        </div>

        <div class="gallery-item">
            <img src="css/images/coiffure1.jfif" alt="Coiffure">
        </div>

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