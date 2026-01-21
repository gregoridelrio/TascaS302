<?php

class CouponContext
{
  private CarCouponGenerator $strategy;

  public function __construct(CarCouponGenerator $strategy)
  {
    $this->strategy = $strategy;
  }

  public function generateCoupon(): string
  {
    $this->strategy->addSeasonDiscount();
    $this->strategy->addStockDiscount();

    return $this->strategy->getDiscount();
  }
}
