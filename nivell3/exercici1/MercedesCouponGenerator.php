<?php
require_once "CarCouponGenerator.php";

class MercedesCouponGenerator implements CarCouponGenerator
{
  private int $discount = 0;
  private bool $isHighSeason;
  private bool $bigStock;

  public function __construct(bool $isHighSeason, bool $bigStock)
  {
    $this->isHighSeason = $isHighSeason;
    $this->bigStock = $bigStock;
  }
  public function addSeasonDiscount(): void
  {
    if (!$this->isHighSeason) {
      $this->discount += 4;
    }
  }
  public function addStockDiscount(): void
  {
    if ($this->bigStock) {
      $this->discount += 10;
    }
  }
  public function getDiscount(): string
  {
    return "Get {$this->discount}% off the price of your Mercedes.";
  }
}
