<?php
// Abstract classes and interfaces
abstract class Animal{
    // concrete method:
    public function eat(){
        echo "All animals eat.";
    }
    // abstract method:
    public abstract function make_sound($animal_sound);
}
class Cow extends Animal{
    public function make_sound($animal_sound){
        echo "Moo";
    }
} class Dog extends Animal{
    public function make_sound($animal_sound){
        echo "Woof!";
    }
}
    ?>