<?php
class Mentor implements \SplObserver
{
  private string $nom;

  public function __construct(string $nom)
  {
    $this->nom = $nom;
  }

  public function update(\SplSubject $subject): void
  {
    echo "Mentor {$this->nom} notificat." . PHP_EOL;
  }
}
