<?php
include('./classes-autoloader.inc.php');
$sortie = new Sorties();
$sortie->getAllByYear();
echo json_encode($sortie->dataByYear);