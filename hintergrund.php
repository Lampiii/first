<!DOCTYPE html>
<html>

<head>
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
              <label for="farbe">Hintergrundfarbe</label>
                <select required class="form-control" type="text" name="farbe">
                <option value="rot" selected>Rot</option>
                <option value="blau">Blau</option>
                <option value="grün">Grün</option></select>
            </div>

            <button type="submit" class="btn btn-default"></i>
              &nbsp;&nbsp;
              Bestätitgen</button>

          </form>
        </div>

    <?php

      if($_GET['farbe'] == 'Rot'){
        echo "<body style=\"background-color:	#FF0000; \">";
      }elseif($_GET['farbe'] == 'Blau'){
        echo "<body style=\"background-color:	#0000FF; \">";
      } else{
        echo "<body style=\"background-color:	#00FF00; \">";
      }

    ?>



  </div>
    </div>
      </div>

  </body>
</html>
