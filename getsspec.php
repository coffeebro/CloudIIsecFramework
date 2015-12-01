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
	
	echo '<table style="width:400px">
	<tr>
	<th>Name</th>
	<th>Stages</th>
	<th>Origin</th>
	</tr>';

	$q = intval($_GET['q']);
	$db = new PDO("mysql:host=localhost;dbname=FSOFT_elements", "root", "");
		$sql = "SELECT * FROM workflows WHERE name = ".$q;
		echo '<tr>';
		foreach ( $db->query($sql) as $row )
		{
			echo "<td>".$row['name']."</td><td>".$row['stages']."</td><td>".$row['origin']."</td>";
		}
		echo '</tr>';

	if($q == 1) //populate form feilds
	{
		echo '
		<tr>
		<td><input type="text" name="name"></td>
		<td><input type="text" name="stages"></td>
		<td><input type="text" name="origin" value="test"></td>
		</tr>';
		//make button to submit to server
		echo '</table>
		<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=""><span class="ui-button-text">Add WorkFlow</span></button>';
	}else //get workflow information from DB
	{
		/*while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['FirstName'] . "</td>";
			echo "<td>" . $row['LastName'] . "</td>";
			echo "<td>" . $row['Age'] . "</td>";
			echo "<td>" . $row['Hometown'] . "</td>";
			echo "<td>" . $row['Job'] . "</td>";
			echo "</tr>";
		}*/
		echo "</table>";
		echo '<h2 class="demoHeaders">Sspec(s)</h2>
		<select id="sspec_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadQspecDoc(this.value)">
			<option value="" selected="selected">Select a Sspec</option>
			<option value="1">Create a Sspec</option>
			<option value="1">Sspec1</option>
			<option value="2">Sspec2</option>
			<option value="3">Sspec3</option>
		</select>';
	}
?>
</body>
</html>