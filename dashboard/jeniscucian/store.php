<?php
include ("../../connectdb/koneksi.php");
$jeniscucian = $_POST['jeniscucian'];
$biaya = $_POST['biaya'];
$sql = "SELECT * FROM tbljeniscuci WHERE jenis_cucian ='" . $jeniscucian . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
?>
<script>
    window.location='../index.php?hal=jeniscucian-create'
    alert("Data Jabatan Yang anda masukkan sudah ada")
</script>
<?php
  exit();
  } else {
  $sql = "INSERT INTO tbljeniscuci (id_jeniscucian , jenis_cucian, biaya)
  VALUES ('', '$jeniscucian', '$biaya')";

    if ($conn->query($sql) === TRUE) {
        header('location: ../index.php?hal=jeniscucian');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>