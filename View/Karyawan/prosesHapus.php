<?php
include __DIR__ . '/../../Model/Karyawan.php';
include __DIR__ . '/../../Model/Karyawan_Proyek.php';

#1 Ambil kode 
$kode = $_REQUEST["kr_kode"];

#2 ambil data dari database berdasarkan primary key
$kr = new Karyawan();
$kr->kr_kode = $kode;
$kr_py = new Karyawan_Proyek();
$kr_py->kr_kode = $kode;

#3 panggil method delete
$kr_py->deleteByKaryawan();
$kr->delete();

#4 kembali ke halaman daftar karyawan
header(header: "location: ../../index.php?halaman=listKaryawan");