<!DOCTYPE html>
<html>

<head>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="javascript.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <style>
  body { font-family: Shrikhand}
  </style>

</head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="GET">
            <br>
            <div class="form-group">
              <label for="Name">Name</label>
                <input required class="form-control" id="Name" type="text" name="Name" value="" placeholder ="Bitte den Namen eingeben">
            </div>
            <div class="form-group">
              <label for="Farbe">Farbe</label>
                <input required class="form-control" id="Farbe" type="color" name="Farbe" value="#f5f5f5" placeholder ="Bitte die Farbe eingeben">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
                <input required class="form-control" id="email" type="email" name="Email" value="" placeholder ="Bitte Ihre Email eingeben">
            </div>
            <div class="form-group">
              <label for="Bauart">Bauart</label>
                <select required class="form-control" type="text" name="Bauart">
                <option value="cabrio" selected>Cabrio</option>
                <option value="limousine">Limousine</option>
                <option value="Kombi">Kombi</option></select>
            </div>

            <button type="submit" class="btn btn-default"><i class="fa fa-handshake-o" aria-hidden="true"></i>
              &nbsp;&nbsp;
              Absenden</button>

              <button onclick="firstFunc()" type="button" class="btn btn-default"><i class="fa fa-bath" aria-hidden="true"></i>
                &nbsp;&nbsp; Sheeesh</button>


          </form>

        </div>
        <div id="ergebnis" class="hidden"></div>


    <?php

    session_start();


      include('classes.php');

    /*  if(isset($_GET['Name'])){
        print_r($_GET['Name']);
      } else{
        echo 'Bitte Namen eingeben';
      }*/

      if(!empty($_GET['Name'])){
        $name = trim($_GET['Name']);
        echo '<h1><br>Ihre Eingaben</h1>';
        echo '<br>Der Name lautet: ' . $name;
      }

      if(!empty($_GET['Farbe'])){
        $farbe = $_GET['Farbe'];
        echo '<br>Die Farbe lautet: ' . $farbe;
      }

      if(!empty($_GET['Email'])){
        $email = $_GET['Email'];
        echo '<br>Ihre Email lautet: ' . $email;
      }

      if(!empty($_GET['Bauart'])){
        $bauart = $_GET['Bauart'];
        echo '<br>Die Bauart lautet: ' . $bauart;
      }

/*
    //Get Variablen zwischenspeichern
      print_r($_GET['Name']);
      print_r($_GET['Farbe']);
      print_r($_GET['Email']);
      print_r($_GET['Bauart']);*/

      $golf = new Auto;
      echo '<h1> Fahrzeugdaten vom Golf </h1>';
      $golf->setColor('Schwarz');
      $golf->setTreibstoff('Diesel');
      $golf->setBauart('Kombi');

      $golf->openTankdeckel('Golf');
      $golf->openTankdeckel('Golf');
      $golf->openTankdeckel('Golf');

      $lambo = new Auto;
      echo '<h1> Fahrzeugdaten vom Lambo </h1>';
      $lambo->setColor('Orange');
      $lambo->setTreibstoff('Benzin');
      $lambo->setBauart('Sportwagen');

      $lambo->openTankdeckel('Lambo');
      $lambo->openTankdeckel('Lambo');
      $lambo->openTankdeckel('Lambo');

      $lambo->getGesamtOefnungen();

    ?>



  </div>
    </div>
      </div>

  </body>
</html>
