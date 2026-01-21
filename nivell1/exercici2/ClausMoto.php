<?php
require_once "Transport.php";

class ClausMoto implements Transport
{
  public function portar()
  {
    echo "Claus de la moto" . PHP_EOL;
  }
}
