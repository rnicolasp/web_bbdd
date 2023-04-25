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
    <title>Register</title>
</head>

<body class="d-flex h-100 text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0"> >w< </h3>
                        <nav class="nav nav-masthead justify-content-center float-md-end">
                            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php">Home</a>
                        </nav>
            </div>
        </header>

        <main class="px-3 d-flex justify-content-center">
            
            <form action="register.php" method="post" class="w-25 mt-5 ">
            <h3 class="m-3">Register</h3>
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Username" />
                    <label for="name">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" name="email" type="text" placeholder="Username" />
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="pwd" name="pwd" type="password" placeholder="Password" />
                    <label for="pwd">Password</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>