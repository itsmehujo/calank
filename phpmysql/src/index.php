<?php
include('./classes-autoloader.inc.php');
$sortie = new Sorties();
$sortie->getAll();
$data = $sortie->avg('tout_venant');
echo json_encode($data);