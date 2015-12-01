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
	$info = array();
	$stages = 3;
	echo '<table style="width:400px">
	<tr>
	<th>Property / Stage #</th>';
	for($i = 1; $i <= $stages; $i++)
			{
				echo "<th>".$i."</th>";
			}
	echo '</tr>';
	if($q == 1) //populate form feilds
	{
		//loop stages and radio boxes
		echo '<tr>
			<td>AC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AU</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SI</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AT</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IR</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PE</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PL</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PS</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>RA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>';
		//make button to submit to server
		echo '</table>
		<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=""><span class="ui-button-text">Add Sspec</span></button>';
	}else //get workflow information from DB
	{
		echo '<tr>
			<td>AC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AU</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SI</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AT</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IR</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PE</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PL</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PS</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>RA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>';
		echo "</table>";
	}
echo '<h2 class="demoHeaders">Qspecs(s)</h2>
     <select id="qspec_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="">
		<option value="" selected="selected">Select a Qspec</option>
		<option value="1">Create a Qspec</option>
		<option value="1">Qspec1</option>
		<option value="2">Qspec2</option>
		<option value="3">Qspec3</option>
	</select>';
?>
</body>
</html>