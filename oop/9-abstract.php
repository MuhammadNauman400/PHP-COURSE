<?php
abstract class Animal
{
    // Abstract method (must be implemented in child classes)
    abstract public function makeSound();

    // Normal method (optional to override)
    public function eat()
    {
        echo "This animal eats food.<br>";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Woof! Woof!<br>";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Meow!<br>";
    }
}

// $animal = new Animal(); // ❌ Error: Cannot instantiate abstract class

$dog = new Dog();
$dog->makeSound(); // Output: Woof! Woof!
$dog->eat();       // Output: This animal eats food.

$cat = new Cat();
$cat->makeSound(); // Output: Meow!

// We use abstract classes in PHP when we want to define a
//  common base (blueprint) for multiple related classes,
//   but still want to leave some methods unimplemented so
//    that child classes provide their own version.