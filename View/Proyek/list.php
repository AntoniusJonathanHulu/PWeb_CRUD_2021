<div class="card">
    <div class="card-header">
        <h1>Daftar Proyek</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tanggal Deadline</th>
                    <th>Nominal</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        include 'Model/Proyek.php';
                        $pyList = Proyek::getAll();
                        $nomor = 1;
                        while ($proyek = mysqli_fetch_object($pyList))
                        {
                    ?>
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $proyek->py_kode ?></td>
                        <td><?= $proyek->py_nama ?></td>
                        <td><?= $proyek->py_deadline ?></td>
                        <td>
                            <script>
                                var x = formatter.format(<?= $proyek->py_nominal ?>);
                                document.write(x);
                            </script>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning" onclick="" href="index.php?halaman=editProyek&py_kode=<?= $proyek->py_kode ?>">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="index.php?halaman=hapusProyek&py_kode=<?= $proyek->py_kode ?>">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" href="index.php?halaman=listKr_by_Py&py_kode=<?= $proyek->py_kode ?>">
                                <i class="fa fa-list-alt"></i>
                                Lihat Karyawan
                            </a>
                            <a class="btn btn-sm btn-info" href="index.php?halaman=assignKaryawan&py_kode=<?= $proyek->py_kode ?>">
                                <i class="fa fa-tasks"></i>
                                Assign Karyawan
                            </a>
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
