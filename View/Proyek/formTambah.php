<form action="View/Proyek/prosesTambah.php" method="post">
    <div class="card">
        <div class="card-header">
            <h1>Form Tambah Proyek</h1>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Kode Proyek</label>
                <input class="form-control" type="text" required name="py_kode" />
            </div>
            <div class="form-group">
                <label>Nama Proyek</label>
                <input class="form-control" type="text" required name="py_nama" />
            </div>
            <div class="form-group">
                <label>Deadline Proyek</label>
                <input class="form-control" type="date" required name="py_deadline" />
            </div>
            <div class="form-group">
                <label>Nominal Proyek</label>
                <input class="form-control" type="text" required name="py_nominal" />
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="far fa-save"></i>
                Simpan Proyek
            </button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listProyek">
                Kembali
            </a>
        </div>
    </div>
</form>