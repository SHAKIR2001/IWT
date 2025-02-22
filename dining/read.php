<?php

include 'connection.php';

    $sql = "SELECT *FROM inqure";

    $result = $conn->query($sql)

?>

<!DOCTYPE html>
<html>
    <head>

    <title> INQUIRE DETAILS </title>
   

    </head>

<body>
    <div class="container" >
        <h2  style="margin-left: 550px;">inquire</h2>
    <table class="table" style="border:1px solid black;  border-collapse: collapse; margin:auto; BACKGROUND-COLOR: white;">
        <head>
            <tr>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">ID</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">title</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">firstName</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">lastName</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">email</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">phone</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">country</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">restaurant</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">date</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">massage</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;"></th>
            </tr>
        </thread>
    </tbody>
        <?php
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){

        ?>
                    <tr>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['id']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['title']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['firstName']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['lastName']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['email']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['phone']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['country']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['restaurant']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['date_inq']; ?> </td>
                        <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['message_inq']; ?> </td>

                        <td>
                            <button style="background-color: #5aaafa; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">
                                Edit</a>
                            </button>
                            &nbsp;
                            <button style="background-color: #f77463; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
                                Delete
                                </a>
                            </button>
                        </td>
                    </tr>

                    <?php
                }
            }
            ?>

            </tbody>
        </table>
        </div>
    </body>
    </html>