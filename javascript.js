function firstFunc(){
  console.log('Applikation initialisiert...');
  //console.error('Achtung!!');
  //console.warn('Warnung!!');
  var name = $('#Name').val();
  var farbe = $('#Farbe').val();
  var bauart = $('#bauart').val();
  var html ='<ul>\
                <li>Name: ' + name + '</li>\
                <li>Farbe: ' + farbe + '</li>\
                <li>Bauart: ' + bauart + '</li>\
              </ul>';

  $('#name').val('Lambo');

  $('#ergebnis').html(html).fadeIn(800).removeClass('hidden');

  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: {name: Name, farbe: Farbe, bauart: bauart},
    dataType: "JSON",
    success: function(response) {
      console.log(response);
    }
  });

/*
  console.log(name);
  console.log(kraftstoff);
  console.log(bauart);*/
}
