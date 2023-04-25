<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php
include 'bbdd.php';

$userBD = $_POST['name'];
$emailBD = $_POST['email'];
$pwdBD = $_POST['pwd'];

$sql = "INSERT INTO usuaris (usr, email, pwd) VALUES ('$userBD', '$emailBD', '$pwdBD')";
if (mysqli_query($conn, $sql)) {
      ?>
      <body class="d-flex h-100 text-center">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                  <main class="px-3">
                        <div><p>New record created successfully</p></div>
                        <div><a href="index.php" class="btn btn-lg fw-bold border-primary bg-primary">Back to index</a></div>
                  </main>
            </div>
      </body>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header('Location: register_form.php');
?>