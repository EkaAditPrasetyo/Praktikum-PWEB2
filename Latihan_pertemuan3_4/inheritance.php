<?php
//Inheritance adalah kelas dapat mewarisi properti dan metode dari kelas lain.
//Polymorphism adalah metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
//Abstraction adalah menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

//membuat class produk
class Produk{
    protected $nama;

    //constructor
    public function __construct($nama){
        $this->nama = $nama;
    }

    //Metode getNama
    public function getNama(){
        return $this->nama;
    }
}

//membuat class Buku extend ke class produk
class Buku extends Produk{
    private $penulis;

    //constructor
    public function __construct($nama, $penulis){
        parent ::__construct($nama);
        $this->penulis = $penulis;
    }

    //metode getPenulis
    public function getPenulis(){
        return $this->penulis;
    }
}

//Instasiasi
$buku1 = new Buku ("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); //Output : Pemrograman PHP
?>