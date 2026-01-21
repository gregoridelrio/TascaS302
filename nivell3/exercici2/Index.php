<?php
require_once "Mentor.php";
require_once "Moodle.php";

$moodle = new Moodle();

$mentor1 = new Mentor("Josep");
$mentor2 = new Mentor("Maria");
$mentor3 = new Mentor("Marta");

$moodle->attach($mentor1);
$moodle->attach($mentor2);
$moodle->attach($mentor3);
$moodle->detach($mentor3);

$moodle->novaEntrega();
