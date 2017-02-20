<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, minimum-scale=0.5, user-scalable=no" />
    <title>CAEM Besançon École de musique - Connection</title>
    <!-- favicon logo CAEM  -->
    <link rel="icon" type="image/png" href="assets/maquette/logo_CAEM.png">
    <!-- font-awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/connexion.css">
    <!-- style header -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<!--  partir de la racine = plus safe -->
<?php include('template/header.html'); ?>


    <h2 class="text-center">Connexion</h2>
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

    </footer>
</body>

</html>
