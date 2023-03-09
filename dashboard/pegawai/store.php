<?php
include ("../../connectdb/koneksi.php");
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sql = "SELECT * FROM pegawai WHERE Nama ='" . $nama . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
?>
<script>
    window.location='../index.php?hal=pegawai-create'
    alert("Data Jabatan Yang anda masukkan sudah ada")
</script>
<?php
  exit();
  } else {
  $sql = "INSERT INTO pegawai (idPegawai , Nama, JK, Alamat)
  VALUES ('', '$nama', '$jk', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        header('location: ../index.php?hal=pegawai');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>