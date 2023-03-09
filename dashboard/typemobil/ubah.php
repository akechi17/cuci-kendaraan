<?php
include("../../connectdb/koneksi.php");
$id=$_POST['id'];
$typemobil=$_POST['typemobil'];
$sql = "UPDATE tblmobil SET type_mobil='$typemobil' WHERE id_mobil='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php?hal=typemobil");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>