<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <?php
        include 'bbdd.php';

        $selectSQL = "SELECT * FROM `usuaris`";
        $result = mysqli_query($conn,$selectSQL);

        echo '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>'.$row['usr'].'</li>';
        }
        echo '</ul>';
    ?>
</body>
</html>