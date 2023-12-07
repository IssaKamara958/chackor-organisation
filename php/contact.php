<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Chackor Org, Achakourou Café Touba" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Chackor Org, Achakourou Products, Achakourou Services" />
    <meta name="author" content="Issa KAMARA" />
    <title>CHACKOR ORGANISATION | Achakourou Café Touba</title>
    <link rel="stylesheet" href="./contact.css" />
    <link rel="icon" href="photo/logo-ch.jpg" />
    <style type="text/css"></style>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">CHACKOR</span> ORGANISATION</h1>
            </div>
            <nav id="main">
                <ul>
                    <li ><a href="./index.php">Acceuil</a></li>
                    <li><a href="./about.php">A Propos</a></li>
                    <li><a href="./services.php">Produits</a></li>
                    <li class="current"><a href="./contact.php">Contact</a></li>
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
                            <img src="photo/icons8-whatsapp-48.png" alt="whatsapp" />
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
                        <input type="number" name="phone" class="input" placeholder="Votre numéro de téléphone" />
                        <label for="phoneNumber"></label>
                        <span>Phone</span>
                    </div>

                    <div class="input-container textarea">
                        <textarea name="message" class="input" placeholder="Faites votre commande"></textarea>
                        <label for="Message"></label>
                        <span>Message</span>
                    </div>

                    <input href="https://wa.me/message/RB4P75TJKHTOP1" type="submit" value="Envoyer" class="btn"
                        id="valide" href='https://wa.me/message/RB4P75TJKHTOP1' />
                </form>
            </div>
        </div>
    </div>
</body>

</html>