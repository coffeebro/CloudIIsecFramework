<?php

include("PHPAuth/languages/en_GB.php");
include("PHPAuth/Config.php");
include("PHPAuth/Auth.php");

$dbh = new PDO( "mysql:host=localhost;dbname=FSOFT_elements", "root", "" );
$stages = intval($_POST['stages']);
for($i = 1; $i <= $stages; $i++)
{
		$stage = $i;
		$ac = empty($_POST['stage'.$stage.'0']) ? NULL : $_POST['stage'.$stage.'0'];
		$au = empty($_POST['stage'.$stage.'1']) ? NULL : $_POST['stage'.$stage.'1'];
		$ca = empty($_POST['stage'.$stage.'2']) ? NULL : $_POST['stage'.$stage.'2'];
		$ia = empty($_POST['stage'.$stage.'3']) ? NULL : $_POST['stage'.$stage.'3'];
		$sa = empty($_POST['stage'.$stage.'4']) ? NULL : $_POST['stage'.$stage.'4'];
		$sc = empty($_POST['stage'.$stage.'5']) ? NULL : $_POST['stage'.$stage.'5'];
		$si = empty($_POST['stage'.$stage.'6']) ? NULL : $_POST['stage'.$stage.'6'];
		$at = empty($_POST['stage'.$stage.'7']) ? NULL : $_POST['stage'.$stage.'7'];
		$cm = empty($_POST['stage'.$stage.'8']) ? NULL : $_POST['stage'.$stage.'8'];
		$cp = empty($_POST['stage'.$stage.'9']) ? NULL : $_POST['stage'.$stage.'9'];
		$ir = empty($_POST['stage'.$stage.'10']) ? NULL : $_POST['stage'.$stage.'10'];
		$ma = empty($_POST['stage'.$stage.'11']) ? NULL : $_POST['stage'.$stage.'11'];
		$mp = empty($_POST['stage'.$stage.'12']) ? NULL : $_POST['stage'.$stage.'12'];
		$pe = empty($_POST['stage'.$stage.'13']) ? NULL : $_POST['stage'.$stage.'13'];
		$pl = empty($_POST['stage'.$stage.'14']) ? NULL : $_POST['stage'.$stage.'14'];
		$pm = empty($_POST['stage'.$stage.'15']) ? NULL : $_POST['stage'.$stage.'15'];
		$ps = empty($_POST['stage'.$stage.'16']) ? NULL : $_POST['stage'.$stage.'16'];
		$ra = empty($_POST['stage'.$stage.'17']) ? NULL : $_POST['stage'.$stage.'17'];
		$sql = "INSERT INTO sspec (name, workflow, stage, ac, au, ca, ia, sa, sc, si, at, cm, cp, ir, ma, mp, pe, pl, pm, ps, ra) VALUES ('".$_POST['sspec']."', '".$_POST['workflow']."', '".$stage."', '".$ac."', '".$au."', '".$ca."', '".$ia."', '".$sa."', '".$sc."', '".$si."', '".$at."', '".$cm."', '".$cp."', '".$ir."', '".$ma."', '".$mp."', '".$pe."', '".$pl."', '".$pm."', '".$ps."', '".$ra."')";
		$sth = $dbh->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Federated Security Framework Create Sspec</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
  </head>
  <body>
    <!-- page content -->

    <div>
      <?php
      	echo 'Sspec Added<br>';
        echo '<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=\'home.php\'"><span class="ui-button-text">Return Home</span></button>';
      ?>
    </div>

  </body>
</html>
