<?php
//Encapsulasi adalah menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
//Membuat class
class Buku{
    private $judul;
    private $penulis;

    //cosntructor
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //metode getJudul
    public function getJudul(){
        return $this->judul;
    }

    //metode setter judul
    public function setJudul($judul){
        $this->judul = $judul;
    }
}

    //Instasiasi
    $buku1 = new Buku ("Pemrograman PHP","Andi Prasetyo");
    echo $buku1->getJudul();// Output : Pemrograman PHP
?>