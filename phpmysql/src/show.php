<?php
include('./classes-autoloader.inc.php');
$sortie = new Sorties();
$sortie->getAll();
echo json_encode($sortie->data);