<?php
    include 'Model/Proyek.php';
    include 'Model/Karyawan_Proyek.php';
?>
<form action="View/Proyek/prosesAssign.php">
    <div class="card">
        <div class="card-header">
            <h1>Assign Karyawan</h1>
        </div>
        <div class="card-body">
            <?php
                $kode = $_REQUEST["py_kode"];
                $pyList = Proyek::getByPrimaryKey($kode);
                $py = [];
                while ($proyek = mysqli_fetch_object($pyList))
                {
                    $py = $proyek;
                }
            ?>
            <p>
                Kode Proyek : <?= $py->py_kode ?> <br>
                Nama Proyek : <?= $py->py_nama ?>
                <input type="hidden" name="py_kode" value="<?= $py->py_kode ?>" />
            </p>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control" required name="kr_kode">
                            <option selected disabled value="">Pilih Karyawan</option>
                             <?php
                                include 'Model/Karyawan.php';
                                $krList = Karyawan::getAll();
                                while ($karyawan = mysqli_fetch_object($krList))
                                {
                            ?>
                            <option value="<?= $karyawan->kr_kode ?>">
                                <?=  $karyawan->kr_kode . ' | ' . $karyawan->kr_nama ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input class="form-control" type="number" min="0" required name="kp_bonus" placeholder="Bonus">
                    </div>
                </div>
                <div class="col-3">
                    <button class="btn btn-primary" type="submit">
                        Assign
                    </button>
                </div>
            </div>
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
        <div class="card-footer">
            <a class="btn btn-outline-primary" href="index.php?halaman=listProyek">
                Kembali
            </a>
        </div>
    </div>
</form>
