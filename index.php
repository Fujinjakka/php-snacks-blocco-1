<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php

  $daymatches = [
    "game1" => [
      "home" => "Toronto Raptors",
      "guest" => "Dallas Mavericks",
      "home_point" => "116",
      "guest_point" => "93",
    ],
    "game2" => [
      "home" => "Miami Heat",
      "guest" => "Detroit Pistons",
      "home_point" => "113",
      "guest_point" => "107",
    ],
    "game3" => [
      "home" => "Chicago Bulls",
      "guest" => "Houston Rockets",
      "home_point" => "125",
      "guest_point" => "120",
    ],
    "game4" => [
      "home" => "Los Angeles Lakers",
      "guest" => "Golden State Warriors",
      "home_point" => "113",
      "guest_point" => "115",
    ],
  ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Calendario NBA</title>
  </head>
  <body>
    <div id="container">
      <h1>NBA calendario giornata 19/01/2021</h1>
      <div class="result">
        <div class="home">
          <img src="img/toronto.jpg" alt="logo">
          <p id="home_team"><?php echo $daymatches[game1][home] ?></p>
          <p id="home_score"><?php echo $daymatches[game1][home_point] ?></p>
        </div>
        <div class="guest">
          <p id="guest_score"><?php echo $daymatches[game1][guest_point] ?></p>
          <p id="guest_team"><?php echo $daymatches[game1][guest] ?></p>
          <img src="img/dallas.jpg" alt="logo">
        </div>
      </div>
      <div class="result">
        <div class="home">
          <img src="img/miami.jpg" alt="logo">
          <p id="home_team"><?php echo $daymatches[game2][home] ?></p>
          <p id="home_score"><?php echo $daymatches[game2][home_point] ?></p>
        </div>
        <div class="guest">
          <p id="guest_score"><?php echo $daymatches[game2][guest_point] ?></p>
          <p id="guest_team"><?php echo $daymatches[game2][guest] ?></p>
          <img src="img/detroit.png" alt="logo">
        </div>
      </div>
      <div class="result">
        <div class="home">
          <img src="img/chicago.png" alt="logo">
          <p id="home_team"><?php echo $daymatches[game3][home] ?></p>
          <p id="home_score"><?php echo $daymatches[game3][home_point] ?></p>
        </div>
        <div class="guest">
          <p id="guest_score"><?php echo $daymatches[game3][guest_point] ?></p>
          <p id="guest_team"><?php echo $daymatches[game3][guest] ?></p>
          <img src="img/houston.png" alt="logo">
        </div>
      </div>
      <div class="result">
        <div class="home">
          <img src="img/lakers.png" alt="logo">
          <p id="home_team"><?php echo $daymatches[game4][home] ?></p>
          <p id="home_score"><?php echo $daymatches[game4][home_point] ?></p>
        </div>
        <div class="guest">
          <p id="guest_score"><?php echo $daymatches[game4][guest_point] ?></p>
          <p id="guest_team"><?php echo $daymatches[game4][guest] ?></p>
          <img src="img/goldenstate.png" alt="logo">
        </div>
      </div>
    </div>
  </body>
</html>
