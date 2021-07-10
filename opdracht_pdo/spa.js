function lees_uit() {
  $.getJSON("lezen.php")
    .done(function(data) {
      var output = "<table>";

      for (var i in data) {
        var titel = data[i].Title;
        var id = data[i].thing_ID;
        var betekenis = data[i].Meaning;
        var ezel = data[i].Mnemonic;

        //voor verwijderen
        $('#data_id').attr('value', id);
        $('#data').attr('value', titel);

        //voor aanpassen
        $('#aanpas_titel').attr('value', titel);
        $('#aanpas_betekenis').attr('value', betekenis);
        $('#aanpas_ezel').attr('value', ezel);
        $('#aanpas_id').attr('value', id);

        output += "<tr><td><h2>" + titel + "</h2><br></td></tr>";
        output += "<tr><td>" + betekenis + "</td></tr>";
        output += "<tr><td>" + ezel + "</td></tr>";
        output += "<tr><td><button type='button' id='modal_button' class='btn btn-light' data-toggle='modal' data-target='#modal_verwijder" + id + "'>Verwijder</button>";
        output += "</td><td><button type='button' id='modal_button' class='btn btn-light' data-toggle='modal' data-target='#modal_aanpas" + id + "'>Aanpassen</button></td></tr>";

        //cloned the modals voor alle items in het lijstje
        //het is eigenlijk heel langzaam maar het werkt.
        $("#modal_aanpas").clone().appendTo(".container").attr('id', 'modal_aanpas' + id);
        $("#modal_verwijder").clone().appendTo(".container").attr('id', 'modal_verwijder' + id);

      }

      output += "</table>";
      $('#hierinfo').html(output);
    })
    .fail(function() {
      $('#hierinfo').text("AJAX request is mislukt!");
    })
    .always(function() {
      console.log("AJAX request is klaar!");
    });
}
$(document).ready(function() {
  lees_uit();

  $("#toevoegen_knop").click(function() {
    var titel = $("#invoer_titel").val();
    var betekenis = $("#invoer_betekenis").val();
    var ezelbrug = $("#invoer_ezel").val();

    $.ajax({
      url: "toevoegen.php",
      method: "POST",
      data: {
        'titel': titel,
        'betekenis': betekenis,
        'ezelbrug': ezelbrug
      }
    })
      .done(function(data) {
        if (data == "OK") {
          lees_uit();
          $("#resultaat").text("Gelukt");
        } else {
          $("#resultaat").text("Er is iets fout gegaan");
        }
      })
      .fail(function() {
        $('#resultaat').text("AJAX request is mislukt!");
      });
  });
  $("#verwijder_knop").click(function() {
    var post_id = $("#data_id").val();

    $.ajax({
      url: "delete.php",
      method: "POST",
      data: {
        'post_id': post_id,
      }
    })
      .done(function(data) {
        if (data == "OK") {
          lees_uit();
          $("#resultaat").text("Gelukt");
        } else {
          $("#resultaat").text("Er is iets fout gegaan");
        }
      })
      .fail(function() {
        $('#resultaat').text("AJAX request is mislukt!");
      });
  });
  $("#bewerk_knop").click(function() {
    var titel_aanpas = $("#aanpas_titel").val();
    var betekenis_aanpas = $("#aanpas_betekenis").val();
    var ezelbrug_aanpas = $("#aanpas_ezel").val();
    var id_aanpas = $("#aanpas_id").val();

    $.ajax({
      url: "aanpas.php",
      method: "POST",
      data: {
        'titel_aanpas': titel_aanpas,
        'betekenis_aanpas': betekenis_aanpas,
        'ezelbrug_aanpas': ezelbrug_aanpas,
        'id_aanpas': id_aanpas
      }
    })
      .done(function(data) {
        if (data == "OK") {
          lees_uit();
          $("#resultaat").text("Gelukt");
        } else {
          $("#resultaat").text("Er is iets fout gegaan");
        }
      })
      .fail(function() {
        $('#resultaat').text("AJAX request is mislukt!");
      });
  });
});
