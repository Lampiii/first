<!DOCTYPE html>
<html lang="en">

<html>

<body>

<h1>Sheeesh to dank boi</h1>

<?php

  $name = 'Jannik Lamprecht';
  $ort = 'Hettlingen bei Winterthur';
  $alter = '17';
  $hobby = 'rap';
  $kollegen[] = 'Puscel';
  $kollegen[] = 'DVD';
  $kollegen[] = 'Cedurec';

  print_r($kollegen);

  echo '<br>';

  $array = array("name" => "Michi", "vorname" => "Grind");

  var_dump($array);

  echo '<br>';
  echo '<br>';

  $satz = 'Hallo ich heisse ' . $name . ' und bin ' . $alter . ' Jahre alt.' .
  '</br> Ich lebe in ' . $ort . ' und mein Hobby ist ' . $hobby . '.' .
  '</br> \'Ich bin in Hochkommas gesetzt\'';

  echo $satz;

  echo '<br>';

  $counter = 0;
  for($counter; $counter <= 10; $counter++){
    if($counter == 5 || $counter == 6){
    echo '<p>' . $counter . '</p>';
  } else{
    echo '<p>420 blaze it</p>';
  }
  }

foreach($kollegen as $nr => $kollege){
  echo "<br>Kollege " . $nr . " ist " . $kollege;
}


 ?>

</body>

</html>
