<?php
declare(strict_types=1);

class Tigger
{
    private static ?Tigger $instance = null;
    private int $roarCounter = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(): Tigger
    {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar(): void
    {
       $this->roarCounter++;
        echo "GRRRRRR..." . PHP_EOL;
    }

    public function getRoarCounter() : int
    {
        return $this->roarCounter;
    }
}