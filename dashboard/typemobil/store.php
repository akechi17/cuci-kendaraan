<?php
include ("../../connectdb/koneksi.php");
$typemobil = $_POST['typemobil'];
$sql = "SELECT * FROM tblmobil WHERE type_mobil ='" . $typemobil . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
?>
<script>
    window.location='../index.php?hal=typemobil-create'
    alert("Data Jabatan Yang anda masukkan sudah ada")
</script>
<?php
  exit();
  } else {
  $sql = "INSERT INTO tblmobil (id_mobil , type_mobil)
  VALUES ('', '$typemobil')";

    if ($conn->query($sql) === TRUE) {
        header('location: ../index.php?hal=typemobil');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>