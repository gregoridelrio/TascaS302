<?php

require_once "LlenadoDeAgua.php";
require_once "CalentandoAgua.php";
require_once "Lavado.php";
require_once "Drenaje.php";
require_once "Secado.php";


class Lavavajillas
{
  private LlenadoDeAgua $llenadoDeAgua;
  private CalentandoAgua $calentandoAgua;
  private Lavado $lavado;
  private Drenaje $drenaje;
  private Secado $secado;

  public function __construct()
  {
    $this->llenadoDeAgua = new LlenadoDeAgua();
    $this->calentandoAgua = new CalentandoAgua();
    $this->lavado = new Lavado();
    $this->drenaje = new Drenaje();
    $this->secado = new Secado();
  }

  public function lavarPlatos(): void
  {
    echo "Lavado iniciado." . PHP_EOL;
    $this->llenadoDeAgua->llenarDeAgua();
    $this->calentandoAgua->calentarAgua();
    $this->lavado->lavarVajilla();
    $this->drenaje->vaciarAgua();
    $this->secado->secarVajilla();
    echo "Lavado finalizado.";
  }
}
