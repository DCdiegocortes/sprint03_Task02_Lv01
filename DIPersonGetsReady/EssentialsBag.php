<?php
declare(strict_types=1);

require_once "Wallet.php";
require_once "HouseKey.php";
require_once "Smartphone.php";
require_once "TransportItem.php";

class EssentialsBag
{
    private Wallet $wallet;
    private HouseKey $houseKey;
    private Smartphone $smartphone;
    private TransportItem $transportItem;

    public function __construct(Wallet        $wallet,
                                HouseKey      $houseKey,
                                Smartphone    $smartphone,
                                TransportItem $transportItem)
    {
        $this->wallet = $wallet;
        $this->houseKey = $houseKey;
        $this->smartphone = $smartphone;
        $this->transportItem = $transportItem;

    }

    public function leaveHomeWithItems(): string
    {
        return "Leaving my place .. checking items in my bag: \n"
            . " - " . $this->wallet->showWallet() . " \n"
            . " - " . $this->houseKey->showHouseKey() . "\n"
            . " - " . $this->smartphone->showSmartphone() . "\n"
            . " - " . $this->transportItem->name;
    }
}
