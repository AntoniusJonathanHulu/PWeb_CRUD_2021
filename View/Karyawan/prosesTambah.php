<?php
include __DIR__ . '/../../Model/Karyawan.php';

#1 ambil data parameter yang dikirim form
$kode = $_REQUEST["kr_kode"];
$nama = $_REQUEST["kr_nama"];
$dob= $_REQUEST["kr_dob"];
$jk = $_REQUEST["kr_jk"];

#2 buat object baru karyawan
$kr = new Karyawan();

#3 set semua field yang dimiliki karyawan
$kr->kr_kode = $kode;
$kr->kr_nama = $nama;
$kr->kr_dob = $dob;
$kr->kr_jk = $jk;

#4 panggil method insert
$kr->insert();

#5 redirect ke halaman index.php
header(header: "location: ../../index.php?halaman=listKaryawan");
