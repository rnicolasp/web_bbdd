<?php
include 'bbdd.php';

$userBD = $_POST['name'];
$emailBD = $_POST['email'];
$pwdBD = $_POST['pwd'];

$sql = "INSERT INTO usuaris (usr, email, pwd) VALUES ('$userBD', '$emailBD', '$pwdBD')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: index.php');
?>