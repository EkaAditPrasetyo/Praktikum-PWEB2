# Praktikum-PWEB2-TUGAS 1

## **1. JOBSHEET 1 Konsep Kelas dan Objek dalam PHP**

Kelas dan Objek dalam PHP
Kelas (Class)
• Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek.

• Atribut atau properties adalah variabel yang menyimpan data untuk objek.

• Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
objek.

Objek (Object)

• Instansiasi dari kelas.

• Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

Aksesibilitas

• Public: Dapat diakses dari mana saja atau umum.

• Private: Hanya dapat diakses dalam kelas itu sendiri.

• Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

## a. Jobsheet 1 : Menggunakan Konsep Kelas dan Objek dalam PHP
Instruksi Kerja

1. Membuat Class dan Object
   
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.

o Buat metode tampilkanData() dalam class Mahasiswa.

o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.

2. Implementasi Constructor
   
o Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.

o Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.

3. Membuat Metode Tambahan
   
o Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.

o Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.

4. Penggunaan Atribut dan Metode
   
o Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.

o Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().

PROGRAM 

<img width="344" alt="jobse1" src="https://github.com/user-attachments/assets/49e32483-fc0c-4dcf-9208-106300dec995">

OUTPUT

<img width="432" alt="output_jobse1" src="https://github.com/user-attachments/assets/5bb79ccc-7f4d-42f7-a09b-f2c7cc6c2a1b">

## b. Tugas 1

intruksi Soal

1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
   
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.

3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.

4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output.

PROGRAM

<img width="751" alt="jobset1_tugas1" src="https://github.com/user-attachments/assets/a1f211aa-e3cc-454a-8b84-c7e9e88873ee">

OUTPUT

<img width="388" alt="output_jobset1_tugas1" src="https://github.com/user-attachments/assets/eac0115a-0619-4f37-82a6-6ef4ea3ba5bf">

## **2. JOBSHEET 2 Prinsip Dasar OOP**

1. Konsep Dasar OOP
   
Class dan Object:

• Class: Blueprint atau template untuk menciptakan objek.

• Object: Instance dari class yang memiliki atribut (properties) dan perilaku
(methods).

2. Prinsip OOP

- Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

- Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.

- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda.

- Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting.

## a. Jobsheet 2 : Implementasi Prinsip OOP dalam PHP

Instruksi

1. Membuat Class dan Object

o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.

o Buat metode tampilkanData() dalam class Mahasiswa.

o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.

2. Encapsulation

o Ubah atribut dalam class Mahasiswa menjadi private.

o Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.

o Demonstrasikan akses ke atribut menggunakan metode getter dan setter.

3. Inheritance

o Buat class Pengguna dengan atribut nama dan metode getNama().

o Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.

o Instansiasi objek dari class Dosen dan tampilkan data dosen.

4. Polymorphism

o Buat class Pengguna dengan metode aksesFitur().

o Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.

o Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().

5. Abstraction

o Buat class abstrak Pengguna dengan metode abstrak aksesFitur().

o Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.

o Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.

PROGRAM

<img width="348" alt="jobset2_1" src="https://github.com/user-attachments/assets/fa4a9f25-335e-4e9e-a28c-6d4dd2e83914">

<img width="310" alt="jobset2_2" src="https://github.com/user-attachments/assets/6893dd0e-9e8f-4ee9-a4b2-1c6a7c5b2173">

<img width="283" alt="jobset2_3" src="https://github.com/user-attachments/assets/cc4ef67d-b127-4411-872a-df3bdc3cb5f2">

OUTPUT

<img width="415" alt="output_jobset2" src="https://github.com/user-attachments/assets/b7eaf847-a209-4e49-8b46-42991f09dbdc">

## **3. JOBSHEET 3 Konsep Inheritance, Polymorphism, Encapsulation dan Abstraction dalam PHP**

1. Inheritance (Pewarisan)
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.

2. Polymorphism (Polimorfisme)
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk, biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

3. Encapsulation (Enkapsulasi)
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.

4. Abstraction (Abstraksi)
Abstraction adalah proses menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.


## a. Jobsheet 3 : Menerapkan Konsep Inheritance, Polymorphism, Encapsulation dan Abstraction dalam PHP

Instruksi Kerja

1. Inheritance

o Buat kelas Person dengan atribut name dan metode getName().

o Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID().

2. Polymorphism

o Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.

o Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.

3. Encapsulation

o Ubah atribut name dan studentID dalam kelas Student menjadi private.

o Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID.

4. Abstraction

o Buat kelas abstrak Course dengan metode abstrak getCourseDetails().

o Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.

PROGRAM

<img width="283" alt="jobset3_1" src="https://github.com/user-attachments/assets/4003d1c0-e8dc-478f-bd7c-bd2cd411f7bd">

<img width="297" alt="jobset3_2" src="https://github.com/user-attachments/assets/08db9650-5253-46e9-b7d1-cc37ab6a6f5a">

<img width="389" alt="jobset3_3" src="https://github.com/user-attachments/assets/99453d20-1e01-4892-b273-224448dd0948">

OUTPUT

<img width="393" alt="output_jobset3" src="https://github.com/user-attachments/assets/5fe92f7e-cb2c-42b2-973f-04743fa91401">

## b. Tugas 3 

Intruksi kerja

Buat proyek PHP dengan studi kasus sebagai berikut:

1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.

2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.

3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.

4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.

5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.

PROGRAM 

<img width="332" alt="jobset3_tugas3" src="https://github.com/user-attachments/assets/30f498b3-c93d-458b-9a0e-0646ab7ead2b">

<img width="332" alt="jobset3_tugas3_2" src="https://github.com/user-attachments/assets/d4b0b19b-0d0c-45e2-82e1-912d47b536f2">

<img width="467" alt="jobset3_tugas3_3" src="https://github.com/user-attachments/assets/23635a64-e7f4-4765-8a9c-14152f80d9f7">

OUTPUT

<img width="401" alt="output_tugas3" src="https://github.com/user-attachments/assets/925e1935-93e9-4f9b-8065-c6eeaa972959">

