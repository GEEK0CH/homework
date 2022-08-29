<?php

class servDrive implements IntefaceService
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }


    public function set(TarifCarsharingInterface $tarif, &$price)
    {
        $price += $this->price;
    }
}