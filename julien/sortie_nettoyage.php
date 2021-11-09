<?php
include('../classes-autoloader.inc.php');
$sortie = new Sorties();
$sortie->getAll();


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tableau_sortie_nettoyage.css">
    <script src="tableau_sortie_nettoyage.js" defer></script>
</head>
<body>
  <div id="data" style="display:none;"><?php echo json_encode($sortie->data); ?></div>
  <section>
    <table id="sorties">
        <thead>
        <tr id ="colonne">
            <th>Id</th>
            <th>Lieu</th>
            <th>Date</th>
            <th>Cleaner</th>
            <th>Nombre de sac</th>
            <th>Kilos</th>
            <th>Verre</th>
            <th>Plastique</th>
            <th>Carton</th>
            <th>Canette</th>
            <th>Tout venant</th>
            <th>Encombrant</th>
            <th>Megots</th>
            <th>Bouchon</th>
            <th>Proto</th>
        </tr>
        </thead>
   </table>
   </section>
</body>
</html>