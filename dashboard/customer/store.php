<?php
include ("../../connectdb/koneksi.php");
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$nomor_plat = $_POST['nomor_plat'];
$id_mobil = $_POST['id_mobil'];
$id_motor = $_POST['id_motor'];
$sql = "SELECT * FROM tblcustomer WHERE nama ='" . $nama . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
?>
<script>
    window.location='../index.php?hal=customer-create'
    alert("Data Jabatan Yang anda masukkan sudah ada")
</script>
<?php
  exit();
  } else {
  $sql = "INSERT INTO tblcustomer (id_customer , nama, no_hp, alamat, nomor_plat, id_mobil, id_motor)
  VALUES ('', '$nama', '$no_hp','$alamat','$nomor_plat','$id_mobil','$id_motor')";

    if ($conn->query($sql) === TRUE) {
        header('location: ../index.php?hal=customer');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>