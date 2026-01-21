<?php
require_once "Persona.php";
require_once "TarjetaTransport.php";
require_once "ClausCotxe.php";

$cartera = new Cartera();
$clausCasa = new ClausCasa();
$smartphone = new Smartphone();

$tarjetaTransport = new TarjetaTransport();
$persona1 = new Persona($cartera, $clausCasa, $tarjetaTransport, $smartphone);
$persona1->sortirDeCasa();

$clausCotxe = new ClausCotxe();
$persona2 = new Persona($cartera, $clausCasa, $clausCotxe, $smartphone);
$persona2->sortirDeCasa();

$persona3 = new Persona($cartera, $clausCasa, null, $smartphone);
$persona3->sortirDeCasa();
