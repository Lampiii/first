<?php

  //Klassen

  //echo $_SERVER['PHP_SELF'];

  class Auto{
    private $color;               //schwarz weiss silber
    private $treibstoff;               //Diesel Benzin
    private $bauart;          //Cabrio Limousine Kombi
    private $betankungen = 0;
    private $auto;




    public function openTankdeckel($auto){


      $this->betankungen++;
      $this->auto = $auto;
      echo '<h1>Anzahl Betankungen vom ' . $this->auto . ': ' . $this->betankungen . '<br></h1>';

      if(isset($_SESSION['betankungen'])){
        $_SESSION['betankungen']++;
      } else{
        $_SESSION['betankungen'] = 1;
      }

    }

    public function setColor($color){

      $this->color = $color;
      echo 'Die Farbe des Autos ist: ' . $this->color . '<br>';

    }

    public function setBauart($bauart){

      $this->bauart = $bauart;
      echo 'Die Bauart des Autos ist: ' . $this->bauart . '<br>';

    }

    public function setTreibstoff($treibstoff){

      $this->treibstoff = $treibstoff;
      echo 'Der Treibstoff des Autos ist: ' . $this->treibstoff . '<br>';

    }

    public function getGesamtOefnungen(){

      echo 'Der Tankdeckel wurde insgesamt ' . $_SESSION['betankungen'] . ' geöffnet. <br>';

    }

  }

?>
