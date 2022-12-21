<?php
    include 'Model/Proyek.php';
    $kode = $_REQUEST["py_kode"];
    $pyList = Proyek::getByPrimaryKey($kode);
    $py = [];
    while ($proyek = mysqli_fetch_object($pyList))
    {
        $py = $proyek;
    }
?>

<form action="View/Proyek/prosesUbah.php">
    <div class="card">
        <div class="card-header">
            <h1>Ubah Proyek</h1> 
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Kode Proyek</label>
                        <input class="form-control" type="text" readonly name="py_kode" value="<?= $py->py_kode ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input class="form-control" type="text" required name="py_nama" value="<?= $py->py_nama ?>">
                    </div>
                    <div class="form-group">
                        <label>Deadline Proyek</label>
                        <input class="form-control" type="date" required name="py_deadline" value="<?= $py->py_deadline ?>">
                    </div>
                    <div class="form-group">
                        <label>Nominal Proyek</label>
                        <input class="form-control" type="text" required name="py_nominal" value="<?= $py->py_nominal ?>">
                    </div>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="hidden" name="py_kode" value="<?= $py->py_kode ?>" />
            <button class="btn btn-success" type="submit">
                <i class="far fa-save"></i>
                Simpan
            </button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listProyek">
                Kembali
            </a>
        </div>
    </div>
</form>