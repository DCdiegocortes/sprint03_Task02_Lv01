<?php
declare(strict_types=1);
require_once "Tigger.php";

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

$roarCounter = $tigger->getRoarCounter();
echo "Roar Counter: " . $roarCounter . PHP_EOL;
