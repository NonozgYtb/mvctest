<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rencontre Parent-Prof</title>

  <link rel="stylesheet" href="/prof.css">

</head>

<body>

  <div class="p-a t0 navbar navbar-dark bg-cyan box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Parent-Prof</strong>
      </a>
    </div>
  </div>

  <div class="container rounded p-3">
    <div class="row m-0">

      <div class="col-12 col-sm-6 text-center font-weight-bold color-white bg-teal mb-sm-3">Papa</div>
      <div class="col-12 col-sm-6 text-center font-weight-bold color-white bg-purple mb-3">Maman</div>

      <?php
      $hosturl = "localhost";
      $bddname = "parents";
      $tablename = "parents";
      $orderby = "heures";
      $username = "root";
      $userpswd = "";
      $pass = "mysql:host=" . $hosturl . ";dbname=" . $bddname . ";charset=utf8";

      try {
        $bdd = new PDO($pass, $username, $userpswd);
        $response = $bdd->query("SELECT * FROM `" . $tablename . "` ORDER BY `" . $tablename . "`.`" . $orderby . "` ASC");
        while ($donnees = $response->fetch()) {
          $isRight = ((int)$donnees['color']);
      ?>
          <?= ($isRight) ? '<div class="col-12 col-sm-4"></div>' : "" ?>
          <div class="period col-12 col-sm-8 <?= ($isRight) ? "r" : "l" ?>">
            <div class="row">
              <div class="text-center order-1 <?= ($isRight) ? "order-md-6" : ""?> col-12 col-md-2 align-self-center font-weight-bold"><span class="my-auto"><?= substr_replace($donnees['heures'], ':', 2, 0) ?></span></div>
              <div class="text-center order-2 <?= ($isRight) ? "order-md-5" : ""?> col-12 col-sm-4 col-md-4 align-self-center"><span class="my-auto"><?= $donnees['matiere'] ?></span></div>
              <div class="text-center order-3 col-12 col-sm-4 col-md-2 align-self-center"><span class="my-auto"><?= $donnees['salle'] ?></span></div>
              <div class="text-center order-4 col-12 col-sm-4 col-md-4 align-self-center"><span class="my-auto"><?= $donnees['prof'] ?></span></div>
            </div>
          </div>
          <?= (!$isRight) ? '<div class="col-12 col-sm-4"></div>' : "" ?>
      <?php
        }
        $response->closeCursor();
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }; ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>