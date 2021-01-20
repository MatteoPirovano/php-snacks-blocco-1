<?php
  /*
  Passare come parametri GET name, mail e age e
  verificare (cercando i metodi che non
  conosciamo nella documentazione) che:
  1. name sia più lungo di 3 caratteri,
  2. mail contenga un punto e una chiocciola
  3. age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti
  “Accesso negato”.
  */
  $name = $_GET["name"];
  $email = $_GET["mail"];
  $age = $_GET["age"];

  if (empty($name) && empty($email) && empty($age)) {
     $message= "Accesso negato";
  } else {
     if (strlen($name) >=4 && strpos($email, "@") !== false && strpos($email, ".") !== false && is_numeric($age)){
     $message= "Accesso consentito";
    } else {
    $message= "Accesso negato";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $message ?></p>
  </body>
</html>
