<?php

require_once("models/characters/player.php");
require_once("models/characters/mage.php");
require_once("models/characters/guerrier.php");

$player = new mage();
$player->setDamage(10);
