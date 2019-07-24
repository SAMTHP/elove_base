                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <a href="" class="float-right btn btn-outline-primary mt-1">Retour</a>
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
                                            <button type="submit" class="btn btn-success btn-block" id="valid_info">Valider</button>
                                        </div> <!-- form-group// -->                                      
                                    </form>
                                </article> <!-- card-body end .// -->
                            </div> <!-- card.// -->
                        </div> <!-- col.//-->
                    </div> <!-- row.//-->