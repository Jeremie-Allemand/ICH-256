<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Bootstrap</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"
                integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                crossorigin="anonymous"> </script>
        <!--JQuery validate-->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

        <!--BootStrap-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>


    </head>
    <body>
    <script src="./js/inscription.js"></script>
    <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">S'inscrire</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Inscription</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel panel-primary">


                                <div class="panel-body">
                                    <form id="inscription_form" action="check.php" method="post">

                                        <!--Nom-->
                                        <div class="form-group row">
                                            <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre nom">
                                            </div>
                                        </div>

                                        <!--Prenom-->
                                        <div class="form-group row">
                                            <label for="prenom_per" class="col-sm-2 col-form-label">Prénom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="votre prénom">
                                            </div>
                                        </div>

                                        <!--Telephone-->
                                        <div class="form-group row">
                                            <label for="tel_per" class="col-sm-2 col-form-label">Tél</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tel_per" name="tel_per" placeholder="votre numéro de téléphone">
                                            </div>
                                        </div>

                                        <!--E-mail-->
                                        <div class="form-group row">
                                            <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email_per" name="email_per" placeholder="votre adresse e-mail(facultatif)">
                                            </div>
                                        </div>

                                        <!--CheckBox pour moniteur-->
                                        <div class="form-group row">
                                            <label class="col-sm-2">Moniteur</label>
                                            <div class="col-sm-1">
                                                    <input type="checkbox" value="1" checked="" id="moniteur" name="moniteur">
                                            </div>

                                            <!-- Nombre d'eleve-->
                                            <label for="nombre_eleves" id="nombre_eleves" class="col-sm-3 col-form-label">Nombre d'élèves</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="nombre_eleves" name="nombre_eleves" placeholder="">
                                            </div>
                                        </div>

                                        <!--Categorie-->
                                        <div class="form-group row">
                                            <div class="input-group">
                                                <label class="col-sm-2">Plongeur</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="plongeur" checked="" id="plongeur" name="categorie">
                                                </div>
                                                <label class="col-sm-2">Apnéiste</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="apnéiste" checked="" id="anpeiste" name="categorie">
                                                </div>
                                                <label class="col-sm-2">Nageur</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="nageur" checked="" id="nageur" name="categorie">
                                                </div>
                                            </div>
                                        </div>

                                        <!--Clubs-->
                                        <div class="form-group row">
                                            <div class="input-group">
                                                <label class="col-sm-3">Octopus/About diving</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="Octopus" id="octopus" name="club">
                                                </div>
                                                <label class="col-sm-1">Privé</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="prive" id="prive" name="club">
                                                </div>
                                                <label class="col-sm-1">Autre</label>
                                                <div class="col-sm-1">
                                                    <input type="radio" value="autre" checked="" id="autre" name="club">
                                                </div>
                                                <label class="col-sm-1" id="autre_nom"> : </label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="autre_nom" name="autre_nom">
                                                </div>
                                            </div>
                                        </div>



                                        <!--Boutons-->
                                        <div class="form-group row">
                                            <div class="col-sm-offset-6 col-sm-3">
                                                <input class="form-control btn btn-primary submit" type="submit" value="S'inscrire">
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="reset" class="form-control btn btn-warning" id="reset_conf" value="Réinitialiser">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>