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
        <div class="row">
            <div class="header">
                <h3>Inscription</h3>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                Inscription au portail de jeux
            </div>


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
                            <input type="text" class="form-control" id="tel_per" name="teé_per" placeholder="votre téléphone">
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
                        <div class="col-sm-offset-1 checkbox">
                            <label class="col-sm-10 col-form-label">
                                <input type="checkbox" value="1" checked="" id="moniteur" name="moniteur">Moniteur
                            </label>
                        </div>
                    </div>



                    <!--Boutons-->
                    <div class="form-group row">
                        <div class="col-sm-offset-8 col-sm-2">
                            <input class="form-control btn btn-primary submit" type="submit" value="S'inscrire">
                        </div>

                        <div class="col-sm-2">
                            <input type="reset" class="form-control btn btn-warning" id="reset_conf" value="Annuler">
                        </div>
                    </div>




            </div>
                </form>
            <div class="panel-footer">
        </div>
            </div>
    </div>
</body>
</html>