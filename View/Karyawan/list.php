<div class="card">
    <div class="card-header">
        <h1>Data Karyawan</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'Model/Karyawan.php';
                    $krList = Karyawan::getAll();
                    $nomor = 1;
                    while ($karyawan = mysqli_fetch_object($krList))
                    {
                    ?>
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $karyawan->kr_kode ?></td>
                        <td><?= $karyawan->kr_nama ?></td>
                        <td><?= $karyawan->kr_dob ?></td>
                        <td><?= $karyawan->kr_jk ?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" onclick="" href="index.php?halaman=editKaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="index.php?halaman=hapusKaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" href="index.php?halaman=listPy_by_Kr&kr_kode=<?= $karyawan->kr_kode ?>">
                                <i class="fa fa-list-alt"></i>
                                Lihat Proyek
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