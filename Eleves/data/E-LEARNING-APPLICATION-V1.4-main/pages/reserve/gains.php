<?php
                        include 'conixion.php';
                        $requete = "SELECT * FROM payments_list";
                        $result = $con -> query($requete);

                        foreach($result as $value):
                            ?>
                            <tr>
                                <td> <?php echo $value['Name'] ?></td>
                                <td> <?php echo $value['PaymentSchedule'] ?></td>
                                <td> <?php echo $value['BillNumber'] ?></td>
                                <td> <?php echo $value['AmountPaid'] ?></td>
                                <td> <?php echo $value['BalanceAmount'] ?></td>
                                <td> <?php echo $value['Date'] ?></td>
                                <td><i class="fal fa-eye"></i></td>
                            </tr>
                       <?php endforeach; ?>