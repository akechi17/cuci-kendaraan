<form action="jeniscucian/ubah.php" method="post">
    <div class="card  mt-5" >
    <div class="card-body">
        <h5 class="card-title">Edit Pegawai</h5>
        <div class="mb-4 mt-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="<?= $_GET['jeniscucian']; ?>" required>
        </div>
        <div class="mb-4 mt-5">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Masukkan Jenis Kelamin" value="<?= $_GET['JK']; ?>" required>
        </div>
        <div class="mb-4 mt-5">
            <label for="alamat" class="form-label">alamat</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" value="<?= $_GET['Alamat']; ?>" required>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button class="btn btn-secondary">Batal</button>
        </div>
        
    </div>
    </div>
</form>