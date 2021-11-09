<?php
include('./classes-autoloader.inc.php');
$sortie = new Sorties();
$sortie->getAll();
echo json_encode(count($sortie->data));