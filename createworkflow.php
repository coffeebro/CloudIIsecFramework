<?php

include("PHPAuth/languages/en_GB.php");
include("PHPAuth/Config.php");
include("PHPAuth/Auth.php");

$dbh = new PDO( "mysql:host=localhost;dbname=FSOFT_elements", "root", "" );
$sql = "INSERT INTO workflows (wid, name, application, stages, origin, public) VALUES ('null', '".$_POST['name']."', '".$_POST['application']."', '".$_POST['stages']."', '".$_POST['origin']."', '".$_POST['public']."')";
//		$i = 1;
$sth = $dbh->query($sql);
echo $sql;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Federated Security Framework Registration Portal</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
  </head>
  <body>
    <!-- page content -->

    <div>
      <?php
        echo '<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=\'home.php\'"><span class="ui-button-text">Home</span></button>';
      ?>
    </div>

  </body>
</html>
