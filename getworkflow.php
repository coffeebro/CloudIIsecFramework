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
		 <select id="workflow_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadSspecDoc(this.value)">
			<option value="" selected="selected">Select a workflow</option>
			<option value="1">Create a Workflow</option>';
	$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
		$sql = "SELECT * FROM workflows WHERE application = ".$q." and public = 1";
		$i = 1;
		foreach ( $db->query($sql) as $row )
		{
			echo "<option value=".$row['name'].">".$row['name']."</option>";
			$i += 1;
		}
	echo '</select>';
?>
</body>
</html>