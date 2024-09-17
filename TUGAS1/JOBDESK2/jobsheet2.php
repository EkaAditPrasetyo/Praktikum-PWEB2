<?php
//Membuat class mahasiswa
class Mahasiswa{
    //atribut atau properties
    //No.1 membuat class dan object dengan akses public terlebih dahulu
    // public $nama;
    // public $nim;
    // public $jurusan;

     //No.2 atribut atau properties (private) ENCAPSULATION
     private $nama;
     private $nim;
     private $jurusan;

    //constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode tampilkanData
    public function tampilkanData(){
        return "Nama : $this->nama.<br> NIM : $this->nim.<br> Jurusan : $this->jurusan.<hr>";
    }

    //Metode getter dan setter
    public function getNama(){
        return $this->nama;
    }
    public function setNama($nama){
        return $this->nama = $nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function setNim($nim){
        return $this->nim = $nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function setJurusan($jurusan){
        return $this->jurusan = $jurusan;
    }
}



//No.3 INHERITANCE
//membuat class pengguna
class Pengguna{
    //atribut atau properties
    protected $nama;

    //constructor
    public function __construct($nama){
        $this->nama = $nama;
    }

    //Metode get
    public function getNama(){
        return $this->nama;
    }
}
    //membuat class dosen
    class Dosen extends Pengguna{
        private $mataKuliah;

        //Constructor
        public function __construct($nama, $mataKuliah){
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah;
        }

        public function getmataKuliah(){
            return $this->mataKuliah;
        }
    }
    //No.4 POLYMORPHISM
    class Pengguna_P{
        public function aksesFitur(){
            return "Akses Fitur";
        }
    }
    class Mahasiswa_P extends Pengguna_P{
        public function aksesFitur(){
            return "Mahasiswa dapat mengakses fitur perkuliahan dan ";
        }
    }
    class Dosen_P extends Pengguna_P{
        public function aksesFitur(){
            return "Dosen dapat mengakses fitur kampus.<hr>";
        }
    }
    function Fitur(Pengguna_P $Pengguna_P){
        echo $Pengguna_P->aksesFitur() . PHP_EOL;
    }

    //  //poly
    //  class pengguna2{
    //     protected $nama;

    //     public function __construct($nama){
    //         $this->nama =$nama;
    //     }

    //     public function aksesFitur(){
    //         return $this->nama;
    //     }
    
    //     class mahasiswa2 extends pengguna2{
    //         public function aksesFitur(){
    //             return "Mahasiswa Eka" . $this->name;
    //         }
    //     }
    //     class dosen2 extends pengguna2{
    //         public function aksesFitur(){
    //             return "Dosen Eka" . $this->name;
    //         }
    //     }
    //     class poly{
    //         public function print(pengguna2 $pengguna){
    //             echo $pengguna->aksesFitur(). "Says" .$pengguna->aksesFitur(). "<br>";
    //         }
    //     }
    // }

    //Abstraction
    // kelas abstrak pengguna
abstract class pengguna_abs {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur();
}

// kelas mahasiswa yang mengimplementasikan kelas pengguna
class Mahasiswa_2 extends Pengguna_abs {
    public function aksesFitur() {
        echo $this->nama . ", Mengakses fitur Mahasiswa : Mengikuti kelas online.<br>";
    }
}

// kelas dosen yang mengimplementasikan kelas pengguna
class Dosen_2 extends Pengguna_abs {
    public function aksesFitur() {
        echo $this->nama . ", Mengakses fitur Dosen : Menyediakan materi kuliah.<br>";
    }
}


//Instasiasi Objek dan Kelas
echo "<h2>Objek dan Kelas</h2>";
$mahasiswa1 = new Mahasiswa("Eka Adit Prasetyo", "230102079", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();

//Instasiasi ENCAPSULATION
echo "<h2>Encapsulation</h2>";
echo $mahasiswa1->getNama();
echo "<br>";
echo $mahasiswa1->getNim();
echo "<br>";
echo $mahasiswa1->getJurusan();
echo "<hr>";

//Instasiasi INHERITANCE
echo "<h2>Inheritance</h2>";
$dosen1 = new Dosen("Bayono Nur Rohman", "Ilmu Komputer");
echo $dosen1->getNama();
echo "<br>";
echo $dosen1->getmataKuliah();
echo "<hr>";

//Instasiasi POLYMORPHISM
echo "<h2>Polymorphism</h2>";
$mahasiswa_P = new Mahasiswa_P();
echo $mahasiswa_P->aksesFitur();
$dosen_p = new Dosen_P();
echo $dosen_p->aksesFitur();

//Instasiasi ABSTRACTION
echo "<h2>Abstraction</h2>";
$mahasiswa_2 = new Mahasiswa_2("Eka Adit Prasetyo");
$dosen_2 = new Dosen_2("Bayono Nur Rohman");
$mahasiswa_2->aksesFitur();
$dosen_2->aksesFitur();
     
   
?>