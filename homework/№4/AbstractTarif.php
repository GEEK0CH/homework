<?php

abstract class AbstractTarif implements TarifCarsharingInterface
{
    protected $services = [];

    protected $distance;
    protected $minutes;

    protected $priceKilometr;
    protected $priceMinut;

    public function countPrice(): int
    {
        $price = $this->minutes * $this->priceMinut + $this->distance * $this->priceKilometr;
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->set($this, $price);
            }
        }

        return $price;
    }

    public function minutes(): int
    {
        return $this->minutes;
    }

    public function distance(): int
    {
        return $this->distance;
    }

    public function addService(IntefaceService $service): TarifCarsharingInterface
    {
        array_push($this->services, $service);
        return $this;
    }

    public function __construct(int $distance, int $minutes)
    {
        $this->distance=$distance;
        $this->minutes=$minutes;
    }
}
