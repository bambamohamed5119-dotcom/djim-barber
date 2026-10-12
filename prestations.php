<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prestations - Djim Barber</title>

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

        <a href="prestations.php" class="active">
            Prestations
        </a>

        <a href="galerie.php">Galerie</a>

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
            NOS SERVICES
        </p>

        <h1>
            Nos <span>prestations</span>
        </h1>

        <p class="hero-text">
            Découvrez nos différentes prestations et choisissez
            celle qui correspond à vos besoins.
        </p>

    </div>

</section>


<section class="services">

    <div class="section-heading">

        <p class="section-subtitle">
            NOS SERVICES
        </p>

        <h2>
            Prenez soin de vos <span>cheveux</span>
        </h2>

        <p>
            Des prestations professionnelles pour révéler votre style.
        </p>

    </div>


    <div class="services-container">

        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-scissors"></i>
            </div>

            <h3>Coupe homme</h3>

            <p>
                Coupe moderne adaptée à votre style.
            </p>

            <strong>À partir de 2 000 FCFA</strong>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-scissors"></i>
            </div>

            <h3>Coupe femme</h3>

            <p>
                Coupe et mise en forme personnalisée.
            </p>

            <strong>À partir de 5 000 FCFA</strong>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-spa"></i>
            </div>

            <h3>Soins capillaires</h3>

            <p>
                Soins destinés à nourrir et protéger vos cheveux.
            </p>

            <strong>À partir de 5 000 FCFA</strong>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>

            <h3>Tresses</h3>

            <p>
                Différents styles de tresses selon vos envies.
            </p>

            <strong>À partir de 8 000 FCFA</strong>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-droplet"></i>
            </div>

            <h3>Coloration</h3>

            <p>
                Donnez une nouvelle couleur et une nouvelle vie
                à vos cheveux.
            </p>

            <strong>À partir de 10 000 FCFA</strong>

        </div>


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-crown"></i>
            </div>

            <h3>Coiffure événement</h3>

            <p>
                Une coiffure élégante pour vos événements importants.
            </p>

            <strong>À partir de 15 000 FCFA</strong>

        </div>

    </div>

</section>


<section class="appointment">

    <div class="appointment-content">

        <p class="section-subtitle">
            UNE ENVIE ?
        </p>

        <h2>
            Réservez votre<br>
            <span>rendez-vous</span>
        </h2>

        <p>
            Choisissez la prestation qui vous convient et contactez-nous.
        </p>

        <a href="rendez-vous.html" class="btn-primary">
            Prendre rendez-vous
        </a>

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