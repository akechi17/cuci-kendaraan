<?php
include("../../connectdb/koneksi.php");
$id=$_POST['id'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$sql = "UPDATE tbljeniscuci SET Nama='$nama', JK='$jk', Alamat='$alamat' WHERE idPegawai='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php?hal=pegawai");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>