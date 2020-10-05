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
        "match_1" => [
          "milano" => 90,
          "verona" => 110
        ],
        "match_2" => [
          "bologna" => 95,
          "cagliari" => 81
        ],
        "match_3" => [
          "roma" => 88,
          "venezia" => 102
        ],
        "match_4" => [
          "sassari" => 104,
          "perugia" => 87
        ],
        "match_5" => [
          "napoli" => 78,
          "firenze" => 92
        ]
      ];


      echo key($matches);
      //return $results;
    ?>


  </body>
</html>
