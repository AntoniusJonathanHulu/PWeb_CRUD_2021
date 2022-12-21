<?php
    include 'Model/Karyawan.php';
    $kode = $_REQUEST["kr_kode"];
    $krList = Karyawan::getByPrimaryKey($kode);
    $kr = [];
    while ($karyawan = mysqli_fetch_object($krList))
    {
        $kr = $karyawan;
    }
?>

<form action="View/Karyawan/prosesUbah.php">
    <div class="card">
        <div class="card-header">
            <h1>Ubah Karyawan</h1> 
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Kode Karyawan</label>
                        <input class="form-control" type="text" readonly name="kr_kode" value="<?= $kr->kr_kode ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" type="text" required name="kr_nama" value="<?= $kr->kr_nama ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Karyawan</label>
                        <input class="form-control" type="date" required name="kr_dob" value="<?= $kr->kr_dob ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin Karyawan</label>
                        <?php
                            $selected = $kr->kr_jk;
                        ?>
                        <select class="form-control" required name="kr_jk">
                            <option value="L" <?php if($selected == 'L'){echo("selected");}?>>Laki-laki</option>
                            <option value="P" <?php if($selected == 'P'){echo("selected");}?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="hidden" name="kr_kode" value="<?= $kr->kr_kode ?>" />
            <button class="btn btn-success" type="submit">
                <i class="far fa-save"></i>
                Simpan
            </button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listKaryawan">
                Kembali
            </a>
        </div>
    </div>
</form>