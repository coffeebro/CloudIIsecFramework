<?php

include("PHPAuth/languages/en_GB.php");
include("PHPAuth/Config.php");
include("PHPAuth/Auth.php");

$dbh = new PDO( "mysql:host=localhost;dbname=FSOFT_elements", "root", "" );
$stages = intval($_POST['stages']);
for($i = 1; $i <= $stages; $i++)
{
		$stage = $i;
		$throughput = empty($_POST['stage'.$stage.'0']) ? NULL : $_POST['stage'.$stage.'0'];
		$loss = empty($_POST['stage'.$stage.'1']) ? NULL : $_POST['stage'.$stage.'1'];
		$error = empty($_POST['stage'.$stage.'2']) ? NULL : $_POST['stage'.$stage.'2'];
		$latency = empty($_POST['stage'.$stage.'3']) ? NULL : $_POST['stage'.$stage.'3'];
		$jitter = empty($_POST['stage'.$stage.'4']) ? NULL : $_POST['stage'.$stage.'4'];
		$out_of_order = empty($_POST['stage'.$stage.'5']) ? NULL : $_POST['stage'.$stage.'5'];
		$cores = empty($_POST['stage'.$stage.'6']) ? NULL : $_POST['stage'.$stage.'6'];
		$cpu_speed = empty($_POST['stage'.$stage.'7']) ? NULL : $_POST['stage'.$stage.'7'];
		$ram = empty($_POST['stage'.$stage.'8']) ? NULL : $_POST['stage'.$stage.'8'];
		$gpu_make = empty($_POST['stage'.$stage.'9']) ? NULL : $_POST['stage'.$stage.'9'];
		$gpu_model = empty($_POST['stage'.$stage.'10']) ? NULL : $_POST['stage'.$stage.'10'];
		$gpu_ram = empty($_POST['stage'.$stage.'11']) ? NULL : $_POST['stage'.$stage.'11'];
		$type = empty($_POST['stage'.$stage.'12']) ? NULL : $_POST['stage'.$stage.'12'];
		$read_speed = empty($_POST['stage'.$stage.'13']) ? NULL : $_POST['stage'.$stage.'13'];
		$write_speed = empty($_POST['stage'.$stage.'14']) ? NULL : $_POST['stage'.$stage.'14'];
		$size = empty($_POST['stage'.$stage.'15']) ? NULL : $_POST['stage'.$stage.'15'];
		$sql = "INSERT INTO sspec (name, workflow, stage, throughput, loss, error, latency, jitter, out_of_order, cores, cpu_speed, ram, gpu_make, gpu_model, gpu_ram, type, read_speed, write_speed, size) VALUES ('".$_POST['sspec']."', '".$_POST['workflow']."', '".$stage."', '".$throughput."', '".$loss."', '".$errors."', '".$latency."', '".$jitter."', '".$out_of_order."', '".$cores."', '".$cpu_speed."', '".$ram."', '".$gpu_make."', '".$gpu_model."', '".$gpu_ram."', '".$type."', '".$read_speed."', '".$write_speed."', '".$size."')";
		$sth = $dbh->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Federated Security Framework Create Qspec</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
  </head>
  <body>
    <!-- page content -->

    <div>
      <?php
      	echo 'Qspec Added<br>';
        echo '<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=\'home.php\'"><span class="ui-button-text">Return Home</span></button>';
      ?>
    </div>

  </body>
</html>
