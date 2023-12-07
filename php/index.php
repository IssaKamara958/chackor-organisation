<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Chackor Org, Achakourou Café Touba" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Chackor Org, Achakourou Products, Achakourou Services" />
    <meta name="author" content="Issa KAMARA" />
    <title>CHACKOR ORGANISATION | Achakourou Café Touba</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="photo/logo-ch.jpg" />
    <style>
    span {
        color: orangered;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">CHACKOR</span> ORGANISATION</h1>
            </div>
            <nav id="nav">
                <ul>
                    <li id="act" class="current"><a href="index.php">Acceuil</a></li>

                    <li><a href="about.php">A Propos</a></li>
                    <li><a href="services.php">Produits</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <script>
            function checkCookies() {
                let text = "Veuillez Accepter les normes internes !!";
                if (navigator.cookieEnabled == true) {
                    text =
                        "Votre accord nous est tres favorable, veuillez bien accepter les normes internes...";
                } else "Bienvenue Quand-mème !!";
            }
            </script>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>
                Les Produits de L'<span>Organisation Chackor</span> :
                <span> Achakourou Café Touba</span>
            </h1>
            <p>
                L'<span>Organisation CHACKOR</span> met à votre disposition une large
                gamme de produits alimentaires a base de café. Du café importé depuis
                la Cote d'Ivoire avant de passé a la transformation par nos éxperts
                qualifiés dans ce domaine.
            </p>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Souscrivez à nos lèttres d'informations</h1>
            <form>
                <input type="email" id="email" placeholder="Enter Email..." required />
                <button id="btn" type="submit" class="button_1">
                    <a href="https://https://mail.google.com/mail/u/0/#inbox">Souscrivez</a>
                </button>
            </form>
            <script>
            document.getElementById(email).onclick = function() {
                alert("Veuillez notter votre adresse Email valide !!");
            };
            document.getElementById(btn).onclick = function() {
                document.write("Votre souscription est bien accordée !!");
            };
            </script>
        </div>
    </section>

    <section id="boxes">
        <div class="container" id="logo">
            <a href="http://localhost/chackor-org/about.php">
                <img src="photo/Logo Organisation Chackor.jpg" width="600px" height="550px" alt="Café" />
            </a>
        </div>
        <script>
        document.getElementById("logo").onclick = function() {
            alert("A propos de l'Organisation CHACKOR");
        };
        </script>
        <div id="caroussel">
            <div class="images">
                <img src="photo/75g.jpg" width="600px" height="450px" alt="75gramme" />
                <img src="photo/packs.jpg" width="600px" height="450px" alt="75gramme" />
                <img src="photo/carte-visite.jpg" width="600px" height="450px" alt="75gramme" />
            </div>
        </div>
    </section>

    <footer>
        <p><span>CHACKOR ORG, Copyright &copy; 2023</span></p>
        <img src="photo/CHAKOUROU CAFÉ TOUBA.jpg" width="300px" alt="logo" />
    </footer>
    <script src="script.js"></script>
</body>

</html>