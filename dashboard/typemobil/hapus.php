<?php
include ("../../connectdb/koneksi.php");
$typemobil = $_GET['typemobil'];
$sql = "DELETE FROM tblmobil WHERE type_mobil =" . $typemobil . "";

if ($conn->query($sql) === TRUE) {
  ?>

<script>

    alert('typemobil  \"' + <?= $_GET["typemobil"] ?> + '\" berhasil dihapus')
    window.location.replace ('../index.php?hal=typemobil')

</script>

  <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>