<?php

interface TarifCarsharingInterface
{
    public function countPrice(): int;
    public function minutes(): int;
    public function distance(): int;
    public function addService(IntefaceService $service);

}