<?php
//Menambah atribut dan metode
class Buku{
    //Atribut adalah menyimpan data atau keadaan dari objek
    public $judul;
    public $penulis;

    //Constructor
    public function __construct($judul, $penulis){
        $this->judul=$judul;
        $this->penulis=$penulis;
    }

    //Metode
    public function tampilkaninfo(){
        return "Buku: $this->judul, ditulis $this->penulis.";
    }
}

    //Instansiasi objek
    $buku1 = new Buku("Pemrograman PHP", "John Doe");
    echo $buku1->tampilkaninfo();
    

    //Aksesbilitas
    //public : dapat diakses dari mana saja
    //private : hanya dapat diakses dalam kelas itu sendiri
    //protected : dapat diakses oleh kelas itu sendiri dan kelas turunan.
?>

