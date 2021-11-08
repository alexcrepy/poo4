<?php

require_once 'Vehicle.php';

/**
 * Class Car
 */
class Car extends Vehicle
{
    /**
     * @var string
     */
    private string $energy;

    /**
     * @var int
     */
    private int $energyLevel;

    /**
     * @var boolean
     */
    private bool $hasParkBrake = false;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake == true) {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake == false) {
            $this->hasParkBrake = true;
            return 'Mise du frein à main.</br>';
        }
        return $this;
    }

    public function start(): string
    {
        if ($this->hasParkBrake == true) {
            throw new Exception('Impossible d\'avancer. Veuillez débloquer le frein à main.');
        } else {
            return "Moteur en marche, frein à main enlever, prêt à partir: Vroouumm Vvvvrrrooouummm!";
        }
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return $this
     */
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}
