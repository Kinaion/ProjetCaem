<!DOCTYPE html>
<html>
    <?php  include('template/head.html'); ?>

<body>
    <header>
        <?php include('template/header.html'); ?>
    </header>

    <h1>Bonjour {{Prénom}}</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Panel coordonées -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Coordonnées</h3>
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
                        <h3 class="panel-title">Mes cours</h3>
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
                <h3 class="panel-title">Payement</h3>
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
                <h3 class="panel-title">Informations complémentaires</h3>
            </div>
            <div class="panel-body">
                <p>J'ai certifié avoir autorisé le CAEM Besançon à photographier ou filmer mon enfant ou moi, durant les cours et les spectacles organisés par l'association et à utiloiser ces photographies pour les supports de communiactions de la structure.</p>
                <p>j'ai certifié avoir pris connaissance des statuts de l'associations et je souhaite devenir adhérent du Carrefour d'Animation et d'Expression Musicales.</p>
            </div>
        </div>
    </div>
    <footer>
        {{Footer Benoit à inclure}}
    </footer>
</body>

</html>
