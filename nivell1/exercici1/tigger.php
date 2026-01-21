<?php
class Tigger
{
  private static ?Tigger $instance = null;
  private int $counter = 0;

  private function __construct()
  {
    echo "Building character..." . PHP_EOL;
  }

  private function __clone() {}

  public function __wakeup()
  {
    throw new Exception("Cannot unserialize a singleton.");
  }

  public static function getInstance(): Tigger
  {
    return self::$instance ??= new self();
  }

  public function roar(): void
  {
    echo "Grrr!" . PHP_EOL;
    $this->counter++;
  }

  public function getCounter(): int
  {
    return $this->counter;
  }
}

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();

echo $tigger->getCounter();
