<?php
//Membuat kelas mahasiswa
class Mahasiswa{
    //atribut yang dimiliki mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //metode tampilkanData
    public function tampilkanData(){
        return "Nama : $this->nama.<br> NIM : $this->nim.<br> Jurusan : $this->jurusan.<br>";
    }

    //constructor
    public function __construct($nama, $nim, $jurusan){
     $this->nama = $nama;
     $this->nim = $nim;
     $this->jurusan = $jurusan;   
    }

    //metode updatejurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    //ubah nilai atribut nim dengan metode setter
    public function setNim($nim){
        $this->nim = $nim;
    }
}
    //instasiasi
    $mahasiswa1 = new Mahasiswa ("Eka Adit Prasetyo", "230102079", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilkanData();

    //mengupdate jurusan
    $mahasiswa1->updateJurusan("Rekayasa Mesin dan Pertanian");
    echo "<br>";

    //mengubah nim
    $mahasiswa1->setNim("234098921");
    echo "<br>";

    //menampilkan data yang telah diperbaharui
    echo $mahasiswa1->tampilkanData();
?>