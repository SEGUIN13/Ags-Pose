<!DOCTYPE html>
    <html lang="fr">
      <head>
        <meta charset="utf-8">
        <title>AGS-Pose</title>
        <meta name="description" content="Fourniture et pose toutes menuiseries">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../src/css/style.css" rel="stylesheet">
        <link href="../src/css/article.css" rel="stylesheet">
        <link href="../src/css/responsive.css" rel="stylesheet">
        <link href="../src/css/contact.css" rel="stylesheet">
        <link href="../src/css/menu.css" rel="stylesheet">
        <link href="../src/css/prestation.css" rel="stylesheet">
        <link href="../src/css/admin.css" rel="stylesheet">
        

      </head>
      <body>

        <div class="container">
          <header>
            <div class="header">
              <div class="button" tabindex="1000">
                <img src="https://img.icons8.com/officel/40/000000/menu.png"/>
              </div>
                <div class="titleName">
                    <h1 class="name">AGS-Pose</h1>
                </div>
              <div class="titlenav">
                <a class="home" href="home.php">Logo</a>
              </div>

              <nav id="nav-content" class="nav-content">
                <ul>
                  <li><a href="home.php">Accueil</a></li>
                  <li><a href="menuiserie.php">Menuiserie PVC & Alu</a></li>
                  <li><a href="fermeture.php">Fermetures motorisées</a></li>
                  <li><a href="cloisonnage.php">Cloisonnage</a></li>
                  <li><a href="store.php">Stores intérieurs</a></li>
                  <li><a href="storeExt.php">Stores extérieurs</a></li>
                  <li><a href="pergola.php">Pergolas & Vérandas</a></li>
                  <li><a href="prestations.php">Nos réalisations</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li class="small"><a href="connexion.php">Se connecter</a></li>

                </ul>


              </nav>
            </div>
          </header>
          <main>
              <?php echo $content; ?>
          </main>




          <footer>
             <address class="address">
                 AGS-Pose - Avenue Léonce CHASSEN - 13190 ALLAUCH <br>
                 Téléphone : 07 05 01 01 01
             </address>
             <p class="info"><small>Copyrigth - Véronique SEGUIN - TP Développeur web-Session 2020</small></p>
          </footer>
        </div>
      </body>
      <script type="text/javascript" src="../src/js/contact.js"></script>
    </html>