<?php
class Student{
    public $adm_no;
    public $name;

    public function __construct($adm_no, $name){
        $this->adm_no = $adm_no;
        $this->name = $name;

    }

    public function greetStudent(){
        echo "Hello ".$this->name;
    }
}

$student_one = new Student(1001, "Doe Doeson");
echo "Student No: ".$student_one->adm_no."\n";
echo "Student name: ".$student_one->name."\n";
echo $student_one->greetStudent();
?>