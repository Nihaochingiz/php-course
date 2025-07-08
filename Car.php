<?php
class Car
{
    public function soundOfEngine() 
    {
        echo('Др-др-др');
    }
}

$BMW = new Car;

$BMW->soundOfEngine();