<?php
include("../../connectdb/koneksi.php");
$id=$_POST['id'];
$typemotor=$_POST['typemotor'];
$sql = "UPDATE tblmotor SET type_motor='$typemotor' WHERE id_motor='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php?hal=typemotor");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>