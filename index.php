<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UAS PWeb</title>
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css"/>
        <script src="Assets/js/bootstrap.min.js"></script>
        <script>
            let formatter = Intl.NumberFormat('id-ID', 
            {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Ujian PWeb</h1>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="card">
                        <div class="card-header">Menu</div>
                        <div class="card-body">
                            <a class="btn btn-outline-primary btn-block" href="index.php">
                                <i class="fa fa-home"></i>
                                Home Page
                            </a><br>
                            <a class="btn btn-outline-primary btn-block" href="index.php?halaman=listKaryawan">Daftar Karyawan</a><br>
                            <a class="btn btn-outline-primary btn-block" href="index.php?halaman=addKaryawan">Tambah Karyawan</a><br>
                            <a class="btn btn-outline-primary btn-block" href="index.php?halaman=listProyek">Daftar Proyek</a><br>
                            <a class="btn btn-outline-primary btn-block" href="index.php?halaman=addProyek">Tambah Proyek</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <?php
                        $halaman = isset($_REQUEST['halaman']) ? $_REQUEST['halaman'] : '';
                        $include = "landingPage.php";
                        if ($halaman == 'listKaryawan')
                        {
                            $include = './View/Karyawan/list.php';
                        }
                        elseif ($halaman == 'addKaryawan')
                        {
                            $include = './View/Karyawan/formTambah.php';
                        }
                        elseif ($halaman == 'editKaryawan')
                        {
                            $include = './View/Karyawan/formUbah.php';
                        }
                        elseif ($halaman == 'hapusKaryawan')
                        {
                            $include = './View/Karyawan/konfirmasiHapus.php';
                        }
                        elseif ($halaman == 'listPy_by_Kr')
                        {
                            $include = './View/Karyawan/listProyekByKaryawan.php';
                        }
                        elseif ($halaman == 'listProyek')
                        {
                            $include = './View/Proyek/list.php';
                        }
                        elseif ($halaman == 'addProyek')
                        {
                            $include = './View/Proyek/formTambah.php';
                        }
                        elseif ($halaman == 'editProyek')
                        {
                            $include = './View/Proyek/formUbah.php';
                        }
                        elseif ($halaman == 'hapusProyek')
                        {
                            $include = './View/Proyek/konfirmasiHapus.php';
                        }
                        elseif ($halaman == 'listKr_by_Py')
                        {
                            $include = './View/Proyek/listKaryawanByProyek.php';
                        }
                        elseif ($halaman == 'assignKaryawan')
                        {
                            $include = './View/Proyek/formAssign.php';
                        }
                        include_once $include;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
