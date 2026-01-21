<?php
require_once "Cartera.php";
require_once "ClausCasa.php";
require_once "Transport.php";
require_once "Smartphone.php";

class Persona
{
  private Cartera $cartera;
  private ClausCasa $clausCasa;
  private ?Transport $transport;
  private Smartphone $smartphone;

  public function __construct(
    Cartera $cartera,
    ClausCasa $clausCasa,
    ?Transport $transport,
    Smartphone $smartphone
  ) {
    $this->cartera = $cartera;
    $this->clausCasa = $clausCasa;
    $this->transport = $transport;
    $this->smartphone = $smartphone;
  }

  public function sortirDeCasa()
  {
    echo "Surto de casa amb:" . PHP_EOL;
    $this->cartera->portar();
    $this->clausCasa->portar();
    $this->transport?->portar();
    $this->smartphone->portar();
    echo "-----" . PHP_EOL;
  }
}
