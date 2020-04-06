<?php

//PedestrianWay.php

require_once 'bicycle.php';
require_once 'skateboard.php';
require_once 'highway.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($param)
    {
        if($param instanceof Bicycle || $param instanceof SkateBoard)
        {
            $this->currentVehicles [] = $param;
        }
    }
}