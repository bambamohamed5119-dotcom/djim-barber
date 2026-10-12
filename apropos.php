<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>À propos - Djim Barber</title>

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

        <a href="apropos.php" class="active">
            À propos
        </a>

        <a href="prestations.php">
            Prestations
        </a>

        <a href="galerie.php">
            Galerie
        </a>

        <a href="rendez-vous.php">
            Rendez-vous
        </a>

        <a href="contact.php">
            Contact
        </a>

    </nav>

    <a href="rendez-vous.php" class="btn-header">
        Prendre rendez-vous
    </a>

</header>


<section class="hero" style="min-height: 400px;">

    <div class="hero-content">

        <p class="small-title">
            QUI SOMMES-NOUS ?
        </p>

        <h1>
            À propos de <span>nous</span>
        </h1>

        <p class="hero-text">
            Découvrez notre histoire, nos valeurs et notre passion
            pour la coiffure.
        </p>

    </div>

</section>


<section class="about">

    <div class="about-container">

        <div class="about-image">

            <img src="css/images/logo.png" alt="Élégance Coiffure">
                 alt="Élégance Coiffure">

        </div>

        <div class="about-content">

            <p class="section-subtitle">
                NOTRE HISTOIRE
            </p>

            <h2>
                La beauté au cœur de<br>
                notre <span>métier</span>
            </h2>

            <p>
                Djim Barber est un salon de coiffure moderne
                créé pour offrir à chaque client une expérience
                unique et personnalisée.
            </p>

            <p>
                Nous mettons notre savoir-faire et notre créativité
                au service de votre beauté.
            </p>

        </div>

    </div>

</section>


<section class="services">

    <div class="section-heading">

        <p class="section-subtitle">
            NOS VALEURS
        </p>

        <h2>
            Ce qui nous <span>définit</span>
        </h2>

    </div>


    <div class="services-container">

        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-heart"></i>
            </div>

            <h3>Passion</h3>

            <p>
                Nous exerçons notre métier avec passion
                et créativité.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-star"></i>
            </div>

            <h3>Qualité</h3>

            <p>
                Nous recherchons constamment la qualité
                dans chacune de nos prestations.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <h3>Écoute</h3>

            <p>
                Nous prenons le temps de comprendre
                les besoins de chaque client.
            </p>

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
                <i class="fa-solid fa-phone"></i>
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