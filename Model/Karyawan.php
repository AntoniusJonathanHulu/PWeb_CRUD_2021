<?php
include_once __DIR__ . '/../Config/Koneksi.php';
class Karyawan
{
    public $kr_kode;
    public $kr_nama;
    public $kr_dob;
    public $kr_jk;
    
    #CRUD
    # Get data karyawan
    public static function getAll()
    {
        $query = "SELECT * FROM karyawan";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data karyawan by primary key
    public static function getByPrimaryKey($kr_kode)
    {
        $query = "SELECT * FROM karyawan WHERE kr_kode = '$kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Create data karywawan
    public function insert()
    {
        $query = "INSERT INTO karyawan VALUES("
                . "'$this->kr_kode',"
                . "'$this->kr_nama',"
                . "'$this->kr_dob',"
                . "'$this->kr_jk')";
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
    
    # Delete data karyawan
    public function delete()
    {
        $query = "DELETE FROM karyawan WHERE kr_kode = '$this->kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
}
