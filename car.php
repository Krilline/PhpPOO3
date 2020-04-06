<?php

// Car.php


require_once 'vehicule.php';

final class Car extends Vehicule
{
    private $energy;
    private $energyLevel;

    const ALLOWED_ENERGIES = [
        'Diesel',
        'Electric', ];

    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}