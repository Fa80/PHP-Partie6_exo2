<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie6_Exo2</title>
</head>
<body>
  <?php
  //Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :
  // index.php?lastname=Nemare&firstname=Jean
  ?>
  <a href="index.php?lastname=Nemare&firstname=Jean&age=17">Envoi Info dans l'URL</a>
  <?php
  if (isset($_GET['lastname'])){
    //isset — Détermine si une variable est définie et est différente de NULL
    ?>
    <p><?php echo 'Le nom de famille est défini' . ' ' . $_GET['lastname']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre nom de famille n'est pas présent dans l'URL</p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['firstname'])){
    ?>
    <p><?php echo 'Le prénom est défini' . ' ' . $_GET['firstname']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre prénom  n'est pas présent dans l'URL</p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['age'])){
    ?>
    <p><?php echo 'L\'age est défini' . ' ' . $_GET['age']; ?></p>
    <?php
  }else{
    ?>
    <p>Le paramétre age  n'est pas présent dans l'URL</p>
    <?php
    }
?>
</body>
</html>
