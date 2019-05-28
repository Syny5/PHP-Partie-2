<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 4</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 2 - Exercice 4</h1>
                <p class="lead">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
                    Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $magnitude = 6;
              // Switch case est une autre manière de gérer les conditions, plus pratique quand celles-ci sont nombreuses.
              switch ($magnitude){
                case 1 : echo 'Micro-séisme impossible à ressentir.';
                break;
                case 2 : echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                break;
                case 3 : echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                break;
                case 4 : echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                break;
                case 5 : echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                break;
                case 6 : echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                break;
                case 7 : echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                break;
                case 8 : echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                break;
                case 9 : echo 'Séisme capable de tout détruire sur une très vaste zone.';
                break;
              }
             ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
