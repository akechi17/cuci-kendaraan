<form action="jeniscucian/ubah.php" method="post">
    <div class="card  mt-5" >
    <div class="card-body">
        <h5 class="card-title">Edit Tipe motor</h5>
        <div class="mb-4 mt-5">
            <label for="jeniscucian" class="form-label">jenis cucian</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="jeniscucian" id="jeniscucian" placeholder="Masukkan jeniscucian" value="<?= $_GET['jeniscucian']; ?>" required>
        </div>
        <div class="mb-4 mt-5">
            <label for="biaya" class="form-label">biaya</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="biaya" id="biaya" placeholder="Masukkan biaya" value="<?= $_GET['biaya']; ?>" required>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button class="btn btn-secondary">Batal</button>
        </div>
        
    </div>
    </div>
</form>