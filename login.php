<?php
include 'bbdd.php';

$userBD = $_POST['name'];
$pwdBD = $_POST['pwd'];

$sql = "SELECT usr,pwd FROM usuaris WHERE usr='$userBD' AND pwd='$pwdBD'";

?>