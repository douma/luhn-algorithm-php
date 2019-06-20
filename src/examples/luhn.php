<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \LuhnAlgorithm\Command(new \LuhnAlgorithm\LuhnAlgorithm());
$command->run();