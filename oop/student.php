<?php
// Practising OOP in PHP:

class Student{
    //Attributes
    private $adm_no;
    private $student_name;

    //Constructor method that runs when an object is being created:
    public function __construct(){
        echo "Student object created.<br>";       

    }

    //Destructor method that is called at the end of the script:
    public function __destruct(){
        echo "Script for student exited.<br>";
    }

    // Setters and getters:
    public function setAdmNo($adm_no){
        $this->adm_no=$adm_no;
    }
    public function setStudentName($student_name){
        $this->student_name = $student_name;
    }
    public function getAdmNo(){
        return $this->adm_no;
    }

    public function getStudentName(){
        return $this->student_name;
    }

    //Method(s):

    public function greetStudent(){
        echo "<i>Hello </i>".$this->student_name."<br>";
    }
}

//Inheritance:
class Undergraduate extends Student{
    private $undergrad_course;

    public function __construct(){
        echo "Undergraduate object created.<br>";
    }

    public function __destruct(){
        echo "Script for undergraduate exited.<br>";
    }

    //Setters and getters:
    public function setUndergradCourse($undergrad_course){
        $this->undergrad_course=$undergrad_course;
    }

    public function getUndergradCourse(){
        return $this->undergrad_course;
    }

    //Method(s)
    //To override the greetStudent() method, we redefine it:
    public function greetStudent(){
        parent::greetStudent();
        echo "You study ".$this->undergrad_course;
    }
}

//Object instantiation:
$student_one = new Student();
$undergrad_one = new Undergraduate();

 // Checking whether an object belongs to a class.
var_dump($student_one instanceof Student); //Returns bool(true)
var_dump($undergrad_one instanceof Student); //Returns bool(true) -> Probably due to inheritance

//Set the attributes:
//For student_one:
$student_one->setAdmNo(1001);
$student_one->setStudentName("Doe Doeson");

//For undergrad_one:
$undergrad_one->setAdmNo(2001);
$undergrad_one->setStudentName("Jane Janeson");
$undergrad_one->setUndergradCourse("Bachelor in Computer Science");

//Get the attributes and display them:
//For student_one:
echo "<b>Student No: </b>".$student_one->getAdmNo()."<br>";
echo "<b>Student name: </b>".$student_one->getStudentName()."<br>";
echo $student_one->greetStudent(); //Greet student
echo "<br>";

//For undergrad_one:
echo "<b>Student No: </b>".$undergrad_one->getAdmNo()."<br>";
echo "<b>Student name: </b>".$undergrad_one->getStudentName()."<br>";
echo "<b>Undergraduate course: </b>".$undergrad_one->getUndergradCourse()."<br>";
echo $undergrad_one->greetStudent(); //Greet undergraduate
echo "<br>";

//Calling methods:

?>