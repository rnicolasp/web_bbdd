<?php
include 'bbdd.php';

$userBD = $_POST['name'];
$pwdBD = $_POST['pwd'];

//$sql = "SELECT `usr`,`pwd` FROM `usuaris` WHERE `usr`='$userBD' AND `pwd`='$pwdBD'";
//
//$queryResult = mysqli_query($conn, $sql);
//
//if (!$queryResult) {
//    echo 'Could not run query: ' . mysql_error();
//    exit;
//}
//$row = mysql_fetch_row($queryResult);
//
//echo $row[0]; // 42
//echo $row[1]; // the email value

$res = mysqli_query($conn, "SELECT `usr`,`pwd` FROM `usuaris` WHERE `usr`='$userBD' AND `pwd`='$pwdBD'");
$arr = mysqli_fetch_row($res);
  
echo $arr[0];
echo $arr[1];

if ($arr != '') {
    echo 'MUY BIEN';
    //header('Location: index.php');
} else {
    echo 'Eres tontisimo tio';
}
?>