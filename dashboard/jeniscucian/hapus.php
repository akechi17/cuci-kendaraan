<?php
include ("../../connectdb/koneksi.php");
$jeniscucian = $_GET['jeniscucian'];
$sql = "DELETE FROM tbljeniscuci WHERE jenis_cucian =" . $jeniscucian . "";

if ($conn->query($sql) === TRUE) {
  ?>

<script>

    alert('jeniscucian  \"' + <?= $_GET["jeniscucian"] ?> + '\" berhasil dihapus')
    window.location.replace ('../index.php?hal=jeniscucian')

</script>

  <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>