<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1> UPDATE PROJECT</h1>
    <?php
    include 'koneksi.php';
    $query = mysqli_query($connect, "SELECT * FROM belajarbs");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <form action="Update.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" name="projectname" value="<?php echo $data['projectname']; ?>">
            <input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>">
            <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>">
            <button type="submit" name="update">Update</button>
        </form> <?php } ?>
</body>
</html>