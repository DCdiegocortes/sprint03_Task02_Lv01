<?php
declare(strict_types=1);

require_once "EssentialsBag.php";

require_once "Wallet.php";
require_once "HouseKey.php";
require_once "TransportItem.php";

$myWallet = new Wallet();
$myHouseKey = new HouseKey();
$mySmartphone = new Smartphone();

$myBag = new EssentialsBag($myWallet, $myHouseKey, $mySmartphone, TransportItem::CARKEYS);

$items = $myBag->leaveHomeWithItems();
echo $items;