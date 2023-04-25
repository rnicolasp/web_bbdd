<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="d-flex h-100 text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0"> >w< </h3>
                        <nav class="nav nav-masthead justify-content-center float-md-end">
                            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php">Log Out</a>
                        </nav>
            </div>
        </header>

        <main class="px-3">
            <h3>Registered Users</h3>
            <div class="d-flex justify-content-center">
            <?php
            include 'bbdd.php';

            $selectSQL = "SELECT * FROM `usuaris`";
            $result = mysqli_query($conn, $selectSQL);

            echo '<ul class="list-group">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="list-group-item">' . $row['usr'] . '</li>';
            }
            echo '</ul>';
            ?>
            </div>
        </main>
    </div>
</body>

</html>