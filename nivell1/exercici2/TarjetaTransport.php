<?php
require_once "Transport.php";

class TarjetaTransport implements Transport
{
  public function portar()
  {
    echo "Targeta del transport públic" . PHP_EOL;
  }
}
