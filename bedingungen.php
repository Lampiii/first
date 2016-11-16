<!DOCTYPE html>
<html>

  <body>
    <h1>Tageszeit<h1>
    <?php

    date_default_timezone_set("Europe/Berlin");
    $timestamp = time();

    $uhrzeit = date("H.i",$timestamp);

    $uhrzeit = 7.30;

    if($uhrzeit < 11.00)
    {
      echo "Guten Morgen, es ist ".number_format($uhrzeit,2);
    }
    else if($uhrzeit < 16.00)
    {
      echo "Guten Tag, es ist "."$uhrzeit";
    }
    else
    {
      echo "Guten Abend, es ist "."$uhrzeit";
    }

    ?>
  </body>
</html>
