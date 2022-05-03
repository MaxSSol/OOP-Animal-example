<?php

abstract class Animal
{
    private string $food;
    private string $location;

    public function __construct($food = 'food', $location = 'location')
    {
        $this->food = $food;
        $this->location = $location;
    }

    abstract public function makeNoise();

    public function eat()
    {
        print_r('Eat');
    }

    public function sleep()
    {
        print_r('Sleep');
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->food = $food;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

}

class Dog extends Animal
{
    public function makeNoise()
    {
        print_r('Гав');
    }
}

class Cat extends Animal
{
    private string $mustache;

    public function makeNoise()
    {
        print_r('Мяу');
    }


}

class Horse extends Animal
{
    private string $hooves;

    public function makeNoise()
    {
        print_r('Ірж');
    }
}


class Veterinarian
{
    public function treatAnimal(Animal $animal)
    {
        $anim = new $animal();
        echo $animal->getFood() . ' ' . $animal->getLocation() . " ";
    }
}

$animals = [
    new Dog('кісточка'),
    new Cat('рибка'),
    new Horse('сіно'),
];

function veterinarian(array $animals) {
    $veterinarian = new Veterinarian();
    foreach ($animals as $animal) {
         $veterinarian->treatAnimal($animal);
    }
}

var_dump(veterinarian($animals));
