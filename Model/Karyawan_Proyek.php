<?php
include_once __DIR__ . '/../Config/Koneksi.php';

class Karyawan_Proyek
{
    public $kp_id;
    public $kr_kode;
    public $py_kode;
    public $kp_bonus;
    
    #CRUD
    # Get All
    public static function getAll()
    {
        $query = "SELECT * FROM karyawan_proyek";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data karyawan_proyek by primary key
    public static function getByPrimaryKey($kp_id)
    {
        $query = "SELECT * FROM karyawan WHERE kr_kode = '$kp_id'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data by karyawan
    public static function getByKaryawanJoinProyek($kr_kode)
    {
        $query = "SELECT kp.py_kode, p.py_nama, kp.kp_bonus "
                . "FROM karyawan_proyek kp "
                . "JOIN proyek p "
                . "ON kp.py_kode = p.py_kode "
                . "WHERE kr_kode = '$kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data by proyek
    public static function getByProyekJoinKaryawan($py_kode)
    {
        $query = "SELECT kp.kr_kode, k.kr_nama, kp.kp_bonus "
                . "FROM karyawan_proyek kp "
                . "JOIN karyawan k "
                . "ON kp.kr_kode = k.kr_kode "
                . "WHERE py_kode = '$py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data by karyawan
    public static function getByProyek($py_kode)
    {
        $query = "SELECT * FROM karyawan_proyek WHERE py_kode = '$py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    # Create data karywawan_proyeek
    public function insert()
    {
        $query = "INSERT INTO karyawan_proyek (kr_kode, py_kode, kp_bonus) "
                . "VALUES ("
                . "'$this->kr_kode', "
                . "'$this->py_kode', "
                . "'$this->kp_bonus')";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Update data karyawan
    public function update()
    {
        $query = "UPDATE karyawan SET "
                . "kr_nama = '$this->kr_nama', "
                . "kr_dob = '$this->kr_dob', "
                . "kr_jk = '$this->kr_jk' "
                . "WHERE kr_kode = '$this->kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Delete data karyawan_proyek
    public function delete()
    {
        $query = "DELETE FROM karyawan WHERE kr_kode = '$this->kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    public function deleteByKaryawan()
    {
        $query = "DELETE FROM karyawan_proyek WHERE kr_kode = '$this->kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    public function deleteByProyek()
    {
        $query = "DELETE FROM karyawan_proyek WHERE py_kode = '$this->py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
}
