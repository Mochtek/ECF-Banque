<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=" description "  content="">

  <link rel="stylesheet" href="../bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../CSS/style.css">
  <title>Ma banque en ligne</title>
</head>
<body>
<?php
  require_once '../Ressources/helpers.php';

  session_start();
  check_user_session();

?>
  <header class="container-fluid">
    <div class="row">
      <div class="col-4 logo"></div>
      <div class="col-8">
        <div class="row identifiants">         
          <?php echo '<p><b>Utilisateur :</b> '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'</p>'; ?> 
        </div>
        <div class="row identifiants">         
          <?php echo '<p><b>Identifiant bancaire :</b> '.$_SESSION['BankID'].'</p>'; ?>  
        </div>
      </div>
    </div>
    <div class="row navbar position">
      <nav class="col d-flex navbar navbar-dark navbar-expand-sm ">
        <div class="container-fluid ">
          <a class="navbar-brand" href=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav nav-justified w-100 ">
              <a class="nav-link"href="../User_connected/index.php">Retour</a>
            </div>
          </div>    
        </div>
      </nav>
    </div>
  </header>
  <main class="container-fluid">
    <div class="row position d-block">
      <h1>Ajouter un Bénéficiaire</h1>
      <form method = "POST" action ="add_beneficiary.php">

      <label for="first_name">Indiquez le prénom du bénéficiaire</label>
      <input class="form-size" type="text" name="first_name" id="first_name" placeholder="Prenom" required>

      <label for="last_name">Indiquez le nom de famille du bénéficiaire</label>
      <input class="form-size" type="text" name="last_name" id="last_name" placeholder="Nom de famille"required>

      <label for="BankID">Indiquez l'identifiant bancaire du bénéficiaire</label>
      <input class="form-size" type="text" name="BankID" id="BankID" placeholder="Identifiant a 10 caractères"required>

      <button class="btn btn-info" type="submit">Valider l'inscription</button>

      </form>
      <?php
      if (array_key_exists('error', $_GET)) {
          if ('id_exists' == $_GET['error']) {?>
              <p class="error"> <br>Ce bénéficiaire a déja été ajouté</p>
          <?php
          }
      }
      ?>
            <?php
      if (array_key_exists('error', $_GET)) {
          if ('BankID_doesn\'t_exists' == $_GET['error']) {?>
              <p class="error"> <br>L'identifiant bancaire saisi ne correspond a aucun utilisateur existant</p>
          <?php
          }
      }
      ?>
    </div>
  </main>
  <footer class="container-fluid">
    <div class="row position">
      <p>Tous droits reservés</p>
    </div>
  </footer>
</body>
</html>


          

