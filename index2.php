<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // includo il database dei giochi
      include 'gameslist.php';

      // includo la funzione stampa e tramite ciclo stampo i valori delle chiavi del database
      include 'stampa.php';
      foreach ($games as $key => $game) {
        stampa($key, $game);
      }
    ?>
  </body>
</html>
