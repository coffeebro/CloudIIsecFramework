<?php

  include("PHPAuth/Config.php");
  include("PHPAuth/Auth.php");

  $dbh = new PDO("mysql:host=localhost;dbname=phpauth", "root", "");
  $config = new PHPAuth\Config($dbh);
  $auth   = new PHPAuth\Auth($dbh, $config);
  $app = "";

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
	$q = intval($_GET['q']);
	
//iterate through the workflows
	echo '<h2 class="demoHeaders">Workflow(s)</h2>
		 <select id="workflow_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadSspecDoc(this.value,'.$q.')">
			<option value="" selected="selected">Select a workflow</option>';
		$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
		$sql = "SELECT * FROM applications WHERE aid = ".$q;
		foreach ( $db->query($sql) as $row ) {
		  $app = $row['name'];
		}
		echo '<option value="'.$app.'">Create a Workflow</option>';
	

		$sql = "SELECT * FROM workflows WHERE application = '".$app."' AND (origin = '".$data['email']."' OR public = 1)";
		$i = 1;
		foreach ( $db->query($sql) as $row )
		{
			echo '<option value="'.$row['wid'].'">'.$row['name'].'</option>';
			$i += 1;
		}
  echo '</select>';
?>
</body>
</html>