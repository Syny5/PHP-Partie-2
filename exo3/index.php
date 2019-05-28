<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 3</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 2 - Exercice 3</h1>
                <p class="lead">Créer deux variables age et gender. La variable gender peut prendre comme valeur :
                  Homme
                  Femme
                  En fonction de l'âge et du genre afficher la phrase correspondante :

                  Vous êtes un homme et vous êtes majeur
                  Vous êtes un homme et vous êtes mineur
                  Vous êtes une femme et vous êtes majeur
                  Vous êtes une femme et vous êtes mineur
                  Gérer tous les cas.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $age = 20;
              $gender = true;
              if($age >= 18 && $gender){
                echo 'Vous êtes un homme et vous êtes majeur.';
              }
              elseif($age < 18 && $gender){
                echo 'Vous êtes un homme et vous êtes mineur.';
              }
              elseif($age >= 18 && !$gender){
                echo 'Vous êtes une femme et vous êtes majeure.';
              }
              else{
                echo 'Vous êtes une femme et vous êtes mineure.';
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
