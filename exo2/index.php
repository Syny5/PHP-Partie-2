<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 2</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 2 - Exercice 2</h1>
                <p class="lead">Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
                Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
                Bonus : L'écrire de deux manières différentes.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
            $isEasy = true;
            if ($isEasy){
              echo 'C\'est facile !!';
            }
            else{
              echo 'C\'est difficile !!!';
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
