<?php
include ("../../connectdb/koneksi.php");
$typemotor = $_POST['typemotor'];
$sql = "SELECT * FROM tblmotor WHERE type_motor ='" . $typemotor . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
?>
<script>
    window.location='../index.php?hal=typemotor-create'
    alert("Data Jabatan Yang anda masukkan sudah ada")
</script>
<?php
  exit();
  } else {
  $sql = "INSERT INTO tblmotor (id_motor , type_motor)
  VALUES ('', '$typemotor')";

    if ($conn->query($sql) === TRUE) {
        header('location: ../index.php?hal=typemotor');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>