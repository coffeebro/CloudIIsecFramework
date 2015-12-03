<?php

  include("PHPAuth/Config.php");
  include("PHPAuth/Auth.php");

  $dbh = new PDO("mysql:host=localhost;dbname=phpauth", "root", "");
  $config = new PHPAuth\Config($dbh);
  $auth   = new PHPAuth\Auth($dbh, $config);
  $workflow = "";
  $i = 1;

  if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();
  }
  
  $uid = $auth->getSessionUID( $_COOKIE[$config->cookie_name] );
  $data = $auth->getUser( $uid );
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
	
	//output stage numbers
	$q = intval($_GET['q']);
	
	$stages;
	$workflow;
	$info = array();
	//get workflow from name of sspec
	$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
	$sql = "SELECT * FROM qspec WHERE name = '".$_GET['q']."'";
	foreach ( $db->query($sql) as $row )
	{
		$workflow = $row['workflow'];
	}
	$sql = "SELECT stages FROM workflows WHERE name = '".$workflow."'";
	foreach ( $db->query($sql) as $row )
	{
		$stages = $row['stages'];
	}
	echo '<table style="width:600px">
	<tr>
	<th>Stage #/ Property</th>
			<th>Throughput</th>
			<th>Loss</th>
			<th>Errors</th>
			<th>Latency</th>
			<th>Jitter</th>
			<th>Out Of Order</th>
			<th>Cores</th>
			<th>CPU speed</th>
			<th>RAM</th>
			<th>GPU Make</th>
			<th>GPU Model</th>
			<th>GPU Ram</th>
			<th>HD type</th>
			<th>Read Speed</th>
			<th>Write Speed</th>
			<th>Size</th>
	</tr>';
	echo $_GET['r'];
	if($_GET['q'] == '0') //populate form feilds
	{ 
	  //add qspec
	}
	else //get workflow information from DB
	{		
	    //loop stages
		//get Data from DB
		$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
		for($i = 1; $i <= $stages; $i++)
		{
			echo '<tr><td>'.$i.'</td>';
			$sql = "SELECT * FROM qspec WHERE name = '".$_GET['q']."' AND stage ='".$i."'";
			//echo $sql;
			foreach ( $db->query($sql) as $row )
			{
				echo '<td>'.$row['throughput'].'</td>';
				echo '<td>'.$row['loss'].'</td>';
				echo '<td>'.$row['errors'].'</td>';
				echo '<td>'.$row['latency'].'</td>';
				echo '<td>'.$row['jitter'].'</td>';
				echo '<td>'.$row['out_of_order'].'</td>';
				echo '<td>'.$row['cores'].'</td>';
				echo '<td>'.$row['cpu_speed'].'</td>';
				echo '<td>'.$row['ram'].'</td>';
				echo '<td>'.$row['gpu_make'].'</td>';
				echo '<td>'.$row['gpu_model'].'</td>';
				echo '<td>'.$row['gpu_ram'].'</td>';
				echo '<td>'.$row['type'].'</td>';
				echo '<td>'.$row['read_speed'].'</td>';
				echo '<td>'.$row['write_speed'].'</td>';
				echo '<td>'.$row['size'].'</td>';
			}
			echo '</tr>';
		}
		echo "</table>";
		//gereration of qspec selection
		echo '<h2 class="demoHeaders">Reseource(s)</h2>
		 <select id="qspec_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="">
			<option value="" selected="selected">Select a Resource</option>';
		$i = 0;
		$dbp = new PDO("mysql:host=localhost;dbname=FSOFT_performance", "root", "");
		$sql = "SELECT * FROM resources";
		foreach ( $dbp->query($sql) as $row ) {
			echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
			$i++;
		}
			
		echo '</select>';
	}
?>
</body>
</html>