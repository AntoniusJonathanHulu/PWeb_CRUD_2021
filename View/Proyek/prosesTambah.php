<?php
include __DIR__ . '/../../Model/Proyek.php';

#1 ambil data parameter yang dikirim form
$kode = $_REQUEST["py_kode"];
$nama = $_REQUEST["py_nama"];
$deadline= $_REQUEST["py_deadline"];
$nominal = $_REQUEST["py_nominal"];

#2 buat object baru proyek
$py = new Proyek();

#3 set semua field yang dimiliki proyek
$py->py_kode = $kode;
$py->py_nama = $nama;
$py->py_deadline = $deadline;
$py->py_nominal = $nominal;

#4 panggil method insert
$py->insert();

#5 redirect ke halaman index.php
header(header: "location: ../../index.php?halaman=listProyek");
