<?php
include("../../connectdb/koneksi.php");
$id=$_POST['id'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$nomor_plat=$_POST['nomor_plat'];
$sql = "UPDATE tblcustomer SET nama='$nama', no_hp='$no_hp', alamat='$alamat', nomor_plat='$nomor_plat',id_mobil='$id_mobil',id_motor='$id_motor' WHERE id_customer='$id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php?hal=customer");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>