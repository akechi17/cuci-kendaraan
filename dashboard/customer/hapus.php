<?php
include ("../../connectdb/koneksi.php");
$customer = $_GET['customer'];
$sql = "DELETE FROM tblcustomer WHERE nama =" . $customer . "";

if ($conn->query($sql) === TRUE) {
  ?>

<script>

    alert('customer  \"' + <?= $_GET["customer"] ?> + '\" berhasil dihapus')
    window.location.replace ('../index.php?hal=customer')

</script>

  <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>