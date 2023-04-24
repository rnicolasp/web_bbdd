<?php
include 'bbdd.php';

$userBD = $_POST['name'];
$pwdBD = $_POST['pwd'];

$res = mysqli_query($conn, "SELECT `usr`,`pwd` FROM `usuaris` WHERE `usr`='$userBD' AND `pwd`='$pwdBD'");
$arr = mysqli_fetch_row($res);
  
echo $arr[0];
echo $arr[1];

if ($arr != '') {
    echo 'MUY BIEN';
    header('Location: list.php');
} else {
    echo 'FATAL';
    //header('Location: login_form.php');
}
?>