<?php
require_once "CarCouponGenerator.php";

class BmwCouponGenerator implements CarCouponGenerator
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
      $this->discount += 5;
    }
  }
  public function addStockDiscount(): void
  {
    if ($this->bigStock) {
      $this->discount += 7;
    }
  }
  public function getDiscount(): string
  {
    return "Get {$this->discount}% off the price of your BMW.";
  }
}
