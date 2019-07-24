<?php require_once 'show_elocien.php' ?>
<?php require_once 'getFormations.php' ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>admin_elocien</title>
        <link rel="stylesheet" href="admin_elocien.css">
        <link rel="stylesheet" href="nav_bar.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.css"/>
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
                <?php require 'dropdown_admin.html' ?>
        </div>

        <!-- show_elocien -->
        <div class="container">
            <div class="section">

                <div class="row admin_board_title " >
                    <h5 class="card-title text-muted text-center">Gestion des élociens</h5>
                </div>
                
                <div class="row  mt-2" style="display:flex;justify-content:center;">  
                    <table class="table text-center table-striped"  id="mydatatable">
                        <thead>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Date de naissance</th>
                            <th scope="col">Formation</th>
                            <th scope="col">Date d'entrée</th>
                            <th scope="col">Date de sortie date</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </thead>               
                        <tbody>
                            <?php foreach($tabElociens as $tabElocien){ ?>
                            <tr>
                                <th><input type="hidden" id="elocien_lastname_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_lastname'] ?>"><?= $tabElocien['elocien_lastname']; ?></th>
                                <th><input type="hidden" id="elocien_firstname_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_firstname'] ?>"><?= $tabElocien['elocien_firstname']; ?></th>
                                <th><input type="hidden" id="elocien_birth_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_birth'] ?>"><?= $tabElocien['elocien_birth']; ?></th>
                                <th><input type='hidden' id="formation_id_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['formation_id'] ?>"><?php foreach($tabFormations as $tabFormation){if($tabFormation['formation_id'] == $tabElocien['formation_id']){ echo $tabFormation['formation_name'];}}?></th>
                                <th><input type="hidden" id="elocien_date_begin_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_date_begin'] ?>"><?= $tabElocien['elocien_date_begin']; ?></th>
                                <th><input type="hidden" id="elocien_date_end_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_date_end'] ?>"><?= $tabElocien['elocien_date_end']; ?></th>
                                <th><input type="hidden" id="elocien_email_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_email'] ?>"><?= $tabElocien['elocien_email']; ?></th>
                                <th><span class="button_edit_elo fa fa-edit fa-1x" value="<?= $tabElocien['elocien_id'] ?>"><input type="hidden" id="elocien_id_<?= $tabElocien['elocien_id'] ?>" value="<?= $tabElocien['elocien_id'] ?>"></span> &nbsp<span class="button_hide_elo fa fa-eye-slash fa-1x"></th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                    <div id="button_add_elocien">
                        <button type="submit" class="btn btn-success button_add_elo">Ajouter nouvel élocien</button>
                    </div>
                    
                </div>

                <br>
                
                <!-- add_elocien -->
                <div class="card add_elocien">

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <button class="float-right btn btn-outline-primary mt-1" id="button_back_add">Masquer</button>
                                    <h4 class="card-title mt-2">Ajouter un Elocien</h4>
                                </header>
                                <article class="card-body">
                                    <form action="add_elocien.php" method="post">
                                        <div class="form-row">

                                            <div class="col form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="name" placeholder="Entrez le nom">
                                            </div> <!-- form-group end.// -->

                                            <div class="col form-group">
                                                <label for="firstname">Prénom</label>
                                                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" placeholder="Entrez le prénom">
                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrez l'email">
                                                <small id="emailHelp" class="form-text text-muted">Votre email ne sera pas partagé</small>
                                            </div> <!-- form-group end.// -->
                                            <div class="form-group col-md-6">
                                            <label for="date_birth">Formation</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="formation">Formations</label>
                                                    </div>
                                                    <select class="custom-select" id="formation" name="formation">
                                                        <option selected>Choisisez...</option>
                                                        <option value="1">Concepteur développeur d'applications</option>
                                                        <option value="2">Technicien en système de sécurité incendie</option>
                                                        <option value="3">Développeur web et mobile</option>
                                                    </select>
                                                </div>
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label for="date_birth">Date de naissance</label>
                                                <input type="date" class="form-control" id="date_birth" name="birth" aria-describedby="date_birth" placeholder="Entrez la date de naissance">
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-4">
                                                <label for="date_begin">Date d'entrée en formation</label>
                                                <input type="date" class="form-control" id="date_begin" name="date_begin" aria-describedby="date_begin" placeholder="Entrez la date d'entrée en formation">
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-4">
                                                <label for="date_end">Date de fin de formation</label>
                                                <input type="date" class="form-control" id="date_end" name="date_end" aria-describedby="date_end" placeholder="Entrez la date de fin de formation">
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block" id="valid_info">Valider</button>
                                        </div> <!-- form-group// -->                                      
                                    </form>
                                </article> <!-- card-body end .// -->
                            </div> <!-- card.// -->
                        </div> <!-- col.//-->
                    </div> <!-- row.//-->

                </div>
                
                <!-- edit_elocien -->
                <div class="edit_elocien">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <button class="float-right btn btn-outline-primary mt-1 " id="button_back_edit">Masquer</button>
                                    <h4 class="card-title mt-2">Edition d'un Elocien</h4>
                                </header>
                                <article class="card-body">
                                    <form action="edit_elocien.php" method="POST">
                                        <div class="form-row">

                                            <div class="col form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" class="form-control" name="lastname_edit" id="lastname_edit" aria-describedby="name">
                                            </div> <!-- form-group end.// -->

                                            <div class="col form-group">
                                                <label for="firstname">Prénom</label>
                                                <input type="text" class="form-control" name="firstname_edit" id="firstname_edit" aria-describedby="firstname">
                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email_edit" id="email_edit" aria-describedby="emailHelp">
                                                <small id="emailHelp" class="form-text text-muted">Votre email ne sera pas partagé</small>
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-6">
                                                <label for="formation"> ID formation</label>
                                                <input type="text" class="form-control" name="formation_edit" id="formation_edit" aria-describedby="formation">
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label for="date_birth">Date de naissance</label>
                                                <input type="date" class="form-control" name="date_birth_edit" id="date_birth_edit" aria-describedby="date_birth">
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-4">
                                                <label for="date_begin">Date d'entrée en formation</label>
                                                <input type="date" class="form-control" name="date_begin_edit" id="date_begin_edit" aria-describedby="date_begin">
                                            </div> <!-- form-group end.// -->

                                            <div class="form-group col-md-4">
                                                <label for="date_end">Date de fin de formation</label>
                                                <input type="date" class="form-control" name="date_end_edit" id="date_end_edit" aria-describedby="date_end">
                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row.// -->

                                        <div class="form-group">
                                            <input type="hidden" id="elocien_id_edit" name="elocien_id">
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

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
        <script src="nav_bar.js"></script>
        <script>
            $(document).ready( function () {
                $('#mydatatable').DataTable();
            } );
        </script>
        <script src="admin_elocien.js"></script>
    </body>
</html>