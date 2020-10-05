<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
  </head>
  <body>
    <?php

    $results = "";
      $matches = [
        ["milano", 90, "verona", 110],
        ["bologna", 95, "cagliari", 81],
        ["roma", 88, "venezia", 102],
        ["sassari", 104, "perugia", 87],
        ["napoli", 78, "firenze", 92]
      ];

      $team = "";
      $result = 0;
      for ($i=0; $i<=4; $i++) {
         $team .= $matches[$i][0];
      }
      echo $team;
    ?>

    <ul>

    </ul>

  </body>
</html>
