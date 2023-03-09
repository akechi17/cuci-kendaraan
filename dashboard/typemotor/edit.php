<form action="typemotor/ubah.php" method="post">
    <div class="card  mt-5" >
    <div class="card-body">
        <h5 class="card-title">Edit Tipe Mobil</h5>
        <div class="mb-4 mt-5">
            <label for="typemotor" class="form-label">Tipe Mobil</label>
            <input class="btn btn-sm btn-outline-success" type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <input type="text" class="form-control" name="typemotor" id="typemotor" placeholder="Masukkan typemotor" value="<?= $_GET['typemotor']; ?>" required>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button class="btn btn-secondary">Batal</button>
        </div>
        
    </div>
    </div>
</form>