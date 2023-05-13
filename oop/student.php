<?php
class Student{
    //Attributes
    private $adm_no;
    private $student_name;

    //Constructor method that runs when an object is being created:
    public function __construct(){
        echo "An object of the student class has been created.";       

    }

    //Destructor method that is called at the end of the script:
    public function __destruct(){
        echo "This is student no: ".$this->adm_no."\n";
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
        echo "Hello ".$this->student_name."\n";
    }
}

//Object instantiation:
$student_one = new Student();
var_dump($student_one instanceof Student); // Checking whether an object belongs to a class.

//Set the attributes:
$student_one->setAdmNo(1001);
$student_one->setStudentName("Doe Doeson");

//Get the attributes and display them:
echo "Student No: ".$student_one->getAdmNo()."\n";
echo "Student name: ".$student_one->getStudentName()."\n";

echo $student_one->greetStudent();
?>