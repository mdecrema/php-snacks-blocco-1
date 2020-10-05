<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
  </head>
  <body>
    <?php

      $matches = [
        ["milano", 90, "verona", 110],
        ["bologna", 95, "cagliari", 81],
        ["roma", 88, "venezia", 102],
        ["sassari", 104, "perugia", 87],
        ["napoli", 78, "firenze", 92]
      ];

      $result = "";
      for ($i=0; $i<=4; $i++) {
         $result .= "<li>".$matches[$i][0]." - ".$matches[$i][2]." | ".$matches[$i][1]." - ".$matches[$i][3]."</li>";
      }

    ?>

    <ul>
      <?php echo $result ?>
    </ul>

  </body>
</html>
