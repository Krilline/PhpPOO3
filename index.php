<?php

//Vehicles Class
require_once 'bicycle.php';
require_once 'truck.php';
require_once 'car.php';
require_once 'skateboard.php';

//Motor Way
require_once 'motorway.php';
$highway = new MotorWay(4, 130);
$car = new Car(red, 4, Diesel);
$car2 = new Car (purple, 4, Electric);
$highway->addVehicule($car);
$highway->addVehicule($car2);
var_dump($highway);

//Residential Way
require_once 'residentialway.php';
$street = new ResidentialWay(2, 50);
$trashstruck = new Truck(10, brown, 3, Diesel);
$bicycle = new Bicycle(yellow, 2);
$skateboard = new SkateBoard(chrome, 1);
$car3 = new Car(magenta, 4, Diesel);
$street->addVehicule($trashstruck);
$street->addVehicule($skateboard);
$street->addVehicule($car3);
$street->addVehicule($bicycle);
var_dump($street);

//Pedestrian Way
require_once 'pedestrianway.php';
$path = new PedestrianWay(1, 10);
$bicycle = new Bicycle(green, 2);
$skateboard = new SkateBoard(red, 1);
$path->addVehicule($bicycle);
$path->addVehicule($skateboard);
var_dump($path);

