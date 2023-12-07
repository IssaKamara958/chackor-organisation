<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h1 {
        margin: 0px 0px 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
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
                    case 'success':
                        ?>

        <div class="alert alert-success">
            <strong>Succès</strong> inscription reussi !
            <p>Pour continuer clicquez <a href="http://localhost/dossiers/chackor-org/index.html">ici</a>s'il vous
                plait.</p>
        </div>
        <?php
            break;
            }
            }
            ?>
        <!-- <form action="inscript-treatment.php" method="post">
            <h1 class="text-center">Inscrivez vous</h1>
            <div class="form-group">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required"
                    autocomplete="off">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                    required="required" autocomplete="off">
                <input type="password" name="password_retype" class="form-control"
                    placeholder="Retappez le mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    <a href="http://localhost/dossiers/chackor-org/index.html">Validez</a></button>
            </div>
        </form> -->
        <form action="inscript-treatment.php" method="post">
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

            <input type="submit" value="Envoyer" class="btn" id="valide" />
        </form>

    </div>
</body>

</html>