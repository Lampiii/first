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

            <table class="table table-striped table-bordered">
              <thead><tr><th>Gerade</th><th>Ungerade</th></tr></thead>

    <?php

    function geradeUngerade(){

      $ausgabe = '';

      for($zahl = 0; $zahl < 20; $zahl++){
        if($zahl % 2 == 0){
          $ausgabe .= '<tr><td class=""></i>&nbsp;&nbsp;' . $zahl . '</td>';
        } else{
          $ausgabe .= '<td class=""></i>&nbsp;&nbsp;' . $zahl . '</td></tr>';
        }
      }

      echo $ausgabe;
    }

    geradeUngerade();

    ?>

  </table>

  </div>
    </div>
      </div>

  </body>
</html>
