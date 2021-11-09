<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableau_sortie_nettoyage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Data My Calanques</title>
    <link href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.default.min.css" rel="stylesheet" />
    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/kendo.all.min.js"></script>

    
    
    
</head>
<body>
    <section>
      <button class='export-pdf k-button'>Save as PDF</button>
    
        <h1>Résume en chiffres </h1>
        <div class="table-header">
          <table cellpadding="1" cellspacing="1" border="0">
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