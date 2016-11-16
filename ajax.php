<?php
  $name = $_POST['Name'];
  $farbe = $_POST['Farbe'];
  $bauart = $_POST['bauart'];

  //print_r($_POST);
  if(!empty($name)){
    echo true;
  } else {
    echo false;
  }

 ?>
