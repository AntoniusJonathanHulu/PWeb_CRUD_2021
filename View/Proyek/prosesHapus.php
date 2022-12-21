<?php
include __DIR__ . '/../../Model/Proyek.php';
include __DIR__ . '/../../Model/Karyawan_Proyek.php';

#1 Ambil kode 
$kode = $_REQUEST["py_kode"];

#2 ambil data dari database berdasarkan primary key
$py = new Proyek();
$py->py_kode = $kode;
$kr_py = new Karyawan_Proyek();
$kr_py->py_kode = $kode;

#3 panggil method delete
$kr_py->deleteByProyek();
$py->delete();

#4 kembali ke halaman daftar karyawan
header(header: "location: ../../index.php?halaman=listProyek");