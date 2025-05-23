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
            <th>Photo</th>
            <th>...</th>

        </tr>
        
    <?php
        //here code print information
        $sql ="
        select
            id,
            firstname,
            lastname,
            email,
            case when status = true then 'Active' else 'No active' end as status
        from
            users
        ";
    $res = pg_query($conn, $sql);
    if(!$res){
        echo "Query error";
        exit;
    }
    while($row= pg_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td align = 'center'><img src='photo_users/default_photo.png' width='20'></td>";
        echo "<td>";
        echo "<a href=''> <img src = 'images/edit_icon.png' width='20'></a>";
        echo "<a href=''> <img src = 'images/lupe_icon.png' width='20'></a>";
        echo "<a href='http_//127.0.0.1/schoolar/src/delete.php'> <img src = 'images/trash_icon.png' width='20'></a>";
        echo "</td>";
        echo "</tr>";09
    }
    ?>
    </table>
</body>
</html>