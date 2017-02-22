<!DOCTYPE html>
<html>
    <?php  include('head'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAEM Besançon École de musique - Adhérent</title>
    <meta name="description" content="École de musique à Besançon" />
    <!-- favicon logo CAEM  -->
    <link rel="icon" type="image/png" href="assets/maquette/logo_CAEM.png">
    <!-- CSS BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- font-police -->
    <link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- css-hoover -->
    <link rel="stylesheet" href="/css/master.css">
    <!-- css header -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- css de la page -->
    <link rel="stylesheet" href="assets/css/page_adherent.css">
    <!-- SCSS (couleur des titres panels)-->
    <link rel="stylesheet" href="assets/css/scss/adherent.css">

    <!-- Latest compiled and minified JavaScript & jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<body>
    <header>
        <?php include('header'); ?>

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

        <script src="//localhost:35729/livereload.js"></script>
        <script>
            function myBurger() {
                var x = document.getElementById("myMenu");
                if (x.className === "menu") {
                    x.className += " responsive";
                } else {
                    x.className = "menu";
                }
            }
        </script>

    </header>

    <h1>Bonjour <?php echo htmlspecialchars ($_POST ['prenom']); ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Panel coordonées -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title mb_panel-title">Coordonnées <i class="fa fa-user" aria-hidden="true"></i></h3>
                    </div>
                    <div class="panel-body">
                        <h4>Eleve:</h4>
                        <span>Lucie</span>
                        <span>Corvus</span>
                        <span>née le 05/06/2148</span>

                        <h4> Responsable légal:</h4>
                        <span>Lyra</span>
                        <span>Corvus</span>
                        <p>O6 00 00 33 10</p>
                        <p>LucieLyra@superadress.com</p>
                        <p>19 rue de Lorient</p>
                        <p>25000</p>
                        <p>Besançon</p>
                    </div>
                </div>
            </div>

            <!-- Panel cours -->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading mb_panel-heading">
                        <h3 class="panel-title mb_panel-title">Mes cours <i class="fa fa-calendar-check-o" aria-hidden="true"></i></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Jour</th>
                                <th>Heure</th>
                                <th>Professeur</th>
                                <th>Activité</th>
                                <th>Lieu</th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mercredi</p>
                                </td>
                                <td>
                                    <p>15h à 15h30</p>
                                </td>
                                <td>
                                    <p>Mr Sully</p>
                                </td>
                                <td>
                                    <p>Batterie</p>
                                </td>
                                <td>
                                    <p> Salle Chopin</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Vendredi</p>
                                </td>
                                <td>
                                    <p>18h à 19h</p>
                                </td>
                                <td>
                                    <p>Mme Parker</p>
                                </td>
                                <td>
                                    <p>Hip hop</p>
                                </td>
                                <td>
                                    <p>Lycée Notre Dame salle Hogwart</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Jour</p>
                                </td>
                                <td>
                                    <p>Heure</p>
                                </td>
                                <td>
                                    <p>Professeur</p>
                                </td>
                                <td>
                                    <p>Activité</p>
                                </td>
                                <td>
                                    <p>Lieu</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Jour</p>
                                </td>
                                <td>
                                    <p>Heure</p>
                                </td>
                                <td>
                                    <p>Professeur</p>
                                </td>
                                <td>
                                    <p>Activité</p>
                                </td>
                                <td>
                                    <p>Lieu</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Panel Payement -->
        <div class="panel panel-default">
            <div class="panel-heading mb_panel-heading">
                <h3 class="panel-title mb_panel-title">Payement <i class="fa fa-eur" aria-hidden="true"></h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Activité</th>
                        <th>Tarif</th>
                        <th>A payé</th>
                    </tr>
                    <tr>
                        <td>
                            <p>Batterie</p>
                        </td>
                        <td>
                            <p>120 €</p>
                        </td>
                        <td>
                            <!-- validé ou non validé, fontawesome here -->
                            <i class="fa fa-check fa-2x" aria-hidden="true" style="color: green"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Hip hop</p>
                        </td>
                        <td>
                            <p>120 €</p>
                        </td>
                        <td>
                            <!-- validé ou non validé, fontawesome here -->
                            <i class="fa fa-times fa-2x" aria-hidden="true" style="color: red"></i>
                        </td>
                    </tr>
                    <th>TOTAL à l'année:</th>
                    <td>
                        <p>240 €</p>
                    </td>
                    <td>
                        <p>
                            <!-- à payé -->
                            120€ </p>
                    </td>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Panel Informations complémentaires -->
        <div class="panel panel-default">
            <div class="panel-heading mb_panel-heading">
                <h3 class="panel-title mb_panel-title">Informations complémentaires <i class="fa fa-info-circle" aria-hidden="true"></i></h3>
            </div>
            <div class="panel-body">
                <p>J'ai certifié avoir autorisé le CAEM Besançon à photographier ou filmer mon enfant ou moi, durant les cours et les spectacles organisés par l'association et à utiliser ces photographies pour les supports de communiactions de la structure.</p>
                <p>j'ai certifié avoir pris connaissance des statuts de l'associations et je souhaite devenir adhérent du Carrefour d'Animation et d'Expression Musicales.</p>
            </div>
        </div>
    </div>
    <footer>
        {{Footer Benoit à inclure}}
    </footer>
</body>

</html>
