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
  <div id="btn_add_line"><button>Ajout de sortie</button></div>
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
        <tr style="display :none;">
            <form id="form_add_sortie" action="" method="post">

            <td><input class="input_form_sortie" type="text" name="lieu" placeholder="lieu"></td>
            <td><input class="input_form_sortie" type="date" name="date" placeholder="date"></td>
            <td><input class="input_form_sortie" type="number" name="cleaner" placeholder="cleaner"></td>
            <td><input class="input_form_sortie" type="number" name="nb_sac" placeholder="nb_sac"></td>
            <td><input class="input_form_sortie" type="number" name="kilos" placeholder="kilos"></td>
            <td><input class="input_form_sortie" type="number" name="verre" placeholder="verre"></td>
            <td><input class="input_form_sortie" type="number" name="plastique" placeholder="plastique"></td>
            <td><input class="input_form_sortie" type="number" name="carton" placeholder="carton"></td>
            <td><input class="input_form_sortie" type="number" name="canette" placeholder="canette"></td>
            <td><input class="input_form_sortie" type="number" name="tout_venant" placeholder="tout_venant"></td>
            <td><input class="input_form_sortie" type="number" name="encombrant" placeholder="encombrant"></td>
            <td><input class="input_form_sortie" type="number" name="megots" placeholder="megots"></td>
            <td><input class="input_form_sortie" type="number" name="bouchon" placeholder="bouchon"></td>
            <td><input class="input_form_sortie" type="number" name="proto" placeholder="proto"></td>
            <td><input class="input_form_sortie" type="submit"></td>
        </form>
        </tr> 
    </div>
   </table>
   </section>
</body>
</html>