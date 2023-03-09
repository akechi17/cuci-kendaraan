<form action="pegawai/store.php" method="post">
<div class="card mt-3">
  <div class="card-body mt-2">
    <h5 class="card-title">Tambah Pegawai</h5>
    <div class="mb-3 mt-5">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
    </div>
    <div class="mb-3 mt-5">
      <label for="jk" class="form-label">Jenis Kelamin</label>
      <input type="jk" class="form-control" name="jk" id="jk" placeholder="Masukkan Jenis Kelamin" required>
    </div>
    <div class="mb-3 mt-5">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.php?hal=pegawai" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</div>
</form>