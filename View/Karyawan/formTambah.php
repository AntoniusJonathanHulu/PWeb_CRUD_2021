<form action="View/Karyawan/prosesTambah.php" method="post">
    <div class="card">
        <div class="card-header">
            <h1>Form Tambah Karyawan</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Kode Karyawan</label>
                        <input class="form-control" type="text" required name="kr_kode" />
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" type="text" required name="kr_nama" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Karyawan</label>
                        <input class="form-control" type="date" required name="kr_dob" />
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin Karyawan</label>
                        <select class="form-control" required name="kr_jk">
                            <option selected disabled values="">Pilih jenis kelamin...</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="far fa-save"></i>
                Simpan Karyawan
            </button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listKaryawan">
                Kembali
            </a>
        </div>
    </div>
</form>