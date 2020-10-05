<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>

    <?php
    $nome = "marco";
    $mail = "marco@hotmail.com";
    $anni = 64;

    $result = "";
    if (!empty($nome) && !empty($mail) && !empty($anni)) {
        if (nome($nome) && mail($mail)) {
            $result = $nome." ".$mail." ".$anni;
        } else {
            $result = "SBAGLIATO";
        }
        //echo $result;
    }

    function nome($testo) {
      $bool = false;
      if (strlen($testo) > 3) {
        $bool = true;
      } elseif (strlen($testo) <= 3) {
        $bool = false;
      }
      return $bool;
    }

    function mail($testo_mail) {
      $bool = false;
      if (strpos($testo_mail, ".") && strpos($testo_mail, "@")) {
        $bool = true;
      } else {
        $bool = false;
      }
      return $bool;
    }

    //function mail
    ?>

    <h2><?php echo $result ?></h2>


  </body>
</html>
