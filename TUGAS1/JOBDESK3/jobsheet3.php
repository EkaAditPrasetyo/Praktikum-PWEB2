<?php
//No.1 Inheritance
// Kelas Person
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getName() {
        return $this->nama;
    }
}

// Kelas Student yang mewarisi Person
class Student extends Person {
    private $studentID;

    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Student: " . parent::getName();
    }

    public function getStudentID() {
        return ", StudentID : $this->studentID <br>";
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

//No.2 Polymorphism
// Kelas Teacher yang mewarisi Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($nama, $teacherID) {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return ", TeacherID : $this->teacherID <br>";
    }

    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Teacher: " . parent::getName();
    }
}

//No.4 Abstraction
// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return " Ini adalah kelas online. <br>";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return " Ini adalah kelas offline.";
    }
}

//Instasiasi Objek
// Penggunaan kelas-kelas yang telah didefinisikan
// Membuat objek Student dan Teacher
$student1 = new Student("Eka Adit Prasetyo", "230102079");
$teacher1 = new Teacher("Bambang Leksama", "238908792");

// Menampilkan nama dan ID
echo $student1->getName() . "\n"; // Output: Student: Eka Adit Prasetyo
echo $student1->getStudentID() . "\n"; // Output: 230102079

echo $teacher1->getName() . "\n"; // Output: Teacher: Bambang Leksama
echo $teacher1->getTeacherID() . "\n"; // Output: 238908792

// Membuat objek kelas
$onlineCourse1 = new OnlineCourse();
$offlineCourse1 = new OfflineCourse();

echo $onlineCourse1->getCourseDetails() . "\n"; // Output: Ini adalah kelas online.
echo $offlineCourse1->getCourseDetails() . "\n"; // Output: Ini adalah kelas offline.
?>
