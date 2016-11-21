<img src="../img/header.png" title="Pflegedienst Schal & Ke" id="header"/>
<nav>
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
  });
</script>
