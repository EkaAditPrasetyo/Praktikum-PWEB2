<?php
//Membuat kelas mahasiswa
class Dosen{
    //atribut yang dimiliki mahasiswa
    public $nama;
    public $nip;
    public $mataKuliah;

    //metode tampilkanDosen
    public function tampilkanDosen(){
        return "Nama : $this->nama.<br> NIP : $this->nip.<br> Mata Kuliah : $this->mataKuliah.<br>";
    }

    //constructor
    public function __construct($nama, $nip, $mataKuliah){
     $this->nama = $nama;
     $this->nip = $nip;
     $this->mataKuliah = $mataKuliah;   
    }
}
    //instasiasi
    $dosen1 = new Dosen ("Bayono Nur Rohman", "268258719008", "Ilmu Komputer");
    echo $dosen1->tampilkanDosen();
    echo "<br>";

?>