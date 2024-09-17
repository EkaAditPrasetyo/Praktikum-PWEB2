<?php
// Definisi kelas Person
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->nama;
    }

    // Metode untuk mendapatkan peran, di override pada kelas turunan
    public function getRole() {
        return "Unknown role";
    }
}

// Definisi kelas Dosen yang mewarisi Person
class Dosen extends Person {
    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Getter untuk nidn
    public function getNidn() {
        return "dengan NIDN : $this->nidn, ";
    }

    // Setter untuk nidn
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Override metode getRole() untuk Dosen
    public function getRole() {
        return "Peran : Dosen <br>";
    }
}

// Definisi kelas Mahasiswa yang mewarisi Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // Getter untuk nim
    public function getNim() {
        return "dengan NIM : $this->nim, ";
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override metode getRole() untuk Mahasiswa
    public function getRole() {
        return "Peran : Mahasiswa <br>";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    abstract public function pengajuanJurnal();
}

// Definisi kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    public function pengajuanJurnal() {
        return "Jurnal Dosen: Mengajukan jurnal untuk publikasi. <br>";
    }
}

// Definisi kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    public function pengajuanJurnal() {
        return "Jurnal Mahasiswa: Mengajukan laporan penelitian.";
    }
}

//Instasiasi Objek
// Penggunaan kelas-kelas yang telah didefinisikan
// Membuat objek Dosen dan Mahasiswa
$dosen = new Dosen("Bambang Leksama", "238908792");
$mahasiswa = new Mahasiswa("Eka Adit Prasetyo", "230102079");

// Menampilkan nama, ID, dan peran
echo $dosen->getName() . "\n"; // Output: Bambang Leksama
echo $dosen->getNidn() . "\n"; // Output: 238908792
echo $dosen->getRole() . "\n"; // Output: Dosen

echo $mahasiswa->getName() . "\n"; // Output: Eka Adit Prasetyo
echo $mahasiswa->getNim() . "\n"; // Output: 230102079
echo $mahasiswa->getRole() . "\n"; // Output: Mahasiswa

// Menggunakan kelas Jurnal
$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->pengajuanJurnal() . "\n"; // Output: Jurnal Dosen: Mengajukan jurnal untuk publikasi.
echo $jurnalMahasiswa->pengajuanJurnal() . "\n"; // Output: Jurnal Mahasiswa: Mengajukan laporan penelitian.
?>
