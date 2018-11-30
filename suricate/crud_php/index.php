<?php require_once 'php_action/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageMember">
    <a href="create.php"><button type="button">Add Member</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM cliente WHERE active = 1";
            $result = $connect->query($sql);
 
            if($result > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['nome']." ".$row['email']."</td>

                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>