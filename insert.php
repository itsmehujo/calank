<?php
include('./classes-autoloader.inc.php');

$lieu = $_POST['lieu'];
$date = $_POST['date'];
$cleaner = $_POST['cleaner'];
$nb_sac = $_POST['nb_sac'];
$kilos = $_POST['kilos'];
$verre = $_POST['verre'];
$plastique = $_POST['plastique'];
$carton = $_POST['carton'];
$canette = $_POST['canette'];
$tout_venant = $_POST['tout_venant'];
$encombrant = $_POST['encombrant'];
$megots = $_POST['megots'];
$bouchon = $_POST['bouchon'];
$proto = $_POST['proto'];

$sortie = new Sorties();
$sortie->insertIntoDB($lieu, $date, $cleaner, $nb_sac, $kilos, $verre, $plastique, $carton, $canette, $tout_venant, $encombrant, $megots, $bouchon, $proto);