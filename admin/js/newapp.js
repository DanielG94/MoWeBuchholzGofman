$( document ).ready(function() {
  $.getJSON("functions/fetchApps.php?type=new", function(result){
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
          "<tr>"+
            "<td><button type='button' data-id='"+field['application_id']+"' class='approve'><i class='fa fa-check'></i></button></td>"+
            "<td><button type='button' data-id='"+field['application_id']+"' class='deny'><i class='fa fa-times'></i></button></td>"+
          "</tr>"+
          "</table>"
          );
      });
  });
  $(document).on( "click", ".approve", function(){
    var element = $(this);
    $.post("functions/proccessApplication.php",
    {
        id: $(this).data("id"),
        approved: true
    },
    function(data, status){
      if(data=="Success"){
        element.closest("table").remove();
      }
      console.log("Data: " + data + "\nStatus: " + status);
    });

  });
  $(document).on( "click", ".deny", function(){
    var element = $(this);
    $.post("functions/proccessApplication.php",
    {
        id: $(this).data("id"),
        approved: false
    },
    function(data, status){
      if(data=="Success"){
        element.closest("table").remove();
      }
      console.log("Data: " + data + "\nStatus: " + status);
    });

  });
});
