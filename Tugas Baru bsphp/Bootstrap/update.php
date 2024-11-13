<?php
include 'koneksi.php';


$id = $_POST['id'];
$projectname = $_POST['projectname'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query ($connect, "UPDATE belajarbs SET projectname= '$projectname', tanggal='$tanggal', deskripsi= '$deskripsi' WHERE id= $id");
if($query) {
    echo "<div class='alert alert-success' style='text-align:center;'>Data Berhasil Diubah</div> ";
}
else {
    echo "<div class='alert alert-danger'>Upload Failed. Try Again.</div>";
}
?>