<?php

//ResidentialWay.php
require_once 'car.php';
require_once 'truck.php';
require_once 'bicycle.php';
require_once 'highway.php';
require_once 'skateboard.php';

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($param)
    {
        if($param instanceof Car || $param instanceof Truck || $param instanceof Bicycle || $param instanceof SkateBoard)
        {
            $this->currentVehicles [] = $param;
        }
    }
}