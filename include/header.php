<img src="../img/header-min.jpg" title="Pflegedienst Schal & Ke" id="header"/>
<nav>
  <button id="menuControl" class="fa fa-bars"> </button>
  <ul id="nav">
      <li><a href="?page=home">Home</a></li>
      <li><a href="?page=about">Über uns</a></li>
      <li><a href="?page=service">Leistungen</a></li>
      <li><a href="?page=application">Bewerbung</a></li>
      <li><a href="?page=arrival">Anfahrt</a></li>
  </ul>
</nav>
<script>
  $( document ).ready(function() {
    var url = window.location.href;
    var page = url.substr(url.lastIndexOf('/')+1);
    $('#nav li a[href*="'+page+'"]').closest('li').addClass('active');
    page = page.split("=");
    $('title').text("Pflegedienst Schal & Ke - "+page[1]);
  });
</script>
