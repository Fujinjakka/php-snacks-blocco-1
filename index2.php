<!--PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”. -->

<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $name_access = false;
  $mail_access = false;
  $age_access = false;
  $final_message = "Accesso negato";


  $message = "hai scelto la parola: ";

  echo $message . $name;

  if (strlen($name) < 3) {
    $name_message = "nome troppo piccolo";
    $name_access = false;
  } else {
    $name_message2 = "nome OK";
    $name_access = true;
  }
  if (strpos($mail, "@") == false || strpos($mail, ".") == false) {
    $mail_message = "email sbagliata";
    $mail_access = false;
  } else {
    $mail_message2 = "email OK";
    $mail_access = true;
  }
  if (is_numeric($age)) {
    $age_message = "eta OK";
    $age_access = true;
  } else {
    $age_message2 = "eta deve essere un numero";
    $age_access = false;
  }

  if ($name_access = true && $mail_access = true && $age_access = true) {
    $final_message = "Accesso riuscito";
  } else {
    $final_message = "Accesso negato";
  }


  echo $name_message;
  echo $name_message2;
  echo $mail_message;
  echo $mail_message2;
  echo $age_message;
  echo $age_message2;
  echo $final_message;




?>
