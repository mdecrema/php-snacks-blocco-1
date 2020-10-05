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
        if (nome($nome)) {
            $result = $nome." ".$mail." ".$anni;
        } else if (nome($nome) == false) {
            $result = "SBAGLIATO";
        }
        echo $result;
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

    //function mail
    ?>

    <h2><?php echo $result ?></h2>


  </body>
</html>
