<?php

class Gps implements IntefaceService
{
    private $priceHours;

    public function __construct($priceHours)
    {
        $this->priceHours = $priceHours;
    }


    public function set(TarifCarsharingInterface $tarif, &$price)
    {
        $hours = ceil($tarif->minutes() / 60);
        $price += $this->priceHoure * $hours;
    }
}