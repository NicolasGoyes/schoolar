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
        
    <?php
        //here code print information
        $sql ="
        select
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
        echo "<td>";
        echo "<a href=''> <img src = 'images/edit_icon.png' width='20'></a>";
        echo "<a href=''> <img src = 'images/lupe_icon.png' width='20'></a>";
        echo "<a href=''> <img src = 'images/trash_icon.png' width='20'></a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>