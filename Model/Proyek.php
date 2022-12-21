<?php
include_once __DIR__ . '/../Config/Koneksi.php';
class Proyek
{
    public $py_kode;
    public $py_nama;
    public $py_deadline;
    public $py_nominal;
    
    #CRUD
    # Get data proyek
    public static function getAll()
    {
        $query = "SELECT * FROM proyek";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Get data proyek by primary key
    public static function getByPrimaryKey($py_kode)
    {
        $query = "SELECT * FROM proyek WHERE py_kode = '$py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Create data karywawan
    public function insert()
    {
        $query = "INSERT INTO proyek VALUES("
                . "'$this->py_kode',"
                . "'$this->py_nama',"
                . "'$this->py_deadline',"
                . "'$this->py_nominal')";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Update data proyek
    public function update()
    {
        $query = "UPDATE proyek SET "
                . "py_nama = '$this->py_nama', "
                . "py_deadline = '$this->py_deadline', "
                . "py_nominal = '$this->py_nominal' "
                . "WHERE py_kode = '$this->py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    
    # Delete data proyek
    public function delete()
    {
        $query = "DELETE FROM proyek WHERE py_kode = '$this->py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
}
