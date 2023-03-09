<?php
    include("../connectdb/koneksi.php");
    $sql = "SELECT * FROM tblmotor";
    $result = $conn->query($sql);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tipe Motor</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <form action="index.php">
        <input type="hidden" name="hal" value="typemotor-create">
        <button type="submit" class="btn btn-sm btn-success">
            <span data-feather="plus-square" class="align-text-bottom"></span>
            Tambah Motor
        </button>
        </form>
    </div>
</div>
<div class="body">
    <div class="card-body">
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col" width="15" class="text-center">No.</th>
      <th scope="col" class="text-center">Motor</th>
      <th scope="col" class="text-center" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if ($result->num_rows > 0) {
            // output data of each row
            $nmr = 1;
        while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row" class="text-center"><?= $nmr; ?></th>
      <td class="text-center"><?= $row["type_motor"] ?></td>
      <td class="d-flex justify-content-center">
        <div class="btn-group me-2">
        <a href="index.php?hal=typemotor-edit&id=<?= $row["id_motor"] ?>&typemotor=<?= $row["type_motor"] ?> " class="btn btn-sm btn-outline-primary" >Ubah</a>
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="hapus('\'<?= $row['type_motor'] ?>\'')">Hapus</button>
        </div>
      </td>
    </tr>
    <?php
    $nmr++;
            } 
        }else {
        echo "0 results";
        }
        $conn->close();
        ?>
  </tbody>
</table>
    </div>
</div>

<script>
  function hapus(data){
    if(confirm('Apakah anda yakin untuk menghapus data ini' + data + '?')){
      window.location.replace ('typemotor/hapus.php?typemotor='+data)
      }
  }
</script>