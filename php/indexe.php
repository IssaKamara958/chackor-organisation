<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Connexion</title>
    <style type="text/css">
    body {
        font-family: 'Times New Roman', Times, serif;
        padding: 0;
        margin: 0;
        background-color: #f4f4f4;
    }

    /* Global */
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    .button_1 {
        height: 38px;
        background: orangered;
        border: 0;
        padding-left: 20px;
        padding-right: 20px;
        color: #ffffff;
    }

    .dark {
        padding: 15px;
        background: #35424a;
        color: #ffffff;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /* Header **/
    header {
        background: #dac50e;
        color: #000000;
        padding-top: 30px;
        min-height: 70px;
        border-bottom: orangered 3px solid;
    }

    header a {
        color: #000000;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
    }

    header li {
        float: left;
        display: inline;
        padding: 0 20px 0 20px;
    }

    header #branding {
        float: left;
    }

    header #branding h1 {
        margin: 0;
    }

    header nav {
        float: right;
        margin-top: 10px;
    }

    header .highlight,
    header .current a {
        color: orangered;
        font-weight: bold;
    }

    header a:hover {
        color: #947b7b;
        font-weight: bold;
    }

    /* Showcase */
    #showcase {
        min-height: 800px;
        background: url('../photo/grains-cafe-accessoires-pour-preparation-du-cafe_1220-4536.jpg') no-repeat;
        background-position: center;
        background-size: cover;
        text-align: center;
        color: #f1f51c;
    }

    #showcase h1 {
        margin-top: 100px;
        font-size: 5em;
        font-family: 'Times New Roman', Times, serif;
        margin-bottom: 10px;
    }

    #showcase p {
        font-size: 4em;
        font-family: 'Times New Roman', Times, serif;
    }

    /* Newsletter */
    #newsletter {
        padding: 15px;
        /* color:#442406; */
        color: orangered;
        background: #eccb0f;
        font-size: 1em;
    }

    #newsletter h1 {
        float: left;
    }

    #newsletter form {
        float: right;
        margin-top: 15px;
    }

    #newsletter input[type="email"] {
        padding: 4px;
        height: 25px;
        width: 250px;
    }

    /* Boxes */
    #boxes {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 70vh;
        background-color: #ddd;
    }

    #caroussel {
        width: 900px;
        overflow: hidden;
        border: 2px solid #333;
    }

    .images {
        display: flex;
        animation-duration: 15s;
        animation-name: box;
        animation-iteration-count: infinite;
    }

    @keyframes box {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-600px);
        }

        50% {
            transform: translateX(-1200px);
        }

        75% {
            transform: translateX(-1800);
        }

        100% {
            transform: translateX(0);
        }
    }

    /* Sidebar */
    aside#sidebar {
        float: right;
        width: 90%;
        margin-top: 10px;
    }

    aside#sidebar .quote input,
    aside#sidebar .quote textarea {
        width: 90%;
        padding: 5px;
    }

    /* Main-col */
    article#main-col {
        float: left;
        width: 65%;
    }

    /* Services */
    #cart-col1 {
        display: flex;
        flex-wrap: nowrap;
    }

    ul#services li {
        list-style: none;
        padding: 20px;
        border: #f1f1f1 solid 1px;
        margin-bottom: 5px;
        background: #d8980e;
    }

    footer {
        padding: 20px;
        margin-top: 20px;
        color: #d8980e;
        background: url('../photo/grains-cafe-accessoires-pour-preparation-du-cafe_1220-4536.jpg') repeat;
        text-align: center;
    }

    /* Media Queries */
    @media(max-width: 668px) {

        header #branding,
        header nav,
        header nav li,
        #newsletter h1,
        #newsletter form,
        #boxes .box,
        article#main-col,
        aside#sidebar {
            float: none;
            text-align: center;
            width: 100%;
        }

        #boxes {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 1000px;
            display: block;
        }

        .container {
            width: 100%;
        }

        #logo {
            margin: 10px 10px 10px 10px;
            width: 100%;
            height: 550px;
            align-items: center;
        }

        #caroussel {
            width: 100%;
        }


        .images {
            margin: 10px;

            height: 400px;
            align-items: center;

        }

        header {
            padding-bottom: 20px;
        }

        #showcase h1 {
            margin-top: 40px;
        }

        #newsletter button,
        .quote button {
            display: block;
            width: 100%;
        }

        #newsletter form input[type="email"],
        .quote input,
        .quote textarea {
            width: 100%;
            margin-bottom: 5px;
        }
    }
    </style>
