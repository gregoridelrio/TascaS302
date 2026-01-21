<?php
require_once "BmwCouponGenerator.php";
require_once "MercedesCouponGenerator.php";
require_once "CouponContext.php";

$isHighSeason = false;
$bigStock = true;

$bmwStrategy = new BmwCouponGenerator($isHighSeason, $bigStock);
$bmwContext = new CouponContext($bmwStrategy);
echo $bmwContext->generateCoupon() . PHP_EOL;

$mercedesStrategy = new MercedesCouponGenerator($isHighSeason, $bigStock);
$mercedesContext = new CouponContext($mercedesStrategy);
echo $mercedesContext->generateCoupon();
