<?php

//Motorway.php

require_once 'car.php';
require_once 'highway.php';

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($param)
    {
        if($param instanceof Car)
        {
            $this->currentVehicles [] = $param;
        }
    }
}