<?php
include ("../../connectdb/koneksi.php");
$typemotor = $_GET['typemotor'];
$sql = "DELETE FROM tblmotor WHERE type_motor =" . $typemotor . "";

if ($conn->query($sql) === TRUE) {
  ?>

<script>

    alert('typemotor  \"' + <?= $_GET["typemotor"] ?> + '\" berhasil dihapus')
    window.location.replace ('../index.php?hal=typemotor')

</script>

  <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>