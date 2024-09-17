<?php
//Definisi kelas, kelas adalah blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek.
class Mobil{
    //Atribut dan properties adalah variabel yang menyimpan data untuk object
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this->merk=$merk;
        $this->warna=$warna;
    }
    
    //Metode atau function adalah fungsi yang ditentukan dalam kelas yang dipanggil oleh object    
    public function deskripsi(){
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }

}
//Instansiasi objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>