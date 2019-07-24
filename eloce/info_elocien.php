<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>info_elocien</title>
        <link rel="stylesheet" href="info_elocien.css">
        <link rel="stylesheet" href="nav_bar.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    </head>
    <body>
        <!-- navbar -->
        <nav>
            <?php require 'nav_bar.html'?>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>

        <!-- dropdow_elocien -->
        <div class="container d-flex justify-content-end" id="dropdown_elocien">
                <?php require 'dropdown_elocien.html' ?>
        </div>

        <!-- info_elocien -->
        <div class="container">
            <div class="section">
                <div class="form_info">
                    <br> 
                    <div class="row info_elocien_title " >
                        <h5 class="card-title text-muted text-center">Mon compte</h5>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <a href="" class="float-right btn btn-outline-primary mt-1">Retour</a>
                                    <h4 class="card-title mt-2">Mes informations personnelles</h4>
                                </header>
                                <article class="card-body">
                                    <form>
                                        <div class="form-row">

                                            <div class="col form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" placeholder="Votre nom" id="lastname" name="lastname">
                                            </div> <!-- form-group end.// -->

                                            <div class="col form-group">
                                                <label>Prénom</label>
                                                <input type="text" class="form-control" placeholder="Votre prénom" id="firstname" name="firstname">
                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Votre email"  id="email" name="email">
                                                <small class="form-text text-muted">Nous ne partagerons pas votre email.</small>
                                            </div> <!-- form-group end.// -->
                                            <div class="form-group col-md-6">
                                                <label for="phone">Entrez votre numéro de téléphone</label>
                                                <input type="tel" class="form-control" placeholder="Votre numéro de téléphone" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label>Adresse</label>
                                                <input type="text" class="form-control" placeholder="Votre adresse" id="address" name="adress">
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-3">
                                                <label>Ville</label>
                                                <select id="inputCity" name="inputCity" class="form-control">
                                                    <option> Choisissez...</option>
                                                    <option>Montpellier</option>
                                                    <option>Paris</option>
                                                    <option selected="">Marseille</option>
                                                    <option>Lyon</option>
                                                    <option>Nice</option>
                                                </select>
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-3">
                                                <label>Code postal</label>
                                                <input type="text" class="form-control" placeholder="Votre code postal" id="postalCode" name="postalCode">
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-row">

                                            <div class="col form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" placeholder="Votre mot de passe" id="password" name="password">
                                            </div> <!-- form-group end.// -->

                                            <div class="col form-group">
                                                <label>Confirmation</label>
                                                <input type="password" class="form-control" placeholder="Confirmez votre mot de passe" id="pass_confirm" name="pass_confirm">
                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block" id="valid_info">Valider</button>
                                        </div> <!-- form-group// -->                                      
                                    </form>
                                </article> <!-- card-body end .// -->
                            </div> <!-- card.// -->
                        </div> <!-- col.//-->
                    </div> <!-- row.//-->
                </div>
            </div>
        </div>


        <!---------------------- footer --------------------->
        <?php require 'footer.html' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="nav_bar.js"></script>
        <script>
            $(document).ready( function () {
                $('#mydatatable').DataTable();
            } );
        </script>
        <script src="admin_elocien.js"></script>
    </body>
</html>