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
	//$stages = array();
	//comment
	$stages = 1;
	$workflow;
	$info = array();
	//get workflow from name of sspec
	$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
	$sql = "SELECT * FROM sspec WHERE name = '".$_GET['q']."'";
	foreach ( $db->query($sql) as $row )
	{
		$workflow = $row['workflow'];
	}
	$sql = "SELECT stages FROM workflows WHERE wid = '".$_GET['r']."'";
	foreach ( $db->query($sql) as $row )
	{
		$stages = $row['stages'];
	}
	if($q == 0)
	{
		echo '<form action="createsspec.php" method="POST">
		<input type="hidden" name="stages" value="'.$stages.'">
		Sspec Name:
		<input type="text" name="sspec">';
	}
	echo '<table style="width:600px">
	<tr>
	<th>Stage #/ Property</th>
			<th>AC</th>
			<th>AU</th>
			<th>CA</th>
			<th>IA</th>
			<th>SA</th>
			<th>SC</th>
			<th>SI</th>
			<th>AT</th>
			<th>CM</th>
			<th>CP</th>
			<th>IR</th>
			<th>MA</th>
			<th>MP</th>
			<th>PE</th>
			<th>PL</th>
			<th>PM</th>
			<th>PS</th>
			<th>RA</th>
	</tr>';
	
	if($_GET['q'] == '0') //populate form feilds
	{
		//loop stages and radio boxes
		echo '<tr>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<tr><td>'.$i.'</td>';
				for($j = 0; $j < 18; $j++)
				{
					echo '<td>
							<div id="radioset">
								<input type="radio" name="stage'.$i.''.$j.'" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" name="stage'.$i.''.$j.'" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" name="stage'.$i.''.$j.'" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
				}
			}
		echo '</tr>';
		
		//make button to submit to server
		echo '</table>
		<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=""><span class="ui-button-text">Add Sspec</span></button>
		</form>';	
	}else //get workflow information from DB
	{		
	    //loop stages
		//get Data from DB
		$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
		for($i = 1; $i <= $stages; $i++)
		{
			echo '<tr><td>'.$i.'</td>';
			$sql = "SELECT * FROM sspec WHERE name = '".$_GET['q']."' AND stage ='".$i."'";
			//echo $sql;
			foreach ( $db->query($sql) as $row )
			{
				echo '<td>'.$row['ac'].'</td>';
				echo '<td>'.$row['au'].'</td>';
				echo '<td>'.$row['ca'].'</td>';
				echo '<td>'.$row['ia'].'</td>';
				echo '<td>'.$row['sa'].'</td>';
				echo '<td>'.$row['sc'].'</td>';
				echo '<td>'.$row['si'].'</td>';
				echo '<td>'.$row['at'].'</td>';
				echo '<td>'.$row['cm'].'</td>';
				echo '<td>'.$row['cp'].'</td>';
				echo '<td>'.$row['ir'].'</td>';
				echo '<td>'.$row['ma'].'</td>';
				echo '<td>'.$row['mp'].'</td>';
				echo '<td>'.$row['pe'].'</td>';
				echo '<td>'.$row['pl'].'</td>';
				echo '<td>'.$row['pm'].'</td>';
				echo '<td>'.$row['ps'].'</td>';
				echo '<td>'.$row['ra'].'</td>';
			}
			echo '</tr>';
		}
		echo "</table>";
		//gereration of qspec selection
		echo '<h2 class="demoHeaders">Qspecs(s)</h2>
		 <select id="qspec_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadResourcesDoc(this.value)">
			<option value="" selected="selected">Select a Qspec</option>
			<option value="0">Create a Qspec</option>';
		$i = 1;
		$sql = "SELECT DISTINCT name FROM qspec WHERE workflow = '".$workflow."'";
		foreach ( $db->query($sql) as $row ) {
			echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
			$i++;
		}
			
		echo '</select>';
	}

?>
</body>
</html>