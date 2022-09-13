<!-- start student list table -->
<div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Mes publications</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                    <?php include 'component/popupadd.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">vide</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enroll Number</th>
                            <th>Date of admission</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include 'conixion.php';
                          $result = $con -> query("SELECT * FROM students_list");
                          foreach($result as $value):
                        ?>
                      <tr class="bg-white align-middle">
                        <td><img src="../assets/img/<?php echo $value['img'] ?>" alt="img" height="50" with="50"></td>
                                <td><?php echo $value['Name'] ?></td>
                                <td><?php echo $value['Email'] ?></td>
                                <td><?php echo $value['Phone'] ?></td>
                                <td><?php echo $value['EnrollNumber'] ?></td>
                                <td><?php echo $value['DateOfAdmission'] ?></td>
                                <td class="d-md-flex gap-3 mt-3">
                                  <a href="modifier.php?Id=<?php echo $value['Id']?>"><i class="far fa-pen"></i></a>
                                  <a href="remove.php?Id=<?php echo $value['Id']?>"><i class="far fa-trash"></i></a>
                                </td>
                        </tr> 

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end student list table -->