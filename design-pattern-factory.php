<?php
// Create interface or contract class
interface ManufacturerInterface 
{
  public function manufacture();
}

//Implement functions to subclasses
class Honda implements ManufacturerInterface
{
  public function manufacture()
  {
    $car = new Car();
    // initialize
    return $car;
  }
}

class Toyota implements ManufacturerInterface
{
  public function manufacture()
  {
    $car = new Car();
     // initialize
    return $car;
  }
}

class CarFactory
{
  public static function createCar(ManufacturerInterface $manufacturerInterface){
    return $manufacturerInterface->manufacture();
  }
}

//Usage

$carFactory = new CarFactory();
$carFactory->manufacture(new Honda());
OR
$carFactory->manufacture(new Toyota());
