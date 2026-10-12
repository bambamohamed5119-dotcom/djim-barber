<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Djim Barber - Salon de coiffure</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Icônes -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- ================= HEADER ================= -->

    <header class="header">

        <div class="logo">
            <span>Djim</span>Barber
        </div>

        <nav class="navbar">
            <a href="index.php" class="active">Accueil</a>
            <a href="apropos.php">À propos</a>
            <a href="prestations.php">Prestations</a>
            <a href="galerie.php">Galerie</a>
            <a href="rendez-vous.php">Rendez-vous</a>
            <a href="contact.php">Contact</a>
        </nav>

        <a href="rendez-vous.php" class="btn-header">
            Prendre rendez-vous
        </a>

    </header>


    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-content">

            <p class="small-title">
                BIENVENUE CHEZ ÉLÉGANCE COIFFURE
            </p>

            <h1>
                Votre beauté,<br>
                <span>notre passion.</span>
            </h1>

            <p class="hero-text">
                Découvrez un espace dédié à la beauté et au bien-être
                de vos cheveux. Nos professionnels sont à votre écoute
                pour vous offrir une expérience unique.
            </p>

            <div class="hero-buttons">

                <a href="rendez-vous.php" class="btn-primary">
                    Prendre rendez-vous
                </a>

                <a href="prestations.php" class="btn-secondary">
                    Découvrir nos services
                </a>

            </div>

        </div>

    </section>


    <!-- ================= À PROPOS ================= -->

    <section class="about">

        <div class="about-image">
            <img src="css/images/logo.png"
                 alt="Coiffure réalisée dans notre salon">
        </div>

        <div class="about-content">

            <p class="section-subtitle">
                À PROPOS DE NOUS
            </p>

            <h2>
                Une équipe au service<br>
                de votre <span>beauté</span>
            </h2>

            <p>
                Élégance Coiffure est un salon spécialisé dans la beauté
                et les soins capillaires. Notre équipe met son savoir-faire
                et sa créativité au service de chaque client.
            </p>

            <p>
                Que vous souhaitiez une nouvelle coupe, une coiffure
                élégante ou un soin particulier, nous vous accompagnons
                afin de vous proposer un résultat adapté à vos attentes.
            </p>

            <a href="apropos.php" class="btn-primary">
                En savoir plus
            </a>

        </div>

    </section>


    <!-- ================= SERVICES ================= -->

    <section class="services">

        <div class="section-heading">

            <p class="section-subtitle">
                NOS SERVICES
            </p>

            <h2>
                Découvrez nos <span>prestations</span>
            </h2>

            <p>
                Des prestations adaptées à vos besoins et à votre style.
            </p>

        </div>


        <div class="services-container">

            <!-- Service 1 -->

            <div class="service-card">

                <div class="service-icon">
                    <i class="fa-solid fa-scissors"></i>
                </div>

                <h3>Coupe & Coiffure</h3>

                <p>
                    Des coupes modernes et des coiffures adaptées
                    à votre personnalité.
                </p>

                <a href="prestations.php">
                    En savoir plus →
                </a>

            </div>


            <!-- Service 2 -->

            <div class="service-card">

                <div class="service-icon">
                    <i class="fa-solid fa-spa"></i>
                </div>

                <h3>Soins capillaires</h3>

                <p>
                    Prenez soin de vos cheveux avec nos différents
                    soins et traitements capillaires.
                </p>

                <a href="prestations.php">
                    En savoir plus →
                </a>

            </div>


            <!-- Service 3 -->

            <div class="service-card">

                <div class="service-icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>

                <h3>Tresses & Styles</h3>

                <p>
                    Découvrez nos différents styles de tresses et
                    coiffures personnalisées.
                </p>

                <a href="prestations.php">
                    En savoir plus →
                </a>

            </div>

        </div>

    </section>


    <!-- ================= GALERIE ================= -->

    <section class="gallery">

        <div class="section-heading">

            <p class="section-subtitle">
                NOS RÉALISATIONS
            </p>

            <h2>
                Quelques-unes de nos <span>créations</span>
            </h2>

        </div>


        <div class="gallery-container">

            <div class="gallery-item">
                <img src="css/images/coiffure1.jfif"
                     alt="Coiffure 1">
            </div>

            <div class="gallery-item">
                <img src="css/images/coiffure2.jfif"
                     alt="Coiffure 2">
            </div>

            <div class="gallery-item">
                <img src="css/images/coiffure3.jfif"
                     alt="Coiffure 3">
            </div>

        </div>


        <div class="gallery-button">

            <a href="galerie.php" class="btn-primary">
                Voir toute la galerie
            </a>

        </div>

    </section>


    <!-- ================= RENDEZ-VOUS ================= -->

    <section class="appointment">

        <div class="appointment-content">

            <p class="section-subtitle">
                PRENEZ SOIN DE VOUS
            </p>

            <h2>
                Prêt pour votre<br>
                prochaine <span>coiffure ?</span>
            </h2>

            <p>
                Réservez votre rendez-vous en quelques minutes
                et choisissez la prestation qui vous convient.
            </p>

            <a href="rendez-vous.php" class="btn-primary">
                Prendre rendez-vous
            </a>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="footer-container">

            <!-- Informations -->

            <div class="footer-column">

                <h3>
                    <span>É</span>légance Coiffure
                </h3>

                <p>
                    Votre beauté, notre passion.
                    Nous vous accompagnons pour révéler
                    votre style.
                </p>

                <div class="socials">

                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                </div>

            </div>


            <!-- Navigation -->

            <div class="footer-column">

                <h4>Navigation</h4>

                <a href="index.php">Accueil</a>
                <a href="apropos.php">À propos</a>
                <a href="prestations.php">Prestations</a>
                <a href="galerie.php">Galerie</a>
                <a href="contact.php">Contact</a>

            </div>


            <!-- Contact -->

            <div class="footer-column">

                <h4>Contact</h4>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    Abidjan, Côte d'Ivoire
                </p>

                <p>
                    <i class="fa-solid fa-phone"></i>
                    +225 07 13 43 92 15<br>
                    +225 05 08 71 27 66
                </p>

                <p>
                    <i class="fa-solid fa-envelope"></i>
                    contact@elegance-coiffure.com
                </p>

            </div>


            <!-- Horaires -->

            <div class="footer-column">

                <h4>Horaires</h4>

                <p>Lundi - Samedi</p>
                <strong>08h00 - 19h00</strong>

                <p>Dimanche</p>
                <strong>Fermé</strong>

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