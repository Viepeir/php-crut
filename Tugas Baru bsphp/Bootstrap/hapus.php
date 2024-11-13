<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = $connect -> query("SELECT * FROM belajarbs WHERE id='id'");
$kelas = $sql -> fetch_assoc();
$query =$connect->query("DELETE FROM belajarbs WHERE id='$id'");
if($query) {
    header("Location:projects.php");
}else{
    header("Location:projects.php");
}
