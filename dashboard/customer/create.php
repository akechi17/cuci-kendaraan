<form action="customer/store.php" method="post">
<div class="card mt-3">
  <div class="card-body mt-2">
    <h5 class="card-title">Tambah customer</h5>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
    </div>
    <div class="mb-3">
      <label for="no_hp" class="form-label">No HP</label>
      <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No HP" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required>
    </div>
    <div class="mb-3">
      <label for="nomor_plat" class="form-label">No Plat</label>
      <input type="text" class="form-control" name="nomor_plat" id="nomor_plat" placeholder="Masukkan No Plat" required>
    </div>
    <div class="mb-3">
      <label for="id_mobil" class="form-label">Mobil</label>
      <input type="text" class="form-control" name="id_mobil" id="id_mobil" placeholder="Masukkan No Plat" required>
    </div>
    <div class="mb-3">
      <label for="id_motor" class="form-label">Motor</label>
      <input type="text" class="form-control" name="id_motor" id="id_motor" placeholder="Masukkan No Plat" required>
    </div>
    </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.php?hal=customer" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</div>
</form>