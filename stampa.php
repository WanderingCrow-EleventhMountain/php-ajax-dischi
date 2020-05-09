<?php
  function stampa($key, $valore){
    echo "<div><h2>" . $valore['name'] . "</h2></div>";
    echo "<div><h3>" . $valore['author'] . "</h3></div>";
    echo "<div><i>" . $valore['year'] . "</i></div>";
    echo "<div><img src='".$valore['poster']."' alt=''></div>";
    echo "<br><br>";
  }
 ?>
