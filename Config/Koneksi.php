<?php
class Koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $namaDB = "uas_pweb_2021_ganjil";
    public $Koneksi;
    public function __construct()
    {
        $this->Koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->namaDB);
    }
}
