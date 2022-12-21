<?php
    include 'Model/Karyawan.php';
    include 'Model/Karyawan_Proyek.php';
    $kode = $_REQUEST["kr_kode"];
    $krList = Karyawan::getByPrimaryKey($kode);
    $kr = [];
    while ($karyawan = mysqli_fetch_object($krList))
    {
        $kr = $karyawan;
    }
?>

<form action="View/Karyawan/prosesHapus.php">
    <div class="card">
        <div class="card-header">
            <h1>Konfirmasi Hapus Karyawan</h1> 
        </div>
        <div class="card-body">
            <h1>Anda yakin ingin menghapus data ini?</h1>
            <p style="color: #6c757d">
                Semua data proyek yang pernah dikerjakan oleh karyawan ini juga akan dihapus
            </p>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Kode Karyawan</label>
                        <input class="form-control" type="text" readonly name="kr_kode" value="<?= $kr->kr_kode ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" type="text" readonly name="kr_nama" value="<?= $kr->kr_nama ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Karyawan</label>
                        <input class="form-control" type="date" readonly name="kr_dob" value="<?= $kr->kr_dob ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin Karyawan</label>
                        <?php
                            $selected = $kr->kr_jk;
                        ?>
                        <select class="form-control" disabled name="kr_jk">
                            <option value="L" <?php if($selected == 'L'){echo("selected");}?>>Laki-laki</option>
                            <option value="P" <?php if($selected == 'P'){echo("selected");}?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <p>Data Proyek yang pernah dikerjakan karyawan ini</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Proyek</th>
                                    <th>Nama Proyek</th>
                                    <th>Bonus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $kr_pyList = Karyawan_Proyek::getByKaryawanJoinProyek($kode);
                                $nomor = 1;
                                while ($karyawan_proyek = mysqli_fetch_object($kr_pyList))
                                {
                                ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $karyawan_proyek->py_kode ?></td>
                                    <td><?= $karyawan_proyek->py_nama ?></td>
                                    <td>
                                        <script>
                                            var x = formatter.format(<?= $karyawan_proyek->kp_bonus ?>);
                                            document.write(x);
                                        </script>
                                    </td>
                                </tr>
                                <?php 
                                } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="hidden" name="kr_kode" value="<?= $kr->kr_kode ?>" />
            <button class="btn btn-danger" type="submit">Hapus</button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listKaryawan">
                Kembali
            </a>
        </div>
    </div>
</form>