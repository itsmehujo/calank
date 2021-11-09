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
    <title>sortie</title>
    
    <link rel="stylesheet" href="tableau_sortie_nettoyage.css">
</head>
<body>
  <div id="data" style="display:none;"><?php echo json_encode($sortie->data); ?></div>
  <div><button style="background-color:#34a0a4;
    background-color:#339e72;
    border-radius:17px;
    border:1px solid #1f2f47;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    padding:6px 13px;
    text-decoration:none;
    text-shadow:0px 1px 0px #263666;" class="btn_form" id="btn_add_line" onclick="toogle()">Add</button></div>
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
        <tr id="tr_form_add_sortie" style="display:none">
            <form id="form_add_sortie" action="" method="post">
        
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px; 
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.3vw;" class="input_form_sortie" type="text" name="lieu" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="date" name="date" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="cleaner" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="nb_sac" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="kilos" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="verre"></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="plastique" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="carton" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="canette" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="tout_venant" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="encombrant" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="megots" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="bouchon" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="number" name="proto" ></td>
            <td><input style="padding-right:10px; padding-left:10px;
    font-size: 11px;
    border-width: 0.5px;
    border-color: #CCCCCC;
    background-color: #FFFFFF;
    color: #000000;
    border-style: solid;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(66,66,66,.75);
    text-shadow: 0px 0px 5px rgba(66,66,66,.75);
    max-width: 2.1vw;" class="input_form_sortie" type="submit" value="Ajout"></td>
        </form>
        </tr> 
    </div>
   </table>
   </section>
   <script src="tableau_sortie_nettoyage.js" defer></script>

</body>

</html>