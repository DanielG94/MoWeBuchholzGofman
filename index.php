<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  	<title>Pflegedienst Schal & Ke</title>
  	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div id="wrap">
      <header>
        <?php include("include/header.php") ?>
      </header>
      <main>
        <?php
          if(isset($_GET["page"])){
            switch($_GET["page"]){
              case "main":
                include("include/main.php");
              break;
              case "about":
                include("include/about.php");
              break;
              case "service":
                include("include/service.php");
              break;
              case "application":
                include("include/application.php");
              break;
              case "arrival":
                include("include/arrival.php");
              break;
              default:
                include("include/main.php");
            }
          }else{
            include("include/main.php");
          }
        ?>
      </main>
      <footer>
        <?php include("include/footer.php") ?>
      </footer>
    </div>
  </body>
</html>
