<?php

include_once "TarifCarsharingInterface.php";
include_once "IntefaceService.php";
include_once "AbstractTarif.php";

include_once "Tarif.php";
include_once "Service.php";
include_once "hoursTarif.php";
include_once "servDriver.php";


$tarif = new Tarif(10, 61);
$tarif->addService(new Gps(15));
echo $tarif->countPrice();
