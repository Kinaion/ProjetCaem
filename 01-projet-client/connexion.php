<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, minimum-scale=0.5, user-scalable=no" />
    <title>CAEM Besançon École de musique - Connection</title>
    <!-- favicon logo CAEM  -->
    <link rel="icon" type="image/png" href="assets/maquette/logo_CAEM.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">    
    <!-- police-font -->
    <link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
    <!-- style du header importé -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- css perso de la page -->
    <link rel="stylesheet" href="assets/css/connexion.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<!--  partir de la racine = plus safe -->
<?php include('template/header.html'); ?>

<header>
    <div class="container-fluid">
        <div class="row" id="contact-connection">
            <div id="logo-desktop" class="col-md-11">Suivez-nous sur
                <a href="#"><img src="../assets/img/facebook_logo.svg"></img>
                </a>
                <a href="#"><img src="../assets/img/twitter_logo.svg"></img>
                </a>
                <a href="#"><img src="../assets/img/youtube_logo.svg"></img>
                </a> ou <a href="#">contactez-nous</a> directement.
            </div>
            <div id="logo-mobile" class="col-md-11">
                <a href="#"><img src="../assets/img/facebook_logo.svg"></img>
                </a>
                <a href="#"><img src="../assets/img/twitter_logo.svg"></img>
                </a>
                <a href="#"><img src="../assets/img/youtube_logo.svg"></img>
                </a>
            </div>
            <div class="col-md-1">
                <a id="connection" href="#">Connexion</a>
            </div>
        </div>
        <div class="row" id=header>
            <img src="assets/img/logo_CAEM.svg" alt="logo">
        </div>
    </div>
    <nav>
        <ul class="menu" id="myMenu">
            <li class="home"><a href="#">Accueil</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="myBurger()">&#9776;</a>
            </li>
            <li><a href="#">Mon parcours musical</a></li>
            <li><a href="#">Tarifs & Inscriptions</a></li>
            <li><a href="#">Évenements</a></li>
            <li><a href="#">L'équipe</a></li>
        </ul>
    </nav>
</header>


    <h2 id="mb_title-form" class="text-center">Connexion</h2>
    <!-- FORMULAIRE -->
    <form id="form" class="center-block">

        <div class="form-group">
            <label for="mail" class="control-label">Email</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="mail" name="mail" placeholder="email" class="form-control" type="mail">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="pass" class="control-label">Mot de passe</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="pass" name="password" placeholder="mot de passe" class="form-control" type="password">
                </div>
            </div>
        </div>

        <label id="remember_me" class=""><input type="checkbox" class="text-center">Se souvenir de moi</label><br />

        <div class="form-group">
            <label class="control-label"></label>
            <button type="submit" class="btn btn-default center-block" onsubmit="verifForm();">Envoyer <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </form>
    <footer><div style="width: 100%; height: 100px; background-color: #1A1A1A; margin-top : 25px;"></div>
        <?php include 'footer.html'; ?>
    </footer>
</body>

</html>
