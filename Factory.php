<?php

class Automobile
{
  private $vehicleMake;
  private $vehicleModel;

  public function __construct($make, $model)
  {
    $this->vehicleMake = $make;
    $this->vehicleModel = $model;
  }

  public function __toString()
  {
    return $this->vehicleMake . ' ' . $this->vehicleModel . "\n";
  }
}

class AutoMobileFactory
{
  public static function create($make, $model)
  {
    return new Automobile($make, $model);
  }
}

$veyron = AutoMobileFactory::create('Bugatti', 'Veyron');
$vesta = AutoMobileFactory::create('Lada', 'Vesta');

print $veyron;
print $vesta;
