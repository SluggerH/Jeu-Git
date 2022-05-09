<?php

require_once("models/characters/player.php");
require_once("models/characters/mage.php");

$player = new mage();
$player->setDamage(10);
print $player->specialAttack();