</head>

<body>
    <div class="login-form">
        <?php
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);
                switch($err)
                {
                    case 'password':
                        ?>

        <div class="alert alert-danger">
            <strong>Erreur</strong> Mot de passe incorrect
        </div>
        <?php
            break;
            }
            }
            ?>
        <form action="connection.php" method="post">
            <header>
                <div class="container">
                    <div id="branding">
                        <h1><span class="highlight">CHACKOR</span> ORGANISATION</h1>
                    </div>
                    <nav id="main">
                        <ul>
                            <li class="current"><a href="index.html">Acceuil</a></li>
                            <li><a href="about.html">A Propos</a></li>
                            <li><a href="services.html">Produits</a></li>
                            <li class="current"><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="container">
                <span class="big-circle"></span>
                <img src="img/shape.png" class="square" alt="" />
                <div class="form">
                    <div class="contact-info">
                        <h3 class="title">CHACKOR-ORG.</h3>
                        <p class="text">
                            Veuillez vous enregistrer pour pouvoir profiter de nos offres.
                        </p>
                        <div class="info">
                            <div class="information">
                                <img src="photo/logo-ch.jpg" class="icon" alt="" />
                                <p>Parcelles Assainies unité 1, Thiès, Sénégal</p>
                            </div>
                            <div class="information">
                                <img src="img/email.png" class="icon" alt="" />
                                <p>issakamara958@gmail.com</p>
                            </div>
                            <div class="information">
                                <img src="photo/carte-visite.jpg" class="icon" alt="" />
                                <p>
                                    +221 77 682 84 41
                                    <br />
                                    +221 78 137 53 80
                                </p>
                            </div>
                        </div>

                        <div class="social-media">
                            <p>Vous pouvez nous contacter à travers :</p>
                            <div class="social-icons">
                                <a href="https://wa.me/message/RB4P75TJKHTOP1">
                                    <img src="img/icons8-whatsapp-48.png" alt="whatsapp" />
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100074472115745">
                                    <img src="photo/icons8-facebook-48.png" alt="facebook" />
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/ISSAKAM74750821">
                                    <img src="photo/icons8-twitter-48.png" alt="twitter" />
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/IssaKamara958">
                                    <img src="photo/icons8-github-48.png" alt="" />
                                    <i class="fab fa-github-git"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/issa-kamara-6bb066219">
                                    <img src="photo/icons8-linkedin-48.png" alt="" />
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <?php
          if(isset($_GET['login_err']))
          {
              $err = htmlspecialchars($_GET['login_err']);
              switch($err)
              {
                  case 'password':
                      ?>
                        <span class="circle one"></span>
                        <span class="circle two"></span>

                        <form action="connection.php" method="post" autocomplete="off">
                            <?php
            break;
            }
            }
            ?>
                            <h3 class="title">Contactez nous</h3>
                            <div class="input-container">
                                <input type="text" name="name" class="input" id="nom" placeholder="Nom et Prenom" />
                                <label for="username"></label>
                                <span>Nom et Prenom</span>
                                <span id="no-name"></span>
                            </div>

                            <div class="input-container">
                                <input type="email" name="email" class="input" placeholder="Votre adresse Email" />
                                <label for="Email"></label>
                                <span>Email</span>
                            </div>

                            <div class="input-container">
                                <input type="number" name="phone" class="input"
                                    placeholder="Votre numéro de téléphone" />
                                <label for="phoneNumber"></label>
                                <span>Phone</span>
                            </div>

                            <div class="input-container textarea">
                                <textarea name="message" class="input" placeholder="Faites votre commande"></textarea>
                                <label for="Message"></label>
                                <span>Message</span>
                            </div>

                            <input href="http://localhost/dossiers/chackor-org/index.html" type="submit" value="Envoyer"
                                class="btn" id="valide" />
                        </form>
                    </div>
                </div>
            </div>
        </form>
        <p class="text-center"><a href="http://localhost/dossiers/chackor-org/php/index.php">Veuillez vous inscrir
                d'abord.</a>
        </p>
    </div>
</body>

</html>