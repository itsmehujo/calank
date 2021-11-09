<?php
include('./classes-autoloader.inc.php');
function toZero($var) {
    if($var === '') {
        $var = 0;
    }
    return $var;
}

$lieu = toZero($_POST['lieu']);
$date = toZero($_POST['date']);
$cleaner = toZero($_POST['cleaner']);
$nb_sac = toZero($_POST['nb_sac']);
$kilos = toZero($_POST['kilos']);
$verre = toZero($_POST['verre']);
$plastique = toZero($_POST['plastique']);
$carton = toZero($_POST['carton']);
$canette = toZero($_POST['canette']);
$tout_venant = toZero($_POST['tout_venant']);
$encombrant = toZero($_POST['encombrant']);
$megots = toZero($_POST['megots']);
$bouchon = toZero($_POST['bouchon']);
$proto = toZero($_POST['proto']);

$sortie = new Sorties();
$sortie->insertIntoDB($lieu, $date, $cleaner, $nb_sac, $kilos, $verre, $plastique, $carton, $canette, $tout_venant, $encombrant, $megots, $bouchon, $proto);

header('Location: ./test.php');