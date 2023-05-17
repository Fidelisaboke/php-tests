<?php
// Abstract classes and interfaces
abstract class Animal{
    // concrete method:
    public function eat(){
        echo "All animals eat.\n";
    }
    // abstract method:
    public abstract function make_sound();
}
class Cow extends Animal{
    public function make_sound(){
        echo "Moo\n";
    }
} class Dog extends Animal{
    public function make_sound(){
        echo "Woof!\n";
    }
}

// Creating objects
$cow = new Cow();
$dog = new Dog();
$cow->eat();
$cow->make_sound();
$dog->eat();
$dog->make_sound();
?>