<?php
abstract class Animal{
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