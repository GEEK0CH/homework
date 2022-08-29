<?php

class hoursTarif extends AbstractTarif{

    protected $priceKilometr = 0;
    protected $priceMinut = 200 / 60 ;

    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }

}