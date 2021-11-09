<?php
include('./classes-autoloader.inc.php');
$data = trim(file_get_contents('php://input'));
$decoded = json_decode($data, true);
$toUse = $decoded['value'];
$sortie = new Sorties();
$sortie->doAll($toUse);
echo json_encode($sortie->$toUse);