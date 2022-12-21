<?php
include __DIR__ . '/../../Model/Proyek.php';
include __DIR__ . '/../../Model/Karyawan_Proyek.php';

#1 Ambil Kode
$kode_py = $_REQUEST["py_kode"];
$kode_kr = $_REQUEST["kr_kode"];
$bonus = $_REQUEST["kp_bonus"];

#2 buat objek karyawan_proyek
$kp = new Karyawan_Proyek();

#3 set field karyawan_proyek
$kp->py_kode = $kode_py;
$kp->kr_kode = $kode_kr;
$kp->kp_bonus = $bonus;

#4 panggil method insert
$kp->insert();

#5 redirect
header(header: "location: ../../index.php?halaman=assignKaryawan&py_kode=$kode_py");