<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="nav_bar.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="dashboard.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="nav_bar.js"></script>
        <title>dashboard_show_article</title>
    </head>
    <body>
        
        <!---------------------- navbar --------------------->
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

        <!---------------------- section --------------------->
        <div class="container">
            <div class="section">
                <div class="row dashboard_title " >
                    <h5 class="card-subtitle mb-2 text-muted">Tableau de bord</h5>
                </div>
                <div class="row  dashboard_article  mt-2">
                    <div class="card text-center" style="width: 65rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter un article</h5>
                            <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        <th scope="col">DATE</th>
                                        <th scope="col">DESIGNATION</th>
                                        <th scope="col">STATUT</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Les NTIC offrent de nouvelles opportunités</td>
                                        <td class="text-warning"><strong>En attente</strong></td>
                                        <td class="text-secondary"><strong>EDITER</strong></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Les nouvelles opportunités du numérique</td>
                                        <td class="text-success"><strong>Validé</strong></td>
                                        <td class="text-secondary"><strong>EDITER</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
                <div class="block_bottom row mt-2">
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title">PROJET</h5>
                            <p class="card-text text-center"><strong>Projet en cour</strong><br>Conciergerie</p>
                            <a href="#" class="btn btn-success">VOIR</a>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title">ELOCIENS</h5>
                            <p class="card-text">Liste des élociens<br><br></p>
                            <a href="#" class="btn btn-secondary">VOIR</a>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title">MES INFOS</h5>
                            <p class="card-text">Informations personnelles</p>
                            <a href="#" class="btn btn-info">VOIR</a>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title">METIS</h5>
                            <p class="card-text">Redirection vers metis<br><br></p>
                            <a href="#" class="btn btn-warning">VOIR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------- footer --------------------->
        <?php require 'footer.html' ?>

        
    </body>
</html>