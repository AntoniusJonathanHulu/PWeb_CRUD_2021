<?php
    include 'Model/Proyek.php';
    include 'Model/Karyawan_Proyek.php';
    $kode = $_REQUEST["py_kode"];
    $pyList = Proyek::getByPrimaryKey($kode);
    $py = [];
    while ($proyek = mysqli_fetch_object($pyList))
    {
        $py = $proyek;
    }
?>

<form action="View/Proyek/prosesHapus.php">
    <div class="card">
        <div class="card-header">
            <h1>Konfirmasi Hapus Proyek</h1> 
        </div>
        <div class="card-body">
            <h1>Anda yakin ingin menghapus data ini?</h1>
            <p style="color: #6c757d">
                Semua data karyawan yang pernah mengerjakan proyek ini juga akan dihapus
            </p>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Kode Proyek</label>
                        <input class="form-control" type="text" readonly name="py_kode" value="<?= $py->py_kode ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input class="form-control" type="text" readonly name="py_nama" value="<?= $py->py_nama ?>">
                    </div>
                    <div class="form-group">
                        <label>Deadline Proyek</label>
                        <input class="form-control" type="date" readonly name="py_deadline" value="<?= $py->py_deadline ?>">
                    </div>
                    <div class="form-group">
                        <label>Nominal Proyek</label>
                        <input class="form-control" type="text" readonly name="py_nominal" value="<?= $py->py_nominal ?>">
                    </div>
                </div>
                <div class="col-6">
                    <p>Data karyawan yang pernah mengerjakan proyek ini</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Karyawan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Bonus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $kr_pyList = Karyawan_Proyek::getByProyekJoinKaryawan($kode);
                                $nomor = 1;
                                while ($karyawan_proyek = mysqli_fetch_object($kr_pyList))
                                {
                                ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $karyawan_proyek->kr_kode ?></td>
                                    <td><?= $karyawan_proyek->kr_nama ?></td>
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
            <input type="hidden" name="py_kode" value="<?= $py->py_kode ?>" />
            <button class="btn btn-danger" type="submit">Hapus</button>
            <a class="btn btn-outline-primary" href="index.php?halaman=listProyek">
                Kembali
            </a>
        </div>
    </div>
</form>
