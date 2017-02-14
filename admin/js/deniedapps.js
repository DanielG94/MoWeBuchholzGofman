$.getJSON("functions/fetchApps.php?type=no", function(result){
    if(result == ""){
      $("#apps").text("Keine Einträge");
    }
    $.each(result, function(i, field){
        $("#apps").append(
        "<table class='application'>"+
        "<tr>"+
          "<th>Name</th>"+
          "<td>"+field['prename']+" "+field['surname']+"</td>"+
        "</tr>"+
        "<tr>"+
          "<th>E-Mail</th>"+
          "<td>"+field['email']+"</td>"+
        "</tr>"+
        "<tr>"+
          "<th>Telefon</th>"+
          "<td>"+field['phone']+"</td>"+
        "</tr>"+
        "<tr>"+
          "<th>Bewerbungsdatum</th>"+
          "<td>"+field['application_date']+"</td>"+
        "</tr>"+
        "<tr>"+
          "<th>Bewerbungstext</th>"+
          "<td>"+field['application']+"</td>"+
        "</tr>"+
        "</table>"
        );
    });
});
