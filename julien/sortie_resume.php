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
</head>
<body>
    <section>
        <h1>Résume en chiffres </h1>
        <div class="table-header">
          <table cellpadding="1" cellspacing="1" border="0">
            <thead>
              <tr>
                <th>Résume</th>
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
                <!-- <td>Cleaners</td>
                <td>75</td>
                <td>272</td>
                <td>290</td>
                <td>993</td>
                <td>908</td>
                <td>2538</td> -->
              </tr>
              <tr id="sacs">
                <!-- <td>Sacs</td>
                <td>117</td>
                <td>179</td>
                <td>241</td>
                <td>666</td>
                <td>634</td>
                <td>1837</td> -->
              </tr><tr id="sacs_per_cleaner">
                <!-- <td>Sacs par cleaner</td>
                <td>1.6</td>
                <td>0.7</td>
                <td>0.8</td>
                <td>0.7</td>
                <td>0.7</td>
                <td>0.9</td> -->
              </tr>
              <tr id="kilos">
                <!-- <td>kilos</td>
                <td>354</td>
                <td>2736</td>
                <td>1855</td>
                <td>6347</td>
                <td>9216</td>
                <td>20508</td> -->
              </tr>
              <tr id="kilo_per_cleaner">
                <!-- <td>kilos par cleaner</td>
                <td>4.7</td>
                <td>10.1</td>
                <td>6.4</td>
                <td>6.4</td>
                <td>10.1</td>
                <td>7.5</td>
                 -->
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <script src="sortie_resume.js"></script>
</body>
</html>