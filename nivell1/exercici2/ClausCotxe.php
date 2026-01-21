<?php
require_once "Transport.php";

class ClausCotxe implements Transport
{
  public function portar()
  {
    echo "Claus del cotxe" . PHP_EOL;
  }
}
