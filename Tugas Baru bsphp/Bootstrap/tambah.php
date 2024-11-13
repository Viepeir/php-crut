<?php
include 'koneksi.php';
$projectname=$_POST['projectname'];
$tanggal=$_POST['tanggal'];
$deskripsi=$_POST['deskripsi'];
$query = mysqli_query($connect, "INSERT INTO belajarbs (projectname,tanggal,deskripsi) VALUES ('$projectname','$tanggal','$deskripsi')");
if ($query) {
    echo "<div class='alert alert-success' style='text-align:center;'>data Berhasil disimpan</div>";
}else{
    echo"<div class='alert alert-danger'>Upload Failed. Try Again</div>";
}
?>