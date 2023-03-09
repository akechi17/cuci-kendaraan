<form action="jeniscucian/store.php" method="post">
<div class="card mt-3">
  <div class="card-body mt-2">
    <h5 class="card-title">Tambah jenis cucian</h5>
    <div class="mb-3 mt-5">
      <label for="jeniscucian" class="form-label">jenis cucian</label>
      <input type="text" class="form-control" name="jeniscucian" id="jeniscucian" placeholder="Masukkan jenis cucian" required>
    </div>
    <div class="mb-3 mt-5">
      <label for="biaya" class="form-label">biaya</label>
      <input type="text" class="form-control" name="biaya" id="biaya" placeholder="Masukkan biaya" required>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.php?hal=jeniscucian" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</div>
</form>