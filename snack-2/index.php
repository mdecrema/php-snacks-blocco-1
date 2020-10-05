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
    if (!empty($nome)) {
      $result .= $nome;
    }

    ?>

    <h2><?php echo $result ?></h2>


  </body>
</html>
