<?php
    include 'Model/Karyawan.php';
    include 'Model/Karyawan_Proyek.php';
?>

<div class="card">
    <div class="card-header">
        <h1>List Proyek By Karyawan</h1>
    </div>
    <div class="card-body">
        <?php
            $kode = $_REQUEST["kr_kode"];
            $krList = Karyawan::getByPrimaryKey($kode);
            $kr = [];
            while ($karyawan = mysqli_fetch_object($krList))
            {
                $kr = $karyawan;
            }
        ?>
        <p>
            Kode Karyawan : <?= $kr->kr_kode ?> <br>
            Nama Karyawan : <?= $kr->kr_nama ?>
        </p>
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
    <div class="card-footer">
        <a class="btn btn-outline-primary" href="index.php?halaman=listKaryawan">
            Kembali
        </a>
    </div>
</div>