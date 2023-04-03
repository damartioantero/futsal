<?php
class database {
    var $host = 'localhost';
    var $name = 'root';
    var $pw = '';
    var $db = 'db_futsal';
    //koneksi
    function construct(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_select_db($koneksi, $this->db);
    }
    // koneksi lapangan
    function tampillapangan(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM lapangan");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    //koneksi penyewa
    function tampilpenyewa(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM penyewa");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    
}
?>