<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  	<title>Pflegedienst Schal & Ke Admininterface</title>
  	<link rel="stylesheet" type="text/css" media="screen" href="css/admin.css?v=1" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <header>
        <?php include("include/header.php") ?>
      </header>
      <main>
        <div class="flex-container">
          <div class='flex-item'>
            <h3>Menü</h3>
            <nav>
              <ul id="nav">
                  <?php
                    if(!isset($_SESSION['userid'])) {
                      echo '<li><a href="#" class="active">Login</span></a></li>';
                    }else{
                      echo '
                      <li><a href="?page=main">Statistiken</a></li>
                      <li><span>Bewerbungen</span></li>
                      <li><a href="?page=new">&nbsp;&nbsp;&nbsp;> Unbearbeitet</a></li>
                      <li><a href="?page=approved">&nbsp;&nbsp;&nbsp;> Angenommen</a></li>
                      <li><a href="?page=denied">&nbsp;&nbsp;&nbsp;> Abgelehnt</a></li>
                      <li><span>Benutzer</span></li>
                      <li><a href="?page=newuser">&nbsp;&nbsp;&nbsp;> Benutzer anlegen</a></li>
                      <li><a href="?page=listuser">&nbsp;&nbsp;&nbsp;> Benutzer ausgeben</a></li>
                      <li><a href="?page=logout">Logout</a></li>
                      ';
                    }
                  ?>
              </ul>
            </nav>
          </div>
          <div class='flex-item'>
            <div id="main">
              <?php
                if(!isset($_SESSION['userid'])) {
                  include("include/login.php");
                }else{
                  if(isset($_GET["page"])){
                    switch($_GET["page"]){
                      case 'newuser':
                        include("include/register.php");
                        break;
                      case 'listuser':
                        include("include/listuser.php");
                        break;
                      case 'new':
                        include("include/new.php");
                        break;
                      case 'approved':
                        include("include/approved.php");
                        break;
                      case 'denied':
                        include("include/denied.php");
                        break;
                      case 'logout':
                        include("include/logout.php");
                        break;
                      default:
                        include("include/main.php");
                    }
                  }else{
                    include("include/main.php");
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </main>
      <footer>
        <?php include("include/footer.php") ?>
      </footer>
    </div>
  </body>
</html>
