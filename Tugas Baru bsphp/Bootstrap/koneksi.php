<?php

$server ="localhost";
$user= "root";
$password= "";
$database = "tugasphp13";

$connect =mysqli_connect ($server, $user , $password, $database);
if (!$connect) {
    die ("Koneksi Gagal:".mysqli_connect_error());
}
?>

<!-- tugas delete dan update -->