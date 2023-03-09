<?php
include("../../connectdb/koneksi.php");
$id=$_POST['id'];
$jeniscucian=$_POST['jeniscucian'];
$biaya=$_POST['biaya'];
$sql = "UPDATE tbljeniscuci SET jenis_cucian='$jeniscucian', biaya='$biaya' WHERE id_jeniscucian='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php?hal=jeniscucian");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>