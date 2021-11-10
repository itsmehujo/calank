<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableau_sortie_nettoyage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Data My Calanques</title>
</head>
<body>
    <section>

        <h1>Résume en chiffres </h1>
        <div><a href="../index.php" style="background-color:#34a0a4;
    background-color:#339e72;
    border-radius:10px;
    border:1px solid #1f2f47;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    padding:6px 13px;
    text-decoration:none;
    text-shadow:0px 1px 0px #263666;" class="btn_form" id="btn_add_line">retour au dashboard</a></div><br><br>
        <div class="table-header">
          <table id="myBoard" cellpadding="1" cellspacing="1" border="0">
            <thead>
              <tr>
                <th>Tâches</th>
                <th>2017</th>
                <th>2018</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>TOTAL / MOYENNE</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="table-content">
          <table cellpadding="5" cellspacing="5" border="0">
            <tbody>
              <tr id="cleaners">
             
              </tr>
              <tr id="sacs">
                
              </tr><tr id="sacs_per_cleaner">
                
              </tr>
              <tr id="kilos">
             
              </tr>
              <tr id="kilo_per_cleaner">
                
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <script src="sortie_resume.js"></script>

</body>
</html>