<div class="button-ajout-exercice">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter des Exercices</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter des Exercices</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addstudent.php" enctype="multipart/form-data">
                                  
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Matière:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="matiere">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Niveau:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="niveau">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Titre de l'Exercice:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="titre">
                                  </div>
                                      <div class="">
                                    <label for="recipient-name" class="col-form-label">Image de l'Exercice:</label>
                                    <input type="file" class="form-control" id="img" accept=".jpg,.png,.jpeg" name="img">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Correction de l'Exercice:</label>
                                    <input type="file" class="form-control" id="img" accept=".jpg,.png,.jpeg" name="img1" multiple>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="date">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" name="envoyer" class="btn btn-primary">Ajouter des Exercices</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>