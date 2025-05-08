<?php
 include('../config/database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
    <table border = "1" align="center">
        <tr>

            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <td></td>

        </tr>
        <tr>

            <th>JoanC.</th>
            <th>Ayala</th>
            <th>joan@mail.com</th>
            <th>Active</th>
            <td><img src = "images/edit_icon.png" width="20">
                <img src = "images/lupe_icon.png" width="20">
                <img src = "images/trash_icon.png" width="20"></td>

        </tr>
        <?php
        //here code print information
        $sql ="SELECT";
        ?>
    </table>
</body>
</html>